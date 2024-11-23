<?php include "includes/header.php"; ?>
<style>
   .img{
   width:40px;
   }
</style>
<div class="inner-page-banner">
   <div class="breadcrumb-vec-btm">
      <img class="img-fluid" src="<?= base_url() ?>web_assets/images/bg/inner-banner-btm-vec.png" alt>
   </div>
   <div class="container">
      <div class="row justify-content-center align-items-center text-center">
         <div class="col-lg-6 align-items-center">
            <div class="banner-content">
               <h1>Packages</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?= base_url() ?>Home/index">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Packages</li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="banner-img d-lg-block d-none">
               <div class="banner-img-bg">
                  <img class="img-fluid" src="<?= base_url() ?>web_assets/images/bg/inner-banner-vec.png" alt>
               </div>
               <img class="img-fluid" src="<?= base_url() ?>web_assets/images/bg/inner-banner-img.png" alt>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="newsletter-area mb-120 pt-90">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="newsletter-wrap">
               <div class="section-title1 text-center mb-40">
                  <span><img src="<?= base_url() ?>web_assets/images/icon/section-vec-l1.svg" alt>Until one has loved an animal, a part of one's soul remains unawakened.<img src="<?= base_url() ?>web_assets/images/icon/section-vec-r1.svg" alt></span>
                  <h4>Animals are such agreeable friends—they ask no questions; they pass no criticisms.</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--package-->
<div class="h1-pricing-plan-area mb-120">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-title1 text-center">
               <span><img src="<?= base_url() ?>web_assets/images/icon/section-vec-l1.svg" alt>Pricing plan<img src="<?= base_url() ?>web_assets/images/icon/section-vec-r1.svg" alt></span>
               <h2>Choose your perfect Plan</h2>
            </div>
         </div>
      </div>
      <div class="row d-sm-flex d-none">
         <div class="col-lg-12">
            <div class="swiper-btn-wrap d-flex align-items-center justify-content-between">
               <div class="slider-btn prev-btn-1">
                  <i class="bi bi-arrow-left"></i>
               </div>
               <div class="slider-btn next-btn-1">
                  <i class="bi bi-arrow-right"></i>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <?php 
            // echo '<pre>';
            // print_r(package()); 
            ?> 
         <div class="swiper home1-services-slider">
            <div class="swiper-wrapper price_wrapper">
               <?php  
                  if (!empty($get_package)) {
                      foreach ($get_package as $res) { 
                    //   $service_id= $res->service_id;
                          //print_r($service_id);
                      ?>
               <div class="swiper-slide">
                  <div class="pricing-card one">
                     <div class="offer-batch">
                        <?php if (!empty($res->discount)) { ?>   
                        <h5><?= $res->discount ?>% <span>Off</span></h5>
                        <?php } ?>
                     </div>
                     <img class="price-card-vector" src="<?= base_url() ?>web_assets/images/icon/price-card-bg.svg" alt>
                     <div class="title">
                        <h4><?= $res->heading ?></h4>
                        <h2><span class="currency">Rs.</span><?= $res->pricing ?><span class="time">Per Hour</span></h2>
                     </div>
                     <ul>
                        <?php     
                           $package = $this->db->where('service_id',$res->service_id)->get('tbl_service_packages')->result();
                           
                           
                             foreach($package as $r){
                           
                           	    //   print_r($r);
                           ?>
                        <li>
                           <?= $r->sub_heading?>
                           <img src="<?= base_url() ?>web_assets/images/icon/<?= ($r->is_available==1)?'pricing-check.svg':'pricing-X.svg'?>" alt>
                        </li>
                        <?php } ?>
                     </ul>
                     <div class="book-now-btn">
                        <a href="<?= base_url("Home/services_book/"), $res->service_id ?>">Book Now</a>
                     </div>
                  </div>
               </div>
               <?php }
                  } ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include "includes/footer.php"; ?>