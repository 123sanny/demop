<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {
    
        function __construct()
    {
        parent::__construct();
        $this->load->model('Model_testimonials');
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
     
     
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == false) {

            $this->session->set_flashdata('valerror', $this->form_validation->error_array());
        } else {
        if ($this->input->post('Submit')) {
            
        $data['insert'] =$this->Model_testimonials->insert();
        
        }
        }
        $data['view_data'] =$this->Model_testimonials->view_data();
        $data["page_name"] ="Testimonials";
        $this->load->view('admin/includes/header');
// 		$this->load->view('admin/includes/sidebar.php');
		$this->load->view('admin/testimonials', $data);
		$this->load->view('admin/includes/footer.php');
    }
    
    
    // insert data testimonials
    
    public function insert(){
        $data['insert'] =$this->Model_testimonials->insert();
    }
    
    // delete function code here write 
    
    public function delete(){
        
        $data['delete'] =$this->Model_testimonials->Delete();
    }
    
    // update testimonials code here write 
    
    public function update(){
        
    $data['update'] =$this->Model_testimonials->update_testimonials();

    }
    
}