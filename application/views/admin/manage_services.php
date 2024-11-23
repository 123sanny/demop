<?php include('includes/header.php') ?>
<?php include('includes/sidebar.php') ?>
<style>  
   .brand_img{width:50px;}
   .error { color: red; }
   @media only screen and (min-width: 992px){
   .layout-top-spacing {
        margin-top: 0px;
        padding: 0px 0px 0px 15px;
    }
    .f-section-1{
        margin-left:253px;
    }
   }
</style>
<!-- BREADCRUMB -->
<!--<div class="page-meta">-->
<!--   <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
<!--      <ol class="breadcrumb">-->
<!--         <li class="breadcrumb-item"><a href="#">Manage Services</a></li>-->
         <!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
<!--      </ol>-->
<!--   </nav>-->
<!--</div>-->
<!-- /BREADCRUMB -->
<div class="row layout-top-spacing">
   <?php echo $this->session->flashdata('success');?>
   <div class="widget-content widget-content-area br-8 mt-5">
      <h6 class="m-4">Manage Services <button class="btn btn-light-info" style="float:right;margin-top:-5px;" data-bs-toggle="modal" data-bs-target="#addservices">Add</button></h6>
      <table  class="table dt-table-hover datatable" style="width:100%">
         <thead>
            <tr>
               <th>Sr.</th>
               <th>Image</th>
               <th>Heading</th>
               <th>Description</th>
               <!--<th>Price</th>-->
               <th class="no-content">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
               if (!empty($service)) {
                   foreach ($service as $key=> $services) { 
                       ?>
            <tr>
               <td><?=$key+1?> </td>
               <td>
                  <img src="<?= base_url(
                     $services->image
                     ) ?>" alt="brand" class="brand_img">
               </td>
               <td><?=$services->heading?></td>
               <td><?=$services->description?></td>
               <!--<td><?=$services->price?></td>-->
               <td>
                  <a  class="bs-tooltip edit-mpdel " data-bs-toggle="modal" data-bs-target="#updateServiceModel<?= $services->id ?>">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                     </svg>
                  </a>
                  <a class="bs-tooltip delete-service"data-id="<?= $services->id ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Delete" aria-label="Delete" data-bs-original-title="Delete">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                     </svg>
                  </a>
               </td>
            </tr>
            <!--Update Service -->
            <div class="modal fade" id="updateServiceModel<?= $services->id ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Update Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           <svg> ... </svg>
                        </button>
                     </div>
                     <form id="update_service" method="POST" action="<?= base_url() ?>admin/edit_service" onsubmit="return ValidationForm()"enctype="multipart/form-data"   data-parsley-validate class="form-horizontal form-label-left">
                        <div class="modal-body">
                           <div class="inputdiv mb-4">
                              <label>Heading</label>
                              <input type="text" name="heading" id="heading"class="form-control" value="<?= $services->heading?>"placeholder="Enter heading"required>
                           </div>
                           <div class="inputdiv mb-4">
                              <label>Description</label>
                              <input type="text" name="description" id="description"class="form-control" value="<?= $services->description?>"placeholder="Enter Description"required>
                           </div>
                           <!--<div class="inputdiv mb-4">-->
                           <!--    <label>Price</label>-->
                           <!--    <input type="text" name="price" id="price"class="form-control"value="<?= $services->price?>" placeholder="Enter Price"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"required>-->
                           <!--</div>-->
                           <div class="img-uploader-content mb-4">
                              <label>Upload Model Image</label>
                              <input type="file" class="filepond d-block" id="image" name="image" value="<?= $services->image?>"accept="image/png, image/jpg, image/webp"  />
                           </div>
                           <input type="hidden" name="id" id="id"class="form-control"value="<?= $services->id?>" placeholder="Enter Price">
                        </div>
                        <div class="modal-footer">
                           <button  type="submit" id="update_service_btn"class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Update</button>
                        </div>
                        <div class="row">
                           <div class="col-md-offset-3 col-md-8" style="display:none;" id="update_result"></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <?php }
               } else {
                   echo "";
               } ?>
         </tbody>
      </table>
   </div>
