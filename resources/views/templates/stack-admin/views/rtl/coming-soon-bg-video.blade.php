@extends('stack-admin.layouts.simple')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link href="{{asset('admin-assets/vendors/css/extensions/bgvideo/video-js.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-assets/vendors/css/extensions/bgvideo/bigvideo.css')}}" rel="stylesheet" type="text/css">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/pages/coming-soon.css" rel="stylesheet')}}" type="text/css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link href="../../../assets/css/style-rtl.css" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
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
            <div class="content-body"><!-- coming soon bg video -->
                <section class="flexbox-container">
                    <div class="col-12">
                        <div class="card card-transparent box-shadow-0 border-0 coming-soon-content">
                            <div class="card-content">
                                <div class="text-center">
                                    <h5 class="card-text pt-1 pb-2 white">WE ARE LAUNCHING SOON.</h5>
                                    <img alt="bg-img" class="img-responsive block width-300 mx-auto" src="{{asset('admin-assets/images/logo/stack-logo-light-big.png" width="300')}}">
                                    <div class="getting-started p-1 mt-2 d-inline-block" id="clockMinimal"></div>
                                    <div class="col-12 pt-1">
                                        <p class="card-text lead white">Our website is under construction.</p>
                                    </div>
                                    <div class="col-12 text-center pt-2">
                                        <p class="socialIcon">
                                            <a href="coming-soon-bg-video.html#"><i class="fa fa-facebook-square white"></i></a>
                                            <a href="coming-soon-bg-video.html#"><i class="fa fa-twitter-square white"></i></a>
                                            <a href="coming-soon-bg-video.html#"><i class="fa fa-google-plus-square white"></i></a>
                                            <a href="coming-soon-bg-video.html#"><i class="fa fa-linkedin-square white"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ coming soon bg video -->

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
    <script src="{{asset('admin-assets/vendors/js/bgvideo/video.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/bgvideo/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/bgvideo/bigvideo.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/bgvideo/jquery.tubular.1.0.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/coming-soon/coming-soon.js')}}"></script>
    <!-- END: Page JS-->

@endsection
