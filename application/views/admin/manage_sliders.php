<?php include('includes/sidebar.php') ?>
<style>
   .slider_img{width:250px;}
   .page-meta{
   margin-top:25px;
   }
</style>
<!-- BREADCRUMB -->
<!--<div class="page-meta">-->
<!--   <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
<!--      <ol class="breadcrumb">-->
<!--         <li class="breadcrumb-item"><a href="#">Manage Sliders</a></li>-->
         <!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
<!--      </ol>-->
<!--   </nav>-->
<!--</div>-->
<!-- /BREADCRUMB -->
<div class="row layout-top-spacing">
   <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
      <div class="widget-content widget-content-area br-8">
          <h6 class="m-4">Manage Sliders <button class="btn btn-light-info" style="float:right;margin-top:-5px;" data-bs-toggle="modal" data-bs-target="#add_imgModal">Add</button></h6>
      
         <!--<div class="d-inline-block w-100"><button class="btn btn-light-info mt-3 mx-3" style="float:right;" data-bs-toggle="modal" data-bs-target="#add_imgModal">Add</button></div>-->
         <table  class="table dt-table-hover datatable" style="width:100%">
            <thead>
               <tr>
                  <th>Sr. No.</th>
                  <th>Image</th>
                  <th class="no-content">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  if(!empty($view_data)){
                      
                  foreach($view_data as  $key=>$res_view_data){
                      
                      ?>
               <tr>
                  <td><?=$key+1?></td>
                  <td><button class="btn btn-light-info" data-bs-toggle="modal" data-bs-target="#imgModal<?= $res_view_data->id ?>">View</button></td>
                  <td>
                     <!--<button class="btn btn-light-info" data-bs-toggle="modal" data-bs-target="#add_imgModal">Add</button>-->
                     <a  class="bs-tooltip edit-mpdel " data-bs-toggle="modal" data-bs-target="#updateSliderModel<?= $res_view_data->id ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                           <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                        </svg>
                     </a>
                     <a  class="bs-tooltip model-delete" data-id="<?=$res_view_data->id?>"  data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Delete" aria-label="Delete" data-bs-original-title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                           <polyline points="3 6 5 6 21 6"></polyline>
                           <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                     </a>
                  </td>
                  <!--Image Modal -->
                  <div class="modal fade" id="imgModal<?= $res_view_data->id?>" tabindex="-1" role="dialog" aria-labelledby="imgModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="imgModalLabel">Slider Image</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                 <svg> ... </svg>
                              </button>
                           </div>
                           <div class="modal-body">
                              <img src="<?= base_url($res_view_data->image)?>" alt="brand" class="slider_img">
                           </div>
                           <!--<div class="modal-footer">-->
                           <!--    <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>-->
                           <!--</div>-->
                        </div>
                     </div>
                  </div>
                  <!-- Update Slider -->
                  <div class="modal fade" id="updateSliderModel<?= $res_view_data->id ?>" tabindex="-1" role="dialog" aria-labelledby="msgModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="msgModalLabel">Update Slider Image</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                 <svg> ... </svg>
                              </button>
                           </div>
                           <form id="update_slider"  method="post" action="slider/update_slider"  enctype="multipart/form-data">
                              <div class="modal-body">
                                 <div class="img-uploader-content">
                                    <input type="file" class="filepond" name="image"  id="image"value="<?=$res_view_data->image?>"accept="image/png, image/jpeg, image/jpg, image/webp" />
                                 </div>
                                 <input type="hidden"  name="id"  id="id"value="<?=$res_view_data->id?>"/>
                              </div>
                              <div class="modal-footer">
                                 <button type="submit" id="update_btn"class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Submit</button>
                                 <!--<button class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Submit</button>-->
                                 <!--<input class="btn btn btn-light-success" type="submit" name="Submit" value="Submit"><i class="flaticon-cancel-12">-->
                              </div>
                              <div class="row">
                                 <div class="col-md-offset-3 col-md-8" style="display:none;" id="update_result"></div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </tr>
               <?php } 
                  }?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!--Add Image Modal -->
<div class="modal fade" id="add_imgModal" tabindex="-1" role="dialog" aria-labelledby="msgModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="msgModalLabel">Add Slider Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               <svg> ... </svg>
            </button>
         </div>
         <form id="manage_slider"  method="post" action="slider/insert_data" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="img-uploader-content">
                  <input type="file" class="filepond" id="fileupload"name="image" accept="image/png, image/jpeg, image/jpg, image/webp" required onchange="checkextension()" />
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" id="submit_btn"class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Submit</button>
               <!--<button class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Submit</button>-->
               <!--<input class="btn btn btn-light-success" type="submit" name="Submit" value="Submit"><i class="flaticon-cancel-12">-->
            </div>
         </form>
      </div>
   </div>
</div>
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- Including Jquery so All js Can run -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<!-- Validadtion js -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
   $('#manage_slider').validate({
       rules: {
           image: "required"
           // answer:"required"
   
           }
   });
   $('#manage_slider').on('submit', function(e) {
     //  alert('sd');
       e.preventDefault();
       var formData = new FormData(this);
       if ($("#manage_slider").validate().form()) {
           if (confirm('Are you sure? Want to add slider')) {
               $.ajax({
                   type: 'POST',
                   url: $(this).attr('action'),
                   data: formData,
                   beforeSend: function() {
                       $('#submit_btn').html('Please wait..');
                   },
                   cache: false,
                   contentType: false,
                   processData: false,
                   success: function(result) {
                       $('#add_result').html(result);
                       $('#add_result').show().delay(4000).fadeOut();
                       $('#submit_btn').html('Submit');
                       $('#manage_slider')[0].reset();
                       location.reload();
                   }
               });
           }
       }
   });
</script>
<!-- Update  Slider -->
<script>
   $('#update_slider').validate({
       rules: {
           image: "required"
           // answer:"required"
           }
   });
   $('#update_slider').on('submit', function(e) {
       //   alert('sdffdffs');
       e.preventDefault();
   
       var formData = new FormData(this);
       if ($("#update_slider").validate().form()) {
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
                    $('#file').val('');
                    location.reload();
                   setTimeout(function() {
                       $('#updateSliderModel').modal('hide');
                   }, 4000);
               }
           });
       }
   });
   
   
</script>        <!-- Delete model-->
<script>
   $(document).on('click', '.model-delete', function() {
       if (confirm('Are you sure? Want to delete category? All related all data will also be deleted')) {
           id = $(this).data("id");
           // image = $(this).data("image");
           $.ajax({
               url: '<?= base_url() ?>Slider/delete',
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
<script>
   function checkextension() {
     // alert('sdfsf');
   var file = document.querySelector("#fileupload");
   
   //   if ( /\.(jpe?g|png|gif)$/i.test(file.files[0].name) === false ) 
   //   { 
   //     alert("Only upload jpg,jpge,png file!");
   //     $("#submit_btn").attr("disabled", true);
   //  }
   }
   
</script>