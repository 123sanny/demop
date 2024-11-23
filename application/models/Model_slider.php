<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Model_slider extends CI_Model
{
    public function insert_slider()
    {
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

            $data = [
                "image" => $image,
                // "image"=>$post
            ];

            $insert_query = $this->db->insert("tbl_slider", $data);
            if ($insert_query == true) {
                return $insert_query;
            }
        } else {
            return false;
        }
    }

    //  view slider code here

    public function view_slider()
    {
        $this->db->where("status", 1);
        $this->db->select("*");
        $this->db->from("tbl_slider");
        $select_query = $this->db->get();
        $res = $select_query->result();
        if ($res) {
            return $res;
        } else {
            return false;
        }
    }

    //  delete code here write

    public function delete_slider()
    {
        $id = $_GET["id"];

        $data = [
            "status" => 0,
        ];
        $this->db->where("id", $id);
        $update_query = $this->db->update("tbl_slider", $data);

        if ($update_query == true) {
            // return $update_query

            print_r($update_query);
            die();
        } else {
            return false;
        }
    }
    // Update Slider
    public function update_slider()
    {
        $id = $this->input->post("id");
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
                
          
        $data = [
            "image" => $image,
        ];
        $this->db->where("id", $id);
        $update = $this->db->update("tbl_slider", $data);
        }
        ?>
        <script>
        window.location = "<?= base_url("Slider") ?>";
        </script>
      <?php
        //     if ($update == true) {
        //         return $update;
        //     } else {

        //         return false;

        // }


    }
}
?>
