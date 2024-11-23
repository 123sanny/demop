<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    	function __construct()
	{
        parent::__construct();
        
        // $this->load->helper('url');
		$this->load->model('Home_model', 'HM');
	    $this->load->library('upload');
	    $this->load->library('form_validation');
	    

	}



	public function index()
	{
	    $data['get_data']=$this->HM->get_services();
	    $data['sliders']=$this->HM->slider();
		$this->load->view('index.php',$data);
	}
	public function about()
	{
		$this->load->view('about.php');
	}
	public function service_page()
	{
	    $data['get_data']=$this->HM->get_services();
	    $data['get_package']=$this->HM->get_service_package();
	    $res=$this->HM->get_service_package();
	   // foreach($res as $row){
	   //     $service_id=$row->service_id;
	       // echo"hello";
	       // print_r($service_id);
	       //echo"hello";
	       // die;
	       
	   // $data['package']=package($service_id);
	   // }
	   //  $datas['package']=$this->HM->packages();
	   //  print_r($datas);
	   //  die;

		$this->load->view('service_page.php',$data);
	}
	public function service_book()
	{
	   //  print_r($id);
	   	$data['get_id']=$this->HM->get_service();
	    $data['get_service']=$this->HM->get_services();
	    $data['booking_date']=$this->HM->booking_date();

		$this->load->view('service_book.php',$data);
	}
		public function services_book($id)
	{
	   //  print_r($id);
	   	$data['get_id']=$this->HM->get_service($id);
	    $data['get_service']=$this->HM->get_services();
		$this->load->view('services_book.php',$data);
	}
	public function package()
	{	  
	    $data['get_package']=$this->HM->get_service_package();

		$this->load->view('package.php',$data);
		
	}
	

	public function faq()
	{
	    $data['faqu']=$this->HM->faq();
	    $data['fques']=$this->HM->faqu();
	    $this->load->view('faq.php',$data);
	}
	
	
	public function testimonial()
	{
	    $data['testimonial']=$this->HM->testimonial();
		$this->load->view('testimonial.php',$data);
	}
	public function feedback()
	{
		$this->load->view('feedback.php');
	}
	public function privacy()
	{
		$this->load->view('privacy.php');
	}
	public function termscondition()
	{
		$this->load->view('termscondition.php');
	}
    public function contact()
	{
	    $data['get_contact']=$this->HM->get_contact_us();
		$this->load->view('contact.php',$data);
	}
	// Add faq Contact
	public function add_contact_faq(){
	    $this->form_validation->set_rules('name','name','trim|required|alpha');
	    $this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('message','message','trim|required');
		$this->form_validation->set_rules('service_type','service_type','trim|required');

        if($this->form_validation->run() == false)
        {
			$this->session->set_flashdata('errors',$this->form_validation->error_array());
			redirect('Home/faq');

		}else{
	   $data=$this->HM->add_contact_faq();
	   if($data){
	       		$this->session->set_flashdata('success', '<div class="alert alert-success text-center" id="successMessage">
		    Add Successfully !!</div>');
		return redirect('Home/faq');
	   }
		}
	}
	public function add_feedback(){
	    $this->form_validation->set_rules('name','Name','trim|required|regex_match[/^([a-z ])+$/i]');
	    $this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('message','Message','trim|required');
		$this->form_validation->set_rules('rate','Rating','trim|required');
        if($this->form_validation->run() == false)
        {
			$this->session->set_flashdata('errors',$this->form_validation->error_array());
			redirect('Home/feedback');

		}else{
      $data= $this->HM->add_feedback();
	   if($data){
	       		$this->session->set_flashdata('success', '<div class="alert alert-success text-center" id="successMessage">
		   Feedback Send  Successfully !!</div>');
		return redirect('Home/feedback');
	   }
		}
 	}
 	public function add_contact(){
 	    $this->form_validation->set_rules('name','Name','trim|required|regex_match[/^([a-z ])+$/i]');
	    $this->form_validation->set_rules('mobile','Mobile','trim|required');
		$this->form_validation->set_rules('message','Message','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('whatsap_no','Whatsap_no','trim|required');
		$this->form_validation->set_rules('service_type','Service_type','trim|required');
        if($this->form_validation->run() == false)
        {
			$this->session->set_flashdata('errors',$this->form_validation->error_array());
			redirect('Home/contact');

		}else{
 	   $data= $this->HM->add_contact_enquriy();
 	   if($data){
 	       	  $this->session->set_flashdata('success', '<div class="alert alert-success text-center" id="successMessage">
		        Enquiry Send  Successfully !!</div>');
		return redirect('Home/contact');
 	   }
 	}
 	}
 	public function add_service_book()
 	{
 	    $this->form_validation->set_rules('name','Name','trim|required|regex_match[/^([a-z ])+$/i]');
	    $this->form_validation->set_rules('mobile','mobile','trim|required');
		$this->form_validation->set_rules('duration','Duration','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('date','Date','trim|required');
 		$this->form_validation->set_rules('service_id','Service_type','trim|required');
		$this->form_validation->set_rules('type_of_pet','Type_of_pet','trim|required');
// 		$this->form_validation->set_rules('service_type','Service_type','trim|required');
		$this->form_validation->set_rules('your_pet','Breed','trim|required');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		$this->form_validation->set_rules('size_pet','Size_pet','trim|required');
		$this->form_validation->set_rules('aggressive_your_pet','Aggressive_your_pet','trim|required');
		$this->form_validation->set_rules('age','Age','trim|required|numeric');
// 		$this->form_validation->set_rules('home','Home','trim|required');
// 		$this->form_validation->set_rules('flate_transparent_rate','Flate_transparent_rate','trim|required');
// 		$this->form_validation->set_rules('p_experience','P_experience','trim|required|numeric');
		$this->form_validation->set_rules('message','Message','trim|required');
        if($this->form_validation->run() == false)
        {
			$this->session->set_flashdata('errors',$this->form_validation->error_array());
 			redirect('Home/service_book');

		}else{
 	    
 	   $data= $this->HM->add_service_book();
 	   if($data){
 	        $this->session->set_flashdata('success', '<div class="alert alert-success text-center" id="successMessage">
		        Add Successfully !!</div>');
		        redirect('Home/service_book');
 	   }
		}
 	}
 		public function add_services_book($id)
 	{
 	    $this->form_validation->set_rules('name','Name','trim|required|regex_match[/^([a-z ])+$/i]');
	    $this->form_validation->set_rules('mobile','mobile','trim|required');
		$this->form_validation->set_rules('duration','Duration','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('date','Date','trim|required');
// 		$this->form_validation->set_rules('service_type','Service_type','trim|required');
		$this->form_validation->set_rules('type_of_pet','Type_of_pet','trim|required');
// 		$this->form_validation->set_rules('service_type','Service_type','trim|required');
		$this->form_validation->set_rules('your_pet','Breed','trim|required');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		$this->form_validation->set_rules('size_pet','Size_pet','trim|required');
		$this->form_validation->set_rules('aggressive_your_pet','Aggressive_your_pet','trim|required');
		$this->form_validation->set_rules('age','Age','trim|required|numeric');
// 		$this->form_validation->set_rules('home','Home','trim|required');
// 		$this->form_validation->set_rules('flate_transparent_rate','Flate_transparent_rate','trim|required');
// 		$this->form_validation->set_rules('p_experience','P_experience','trim|required|numeric');
		$this->form_validation->set_rules('message','Message','trim|required');
        if($this->form_validation->run() == false)
        {
			$this->session->set_flashdata('errors',$this->form_validation->error_array());
 			redirect('Home/services_book/'.$id);

		}else{
 	    $data=$this->HM->add_services_book();
 	     if($data){
 	       	  $this->session->set_flashdata('success', '<div class="alert alert-success text-center" id="successMessage">
		        Add Successfully !!</div>');
		        redirect('Home/services_book/'.$id);
 	   }
		}
 	}
 	
 
}