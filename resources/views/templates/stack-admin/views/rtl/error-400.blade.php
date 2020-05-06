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
        <link href="{{asset('admin-assets/css-rtl/pages/error.min.css" rel="stylesheet')}}"
              type="text/css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link href="../../../assets/css/style-rtl.css" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->
    @else

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/error.min.css')}}">
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
                        <div class="col-md-4 col-10 p-0">
                            <div class="card-header bg-transparent border-0">
                                <h2 class="error-code text-center mb-2">400</h2>
                                <h3 class="text-uppercase text-center">Bad Request</h3>
                            </div>
                            <div class="card-content">
                                <fieldset class="row py-2">
                                    <div class="input-group col-12">
                                        <input aria-describedby="button-addon2" class="form-control form-control-xl input-xl border-grey border-lighten-1 " placeholder="Search..."
                                               type="text">
                                        <span class="input-group-append" id="button-addon2">
                           <button class="btn btn-secondary border-grey border-lighten-1" type="button"><i class="ft-search"></i></button>
                       </span>
                                    </div>
                                </fieldset>
                                <div class="row py-2">
                                    <div class="col-12 col-sm-6 col-md-6 mb-1">
                                        <a class="btn btn-primary btn-block" href="index.html"><i class="ft-home"></i> Home</a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 mb-1">
                                        <a class="btn btn-danger btn-block" href="search-website.html"><i class="ft-search"></i> Search</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <p class="text-muted text-center col-12 py-1">© <span class="year"></span> <a href="error-400.html#">Stack </a>Crafted with <i
                                                class="ft-heart pink"> </i> by <a href="http://themeforest.net/user/pixinvent/portfolio" target="_blank">PIXINVENT</a></p>
                                    <div class="col-12 text-center">
                                        <a class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook" href="error-400.html#"><span class="fa fa-facebook"></span></a>
                                        <a class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter" href="error-400.html#"><span class="fa fa-twitter"></span></a>
                                        <a class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin" href="error-400.html#"><span class="fa fa-linkedin font-medium-4"></span></a>
                                        <a class="btn btn-social-icon mr-1 mb-1 btn-outline-github" href="error-400.html#"><span class="fa fa-github font-medium-4"></span></a>
                                    </div>
                                </div>
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
    <script src="{{asset('admin-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/forms/form-login-register.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
