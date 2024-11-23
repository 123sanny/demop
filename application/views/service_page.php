<?php include "includes/header.php"; ?>
<style>
   .img{
   width:40px;
   }
   .services-card1 {
    min-height: 310px;
}
</style>
<!--<div class="inner-page-banner">-->
<!--<div class="breadcrumb-vec-btm">-->
<!--<img class="img-fluid" src="<?= base_url() ?>web_assets/images/bg/inner-banner-btm-vec.png" alt>-->
<!--</div>-->
<!--<div class="container">-->
<!--<div class="row justify-content-center align-items-center text-center">-->
<!--<div class="col-lg-6 align-items-center">-->
<!--<div class="banner-content">-->
<!--<h1>Services</h1>-->
<!--<nav aria-label="breadcrumb">-->
<!--<ol class="breadcrumb">-->
<!--<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>-->
<!--<li class="breadcrumb-item active" aria-current="page">Services</li>-->
<!--</ol>-->
<!--</nav>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-lg-6">-->
<!--<div class="banner-img d-lg-block d-none">-->
<!--<div class="banner-img-bg">-->
<!--<img class="img-fluid" src="<?= base_url() ?>web_assets/images/bg/inner-banner-vec.png" alt>-->
<!--</div>-->
<!--<img class="img-fluid" src="<?= base_url() ?>web_assets/images/bg/inner-banner-img.png" alt>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<div class="hero-style-1">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-lg-11">
            <div class="row">
               <div class="col-xxl-6 col-xl-5 d-flex align-items-center">
                  <div class="banner-content ">
                     <div class="tag">
                        <ul>
                           <li>Trustworthy</li>
                           <li>Safely</li>
                           <li>Loyalty</li>
                        </ul>
                     </div>
                     <h1>To Ensure Perfect<br> Service Of Your <span id="js-rotating">cat., dog.</span></h1>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-7 d-flex align-items-center justify-content-md-start justify-content-center">
                  <div class="banner-img">
                     <img class="img-fluid" src="<?= base_url() ?>web_assets/images/bg/new-banner-img.png" alt>
                  </div>
                  <div class="reservation-review">
                     <div class="reservation-btn">
                        <a class="primary-btn1" href="<?= base_url() ?>Home/service_book">Book Your Service</a>
                     </div>
                     <div class="review-area" style="visibility:hidden">
                        <ul>
                           <li>
                              <div class="single-review">
                                 <div class="icon">
                                    <img src="<?= base_url() ?>web_assets/images/icon/trustpilot001.svg" alt>
                                    <span>reviews</span>
                                 </div>
                                 <div class="reviews">
                                    <ul>
                                       <li><i class="bi bi-star-fill"></i></li>
                                       <li><i class="bi bi-star-fill"></i></li>
                                       <li><i class="bi bi-star-fill"></i></li>
                                       <li><i class="bi bi-star-fill"></i></li>
                                       <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <span>(200)</span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="single-review">
                                 <div class="icon">
                                    <img src="<?= base_url() ?>web_assets/images/icon/google2.svg" alt>
                                    <span>reviews</span>
                                 </div>
                                 <div class="reviews">
                                    <ul>
                                       <li><i class="bi bi-star-fill"></i></li>
                                       <li><i class="bi bi-star-fill"></i></li>
                                       <li><i class="bi bi-star-fill"></i></li>
                                       <li><i class="bi bi-star-fill"></i></li>
                                       <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <span>(300)</span>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="hero-video-area">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-lg-11">
            <div class="video-wraper">
               <video autoplay loop="loop" muted preload="auto">
                  <source src="<?= base_url() ?>web_assets/video/video-02.mp4" type="video/mp4">
               </video>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="h1-service-area pt-70 mb-120">
   <div class="container">
      <div class="row mb-40">
         <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-title1 text-center">
               <span><img src="<?= base_url() ?>web_assets/images/icon/section-vec-l1.svg" alt>Services<img src="<?= base_url() ?>web_assets/images/icon/section-vec-r1.svg" alt></span>
               <h2>Experience our worship</h2>
            </div>
         </div>
      </div>
      <div class="row mb-30">
         <?php
         
         if (!empty($get_data)) {
            foreach ($get_data as $row) { ?>
         <div class="col-md-3">
            <div class="services-card1 four mt-3">
               <img class="services-card-vec" src="<?= base_url() ?>web_assets/images/bg/services-card-vec.png" alt>
               <div class="icon">
                  <img src="<?= base_url($row->image) ?>" class="img" alt>
               </div>
               <div class="content">
                  <h3><a href="service-details.html"><?= $row->heading ?></a></h3>
                  <p><?= $row->description ?></p>
               </div>
               <a class="more-btn" href="<?= base_url("Home/package/"),
                  $row->id ?>">Book Our Service<img src="<?= base_url() ?>web_assets/images/icon/btn-arrow1.svg" alt></a>
            </div>
         </div>
         <!--<div class="col-md-3">-->
         <!--<div class="services-card1 mt-3">-->
         <!--<img class="services-card-vec" src="<?= base_url() ?>web_assets/images/bg/services-card-vec.png" alt>-->
         <!--<div class="icon">-->
         <!--<img src="<?= base_url() ?>web_assets/images/icon/daycare-center2.svg" alt>-->
         <!--</div>-->
         <!--<div class="content">-->
         <!--<h3><a href="service-details.html">Pet Hostel </a></h3>-->
         <!--<p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>-->
         <!--</div>-->
         <!--<a class="more-btn" href="<?= base_url() ?>Home/service_book">Book Our Service<img src="<?= base_url() ?>web_assets/images/icon/btn-arrow1.svg" alt></a>-->
         <!--</div>-->
         <!--</div>-->
         <!--<div class="col-md-3">-->
         <!--<div class="services-card1 two mt-3">-->
         <!--<img class="services-card-vec" src="<?= base_url() ?>web_assets/images/bg/services-card-vec.png" alt>-->
         <!--<div class="icon">-->
         <!--<img src="<?= base_url() ?>web_assets/images/icon/grooming2.svg" alt>-->
         <!--</div>-->
         <!--<div class="content">-->
         <!--<h3><a href="service-details.html">Grooming </a></h3>-->
         <!--<p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>-->
         <!--</div>-->
         <!--<a class="more-btn" href="<?= base_url() ?>Home/service_book">Book Our Service<img src="<?= base_url() ?>web_assets/images/icon/btn-arrow1.svg" alt></a>-->
         <!--</div>-->
         <!--</div>-->
         <!--<div class="col-md-3">-->
         <!--<div class="services-card1 three mt-3">-->
         <!--<img class="services-card-vec" src="<?= base_url() ?>web_assets/images/bg/services-card-vec.png" alt>-->
         <!--<div class="icon">-->
         <!--<img src="<?= base_url() ?>web_assets/images/icon/boarding2.svg" alt>-->
         <!--</div>-->
         <!--<div class="content">-->
         <!--<h3><a href="service-details.html">Pet Consulting</a></h3>-->
         <!--<p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>-->
         <!--</div>-->
         <!--<a class="more-btn" href="<?= base_url() ?>Home/service_book">Book Our Service<img src="<?= base_url() ?>web_assets/images/icon/btn-arrow1.svg" alt></a>-->
         <!--</div>-->
         <!--</div>-->
         <?php }
            } ?>
      </div>
      <!--<div class="row">-->
      <!--<div class="col-md-3">-->
      <!--<div class="services-card1 two mt-3">-->
      <!--<img class="services-card-vec" src="<?= base_url() ?>web_assets/images/bg/services-card-vec.png" alt>-->
      <!--<div class="icon">-->
      <!--<img src="<?= base_url() ?>web_assets/images/icon/grooming2.svg" alt>-->
      <!--</div>-->
      <!--<div class="content">-->
      <!--<h3><a href="service-details.html">Bathing </a></h3>-->
      <!--<p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>-->
      <!--</div>-->
      <!--<a class="more-btn" href="<?= base_url() ?>Home/service_book">Book Our Service<img src="<?= base_url() ?>web_assets/images/icon/btn-arrow1.svg" alt></a>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-md-3">-->
      <!--<div class="services-card1 three mt-3">-->
      <!--<img class="services-card-vec" src="<?= base_url() ?>web_assets/images/bg/services-card-vec.png" alt>-->
      <!--<div class="icon">-->
      <!--<img src="<?= base_url() ?>web_assets/images/icon/boarding2.svg" alt>-->
      <!--</div>-->
      <!--<div class="content">-->
      <!--<h3><a href="service-details.html">Pet Food</a></h3>-->
      <!--<p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>-->
      <!--</div>-->
      <!--<a class="more-btn" href="<?= base_url() ?>Home/service_book">Book Our Service<img src="<?= base_url() ?>web_assets/images/icon/btn-arrow1.svg" alt></a>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-md-3">-->
      <!--<div class="services-card1 four mt-3">-->
      <!--<img class="services-card-vec" src="<?= base_url() ?>web_assets/images/bg/services-card-vec.png" alt>-->
      <!--<div class="icon">-->
      <!--<img src="<?= base_url() ?>web_assets/images/icon/veterinary2.svg" alt>-->
      <!--</div>-->
      <!--<div class="content">-->
      <!--<h3><a href="service-details.html">Walking</a></h3>-->
      <!--<p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>-->
      <!--</div>-->
      <!--<a class="more-btn" href="<?= base_url() ?>Home/service_book">Book Our Service<img src="<?= base_url() ?>web_assets/images/icon/btn-arrow1.svg" alt></a>-->
      <!--</div>-->
      <!--</div>-->
      <!--<div class="col-md-3">-->
      <!--<div class="services-card1 mt-3">-->
      <!--<img class="services-card-vec" src="<?= base_url() ?>web_assets/images/bg/services-card-vec.png" alt>-->
      <!--<div class="icon">-->
      <!--<img src="<?= base_url() ?>web_assets/images/icon/daycare-center2.svg" alt>-->
      <!--</div>-->
      <!--<div class="content">-->
      <!--<h3><a href="service-details.html">Other</a></h3>-->
      <!--<p>Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.</p>-->
      <!--</div>-->
      <!--<a class="more-btn" href="<?= base_url() ?>Home/service_book">Book Our Service<img src="<?= base_url() ?>web_assets/images/icon/btn-arrow1.svg" alt></a>-->
      <!--</div>-->
      <!--</div>-->
      <!--</div>-->
   </div>
