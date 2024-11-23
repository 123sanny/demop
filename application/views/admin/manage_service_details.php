<?php include('includes/sidebar.php') ?>

<style>  
    .brand_img{width:50px;}
</style>
    
    <!-- BREADCRUMB -->
                    <!--<div class="page-meta">-->
                    <!--    <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
                    <!--        <ol class="breadcrumb">-->
                    <!--            <li class="breadcrumb-item"><a href="#">Manage Services Details</a></li>-->
                                <!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
                    <!--        </ol>-->
                    <!--    </nav>-->
                    <!--</div>-->
                    <!-- /BREADCRUMB -->
    
                    <div class="row layout-top-spacing">
                    
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <h6 class="m-4">Manage Services Details</h6>
      
                                <table  class="table dt-table-hover datatable"id="brand_list" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>contact no</th>
                                            <th>Address</th>
                                            <th>Service type</th>
                                            <th>Duration</th>
                                            <th>Date</th>
                                            <th>Package</th>
                                            <th>Pet details</th>
                                            <th>Comment</th>
                                            <!--<th>Action</th>-->
                                           
                                           <!--<th>Type of Pet</th>-->
                                           <!-- <th>Gender Of Pet</th>-->
                                           <!-- <th>Breed of Your Pet</th>-->
                                           <!--  <th>Size of Pet</th>-->
                                           <!-- <th>Aggresssive Pet</th>-->
                                           <!-- <th>Old Is Your Pet</th>-->
                                             <!--<th>In Your Home</th>-->
                                             <!--<th>Transparent Rate </th>-->
                                             <!--<th>Professional experience</th>-->
                                            <!-- <th>Message</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php
                                        if(!empty($services_detail)){
                                        foreach($services_detail as $key=> $row){?>
                                            <td><?=$key+1?></td>
                                            <td><?=$row->name?></td>
                                            <td><?=$row->mobile?></td>
                                            <td><?=$row->address?></td>
                                            <td><?=$row->heading?></td>
                                            <td><?=$row->duration?></td>
                                            <td><?=$row->date?></td>
                                            <td><?=$row->pricing?></td>
                                            <td><button class="btn btn-light-info  model-view" data-bs-toggle="modal" data-bs-target="#petdetails<?=$row->id?>">View</button></td>
                                            <td><?=$row->comment?></td>
                                            <!--<td><button class="btn btn-light-info  model-view" data-bs-toggle="modal" data-bs-target="#viewdetails">View</button></td>-->
                                            
                                            <!--<td><?=$row->type_of_pet?></td>-->
                                            <!--<td><?=$row->gender?></td>-->
                                            <!--<td><?=$row->breed?></td>-->
                                            <!--<td><?=$row->size_pet?></td>-->
                                            <!--<td><?=$row->aggressive_pet?></td>-->
                                            <!--<td><?=$row->pet_age?></td>-->
                                            <!--<td><?=$row->your_home?></td>-->
                                            <!--<td><?=$row->flat_transparent_rate?></td>-->
                                            <!--<td><?=$row->p_experience?></td>-->



                                       </tr>
                                       
                                       
                                        <!--pet details -->
<div class="modal fade" id="petdetails<?=$row->id?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Pet Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               <svg> ... </svg>
            </button>
         </div>
         <form id="model_form" method="POST" action="add_service" class="form-horizontal form-label-left" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="inputdiv mb-4">
                  <label>Type of pet</label>
                  <input type="text" name="" id="" class="form-control" onkeydown=""value="<?=$row->type_of_pet?>" placeholder="Enter type of pet">
               </div>
               <div class="inputdiv mb-4">
                  <label>Breed of pet</label>
                  <input type="text" name="" id="" class="form-control" value="<?=$row->breed?>"   placeholder="Enter breed of pet">
               </div>
                <div class="inputdiv mb-4">
                  <label>Gender of pet</label>
                  <input type="text" name="" id="" class="form-control" value="<?=$row->gender?>" placeholder="Enter gender of pet">
               </div>
                <div class="inputdiv mb-4">
                  <label>Size of Pet</label>
                  <input type="text" name="" id="" class="form-control" value="<?=$row->size_pet?>"  placeholder="Enter size of Pet">
               </div>
                <div class="inputdiv mb-4">
                  <label>Aggression Level of Pet</label>
                  <input type="text" name="" id="" class="form-control" value="<?=$row->aggressive_pet?>" placeholder="Enter aggression Level of Pet">
               </div>
                <div class="inputdiv mb-4">
                  <label>Age Of Pet</label>
                  <input type="text" name="" id="" class="form-control" value="<?=$row->pet_age?>"  placeholder="Enter age Of Pet">
               </div>
               <!--<div class="inputdiv mb-4">-->
               <!--    <label>Price</label>-->
               <!--    <input type="text" name="price" id="price"class="form-control" placeholder="Enter Price"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">-->
               <!--</div>-->
               <!--<div class="img-uploader-content mb-4">-->
               <!--   <label>Upload Model Image</label>-->
               <!--   <input type="file" class="filepond d-block" id="fileupload" name="image" accept="image/png, image/jpg, image/webp"  onchange="checkextension()"/>-->
               <!--</div>-->
               <!--<input type="hidden" name="model" id="model"class="form-control" value="model">-->
            </div>
            <!--<div class="modal-footer">-->
            <!--   <button type="submit" id="submit_model" class="btn btn btn-light-success" onclick="allLetter(document.form1.text1)" ><i class="flaticon-cancel-12"></i> Submit</button>-->
            <!--</div>-->
            <!--<div class="row">-->
            <!--   <div class="col-md-offset-3 col-md-8" style="display:none;" id="add_result"></div>-->
            <!--</div>-->
         </form>
      </div>
   </div>
</div>
        <?php }
                                        }else{
                                            echo"";
                                        }
        ?>
                                          
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
    
                    </div>
 
 

 <!--view details -->
