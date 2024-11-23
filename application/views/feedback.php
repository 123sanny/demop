<?php include('includes/header.php')?>
<div class="inner-page-banner">
   <div class="breadcrumb-vec-btm">
      <img class="img-fluid" src="<?= base_url()?>web_assets/images/bg/inner-banner-btm-vec.png" alt>
   </div>
   <div class="container">
      <div class="row justify-content-center align-items-center text-center">
         <div class="col-lg-6 align-items-center">
            <div class="banner-content">
               <h1>Feedback</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?= base_url()?>home/index">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Feedback</li>
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
<div class="services-details-area pt-120 mb-120">
   <div class="container">
      <div class="row mb-120">
         <div class="col-lg-12">
            <div class="tab-content tab-content2" id="v-pills-tabContent2">
               <div class="tab-pane fade active show" id="v-pills-common" role="tabpanel" aria-labelledby="v-pills-common-tab">
                  <div class="reviews-area">
                     <div class="row g-lg-4 gy-5">
                        <div class="col-lg-7">
                           <div class="number-of-review">
                              <h3>Reviews  :</h3>
                           </div>
                           <div class="review-list-area">
                              <ul class="review-list">
                                 <li>
                                    <div class="single-review d-flex justify-content-between flex-md-nowrap flex-wrap">
                                       <div class="review-image">
                                          <img src="<?= base_url()?>web_assets/images/bg/review-img-1.png" alt="image">
                                       </div>
                                       <div class="review-content">
                                          <div class="c-header d-flex align-items-center">
                                             <div class="review-meta">
                                                <h5 class="mb-0"><a href="#">Rocky Mike ,</a></h5>
                                                <div class="c-date">06 july,2022</div>
                                             </div>
                                             <div class="replay-btn">
                                                <a href="#"><i class="bi bi-reply"></i>Reply</a>
                                             </div>
                                          </div>
                                          <ul class="product-review">
                                             <li><i class="bi bi-star-fill"></i></li>
                                             <li><i class="bi bi-star-fill"></i></li>
                                             <li><i class="bi bi-star-fill"></i></li>
                                             <li><i class="bi bi-star-fill"></i></li>
                                             <li><i class="bi bi-star-fill"></i></li>
                                          </ul>
                                          <div class="c-body">
                                             <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account. </p>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="single-review d-flex justify-content-between flex-md-nowrap flex-wrap">
                                       <div class="review-image">
                                          <img src="<?= base_url()?>web_assets/images/bg/review-img-3.png" alt="image">
                                       </div>
                                       <div class="review-content">
                                          <div class="c-header d-flex align-items-center">
                                             <div class="review-meta">
                                                <h5 class="mb-0"><a href="#">Rony Jhon ,</a></h5>
                                                <div class="c-date">07 july,2022</div>
                                             </div>
                                             <div class="replay-btn">
                                                <a href="#"><i class="bi bi-reply"></i>Reply</a>
                                             </div>
                                          </div>
                                          <ul class="product-review">
                                             <li><i class="bi bi-star-fill"></i></li>
                                             <li><i class="bi bi-star-fill"></i></li>
                                             <li><i class="bi bi-star-fill"></i></li>
                                             <li><i class="bi bi-star-fill"></i></li>
                                             <li><i class="bi bi-star-fill"></i></li>
                                          </ul>
                                          <div class="c-body">
                                             <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account. </p>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="review-form">
                              <div class="number-of-review">
                                 <h3>Feedback: The Fuel for Growth.</h3>
                              </div>
                              <?php echo $this->session->flashdata('success') ?>
                              <?php if ($this->session->flashdata('errors')) { ?>
                              <?php $errors = $this->session->flashdata('errors');
                                 } ?>
                              <form action="add_feedback" method="post">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-inner mb-20">
                                          <input type="text" name="name"placeholder="Name*" required><span id='err'style="color:red"><?php if (!empty($errors['name'])) {    print_r($errors['name']);} ?> 
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-inner mb-20">
                                          <input type="email" name="email" placeholder="Email*" required><span id='err'style="color:red"><?php if (!empty($errors['email'])) {    print_r($errors['email']);} ?> 
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-inner mb-10">
                                          <textarea placeholder="Message..." name="message"></textarea><span id='err'style="color:red"><?php if (!empty($errors['message'])) {    print_r($errors['message']);} ?> 
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-inner2 mb-30">
                                          <div class="review-rate-area">
                                             <p>Your Rating</p>
                                             <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5">
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4">
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3">
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2">
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1">
                                                <label for="star1" title="text">1 star</label>
                                             </div>
                                             <span id='err'style="color:red"><?php if (!empty($errors['rate'])) {    print_r($errors['rate']);} ?> 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-inner two">
                                          <button class="primary-btn3 btn-lg" type="add">Post Comment</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('includes/footer.php')?>