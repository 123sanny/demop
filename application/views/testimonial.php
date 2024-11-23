<?php include('includes/header.php')?>
<div class="inner-page-banner">
   <div class="breadcrumb-vec-btm">
      <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/inner-banner-btm-vec.png" alt>
   </div>
   <div class="container">
      <div class="row justify-content-center align-items-center text-center">
         <div class="col-lg-6 align-items-center">
            <div class="banner-content">
               <h1>Testimonials</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?= base_url()?>Home/testimonial">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
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
<div class="h1-testimonial-area mb-120">
   <div class="container-fluid">
      <div class="row mb-50">
         <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-title1 text-center">
               <span><img src="<?= base_url()?>web_assets/images/icon/section-vec-l2.svg" alt>Testimonial<img src="<?= base_url()?>web_assets/images/icon/section-vec-r2.svg" alt></span>
               <h2 class="text-white">valueable words from Customers</h2>
            </div>
         </div>
      </div>
      <div class="row justify-content-end">
         <div class="col-xxl-12 col-md-11  p-sm-0">
            <div class="h2-testimonial-area mb-10">
               <div class="container">
                  <div class="row mb-50">
                     <div class="swiper h2-testimonial-slider">
                        <div class="swiper-wrapper">
                           <?php foreach($testimonial as $row){?>
                           <div class="swiper-slide">
                              <div class="testimonial-wrap">
                                 <div class="testimonial-content text-center">
                                    <div class="quat-icon">
                                       <img class="left-quat" src="<?= base_url()?>web_assets/images/icon/left-quat.svg" alt>
                                       <img class="right-quat" src="<?= base_url()?>web_assets/images/icon/right-quat.svg" alt>
                                    </div>
                                    <div class="foot-vector">
                                       <img class="testimonial-vec-left" src="<?= base_url()?>web_assets/images/icon/h2-testimonial-vec-left.svg" alt>
                                       <img class="testimonial-vec-right" src="<?= base_url()?>web_assets/images/icon/h2-testimonial-vec-right.svg" alt>
                                    </div>
                                    <div class="author-name-deg">
                                       <h3><?=$row->name?></h3>
                                       <span>Customer</span>
                                    </div>
                                    <p><?=$row->description?>.</p>
                                    <div class="review">
                                       <ul>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="testimonial-img">
                                    <img src="<?= base_url($row->image)?>" alt>
                                 </div>
                              </div>
                           </div>
                           <?php }?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="swiper-btn-wrap d-flex align-items-center justify-content-center">
               <div class="slider-btn prev-btn-5">
                  <i class="bi bi-arrow-left"></i>
               </div>
               <div class="slider-btn next-btn-5">
                  <i class="bi bi-arrow-right"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="h1-blog-area mb-120">
   <div class="container">
      <div class="row mb-50">
         <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-title1 text-center">
               <span><img src="<?= base_url()?>web_assets/images/icon/section-vec-l2.svg" alt>Satisfied Customers<img src="<?= base_url()?>web_assets/images/icon/section-vec-r2.svg" alt></span>
               <h2>Where satisfaction meets service</h2>
            </div>
         </div>
      </div>
      <div class="row g-lg-4 gy-5 justify-content-center">
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="h1-blog-card">
               <div class="blog-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/blog/blog1.png" alt>
                  <div class="category">
                     <a href="blog-grid.html">Pet hostel</a>
                  </div>
               </div>
               <div class="blog-content">
                  <div class="blog-meta">
                     <a href="blog-grid.html">August 13, 2022</a>
                  </div>
                  <h4><a href="blog-details.html">lobortis pharetra In necat boi risuse osae that one far This fox.</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="h1-blog-card">
               <div class="blog-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/blog/blog2.png" alt>
                  <div class="category">
                     <a href="blog-grid.html">Pet food</a>
                  </div>
               </div>
               <div class="blog-content">
                  <div class="blog-meta">
                     <a href="blog-grid.html">August 10, 2022</a>
                  </div>
                  <h4><a href="blog-details.html">Donec venenatis ex id nibh iaculisoni Clonal interdum Curabitur.</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="h1-blog-card">
               <div class="blog-img">
                  <img class="img-fluid" src="<?= base_url()?>web_assets/images/blog/blog3.png" alt>
                  <div class="category">
                     <a href="blog-grid.html">Grooming</a>
                  </div>
               </div>
               <div class="blog-content">
                  <div class="blog-meta">
                     <a href="blog-grid.html">August 05, 2022</a>
                  </div>
                  <h4><a href="blog-details.html">Orci varius natoque penatibus etmal dis parturient montes.</a></h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('includes/footer.php')?>