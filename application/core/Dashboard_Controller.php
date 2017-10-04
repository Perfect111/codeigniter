<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller {
	
	public function __construct(){
		parent::__construct ();
		
		$this->load->config('dashboard');
		$this->load->helper('portal/authentication');
		$this->load->helper('portal/dashboard_main');
		$this->load->library('portal/authentication');

		$user = get_user_id();

		if (! $user) {
            $request_url = uri_string();
            $this->session->set_userdata('request_url', $request_url);            
            redirect($this->config->item('login_url'));
        }
		
		$this->template = $this->config->item('dashboard_template');
	}
	

	

	public function checklogin(){

	}

	

	public function edit(){
		die("parent class");
	}
}