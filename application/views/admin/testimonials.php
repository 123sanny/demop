<?php include('includes/sidebar.php') ?>

<style>
    .user_img{width:50px;}
                <style>
                #nam {
                    color: red;
                }
            </style>
</style>
    
    
                <?php
            if ($this->session->flashdata('valerror')) {
            ?>
                <!-- <div class="callout callout-danger"> -->

                <?php $err = ($this->session->flashdata('valerror'));
                // if (!empty($err)) {
                //     // print_r($err);

                //     foreach ($err as $key => $val)
                //         print_r($val);
                // }
                ?>
                <!-- </div> -->
            <?php
            }
          ?>
    <!-- BREADCRUMB -->
                    <!--<div class="page-meta">-->
                    <!--    <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
                    <!--        <ol class="breadcrumb">-->
                    <!--            <li class="breadcrumb-item"><a href="#">Manage Testimonials</a></li>-->
                                <!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
                    <!--        </ol>-->
                    <!--    </nav>-->
                    <!--</div>-->
                    <!-- /BREADCRUMB -->
    
                    <div class="row layout-top-spacing">
                    
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <h6 class="m-4">Manage Testimonials <button class="btn btn-light-info" style="float:right;margin-top:-5px;" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></h6>
      
                                <!--<div class="d-inline-block w-100"><button class="btn btn-light-info mt-3 mx-3" style="float:right;" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></div>-->
                                <table  class="table dt-table-hover datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                        if(!empty($view_data)){
                                        
                                        foreach($view_data as  $key=>$res_view_data){
                                            
                                            ?>
                                            <!--assets/img/profile-30.png-->
                                        <tr>
                                            <td><?=$key+1?></td>
                                            <td><img alt="avatar" src="<?= base_url($res_view_data->image)?>" class="rounded-circle user_img"></td>
                                            <td><?= $res_view_data->name ?></td>
                                            <td><button class="btn btn-light-info  model-view" data-bs-toggle="modal" data-bs-target="#descModal<?= $res_view_data->id ?>">View</button></td>
                                            <td>
                                            <a href="" class="bs-tooltip edit-news" data-bs-toggle="modal" data-bs-target="#updateModal<?= $res_view_data->id ?>">

                                                 <!--<a  class="bs-tooltip "   data-bs-toggle="modal" data-bs-target="#updateModal <?= $res_view_data->id ?>  ">-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                </a>
                                                <a  class="bs-tooltip model-delete" data-id="<?=$res_view_data->id?>"  data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Delete" aria-label="Delete" data-bs-original-title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                </a>
                                            </td>
                                        </tr>
                                 <!--Description Modal -->
                                <!--<div class="modal fade" id="descModal <?= $res_view_data->id ?>" tabindex="-1" role="dialog" aria-labelledby="descModalLabel" aria-hidden="true">-->
                                <!--    <div class="modal-dialog" role="document">-->
                                <!--        <div class="modal-content">-->
                                <!--            <div class="modal-header">-->
                                <!--                <h5 class="modal-title" id="descModalLabel">Description</h5>-->
                                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">-->
                                <!--                  <svg> ... </svg>-->
                                <!--                </button>-->
                                <!--            </div>-->
                                <!--            <div class="modal-body">-->
                                <!--                <div class="contentdiv">-->
                                <!--                    <p><?= $res_view_data->description ?></p>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                            <!--<div class="modal-footer">-->
                                            <!--    <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>-->
                                            <!--</div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="modal fade" id="descModal<?= $res_view_data->id?>" tabindex="-1" role="dialog" aria-labelledby="descModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="descModalLabel">Answer</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                  <svg> ... </svg>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <p> <?= $res_view_data->description?></p>
                                                            </div>
                                                            <!--<div class="modal-footer">-->
                                                            <!--    <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                              <!--Update Modal -->
        <div class="modal fade" id="updateModal<?= $res_view_data->id ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Testimonials</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <svg> ... </svg>
                        </button>
                    </div>
                    <form id="update_form" method="POST" action="<?= base_url() ?>Testimonials/update" enctype="multipart/form-data"data-parsley-validate class="form-horizontal form-label-left">
                    <div class="modal-body">
                        <div class="inputdiv mb-4">
                            <label>Name</label>
                            <input type="text"name="name" id="title" value="<?=$res_view_data->name?>" class="form-control">
                        </div>
                          <input type="hidden"name="id" id="id" value="<?=$res_view_data->id?>" class="form-control">

                       <div class="inputdiv mb-4">
                            <label>Description</label>
                            <textarea name="desc" id="desc" class="form-control" value=""><?=$res_view_data->description?></textarea>
                        </div>
                        <div class="img-uploader-content mb-4">
                            <label>Upload Image</label>
                            <input type="file" class="filepond d-block" name="image" id="image" value="<?=base_url($res_view_data->image)?>"accept="image/png, image/jpg, image/jpeg, image/webp" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit"  id="update_btn"update_model_btnclass="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Update</button>
                    </div>
                        <div class="row">
                        <div class="col-md-offset-3 col-md-8" style="display:none;" id="update_result"></div>
                        </div>

                    </form>
                </div> 
            </div>
        </div>
                                      <?php }
                                        }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                    </div>
                    
        <!--Image Modal -->
        <!--<div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="imgModalLabel" aria-hidden="true">-->
        <!--    <div class="modal-dialog" role="document">-->
        <!--        <div class="modal-content">-->
        <!--            <div class="modal-header">-->
        <!--                <h5 class="modal-title" id="imgModalLabel">Image</h5>-->
        <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">-->
        <!--                  <svg> ... </svg>-->
        <!--                </button>-->
        <!--            </div>-->
        <!--            <div class="modal-body">-->
        <!--                <img src="<//?= base_url()?>assets/img/model/model.webp" alt="brand" class="user_img">-->
        <!--            </div>-->
                   
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--Add Modal -->
        <style>
                #nam {
                    color: red;
                }
            </style>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <svg> ... </svg>
                        </button>
                    </div>
                    <form id="add_testi" method="POST" action="<?=base_url()?>Testimonials/insert" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <!-- <form  id=" add_testi"  method="post" action="<?=base_url()?>insert" enctype="multipart/form-data"> -->
                    <div class="modal-body">
                        <div class="inputdiv mb-4">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Name" class="form-control"onkeyup="this.value=this.value.replace(/[^A-z]/g,'');" >
                            
                        </div>
                       
                        <div class="inputdiv mb-4">
                            <label>Description</label>
                            <textarea name="desc" placeholder="Enter Description" class="form-control"></textarea>
                        </div>
                         <div class="img-uploader-content mb-4">
                            <label>Upload Image</label>
                            <input type="file" class="filepond d-block" name="image" accept="image/png, image/jpeg, image/jpg, image/webp" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--<input class="btn btn btn-light-success" type="submit" name="Submit" value="Submit"><i class="flaticon-cancel-12">-->
                        
                        <button type="submit" id="submit_btn"class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Submit</button>
                        
                    </div>
                    <div class="row">
                            <div class="col-md-offset-3 col-md-8" style="display:none;" id="add_result"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                    
        
        <!--Message Modal -->
        <!-- <div class="modal fade" id="ansModal" tabindex="-1" role="dialog" aria-labelledby="msgModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="msgModalLabel">Answer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <svg> ... </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contentdiv">
                            <p>Here is the Answer</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Save</button>
                    </div>
                </div>
            </div>
        </div> -->

         <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
  <!-- Including Jquery so All js Can run -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <!-- Validadtion js -->
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


     <!--Add Models-->
     
        <script>
        $('#add_testi').validate({
            rules: {
                name: "required",
                 desc:"required",
                 image:"required"

                }
        });
        $('#add_testi').on('submit', function(e) {
            // alert('sd');
            e.preventDefault();
            var formData = new FormData(this);
            if ($("#add_testi").validate().form()) {
                if (confirm('Are you sure? Want to create Category')) {
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        beforeSend: function() {
                            $('#submit_model').html('Please wait..');
                        },
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(result) {
                            $('#add_result').html(result);
                            $('#add_result').show().delay(4000).fadeOut();
                            $('#submit_model').html('Submit');
                            $('#add_testi')[0].reset();
                             location.reload();

                            // $('#brand_list').bootstrapTable('refresh');
                        }
                    });
                }
            }
        });
        // $('#testi_form').on('submit', function(e) {
        //   //  alert('sd');
        //     e.preventDefault();
        //     var formData = new FormData(this);
        //     if ($("#testi_form").validate().form()) {
        //         if (confirm('Are you sure? Want to create testimonials')) {
        //             $.ajax({
        //                 type: 'POST',
        //                 url: $(this).attr('action'),
        //                 data: formData,
        //                 beforeSend: function() {
        //                     $('#submit_btn').html('Please wait..');
        //                 },
        //                 cache: false,
        //                 contentType: false,
        //                 processData: false,
        //                 success: function(result) {
        //                     $('#add_result').html(result);
        //                     $('#add_result').show().delay(4000).fadeOut();
        //                     $('#submit_btn').html('Submit');
        //                     $('#testi_form')[0].reset();
        //                     location.reload();

        //                 }
        //             });
        //         }
        //     }
        // });
    </script>
     
     <!-- Update model -->
     
        <script>
        $('#update_model').validate({
            rules: {
                name: "required",
                desc:"required"
                
            }
        });
        $('#update_form').on('submit', function(e) {
            let name = document.forms["update_form"]["name"];
            let desc = document.forms["update_form"]["desc"];
            //  let price = document.forms["update_form"]["price"];
                if (name.value == "") {
                alert("Please enter name.");
                name.focus();
                 return false;
                     }
                    if (desc.value == "") {
                     alert("Please enter a description.");
                 desc.focus();
                  return false;
                        }
     return true;
            //   alert('sdffdffs');
            e.preventDefault();

            var formData = new FormData(this);
            if ($("#update_form").validate().form()) {
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    beforeSend: function() {
                        $('#update_btn').html('Please wait..');
                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(result) {
                        $('#update_result').html(result);
                        $('#update_result').show().delay(3000).fadeOut();
                        $('#update_btn').html('Update');
                        $('#image').val('');
                         location.reload();

                        // $('#update_form')[0].reset();
                        // $('#category_list').bootstrapTable('refresh');
                        setTimeout(function() {
                            $('#updateModal').modal('hide');
                        }, 4000);
                    }
                });
            }
        });
    </script>

     
    
    <!-- Delete model-->

 <script>
        $(document).on('click', '.model-delete', function() {
            if (confirm('Are you sure? Want to delete category? All related all data will also be deleted')) {
                id = $(this).data("id");
                // image = $(this).data("image");
                $.ajax({
                    url: '<?= base_url() ?>Testimonials/delete',
                    type: "get",
                    data: 'id=' + id + '&model-delete=1',
                    success: function(result) {
                 if (result == 1) {
                     
                            location.reload();

                            // $('#category_list').bootstrapTable('refresh');
                        } else{
                            alert('Error! Category could not be deleted');
                        // $('#category_list').bootstrapTable('refresh');

                    }

                            
                    }
                });
            }
        });
</script>
