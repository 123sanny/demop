<style>
   footer .footer-items>h6 a {
   font-size: 1rem;
   font-weight: 600;
   color: #253d4e;
   font-family: var(--font-cabin);
   letter-spacing: .09em;
   } 
   footer .footer-items .social-icons {
   padding-top: 10px;
   }
   footer .footer-widget li img{
   margin-right:20px;
   }
   footer .opening-time h6 :hover{
   font-weight:bolder;
   color:var(--bs-orange);
   /*background:var(--gradient-color);*/
   }
   .widget-title h3{
   background: var(--gradient-color);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
   background-clip: text;
   text-fill-color: transparent;
   }
   .top-bar.two .opening-time p {
   font-size: 1.275rem;
   }
   @media only screen and (max-width: 600px) {
   footer .copyright-area p {
   display: block;
   text-align: center;
   }
   footer.style2 .social-area ul {
   list-style: none;
   display: flex; 
   justify-content: end;
   gap: 0px;
   }
   .mb_pb_80{
   padding-bottom:10px !important;
   }
   .footer_social{
   justify-content:center;
   align-items:center;
   width:100% !important;
   }
   }
   .footer_social{
   justify-content:center;
   align-items:center;
   width:68%;
   }
</style>
<?php 
   //  $res=get_contact();
    ?>
