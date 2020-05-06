@extends('stack-admin.layouts.admin')

@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <!-- END: Vendor CSS-->

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
                    <h3 class="content-header-title mb-0">Advance Maps</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="card-maps.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Advance Maps
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
            <div class="content-body"><!-- Vector maps section start -->
                <section id="vector-maps">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Vector Maps</h4>
                            <p>Statistics on vector maps.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card box-shadow-0">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-xl-9 col-lg-12">
                                            <div id="world-map-markers" class="height-500"></div>
                                        </div>
                                        <div class="col-xl-3 col-lg-12">
                                            <div class="card-body">
                                                <h4 class="card-title pt-1 text-center">Sales All Over The World</h4>
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-4 col-sm-12 pl-1">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="text-bold-500">Total Orders <i class="ft-arrow-down warning"></i> <span
                                                                            class="warning">4.27%</span></span>
                                                                <h2 class="mb-0">789</h2>
                                                            </div>
                                                            <div class="media-right media-top pr-2">
                                                                <i class="icon-cart font-large-1"></i>
                                                            </div>
                                                        </div>
                                                        <div id="map-total-orders" class="height-100"></div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-4 col-sm-12">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="text-bold-500">Total Profit <i class="ft-arrow-up success"></i> <span
                                                                            class="teal accent-3">6.89%</span></span>
                                                                <h2 class="mb-0">$47.8K</h2>
                                                            </div>
                                                            <div class="media-right media-top pr-2">
                                                                <i class="icon-dollar font-large-1"></i>
                                                            </div>
                                                        </div>
                                                        <div id="map-total-profit" class="height-100"></div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-4 col-sm-12">
                                                        <div class="sales">
                                                            <div class="sales-today mb-1">
                                                                <p class="m-0">Today <span class="sucess float-right"><i class="ft-arrow-up success"></i> 6.89%</span></p>
                                                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                                         aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="sales-yesterday">
                                                                <p class="m-0">Yesterday <span class="warning float-right"><i class="ft-arrow-down warning"></i> 4.18%</span></p>
                                                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                                         aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Vector maps section end -->
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
    <script src="{{asset('admin-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection

@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/cards/card-maps.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
