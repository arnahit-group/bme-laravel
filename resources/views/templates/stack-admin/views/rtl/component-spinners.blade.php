@extends('stack-admin.layouts.admin')

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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
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
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Spinners</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-spinners.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Spinners
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="ft-settings icon-left"></i> Settings
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a
                                        class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
                        </div>
                        <a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="ft-mail"></i></a><a class="btn btn-outline-primary"
                                                                                                                         href="timeline-center.html"><i
                                    class="ft-pie-chart"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Spinners with Icons start -->
                <section id="spinner-with-icons">
                    <div class="row">
                        <div class="col-12 mt-2 mb-1">
                            <h4 class="text-uppercase">Spinners with Icons</h4>
                            <p>Use <code>.spinner</code> class to icon for spin effect.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 1</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-refresh</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-refresh spinner">
                                            </i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-refresh spinner">
                                            </i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 2</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-asterisk</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-asterisk spinner">
                                            </i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-asterisk spinner">
                                            </i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 3</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-recycle</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-recycle spinner"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-recycle spinner"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 4</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-futbol-o</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-futbol-o spinner"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-futbol-o spinner"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 5</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-gear</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-gear spinner"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-gear spinner"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 6</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-repeat</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-repeat spinner"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-repeat spinner"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 7</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-rotate-left</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-rotate-left spinner"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-rotate-left spinner"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 8</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-star-o</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-star-o spinner"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-star-o spinner"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 9</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-spinner</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-spinner spinner"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-spinner spinner"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 10</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-circle-o-notch</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center card-title">Loading Spinner Option 11</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Using <code>.fa-spinner</code> spinner Icon class. </p>
                                        <button type="button" class="btn btn-lg btn-success mb-1">
                                            <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                            Light Layout
                                        </button>
                                        <button type="button" class="btn btn-lg btn-danger mb-1">
                                            <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                            Dark Layout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Spinners with Icons end -->
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
