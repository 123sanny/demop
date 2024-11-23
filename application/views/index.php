<?php include('includes/header.php')?>
<style>
   .col3_class{
   width:49%;
   }
   .bestcare_btn2{
   display:none;
   }
   .bestcare_btn1{
   display:flex;
   }
   @media only screen and (max-width: 600px) {
   .bestcare_btn1{
   display:none;
   }
   .bestcare_btn2{
   display:flex
   }
   .col3_class{
   width:50%;
   margin-top:25px;
   }
   .mb_120_mob{
   margin-bottom:0px !important;
   }
   }
   .services-icon img{
   width:80px !important;
   }
   .swiper-slide .main_slide_img{
   height:500px;
   width:800px;
   }
   .h3-offer-area .offer-left {
   /*background-image: url(<?= base_url()?>web_assets/images/dogbg.png);*/
   background: #fef5f0;
   }
   .h3-offer-area .offer-left .offer-content {
   max-width: 90%;
   width: 100%;
   }
   .h2-services-area .services-top .services-card .services-content h3 a {
   font-size:2.15rem;
   }
   .circle {
   position: absolute !important;
   width: 450px;
   height: 450px;
   border-radius: 50%;
   top: -7%;
   left: 5%;
   background-color: #013e5c;
   animation: blink 2s infinite alternate;
   position: relative;
   overflow: hidden;
   z-index:1;
   }
   @keyframes blink {
   0% {
   background-color: #013e5c;
   }
   50% {
   background-color: #013e5c78;
   }
   100% {
   background-color: #013e5c36;
   }
   }
   .gif {
   position: relative;
   z-index:2;
   }
   .h2-services-area .services-top .services-card .services-content h3 a{
   font-size:1.85rem;       
   }
</style>
<div class="h3-offer-area">
   <div class="container-fluid p-0 overflow-hidden">
      <div class="row">
         <div class="col-lg-6 p-0">
            <div class="offer-left">
               <div class="offer-content" style="position:relative;">
                  <img class="gif" src="<?= base_url()?>web_assets/images/dogbarks.gif" alt="Barking Dog GIF">
                  <div class="circle"></div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 p-0">
            <div class="offer-right">
               <div class="slider-btn-wrap">
                  <div class="slider-btn prev-btn-15 mb-40">
                     <i class="bi bi-arrow-up"></i>
                  </div>
                  <div class="slider-btn next-btn-15">
                     <i class="bi bi-arrow-down"></i>
                  </div>
               </div>
               <div class="row position-relative">
                  <div class="swiper h3-offer-slider">
                     <div class="swiper-wrapper">
                        <?php foreach($sliders as $slider){ ?>
                        <div class="swiper-slide">
                           <img class="img-fluid main_slide_img" src="<?= base_url($slider->image)?>" alt>
                        </div>
                        <?php } ?>
                        <!--<div class="swiper-slide">-->
                        <!--<img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/slider3.webp" alt>-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="h2-services-area mb-120">
   <div class="services-top">
      <div class="services-section-card">
         <div class="card-vector">
            <img class="services-card-vect-01" src="<?= base_url()?>web_assets/images/bg/h2-services-title-rt.png" alt>
            <img class="services-card-vect-02" src="<?= base_url()?>web_assets/images/bg/h2-services-title-lb.png" alt>
         </div>
         <div class="services-title">
            <h2>See Our All <span>Services.</span></h2>
            <a class="primary-btn2" href="<?= base_url()?>Home/service_page">Book Our Service</a>
         </div>
      </div>
      <div class="swiper h2-services-slider">
         <div class="swiper-wrapper">
            <?php foreach($get_data as $services){ ?>
            <div class="swiper-slide ">
               <div class="services-card daycare-card service_div">
                  <div class="card-vector">
                     <img class="services-card-vect-01" src="<?= base_url()?>web_assets/images/bg/services-card-vec.png" alt>
                     <img class="services-card-vect-02" src="<?= base_url()?>web_assets/images/bg/services-card-vec2.png" alt>
                  </div>
                  <div class="services-icon">
                     <img src="<?= base_url($services->image)?>" alt>
                  </div>
                  <div class="services-content">
                     <h3><a href="service-details.html"><?=$services->heading?></a></h3>
                     <p><?=$services->description?></p>
                     <div class="more-btn">
                        <a href="<?= base_url('Home/service_page')?>">More Details<img src="<?= base_url()?>web_assets/images/icon/h2-btn-arrow.svg" alt></a>
                     </div>
                  </div>
               </div>
            </div>
            <?php }?>
         </div>
      </div>
   </div>