<!--<div class="modal fade" id="viewdetails" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">-->
<!--   <div class="modal-dialog" role="document">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-header">-->
<!--            <h5 class="modal-title" id="addModalLabel">View Details</h5>-->
<!--            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">-->
<!--               <svg> ... </svg>-->
<!--            </button>-->
<!--         </div>-->
<!--         <form id="model_form" method="POST" action="add_service" class="form-horizontal form-label-left" enctype="multipart/form-data">-->
<!--            <div class="modal-body">-->
<!--                <div class="inputdiv mb-4">-->
<!--                  <label>Name</label>-->
<!--                  <input type="text" name="description" id="description"class="form-control" placeholder="Enter name">-->
<!--               </div>.-->
<!--                <div class="inputdiv mb-4">-->
<!--                  <label>Contact no.</label>-->
<!--                  <input type="text" name="description" id="description"class="form-control" placeholder="Enter contact no.">-->
<!--               </div>-->
<!--                <div class="inputdiv mb-4">-->
<!--                  <label>Address</label>-->
<!--                  <input type="text" name="description" id="description"class="form-control" placeholder="Enter address">-->
<!--               </div>-->
<!--                <div class="inputdiv mb-4">-->
<!--                  <label>Service type</label>-->
<!--                  <input type="text" name="description" id="description"class="form-control" placeholder="Enter service type">-->
<!--               </div>-->
<!--                <div class="inputdiv mb-4">-->
<!--                  <label>Duration</label>-->
<!--                  <input type="text" name="description" id="description"class="form-control" placeholder="Enter duration">-->
<!--               </div>-->
<!--                <div class="inputdiv mb-4">-->
<!--                  <label>Date</label>-->
<!--                  <input type="text" name="description" id="description"class="form-control" placeholder="Enter date">-->
<!--               </div>-->
<!--                <div class="inputdiv mb-4">-->
<!--                  <label>Comment</label>-->
<!--                  <input type="text" name="description" id="description"class="form-control" placeholder="Enter comment">-->
<!--               </div>-->
               <!--<div class="inputdiv mb-4">-->
               <!--    <label>Price</label>-->
               <!--    <input type="text" name="price" id="price"class="form-control" placeholder="Enter Price"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">-->
               <!--</div>-->
               <!--<div class="img-uploader-content mb-4">-->
               <!--   <label>Upload Model Image</label>-->
               <!--   <input type="file" class="filepond d-block" id="fileupload" name="image" accept="image/png, image/jpg, image/webp"  onchange="checkextension()"/>-->
               <!--</div>-->
               <!--<input type="hidden" name="model" id="model"class="form-control" value="model">-->
<!--            </div>-->
            <!--<div class="modal-footer">-->
            <!--   <button type="submit" id="submit_model" class="btn btn btn-light-success" onclick="allLetter(document.form1.text1)" ><i class="flaticon-cancel-12"></i> Submit</button>-->
            <!--</div>-->
            <!--<div class="row">-->
            <!--   <div class="col-md-offset-3 col-md-8" style="display:none;" id="add_result"></div>-->
            <!--</div>-->
<!--         </form>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->

    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
  <!-- Including Jquery so All js Can run -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <!-- Validadtion js -->
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        
         </script>
    <!--Edit model-->


