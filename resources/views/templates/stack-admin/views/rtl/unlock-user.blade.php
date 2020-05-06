@extends('stack-admin.layouts.simple')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link href="{{asset('admin-assets/vendors/css/forms/icheck/icheck.css')}}" 
          rel="stylesheet" type="text/css">
    <link href="{{asset('admin-assets/vendors/css/forms/icheck/custom.css')}}"
          rel="stylesheet" type="text/css">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}" 
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}" 
              rel="stylesheet" type="text/css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link href="../../../assets/css/style-rtl.css" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
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
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                                <div class="card-header border-0 text-center">
                                    <img alt="unlock-user" class="rounded-circle img-fluid center-block" src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png')}}">
                                    <h5 class="card-title mt-1">John Doe</h5>
                                </div>

                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2"><span>Unlock your account</span></p>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="login-simple.html" class="form-horizontal" novalidate>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input class="form-control form-control-lg" id="password" placeholder="Enter Password" required type="password">
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                    <fieldset>
                                                        <input class="chk-remember" id="remember-me" type="checkbox">
                                                        <label for="remember-me"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a class="card-link" href="recover-password.html"><i
                                                                class="ft-unlock"></i> Forgot Password?</a></div>
                                            </div>
                                            <a class="btn btn-outline-primary btn-lg btn-block" href="index.html"><i class="icon-lock4"></i> Unlock</a>
                                            <a class="btn btn-outline-danger btn-lg btn-block" href="login-simple.html"><i class="ft-power"></i> Logout</a>
                                        </form>
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
    <script src="{{asset('admin-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/forms/form-login-register.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
