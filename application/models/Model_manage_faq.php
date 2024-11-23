<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Model_manage_faq extends CI_Model
{

// insert question and answer *******

public function insert_data(){
    
 $question = $this->input->post('question');
  $answer = $this->input->post('answer');
  
  $data = array(
      
      "question"=>$question,
      "answer"=> $answer,
      );
   
   $insert_query = $this->db->insert('tbl_manage_faq', $data);
   
   if($insert_query == true){
       return true;
   }
   else{
       
       return false;
   }
    
}


public function view_question_answer(){

        $this->db->where("status", 1);
        $this->db->select("*");
        $this->db->from("tbl_manage_faq");
        $select_query = $this->db->get();
        $res  = $select_query->result();
        if ($res) {
            
            return $res;
        } else {
            return false;
        }
}


//  delete feq code here write


public function delete_feq(){
        
$id = $_GET['id'];

 $data = array(
            'status' =>0
        );
        $this->db->where('id', $id);
        $update_query = $this->db->update('tbl_manage_faq', $data);
        if ($update_query == true) {
        print_r($update_query);
        die;
        } else {
            return false;
        }

    }


}