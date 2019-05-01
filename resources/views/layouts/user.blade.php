<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title','Admin Dashboard')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="_base_url" content="{{ url('/') }}">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

        
        <!-- Plugins css  for image upload file -->


         <!-- Sweet Alert-->
        <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

          <!--Date css-->
          <!-- Plugins css -->
        <link href="{{asset('admin/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Plugins css  for select option-->
       <!-- Plugins css -->
        <link href="{{asset('admin/assets/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/multiselect/multi-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
        <!-- End Plugins css  for select option-->

        <!-- Plugins css -->
        <link href="{{asset('admin/assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Plugins css  for image upload file-->

        <!-- Plugins css -->
        <link href="{{asset('admin/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

        

        <!-- third party data-table css -->
        <link href="{{asset('admin/assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party data-table css end -->

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        

        


    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->

             
            @include('includes.user.headerNavigation')
            
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->

             @include('includes.user.headerSidebar')
            
            
            
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                            @yield('content')
                  </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <!-- Vendor js -->
        <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('admin/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.time.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>

         <!-- third party data table js -->
        <script src="{{asset('admin/assets/libs/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables/dataTables.select.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/pdfmake/vfs_fonts.js')}}"></script>
        <!-- third party data table js ends -->

        <!-- select option link here-->
        <script src="{{asset('admin/assets/libs/jquery-nice-select/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/multiselect/jquery.multi-select.js')}}"></script>
        <script src="{{asset('admin/assets/libs/select2/select2.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/autocomplete/jquery.autocomplete.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

        <!-- Init js-->
        <!-- <script src="{{asset('admin/assets/js/pages/form-advanced.init.js')}}"></script> -->
        <!-- select option link end here-->

      <!-- Plugins css  for image upload file-->

       <!-- Sweet Alerts js -->
        <script src="{{asset('admin/assets/libs/sweetalert2/sweetalert.min.js')}}"></script>

        <!-- Sweet alert init js-->
        
        <script src="{{asset('admin/assets/js/pages/sweet-alerts.init.js')}}"></script>

        <!-- Sweet Alerts js -->

     <!-- Plugins js -->
        <script src="{{asset('admin/assets/libs/dropzone/dropzone.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/dropify/dropify.min.js')}}"></script>

         <!-- Init js-->
        <script src="{{asset('admin/assets/js/pages/form-fileuploads.init.js')}}"></script>

         <!-- Date Plugin-->
         <!-- Plugins js-->
        <script src="{{asset('admin/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
         <!-- Init js-->
        <script src="{{asset('admin/assets/js/pages/form-pickers.init.js')}}"></script>

 <!-- Plugins css  for image upload file-->

       


        <!-- Datatables init -->
        <script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset('admin/assets/js/pages/dashboard-1.init.js')}}"></script>

   <!-- Plugin js-->
        <script src="{{asset('admin/assets/libs/parsleyjs/parsley.min.js')}}"></script>
        <!-- Validation init js-->
        <script src="{{asset('admin/assets/js/pages/form-validation.init.js')}}"></script>



        <!-- App js-->
        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>


        <!-- Custom Js -->

        <script src="{{asset('customJs/user.js')}}"></script>

              
        <!-- Custom Js -->

    </body>
</html>