<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
<<<<<<< HEAD
        <title>Dashboard | Company Name</title>
=======
        <title>Dashboard</title>
>>>>>>> branch-employee
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css -->
<<<<<<< HEAD
        
        <link href="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
        
=======

        <link href="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

>>>>>>> branch-employee
        <!-- Bootstrap css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Head js -->
        <script src="{{ asset('backend/assets/js/head.js') }}"></script>

    </head>

    <!-- body start -->
<<<<<<< HEAD
    <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>
=======
    <body data-layout-mode="default" data-theme="dark" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="dark" data-leftbar-size='default' data-sidebar-user='false'>
>>>>>>> branch-employee

        <!-- Begin page -->
        <div id="wrapper">

<<<<<<< HEAD
            
            <!-- Topbar Start -->
            
            @include('body.header')
            
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            
            @include('body.sidebar')
            
=======

            <!-- Topbar Start -->

            @include('body.header')

            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->

            @include('body.sidebar')

>>>>>>> branch-employee
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
<<<<<<< HEAD
                
                @yield('admin')

                <!-- Footer Start -->
                
                @include('body.footer')
                
=======

                @yield('admin')

                <!-- Footer Start -->

                @include('body.footer')

>>>>>>> branch-employee
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        {{-- @include('body.right_sidebar') --}}
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
<<<<<<< HEAD
        
=======

>>>>>>> branch-employee
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{ asset('backend/assets/js/pages/dashboard-1.init.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
<<<<<<< HEAD
        
    </body>
</html>
=======

    </body>
</html>
>>>>>>> branch-employee
