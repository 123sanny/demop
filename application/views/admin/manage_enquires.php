<?php include('includes/header.php') ?>
<?php include('includes/sidebar.php') ?>
<!-- BREADCRUMB -->
<!--<div class="page-meta">-->
<!--   <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
<!--      <ol class="breadcrumb">-->
<!--         <li class="breadcrumb-item"><a href="#">Manage Enquires</a></li>-->
         <!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
<!--      </ol>-->
<!--   </nav>-->
<!--</div>-->
<!-- /BREADCRUMB -->
<?php echo $this->session->flashdata('success');?>
<div class="row layout-top-spacing">
<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
   <div class="widget-content widget-content-area br-8">
      <h6 class="m-4">Manage Enquires</h6>
      <table  class="table dt-table-hover datatable" style="width:100%">
         <thead>
            <tr>
               <th>Sr.</th>
               <th>Name</th>
               <th>Mobile Number</th>
               <th>Whatsap No</th>
               <th>Address/Location</th>
               <th>Service Type</th>
               <th>Description</th>
               <th>Action</th>
               <!--<th class="no-content">Action</th>-->
            </tr>
         </thead>
         <tbody>
            <?php if(!empty($enquriy)){
               foreach($enquriy as $key=>$enquriys){
                   if($enquriys->is_varify==0){
                       $varify="Pending";
                       $color="btn-warning";
                   }elseif($enquriys->is_varify==1){
                       $varify="Approved";
                       $color="btn-success";
                   }elseif($enquriys->is_varify==2){
                       $varify="Rejected";
                       $color="btn-danger";
                   }
                   else{
                       $verify="";
                   } 
               
               ?>
            <tr>
               <td><?=$key+1?></td>
               <td><?=$enquriys->name?></td>
               <td><?=$enquriys->mobile?></td>
               <td><?=$enquriys->whatsap_no?></td>
               <td><?=$enquriys->address_location?></td>
               <td><?=$enquriys->service_type?></td>
               <td><button class="btn btn-light-info" data-bs-toggle="modal" data-bs-target="#descModal<?=$enquriys->id?>">View</button></td>
               <!--<td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></td>-->
               <td>
                  <select style="color:#2196f3 !important;" class="select_input btn btn-light-info <?=$color; ?>" name="is_varify"  required  onchange="change_verification(<?=$enquriys->id ?>,this.value)">
                     <option value="0"<?=($enquriys->is_varify==0)?"selected":""?>class="btn btn-light-info ">Pending</option>
                     <option value="1"<?=($enquriys->is_varify==1)?"selected":""?> class="btn btn-light-info " >Approved</option>
                     <option value="2"<?=($enquriys->is_varify==2)?"selected":""?> class="btn btn-light-info ">Rejected</option>
                  </select>
               </td>
            </tr>
            <!--<tr>-->
            <!--    <td>Raghav Verma</td>-->
            <!--    <td>9900990099</td>-->
            <!--    <td>abc@gmail.com</td>-->
            <!--    <td><button class="btn btn-light-info" data-bs-toggle="modal" data-bs-target="#descModal">View</button></td>-->
            <!--<td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></td>-->
            <!--</tr>-->
            <!--Description Modal -->
            <div class="modal fade" id="descModal<?=$enquriys->id?>" tabindex="-1" role="dialog" aria-labelledby="descModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="descModalLabel">Description</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           <svg> ... </svg>
                        </button>
                     </div>
                     <div class="modal-body">
                        <p class="modal-text"><?=$enquriys->description?> </p>
                     </div>
                     <!--<div class="modal-footer">-->
                     <!--    <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>-->
                     <!--</div>-->
                  </div>
               </div>
            </div>
            <?php }
               }else{
                   echo"";
               }?>
         </tbody>
      </table>
   </div>
</diV>
<?php include('includes/footer.php') ?>
<script>
   function change_verification(id,status){
       //console.log(id);
       if(confirm("Do you want to change")){
           var s_url="<?=base_url('admin/enquriy_varifiy')?>/"+id+"/"+status;
           window.location.href=s_url;
       }
      
   }
       
       
</script>