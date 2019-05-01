<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Supplier Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">
<div class="account-pages mt-5 mb-5">
<div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" height="22"></span>
                                    </a>
                                    
                                </div>

                                <form action="{{route('supplierSignIn')}}" method="post" class="parsley-examples">

                                    <br/>
                                    <?php 
                                        $message=Session::get('message');
                                        if($message){

                                            ?>
                                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <?php
                                                    echo $message;
                                                    Session::put('message','');
                                                ?>
                                            </div>
                                            <?php
                                        
                                    }
                                    ?>

                                    
                                    


                                   
                                        @csrf
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div>
                                                <input type="email" name="email" class="form-control parsley-validated" required
                                                        data-parsley-required-message="Please Enter Your Email"  data-parsley-type-message="Please Provide Valid Email"  placeholder="Email"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <div>
                                                <input type="password" name="password" required class="form-control parsley-validated" 
                                                       data-parsley-minlength="8" data-parsley-maxlength="16" data-parsley-required-message="Please Enter Your Password" data-parsley-minlength-message="Password must be between 8 to 16 character" data-parsley-maxlength-message="Password must be between 8 to 16 character"  placeholder="Password"/>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0 text-center">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Sign In
                                                </button>
                                                <!-- <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    Cancel
                                                </button> -->
                                            </div>
                                        </div>
                                </form>

                                

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                       
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
           

  </div>
            <!-- end container -->
        </div>
        <!-- end page -->
           

           <footer class="footer footer-alt">
            2015 - 2018 &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer>

       <!-- Right bar overlay-->
        <div class="{{asset('customer/rightbar-overlay')}}"></div>

        <!-- Vendor js -->
        <script src="{{asset('customer/assets/js/vendor.min.js')}}"></script>

        <!-- Plugin js-->
        <script src="{{asset('customer/assets/libs/parsleyjs/parsley.min.js')}}"></script>

        <!-- Validation init js-->
        <script src="{{asset('customer/assets/js/pages/form-validation.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('customer/assets/js/app.min.js')}}"></script>
</body>
</html>