<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_Settings extends Dashboard_Controller {

	public $current_class_name;
	public $assets_uri;
	
	public function __construct(){
		parent::__construct ();
		
		$this->load->config('dashboard');
		$this->load->model('My_Model');
		$this->load->model('Settings_Model');
		
		$this->template = $this->config->item('dashboard_template');
		$this->assets_uri = base_url().$this->config->item('dashboard_assets')."/";

		$this->current_class_name = strtolower(__CLASS__);
	}


	

	public function language(){
		$template = $this->template;
		$data['assets_uri'] = base_url().$this->config->item('dashboard_assets')."/";
		$data['template'] = $template;
		$data['content'] = $template."/portal_settings/language";

		$data['all_language'] = $this->Settings_Model->get_all_language_data($table_name="languages");

		$this->load->view($template."/index", $data);
	}

	public function add_language(){
		$post = $this->input->post();
		$return_result = $this->Settings_Model->insert("languages", $post);

		echo json_encode($return_result);
	}

	public function delete_language_data(){

		$data['lang_id'] = $this->input->post('id');

		$result['html'] = $this->load->view($this->template."/portal_settings/delete_lang", $data, true);

		echo json_encode($result);

		//$this->Settings_Model->delete_language_data($lang_id);
	}

	public function confirm_delete_language(){
		$lang_id = $this->input->post('id');
		$return_result = $this->Settings_Model->confirm_delete_language($lang_id);
		echo json_encode($return_result);
	}

	public function get_edit_language_data(){
		$lang_id = $this->input->post('id');
		$lang_name = $this->input->post('lang_name');

		$data['lang_id'] = $lang_id;
		$data['lang_name'] = $lang_name;

		//$data['all_lang_table'] = $this->My_Model->get_model_data($table_name="lang_tables");


		$data['all_lang_table'] = $this->Settings_Model->get_edit_language_data($lang_id);
		//print_r($data['all_lang_table']);die();


		$return_data['text'] = $this->load->view($this->template."/portal_settings/edit_lang", $data, true);

		echo json_encode($return_data);

	}


	public function get_edit_translatoin_data(){
		$lang_table_id = $this->input->post('lang_table_id');
		$data_lang_id = $this->input->post('data_lang_id');


		$data['data_lang_name'] = $this->input->post('data_lang_name');

		$data['all_translation'] = $this->Settings_Model->get_edit_translatoin_data($lang_table_id, $data_lang_id);
		//print_r($data['all_translation']); die();

		$return_data['text'] = $this->load->view($this->template."/portal_settings/edit_translation", $data, true);



		echo json_encode($return_data);

		


	}


	public function edit_translation_data(){
		$ids = $this->input->post('ids');
		$trans_string = $this->input->post('trans_string');

		$data['status'] = $this->Settings_Model->edit_translation_data($ids, $trans_string);

		echo json_encode($data);

	}



	/* ====================================================================
	* ++++++++++++++++++++++++Service section++++++++++++++++++++++++++++++
	*======================================================================
	*/

	public function service(){
		
		$data['content'] = $this->template."/portal_settings/service/main";
		$data['main_category'] = $this->Settings_Model->getAllMainCat();
		$data['all_category'] = $this->Settings_Model->getAllCat();
		$data['service_listing'] = $this->Settings_Model->getServiceListing($data['main_category']);

		//print_r($data['service_listing']); die();
		$this->load->view($this->template."/index", $data);
	}


	/*
	* Add Main Category
	*/

	public function addMainCat(){
		
		$cat_names = $this->input->post('name');		
		foreach ($_FILES['cat_image']['name'] as $name => $value){
				if(is_uploaded_file($_FILES['cat_image']['tmp_name'][$name])) {
					
				$sourcePath = $_FILES['cat_image']['tmp_name'][$name];
				//$imgContent = addslashes(file_get_contents($image));
				$targetPath = FCPATH."uploads/images/category/".$_FILES['cat_image']['name'][$name];
				if(move_uploaded_file($sourcePath,$targetPath)) {
						$file_name[] = $_FILES['cat_image']['name'][$name];
					}
			}
		}

		$return_result = $this->Settings_Model->addMainCat($cat_names, $main_cat_id=0, $file_name);
	

		echo json_encode($return_result);
		redirect('admin/Portal_Settings/service');
	}

	/*
	* Edit Main Category
	*/

	public function editMainCat(){
		$id = $this->input->post('id');
		$cat_name = $this->input->post('name');
		$file_name = array();

		
			foreach ($_FILES['cat_image']['name'] as $name => $value){
					if(is_uploaded_file($_FILES['cat_image']['tmp_name'][$name])) {
						
					$sourcePath = $_FILES['cat_image']['tmp_name'][$name];
					//$imgContent = addslashes(file_get_contents($image));
					$targetPath = FCPATH."uploads/images/category/".$_FILES['cat_image']['name'][$name];
					if(move_uploaded_file($sourcePath,$targetPath)) {
							$file_name[] = $_FILES['cat_image']['name'][$name];
						}
				}
			}
		

		//print_r($file_name); die();
		$data_array['name'] = $cat_name;
		

		if(!empty($file_name)){
			$data_array['image'] = $file_name[0];
		}

		$this->My_Model->update($table_name="category", 
			$data_array, $id);
	
		//print_r($data_array); die();
		echo json_encode($return_result);
		redirect('admin/Portal_Settings/service');
	}


	/*
	* Add addSubCat
	*/

	public function addSubCat(){
		$main_cat_id = $this->input->post('main_cat_id');
		$cat_names = $this->input->post('cat_names');

		$return_result = $this->Settings_Model->addMainCat($cat_names, $main_cat_id);

		echo json_encode($return_result);
	}

	/*
	* Show pop up for edit subCat
	*/
	public function showEditSubCatPopup(){
		$data['id'] = $this->input->post('id');
		$data['root_cat_id'] = $this->input->post('main_cat_id');
		$data['sub_cat_name'] = $this->input->post('sub_cat_name');
		$data['main_category'] = $this->Settings_Model->getAllMainCat();

		$return_result['html'] = $this->load->view($this->template."/portal_settings/service/show_edit_subcat_popup", $data, true);

		echo json_encode($return_result);
	}

	/*
	* Show pop for add SubCate from pop up list
	*/

	public function showAddSubCatPopup(){
		$data['root_cat_id'] = $this->input->post('root_cat_id');
		$data['main_category'] = $this->Settings_Model->getAllMainCat();

		$return_result['html'] = $this->load->view($this->template."/portal_settings/service/add_subcat_from_popup", $data, true);

		echo json_encode($return_result);
	}	

	/*
	* Add keywords
	*/

	public function addKeword(){
		$cat_id = $this->input->post('cat_id');
		$main_cat_id = $this->input->post('main_cat_id');

		$keywords_name = $this->input->post('keywords_name');

		$return_result = $this->Settings_Model->addKeword($keywords_name, $cat_id, $main_cat_id);

		echo json_encode($return_result);
	}

	/*
	* show SubCatPopUp
	*/

	public function showSubCatPopUp(){
		$root_cat_id = $this->input->post('root_cat_id');

		$data['root_cat_id'] = $root_cat_id;
		$data['sub_category'] = $this->Settings_Model->getTotalSubcatByRootCat($root_cat_id);
		//$data['keywords'] = $this->Settings_Model->getTotalKeywordByCat($root_cat_id);

		$return_result['html'] = $this->load->view($this->template."/portal_settings/service/sub_cat_popup", $data, true);

		echo json_encode($return_result);


	}


	/*
	* show KeywordPopUp
	*/

	public function showKeywordPopUp(){
		$root_cat_id = $this->input->post('root_cat_id');

		$data['keywords'] = $this->Settings_Model->getTotalKeywordByCat($root_cat_id);

		$return_result['html'] = $this->load->view($this->template."/portal_settings/service/keywords_popup", $data, true);

		echo json_encode($return_result);


	}


	/* ====================================================================
	* ++++++++++++++++++++++++ Company Types section+++++++++++++++++++++++
	*======================================================================
	*/

	public function company_type(){
		$data['content'] = $this->template."/portal_settings/company_type/main";
		$data['model_data'] = $this->My_Model->get_model_data('company_type');
		$this->load->view($this->template."/index", $data);
	}

	public function edit_company_type(){
		$post = $this->input->post();

		$id = $post['id'];
		unset($post['id']);
		$table_name = "company_type";
		$data_array = $post;

		$return_data = $this->My_Model->commonEdit($table_name, $id, $data_array);

		echo json_encode($return_data);
	}


	/* ====================================================================
	* ++++++++++++++++++++++++ Policy and Terms +++++++++++++++++++++++++++
	*======================================================================
	*/

	public function policy_terms(){
		$data['content'] = $this->template."/portal_settings/policy_terms/main";
		//$data['model_data'] = $this->My_Model->get_model_data('company_type');
		$this->load->view($this->template."/index", $data);
	}
}