</div>
<div class="h1-partner-area mb-120 mb_120_mob">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-6">
            <div class="partner-left">
               <div class="section-title1">
                  <span>Your Pet’s Wellness, Our Passion.</span>
                  <h2>Pet Wellness Hub</h2>
               </div>
               <div class="author-name-expariance">
                  <div class="author-name">
                     <div class="img">
                        <img width="65px" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-1.png" alt>
                     </div>
                     <div class="name-deg">
                        <span>Join With Us !!</span>
                        <h4>Pamper || Nourish || Thrive</h4>
                     </div>
                  </div>
                  <div class="expariance">
                     <img src="<?= base_url()?>web_assets/images/icon/expriance.svg" alt>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6">
            <div class="row justify-content-center bestcare_btn1" style="text-align:center;">
               <div class="col-lg-3 col-md-3 col-sm-4 col-12 justify-content-center col3_class">
                  <div class="partner-img">
                     <a class="primary-btn1" style="padding:15px 20px;" href="<?= base_url()?>Home/service_page">Book Your Service For Your Pet's health</a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-4 col-12 justify-content-center col3_class">
                  <div class="partner-img">
                     <a class="primary-btn1" style="padding:15px 20px;" href="<?= base_url()?>Home/contact">Make A Reservation Enquire Now</a>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center bestcare_btn2" style="text-align:center;">
               <div class="col-lg-3 col-md-3 col-sm-4 col-3 justify-content-center col3_class">
                  <div class="partner-img">
                     <a class="primary-btn1" style="padding:15px 20px;" href="<?= base_url()?>Home/service_page">Book Services</a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-4 col-3 justify-content-center col3_class">
                  <div class="partner-img">
                     <a class="primary-btn1" style="padding:15px 20px;" href="<?= base_url()?>Home/contact">Enquire Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="h1-story-area pt-90 mb-120">
   <div class="container">
      <div class="row g-lg-4 gy-5">
         <div class="col-lg-6">
            <div class="section-title1">
               <span><img src="<?= base_url()?>web_assets/images/icon/section-vec-l1.svg" alt>About Us<img src="<?= base_url()?>web_assets/images/icon/section-vec-r1.svg" alt></span>
               <h2>come to know what we have done about pets.</h2>
            </div>
            <div class="story-content">
               <p>Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie vulputate in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone pellentesquea. thisaton Vestibulum ut aliquet risus. In hac habitasse plateajoa dictumst. Nuncet posuere scelerisque justo in accumsan.</p>
               <div class="story-title-reviews">
                  <h3>We Think Working Process may <span>increase</span> mindset.</h3>
               </div>
               <p>Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie vulputate in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone pellentesquea. thisaton Vestibulum ut aliquet risus.</p>
            </div>
         </div>
         <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
            <div class="story-img">
               <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/story-img1.png" alt>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="h2-choose-area mb-120">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title2 text-center">
               <h2>Why Choose Us</h2>
               <p>Enjoy Your Holiday We Can Keep Them Happy Your Pet Our Priority Happy Pets, Happy Humans We Are The Best Of This Country We Are Always Ready For your pet.</p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center pt-90 pb-50 g-4">
         <div class="col-lg-3 col-md-4 col-sm-6 col-10">
            <div class="single-card">
               <div class="icon">
                  <img src="<?= base_url()?>web_assets/images/icon/care2.svg" alt>
               </div>
               <div class="content">
                  <h4>Personalized care</h4>
                  <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-10">
            <div class="single-card">
               <div class="icon">
                  <img src="<?= base_url()?>web_assets/images/icon/team2.svg" alt>
               </div>
               <div class="content">
                  <h4>Trusted Team</h4>
                  <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-10">
            <div class="single-card">
               <div class="icon">
                  <img src="<?= base_url()?>web_assets/images/icon/mind2.svg" alt>
               </div>
               <div class="content">
                  <h4>Peace of mind</h4>
                  <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-6 col-10">
            <div class="single-card">
               <div class="icon">
                  <img src="<?= base_url()?>web_assets/images/icon/mind2.svg" alt>
               </div>
               <div class="content">
                  <h4>Nice Environment</h4>
                  <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--<div class="partner-area">-->
   <!--<div class="container">-->
   <!--<div class="row">-->
   <!--    <h1>" Bringing joy to furry friends and their human companions, one paw at a time. "</h1>-->
   <!--</div>-->
   <!--</div>-->
   <!--</div>-->
