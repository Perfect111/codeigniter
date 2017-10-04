<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends Dashboard_Controller {


	public function index(){
		redirect(site_url('ticket'));
	}

}