<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pet Wellness</title>
      <link rel="icon" href="<?= base_url()?>web_assets/images/logoblue.jpg" type="jpg" sizes="20x20">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/all.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/animate.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/boxicons.min.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/bootstrap-icons.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/jquery-ui.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/aos.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/nice-select.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/odometer.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/datepicker.min.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/uiicss.css">
      <link rel="stylesheet" href="<?= base_url()?>web_assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         header.style-3 {
         box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.2);
         }
         .h1-testimonial-area .swiper-btn-wrap {
         padding-top: 0px; 
         }
         .h2-services-area .services-top .services-card.daycare-card {
         min-height: 400px;
         height: 400px;
         }
         .section-title2 p {
         font-size: 1.875rem;
         font-weight: 500;
         color: gray;
         font-family: none;
         letter-spacing: .05em;
         line-height: 1.7;
         text-transform: capitalize;
         padding-top: 40px;
         margin-bottom: 0;
         }
         .h1-story-area .story-content .story-title-reviews h3 {
         font-size: 1.75rem;
         font-weight: 500;
         color: var(--title-color1);
         font-family: var(--font-cabin);
         line-height: 1.4;
         margin-bottom: 0;
         max-width: 100%; 
         width: 100%;
         }
         .top-bar .social-area ul li::after {
         content: none !important;
         } 
         .hero-style-1 .banner-img {
         z-index: 99 !important;
         }
         @media only screen and (max-width: 600px) {
         .h1-pricing-plan-area .pricing-card .offer-batch h5 {
         font-size: 1.35rem;
         }
         .inner-page-banner {
         min-height: 250px;
         }
         .genarel-qustions-area h2 {
         font-size: 2rem;
         }
         .contact-pages .contact-form h2 {
         font-size: 2rem;
         }
         .inner-page-banner .banner-content h1 {
         font-size: 2.5rem;
         }
         .h2-testimonial-area .testimonial-wrap .testimonial-content p{
         font-size:1rem;  
         }
         .section-title1 h2 {
         font-size: 2rem;
         }
         .h1-pricing-plan-area .pricing-card .title h2{
         font-size: 2.75rem;
         }
         .h2-services-area .services-btm .services-content h2 {
         font-size: 2rem;
         }
         .hero-style-1 .banner-content h1 {
         font-size: 2.2rem;
         }
         .hero-style-1 .reservation-review {
         margin-bottom: 0px; 
         }
         .price_wrapper{
         padding-top:20px;
         }
         .section-title2 h2 {
         font-size: 2.2rem;
         }
         .section-title2 p {
         font-size: 1.8rem;
         }
         .swiper-slide .main_slide_img {
         height: 250px !important;
         width: 800px !important;
         }
         .offer-content .gif{
         width:100%;
         margin-left: 18%;
         }
         .circle {
         width: 270px !important;
         height: 270px !important;
         left: 12% !important;
         }
         .mob_none{
         display:none;
         }
         header.style-3 .header-logo img {
         min-width: 80px;
         max-width: 100%;
         }
         .h1-partner-area .author-name-expariance .author-name .name-deg h4 {
         font-size: 01rem;
         }
         .h1-feature-area .bg {
         padding: 10px 5px;
         position: relative;
         z-index: 1;
         }
         footer .footer-items .hotline, footer .footer-items .email {
         display: block;
         align-items: center;
         }
         footer .footer-widget li img {
         display: none;
         }
         /*new nav*/
         #mySidenav a {
         position: fixed;
         right: -162px;
         transition: 0.3s;
         padding: 8px;
         width: 200px;
         text-decoration: none;
         font-size: 20px;
         color: white;
         border-radius: 8px 0px 0px 8px;
         z-index:9;
         margin-top:48%;
         overflow-x:hidden;
         }
         #mySidenav a:hover {
         right: 0;
         }
         #about {
         /*top: 20%;*/
         background-color: #253D4E;
         }
         /*new nav*/
         }
         @media only screen and (min-width: 600px) {
         #mySidenav{
         display:none;
         }
         .h1-pricing-plan-area .pricing-card .title h4 {
         width:200px;
         }
         }
         footer .footer-items .social-icons li::after {
         content: none ;
         }
         footer .footer-items .social-icons {
         gap: 30px;
         }
      </style>
   </head>
   <?php 
      // $res=get_contact();
       ?>
   <div id="mySidenav" class="sidenav">
      <a href="<?= base_url()?>Home/service_page" id="about" class="primary-btn1"><i class="fa fa-bookmark" style="font-size:22px;color:white;padding:5px 25px 0px 3px"></i>Book Services</a>
   </div>
   <body class="home-pages-2">
      <div class="top-bar two">
         <div class="container-lg container-fluid ">
            <div class="row">
               <div class="col-lg-12 d-flex align-items-center justify-content-md-between justify-content-center">
                  <div class="contact-number">
                     <a href="tel:+91 9219441966"><img src="<?= base_url()?>web_assets/images/icon/support2.svg" alt> +919219441966</a>
                  </div>
                  <div class="opening-time text-center">
                     <p>Your Pet’s Wellness, Our Passion.</p>
                  </div>
                  <div class="social-area">
                     <ul>
                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <header class="header-area style-3">
         <div class="container d-flex justify-content-between align-items-center">
            <div class="header-logo">
               <a href="<?= base_url()?>Home/index"><img alt="image" width="80px" class="img-fluid" src="<?= base_url()?>web_assets/images/logoblue.jpg"></a>
            </div>
            <div class="main-menu">
               <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                  <div class="mobile-logo-wrap">
                     <a href="<?= base_url()?>Home/index"><img width="100px" alt="image"  src="<?= base_url()?>web_assets/images/logoblue.jpg"></a>
                  </div>
                  <div class="menu-close-btn">
                     <i class="bi bi-x-lg"></i>
                  </div>
               </div>
               <ul class="menu-list">
                  <li class=""><a href="<?= base_url()?>Home/index">Home</a></li>
                  <li><a href="<?= base_url()?>Home/about">About</a></li>
                  <li class=""><a href="<?= base_url()?>Home/service_page">Services</a></li>
                  <li class=""><a href="<?= base_url()?>Home/testimonial">Testimonials </a></li>
                  <li class=""><a href="<?= base_url()?>Home/faq">FAQ</a></li>
                  <li class=""><a href="<?= base_url()?>Home/feedback">Feedback</a></li>
                  <li><a href="<?= base_url()?>Home/contact">Contact</a></li>
               </ul>
            </div>
            <div class="nav-right d-flex jsutify-content-end align-items-center">
               <a class="primary-btn1 mob_none" style="padding:10px 20px;" href="<?= base_url()?>Home/service_page">Book Your Service</a>
               <div class="sidebar-button mobile-menu-btn ">
                  <i class="bi bi-list"></i>
               </div>
            </div>
         </div>
      </header>