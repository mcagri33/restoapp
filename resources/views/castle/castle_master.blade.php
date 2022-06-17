<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/castle/images/favicon.ico')}}">

    <!-- App css -->

    <link href="{{asset('assets/castle/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="{{asset('assets/castle/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<!-- body start -->
<body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
   @include('castle.body.navbar')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
   @include('castle.body.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

   @yield('castle')
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor -->
<script src="{{asset('assets/castle/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/feather-icons/feather.min.js')}}"></script>

<!-- knob plugin -->
<script src="{{asset('assets/castle/libs/jquery-knob/jquery.knob.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('assets/castle/libs/morris.js06/morris.min.js')}}"></script>
<script src="{{asset('assets/castle/libs/raphael/raphael.min.js')}}"></script>

<!-- Dashboar init js-->
<script src="{{asset('assets/castle/js/pages/dashboard.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('assets/castle/js/app.min.js')}}"></script>

</body>
</html>