</div>
<div class="h1-feature-area">
   <div class="container-fluid p-0">
      <div class="row justify-content-center bg">
         <div class="col-lg-10 gap-4 d-flex align-items-center justify-content-lg-between justify-content-center flex-lg-nowrap flex-wrap ">
            <div class="feature-left">
               <div class="single-card mb-45">
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/badge1.svg" alt>
                  </div>
                  <div class="content">
                     <h4>ID Badged</h4>
                     <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                  </div>
               </div>
               <div class="single-card">
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/checked1.svg" alt>
                  </div>
                  <div class="content">
                     <h4>DBS Checked</h4>
                     <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                  </div>
               </div>
            </div>
            <div class="freture-title">
               <h2>Your Pets Are <span>100% Safe</span> at Our Care.</h2>
            </div>
            <div class="feature-right">
               <div class="single-card mb-45">
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/insured1.svg" alt>
                  </div>
                  <div class="content">
                     <h4>Fully Insured</h4>
                     <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                  </div>
               </div>
               <div class="single-card">
                  <div class="icon">
                     <img src="<?= base_url()?>web_assets/images/icon/fast-aid1.svg" alt>
                  </div>
                  <div class="content">
                     <h4>Pet First-Aid Trained</h4>
                     <p>Pellentesque maximus augue orci, quis congue purus iaculison</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="h1-feature-counter mb-120">
   <div class="container-md container-fluid">
      <div class="row justify-content-center g-md-4 gy-5">
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="counter-single client">
               <div class="counter-icon">
                  <img src="<?= base_url()?>web_assets/images/icon/client.svg" alt="image">
               </div>
               <div class="coundown">
                  <div class="d-flex align-items-center gap-2">
                     <h3 class="odometer" data-odometer-final="100">
                        00
                     </h3>
                     <span>+</span>
                  </div>
                  <p>Client Served</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="counter-single animals">
               <div class="counter-icon">
                  <img src="<?= base_url()?>web_assets/images/icon/animals.svg" alt="image">
               </div>
               <div class="coundown">
                  <div class="d-flex align-items-center gap-12">
                     <h3 class="odometer" data-odometer-final="700">
                        00
                     </h3>
                     <span>+</span>
                  </div>
                  <p>Served animals</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="counter-single walked">
               <div class="counter-icon">
                  <img src="<?= base_url()?>web_assets/images/icon/walked.svg" alt="image">
               </div>
               <div class="coundown">
                  <div class="d-flex align-items-center gap-2">
                     <h3 class="odometer" data-odometer-final="1000">
                        00
                     </h3>
                  </div>
                  <p>Miles Walked </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="counter-single years">
               <div class="counter-icon">
                  <img src="<?= base_url()?>web_assets/images/icon/years.svg" alt="image">
               </div>
               <div class="coundown">
                  <div class="d-flex align-items-center gap-2">
                     <h3 class="odometer" data-odometer-final="05">
                        00
                     </h3>
                  </div>
                  <p>Combined years</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="gallery-img-area">
   <div class="swiper gallery-1">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-11.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-1.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-22.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-2.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-33.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-3.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-44.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-4.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-55.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-5.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-66.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-6.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-77.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-7.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-88.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-8.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="<?= base_url()?>web_assets/images/bg/gallery/gallery-99.png" data-fancybox="gallery" class="gallery2-img">
               <div class="gallery-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/gallery/gallery-9.png" alt>
                  <div class="overlay">
                     <div class="zoom-icon">
                        <i class="bi bi-zoom-in"></i>
                     </div>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>
<?php include('includes/footer.php')?>