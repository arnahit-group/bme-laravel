<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" data-textdirection="ltr" lang="en">
    <!-- BEGIN: Head-->
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" name="viewport">
        <meta content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google."
              name="description">
        <meta content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard"
              name="keywords">
        <meta content="ThemeSelect" name="author">
        <meta name="_token" content="{{csrf_token()}}"/>
        <title>404 Page | Materialize - Material Design Admin Template</title>
        <link href="{{asset('app-assets/images/favicon/apple-touch-icon-152x152.png')}}" rel="apple-touch-icon">
        <link href="{{asset('app-assets/images/favicon/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon">
        <link href="../../../../fonts.googleapis.com/icon.css" rel="stylesheet">
        <!-- BEGIN: VENDOR CSS-->
        <link href="{{asset('app-assets/vendors/vendors.min.css')}}" rel="stylesheet" type="text/css">
    @yield('vendor-css')
        <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}"
              rel="stylesheet" type="text/css">
        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/materialize-rtl.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css/themes/vertical-modern-menu-template/style-rtl.css')}}">

    @yield('header')
    <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link href="{{asset('app-assets/css/custom/custom.css')}}" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->
    </head>
    <!-- END: Head-->
    <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column  bg-full-screen-image blank-page blank-page"
          data-col="1-column" data-menu="vertical-modern-menu" data-open="click">


    @yield('main')

    <!-- BEGIN VENDOR JS-->
        <script src="{{asset('app-assets/js/vendors.min.js')}}" type="text/javascript"></script>
    @yield('vendor-js')
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN THEME  JS-->
        <script src="{{asset('app-assets/js/plugins.js')}}" type="text/javascript"></script>
        <script src="{{asset('app-assets/js/custom/custom-script.js')}}" type="text/javascript"></script>
    @yield('footer')
    <!-- END THEME  JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <!-- END PAGE LEVEL JS-->
    </body>
</html>