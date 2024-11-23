<?php include('includes/header.php')?>
<div class="inner-page-banner">
   <div class="breadcrumb-vec-btm">
      <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/inner-banner-btm-vec.png" alt>
   </div>
   <div class="container">
      <div class="row justify-content-center align-items-center text-center">
         <div class="col-lg-6 align-items-center">
            <div class="banner-content">
               <h1>FAQ</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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
<div class="faq-page pt-90 mb-90">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <!-- General Questions Section -->
            <div class="genarel-qustions-area ">
               <h2>General Questions</h2>
               <p>Donec bibendum enim ut elit porta ullamcorper. Vestibulum Nai quam nulla, venenatis eget dapibus ac, catali aman topuny wekemdini iaculis vitae nulla. Morbi mattis nec mi ac mollis. </p>
               <?php foreach($faqu as $key => $faq): ?>
               <div class="accordion">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="heading<?= $key ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $key ?>" aria-expanded="true" aria-controls="collapse<?= $key ?>">
                        <?= $key + 1 ?>. <?= $faq->question ?>
                        </button>
                     </h2>
                     <div id="collapse<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $key ?>" data-bs-parent=".genarel-qustions-area">
                        <div class="accordion-body">
                           <?= $faq->answer ?>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="h2-contact-area mb-90">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="row">
               <div class="col-lg-4">
                  <div class="contact-wrap">
                     <div class="section-title">
                        <h2>Contact</h2>
                     </div>
                     <?php echo $this->session->flashdata('success') ?>
                     <?php if ($this->session->flashdata('errors')) { ?>
                     <?php $errors = $this->session->flashdata('errors');
                        } ?>
                     <form id="cont_form" action="add_contact_faq" method="post">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-inner user">
                                 <input type="text" name="name" id="name" placeholder="Enter your name">
                                 <span id='err'style="color:red">
                                 <?php if (!empty($errors['name'])) {
                                    print_r($errors['name']);
                                    }
                                    ?> 
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-inner email">
                                 <input type="email"name="email" id="email" placeholder="Enter your email"> <span id='err'style="color:red"><?php if (!empty($errors['email'])) {    print_r($errors['email']);} ?> 
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-inner querry">
                                 <input type="text" name="service_type" id="service_type"placeholder="Service type"><span id='err'style="color:red"><?php if (!empty($errors['service_type'])) {    print_r($errors['service_type']);} ?> 
                              </div>
                              <input type="hidden" name="type" id="type"placeholder="Service type"value="faq_contact">
                           </div>
                           <div class="col-lg-12">
                              <div class="form-inner">
                                 <textarea placeholder="Your message" name="message"id="message"></textarea><span id='err'style="color:red"><?php if (!empty($errors['message'])) {    print_r($errors['message']);} ?> 
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-inner">
                                 <button class="primary-btn3" type="submit">send Now</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="contact-img">
                     <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/h2-contact-img.png" alt="contact-img">
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="section-title">
                     <h2>FAQ</h2>
                  </div>
                  <div class="accordion faq-section" id="faqAccordion">
                     <?php if(!empty($fques)): ?>
                     <?php $i = 0; foreach($fques as $row): $i++; ?>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFaq<?= $i ?>">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq<?= $i ?>" aria-expanded="false" aria-controls="collapseFaq<?= $i ?>">
                           <?= $i ?>. <?= $row->question ?>
                           </button>
                        </h2>
                        <div id="collapseFaq<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="headingFaq<?= $i ?>" data-bs-parent="#faqAccordion">
                           <div class="accordion-body">
                              <?= $row->answer ?>
                           </div>
                        </div>
                     </div>
                     <?php endforeach; ?>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   document.addEventListener("DOMContentLoaded", function() {
       // Add click event listener to all accordion buttons
       var accordionButtons = document.querySelectorAll('.accordion-button');
       accordionButtons.forEach(function(button) {
           button.addEventListener('click', function() {
               // Close all other accordion sections
               var accordionSections = document.querySelectorAll('.accordion-collapse');
               accordionSections.forEach(function(section) {
                   if (section !== button.nextElementSibling) {
                       section.classList.remove('show');
                   }
               });
           });
       });
   });
</script>
<?php include('includes/footer.php')?>