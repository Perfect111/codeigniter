<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends Dashboard_Controller {

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

	public function projects(){
		$template = $this->template;
		$data['assets_uri'] = base_url().$this->config->item('dashboard_assets')."/";
		$data['template'] = $template;
		
		$data['category'] = $this->My_Model->get_model_data($table_name='category');
		$data['job_title'] = $this->My_Model->get_model_data($table_name='job_title');
		// $this->echo_array($data['job_title']);exit();

		$data['content'] = $template."/activity/projects/main";
		$this->load->view($template."/index", $data);
	}

	public function contracts(){
		$template = $this->template;
		$data['assets_uri'] = base_url().$this->config->item('dashboard_assets')."/";
		$data['template'] = $template;
		
		$data['category'] = $this->My_Model->get_model_data($table_name='category');
		$data['job_detail'] = $this->My_Model->get_model_data($table_name='job_detail');
		$data['user'] = $this->My_Model->get_model_data($table_name='user');
		
		// $this->echo_array($data['user']);exit();

		$data['content'] = $template."/activity/contracts/main";
		$this->load->view($template."/index", $data);
	}

	public function send_message()
	{
		echo json_encode("success");
	}

	 public function send_mail() {
		
        $from_email = "email@example.com";
        $to_email = $this->input->post('email');
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent","You have encountered an error");
        $this->load->view('contact_email_form');

    }
	public function echo_array($array)
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

}