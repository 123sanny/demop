<?php include('includes/sidebar.php') ?>
<div class="row mt-5">
   <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
      <div class="card mt-3 mb-3">
         <div class="card-body">
            <div class="row">
               <div class="col-md-12 mb-3">
                  <h2>Change Password</h2>
                  <p>Enter your new password to update</p>
               </div>
               <?php echo $this->session->flashdata('success');?>
               <?php echo $this->session->flashdata('error');?>
               <form id="password_form"  method="POST" action ="<?=base_url()?>admin/update_password" class="form-horizontal form-label-left">
                  <div class="col-md-12">
                     <div class="mb-4">
                        <label class="form-label">Current Password</label>
                        <input type="password"  id="old_password" name="old_password"class="form-control">
                     </div>
                     <label id="old_status"></label>
                     <div class="mb-4">
                        <label class="form-label">New Password</label>
                        <input type="password" id="new_password" name="new_password" class="form-control">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="mb-4">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password"class="form-control">
                     </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="row">
                     <div class="col-md-offset-3 col-md-4 alert alert-success" style="display: none;" id="result">
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="mb-4">
                        <button type="submit" id="submit_btn" class="btn btn-secondary w-100">Update</button>
                     </div>
                  </div>
                  <!--<div class="ln_solid"></div>-->
                  <!--        <div class="row">-->
                  <!--            <div class="col-md-offset-3 col-md-4 alert alert-success" style="display: none;" id="result">-->
                  <!--            </div>-->
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="<?= base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
<!-- Validadtion js -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
   $('#password_form').validate({
       rules: {
           old_password: "required",
           new_password: {minlength: 6},
           confirm_password: {
               minlength: 6,
               equalTo: "#new_password"
           }
       },
       messages: {
           confirm_password: {
               equalTo: "password and confirm password must be a same"
           }
       }
   })
</script>
<script>
   // $('#old_password').on('blur input', function () {
   //     var old_password = $(this).val();
   //     if (old_password.length > 4) {
   //         $.ajax({
   //             type: 'POST',
   //             url: '<?=base_url()?>admin/update_password',
   //             data: 'old_password=' + old_password,
   //             beforeSend: function () {
   //                 $('#old_status').html('checking..');
   //             },
   //             success: function (result) {
   //                 if (result == 'True') {
   //                     $('#old_status').html("<i class='fa fa-check-circle fa-2x text-success'></i>");
   //                     allowsubmit = true;
   //                 } else {
   //                     $('#old_status').html("<i class='fa fa-times-circle fa-2x text-danger'></i>");
   //                      $('#old_password').focus();
   //                     allowsubmit = false;
   //                 }
   //             },
   //         });
   //     }
   // });
   //   $('#old_password').on('blur input', function () {
   //     var old_password = $(this).val();
   //     if (old_password.length > 4) {
   //         $.ajax({
   //             type: 'POST',
   //             url: '<?=base_url()?>admin/update_password',
   //             data: 'old_password=' + old_password,
   //             beforeSend: function () {
   //                 $('#old_status').html('checking..');
   //             },
   //             success: function (result) {
   //                 if (result == 'True') {
   //                     $('#old_status').html("<i class='fa fa-check-circle fa-2x text-success'></i>");
   //                     allowsubmit = true;
   //                 } else {
   //                     $('#old_status').html("<i class='fa fa-times-circle fa-2x text-danger'></i>");
   //                     $('#old_password').focus();
   //                     allowsubmit = false;
   //                 }
   //             }
   //         });
   //     }
   // });
</script>
<script>
   // $('#password_form').on('submit', function (e) {
   //     e.preventDefault();
   //     if ($("#password_form").validate().form()) {
   //         // if (allowsubmit) {
   //             var formData = 'new_password=' + $('#new_password').val() + '&old_password=' + $('#old_password').val();
   //             $.ajax({
   //                 type: 'POST',
   //                 url: $(this).attr('action'),
   //                 data: formData,
   //                 beforeSend: function () {
   //                     $('#submit_btn').html('Please wait..');
   //                 },
   //                 success: function (result) {
   //                     $('#old_status').html('');
   //                     $('#result').html(result);
   //                     $('#result').show().delay(4000).fadeOut();
   //                     $('#submit_btn').html('Submit');
   //                     $('#password_form')[0].reset();
   //                 }
   //             });
   //         } else {
   //             return false;
   //         }
       
   // });
</script>