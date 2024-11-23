<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {
    
        function __construct()
    {
        parent::__construct();
        $this->load->model('Model_manage_faq');
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        	           if (
            null==($this->session->userdata("email"))
        ) {
            redirect("login");
            return false;
            exit();
        }

    }
    
    
    
    public function index(){
        
        $data["page_name"] ="feedback";
		$this->load->view('admin/includes/header');
		$data['view_feedback']=$this->Admin_model->view_feedback();
		$this->load->view('admin/feedback', $data);
		$this->load->view('admin/includes/footer.php');
    }
    
    // Delete feed back code here write 
    
    
    
    public function delete_feedback(){
        
    	$data['delete_feedback']=$this->Admin_model->delete_feedback();    
    	redirect(base_url() . 'Feedback');
        
        
    } 
    
    
    
    
    
    
    
  }
?>