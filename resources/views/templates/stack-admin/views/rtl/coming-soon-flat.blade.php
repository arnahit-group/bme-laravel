@extends('stack-admin.layouts.simple')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif


@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/pages/coming-soon.css')}}" rel="stylesheet" type="text/css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link href="../../../assets/css/style-rtl.css" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/coming-soon.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
        <!-- END: Custom CSS-->

    @endif


@endsection
@section('main')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- coming soon flat design -->
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center p-0">
                        <div class="col-sm-10 col-12 p-0">
                            <div class="card card-transparent box-shadow-0 border-0">
                                <div class="card-content">
                                    <div class="text-center">
                                        <h5 class="card-text pb-2 white">WE ARE LAUNCHING SOON.</h5>
                                        <img alt="bg-img" class="img-responsive block width-300 mx-auto" src="{{asset('admin-assets/images/logo/stack-logo-light-big.png')}}"
                                             width="300">
                                        <div class="card-text getting-started pt-1 mt-2 white d-sm-flex justify-content-center d-inline-block" id="clockFlat"></div>
                                        <div class="col-12 pt-1">
                                            <p class="card-text lead white">Our website is under construction.</p>
                                        </div>
                                        <div class="col-12 text-center pt-2">
                                            <p class="socialIcon card-text">
                                                <a href="coming-soon-flat.html#"><i class="fa fa-facebook-square white"></i></a>
                                                <a href="coming-soon-flat.html#"><i class="fa fa-twitter-square white"></i></a>
                                                <a href="coming-soon-flat.html#"><i class="fa fa-google-plus-square white"></i></a>
                                                <a href="coming-soon-flat.html#"><i class="fa fa-linkedin-square white"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ coming soon flat design -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('vendor-js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/coming-soon/jquery.countdown.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/coming-soon/coming-soon.js')}}"></script>
    <!-- END: Page JS-->

@endsection