</div>

<!--<div class="h1-pricing-plan-area mb-120">-->
<!--   <div class="container">-->
<!--      <div class="row">-->
<!--         <div class="col-lg-12 d-flex justify-content-center">-->
<!--            <div class="section-title1 text-center">-->
<!--               <span><img src="<?= base_url() ?>web_assets/images/icon/section-vec-l1.svg" alt>Pricing plan<img src="<?= base_url() ?>web_assets/images/icon/section-vec-r1.svg" alt></span>-->
<!--               <h2>Choose your perfect Plan</h2>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="row d-sm-flex d-none">-->
<!--         <div class="col-lg-12">-->
<!--            <div class="swiper-btn-wrap d-flex align-items-center justify-content-between">-->
<!--               <div class="slider-btn prev-btn-1">-->
<!--                  <i class="bi bi-arrow-left"></i>-->
<!--               </div>-->
<!--               <div class="slider-btn next-btn-1">-->
<!--                  <i class="bi bi-arrow-right"></i>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--      <div class="row">-->
<!--         </?php -->
            <!--// echo '<pre>';-->
            <!--// print_r(package()); -->
<!--          ?> -->
<!--         <div class="swiper home1-services-slider">-->
<!--            <div class="swiper-wrapper price_wrapper">-->
<!--               </?php  -->
<!--                  if (!empty($get_package)) {-->
<!--                      foreach ($get_package as $res) { -->
                    <!--//   $service_id= $res->service_id;-->
                    <!--      //print_r($service_id);-->
<!--                      ?>-->
<!--              <div class="swiper-slide">-->
<!--                 <div class="pricing-card one">-->
<!--                    <div class="offer-batch">-->
<!--                        </?php if (!empty($res->discount)) { ?>   -->
<!--                        <h5><?= $res->discount ?>% <span>Off</span></h5>-->
<!--                        </?php } ?>-->
<!--                    </div>-->
<!--                    <img class="price-card-vector" src="<?= base_url() ?>web_assets/images/icon/price-card-bg.svg" alt>-->
<!--                    <div class="title">-->
<!--                        <h4><?= $res->heading ?></h4>-->
<!--                       <h2><span class="currency">Rs.</span><?= $res->pricing ?><span class="time">Per Hour</span></h2>-->
<!--                    </div>-->
<!--                    <ul>-->
<!--                    </?php     -->
             	      
             	      
<!--             	      $package = $this->db->where('service_id',$res->service_id)->get('tbl_service_packages')->result();-->
 	                  
 	                  
<!-- 	                    foreach($package as $r){-->
 	                  
 	                  	    <!--//   print_r($r);-->
<!--         	        ?>-->
<!--                       <li>-->
<!--                          <?= $r->sub_heading?>-->
<!--                          <img src="<?= base_url() ?>web_assets/images/icon/<?= ($r->is_available==1)?'pricing-check.svg':'pricing-X.svg'?>" alt>-->
<!--                       </li>-->
<!--                    </?php } ?>-->
                        <!--<li>-->
                        <!--Socialise Excercise  -->
                        <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--Watering Plants-->
                        <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--Conditioning Treatment-->
                        <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-X.svg" alt>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--Ears Flushed & Cleaned-->
                        <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-X.svg" alt>-->
                        <!--</li>-->
<!--                    </ul>-->
<!--                    <div class="book-now-btn">-->
<!--                       <a href="<?= base_url("Home/services_book/"), $res->service_id ?>">Book Now</a>-->
<!--                    </div>-->
<!--                 </div>-->
<!--               </div>-->
<!--              </?php }-->
<!--                 } ?>-->

            <!--<div class="swiper-slide">-->
            <!--<div class="pricing-card ">-->
            <!--<img class="price-card-vector" src="<?= base_url() ?>web_assets/images/icon/price-card-bg.svg" alt>-->
            <!--<div class="title">-->
            <!--<h4>Bathing</h4>-->
            <!--<h2><span class="currency">Rs.</span> 390 <span class="time">Per Hour</span></h2>-->
            <!--</div>-->
            <!--<ul>-->
            <!--<li>-->
            <!--Socialise Excercise-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Handscissor Finish-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Watering Plants-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Conditioning Treatment-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-X.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Ears Flushed & Cleaned-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-X.svg" alt>-->
            <!--</li>-->
            <!--</ul>-->
            <!--<div class="book-now-btn">-->
            <!--<a href="<?= base_url() ?>Home/service_book">Book Now</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
                        <!--</div>-->
            <!--<div class="swiper-slide">-->
            <!--    <div class="pricing-card three">-->
            <!--<img class="price-card-vector" src="<?= base_url() ?>web_assets/images/icon/price-card-bg.svg" alt>-->
            <!--<div class="title">-->
            <!--<h4>Pet Food</h4>-->
            <!--<h2><span class="currency">Rs.</span> 510 <span class="time">Per Hour</span></h2>-->
            <!--</div>-->
            <!--<ul>-->
            <!--<li>-->
            <!--Socialise Excercise-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Handscissor Finish-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Watering Plants-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Conditioning Treatment-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-X.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Ears Flushed & Cleaned-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-X.svg" alt>-->
            <!--</li>-->
            <!--</ul>-->
            <!--<div class="book-now-btn">-->
            <!--<a href="contact.html">Book Now</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="swiper-slide">-->
            <!--    <div class="pricing-card four">-->
            <!--<img class="price-card-vector" src="<?= base_url() ?>web_assets/images/icon/price-card-bg.svg" alt>-->
            <!--<div class="title">-->
            <!--<h4>Walking</h4>-->
            <!--<h2><span class="currency">Rs.</span> 190 <span class="time">Per Hour</span></h2>-->
            <!--</div>-->
            <!--<ul>-->
            <!--<li>-->
            <!--Socialise Excercise-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Handscissor Finish-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Watering Plants-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-check.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Conditioning Treatment-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-X.svg" alt>-->
            <!--</li>-->
            <!--<li>-->
            <!--Ears Flushed & Cleaned-->
            <!--<img src="<?= base_url() ?>web_assets/images/icon/pricing-X.svg" alt>-->
            <!--</li>-->
            <!--</ul>-->
            <!--<div class="book-now-btn">-->
            <!--<a href="contact.html">Book Now</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->
<!--</div>-->
<?php include "includes/footer.php"; ?>