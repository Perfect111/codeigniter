<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonController extends CI_Controller {


	public function __construct(){
		parent::__construct ();

		$this->load->config('dashboard');
		$this->load->model('My_Model');

		$this->template = $this->config->item('dashboard_template');
		$this->assets_uri = base_url().$this->config->item('dashboard_assets')."/";

	}

	public function commonAdd(){
		$table_name = $this->input->post('table_name');
		$post_data = $this->input->post();
		unset($post_data['table_name']);

		$status = $this->My_Model->insert($table_name, $post_data);

		echo json_encode($status);
	}

	public function commonUpdate(){
		$table_name = $this->input->post('table_name');
		$id = $this->input->post('id');
		$post_data = $this->input->post();

		unset($post_data['table_name']);
		unset($post_data['id']);

		$status = $this->My_Model->update($table_name, $post_data, $id);

		echo json_encode($status);
	}

	

	public function commonDelete(){
		$data['id'] = $this->input->post('id');
		$data['table_name'] = $this->input->post('table_name');

		$result['html'] = $this->load->view($this->template."/common_popup", $data, true);

		echo json_encode($result);
	}


	public function commonDeleteConfirm(){
		$id = $this->input->post('id');
		$table_name = $this->input->post('table_name');


		$return_result = $this->My_Model->commonDeleteConfirm($id, $table_name);
		echo json_encode($return_result);
	}

}