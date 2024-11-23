<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Home_model extends CI_Model
{
    public function slider(){
        $this->db->where('status',1);
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $get=$this->db->get();
        $res=$get->result();
        if($res){
            return $res;
        }else{
            return false;
        }
    }
     public function testimonial(){
        $this->db->where('status',1);
        $this->db->select('*');
        $this->db->from('tbl_testimonials');
        $get=$this->db->get();
        $res=$get->result();
        if($res){
            return $res;
        }else{
            return false;
        }
    }
     public function faq(){
        $this->db->where('status',1);
        $this->db->select('*');
        $this->db->from('tbl_manage_faq');
        $this->db->order_by("id", "desc");
        $this->db->limit('99999999999999999999');
        $this->db->offset('3');
        $get=$this->db->get();
        $res=$get->result();
        if($res){
            return $res;
        }else{
            return false;
        }
    }
    public function faqu(){
        $this->db->where('status',1);
        $this->db->select('*');
        $this->db->from('tbl_manage_faq');
        $this->db->order_by("id", "desc");
        $this->db->limit(3);

        $get=$this->db->get();
        $has=$get->num_rows();
        $res=$get->result();
        if($res){
            return $res;
        }else{
            return false;
        }
    }
    public function add_contact_faq(){
       $type= $this->input->post('type');
       $name= $this->input->post('name');
       $email=$this->input->post('email');
       $service_type=$this->input->post('service_type');
       $message=$this->input->post('message');
       $add_data=array(
           'type'=>$type,
           'name'=>$name,
           'email'=>$email,
           'service_type'=>$service_type,
           'description'=>$message
           );
           $data=$this->db->insert('tbl_enquires',$add_data);
           if($data){
               return true;
           }else{
               return false;
           }
    }
    // ADD Feedback
    public function add_feedback(){
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $rate=$this->input->post('rate');
        $message=$this->input->post('message');
        $add_feddback=array(
            'email'=>$email,
            'name'=>$name,
            'rating'=>$rate,
            'message'=>$message
            );
        $data=$this->db->insert('tbl_feedback',$add_feddback);
        if($data){
            return $data;
        }else{
            return false;
        }
    }
    // Add contact 
    public function add_contact_enquriy(){
        $type=$this->input->post('type');
        $name=$this->input->post('name');
        $mobile=$this->input->post('mobile');
        $whatsap_no=$this->input->post('whatsap_no');
        $address=$this->input->post('address');
        $service_type=$this->input->post('service_type');
        $message=$this->input->post('message');
        
        $add_contact=array(
            'type'=>$type,
            'name'=>$name,
            'mobile'=>$mobile,
            'whatsap_no'=>$whatsap_no,
            'address_location'=>$address,
            'service_type'=>$service_type,
            'description'=>$message,
            );
            $add=$this->db->insert('tbl_enquires',$add_contact);
            if($add){
                return $add;
            }else{
                return false;
            }
    }
    
    public function  get_service(){
        $id=$this->uri->segment('3');
        $this->db->where('id',$id);
        $this->db->where('status',1);
        $this->db->select('*');
        $this->db->from('tbl_manage_services');
        $get=$this->db->get();
        $res=$get->result();
        if($res){
            return $res;
        }else{
            return false;
        }
    }

    public function add_service_book(){
        
            // $curr_date=date('Y-m-d');
            $this->db->select('*');
            $this->db->from('tbl_service_form');
            // $this->db->where("DATE(created_at)", $curr_date);
            $query = $this->db->get();
            $res=$query->result();
         $name=$this->input->post('name');
         $mobile=$this->input->post('mobile');
         $address=$this->input->post('address');
         $service_id=$this->input->post('service_id');
         $duration=$this->input->post('duration');
         $date=$this->input->post('date');
         $type_of_pet=$this->input->post('type_of_pet');
         $your_pet=$this->input->post('your_pet');
         $gender=$this->input->post('gender');
         $size_pet=$this->input->post('size_pet');
         $aggressive_your_pet=$this->input->post('aggressive_your_pet');
         $age=$this->input->post('age');
         $message=$this->input->post('message');
        $curr_date = date('m/d/Y');
         foreach($res as $row){
            $duration_time=$row->duration;
            $duration_date=$row->date;
         }
            if($duration_time !=$duration && $duration_date !=$date){
         if($curr_date < $date){
         $add_data=array(
             'name'=>$name,
             'mobile'=>$mobile,
             'address'=>$address,
             'duration'=>$duration,
             'service_id'=>$service_id,
             'date'=>$date,
             'type_of_pet'=>$type_of_pet,
             'breed'=>$your_pet,
             'gender'=>$gender,
             'size_pet'=>$size_pet,
             'aggressive_pet'=>$aggressive_your_pet,
             'pet_age'=>$age,
            //  'your_home'=>$home,
            //  'flat_transparent_rate'=>$transparent_rate,
            //  'p_experience'=>$p_experience,
             'comment'=>$message
             );
                $res=$this->db->insert('tbl_service_form',$add_data);
                if($res){
                    return $res;
                }else{
                     return false;
                }
         }else{
         ?>
        <script type="text/javascript">
         alert("Please! fill right Date");
         window.location.href = " ";
         </script>;
			    <?php

         }
            }else{
                 ?>
        <script type="text/javascript">
         alert("Please! Chosee another date");
         window.location.href = " ";
         </script>;
			    <?php
            }
         
           
    }
        public function add_services_book(){
         $id=$this->uri->segment('3');
         $name=$this->input->post('name');
         $mobile=$this->input->post('mobile');
         $address=$this->input->post('address');
        //  $service_type=$this->input->post('service_type');
         $duration=$this->input->post('duration');
         $date=$this->input->post('date');
         $type_of_pet=$this->input->post('type_of_pet');
         $your_pet=$this->input->post('your_pet');
         $gender=$this->input->post('gender');
         $size_pet=$this->input->post('size_pet');
         $aggressive_your_pet=$this->input->post('aggressive_your_pet');
         $age=$this->input->post('age');
        //  $home=$this->input->post('home');
        //  $transparent_rate=$this->input->post('flate_transparent_rate');
        //  $p_experience=$this->input->post('p_experience');
         $message=$this->input->post('message');
         
         $add_data=array(
             'service_id'=>$id,
             'name'=>$name,
             'mobile'=>$mobile,
             'address'=>$address,
            //  'service_type'=>$service_type,
             'duration'=>$duration,
             'date'=>$date,
             'type_of_pet'=>$type_of_pet,
             'breed'=>$your_pet,
             'gender'=>$gender,
             'size_pet'=>$size_pet,
             'aggressive_pet'=>$aggressive_your_pet,
             'pet_age'=>$age,
            //  'your_home'=>$home,
            //  'flat_transparent_rate'=>$transparent_rate,
            //  'p_experience'=>$p_experience,
             'comment'=>$message
             );
                $res=$this->db->insert('tbl_service_form',$add_data);
                 if($res){
                     return $res;
                 }else{
                     return false;
                 }
       
    }
    
    public function get_contact_us(){
        $this->db->where('status',1);
        $this->db->select('*');
        $this->db->from('tbl_contact_us');
        $get=$this->db->get();
        $res=$get->result();
        if($res){
            return $res;
        }else{
            return false;
        }
    }
    
    public function  get_services(){
        $this->db->where('status',1);
        $this->db->select('*');
        $this->db->from('tbl_manage_services');
        $get=$this->db->get();
        $res=$get->result();
        if($res){
            return $res;
        }else{
            return false;
        }
    }

 	public function get_service_package(){
 	    $this->db->where('tbl_service_packages.status',1);
 	    $this->db->select('tbl_service_packages.id,tbl_service_packages.service_id,tbl_service_packages.sub_heading,tbl_service_packages.pricing,tbl_service_packages.discount,tbl_service_packages.status,tbl_manage_services.heading');
 	    $this->db->from('tbl_service_packages');
 	    $this->db->join('tbl_manage_services','tbl_service_packages.service_id=tbl_manage_services.id','left');
 	    $get=$this->db->get();
 	    $res=$get->result();
 	    if($res){
 	        return $res;
 	    }else{
 	        return false;
 	    }
 	}




    // public function get_service_package(){
    //     $this->db->where('status',1);
    //     $this->db->select('*');
    //     $this->db->from('tbl_service_packages');
    //     $this->db->group_by('service_id');
    //     $get=$this->db->get();
    //     $res=$get->result();
        
    //     print_r($res);
    //     if($res){
    //         return $res;
    //     }else{
    //         return false;
    //     }
        
    // }
//   	public function packages(){
// //       $this->db->where('tbl_service_packages.status',1);
//  	    $this->db->select('tbl_service_packages.id,tbl_service_packages.service_id,tbl_service_packages.sub_heading,tbl_service_packages.pricing,tbl_service_packages.discount,tbl_service_packages.status,tbl_manage_services.heading');
//  	    $this->db->from('tbl_service_packages');
//  	    $this->db->join('tbl_manage_services','tbl_service_packages.service_id=tbl_manage_services.id','left');
//  	  //  $this->db->group_by('tbl_service_packages.service_id');
//  	    $get=$this->db->get();
//  	    $res=$get->result();
//  	    foreach($res as $r){
//  	    }
//  	   $package = $this->db->where('service_id',$r->service_id)->get('tbl_service_packages')->result();
 	 
//  	    return $package;
 	 
//  	}

 public function get_date_service(){
    $curr_date=date('Y-m-d');
    $this->db->select('*');
    $this->db->from('tbl_service_form');
    $this->db->where("DATE(created_at)", $curr_date);
    $query = $this->db->get();
    //echo $this->db->last_query();       
    $res=$query->row();
//   print_r($res);
//   die;
    if ($res == true) {
      return $res;
    } else {
      return false;
  }
}


public function booking_date(){
    $this->db->select('*');
    $this->db->from('booking_date');
    $query = $this->db->get();
    //echo $this->db->last_query();       
    $res=$query->result();
    // print_r($res);
    // die;
    if ($res == true) {
      return $res;
    } else {
      return false;
  }
}
}
?>