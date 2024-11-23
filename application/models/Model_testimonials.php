<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Model_testimonials extends CI_Model
{
    
    public function insert(){
        $Name = $this->input->post('name');
        $Description = $this->input->post('desc');
        
        $filename = "";
        $config["upload_path"] = FCPATH . "/uploads/services/";
        $config["allowed_types"] = "*";
        //   $config['max_size']             = 100;
        //   $config['max_width']            = 1024;
        //   $config['max_height']           = 768;
        $this->load->library("upload", $config);
        $this->upload->do_upload("image");
        $this->upload->initialize($config);
        $img_data = [];
        if ($this->upload->do_upload("image")) {
            $img_data = $this->upload->data();
        }
        // else {
        //     // $error = array('error' => $this->upload->display_errors());
        // }

        if ($img_data) {
            $image = "/uploads/services/" . $img_data["file_name"];

    $data = array(
                "image" => $image,
                "name"=>$Name,
                "description"=>$Description
            );
               $insert_query = $this->db->insert('tbl_testimonials', $data);
            if ($insert_query == true) {
                redirect(base_url() . 'Testimonials');
                // return $insert_query;
            } 
        }
            else {
                return false;
        }
}

//  View model testimonials**********


public function view_data(){
    
         $this->db->where("status", 1);
        $this->db->select("*");
        $this->db->from("tbl_testimonials");
        $select_query = $this->db->get();
        $res  = $select_query->result();
        if ($res) {
            
            return $res;
        } else {
            return false;
        }
    
}
//  Delete testimonials code here write 

public function Delete(){
    
    
 $id = $_GET['id'];

 $data = array(
            'status' =>0
        );
        $this->db->where('id', $id);
        $update_query = $this->db->update('tbl_testimonials', $data);

        if ($update_query == true) {
            
            print_r($update_query);
            die;
        // return $update_query;
        // return true;
        } else {
            return false;
        }   
}


public function update_testimonials(){
         
         $name=$this->input->post('name');
         $desc=$this->input->post('desc');
         $id=$this->input->post('id');
         
        $filename = "";
        $config["upload_path"] = FCPATH . "/uploads/services/";
        $config["allowed_types"] = "*";
        //   $config['max_size']             = 100;
        //   $config['max_width']            = 1024;
        //   $config['max_height']           = 768;
        $this->load->library("upload", $config);
        $this->upload->do_upload("image");
        $this->upload->initialize($config);
        $img_data = [];
        if ($this->upload->do_upload("image")) {
            $img_data = $this->upload->data();
        }
        // else {
        //     // $error = array('error' => $this->upload->display_errors());
        // }

        if ($img_data) {
            $image = "/uploads/services/" . $img_data["file_name"];
        }
        if(!empty($image)){
        $data=array(
            'name'=>$name,
            'description'=>$desc,
            'image'=>$image,
            );
         }else{
               $data=array(
             'name'=>$name,
             'description'=>$desc
            );
         }
           $this->db->where('id',$id);
           $data=$this->db->update('tbl_testimonials',$data);
            echo " <p class='alert alert-success'>Barnd Update success</p></p>";
        //  redirect(base_url() . 'testimonials');
        ?>
        <script>
            window.location = "<?= base_url("testimonials") ?>";
            </script>
          <?php 
}



}