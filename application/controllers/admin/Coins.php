<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coins extends Dashboard_Controller {

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

	public function create_coins(){
		$template = $this->template;
		$data['assets_uri'] = base_url().$this->config->item('dashboard_assets')."/";
		$data['template'] = $template;
		$data['all_coins'] = $this->My_Model->get_model_data($table_name='coins');
		
		$data['content'] = $template."/coins/main";
		$this->load->view($template."/index", $data);
	}
}