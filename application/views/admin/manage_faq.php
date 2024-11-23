<?php include('includes/sidebar.php') ?>

<style>
    .slider_img{width:250px;}
</style>
    <!-- BREADCRUMB -->
                    <!--<div class="page-meta">-->
                    <!--    <nav class="breadcrumb-style-one" aria-label="breadcrumb">-->
                    <!--        <ol class="breadcrumb">-->
                    <!--            <li class="breadcrumb-item"><a href="#">Manage FAQ</a></li>-->
                                <!--<li class="breadcrumb-item active" aria-current="page">Basic</li>-->
                    <!--        </ol>-->
                    <!--    </nav>-->
                    <!--</div>-->
                    <!-- /BREADCRUMB -->
    
                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <h6 class="m-4">Manage Services <button class="btn btn-light-info" style="float:right;margin-top:-5px;" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></h6>
      
                                <!--<div class="d-inline-block w-100"><button class="btn btn-light-info mt-3 mx-3" style="float:right;" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></div>-->
                                <table  class="table dt-table-hover datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    if(!empty($view_data)){
                                        foreach($view_data as  $key=>$res_view_data){
                                        ?>
                                </script>
                                        <tr>
                                                    <td><?=$key+1?></td>
                                            <td><?= $res_view_data->question  ?></td>
                                            <td><button class="btn btn-light-info  model-view" data-bs-toggle="modal" data-bs-target="#ansModal<?= $res_view_data->id ?>">View</button></td>
                                            <td>
                                                <a  class="bs-tooltip model-delete"   data-id="<?=$res_view_data->id?>"  data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Delete" aria-label="Delete" data-bs-original-title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                </a>
                                            </td>
                                        </tr>
                                      <!--Answer Modal -->
                                      <!--<div class="modal fade" id="ansModal <?= $res_view_data->id?>" tabindex="-1" role="dialog" aria-labelledby="msgModalLabel" aria-hidden="true">-->
                                      <!--    <div class="modal-dialog" role="document">-->
                                      <!--        <div class="modal-content">-->
                                      <!--            <div class="modal-header">-->
                                      <!--                <h5 class="modal-title" id="msgModalLabel">Answer</h5>-->
                                      <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">-->
                                      <!--                  <svg> ... </svg>-->
                                      <!--                </button>-->
                                      <!--            </div>-->
                                      <!--            <div class="modal-body">-->
                                      <!--                <div class="contentdiv">-->
                                      <!--                    <p> <?= $res_view_data->answer?> </p>-->
                                      <!--                </div>-->
                                      <!--            </div>-->
                                                  
                                      <!--        </div>-->
                                      <!--    </div>-->
                                      <!--</div>-->
                                             <div class="modal fade" id="ansModal<?= $res_view_data->id?>" tabindex="-1" role="dialog" aria-labelledby="msgModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="msgModalLabel">Answer</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                  <svg> ... </svg>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                 <p> <?= $res_view_data->answer?> </p>
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
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        <!--Question Modal -->
        <!--<div class="modal fade" id="quesModal" tabindex="-1" role="dialog" aria-labelledby="imgModalLabel" aria-hidden="true">-->
        <!--    <div class="modal-dialog" role="document">-->
        <!--        <div class="modal-content">-->
        <!--            <div class="modal-header">-->
        <!--                <h5 class="modal-title" id="imgModalLabel">Question</h5>-->
        <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">-->
        <!--                  <svg> ... </svg>-->
        <!--                </button>-->
        <!--            </div>-->
        <!--            <div class="modal-body">-->
        <!--                <div class="contentdiv">-->
        <!--                    <p>Here is the Question?</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        
        
                                        
        <!--Add Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="msgModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="msgModalLabel">Add FAQ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <svg> ... </svg>
                        </button>
                    </div>
                    <form id="manage_faq"  method="post" action="manage_faq/insert_data" enctype="multipart/form-data" >
                    <div class="modal-body">
                        <div class="contentdiv mb-4">
                            <label>Add Question</label>
                            <input type="text" class="form-control" name="question" placeholder="Here is the Question?">
                        </div>
                        <div class="contentdiv mb-4">
                            <label>Add Answer</label>
                            <input type="text" class="form-control" name="answer" placeholder="Here is the Answer">
                        </div>
                    </div>
                    <div class="modal-footer">
                   <!--<input class="btn btn btn-light-success" type="submit" name="Submit" value="Submit"><i class="flaticon-cancel-12">-->
                        <!--<button class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Submit</button>-->
                    <button type="submit" id="submit_btn"class="btn btn btn-light-success"><i class="flaticon-cancel-12"></i> Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Including Jquery so All js Can run -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <!-- Validadtion js -->
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

        <script>
        $('#manage_faq').validate({
            rules: {
                question: "required",
                 answer:"required"

                }
        });
        $('#manage_faq').on('submit', function(e) {
          //  alert('sd');
            e.preventDefault();
            var formData = new FormData(this);
            if ($("#manage_faq").validate().form()) {
                if (confirm('Are you sure? Want to create FAQ')) {
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        beforeSend: function() {
                            $('#submit_btn').html('Please wait..');
                        },
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(result) {
                            $('#add_result').html(result);
                            $('#add_result').show().delay(4000).fadeOut();
                            $('#submit_btn').html('Submit');
                            $('#manage_faq')[0].reset();
                            location.reload();
                        }
                    });
                }
            }
        });
    </script>
        
        
        <!-- Delete model -->
        <script>
        $(document).on('click', '.model-delete', function() {
            if (confirm('Are you sure? Want to delete category? All related all data will also be deleted')) {
                id = $(this).data("id");
                // image = $(this).data("image");
                $.ajax({
                    url: '<?= base_url() ?>Manage_faq/delete',
                    type: "get",
                    data: 'id=' + id + '&model-delete=1',
                    success: function(result) {
                     if (result == 1) {
                     
                            location.reload();

                            // $('#category_list').bootstrapTable('refresh');
                        } else{
                            alert('Error! Category could not be deleted');
                        // $('#category_list').bootstrapTable('refresh');

                    }
       
                    }
                });
            }
        });
</script>
        
    