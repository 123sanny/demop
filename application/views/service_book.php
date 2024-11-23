<?php include('includes/header.php')?>
<style>
   .form-inner .nice-select .list {
   background: #121528;
   border-radius: 5px;
   width: 100%;
   padding: 3px;
   color:white;
   }
   .form-inner .nice-select .option.focus, .services-details-area .services-datails-content .service-area .form-inner .nice-select .option.selected.focus {
   background: var(--gradient-color);
   color:white;
   }
</style>
<div class="h2-working-process pt-90 mb-80">
   <div class="container">
      <div class="row mb-60">
         <div class="col-lg-12">
            <div class="section-title2 text-center">
               <h2>Three Step And enjoy your day.</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="work-process-area">
               <div class="work-process-card">
                  <div class="sl-no">
                     <span>Step</span>
                     <h3>01</h3>
                  </div>
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/search2.svg" alt>
                  </div>
                  <div class="work-content text-center">
                     <h3>Select Service</h3>
                     <p>Read verified reviews by pet owners like you and choose a sitter who’s a great match for you .</p>
                  </div>
               </div>
               <div class="work-proces-arrow">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/h2-work-proces-arrow.png" alt>
               </div>
               <div class="work-process-card two">
                  <div class="sl-no">
                     <span>Step</span>
                     <h3>02</h3>
                  </div>
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/appoinment2.svg" alt>
                  </div>
                  <div class="work-content text-center">
                     <h3>Book Your Day</h3>
                     <p>Read verified reviews by pet owners like you and choose a sitter who’s a great match for you .</p>
                  </div>
               </div>
               <div class="work-proces-arrow">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/h2-work-proces-arrow.png" alt>
               </div>
               <div class="work-process-card three">
                  <div class="sl-no">
                     <span>Step</span>
                     <h3>03</h3>
                  </div>
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/relax2.svg" alt>
                  </div>
                  <div class="work-content text-center">
                     <h3>Have Relax</h3>
                     <p>Read verified reviews by pet owners like you and choose a sitter who’s a great match for you .</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="checkout-section  pb-80">
   <div class="container">
      <div class="row g-4">
         <div class="col-lg-12">
            <div class="form-wrap box--shadow mb-30">
               <h4 class="title-25 mb-20">Service Request Form</h4>
               <?php echo $this->session->flashdata('success')?>
               <?php if ($this->session->flashdata('errors')) { ?>
               <?php $errors = $this->session->flashdata('errors');
                  } ?>
               <form action="<?=base_url('home/add_service_book')?>" method="post" id="form_data">
                  <div class="row">
                     <div class="col-12">
                        <div class="form-inner">
                           <label>Name</label>
                           <input type="text" name="name" id="name" placeholder="Enter your name"><span id='err'style="color:red"><?php if (!empty($errors['name'])) {    print_r($errors['name']);} ?> </span> 
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-inner">
                           <label>Contact Number</label>
                           <input type="text" name="mobile" id="mobile" placeholder="Your Phone Number" pattern="^(\+91[\-\s]?)?[0]?(91)?[6789]\d{9}$"
                              oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" /  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                           <span id='err'style="color:red"><?php if (!empty($errors['mobile'])) {    print_r($errors['mobile']);} ?> </span>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-inner">
                           <label>Address</label>
                           <input type="text" name="address" id="address" placeholder="Enter your address">
                           <span id='err'style="color:red"><?php if (!empty($errors['address'])) {    print_r($errors['address']);} ?></span> 
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="form-inner">
                           <label>Select Service Type</label>
                           <select id="service_id" name="service_id">
                              <option value="">Choose Services...</option>
                              <?php  foreach($get_service as $row){?>
                              <option value="<?=$row->id?>"><?=$row->heading?></option>
                              <?php } ?>
                           </select>
                           <span id='err'style="color:red"><?php if (!empty($errors['service_id'])) {    print_r($errors['service_id']);} ?></span> 
                        </div>
                     </div>
                     <!--<div class="col-lg-12">-->
                     <!--<div class="form-inner">-->
                     <!--<label>Select Service Type</label>-->
                     <!--<div class="nice-select" tabindex="0" name="service"><span class="current">Choose Services...</span>-->
                     <!--<ul class="list">-->
                     <!-- <?php  foreach($get_service as $row){?>-->
                     <!--<li data-value="Grooming" class="option"><?=$row->heading?></li>-->
                     <!--<li data-value="Bathing" class="option">Bathing</li>-->
                     <!--<li data-value="Walking" class="option">Walking</li>-->
                     <!--<li data-value="Training" class="option">Training</li>-->
                     <!--<li data-value="food" class="option">Pet food</li>-->
                     <!--<li data-value="hostel" class="option">Pet hostel</li>-->
                     <!--<li data-value="Consulting" class="option">Pet Consulting</li>--> 
                     <!--<?php } ?>-->
                     <!--</ul>-->
                     <!--</div>-->
                     <!--</div>-->
                     <!--</div>-->
                     <div class="col-lg-6">
                        <div class="form-inner">
                           <label>Duration</label>
                           <select id="duration" name="duration">
                              <option value="">Choose an option</option>
                              <?php  foreach($booking_date as $date){?>
                              <option value="<?=$date->time?>"><?=$date->time?></option>
                              <!--<option value="11AM to 1PM">11AM to 1PM</option>-->
                              <!--<option value="1PM to 3PM">1PM to 3PM</option>-->
                              <!--<option value="3PM to 5PM">3PM to 5PM</option>-->
                                  <?php } ?>
                           </select>
                           <span id='err'style="color:red"><?php if (!empty($errors['duration'])) {print_r($errors['duration']);} ?> </span> 
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-inner date">
                           <label>Date</label>
                           <input autocomplete="off" type="text" id="datepicker" name="date" placeholder="DD/MM/YYYY">
                           <span id='err'style="color:red"><?php if (!empty($errors['date'])) {print_r($errors['date']);} ?> </span> 
                        </div>
                     </div>
                  </div>
                  <!--</form>-->
            </div>
            <div class="form-wrap box--shadow">
            <h4 class="title-25 mb-20">Add Pet Details</h4>
            <!--<form action="add_service_book" method="post" id="form_data1">-->
            <div class="row">
            <div class="col-lg-6">
            <div class="form-inner">
            <label>What Type of Pet ? </label>
            <select id="type_of_pet" name="type_of_pet">
            <option value="">Choose an option</option>
            <option value="Cat">Cat</option>
            <option value="Dog">Dog</option>
            </select>
            <span id='err'style="color:red"><?php if (!empty($errors['type_of_pet'])) {    print_r($errors['type_of_pet']);} ?> </span> 
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-inner">
            <label>Breed of Your Pet ?</label>
            <input type="text" name="your_pet" placeholder="Enter your pet's breed">
            <span id='err'style="color:red"><?php if (!empty($errors['your_pet'])) {    print_r($errors['your_pet']);} ?> </span> 
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-inner">
            <label>Gender of Your Pet ?  </label>
            <select id="gender"name="gender">
            <option value="">Choose an option</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
            <span id='err'style="color:red"><?php if (!empty($errors['gender'])) {    print_r($errors['gender']);} ?> </span> 
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-inner">
            <label>Size of your Pet ?  </label>
            <select id="size_pet" name="size_pet">
            <option value="">Choose an option</option>
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Lagrge">Large</option>
            </select>
            <span id='err'style="color:red"><?php if (!empty($errors['size_pet'])) {    print_r($errors['size_pet']);} ?> </span> 
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-inner">
            <label>How Aggressive is your Pet? </label>
            <select id="aggressive_your_pet" name="aggressive_your_pet">
            <option value="">Choose an option</option>
            <option value="Low">Low</option>
            <option value="Normal">Normal</option>
            <option value="High">High</option>
            </select>
            <span id='err'style="color:red"><?php if (!empty($errors['aggressive_your_pet'])) {    print_r($errors['aggressive_your_pet']);} ?> </span> 
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-inner">
            <label>How old is your Pet?</label>
            <!--<select id="duration">-->
            <!--<option>Choose an option</option>-->
            <!--<option>< 3 months</option>-->
            <!--<option>< 11 years</option>-->
            <!--<option>11+ years</option>-->
            <!--</select>-->
            <input type="text" name="age"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
            <span id='err'style="color:red"><?php if (!empty($errors['age'])) {    print_r($errors['age']);} ?> </span> 
            </div>
            </div>
            <!--<div class="col-lg-6">-->
            <!--<div class="form-inner">-->
            <!--<label>In your Home</label>-->
            <!--<input type="text" name="home">-->
            <!--<span id='err'style="color:red"><?php if (!empty($errors['home'])) {    print_r($errors['home']);} ?> </span> -->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-lg-6">-->
            <!--<div class="form-inner">-->
            <!--<label>Flat Transparent rate</label>-->
            <!--<input type="text" name="flate_transparent_rate">-->
            <!--<span id='err'style="color:red"><?php if (!empty($errors['flate_transparent_rate'])) {    print_r($errors['flate_transparent_rate']);} ?></span>  -->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-12">-->
            <!--<div class="form-inner">-->
            <!--<label>Professional experience</label>-->
            <!--<input type="text" name="p_experience"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">-->
            <!--<span id='err'style="color:red"><?php if (!empty($errors['p_experience'])) {    print_r($errors['p_experience']);} ?> </span> -->
            <!--</div>-->
            <!--</div>-->
            <div class="col-12">
            <div class="form-inner">
            <textarea name="message" placeholder="Additional Comment"  name="message"rows="3"></textarea>
            <span id='err'style="color:red"><?php if (!empty($errors['message'])) {    print_r($errors['message']);} ?> </span> 
            </div>
            </div>
            </div>
            <button class="primary-btn1" type="submit" id="submit_btn"  name="submit"style="padding:8px 80px;">Submit</button>
            <div class="row">
            <div class="col-md-offset-3 col-md-8" style="display:none;" id="add_result"></div>
            </div>
            </form>
            </div>
         </div>
      </div>
   </div>
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
   
</script>