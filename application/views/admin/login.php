<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/equation/html/vertical-light-menu/auth-boxed-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 08:45:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SignIn Admin </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="<?= base_url()?>assets/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url()?>assets/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url()?>assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <link href="<?= base_url()?>assets/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url()?>assets/css/light/auth-boxed.css" rel="stylesheet" type="text/css" />
    
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>Sign In</h2>
                                    <p>Enter your username and password to login</p>
                                    
                                </div>
                                <form method ="POST"  id ="login_form" action="Login/check_login">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" id="email"class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" id="password" name="password"class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button type ="submit" id="login_button"class="btn btn-secondary w-100">Sign In</button>
                                    </div>
                                </div>
                                 <div class="clearfix"></div>
                                  <div style ="display:none;" id="result">
                                    </div>
                                </form>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
  <!-- Including Jquery so All js Can run -->
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <!-- Validadtion js -->
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script>
            $("#login_form").validate({
                rules: {
                    email: "required",
                    password: "required",
                },
                messages: {
                    email: {
                        required: "Please Enter email"
                    },
                    password: {
                        required: "Please Enter password",

                    },
                }
            });
            $(document).on('submit', '#login_form', function (e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    type: "POST",
                    data: $(this).serialize(),
                    beforeSend: function () {
                        $('#login_button').html('Please Wait...');
                    },
                    // data: dataString,
                    success: function (result) {
                        //console.log(success);
                        if (result == 1) {
                            window.location.href = "<?=base_url('admin/index')?>";
                        } else
                        {
                            $('#result').html(result);
                            $('#result').show();
                            $('#login_button').html('Log in');
                        }
                    }
                });
            });
        </script>

</body>


</html>