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
        <link href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}"
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}" 
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/pages/under-maintenance.min.css')}}"
              rel="stylesheet" type="text/css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link href="../../../assets/css/style-rtl.css" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/under-maintenance.min.css')}}">
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
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 box-shadow-3 m-0">
                                <div class="card-body">
                    <span class="card-title text-center">
            			<img alt="logo" class="img-fluid mx-auto d-block pt-2" src="{{asset('admin-assets/images/logo/stack-logo-dark-big.png')}}"
                             width="250">
            		</span>
                                </div>
                                <div class="card-body text-center">
                                    <h3>This page is under maintenance</h3>
                                    <p>We're sorry for the inconvenience.
                                        <br> Please check back later.</p>
                                    <div class="mt-2"><i class="fa fa-cog spinner font-large-2"></i></div>
                                </div>
                                <hr>
                                <p class="socialIcon card-text text-center pt-2 pb-2">
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook" href="under-maintenance.html#"><span class="fa fa-facebook"></span></a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter" href="under-maintenance.html#"><span class="fa fa-twitter"></span></a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin" href="under-maintenance.html#"><span
                                                class="fa fa-linkedin font-medium-4"></span></a>
                                    <a class="btn btn-social-icon mr-1 mb-1 btn-outline-github" href="under-maintenance.html#"><span class="fa fa-github font-medium-4"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
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
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')

@endsection
