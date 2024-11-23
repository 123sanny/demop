<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_faq extends CI_Controller {
    
        function __construct()
    {
        parent::__construct();
        $this->load->model('Model_manage_faq');
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
        
        // echo"fdfdf";
        // die;
        $data["page_name"] ="Manage FAQ";
		$data["view_data"] = $this->Model_manage_faq->view_question_answer();
		$this->load->view('admin/includes/header');
// 		$this->load->view('admin/includes/sidebar.php');
		$this->load->view('admin/manage_faq', $data);
		$this->load->view('admin/includes/footer.php');
		
    }
    
    //  insert data faq code here 
    public  function insert_data(){
  
        $data['quans'] =$this->Model_manage_faq->insert_data();
    }
    
    
    // Delete faq code here 
    
    public function delete(){
        
        $data['delete'] =$this->Model_manage_faq->delete_feq();
        
    }
    
    
}
?>