<footer class="style2">
   <div class="container">
      <div class="row pt-80 pb-80 justify-content-center mb_pb_80">
         <div class="col-lg-4 col-md-12">
            <div class="footer-widget">
               <div class="footer-icon">
                  <a href="<?= base_url()?>Home/index">
                  <img class="justify-content-center" width="65%" src="<?= base_url()?>web_assets/images/logobluet.png" alt="">
                  </a>
               </div>
               <div class="widget-title">
                  <h4 style="font-size: 24px;letter-spacing: 1px;color:#013e5c;">Pampering Pets,<span> Nurturing </span><br>
                     Wellness<span>, Touching  </span>Hearts.
                  </h4>
               </div>
               <!--<div class="footer-btn">-->
               <!--    <a class="primary-btn6" href="shop.html">Shop Now</a>-->
               <!--</div>-->
               <div class="footer-items">
                  <ul class="social-icons footer_social">
                     <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                     <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                     <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                     <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="footer-widget one">
               <div class="widget-title">
                  <h3>Quick Links</h3>
               </div>
               <div class="menu-container">
                  <ul>
                     <ul>
                        <li><a href="<?= base_url()?>Home/index"><img src="<?= base_url()?>web_assets/images/icon/btn-arrow1.svg" alt=""> Home</a></li>
                        <li><a href="<?= base_url()?>Home/about"><img src="<?= base_url()?>web_assets/images/icon/btn-arrow1.svg" alt=""> About</a></li>
                        <li><a href="<?= base_url()?>Home/service_page"><img src="<?= base_url()?>web_assets/images/icon/btn-arrow1.svg" alt=""> Service</a></li>
                        <li><a href="<?= base_url()?>Home/contact"><img src="<?= base_url()?>web_assets/images/icon/btn-arrow1.svg" alt=""> Contact</a></li>
                     </ul>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="footer-widget one ">
               <div class="widget-title">
                  <h3>Overview</h3>
               </div>
               <div class="menu-container">
                  <ul>
                     <li><a href="<?= base_url()?>Home/faq"><img src="<?= base_url()?>web_assets/images/icon/btn-arrow1.svg" alt=""> Faq</a></li>
                     <li><a href="<?= base_url()?>Home/testimonials"><img src="<?= base_url()?>web_assets/images/icon/btn-arrow1.svg" alt=""> Testimonials</a></li>
                     <li><a href="<?= base_url()?>Home/service_book"><img src="<?= base_url()?>web_assets/images/icon/btn-arrow1.svg" alt=""> Book Now</a></li>
                     <li><a href="<?= base_url()?>Home/feedback"><img src="<?= base_url()?>web_assets/images/icon/btn-arrow1.svg" alt=""> Contact</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <div class="footer-widget one mb-0">
               <div class="widget-title">
                  <!--<h3>Contact Us</h3>-->
               </div>
               <div class="footer-items contact">
                  <h3>Contact Us</h3>
                  <div class="hotline mb-30">
                     <div class="hotline-icon">
                        <img src="<?= base_url()?>web_assets/images/icon/phone-icon.svg" alt>
                     </div>
                     <!--<div class="hotline-info">-->
                     <!--<h6 class="mb-10"><a href="tel:+<?=$res->mobile?>"><?=$res->mobile?></a></h6>-->
                     <!--<h6><a href="tel:+<?=$res->whatsap_no?>"><?=$res->whatsap_no?></a></h6>-->
                     <!--</div>-->
                     <div class="hotline-info">
                        <h6 class="mb-10"><a href="tel:+9219441966">9219441966</a></h6>
                        <h6><a href="tel:+9219441966">9219441966</a></h6>
                     </div>
                  </div>
                  <div class="email mb-30">
                     <div class="email-icon">
                        <img src="<?= base_url()?>web_assets/images/icon/envelope.svg" alt>
                     </div>
                     <!--<div class="email-info">-->
                     <!--<h6 class="mb-10"><a href="#"><span class="__cf_email__"><?=$res->email?></span></a></h6>-->
                     <!--<h6><a href="#"><span class="__cf_email__">email2@gmail.com</span></a></h6>-->
                     <!--</div>-->
                     <div class="email-info">
                        <h6 class="mb-10"><a href="#"><span class="__cf_email__">petwellnesshub@gmail.com</span></a></h6>
                        <h6><a href="#"><span class="__cf_email__">email2@gmail.com</span></a></h6>
                     </div>
                  </div>
                  <div class="email">
                     <div class="email-icon">
                        <img src="<?= base_url()?>web_assets/images/icon/location.svg" alt>
                     </div>
                     <div class="email-info">
                        <h6 class="mb-10"><a>168/170, Jhansi , Uttar Pradesh<br> Uttar Pradesh</a></h6>
                        <!--<h6 class="mb-10"><a><?=$res->address?>?><br> Uttar Pradesh</a></h6>-->
                        <!--<h6><a>DOHS, Bangladesh</a></h6>-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row border-top align-items-center">
         <div class="col-lg-6">
            <div class="copyright-area">
               <p>© 2024 Pet Wellness, All Rights Reserved Design By <b> Binplus Technologies (P) Limited.</b></p>
            </div>
         </div>
         <div class="col-lg-6 d-flex justify-content-md-end justify-content-center">
            <div class="social-area">
               <ul class="footer-btm-menu">
                  <li><a href="<?= base_url()?>Home/privacy">Privacy Policy</a></li>
                  <li><a href="<?= base_url()?>Home/termscondition">Terms & Conditions</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= base_url()?>web_assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url()?>web_assets/js/jquery-ui.js"></script>
<script src="<?= base_url()?>web_assets/js/jquery.timepicker.min.js"></script>
<script src="<?= base_url()?>web_assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>web_assets/js/swiper-bundle.min.js"></script>
<script src="<?= base_url()?>web_assets/js/jquery.nice-select.js"></script>
<script src="<?= base_url()?>web_assets/js/jquery.fancybox.min.js"></script>
<script src="<?= base_url()?>web_assets/js/morphext.min.js"></script>
<script src="<?= base_url()?>web_assets/js/odometer.min.js"></script>
<script src="<?= base_url()?>web_assets/js/jquery.marquee.min.js"></script>
<script src="<?= base_url()?>web_assets/js/viewport.jquery.js"></script>
<script src="<?= base_url()?>web_assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url()?>web_assets/js/SmoothScroll.js"></script>
<script src="<?= base_url()?>web_assets/js/jquery.nice-number.min.js"></script>
<script src="<?= base_url()?>web_assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>web_assets/js/masonry.pkgd.min.js"></script>
<script src="<?= base_url()?>web_assets/js/main.js"></script>
</body>
</html>