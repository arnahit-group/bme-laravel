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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/simple-line-icons/style.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/simple-line-icons/style.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Advance Statistics Cards</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="card-statistics.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Statistics Cards
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
            <div class="content-body"><!-- Minimal statistics section start -->
                <section id="minimal-statistics">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Minimal Statistics Cards</h4>
                            <p>Statistics on minimal cards.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-pencil primary font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>278</h3>
                                                <span>New Posts</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-speech warning font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>156</h3>
                                                <span>New Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-graph success font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>64.89 %</h3>
                                                <span>Bounce Rate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-pointer danger font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3>423</h3>
                                                <span>Total Visits</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="danger">278</h3>
                                                <span>New Projects</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-rocket danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="success">156</h3>
                                                <span>New Clients</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-user success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="warning">64.89 %</h3>
                                                <span>Conversion Rate</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="primary">423</h3>
                                                <span>Support Tickets</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-support primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="primary">278</h3>
                                                <span>New Posts</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-book-open primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress mt-1 mb-0" style="height: 7px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="warning">156</h3>
                                                <span>New Comments</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-bubbles warning font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress mt-1 mb-0" style="height: 7px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="success">64.89 %</h3>
                                                <span>Bounce Rate</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-cup success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress mt-1 mb-0" style="height: 7px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="danger">423</h3>
                                                <span>Total Visits</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-direction danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="progress mt-1 mb-0" style="height: 7px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Minimal statistics section end -->

                <!-- Minimal statistics with bg color section start -->
                <section id="minimal-statistics-bg">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Minimal Statistics With Background Color</h4>
                            <p>Statistics on minimal cards with background color.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-primary">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-pencil white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>278</h3>
                                                <span>New Posts</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-danger">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-speech white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>156</h3>
                                                <span>New Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-success">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-graph white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>64.89 %</h3>
                                                <span>Bounce Rate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-warning">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-pointer white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>423</h3>
                                                <span>Total Visits</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-warning">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body white text-left">
                                                <h3>278</h3>
                                                <span>New Projects</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-rocket white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-success">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body white text-left">
                                                <h3>156</h3>
                                                <span>New Clients</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-user white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-danger">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body white text-left">
                                                <h3>64.89 %</h3>
                                                <span>Conversion Rate</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-pie-chart white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-primary">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body white text-left">
                                                <h3>423</h3>
                                                <span>Support Tickets</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-support white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Minimal statistics with bg color section end -->

                <!-- Minimal statistics with gradient bg color section start -->
                <section id="minimal-gradient-statistics-bg">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Minimal Statistics With Gradient Background Color</h4>
                            <p>Statistics on minimal cards with gradient background color.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-directional-primary">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-pencil white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>278</h3>
                                                <span>New Posts</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-directional-danger">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-speech white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>156</h3>
                                                <span>New Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-directional-success">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-graph white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>64.89 %</h3>
                                                <span>Bounce Rate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-directional-warning">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-pointer white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>423</h3>
                                                <span>Total Visits</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-directional-warning">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body white text-left">
                                                <h3>278</h3>
                                                <span>New Projects</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-rocket white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-directional-success">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body white text-left">
                                                <h3>156</h3>
                                                <span>New Clients</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-user white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-directional-danger">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body white text-left">
                                                <h3>64.89 %</h3>
                                                <span>Conversion Rate</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-pie-chart white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-gradient-directional-primary">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body white text-left">
                                                <h3>423</h3>
                                                <span>Support Tickets</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-support white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Minimal statistics with bg gradient color section end -->

                <!-- Icon section start -->
                <section id="icon-section">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Icon Section</h4>
                            <p>Statistics on minimal cards with attractive icon section.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-primary">
                                            <i class="icon-camera font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 media-body">
                                            <h5>Products</h5>
                                            <h5 class="text-bold-400 mb-0">28</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-danger">
                                            <i class="icon-user font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 media-body">
                                            <h5>New Users</h5>
                                            <h5 class="text-bold-400 mb-0">1,22,356</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-success">
                                            <i class="icon-basket-loaded font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 media-body">
                                            <h5>New Orders</h5>
                                            <h5 class="text-bold-400 mb-0">4,65,879</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-warning">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 media-body">
                                            <h5>Total Profit</h5>
                                            <h5 class="text-bold-400 mb-0">5.6 M</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-body text-left">
                                            <h5>Products</h5>
                                            <h5 class="text-bold-400 mb-0">28</h5>
                                        </div>
                                        <div class="p-2 text-center bg-warning">
                                            <i class="icon-camera font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-body text-left">
                                            <h5>New Users</h5>
                                            <h5 class="text-bold-400 mb-0">1,22,356</h5>
                                        </div>
                                        <div class="p-2 text-center bg-success">
                                            <i class="icon-user font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-body text-left">
                                            <h5>New Orders</h5>
                                            <h5 class="text-bold-400 mb-0">4,65,879</h5>
                                        </div>
                                        <div class="p-2 text-center bg-danger">
                                            <i class="icon-basket-loaded font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-body text-left">
                                            <h5>Total Profit</h5>
                                            <h5 class="text-bold-400 mb-0">5.6 M</h5>
                                        </div>
                                        <div class="p-2 text-center bg-primary">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-primary">
                                            <i class="icon-camera font-large-2 white"></i>
                                        </div>
                                        <div class="py-1 px-2 media-body">
                                            <h5 class="primary">Products</h5>
                                            <h5 class="text-bold-400">28</h5>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-danger">
                                            <i class="icon-user font-large-2 white"></i>
                                        </div>
                                        <div class="py-1 px-2 media-body">
                                            <h5 class="danger">New Users</h5>
                                            <h5 class="text-bold-400">1,22,356</h5>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-success">
                                            <i class="icon-basket-loaded font-large-2 white"></i>
                                        </div>
                                        <div class="py-1 px-2 media-body">
                                            <h5 class="success">New Orders</h5>
                                            <h5 class="text-bold-400">4,65,879</h5>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-warning">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                        <div class="py-1 px-2 media-body">
                                            <h5 class="warning">Total Profit</h5>
                                            <h5 class="text-bold-400">5.6 M</h5>
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
                </section>
                <!-- // Icon section end -->

                <!-- Icon section with bg color section start -->
                <section id="icon-section-bg">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Icon Section With Background Color</h4>
                            <p>Statistics on minimal cards with attractive icon section and background color.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-primary bg-darken-2">
                                            <i class="icon-camera font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-primary white media-body">
                                            <h5>Products</h5>
                                            <h5 class="text-bold-400 mb-0">28</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-danger bg-darken-2">
                                            <i class="icon-user font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-danger white media-body">
                                            <h5>New Users</h5>
                                            <h5 class="text-bold-400 mb-0">1,22,356</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-success bg-darken-2">
                                            <i class="icon-basket-loaded font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-success white media-body">
                                            <h5>New Orders</h5>
                                            <h5 class="text-bold-400 mb-0">4,65,879</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-warning bg-darken-2">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-warning white media-body">
                                            <h5>Total Profit</h5>
                                            <h5 class="text-bold-400 mb-0">5.6 M</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 bg-warning white media-body text-left">
                                            <h5>Products</h5>
                                            <h5 class="text-bold-400 mb-0">28</h5>
                                        </div>
                                        <div class="p-2 text-center bg-warning bg-darken-2">
                                            <i class="icon-camera font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 bg-success white media-body text-left">
                                            <h5>New Users</h5>
                                            <h5 class="text-bold-400 mb-0">1,22,356</h5>
                                        </div>
                                        <div class="p-2 text-center bg-success bg-darken-2">
                                            <i class="icon-user font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 bg-danger white media-body text-left">
                                            <h5>New Orders</h5>
                                            <h5 class="text-bold-400 mb-0">4,65,879</h5>
                                        </div>
                                        <div class="p-2 text-center bg-danger bg-darken-2">
                                            <i class="icon-basket-loaded font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 bg-primary white media-body text-left">
                                            <h5>Total Profit</h5>
                                            <h5 class="text-bold-400 mb-0">5.6 M</h5>
                                        </div>
                                        <div class="p-2 text-center bg-primary bg-darken-2">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Icon section with bg color section end -->

                <!-- Icon section with gradient bg color section start -->
                <section id="icon-section-bg-gradient">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Icon Section With Gradient Background Color</h4>
                            <p>Statistics on minimal cards with attractive icon section and gradient background color.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-primary bg-darken-2">
                                            <i class="icon-camera font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-gradient-x-primary white media-body">
                                            <h5>Products</h5>
                                            <h5 class="text-bold-400 mb-0">28</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-danger bg-darken-2">
                                            <i class="icon-user font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-gradient-x-danger white media-body">
                                            <h5>New Users</h5>
                                            <h5 class="text-bold-400 mb-0">1,22,356</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-success bg-darken-2">
                                            <i class="icon-basket-loaded font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-gradient-x-success white media-body">
                                            <h5>New Orders</h5>
                                            <h5 class="text-bold-400 mb-0">4,65,879</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 text-center bg-warning bg-darken-2">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                        <div class="p-2 bg-gradient-x-warning white media-body">
                                            <h5>Total Profit</h5>
                                            <h5 class="text-bold-400 mb-0">5.6 M</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 bg-gradient-x-warning white media-body text-left">
                                            <h5>Products</h5>
                                            <h5 class="text-bold-400 mb-0">28</h5>
                                        </div>
                                        <div class="p-2 text-center bg-warning bg-darken-2">
                                            <i class="icon-camera font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 bg-gradient-x-success white media-body text-left">
                                            <h5>New Users</h5>
                                            <h5 class="text-bold-400 mb-0">1,22,356</h5>
                                        </div>
                                        <div class="p-2 text-center bg-success bg-darken-2">
                                            <i class="icon-user font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 bg-gradient-x-danger white media-body text-left">
                                            <h5>New Orders</h5>
                                            <h5 class="text-bold-400 mb-0">4,65,879</h5>
                                        </div>
                                        <div class="p-2 text-center bg-danger bg-darken-2">
                                            <i class="icon-basket-loaded font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 bg-gradient-x-primary white media-body text-left">
                                            <h5>Total Profit</h5>
                                            <h5 class="text-bold-400 mb-0">5.6 M</h5>
                                        </div>
                                        <div class="p-2 text-center bg-primary bg-darken-2">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Icon section with gradient bg color section end -->

                <!-- stats with subtitle section start -->
                <section id="stats-subtitle">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Statistics With Subtitle</h4>
                            <p>Statistics on minimal cards with Title &amp; Sub Title.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="card-body cleartfix">
                                        <div class="media align-items-stretch">
                                            <div class="align-self-center">
                                                <i class="icon-pencil primary font-large-2 mr-2"></i>
                                            </div>
                                            <div class="media-body">
                                                <h4>Total Posts</h4>
                                                <span>Monthly blog posts</span>
                                            </div>
                                            <div class="align-self-center">
                                                <h1>18,000</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body cleartfix">
                                        <div class="media align-items-stretch">
                                            <div class="align-self-center">
                                                <i class="icon-speech warning font-large-2 mr-2"></i>
                                            </div>
                                            <div class="media-body">
                                                <h4>Total Comments</h4>
                                                <span>Monthly blog comments</span>
                                            </div>
                                            <div class="align-self-center">
                                                <h1>84,695</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body cleartfix">
                                        <div class="media align-items-stretch">
                                            <div class="align-self-center">
                                                <h1 class="mr-2">$76,456.00</h1>
                                            </div>
                                            <div class="media-body">
                                                <h4>Total Sales</h4>
                                                <span>Monthly Sales Amount</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-heart danger font-large-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body cleartfix">
                                        <div class="media align-items-stretch">
                                            <div class="align-self-center">
                                                <h1 class="mr-2">$36,000.00</h1>
                                            </div>
                                            <div class="media-body">
                                                <h4>Total Cost</h4>
                                                <span>Monthly Cost</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-wallet success font-large-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // stats with subtitle section end -->

                <!-- stats with icon & subtitle section start -->
                <section id="stats-icon-subtitle">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Statistics With Icon Section &amp; Subtitle</h4>
                            <p>Statistics on minimal cards with icon section and Title, Sub Title.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="bg-primary p-2 media-middle">
                                            <i class="icon-pencil font-large-2 white"></i>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Posts</h4>
                                            <span>Monthly blog posts</span>
                                        </div>
                                        <div class="media-right p-2 media-middle">
                                            <h1 class="primary">18,000</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="bg-warning p-2 media-middle">
                                            <i class="icon-speech font-large-2  white"></i>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Comments</h4>
                                            <span>Monthly blog comments</span>
                                        </div>
                                        <div class="media-right p-2 media-middle">
                                            <h1 class="warning">84,695</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-middle">
                                            <h1 class="danger">$76,456.00</h1>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Sales</h4>
                                            <span>Monthly sales amount</span>
                                        </div>
                                        <div class="media-right bg-danger p-2 media-middle">
                                            <i class="icon-heart font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-middle">
                                            <h1 class="success">$76,456.00</h1>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Cost</h4>
                                            <span>Monthly Cost</span>
                                        </div>
                                        <div class="media-right bg-success p-2 media-middle">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // stats with icon & subtitle section end -->

                <!-- stats with icon, subtitle & bg color section start -->
                <section id="stats-icon-subtitle-bg-1">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Statistics With Icon Section, Subtitle &amp; Bg Color</h4>
                            <p>Statistics on minimal cards with icon section, title, sub title and background color.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="media align-items-stretch bg-primary white">
                                        <div class="bg-primary bg-darken-2 p-2 media-middle">
                                            <i class="icon-pencil font-large-2 white"></i>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Posts</h4>
                                            <span>Monthly blog posts</span>
                                        </div>
                                        <div class="media-right p-2 media-middle">
                                            <h1>18,000</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch bg-warning white">
                                        <div class="bg-warning bg-darken-2 p-2 media-middle">
                                            <i class="icon-speech font-large-2 white"></i>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Comments</h4>
                                            <span>Monthly blog comments</span>
                                        </div>
                                        <div class="media-right p-2 media-middle">
                                            <h1>84,695</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch bg-danger white">
                                        <div class="p-2 media-middle">
                                            <h1>$76,456.00</h1>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Sales</h4>
                                            <span>Monthly sales amount</span>
                                        </div>
                                        <div class="media-right bg-danger bg-darken-2 p-2 media-middle">
                                            <i class="icon-heart font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch bg-success white">
                                        <div class="p-2 media-middle">
                                            <h1>$76,456.00</h1>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Cost</h4>
                                            <span>Monthly Cost</span>
                                        </div>
                                        <div class="media-right bg-success bg-darken-2 p-2 media-middle">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // stats with icon, subtitle & bg color section end -->


                <!-- stats with icon, subtitle & bg gradient color section start -->
                <section id="stats-icon-subtitle-bg">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Statistics With Icon Section, Subtitle &amp; Bg Gradient Color</h4>
                            <p>Statistics on minimal cards with icon section, title, sub title and background Gradient color.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="media align-items-stretch bg-gradient-x-primary white">
                                        <div class="p-2 media-middle">
                                            <i class="icon-pencil font-large-2 white"></i>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Posts</h4>
                                            <span>Monthly blog posts</span>
                                        </div>
                                        <div class="media-right p-2 media-middle">
                                            <h1>18,000</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch bg-gradient-x-warning white">
                                        <div class="p-2 media-middle">
                                            <i class="icon-speech font-large-2 white"></i>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Comments</h4>
                                            <span>Monthly blog comments</span>
                                        </div>
                                        <div class="media-right p-2 media-middle">
                                            <h1>84,695</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch bg-gradient-x-danger white">
                                        <div class="p-2 media-middle">
                                            <h1>$76,456.00</h1>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Sales</h4>
                                            <span>Monthly sales amount</span>
                                        </div>
                                        <div class="media-right p-2 media-middle">
                                            <i class="icon-heart font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch bg-gradient-x-success white">
                                        <div class="p-2 media-middle">
                                            <h1>$76,456.00</h1>
                                        </div>
                                        <div class="media-body p-2">
                                            <h4>Total Cost</h4>
                                            <span>Monthly Cost</span>
                                        </div>
                                        <div class="media-right p-2 media-middle">
                                            <i class="icon-wallet font-large-2 white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // stats with icon, subtitle & bg gradient color section end -->

                <!-- grouped card stats section start -->
                <section id="grouped-stats">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Grouped Card Statistics</h4>
                            <p>Statistics with grouped cards, knobs and icons.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="card-body text-center">
                                                <div class="card-header mb-2">
                                                    <span class="success">New Feedbacks</span>
                                                    <h3 class="display-4 blue-grey darken-1">24,879</h3>
                                                </div>
                                                <div class="card-content">
                                                    <input type="text" value="35" class="knob hide-value responsive angle-offset" data-angleOffset="40" data-thickness=".15"
                                                           data-linecap="round" data-width="150" data-height="150" data-inputColor="#e1e1e1" data-readOnly="true"
                                                           data-fgColor="#16D39A" data-knob-icon="icon-note">
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2">
                                                            <h1 class="blue-grey darken-1 text-bold-400">95%</h1>
                                                            <span class="success"><i class="icon-like"></i> Positive</span>
                                                        </li>
                                                        <li class="pl-2">
                                                            <h1 class="blue-grey darken-1 text-bold-400">5%</h1>
                                                            <span class="warning darken-2"><i class="icon-dislike"></i> Negative</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="card-body text-center">
                                                <div class="card-header mb-2">
                                                    <span class="warning darken-2">New Subscribers</span>
                                                    <h3 class="display-4 blue-grey darken-1">14,962</h3>
                                                </div>
                                                <div class="card-content">
                                                    <input type="text" value="56" class="knob hide-value responsive angle-offset" data-angleOffset="0" data-thickness=".15"
                                                           data-linecap="round" data-width="150" data-height="150" data-inputColor="#e1e1e1" data-readOnly="true"
                                                           data-fgColor="#FFA87D" data-knob-icon="icon-user">
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li>
                                                            <h1 class="blue-grey darken-1 text-bold-400">1465</h1>
                                                            <span class="warning darken-2"><i class="icon-head"></i> Average Monthly Subscribers</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="card-body text-center">
                                                <div class="card-header mb-2">
                                                    <span class="danger">Total Users</span>
                                                    <h3 class="display-4 blue-grey darken-1">76,894</h3>
                                                </div>
                                                <div class="card-content">
                                                    <input type="text" value="75" class="knob hide-value responsive angle-offset" data-angleOffset="20" data-thickness=".15"
                                                           data-linecap="round" data-width="150" data-height="150" data-inputColor="#e1e1e1" data-readOnly="true"
                                                           data-fgColor="#FF7588" data-knob-icon="icon-users">
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2">
                                                            <h1 class="blue-grey darken-1 text-bold-400">24%</h1>
                                                            <span class="success"><i class="icon-male"></i> Male</span>
                                                        </li>
                                                        <li class="pl-2">
                                                            <h1 class="blue-grey darken-1 text-bold-400">76%</h1>
                                                            <span class="warning darken-2"><i class="icon-female"></i> Female</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="p-1 text-center">
                                                <div>
                                                    <h3 class="display-4 blue-grey darken-1">34,879</h3>
                                                    <span class="blue-grey darken-1">Total Likes</span>
                                                </div>
                                                <div class="card-content">
                                                    <div id="morris-likes" style="height:75px;"></div>
                                                    <ul class="list-inline clearfix">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2">
                                                            <h1 class="primary text-bold-400">4789</h1>
                                                            <span class="blue-grey darken-1"><i class="icon-like"></i> Per Post</span>
                                                        </li>
                                                        <li class="pl-2">
                                                            <h1 class="primary text-bold-400">389</h1>
                                                            <span class="blue-grey darken-1"><i class="icon-dislike"></i> Today</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="p-1 text-center">
                                                <div>
                                                    <h3 class="display-4 blue-grey darken-1">14,962</h3>
                                                    <span class="blue-grey darken-1">Total Comments</span>
                                                </div>
                                                <div class="card-content">
                                                    <div id="morris-comments" style="height:75px;"></div>
                                                    <ul class="list-inline clearfix">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2">
                                                            <h1 class="danger text-bold-400">147</h1>
                                                            <span class="blue-grey darken-1"><i class="icon-like"></i> Per Post</span>
                                                        </li>
                                                        <li class="pl-2">
                                                            <h1 class="danger text-bold-400">54</h1>
                                                            <span class="blue-grey darken-1"><i class="icon-dislike"></i> Today</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="p-1 text-center">
                                                <div>
                                                    <h3 class="display-4 blue-grey darken-1">76,894</h3>
                                                    <span class="blue-grey darken-1">Total Views</span>
                                                </div>
                                                <div class="card-content">
                                                    <div id="morris-views" style="height:75px;"></div>
                                                    <ul class="list-inline clearfix">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2">
                                                            <h1 class="warning text-bold-400">6897</h1>
                                                            <span class="blue-grey darken-1"><i class="icon-like"></i> Per Post</span>
                                                        </li>
                                                        <li class="pl-2">
                                                            <h1 class="warning text-bold-400">498</h1>
                                                            <span class="blue-grey darken-1"><i class="icon-dislike"></i> Today</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                                <div class="media d-flex p-2">
                                                    <div class="align-self-center">
                                                        <i class="icon-camera font-large-1 blue-grey d-block mb-1"></i>
                                                        <span class="text-muted text-right">Products</span>
                                                    </div>
                                                    <div class="media-body text-right">
                                                        <span class="font-large-2 text-bold-300 primary">579</span>
                                                    </div>
                                                </div>
                                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                                <div class="media d-flex p-2">
                                                    <div class="align-self-center">
                                                        <i class="icon-user font-large-1 blue-grey d-block mb-1"></i>
                                                        <span class="text-muted text-right">New Clients</span>
                                                    </div>
                                                    <div class="media-body text-right">
                                                        <span class="font-large-2 text-bold-300 danger">423</span>
                                                    </div>
                                                </div>
                                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                                <div class="media d-flex p-2">
                                                    <div class="align-self-center">
                                                        <i class="icon-bulb font-large-1 blue-grey d-block mb-1"></i>
                                                        <span class="text-muted text-right">Conversion Rate</span>
                                                    </div>
                                                    <div class="media-body text-right">
                                                        <span class="font-large-2 text-bold-300 success">61%</span>
                                                    </div>
                                                </div>
                                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-12">
                                                <div class="media d-flex p-2">
                                                    <div class="align-self-center">
                                                        <i class="icon-wallet font-large-1 blue-grey d-block mb-1"></i>
                                                        <span class="text-muted text-right">Sales</span>
                                                    </div>
                                                    <div class="media-body text-right">
                                                        <span class="font-large-2 text-bold-300 warning">$687</span>
                                                    </div>
                                                </div>
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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-3">
                                                <div class="float-left pl-2">
                                                    <span class="font-large-3 text-bold-300">589</span>
                                                </div>
                                                <div class="float-left mt-2 ml-1">
                                                    <span class="blue-grey darken-1 block">New</span>
                                                    <span class="blue-grey darken-1 block">Products</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-3">
                                                <div class="float-left pl-2">
                                                    <span class="font-large-3 text-bold-300">765</span>
                                                </div>
                                                <div class="float-left mt-2 ml-1">
                                                    <span class="blue-grey darken-1 block">New</span>
                                                    <span class="blue-grey darken-1 block">Clients</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-3">
                                                <div class="float-left pl-2">
                                                    <span class="font-large-3 text-bold-300">693</span>
                                                </div>
                                                <div class="float-left mt-2 ml-1">
                                                    <span class="blue-grey darken-1 block">New</span>
                                                    <span class="blue-grey darken-1 block">Orders</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="float-left pl-2">
                                                    <span class="font-large-3 text-bold-300">946</span>
                                                </div>
                                                <div class="float-left mt-2 ml-1">
                                                    <span class="blue-grey darken-1 block">New</span>
                                                    <span class="blue-grey darken-1 block">Visitors</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-3">
                                                <div class="float-left pl-2">
                                                    <span class="font-large-3 text-bold-300 primary">589</span>
                                                </div>
                                                <div class="float-left mt-2 ml-1">
                                                    <span class="blue-grey darken-1 block">New</span>
                                                    <span class="blue-grey darken-1 block">Products</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-3">
                                                <div class="float-left pl-2">
                                                    <span class="font-large-3 text-bold-300 danger">765</span>
                                                </div>
                                                <div class="float-left mt-2 ml-1">
                                                    <span class="blue-grey darken-1 block">New</span>
                                                    <span class="blue-grey darken-1 block">Clients</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-3">
                                                <div class="float-left pl-2">
                                                    <span class="font-large-3 text-bold-300 success">693</span>
                                                </div>
                                                <div class="float-left mt-2 ml-1">
                                                    <span class="blue-grey darken-1 block">New</span>
                                                    <span class="blue-grey darken-1 block">Orders</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="float-left pl-2">
                                                    <span class="font-large-3 text-bold-300 warning">946</span>
                                                </div>
                                                <div class="float-left mt-2 ml-1">
                                                    <span class="blue-grey darken-1 block">New</span>
                                                    <span class="blue-grey darken-1 block">Visitors</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-gradient-x-primary">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 border-right-primary border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-camera font-large-2"></i> 1579</h1>
                                                <span class="white">Products</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 border-right-primary border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-user font-large-2"></i> 1423</h1>
                                                <span class="white">New Clients</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 border-right-primary border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-bulb font-large-2"></i> 61%</h1>
                                                <span class="white">Conversion Rate</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-wallet font-large-2"></i> $687</h1>
                                                <span class="white">Sales</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-gradient-x-danger">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 border-right-danger border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-camera font-large-2"></i> 1579</h1>
                                                <span class="white">Products</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 border-right-danger border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-user font-large-2"></i> 1423</h1>
                                                <span class="white">New Clients</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 border-right-danger border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-bulb font-large-2"></i> 61%</h1>
                                                <span class="white">Conversion Rate</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-wallet font-large-2"></i> $687</h1>
                                                <span class="white">Sales</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-gradient-x-success">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 border-right-success border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-camera font-large-2"></i> 1579</h1>
                                                <span class="white">Products</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 border-right-success border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-user font-large-2"></i> 1423</h1>
                                                <span class="white">New Clients</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 border-right-success border-right-lighten-3">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-bulb font-large-2"></i> 61%</h1>
                                                <span class="white">Conversion Rate</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="card-body text-center">
                                                <h1 class="display-4 white"><i class="icon-wallet font-large-2"></i> $687</h1>
                                                <span class="white">Sales</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // grouped card stats section end -->

                <!-- Sparkline stats section start -->
                <section id="sparkline-stats">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Sparkline Statisctics</h4>
                            <p>Statistics with sparkline charts.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h1 class="display-4">$15,678</h1>
                                                <span class="text-muted">Total Cost</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-bulb font-large-2 blue-grey lighten-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sp-line-total-cost"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h1 class="display-4">$45,668</h1>
                                                <span class="text-muted">Total Sales</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-graph font-large-2 blue-grey lighten-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sp-line-total-sales"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h1 class="display-4">$32,454</h1>
                                                <span class="text-muted">Total Revenue</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-wallet font-large-2 blue-grey lighten-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sp-line-total-revenue"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$15,678</h3>
                                                <span class="text-muted">Total Cost</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="sp-bar-total-cost"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$45,668</h3>
                                                <span class="text-muted">Total Sales</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="sp-bar-total-sales"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$32,454</h3>
                                                <span class="text-muted">Total Revenue</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="sp-bar-total-revenue"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <div id="sp-stacked-bar-total-cost"></div>
                                            </div>
                                            <div class="media-body media-right text-right">
                                                <h3>$15,678</h3>
                                                <span class="text-muted">Total Cost</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <div id="sp-stacked-bar-total-sales"></div>
                                            </div>
                                            <div class="media-body media-right text-right">
                                                <h3>$45,668</h3>
                                                <span class="text-muted">Total Sales</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <div id="sp-stacked-bar-total-revenue"></div>
                                            </div>
                                            <div class="media-body media-right text-right">
                                                <h3>$32,454</h3>
                                                <span class="text-muted">Total Revenue</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$15,678</h3>
                                                <span class="text-muted">Total Cost</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="sp-tristate-bar-total-cost"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$45,668</h3>
                                                <span class="text-muted">Total Sales</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="sp-tristate-bar-total-sales"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$32,454</h3>
                                                <span class="text-muted">Total Revenue</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="sp-tristate-bar-total-revenue"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Sparkline stats section end -->
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
    <script src="{{asset('admin-assets/vendors/js/extensions/jquery.knob.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/jquery.sparkline.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection

@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/cards/card-statistics.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection

