<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Model extends CI_Model{


	public function insert($table_name, $data_array){
		$return_data = array();
		if($this->db->insert($table_name, $data_array)){
			$return_data['status'] = true;
			$return_data['msg'] = "Added successfully!";
		}else{
			$return_data['status'] = false;
			$return_data['status'] = "Operatoin Fail";
		}

		return $return_data;
	}

	public function update($table_name, $data_array, $id){
		$return_data = array();
		if($this->db->update($table_name, $data_array, array('id' => $id))){
			//echo $this->db->last_query();die();
			$return_data['status'] = true;
			$return_data['msg'] = "Updated successfully!";
		}else{
			$return_data['status'] = false;
			$return_data['status'] = "Operatoin Fail";
		}

		return $return_data;
	}

	public function commonEdit($table_name, $id, $data_array){
		$return_data = array();
		if($this->db->update($table_name, $data_array, array('id' => $id))){
			$return_data['status'] = true;
			$return_data['msg'] = "Added successfully!";
		}else{
			$return_data['status'] = false;
			$return_data['status'] = "Operatoin Fail";
		}

		return $return_data;
	}


	public function get_model_data($table_name, $sort='asc'){
		$return_array = array();
		// $this->db->order_by('tab_name', $sort);
		$result = $this->db->get_where($table_name, array('is_deleted' => 0));

		if($result->num_rows() > 0){
			$return_array = $result->result_array();
		}

		return $return_array;
	}

	public function commonDeleteConfirm($id, $table_name){
		$return_result = array();

		if($this->db->update($table_name, 
			array('is_deleted' => 1), array('id' => $id))){

			
				$return_result['status'] = true;
				$return_result['msg'] = $table_name.' is deleted successfully';
			
		}else{
				$return_result['status'] = false;
				$return_result['msg'] = $table_name.' deletion fail';
			}

			return $return_result;
	}
}