<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
    <!--================================================================================
      Item Name: Materialize - Material Design Admin Template
      Version: 4.0
      Author: PIXINVENT
      Author URL: https://themeforest.net/user/pixinvent/portfolio
    ================================================================================ -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="_token" content="{{csrf_token()}}"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description"
              content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords"
              content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <title>Materialize - Material Design Admin Template</title>
        <!-- Favicons-->
        <link rel="icon" href="{{asset('images/favicon/favicon-32x32.png')}}" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="{{asset('images/favicon/apple-touch-icon-152x152.png')}}">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="{{asset('images/favicon/mstile-144x144.png')}}">
        <!-- For Windows Phone -->
        <!-- CORE CSS-->
        <link href="{{asset('css/themes/fixed-menu/materialize.css')}}" type="text/css" rel="stylesheet">


        @if ( Config::get('app.locale') == 'fa' or Config::get('app.locale') == 'ar')
            <link href="{{asset('css/themes/fixed-menu/materialize-rtl.css')}}" type="text/css" rel="stylesheet">
        @endif


        <link href="{{asset('css/themes/fixed-menu/style.css')}}" type="text/css" rel="stylesheet">

        @if ( Config::get('app.locale') == 'fa' or Config::get('app.locale') == 'ar')
            <link href="{{asset('css/themes/fixed-menu/style-rtl.css')}}" type="text/css" rel="stylesheet">
        @endif
    <!-- Custome CSS-->
        <link href="{{asset('css/custom/custom.css')}}" type="text/css" rel="stylesheet">
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css"
              rel="stylesheet">
        <link href="{{asset('vendors/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}" type="text/css" rel="stylesheet">


        @yield("header")

    </head>
    <body dir="rtl" class="layout-light">
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START HEADER -->
    @include("layouts.sub_views.header")
    <!-- END HEADER -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START MAIN -->
        <div id="main">

            <!--<object name="foo" type="text/html" data="advance-ui-carousel.html"></object>-->

            <!-- START WRAPPER -->
            <div class="wrapper">
                <!-- START LEFT SIDEBAR NAV-->
            @include("layouts.sub_views.right_sidebar")
            <!-- END LEFT SIDEBAR NAV-->
                <!-- //////////////////////////////////////////////////////////////////////////// -->
                <!-- START CONTENT -->
                <section id="content">
                    <!--start container-->
                @yield("container")
                <!--end container-->
                </section>
                <!-- END CONTENT -->
                <!-- START RIGHT SIDEBAR NAV-->
            @include("layouts.sub_views.left_sidebar")
            <!-- END RIGHT SIDEBAR NAV-->
            </div>
            <!-- END WRAPPER -->
        </div>
        <!-- END MAIN -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START FOOTER -->
    @include("layouts.sub_views.footer")
    <!-- END FOOTER -->
        <!-- ================================================
        Scripts
        ================================================ -->
        <!-- jQuery Library -->
        <script type="text/javascript" src="{{asset('vendors/jquery-3.2.1.min.js')}}"></script>
        <!--materialize js-->
        <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
        <!--scrollbar-->
        <script type="text/javascript"
                src="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <!-- chartjs -->
        <script type="text/javascript" src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
        <!-- sparkline -->
        <script type="text/javascript" src="{{asset('vendors/sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- google map api -->
    {{--<script type="text/javascript"--}}
    {{--src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>--}}
    <!--jvectormap-->
        <script type="text/javascript"
                src="{{asset('vendors/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script type="text/javascript"
                src="{{asset('vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/jvectormap/vectormap-script.js')}}"></script>
        <!--google map-->
        <script type="text/javascript" src="{{asset('js/scripts/google-map-script.js')}}"></script>
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
        <!--card-advanced.js - Page specific JS-->
        <script type="text/javascript" src="{{asset('js/scripts/dashboard-analytics.js')}}"></script>
        <!--custom-script.js - Add your own theme custom JS-->
        <script type="text/javascript" src="{{asset('js/custom-script.js')}}"></script>


        @yield("footer")

    </body>
</html>