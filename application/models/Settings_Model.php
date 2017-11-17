<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_Model extends CI_Model{

	/*
	* This function for inserting language
	*/

	public function insert($table_name, $data_array){
		$return_result = array();

		$result = $this->db->get_where($table_name, array('iso' => $data_array['iso']));
		if($result->num_rows() > 0){
			$return_result['status'] = true;
			$return_result['msg'] = 'This language already exist';
		}else{

			if($this->db->insert($table_name, $data_array)){

				$lang_id = $this->db->insert_id();
				// Update translation table, for this new language
				$this->update_translation_table_with_new_language($lang_id);
				$return_result['status'] = true;
				$return_result['msg'] = 'Language is inserted successfully!';
			}else{
				$return_result['status'] = true;
				$return_result['msg'] = 'Language is inserton failed!';

			}
		}	

		return $return_result;
	}

	public function confirm_delete_language($lang_id){
		$return_result = array();

		if($this->db->update("languages", 
			array('is_deleted' => 1), array('id' => $lang_id))){

			
				$return_result['status'] = true;
				$return_result['msg'] = 'Language is deleted successfully';
			
		}else{
				$return_result['status'] = false;
				$return_result['msg'] = 'Language deletion fail';
			}

			return $return_result;
	}

	public function update_translation_table_with_new_language($lang_id){
		$insert_array = array();

		$result = $this->db->get_where("translation", array('language_id' => 1, 'is_deleted' => 0));
		
		if($result->num_rows() > 0){
			foreach($result->result_array() as &$row){
				$raw_data[] = array();

				unset($row['id']);

				$row['language_id'] = $lang_id;
				//$raw_data['lang_table_id'] = $row['lang_table_id'];
				//$raw_data['eng_string'] = $row['eng_string'];
				$row['translated_string'] = '';

				$this->db->insert("translation", $row);

				//$insert_array[] = $raw_data;

			}
		}

		//print_r($insert_array);


		//$this->db->insert_batch("translation", $insert_array);
		//echo $this->db->last_query(); die();
	}

	/*
	* This function for get language data
	*/
	public function get_all_language_data($table_name){
		$return_data = array();

		$query = "SELECT languages.* , count(translation.language_id) as total , count(NULLIF(translation.translated_string, '')) as translated FROM languages
				LEFT JOIN translation on languages.id = translation.language_id
				WHERE languages.is_deleted = 0
				group by languages.id ORDER by languages.id asc
				";

		$result = $this->db->query($query);

		if($result->num_rows() > 0){
			foreach($result->result_array() as $row){
				if($row['total'] > 0){
					$row['percent'] = intval(($row['translated'] / $row['total']) * 100);
				}else{
					$row['percent'] = 0;
				}
				$return_data[] = $row;
			}
		}

		return $return_data;
	}


	/*
	* This function for get data from lang_tble
	*/

	public function get_edit_language_data($lang_id){
		$return_data = array();
		$total_result_data = array();

		$query = "SELECT lang_tables.* , count(translation.lang_table_id) as total , count(NULLIF(translation.translated_string, '')) as translated FROM lang_tables
				LEFT JOIN translation on lang_tables.id = translation.lang_table_id
				WHERE translation.language_id = {$lang_id}

				group by lang_tables.id ORDER by lang_tables.id asc";

				$result = $this->db->query($query);

				foreach($result->result_array() as $row){
					if($row['total'] > 0){
						$row['percent'] = intval(($row['translated'] / $row['total']) * 100);
					}
					$return_data[] = $row;
				}

			return $return_data;

	}

	/*
	* This function get data from translation table
	*/

	public function get_edit_translatoin_data($lang_table_id, $data_lang_id){
		$return_data = array();

		$result = $this->db->get_where("translation", array('lang_table_id' => $lang_table_id, 'language_id' => $data_lang_id, 'is_deleted' => 0));
		//echo $this->db->last_query();
		$return_data = $result->result_array();

		return $return_data;
	}

	/*
	* This function Update translation table
	*/

	public function edit_translation_data($ids, $trans_string){
		$update_data = array();

		foreach($ids as $key => $id){
			$raw_data = array();

			$raw_data['id'] = $id;
			$raw_data['translated_string'] = $trans_string[$key];

			$update_data[] = $raw_data;
		}

		if($this->db->update_batch("translation", $update_data, 'id')){
			return true;
		}else{
			return false;
		}
	}



	/*
	* Add Main Category
	*/

	public function addMainCat($cat_names, $main_cat_id=0, $file_name=0){
		//print_r($file_name);die();
		$insert_data = array();
		$return_result = array();

		$i = 0;
		foreach($cat_names as $cat){
			$raw_data = array();

			// check category exist
			$exists = $this->db->get_where('category', array('name' => $cat, 'is_deleted' => 0));
			if($exists->num_rows() > 0){
				continue;
			}

			$raw_data['parent_id'] = $main_cat_id;
			$raw_data['name'] = $cat;
			$raw_data['image'] = $file_name[$i];
			$raw_data['description'] = '';

			$insert_data[] = $raw_data;
			$i++;
		}

//print_r($insert_data); die();
		if(count($insert_data) > 0){
			if($this->db->insert_batch('category', $insert_data)){
				$return_result['status'] = true;
				$return_result['msg'] = 'Categories are added successfully';
			}else{
				$return_result['status'] = false;
				$return_result['msg'] = 'Categories are not added!';
			}
		}

		return $return_result;
	}

	/*
	* Get all main category
	*/

	public function getAllMainCat(){
		$return_result = array();
		$result = $this->db->get_where("category", array('parent_id' => 0, 'is_deleted' => 0));

		if($result->num_rows() > 0){
			$return_result = $result->result_array();
		}

		return $return_result;
	}

	public function getAllCat(){
		$return_result = array();

		$result = $this->db->get_where("category", array('parent_id' => 0, 'is_deleted' => 0));

		if($result->num_rows() > 0){
			foreach($result->result_array() as $row){
				$parent_id = $row['id'];
				$parent_name = $row['name'];

				$sub_cate = $this->db->get_where("category", array('parent_id' => $parent_id, 'is_deleted' => 0));
				if($sub_cate->num_rows() > 0){
					
					$return_result[$parent_id."#".$parent_name] = $sub_cate->result_array();
				}
			}
		}

		

		return $return_result;
	}

	/*
	* Get Service Listing
	*/
	public function getServiceListing($all_category){
		$return_result = array();

		foreach ($all_category as $key => $cat) {
			$raw_data = array();

				$id = $cat['id'];

				$raw_data['id'] = $id;
				$raw_data['name'] = $cat['name'];
				$raw_data['image'] = $cat['image'];
				$raw_data['sub_cat_count'] = $this->getTotalSubcatByRootCat($id, $return_count=1);
				$raw_data['keyword_count'] = $this->getTotalKeywordByCat($id, $return_count=1);

				$return_result[] = $raw_data;
			}

			return $return_result;
		}
	
	public function getTotalSubcatByRootCat($root_cat_id, $return_count=0){
		$result = $this->db->get_where('category', 
			array('parent_id' => $root_cat_id, 'is_deleted' => 0));
		if($return_count == 1)
			return $result->num_rows();
		else
			return $result->result_array();
	}

	public function getTotalKeywordByCat($root_cat_id, $return_count=0){
		$result = $this->db->get_where('keywords', 
			array('maincat_id' => $root_cat_id, 'is_deleted' => 0));

		if($return_count == 1)
			return $result->num_rows();
		else
			return $result->result_array();
	}

	/*
	* Add keywords
	*/

	public function addKeword($keywords_name, $cat_id, $main_cat_id){

		$insert_data = array();
		$return_result = array();

		foreach($keywords_name as $keyword){
			$raw_data = array();

			// check category exist
			$exists = $this->db->get_where('keywords', 
				array('name' => $keyword, 'category_id' => $cat_id, 'is_deleted' => 0));
			if($exists->num_rows() > 0){
				continue;
			}

			$raw_data['category_id'] = $cat_id;
			$raw_data['maincat_id'] = $main_cat_id;
			$raw_data['name'] = $keyword;
			

			$insert_data[] = $raw_data;

		}

		if(count($insert_data) > 0){
			if($this->db->insert_batch('keywords', $insert_data)){
				$return_result['status'] = true;
				$return_result['msg'] = 'Categories are added successfully';
			}else{
				$return_result['status'] = false;
				$return_result['msg'] = 'Categories are not added!';
			}
		}

		return $return_result;
	}


	
}