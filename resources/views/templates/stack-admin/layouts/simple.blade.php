<!DOCTYPE html>
<html class="loading" data-textdirection="rtl" lang="en">
    <!-- BEGIN: Head-->
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" name="viewport">
        <meta content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." name="description">
        <meta content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app" name="keywords">
        <meta content="PIXINVENT" name="author">
        <title>Error 400 - Stack Responsive Bootstrap 4 Admin Template</title>
        <link href="{{asset('admin-assets/images/ico/apple-icon-120.png')}}" rel="apple-touch-icon">
        <link href="{{asset('admin-assets/images/ico/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
{{--        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">--}}
        <link href="{{asset('admin-assets/fonts/google/css/fonts.google.css')}}" rel="stylesheet">
    @yield('vendor-css')

    <!-- BEGIN: Theme CSS-->
        <link href="{{asset('admin-assets/css-rtl/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/bootstrap-extended.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/colors.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/components.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/custom-rtl.min.css')}}" rel="stylesheet" type="text/css">
        <!-- END: Theme CSS-->

        @yield('header')

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern 1-column   blank-page blank-page" data-col="1-column" data-menu="vertical-menu-modern" data-open="click">

    @yield('main')

    @yield('vendor-js')

    <!-- BEGIN: Theme JS-->
        <script src="{{asset('admin-assets/js/core/app-menu.min.js')}}"></script>
        <script src="{{asset('admin-assets/js/core/app.min.js')}}"></script>
        <!-- END: Theme JS-->

        @yield('footer')
    </body>
    <!-- END: Body-->
</html>