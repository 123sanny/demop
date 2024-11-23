<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    
        function __construct()
    {
        parent::__construct();
        $this->load->model('Model_slider');
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
    
    //slider page view here*********** 
    
    public function index(){

        $data["page_name"] ="Manage Sliders";
		$data['view_data'] =$this->Model_slider->view_slider();
		$this->load->view('admin/includes/header');
		$this->load->view('admin/manage_sliders', $data);
		$this->load->view('admin/includes/footer.php');
    }
    
    // insert slider data 
    
    public function insert_data(){
        
        $data['image'] =$this->Model_slider->insert_slider();
        
    }
    
    
    // delete slider image 
    
    public function delete(){
    $data['delete'] =$this->Model_slider->delete_slider();    
    }
    // Update slider
    public function update_slider(){
        $this->Model_slider->update_slider();
    }
}
?>