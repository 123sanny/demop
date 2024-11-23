<?php
if(!defined('BASEPATH'))exit('No direct script access allowed');
     function get_contact() {
        $ci=&get_instance();
        $ci->load->database();
        //  $ci->db->sql("SET NAMES 'utf8'");
        $ci->db->select('*');
        $ci->db->from('tbl_contact_us');
        $query = $ci->db->get();
        $res=$query->row();
        // print_r($res);
        // die;
        if ($res) {
              return $res;
        } else {
            return false;
        }
    }
    
    
    //  function service(){
    //     $ci=&get_instance();
    //     $ci->load->database();
    //     $ci->db->where('tbl_service_packages.status',1);
 	  //  $ci->db->select('tbl_service_packages.id,tbl_service_packages.service_id,tbl_service_packages.sub_heading,tbl_service_packages.pricing,tbl_service_packages.discount,tbl_service_packages.status,tbl_manage_services.heading');
 	  //  $ci->db->from('tbl_service_packages');
 	  //  $ci->db->join('tbl_manage_services','tbl_service_packages.service_id=tbl_manage_services.id','left');
 	  ////  $this->db->group_by('tbl_service_packages.service_id');
 	  //  $get=$ci->db->get();
 	  //  $res=$get->result();
 	  // print_r($res);
 	  // die;
 	  ////  die;
 	  //  if($res){
 	  //      return $res;
 	  //  }else{
 	  //      return false;
 	  //  }
    //  }
    
    
     function package($service_id){
        $ci=&get_instance();
        $ci->load->database();
        echo"hello";
        print_r($service_id);
        // die;
        echo"hello";
        $ci->db->where('service_id',$service_id->service_id);
        $ci->db->select('*');
        $ci->db->from('tbl_service_packages');
        $query = $ci->db->get();
        $result=$query->result();
        // print_r($result);
        // die;
        if($result){
            return $result;
        }else{
            return false;
        }
     }
    
    
    ?>