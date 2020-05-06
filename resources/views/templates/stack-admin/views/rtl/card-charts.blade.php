@extends('stack-admin.layouts.admin')

@section('vendor-css')

    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/morris.css')}}">

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
                    <h3 class="content-header-title mb-0">Advance Chart Cards</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="card-charts.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Advance Charts
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
            <div class="content-body"><!-- Charts section start -->
                <section id="charts-section">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Charts</h4>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-12">
                            <div class="card text-white bg-info">
                                <div class="card-content">
                                    <div class="position-relative">
                                        <div class="chart-title position-absolute mt-2 ml-2 white">
                                            <h1 class="display-4">84%</h1>
                                            <span>Employees Satisfied</span>
                                        </div>
                                        <canvas id="emp-satisfaction" class="height-450 block"></canvas>
                                        <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                                            <a href="card-charts.html#" class="btn bg-info bg-darken-3 mr-1 white">Statistics <i class="icon-stats-bars"></i></a> for the last year.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12">
                                            <div class="chart-stats text-center my-3">
                                                <div class="new-users my-2 overflow-hidden clearfix">
                                                    <span>New Users</span>
                                                    <h1 class="display-4">25%</h1>
                                                </div>
                                                <div class="returning-users my-2 overflow-hidden">
                                                    <span>Returning Users</span>
                                                    <h1 class="display-4">159</h1>
                                                </div>
                                                <div class="page-views my-2 overflow-hidden">
                                                    <span>Page Views</span>
                                                    <h1 class="display-4">246</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-12">
                                            <div class="card-body">
                                                <ul class="list-inline text-center">
                                                    <li class="mr-1">
                                                        <h6><i class="fa fa-circle danger"></i> <span>iOS</span></h6>
                                                    </li>
                                                    <li class="mr-1">
                                                        <h6><i class="fa fa-circle warning"></i> <span>Windows</span></h6>
                                                    </li>
                                                    <li class="mr-1">
                                                        <h6><i class="fa fa-circle success"></i> <span>Android</span></h6>
                                                    </li>
                                                </ul>
                                                <div class="chartjs">
                                                    <canvas id="line-stacked-area" height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="earning-chart position-relative">
                                        <div class="chart-title position-absolute mt-2 ml-2">
                                            <h1 class="display-4">$9865</h1>
                                            <span class="text-muted">Total Earning</span>
                                        </div>
                                        <canvas id="earning-chart" class="height-450 block"></canvas>
                                        <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                                            <a href="card-charts.html#" class="btn bg-danger mr-1 white">Statistics <i class="icon-stats-bars"></i></a> <span class="text-muted">for the <a
                                                        href="card-charts.html#" class="danger darken-2">last year.</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body sales-growth-chart">
                                        <div class="chart-title mb-2">
                                            <h1 class="display-4">52%</h1>
                                            <span class="text-muted">Sales Growth Rate</span>
                                        </div>
                                        <div id="sales-growth-chart" class="height-300"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-content bg-success">
                                    <div class="card-body sales-growth-chart">
                                        <div id="mobile-sales" class="height-250"></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="chart-title mb-1">
                                        <span class="text-muted">Total mobile units sold and total earning statistics.</span>
                                    </div>
                                    <ul class="list-inline text-center clearfix mt-2">
                                        <li class="mr-3"><span class="text-muted">Total Units Sold</span>
                                            <h2 class="block">18.6 k</h2></li>
                                        <li><span class="text-muted">Total Earnings</span>
                                            <h2 class="block">64.54 M</h2></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body sales-growth-chart">
                                        <div id="monthly-sales" class="height-300"></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="chart-title mb-1 text-center">
                                        <span class="text-muted">Total monthly Sales.</span>
                                    </div>
                                    <div class="chart-stats text-center">
                                        <a href="card-charts.html#" class="btn btn-sm btn-primary mr-1">Statistics <i class="icon-stats-bars"></i></a> <span class="text-muted">for the last year.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <canvas id="posts-visits" class="height-400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row match-height">
                        <div class="col-xl-7 col-lg-12">
                            <div class="card">
                                <div class="card-content bg-gradient-y-info">
                                    <div id="cost-revenue" class="height-250 position-relative"></div>
                                </div>
                                <div class="card-footer">
                                    <div class="row mt-1">
                                        <div class="col-3 text-center">
                                            <span class="text-muted">Total Products</span>
                                            <h2 class="block font-weight-normal">18.6 k</h2>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center">
                                            <span class="text-muted">Total Sales</span>
                                            <h2 class="block font-weight-normal">64.54 M</h2>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center">
                                            <span class="text-muted">Total Cost</span>
                                            <h2 class="block font-weight-normal">24.38 B</h2>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-center">
                                            <span class="text-muted">Total Revenue</span>
                                            <h2 class="block font-weight-normal">36.72 M</h2>
                                            <div class="progress mt-1 mb-0" style="height: 7px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <canvas id="advertisement-expense" height="360"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- // Charts section end -->
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
    <script src="{{asset('admin-assets/vendors/js/charts/chartist.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/chart.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection

@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/cards/card-charts.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection

