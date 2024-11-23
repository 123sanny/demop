<?php include('includes/sidebar.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- BREADCRUMB -->
<!--<div class="page-meta">-->
<!--   <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
<!--      <ol class="breadcrumb">-->
<!--<li class="breadcrumb-item"><a href="#">Manage Feedback</a></li>-->
<!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
<!--      </ol>-->
<!--   </nav>-->
<!--</div>-->
<!-- /BREADCRUMB -->
<?php echo $this->session->flashdata('success');?>
<div class="row layout-top-spacing">
<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
   <div class="widget-content widget-content-area br-8">
      <h6 class="m-4">Manage Feedback</h6>
      <table  class="table dt-table-hover datatable" style="width:100%">
         <thead>
            <tr>
               <th>Sr.</th>
               <th>Name</th>
               <th>Email</th>
               <th>Message</th>
               <th>Reating</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php 
               if(!empty($view_feedback)){
               foreach($view_feedback as $key=>$enquriys){
               if ($enquriys->status == 1) {
               $status = 'Inactive';
               $sta = 2;
               $st = 'Delete';
               $ha = "Red";
               } else {
               $status = 'Active';
               $sta = 1;
               $st = 'Inactive';
               $ha = "green";
               }
               ?>
            <script type="text/javascript">
               function myfunction(id, status) {
                   var user = confirm("Do you want to Delete ?");
                   if (user == true) {
                       window.location = "<?= base_url("/Feedback/delete_feedback/")?>" + id + "/" + status
                   } else {
               
                   }
               
               }
            </script>
            <tr>
               <td><?=$key+1?></td>
               <td><?=$enquriys->name?></td>
               <td><?=$enquriys->email?></td>
               <!--<td><?=$enquriys->message?></td>-->
               <td><button class="btn btn-light-info  model-view" data-bs-toggle="modal" data-bs-target="#ansModal<?= $enquriys->id ?>">View</button></td>
               <td>                                            
                  <span class="<?php if ($enquriys->rating >= 1) {
                     echo 'fa fa-star  text-warning';
                       }else{ echo 'fa fa-star-o';} ?>"></span>
                  <span class="<?php if ($enquriys->rating >=2) {
                     echo 'fa fa-star text-warning';
                     }else{ echo 'fa fa-star-o'; } ?>" ></span>
                  <span class="<?php if ($enquriys->rating >=3) {
                     echo 'fa fa-star text-warning';
                      }else{ echo 'fa fa-star-o';} ?>"></span>
                  <span class="<?php if ($enquriys->rating >=4) {
                     echo 'fa fa-star text-warning';
                     }else{ echo 'fa fa-star-o'; } ?>" ></span>
                  <span class="<?php if ($enquriys->rating >=5) {
                     echo 'fa fa-star text-warning';
                     }else{ echo 'fa fa-star-o'; } ?>"></span>
                  </span> 
               </td>
               <td><input type='button' value='<?= $st ?>' class='btn btn-light-info   model-view' onclick='myfunction(<?= $enquriys->id ?>,<?= $sta ?>)'></td>
               <!--<td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#descModal<?php $enquriys->id?>">DELETE</button></td>-->
               <!--<td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></td>-->
               <!--    <td>-->
               <!--                <select style="color:#2196f3 !important;" class="select_input btn btn-light-info <?php //$color; ?>" name="is_varify"  required  onchange="change_verification(<?=$enquriys->id ?>,this.value)">-->
               <!--                 <option value="0"<?php //($enquriys->is_varify==0)?"selected":""?>class="btn btn-light-info ">Pending</option>-->
               <!--                 <option value="1"<?php //($enquriys->is_varify==1)?"selected":""?> class="btn btn-light-info " >Approved</option>-->
               <!--                <option value="2"<?php //($enquriys->is_varify==2)?"selected":""?> class="btn btn-light-info ">Rejected</option>-->
               <!--                </select>-->
               <!--            </td>-->
               <!--</tr>-->
               <!--<tr>-->
               <!--    <td>Raghav Verma</td>-->
               <!--    <td>9900990099</td>-->
               <!--    <td>abc@gmail.com</td>-->
               <!--    <td><button class="btn btn-light-info" data-bs-toggle="modal" data-bs-target="#descModal">View</button></td>-->
               <!--<td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></td>-->
               <!--</tr>-->
               <!--Description Modal -->
               <div class="modal fade" id="descModal<?php  //$enquriys->id?>" tabindex="-1" role="dialog" aria-labelledby="descModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="descModalLabel">Description</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <svg> ... </svg>
                           </button>
                        </div>
                        <div class="modal-body">
                           <p class="modal-text"><?php //$enquriys->description?> </p>
                        </div>
                        <!--<div class="modal-footer">-->
                        <!--    <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>-->
                        <!--</div>-->
                     </div>
                  </div>
               </div>
               <div class="modal fade" id="ansModal<?= $enquriys->id?>" tabindex="-1" role="dialog" aria-labelledby="msgModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="msgModalLabel">Answer</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <svg> ... </svg>
                           </button>
                        </div>
                        <div class="modal-body">
                           <p> <?= $enquriys->message?> </p>
                        </div>
                        <!--<div class="modal-footer">-->
                        <!--    <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>-->
                        <!--</div>-->
                     </div>
                  </div>
               </div>
               <?php 
                  }
                  }
                  // }else{
                      // echo"";
                  // }
                  ?>
         </tbody>
      </table>
   </div>
</diV>
<script>
   function change_verification(id,status){
       //console.log(id);
       if(confirm("Do you want to change")){
           var s_url="<?=base_url('admin/enquriy_varifiy')?>/"+id+"/"+status;
           window.location.href=s_url;
       }
      
   }
       
       
</script>