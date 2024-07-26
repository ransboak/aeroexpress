<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>AAERO XPRESS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Aeroepress" name="description" />
        <meta content="Aero" name="author" />
        <!-- App favicon -->
        <link href="{{asset('backend/assets/images/aeroexp.ico')}}" rel="icon">

        <!-- Sweet Alert-->
        <link href="{{asset('backend/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <style>
            #preloade {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.8); /* White with transparency */
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}
#preloade img{
    width: 100px;
}
        </style>
    </head>
   
    <body data-sidebar="dark">
        <div id="preloade">
            <img src="{{asset('aaero.gif')}}" alt="">
        </div>
        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('backend.layouts.navbar')

            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.layouts.left-sidebar')
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    @yield('content')
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->



                @include('backend.layouts.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        {{-- <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{asset('backend/assets/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('backend/assets/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="{{asset('backend/assets/css/bootstrap-dark.min.css')}}" data-appStyle="{{asset('backend/assets/css/app-dark.min.css')}}" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('backend/assets/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="{{asset('backend/assets/css/app-rtl.min.css')}}" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div> --}}
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('backend/assets/js/pages/datatables.init.js')}}"></script>

        <!-- Sweet Alerts js -->
        <script src="{{asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Sweet alert init js-->
        <script src="{{asset('backend/assets/js/pages/sweet-alerts.init.js')}}"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function(){
                const preloader = document.getElementById('preloade');
                window.addEventListener('load', function(){
                    preloader.style.display = 'none'
                })
            })
        </script>
    </body>

</html>

