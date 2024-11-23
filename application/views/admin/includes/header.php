<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
      <title>Admin </title>
      <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/img/logo/petlogo.png"/>
      <link href="<?= base_url()?>assets/css/light/loader.css" rel="stylesheet" type="text/css" />
      <!-- <link href="../layouts/vertical-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" /> -->
      <script src="<?= base_url()?>assets/js/loader.js"></script>
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
      <link href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?= base_url()?>assets/css/light/plugins.css" rel="stylesheet" type="text/css" />
      <!-- <link href="../layouts/vertical-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" /> -->
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
      <!-- <link href="../src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css"> -->
      <link href="<?= base_url()?>assets/css/light/dash_1.css" rel="stylesheet" type="text/css" />
      <!-- <link href="../src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" /> -->
      <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
      <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/src/table/datatable/datatables.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/plugins/css/light/table/datatable/dt-global_style.css">
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <style>
         .svgimg{width:22px}
         #sidebar ul.menu-categories li.menu.active > .dropdown-toggle img {filter: brightness(5);}
         @media only screen and (min-width: 992px){
         .layout-px-spacing {
         padding: 0 44px !important;
         min-height: calc(100vh - 112px) !important;
         }
         .header-container {
         width: calc(98% - 255px - 48px);
         }
         .sidebar-wrapper {
         width: 285px;
         }
         #sidebar ul.menu-categories li.menu > .dropdown-toggle {
         padding: 10.2px 5px;
         }
         .footer-wrapper {
         padding: 10px 34px 10px 38px;
         }
         }
      </style>
   </head>
   <body class="layout-boxed">
      <!-- BEGIN LOADER -->
      <div id="load_screen">
         <div class="loader">
            <div class="loader-content">
               <div class="spinner-grow align-self-center"></div>
            </div>
         </div>
      </div>
      <!--  END LOADER -->
      <!--  BEGIN NAVBAR  -->
      <div class="header-container container-xxl">
         <header class="header navbar navbar-expand-sm expand-header">
            <a href="javascript:void(0);" class="sidebarCollapse">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
               </svg>
            </a>
            <ul class="navbar-item flex-row ms-lg-auto ms-0">
               <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                  <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <div class="avatar-container">
                        <div class="avatar avatar-sm avatar-indicators avatar-online">
                           <img alt="avatar" src="<?= base_url()?>assets/img/profile-30.png" class="rounded-circle">
                        </div>
                     </div>
                  </a>
                  <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                     <div class="user-profile-section">
                        <div class="media mx-auto">
                           <div class="emoji me-2">
                              &#x1F44B;
                           </div>
                           <div class="media-body">
                              <h5>Shaun Park</h5>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="dropdown-item">
                        <a href="user-profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                        </a>
                        </div>
                        <div class="dropdown-item">
                        <a href="app-mailbox.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>Inbox</span>
                        </a>
                        </div>
                        <div class="dropdown-item">
                        <a href="auth-boxed-lockscreen.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                        </a>
                        </div> -->
                     <div class="dropdown-item">
                        <a href="<?= base_url()?>admin/change_password">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                           </svg>
                           <span>Change password</span>
                        </a>
                     </div>
                     <div class="dropdown-item">
                        <a href="<?= base_url()?>login/logout">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                              <polyline points="16 17 21 12 16 7"></polyline>
                              <line x1="21" y1="12" x2="9" y2="12"></line>
                           </svg>
                           <span>Log Out</span>
                        </a>
                     </div>
                  </div>
               </li>
            </ul>
         </header>
      </div>
      <!--  END NAVBAR  -->