</div>
</div>
<!--Add Services -->
<div class="modal fade" id="addservices" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add Service</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               <svg> ... </svg>
            </button>
         </div>
         <form id="model_form" method="POST" action="add_service" class="form-horizontal form-label-left" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="inputdiv mb-4">
                  <label>Heading</label>
                  <input type="text" name="heading" id="heading"class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" placeholder="Enter heading">
               </div>
               <div class="inputdiv mb-4">
                  <label>Description</label>
                  <input type="text" name="description" id="description"class="form-control" placeholder="Enter Description">
               </div>
               <!--<div class="inputdiv mb-4">-->
               <!--    <label>Price</label>-->
               <!--    <input type="text" name="price" id="price"class="form-control" placeholder="Enter Price"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">-->
               <!--</div>-->
               <div class="img-uploader-content mb-4">
                  <label>Upload Model Image</label>
                  <input type="file" class="filepond d-block" id="fileupload" name="image" accept="image/png, image/jpg, image/webp"  onchange="checkextension()"/>
               </div>
               <input type="hidden" name="model" id="model"class="form-control" value="model">
            </div>
            <div class="modal-footer">
               <button type="submit" id="submit_model" class="btn btn btn-light-success" onclick="allLetter(document.form1.text1)" ><i class="flaticon-cancel-12"></i> Submit</button>
            </div>
            <div class="row">
               <div class="col-md-offset-3 col-md-8" style="display:none;" id="add_result"></div>
            </div>
         </form>
      </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- Including Jquery so All js Can run -->
<!-- <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script> -->
<!-- Validadtion js -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!--Add Brands-->
<!--Add Model name-->
<script>
   function checkextension() {
     // alert('sdfsf');
   var file = document.querySelector("#fileupload");
   
   //   if ( /\.(jpe?g|png|gif)$/i.test(file.files[0].name) === false ) 
   //   { 
   //     alert("Only upload jpg,jpge,png file!");
   //     $("#submit_model").attr("disabled", true);
   //  }
   }
   
</script>
<script>
   $('#model_form').validate({
       
       rules: {
           heading: "required",
           description:"required",
           image:"required",
           price:"required"
       },
       
       messages:{
           heading:{
           required: "This Heading  is required",
           }
       },
    
       
   });
   $('#model_form').on('submit', function(e) {
       // alert('sd');
       e.preventDefault();
       var formData = new FormData(this);
       if ($("#model_form").validate().form()) {
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
                       $('#model_form')[0].reset();
                        location.reload();
   
                       // $('#brand_list').bootstrapTable('refresh');
                   }
               });
           }
       }
   });
</script>
<!--Edit model-->
<script>
   $('#update_service').validate({
       rules: {
           heading: "required",
           description:"required"
           // image:"required",
           
       }
   });
   $('#update_service').on('submit', function(e) {
       //    alert('sdffdffs');
       let heading = document.forms["update_service"]["heading"];
       let description = document.forms["update_service"]["description"];
        let price = document.forms["update_service"]["price"];
           if (heading.value == "") {
           alert("Please enter Heading.");
            heading.focus();
            return false;
            
                }
               if (description.value == "") {
                alert("Please enter a description.");
            description.focus();
             return false;
                   }
               if (price.value == "") {
               alert("Please enter a price.");
               price.focus();
               return false;
                    }
   
   return true;
       e.preventDefault();
   
       var formData = new FormData(this);
       if ($("#update_service").validate().form()) {
           $.ajax({
               type: 'POST',
               url: $(this).attr('action'),
               data: formData,
               beforeSend: function() {
                   $('#update_service_btn').html('Please wait..');
               },
               cache: false,
               contentType: false,
               processData: false,
               success: function(result) {
                   $('#update_result').html(result);
                   $('#update_result').show().delay(3000).fadeOut();
                   $('#update_service_btn').html('Update');
                    $('#file').val('');
                    location.reload();
                   //   var redirectUrl = "<?=base_url()?>admin/manage_services";
                   //   window.location.href = redirectUrl;
                   // $('#update_form')[0].reset();
                   // $('#category_list').bootstrapTable('refresh');
                   setTimeout(function() {
                       $('#updateServiceModel').modal('hide');
                   }, 4000);
               }
           });
       }
   });
</script>
<script>
   $(document).on('click', '.delete-service', function() {
       if (confirm('Are you sure? Want to delete category? All related all data will also be deleted')) {
           id = $(this).data("id");
           // image = $(this).data("image");
           $.ajax({
               url: '<?= base_url() ?>admin/delete_service',
               type: "get",
               data: 'id=' + id + '&delete_model=1',
               success: function(result) {
                   if (result == 1) {
                     location.reload();
   
                       // $('#category_list').bootstrapTable('refresh');
                   } else
                       alert('Error! Category could not be deleted');
               }
           });
       }
   });
</script>
<script>
   function ValidationForm() {
     let heading = document.forms["update_service"]["heading"];
     let description = document.forms["update_service"]["description"];
     let price = document.forms["update_service"]["price"];
   //   let select = document.forms["RegForm"]["Subject"];
   //   let pass = document.forms["RegForm"]["Password"];
     if (heading.value == "") {
       alert("Please enter Heading.");
       heading.focus();
       return false;
     }
     if (description.value == "") {
       alert("Please enter a description.");
       description.focus();
       return false;
     }
     if (price.value == "") {
       alert("Please enter a price.");
       email.focus();
       return false;
     }
   
     return true;
   }
   
</script>