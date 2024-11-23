<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
         function __construct()
	{
        parent::__construct();
		$this->load->model('Admin_model', 'AM');
		
	}
	public function index()
	{
		$data["page_name"] ="login";
		$this->load->view('admin/login', $data);
	}
	public function check_login(){
		
	    $this->AM->login();
	}
	public function logout(){
	    $this->session->sess_destroy();
        return redirect('login');
	}
}