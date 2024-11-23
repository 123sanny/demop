<?php include('includes/header.php')?>
<style>
   .info span{
   color:#013e5c;
   font-weight:500;
   }
   .contact-pages .hotline, .contact-pages .location {
   max-width: 470px;
   }
</style>
<div class="inner-page-banner">
   <div class="breadcrumb-vec-btm">
      <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/inner-banner-btm-vec.png" alt>
   </div>
   <div class="container">
      <div class="row justify-content-center align-items-center text-center">
         <div class="col-lg-6 align-items-center">
            <div class="banner-content">
               <h1>Contact</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?= base_url()?>home/index">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact</li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="banner-img d-lg-block d-none">
               <div class="banner-img-bg">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/inner-banner-vec.png" alt>
               </div>
               <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/inner-banner-img.png" alt>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="contact-pages pt-120 mb-120">
   <div class="container">
      <div class="row align-items-center g-lg-4 gy-5">
         <div class="col-lg-5">
            <div class="contact-left">
               <div class="hotline mb-80">
                  <h3>Contact Us Now</h3>
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/phone-icon4.svg" alt>
                  </div>
                  <div class="info">
                     <h6><a href="tel:+012-3456-789102"><span>Mobile No. :</span><?=$get_contact[0]->mobile?></a></h6>
                     <h6><a href="tel:+012-3456-789102"><span>Emergency No. :</span> <?=$get_contact[0]->emergence_no?></a></h6>
                     <h6><a href="tel:+012-3456-789102"><span>Whatsapp :</span><?=$get_contact[0]->whatsap_no?></a></h6>
                  </div>
               </div>
               <div class="mail location mb-80">
                  <h3>Email</h3>
                  <div class="icon"> 
                     <img width="55px" src="<?= base_url()?>web_assets/images/icon/mail.png" alt>
                  </div>
                  <div class="info">
                     <h6><a href="#"><span>Email :</span><?=$get_contact[0]->email?></a></h6>
                  </div>
               </div>
               <div class="location">
                  <h3>Address</h3>
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/location4.svg" alt>
                  </div>
                  <div class="info">
                     <h6><a href="#"><span>Address :</span> <br><?=$get_contact[0]->address?></a></h6>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="contact-form">
               <?php echo $this->session->flashdata('success')?>
               <?php if ($this->session->flashdata('errors')) { ?>
               <?php $errors = $this->session->flashdata('errors');
                  } ?>
               <h2>Inquire now by contacting us!!</h2>
               <form id="form" action="add_contact" method="post">
                  <div class="row">
                     <div class="col-lg-12 mb-40">
                        <div class="form-inner">
                           <input type="text" name="name" id="name"placeholder="Enter your name"><span id='err'style="color:red"><?php if (!empty($errors['name'])) {    print_r($errors['name']);} ?> 
                        </div>
                     </div>
                     <div class="col-lg-6 mb-40">
                        <div class="form-inner">
                           <input type="text"  name="mobile" id="mobile"placeholder="Enter your mobile number"  pattern="[6789][0-9]{9}" title="Please enter valid phone number"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"><span id='err'style="color:red"><?php if (!empty($errors['mobile'])) {    print_r($errors['mobile']);} ?> 
                        </div>
                        <input type="hidden"  name="type" id="type" value="contact"placeholder="Enter your mobile number">
                     </div>
                     <div class="col-lg-6 mb-40">
                        <div class="form-inner">
                           <input type="text" name="whatsap_no" id="whatsap_no" placeholder="Enter your whatsapp number"  pattern="[6789][0-9]{9}" title="Please enter valid phone number"      onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"><span id='err'style="color:red"><?php if (!empty($errors['whatsap_no'])) {    print_r($errors['whatsap_no']);} ?> 
                        </div>
                     </div>
                     <div class="col-lg-6 mb-40">
                        <div class="form-inner">
                           <input type="text"  name="address" id="address"placeholder="Enter your address"><span id='err'style="color:red"><?php if (!empty($errors['address'])) {    print_r($errors['address']);} ?> 
                        </div>
                     </div>
                     <div class="col-lg-6 mb-40">
                        <div class="form-inner">
                           <input type="text" name="service_type" id="service_type" placeholder="Enter service type"><span id='err'style="color:red"><?php if (!empty($errors['service_type'])) {    print_r($errors['service_type']);} ?> 
                        </div>
                     </div>
                     <div class="col-lg-12 mb-40">
                        <div class="form-inner">
                           <textarea placeholder="Your message" name="message" id="message"></textarea><?php if (!empty($errors['message'])) {    print_r($errors['message']);} ?> 
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="form-inner">
                           <button class="primary-btn1" type="submit">Send Message <i class="bi bi-arrow-right"></i></button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="location-map">
   <div class="vector">
      <img src="<?= base_url()?>web_assets/images/bg/map-vector.png" alt>
   </div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.313561875914!2d78.58082731496413!3d25.448505829326004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3971fc101d1263f1%3A0x73444161d65298de!2sJhansi%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2sbd!4v1658243800106!5m2!1sen!2sbd" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php include('includes/footer.php')?>
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
   $(function() {
   $("#whatsap_no").bind("keydown", function (e) {
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