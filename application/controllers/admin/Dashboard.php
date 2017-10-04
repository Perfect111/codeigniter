<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public $current_class_name;
	public $assets_uri;
	
	public function __construct(){
		parent::__construct ();
		
		$this->load->config('dashboard');
		$this->load->helper('portal/authentication');
		$this->load->library('portal/authentication');
		
		$this->template = $this->config->item('dashboard_template');
		$this->assets_uri = base_url().$this->config->item('dashboard_assets')."/";
		$this->current_class_name = strtolower(__CLASS__);
	}
	

	/*public function index(){
		$template = $this->template;
		$data['assets_uri'] = base_url().$this->config->item('dashboard_assets')."/";
		$data['template'] = $template;
		$data['content'] = $template."/content";
		$this->load->view($template."/index", $data);
	}*/

	public function index(){
		$post = array();
		$post = $this->input->post();

		$redirect_path = $this->config->item('redirect_path_after_login');
		$redirect_login_page = $this->config->item('login_url');
		if(empty($post)){
			if ($this->authentication->checkUserLoggedIn()) {
                redirect(site_url($redirect_path));
            }else{
            	redirect(site_url($redirect_login_page));
            } 
		}else{ 
			$this->authentication->checkAuthentication($post, $ip=0);
		}
	}

	public function home(){

		$redirect_login_page = $this->config->item('login_url');

		if (!$this->authentication->checkUserLoggedIn()) {
            redirect(site_url($redirect_login_page));
        }


		$template = $this->template;
		$data['assets_uri'] = base_url().$this->config->item('dashboard_assets')."/";
		$data['template'] = $template;
		$data['content'] = $template."/content";
		$this->load->view($template."/index", $data);
	}

	public function login(){
		$redirect_path = $this->config->item('redirect_path_after_login');

		if ($this->authentication->checkUserLoggedIn()) {
            redirect(site_url($redirect_path));
        }

		$template = $this->template;
		$data['assets_uri'] = base_url().$this->config->item('dashboard_assets')."/";
		$data['template'] = $template;
		$data['content'] = $template."/authentication/login";
		$this->load->view($template."/authentication/login", $data);
	}

	public function logout(){
		$redirect_login_page = $this->config->item('login_url');
		session_destroy();


            redirect(site_url($redirect_login_page));
       
	}

	
}