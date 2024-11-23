<!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <!--<div class="nav-item theme-logo">-->
                        <!--    <a href="<//?= base_url()?>admin/index">-->
                        <!--        <img src="<//?= base_url()?>assets/img/logo/logo.png" class="navbar-logo" alt="logo">-->
                        <!--    </a>-->
                        <!--</div>-->
                        <div class="nav-item theme-text">
                            <a href="<?= base_url()?>admin/index" class="nav-link"> 
                                <img src="<?= base_url()?>assets/img/logo/petlogo.png" class="navbar-logo" alt="logo" style="width:60%;"> 
                            </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle d-block d-md-none">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                

                <div class="profile-info">
                    <div class="user-info">
                        <div class="profile-img">
                            <img src="<?= base_url()?>assets/img/profile-30.png" alt="avatar">
                        </div>
                        <div class="profile-content">
                            <h6 class="">Shaun Park</h6>
                            <!--<p class="">Project Leader</p>-->
                        </div>
                    </div>
                </div>
                                
                <!--<div class="shadow-bottom"></div>-->
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu <?= ($page_name=="dashboard")?'active':''?>">
                        <a href="<?= base_url()?>admin/index" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <!-- <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div> -->
                        </a>
                        <!-- <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                            <li class="active">
                                <a href="index.html"> Analytics </a>
                            </li>
                            <li>
                                <a href="index2.html"> Sales </a>
                            </li>
                        </ul> -->
                    </li>

                    <!-- <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                    </li> -->
                 <?php //print_r($page_name=='Manage Enquires')?>
                   
                    <li class="menu <?= ($page_name=="Manage Sliders")?'active':''?>">
                        <a href="<?= base_url()?>Slider" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <img src="<?= base_url()?>assets/img/icons/slider-icon.png" alt="" style="width:24px;">
                                <span>Manage Sliders</span>
                            </div>
                        </a>
                    </li>
                    
                    <li class="menu <?= ($page_name=="Manage Services")?'active':''?>">
                        <a href="<?= base_url()?>admin/manage_services" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>-->
                                <img src="<?= base_url()?>assets/img/icons/services-svg.svg" alt="Enquiry-icon" class="svgimg">
                                <span>Manage Services</span>
                            </div>
                        </a>
                    </li>
                     <li class="menu <?= ($page_name==" Manage Service Package")?'active':''?>">
                        <a href="<?= base_url()?>admin/manage_service_package" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <!--<img src="<?= base_url()?>assets/img/icons/enquiry-svg.svg" alt="Enquiry-icon" class="svgimg">-->
                                <span>Manage Service Package</span>
                            </div>
                        </a>
                    </li>
                       <li class="menu <?= ($page_name==" Manage Service Details")?'active':''?>">
                        <a href="<?= base_url()?>admin/manage_service_details" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>-->
                                <svg xmlns="http://www.w3.org/2000/svg" class="svgimg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <!--<img src="<?= base_url()?>assets/img/icons/enquiry-svg.svg" alt="Enquiry-icon" class="svgimg">-->
                                <span>Manage Service Details</span>
                            </div>
                        </a>
                    </li>
                      
                                          
                    <li class="menu <?= ($page_name =="feedback")?'active':''?>">
                        <a href="<?= base_url()?>Feedback" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>-->
                                <img src="<?= base_url()?>assets/img/icons/services-svg.svg" alt="Enquiry-icon" class="svgimg">

                                <span>Feedback</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu <?= ($page_name=="Manage FAQ")?'active':''?>">
                        <a href="<?= base_url()?>Manage_faq" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Manage FAQ</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu <?= ($page_name=="Testimonials")?'active':''?>">
                        <a href="<?= base_url()?>testimonials" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <span>Testimonials</span>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="menu <?=($page_name=="Manage News & Events")?'active':''?>">
                        <a href="<?= base_url()?>admin/manage_news_events" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>News & Events</span>
                            </div>
                        </a>
                    </li> -->
                

                    <!--    <li class="menu <?= ($page_name=="Contact Us")?'active':''?>">-->
                    <!--    <a href="<?= base_url()?>admin/contact_us" aria-expanded="false" class="dropdown-toggle">-->
                    <!--        <div class="">-->
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>-->
                    <!--            <img src="<?= base_url()?>assets/img/icons/enquiry-svg.svg" alt="Enquiry-icon" class="svgimg">-->
                    <!--            <span>Manage Contact Us</span>-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--</li>-->
                        
                    <li class="menu <?= ($page_name =="Manage Enquires")?'active':''?>">
                        <a href="<?= base_url()?>admin/manage_enquires" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>-->
                                <img src="<?= base_url()?>assets/img/icons/enquiry-svg.svg" alt="Enquiry-icon" class="svgimg">
                                <span>Manage Enquires</span>
                            </div>
                        </a>
                    </li>
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->

         <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">