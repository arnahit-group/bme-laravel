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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/meteocons/style.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/meteocons/style.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Meteocons</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="icons-meteocons.html#">Icons</a>
                                </li>
                                <li class="breadcrumb-item active">Meteocons
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
            <div class="content-body"><!-- Meteocons section start -->
                <section id="meteocons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Meteocons</h4>
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
                                        <div class="feather-icons overflow-hidden row">
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-sunrise"></i></div>
                                                <label class="fonticon-classname">me-sunrise</label>
                                                <label class="fonticon-unit">e900</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-sun"></i></div>
                                                <label class="fonticon-classname">me-sun</label>
                                                <label class="fonticon-unit">e901</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-moon"></i></div>
                                                <label class="fonticon-classname">me-moon</label>
                                                <label class="fonticon-unit">e902</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-sun2"></i></div>
                                                <label class="fonticon-classname">me-sun2</label>
                                                <label class="fonticon-unit">e903</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-windy"></i></div>
                                                <label class="fonticon-classname">me-windy</label>
                                                <label class="fonticon-unit">e904</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-wind"></i></div>
                                                <label class="fonticon-classname">me-wind</label>
                                                <label class="fonticon-unit">e905</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-snowflake"></i></div>
                                                <label class="fonticon-classname">me-snowflake</label>
                                                <label class="fonticon-unit">e906</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloudy"></i></div>
                                                <label class="fonticon-classname">me-cloudy</label>
                                                <label class="fonticon-unit">e907</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloud"></i></div>
                                                <label class="fonticon-classname">me-cloud</label>
                                                <label class="fonticon-unit">e908</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-weather"></i></div>
                                                <label class="fonticon-classname">me-weather</label>
                                                <label class="fonticon-unit">e909</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-weather2"></i></div>
                                                <label class="fonticon-classname">me-weather2</label>
                                                <label class="fonticon-unit">e90a</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-weather3"></i></div>
                                                <label class="fonticon-classname">me-weather3</label>
                                                <label class="fonticon-unit">e90b</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-lines"></i></div>
                                                <label class="fonticon-classname">me-lines</label>
                                                <label class="fonticon-unit">e90c</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloud2"></i></div>
                                                <label class="fonticon-classname">me-cloud2</label>
                                                <label class="fonticon-unit">e90d</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-lightning"></i></div>
                                                <label class="fonticon-classname">me-lightning</label>
                                                <label class="fonticon-unit">e90e</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-lightning2"></i></div>
                                                <label class="fonticon-classname">me-lightning2</label>
                                                <label class="fonticon-unit">e90f</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-rainy"></i></div>
                                                <label class="fonticon-classname">me-rainy</label>
                                                <label class="fonticon-unit">e910</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-rainy2"></i></div>
                                                <label class="fonticon-classname">me-rainy2</label>
                                                <label class="fonticon-unit">e911</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-windy2"></i></div>
                                                <label class="fonticon-classname">me-windy2</label>
                                                <label class="fonticon-unit">e912</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-windy3"></i></div>
                                                <label class="fonticon-classname">me-windy3</label>
                                                <label class="fonticon-unit">e913</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-snowy"></i></div>
                                                <label class="fonticon-classname">me-snowy</label>
                                                <label class="fonticon-unit">e914</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-snowy2"></i></div>
                                                <label class="fonticon-classname">me-snowy2</label>
                                                <label class="fonticon-unit">e915</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-snowy3"></i></div>
                                                <label class="fonticon-classname">me-snowy3</label>
                                                <label class="fonticon-unit">e916</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-weather4"></i></div>
                                                <label class="fonticon-classname">me-weather4</label>
                                                <label class="fonticon-unit">e917</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloudy2"></i></div>
                                                <label class="fonticon-classname">me-cloudy2</label>
                                                <label class="fonticon-unit">e918</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloud3"></i></div>
                                                <label class="fonticon-classname">me-cloud3</label>
                                                <label class="fonticon-unit">e919</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-lightning3"></i></div>
                                                <label class="fonticon-classname">me-lightning3</label>
                                                <label class="fonticon-unit">e91a</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-sun3"></i></div>
                                                <label class="fonticon-classname">me-sun3</label>
                                                <label class="fonticon-unit">e91b</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-moon2"></i></div>
                                                <label class="fonticon-classname">me-moon2</label>
                                                <label class="fonticon-unit">e91c</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloudy3"></i></div>
                                                <label class="fonticon-classname">me-cloudy3</label>
                                                <label class="fonticon-unit">e91d</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloud4"></i></div>
                                                <label class="fonticon-classname">me-cloud4</label>
                                                <label class="fonticon-unit">e91e</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloud5"></i></div>
                                                <label class="fonticon-classname">me-cloud5</label>
                                                <label class="fonticon-unit">e91f</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-lightning4"></i></div>
                                                <label class="fonticon-classname">me-lightning4</label>
                                                <label class="fonticon-unit">e920</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-rainy3"></i></div>
                                                <label class="fonticon-classname">me-rainy3</label>
                                                <label class="fonticon-unit">e921</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-rainy4"></i></div>
                                                <label class="fonticon-classname">me-rainy4</label>
                                                <label class="fonticon-unit">e922</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-windy4"></i></div>
                                                <label class="fonticon-classname">me-windy4</label>
                                                <label class="fonticon-unit">e923</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-windy5"></i></div>
                                                <label class="fonticon-classname">me-windy5</label>
                                                <label class="fonticon-unit">e924</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-snowy4"></i></div>
                                                <label class="fonticon-classname">me-snowy4</label>
                                                <label class="fonticon-unit">e925</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-snowy5"></i></div>
                                                <label class="fonticon-classname">me-snowy5</label>
                                                <label class="fonticon-unit">e926</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-weather5"></i></div>
                                                <label class="fonticon-classname">me-weather5</label>
                                                <label class="fonticon-unit">e927</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-cloudy4"></i></div>
                                                <label class="fonticon-classname">me-cloudy4</label>
                                                <label class="fonticon-unit">e928</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-lightning5"></i></div>
                                                <label class="fonticon-classname">me-lightning5</label>
                                                <label class="fonticon-unit">e929</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-thermometer"></i></div>
                                                <label class="fonticon-classname">me-thermometer</label>
                                                <label class="fonticon-unit">e92a</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-compass"></i></div>
                                                <label class="fonticon-classname">me-compass</label>
                                                <label class="fonticon-unit">e92b</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-none"></i></div>
                                                <label class="fonticon-classname">me-none</label>
                                                <label class="fonticon-unit">e92c</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-Celsius"></i></div>
                                                <label class="fonticon-classname">me-Celsius</label>
                                                <label class="fonticon-unit">e92d</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                                                <div class="fonticon-wrap"><i class="me-Fahrenheit"></i></div>
                                                <label class="fonticon-classname">me-Fahrenheit</label>
                                                <label class="fonticon-unit">e92e</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Meteocons section end -->
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
