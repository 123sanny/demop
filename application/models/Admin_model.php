<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Admin_model extends CI_Model
{
    public function login()
    {
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $email = htmlspecialchars(
                stripslashes($this->input->post("email"))
            );
            $password = htmlspecialchars(
                stripslashes($this->input->post("password"))
            );
            $pwordhash = md5($password);
            if (!empty($email) && !empty($pwordhash)) {
                $this->db->select("*");
                $this->db->from("tbl_admin");
                $this->db->where("email", $email);
                $this->db->where("password", $pwordhash);
                $sql = $this->db->get();
                $result = $sql->result();
                if (!empty($result)) {
                    foreach ($result as $row) {
                        if ($row->email && $email == 0) {
                            $email = $row->email;
                            $this->session->set_userdata("email", $email);
                            $email = $this->session->userdata("email");
                            echo "1";
                        } else {
                            echo "<p class='alert alert-danger'>E-mail or password does not match</p>";
                        }
                    }
                } else {
                    echo "<p class='alert alert-danger'>E-mail or password does not match</p>";
                }
            } else {
                echo " <p class='alert alert-danger'>Please import database</p></p>";
            }
        } else {
            echo " <p class='alert alert-danger'>!!every field is mandetary</p></p>";
        }
    }
    public function update_password()
    {
        $currentpassword = $this->input->post("old_password");
        $pwordhash = md5($currentpassword);
        $newpassword = $this->input->post("new_password");
        $password = md5($newpassword);
        $email = $this->session->userdata("email");
        $this->db->select("password");
        $this->db->from("tbl_admin");
        $this->db->where("email", $email);
        $this->db->where("password", $pwordhash);
        $sql = $this->db->get();
        $result = $sql->result();
        if (!empty($result)) {
            $update_password = [
                "password" => $password,
            ];

            $this->db->where("email", $email);
            $update = $this->db->update("tbl_admin", $update_password);
            if ($update) {
                return true;
            } else {
                return false;
            }
        } else {
            $this->session->set_flashdata(
                "error",
                '<div class="alert alert-danger text-center" id="successMessage">
             Old Password Wrong!!</div>'
            );
            redirect("admin/change_password");
        }
    }

    // Add Service
    public function add_service()
    {
        $heading = $this->input->post("heading");
        // $price=$this->input->post('price');
        $description = $this->input->post("description");
        $filename = "";
        $config["upload_path"] = FCPATH . "/uploads/services/";
        $config["allowed_types"] = "*";
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
        
        $add_data = [
            "heading" => $heading,
            //   'price'=>$price,
            "description" => $description,
            "image" => $image,
        ];
        $data = $this->db->insert("tbl_manage_services", $add_data);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }

    public function get_data_services()
    {
        $this->db->where("status", 1);
        $this->db->select("*");
        $this->db->from("tbl_manage_services");
        $get = $this->db->get();
        $result = $get->result();
        //   print_r($result);
        //   die;
        if ($result) {
            return $result;
        } else {
            return false;
        }
        //   }
    }

    // Edit services

    public function edit_service()
    {
        $heading = $this->input->post("heading");
        // $price=$this->input->post('price');
        $description = $this->input->post("description");
        $id = $this->input->post("id");
        $filename = "";
        // $data = $_FILES["image"]["name"];
        // if ($data != "") {
        //     $config["image_library"] = "gd2";
        //     $config["source_image"] = $_FILES["image"]["tmp_name"];
        //     $config["create_thumb"] = false;
        //     $config["maintain_ratio"] = false;
        //     $config["width"] = "auto";
        //     $config["height"] = "auto";
        //     $config["quality"] = "60%";

        //     $config["new_image"] =
        //         __DIR__ . "/../../uploads/services/" . $data;
        //     $this->load->library("image_lib", $config);
        //     $this->image_lib->resize();
        //     $filename = $data;

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
        if (!empty($image)) {
            $update_data = [
                "heading" => $heading,
                // 'price'=>$price,
                "description" => $description,
                // 'image'=>$filename != "" ? "uploads/services/" . $filename : "",
                "image" => $image,
            ];
        } else {
            $update_data = [
                "heading" => $heading,
                // 'price'=>$price,
                "description" => $description,
            ];
        }
        $this->db->where("id", $id);
        $data = $this->db->update("tbl_manage_services", $update_data);
        if ($data) {
            $this->session->set_flashdata(
                "success",
                '<div class="alert alert-success text-center" id="successMessage">
                    Update successful!</div>'
            );
            redirect("admin/manage_services");
            // echo " <p class='alert alert-success'>Barnd Update success</p>";
        }
    }
    // DELETE SERVICE
    public function delete_service()
    {
        $id = $_GET["id"];
        $data = ["status" => "2"];
        $this->db->where("id", $id);
        $res = $this->db->update("tbl_manage_services", $data);
        if ($res) {
            echo 1;
        } else {
            echo 0;
        }
    }

    //    Admin side  view feedback data code here write

    public function view_feedback()
    {
        $this->db->select("*");
        $this->db->from("tbl_feedback");
        $this->db->where("status", 1);
        $query = $this->db->get();
        $sub_query = $query->result();
        if ($sub_query != "") {
            return $sub_query;
        } else {
            return false;
        }
    }
    // Delete feedback code here write

    public function delete_feedback()
    {
        $id = $this->uri->segment(3);
        $status = $this->uri->segment(4);
        $data = [
            "status" => $status,
        ];

        $this->db->where("id", $id);
        $update_query = $this->db->update("tbl_feedback", $data);

        if ($update_query == true) {
            return $update_query;
        } else {
            return false;
        }
    }

    public function get_enquriy()
    {
        //  $this->db->where('type','1');
        $this->db->select("*");
        $this->db->from("tbl_enquires");
        $get = $this->db->get();
        $result = $get->result();
        //   print_r($result);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    // Is varifiy
    public function enquriy_varifiy($id, $varify)
    {
        // print_r($varify);
        $data = [
            "is_varify" => $varify,
        ];
        $this->db->where("id", $id);
        $res = $this->db->update("tbl_enquires", $data);
        if ($res) {
            return $res;
        } else {
            return false;
        }
    }

    //  change status Manage service ***

    public function change_status()
    {
        $id = $this->uri->segment(3);
        $status = $this->uri->segment(4);
        $data = [
            "status" => $status,
        ];
        $this->db->where("id", $id);
        $update_query = $this->db->update("tbl_manage_services", $data);
        if ($update_query == true) {
            return $update_query;
        } else {
            return false;
        }
    }
    // Count  Enquriy
    public function count_enquriy()
    {
        $this->db->select("*");
        $this->db->from("tbl_enquires");
        $get = $this->db->get()->num_rows();
        //   $data=$this->db->get();
        //   $get=$data->num_rows();
        if ($get) {
            return $get;
        } else {
            return false;
        }
    }
    // Count Services
    public function count_services()
    {
        $this->db->select("*");
        $this->db->from("tbl_service_form");
        $get = $this->db->get()->num_rows();
        //   $data=$this->db->get();
        //   $get=$data->num_rows();
        if ($get) {
            return $get;
        } else {
            return false;
        }
    }

    // Count  Package
    public function count_packages()
    {
        $this->db->select("*");
        $this->db->from("tbl_service_packages");
        $get = $this->db->get()->num_rows();
        //   $data=$this->db->get();
        //   $get=$data->num_rows();
        if ($get) {
            return $get;
        } else {
            return false;
        }
    }

    // GET Contact
    public function get_contact_us()
    {
        $this->db->where("status", 1);
        $this->db->select("*");
        $this->db->from("tbl_contact_us");
        $select_query = $this->db->get();
        $res = $select_query->result();
        if ($res) {
            return $res;
        } else {
            return false;
        }
    }
    // Update Contact
    public function update_contact_us()
    {
        $id = $this->input->post("id");
        $mobile = $this->input->post("mobile");
        $w_mobile = $this->input->post("w_mobile");
        $emergence = $this->input->post("e_mobile");
        $email = $this->input->post("email");
        $address = $this->input->post("address");
        $update_data = [
            "mobile" => $mobile,
            "whatsap_no" => $w_mobile,
            "emergence_no" => $emergence,
            "email" => $email,
            "address" => $address,
        ];
        $this->db->where("id", $id);
        $data = $this->db->update("tbl_contact_us", $update_data);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
    // Delete Contact
    public function delete_contact()
    {
        $id = $_GET["id"];
        $data = ["status" => "2"];
        $this->db->where("id", $id);
        $res = $this->db->update("tbl_contact_us", $data);
        if ($res) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function manage_services_details()
    {
        // $this->db->select(
        //     "tbl_service_form.name,tbl_service_form.service_id,tbl_service_form.id,tbl_service_form.mobile,tbl_service_form.address,tbl_service_form.duration,tbl_service_form.date,tbl_service_form.type_of_pet,tbl_service_form.breed,tbl_service_form.gender,tbl_service_form.size_pet,tbl_service_form.aggressive_pet ,tbl_service_form.pet_age, tbl_service_form.comment,tbl_manage_services.id,tbl_manage_services.heading
        //     ,tbl_service_packages.id,tbl_service_packages.pricing" 
        // ); 
        // $this->db->from("tbl_service_form");
        // $this->db->join(
        //     "tbl_manage_services",
        //     "tbl_service_form.service_id=tbl_manage_services.id",
        //     "left"
        // );
        // $this->db->join(
        //     "tbl_service_packages",
        //     "tbl_service_packages.service_id=tbl_service_form.service_id",
        //     "left"
        // );
         $this->db->select(
            "tbl_service_form.name,tbl_service_form.service_id,tbl_service_form.id,tbl_service_form.mobile,tbl_service_form.address,tbl_service_form.duration,tbl_service_form.date,tbl_service_form.type_of_pet,tbl_service_form.breed,tbl_service_form.gender,tbl_service_form.size_pet,tbl_service_form.aggressive_pet ,tbl_service_form.pet_age, tbl_service_form.comment,tbl_manage_services.id,tbl_manage_services.heading
            ,tbl_service_packages.id,tbl_service_packages.pricing" 
        ); 
        $this->db->from("tbl_service_form");
        $this->db->join(
            "tbl_manage_services",
            "tbl_service_form.service_id=tbl_manage_services.id",
            "left"
        );
        $this->db->join(
            "tbl_service_packages",
            "tbl_service_packages.service_id=tbl_service_form.service_id",
            "left"
        );
        $this->db->order_by('service_id');
        $get = $this->db->get();
        $result = $get->result();
        // echo $this->db->last_query();
        // echo"<pre>";
        // print_r($result);
        // die;
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function add_service_package()
    {
        $service_id = $this->input->post("service_id");
        $sub_heading = $this->input->post("sub_heading");
        $pricing = $this->input->post("pricing");
        $discount = $this->input->post("discount");

        $add_package = [
            "service_id" => $service_id,
            "sub_heading" => $sub_heading,
            "pricing" => $pricing,
            "discount" => $discount,
        ];
        $add_data = $this->db->insert("tbl_service_packages", $add_package);
        echo "<p class='alert alert-success'>Services successfully add</p>";
    }
    public function get_service_package()
    {
       // $this->db->where("tbl_service_packages.status", 1);
        $this->db->select(
            "tbl_service_packages.id,tbl_service_packages.service_id,tbl_service_packages.sub_heading,tbl_service_packages.discount,tbl_service_packages.pricing,tbl_service_packages.status,tbl_manage_services.heading"
        );
        $this->db->from("tbl_service_packages");
        $this->db->join(
            "tbl_manage_services",
            "tbl_service_packages.service_id=tbl_manage_services.id",
            "left"
        );
        $get = $this->db->get();
        $result = $get->result();
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function update_service_packages()
    {
        $id = $this->input->post("m_id");
        $service_id = $this->input->post("service_id");
        $sub_heading = $this->input->post("sub_heading");
        $pricing = $this->input->post("pricing");
        $discount = $this->input->post("discount");
        $update_package = [
            "service_id" => $service_id,
            "sub_heading" => $sub_heading,
            "pricing" => $pricing,
            "discount" => $discount,
        ];
        $this->db->where("id", $id);
        $up_data = $this->db->update("tbl_service_packages", $update_package);
        if ($up_data) {
            $this->session->set_flashdata(
                "success",
                '<div class="alert alert-success text-center" id="successMessage">
                    Update successful!</div>'
            );
            redirect("admin/manage_service_package");
        }
    }
    public function packages_delete()
    {
        $id = $_GET["id"];
        $data = ["status" => "2"];
        $this->db->where("id", $id);
        $res = $this->db->update("tbl_service_packages", $data);
        if ($res) {
            echo 1;
        } else {
            echo 0;
        }
    }
    //package status
    public function status(){
       $id = $this->uri->segment(3);
      $status = $this->uri->segment(4);
        $data = array(
            'status' =>$status
        );
        $this->db->where('id', $id);
        $update_query = $this->db->update('tbl_service_packages', $data);
        if ($update_query == true) {
            
            return $update_query;
            

        } else {
            return false;
        }
    }
}
?>
