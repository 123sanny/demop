<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
         function __construct()
	{
        parent::__construct();
		$this->load->model('Admin_model', 'AM');
	     $this->load->library('upload');
	   	   $this->load->library('form_validation');

	           if (
            null==($this->session->userdata("email"))
        ) {
            redirect("login");
            return false;
            exit();
        }

	}

	public function index()
	{
		$data["page_name"] ="dashboard";
		$data['enquriy']=$this->AM->count_enquriy();
		$data['package']=$this->AM->count_packages();
	    $data['services']=$this->AM->count_services();
		$this->load->view('admin/index', $data);
	}
	public function index1()
	{
		$data["page_name"] ="index";
		$this->load->view('admin/index1', $data);
	}
	// public function login()
	// {
	// 	$data["page_name"] ="login";
	// 	$this->load->view('admin/login', $data);
	// }
	public function change_password()
	{
		$data["page_name"] ="Change Password";
	    $this->load->view('admin/includes/header');
    //   	$this->load->view ('admin/includes/sidebar');
		$this->load->view('admin/change_password', $data);
		$this->load->view('admin/includes/footer.php');

	}
	public function manage_enquires()
	{
		$data["page_name"] ="Manage Enquires";
		$data['enquriy']=$this->AM->get_enquriy();
		$this->load->view('admin/manage_enquires', $data);
	}
    public function enquriy_varifiy($id, $varify){
		$result=$this->AM->enquriy_varifiy($id, $varify);
		if($result){
			$this->session->set_flashdata('success','<div class="alert alert-success text-center" id="successMessage">
			Status Changed Successfully !!</div>');
			redirect('admin/manage_enquires');
		}

	}
	public function manage_services()
	{
		$data["page_name"] ="Manage Services";
		$data['service']=$this->AM->get_data_services();
		$this->load->view('admin/manage_services', $data);
	    $this->load->view('admin/includes/footer');
	}
	
		public function manage_service_details()
	{
		$data["page_name"] ="Manage Service Details";
		$data['services_detail']=$this->AM->manage_services_details();
		$this->load->view('admin/includes/header');
		$this->load->view('admin/manage_service_details', $data);
		$this->load->view('admin/includes/footer');

	}
		public function manage_service_package()
	{
		$data["page_name"] ="Manage Service Package";
		$data['service']=$this->AM->get_data_services();
		$data['service_package']=$this->AM->get_service_package();
		$this->load->view('admin/includes/header');
		$this->load->view('admin/manage_service_package', $data);
		$this->load->view('admin/includes/footer');

	}
	public function contact_us()
	{
		$data["page_name"] ="Contact Us";
		$data['contact']=$this->AM->get_contact_us();
		$this->load->view('admin/includes/header');
// 		$this->load->view('admin/includes/sidebar.php');
 		$this->load->view('admin/contact_us',$data);
		$this->load->view('admin/includes/footer');
	}
	public function manage_sliders()
	{
		$data["page_name"] ="Manage Sliders";
		$this->load->view('admin/manage_sliders', $data);
	}
	public function manage_faq()
	{
		$data["page_name"] ="Manage FAQ";
		$this->load->view('admin/manage_faq', $data);
	}
	public function testimonials()
	{
		$data["page_name"] ="Testimonials";
		$this->load->view('admin/testimonials', $data);
	}
	
	// Change Password 
	
	public function update_password(){
	    $data=$this->AM->update_password();
	    if($data){
                $this->session->set_flashdata('success','<div class="alert alert-success text-center" id="successMessage">
		          Password Change Successfully !!</div>');
            redirect('admin/change_password');
	    }
	}

	//Add services
	public function add_service(){
		$this->AM->add_service();
 	}


	// Service 
	public function edit_service(){
		$this->AM->edit_service();

	}
	// Delete Services 
	public function delete_service(){
	    $this->AM->delete_service();
	}

  // Contact Us update
  public function update_contact_us(){
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('mobile','Mobile','trim|required|numeric|exact_length[10]|regex_match[/^[0-9]{10}$/]');
	    $this->form_validation->set_rules('address','Address','trim|required');
		if($this->form_validation->run()==False){
		$this->session->set_flashdata('errors',$this->form_validation->error_array());
		redirect('admin/update_contact_us');
		}else{
      $data=$this->AM->update_contact_us();
      if($data){
                $this->session->set_flashdata('success','<div class="alert alert-success text-center" id="successMessage">
		         Update Successfully !!</div>');
            redirect('admin/contact_us');
      }
		}
  }
  // ADD PACKAGE 
  public function add_service_package(){
      $this->AM->add_service_package();
  }
  // Update Package
  public function update_service_packages(){
      $this->AM->update_service_packages();
  }
  // Delete Package
  public function packages_delete(){
      $this->AM->packages_delete();
  }
// Status
  public function status(){
    $date=$this->AM->status(); 
     redirect('admin/manage_service_package');
}
}
