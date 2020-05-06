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
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Advance E-commerce Cards</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="card-ecommerce.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">E-commerce Cards
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
            <div class="content-body"><!-- E-commerce section start -->
                <section id="ecommerce-stats">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">E-Commerce Analytics</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card text-white bg-success">
                                <div class="card-header">
                                    <h4 class="card-title">Top Selling Phones</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div id="doughnut" class="height-400 echart-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card text-white bg-danger">
                                <div class="card-header">
                                    <h4 class="card-title">Customer Browser's Stats</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div id="timeline" class="height-400 echart-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <!-- Nightingale Rose With Labels Chart -->
                        <div class="col-md-6 col-sm-12">
                            <div class="card bg-blue-grey bg-darken-2 text-white">
                                <div class="card-header">
                                    <h4 class="card-title">Monthly Sales</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div id="nightingale-rose-labels" class="height-400 echart-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Latest Customers</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">
                                    <div class="media-list">
                                        <a href="card-ecommerce.html#" class="media active">
                                            <div class="media-left">
                                                <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-7.png')}}"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-right pt-1">$1,021</span></h5>
                                                <p class="list-group-item-text"><span class="badge badge-primary mr-1">Electronics</span><span
                                                            class="badge badge-warning">Decor</span></p>
                                            </div>
                                        </a>
                                        <a href="card-ecommerce.html#" class="media">
                                            <div class="media-left">
                                                <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-16.png')}}"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="list-group-item-heading">Aurore Thomsen<span class="font-medium-4 float-right pt-1">$2,021</span></h5>
                                                <p class="list-group-item-text mb-0"><span class="badge badge-danger">Appliances</span></p>
                                            </div>
                                        </a>
                                        <a href="card-ecommerce.html#" class="media">
                                            <div class="media-left">
                                                <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-12.png')}}"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="list-group-item-heading">Rubi Pauli<span class="font-medium-4 float-right pt-1">$1,112</span></h5>
                                                <p class="list-group-item-text mb-0"><span class="badge badge-primary mr-1">Electronics</span>
                                                    <span class="badge badge-success">Office</span></p>
                                            </div>
                                        </a>
                                        <a href="card-ecommerce.html#" class="media">
                                            <div class="media-left">
                                                <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-9.png')}}"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="list-group-item-heading">Monty Punch<span class="font-medium-4 float-right pt-1">$2,815</span></h5>
                                                <p class="list-group-item-text mb-0"><span class="badge badge-warning mr-1">Decor</span>
                                                    <span class="badge badge-danger">Appliances</span></p>
                                            </div>
                                        </a>
                                        <a href="card-ecommerce.html#" class="media">
                                            <div class="media-left">
                                                <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-12.png')}}"
                                                     alt="Generic placeholder image" style="width: 48px;height: 48px;">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="list-group-item-heading">Stasia Kremer<span class="font-medium-4 float-right pt-1">$2,021</span></h5>
                                                <p class="list-group-item-text mb-0"><span class="badge badge-primary mr-1">Electronics</span><span
                                                            class="badge badge-warning">Decor</span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // E-commerce section end -->

                <!-- Shopping cards section start -->
                <section id="shopping-cards">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Shopping Cards</h4>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-4 col-md-12">
                            <div class="card text-center">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="{{asset('admin-assets/images/carousel/24.png" alt="Card image cap')}}">
                                    <div class="card-body">
                                        <h4 class="card-title">Formal Shoes</h4>
                                        <p class="card-text">Some quick example text.</p>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <span class="btn btn-outline-blue-grey">$159</span>
                                            <button type="button" class="btn btn-outline-blue-grey">Shop Now <i class="icon-cart3"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="{{asset('admin-assets/images/carousel/25.jpg" alt="Card image cap')}}">
                                    <div class="card-body">
                                        <h4 class="card-title">Smart Wearable</h4>
                                        <p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton candy.</p>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <span class="float-left">$349</span>
                                    <span class="float-right">Add To Cart <i class="fa fa-cart-plus"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="{{asset('admin-assets/images/carousel/22.jpg" alt="Card image cap')}}">
                                    <div class="card-body">
                                        <h4 class="card-title">Sunglass</h4>
                                        <p class="card-text">Some quick example text.</p>
                                    </div>
                                </div>
                                <div class="card-footer text-muted mt-2">
                    <span class="float-left">
                        <del class="grey">$99</del>
                        <span class="ml-1">$49</span>
                    </span>
                                    <span class="float-right"><i class="fa fa-heart-o"></i> Like</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-12">
                            <div class="card text-center">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="{{asset('admin-assets/images/carousel/26.jpg" alt="Card image cap')}}">
                                    <div class="card-body">
                                        <h4 class="card-title">Running Shoes</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12">
                            <div class="card text-white bg-gradient-y-pink text-center">
                                <div class="card-content">
                                    <img src="{{asset('admin-assets/images/carousel/29.png" alt="Relax" width="600" class="float-right pr-3 img-fluid')}}">
                                    <div class="card-body pt-3">
                                        <h4 class="card-title d-inline-block mt-3">Brand Minute</h4>
                                        <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                        <button class="btn bg-white bg-darken-3 pink">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Shopping cards section end -->
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
    <script src="{{asset('admin-assets/vendors/js/charts/echarts/echarts.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection

@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/cards/card-ecommerce.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
