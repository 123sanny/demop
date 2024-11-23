<?php include('includes/sidebar.php') ?>
<style>  
   .brand_img{width:50px;}
</style>
<!-- BREADCRUMB -->
<!--<div class="page-meta">-->
<!--    <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="#">Contact Us</a></li>-->
<!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
<!--        </ol>-->
<!--    </nav>-->
<!--</div>-->
<!-- /BREADCRUMB -->
<?php echo $this->session->flashdata('success') ?>
<div class="row layout-top-spacing">
   <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
      <div class="widget-content widget-content-area br-8">
         <h6 class="m-4">Contact Us</h6>
         <table  class="table dt-table-hover datatable"id="brand_list" style="width:100%;">
            <thead>
               <tr>
                  <th>Sr.</th>
                  <th>Phone Number</th>
                  <th>Whatsap Number</th>
                  <th>Emergency Number</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th class="no-content">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  if(!empty($contact)){
                  foreach($contact as $row){?>
               <td>1</td>
               <td><?=$row->mobile?></td>
               <td><?=$row->whatsap_no?></td>
               <td><?=$row->emergence_no?></td>
               <td><?=$row->email?></td>
               <td><?=$row->address?></td>
               <td>
                  <a class="bs-tooltip edit-brands" data-bs-toggle="modal" data-bs-target="#contactModal<?=$row->id?>">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                     </svg>
                  </a>
                  <!--<a class="bs-tooltip delete-contact" data-id="<?= $row->id ?>"data-id=""data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Delete" aria-label="Delete" data-bs-original-title="Delete">-->
                  <!--    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>-->
                  <!--</a>-->
               </td>
               <!--Update Brand Modal -->
               <!-- Button trigger modal -->
               <!-- Modal -->
               <div class="modal fade" id="contactModal<?=$row->id?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="addModaLabel">Update Contact Details</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <svg> ... </svg>
                           </button>
                        </div>
                        <?php echo $this->session->flashdata('success');?>
                        <?php if ($this->session->flashdata('errors')) { ?>
                        <?php $errors = $this->session->flashdata('errors');
                           } ?>
                        <form id="updateform" method="POST" action="<?=base_url('admin/update_contact_us')?>"  class="form-horizontal form-label-left">
                           <div class="modal-body">
                              <div class="inputdiv mb-4">
                                 <label>Phone Number</label>
                                 <input type="text" id="mobile" name="mobile" class="form-control" value="<?=$row->mobile?>"pattern="[7-9]{1}[0-9]{9}" title="Please enter valid phone number"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"><span id='err'style="color:red"required> <?php if (!empty($errors['mobile'])){ print_r($errors['mobile']);}?>
                              </div>
                              <div class="inputdiv mb-4">
                                 <label>Whatsap Number</label>
                                 <input type="text" id="w_mobile" name="w_mobile" class="form-control" value="<?=$row->whatsap_no?>"pattern="[7-9]{1}[0-9]{9}" title="Please enter valid phone number"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"><span id='err'style="color:red"required> <?php if (!empty($errors['mobile'])){ print_r($errors['mobile']);}?>
                              </div>
                              <div class="inputdiv mb-4">
                                 <label>Emergency Number</label>
                                 <input type="text" id="e_mobile" name="e_mobile" class="form-control" value="<?=$row->emergence_no?>"pattern="[7-9]{1}[0-9]{9}" title="Please enter valid phone number"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"><span id='err'style="color:red"required> <?php if (!empty($errors['mobile'])){ print_r($errors['mobile']);}?>
                              </div>
                              <div class="inputdiv mb-4">
                                 <label>Email</label>
                                 <input type="email" id="email" name="email"class="form-control" value="<?=$row->email?>"required><span id='err'style="color:red"> <?php if (!empty($errors['email'])){ print_r($errors['email']);}?>
                              </div>
                              <div class="inputdiv mb-4">
                                 <label>Address</label>
                                 <input type="text" id="address" name="address"class="form-control" value="<?=$row->address?>"required><span id='err'style="color:red"> <?php if (!empty($errors['address'])){ print_r($errors['address']);}?>
                              </div>
                              <input type="hidden"  name="id" name="id"value="<?=$row->id?>">
                           </div>
                           <div class="modal-footer">
                              <button type="submit" id="update_btn"class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Update</button>
                           </div>
                     </div>
                     <div class="row">
                     <div class="col-md-offset-3 col-md-8" style="display:none;" id="updat_result"></div>
                     </div>
                     </form>
                  </div>
               </div>
               <?php }
                  }else{
                      echo"";
                  }
                  ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- Including Jquery so All js Can run -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<!-- Validadtion js -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</script>
<!--Edit model-->
<script>
   $('#updateform').validate({
       rules: {
           mobile: "required",
           email:"required",
           address:"required"
           
           
       }
   });
   $('#updateform').on('submit', function(e) {
       let mobile = document.forms["updateform"]["mobile"];
       let email = document.forms["updateform"]["email"];
       let address = document.forms["updateform"]["address"];
       let w_mobile = document.forms["updateform"]["w_mobile"];
       let e_mobile = document.forms["updateform"]["e_mobile"];
   
       //  let price = document.forms["update_form"]["price"];
           if (mobile.value == "") {
           alert("Please enter Mobile.");
           mobile.focus();
            return false;
                }
               if (email.value == "") {
                alert("Please enter a Email.");
            email.focus();
             return false;
                   }
                    if (address.value == "") {
                alert("Please enter a Address.");
            address.focus();
             return false;
                   }
                    if (w_mobile.value == "") {
                alert("Please enter a Whatsap No.");
            w_mobile.focus();
             return false;
                   }
                    if (e_mobile.value == "") {
                alert("Please enter a Emergency No.");
            e_mobile.focus();
             return false;
                   }
   return true;
   
       //   alert('sdffdffs');
       e.preventDefault();
   
       var formData = new FormData(this);
       if ($("#updatorm").validate().form()) {
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
   
                   // $('#update_form')[0].reset();
                   // $('#category_list').bootstrapTable('refresh');
                   setTimeout(function() {
                       $('#contactModal').modal('hide');
                   }, 4000);
               }
           });
       }
   });
   
   
   
</script>
<script>
   $(document).on('click', '.delete-contact', function() {
       if (confirm('Are you sure? Want to delete category? All related all data will also be deleted')) {
           id = $(this).data("id");
           // image = $(this).data("image");
           $.ajax({
               url: '<?= base_url() ?>admin/delete_contact',
               type: "get",
               data: 'id=' + id + '&delete_contact=1',
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
   $(function() {
   $("#mobile").bind("keydown", function (e) {
   if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
        // 0-9
       var val = $(this).val();
       if (!val.match(/^\d{10}$/))
       {
       }
       else
       {
         // console.log("success");
          return false; // to restrict user to not enter more than 10 digit
       }
   }
   if(val<10){
   //console.log(" match 10 digit")
   
   }
   
   });
   });
   
</script><script>
   $(function() {
   $("#w_mobile").bind("keydown", function (e) {
   if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
        // 0-9
       var val = $(this).val();
       if (!val.match(/^\d{10}$/))
       {
       }
       else
       {
         // console.log("success");
          return false; // to restrict user to not enter more than 10 digit
       }
   }
   if(val<10){
   //console.log(" match 10 digit")
   
   }
   
   });
   });
   
</script>