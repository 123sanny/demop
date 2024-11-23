<?php include('includes/sidebar.php') ?>
<style>
   .user_img{width:50px;}
<style>
   #nam {
   color: red;
   }
   .error { color: red; }
</style>
</style>
<?php
   if ($this->session->flashdata('valerror')) {
   ?>
<?php $err = ($this->session->flashdata('valerror'));
   ?>
<!-- </div> -->
<?php
   }
   echo $this->session->flashdata('success');
   ?>
<!-- BREADCRUMB -->
<!--<div class="page-meta">-->
<!--   <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
<!--      <ol class="breadcrumb">-->
<!--         <li class="breadcrumb-item"><a href="#">Manage Services Packages</a></li>-->
         <!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
<!--      </ol>-->
<!--   </nav>-->
<!--</div>-->
<!-- /BREADCRUMB -->
<div class="row layout-top-spacing">
   <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
      <div class="widget-content widget-content-area br-8">
          <h6 class="m-4">Manage Services Packages<button class="btn btn-light-info" style="float:right;margin-top:-5px;" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></h6>
      
         <!--<div class="d-inline-block w-100"><button class="btn btn-light-info mt-3 mx-3" style="float:right;" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></div>-->
         <table  class="table dt-table-hover datatable" style="width:100%">
            <thead>
               <tr>
                  <th>Sr. No.</th>
                  <th>Heading</th>
                  <th>Sub Heading</th>
                  <th>Pricing</th>
                  <th>Discount</th>
                  <th class="no-content">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  if(!empty($service_package)){
                  
                  foreach($service_package as  $key=>$result){
                               if($result->status==1){
                                     $status="Active";
                                     $st='Inactive';
                                     $sta='2';
                                     $ha='red';
                                  }else{
                                      $status='Inactive';
                                      $sta='1';
                                      $st='Active';
                                      $ha='green';
                                  }
                                
                              ?>
               <script>
                  function myfunction(id,status){
                     var user=confirm("Do you want to change");
                     console.log(status);
                         if(user==true){
                             console.log("hshd0");
                             console.log(status);
                             window.location="<?= base_url("admin/status/")?>" +id + "/" + status
                         }else{
                  
                         }
                  }
               </script>
               <tr>
                  <td><?=$key+1?></td>
                  <td><?=$result->heading?></td>
                  <td><?=$result->sub_heading?></td>
                  <td><?=$result->pricing?></td>
                  <td><?=$result->discount?></td>
                  <td>
                     <a href="" class="bs-tooltip edit-news" data-bs-toggle="modal" data-bs-target="#updateModal<?= $result->id ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                           <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                        </svg>
                     </a>
                     <a  class="bs-tooltip package-delete" data-id="<?=$result->id?>"  data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Delete" aria-label="Delete" data-bs-original-title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                           <polyline points="3 6 5 6 21 6"></polyline>
                           <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                     </a>
                     <input type='button' class="btn btn-light-info" value='<?= $st ?>'  onclick='myfunction(<?= $result->id ?>,<?= $sta ?>)' style='background-color:<?= $ha ?>,color:white'>
                  </td>
               </tr>
               <!--Update Modal -->
               <div class="modal fade" id="updateModal<?= $result->id ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="addModalLabel">Testimonials</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <svg> ... </svg>
                           </button>
                        </div>
                        <form id="update_form" method="POST" action="<?= base_url() ?>admin/update_service_packages" enctype="multipart/form-data"data-parsley-validate class="form-horizontal form-label-left">
                           <div class="modal-body">
                              <div class="inputdiv mb-4">
                                 <label>Select Heading</label>
                                 <select id="service_id" name="service_id" class="form-control">
                                    <option value="">Choose Heading...</option>
                                    <?php  foreach($service as $row){
                                       if($result->service_id ==$row->id){
                                              
                                                 $test='selected';
                                                
                                               }else{
                                                 $test='';
                                               }
                                       ?>
                                    <option value="<?=$row->id?>"<?php echo $test ?>><?=$row->heading?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                              <div class="inputdiv mb-4">
                                 <label>Sub Heading</label>
                                 <input type="text"name="sub_heading" id="sub_heading"  value="<?=$result->sub_heading?>"class="form-control" placeholder="Enter sub_heading...">
                              </div>
                              <div class="inputdiv mb-4">
                                 <label>Pricing</label>
                                 <input type="text"name="pricing" id="pricing"  value="<?=$result->pricing?>" class="form-control"placeholder="Enter Pricing...">
                              </div>
                              <input type="hidden"  name="m_id" id="m_id" value="<?=$result->id?>" class="form-control">
                              <div class="inputdiv mb-4">
                                 <label>Discount</label>
                                 <input type="text"name="discount" id="discount"  value="<?=$result->discount?>" class="form-control"placeholder="Enter Discount...">
                              </div>
                           </div>
                           <div class="modal-footer">
                              <button type="submit"  id="update_btn" update_model_btn class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Update</button>
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
            <h5 class="modal-title" id="addModalLabel">Add Service Packages</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               <svg> ... </svg>
            </button>
         </div>
         <form id="add_services" method="POST" action="<?=base_url()?>admin/add_service_package" class="form-horizontal form-label-left" enctype="multipart/form-data">
            <!-- <form  id=" add_testi"  method="post" action="<?=base_url()?>insert" enctype="multipart/form-data"> -->
            <div class="modal-body">
               <div class="inputdiv mb-4">
                  <label>Select Heading</label>
                  <select id="service_id" name="service_id" class="form-control">
                     <option value="">Choose Heading...</option>
                     <?php  foreach($service as $row){?>
                     <option value="<?=$row->id?>"><?=$row->heading?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="inputdiv mb-4">
                  <label>Sub Heading</label>
                  <input type="text"name="sub_heading" id="sub_heading"  class="form-control" placeholder="Enter sub_heading...">
               </div>
               <div class="inputdiv mb-4">
                  <label>Pricing</label>
                  <input type="text"name="pricing" id="pricing"  class="form-control"placeholder="Enter Pricing...">
               </div>
               <div class="inputdiv mb-4">
                  <label>Discount</label>
                  <input type="text"name="discount" id="discount"  class="form-control"placeholder="Enter Discount...">
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" id="submit_btn"class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Submit</button>
            </div>
            <div class="row">
               <div class="col-md-offset-3 col-md-8" style="display:none;" id="add_result"></div>
            </div>
         </form>
      </div>
   </div>
</div>
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- Including Jquery so All js Can run -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<!-- Validadtion js -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!--Add Models-->
<script>
   $('#add_services').validate({
       rules: {
           service_id: "required",
            sub_heading:"required",
            pricing:"required"
   
           }
   });
   $('#add_services').on('submit', function(e) {
       // alert('sd');
       e.preventDefault();
       var formData = new FormData(this);
       if ($("#add_services").validate().form()) {
           if (confirm('Are you sure? Want to create Services')) {
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
                       $('#add_services')[0].reset();
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
   $('#update_form').on('submit', function(e) {
       let service_id = document.forms["update_form"]["service_id"];
       let sub_heading = document.forms["update_form"]["sub_heading"];
       let pricing = document.forms["update_form"]["pricing"];
       let discount = document.forms["update_form"]["discount"];
   
           if (service_id.value == "") {
           alert("Please enter Heading.");
           service_id.focus();
            return false;
                }
               if (sub_heading.value == "") {
                alert("Please enter a Sub Heading.");
            sub_heading.focus();
             return false;
                   }
                   if (pricing.value == "") {
                alert("Please enter a Pricing.");
            pricing.focus();
             return false;
                   }
                   if (discount.value == "") {
                alert("Please enter a Discount.");
            discount.focus();
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
   $(document).on('click', '.package-delete', function() {
       if (confirm('Are you sure? Want to delete category? All related all data will also be deleted')) {
           id = $(this).data("id");
           $.ajax({
               url: '<?= base_url() ?>admin/packages_delete',
               type: "get",
               data: 'id=' + id + '&package-delete=1',
               success: function(result) {
            if (result == 1) {
                       location.reload();
                   } else{
                       alert('Error! Category could not be deleted');
               }
   
                       
               }
           });
       }
   });
</script>