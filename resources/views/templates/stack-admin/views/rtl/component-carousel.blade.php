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
                    <h3 class="content-header-title mb-0">Carousel</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-carousel.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Carousel
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
            <div class="content-body"><!-- Basic Carousel start -->
                <section id="basic-carousel">
                    <div class="row">
                        <div class="col-12 mt-1 mb-1">
                            <p><strong> Nested carousels are not supported.</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Example</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('admin-assets/images/carousel/02.jpg')}}"
                                                         alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/03.jpg')}}"
                                                         alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/01.jpg')}}"
                                                         alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="component-carousel.html#carousel-example-generic" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="component-carousel.html#carousel-example-generic" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Optional captions</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-caption" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-caption" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('admin-assets/images/carousel/06.jpg')}}"
                                                         alt="First slide">
                                                    <div class="carousel-caption">
                                                        <h3>First Slide Label</h3>
                                                        <p>Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet chocolate. Tart
                                                            chocolate marshmallow.Tart carrot cake muffin.</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/08.jpg')}}"
                                                         alt="Second slide">
                                                    <div class="carousel-caption">
                                                        <h3>Second Slide Label</h3>
                                                        <p>Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies.
                                                            Cupcake cake I love cake danish carrot cake.</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/05.jpg')}}"
                                                         alt="Third slide">
                                                    <div class="carousel-caption">
                                                        <h3>Third Slide Label</h3>
                                                        <p>Pudding sweet pie gummies. Chocolate bar sweet tiramisu cheesecake chocolate cotton candy pastry muffin. Marshmallow cake
                                                            powder icing.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="component-carousel.html#carousel-example-caption" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="component-carousel.html#carousel-example-caption" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Carousel end -->


                <!-- Carousel Options start -->
                <section id="carousel-options">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Carousel Options</h4>
                            <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-interval=""</code>.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Interval Option</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.</p>
                                        <div id="carousel-interval" class="carousel slide" data-ride="carousel" data-interval="5000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-interval" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-interval" data-slide-to="1"></li>
                                                <li data-target="#carousel-interval" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('admin-assets/images/carousel/10.jpg')}}"
                                                         alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/15.jpg')}}"
                                                         alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/14.jpg')}}"
                                                         alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="component-carousel.html#carousel-interval" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="component-carousel.html#carousel-interval" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pause Option</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>If set to <code>"hover"</code>, pauses the cycling of the carousel on <code>mouseenter</code> and resumes the cycling of the carousel on
                                            <code>mouseleave</code>. If set to <code>null</code>, hovering over the carousel won't pause it.</p>
                                        <div id="carousel-pause" class="carousel slide" data-ride="carousel" data-pause="">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-pause" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-pause" data-slide-to="1"></li>
                                                <li data-target="#carousel-pause" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('admin-assets/images/carousel/03.jpg')}}"
                                                         alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/09.jpg')}}"
                                                         alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/07.jpg')}}"
                                                         alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="component-carousel.html#carousel-pause" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="component-carousel.html#carousel-pause" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Wrap Option</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Whether the carousel should cycle continuously or have hard stops. Default: true</p>
                                        <div id="carousel-wrap" class="carousel slide" data-ride="carousel" data-wrap="false">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-wrap" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-wrap" data-slide-to="1"></li>
                                                <li data-target="#carousel-wrap" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('admin-assets/images/carousel/02.jpg')}}"
                                                         alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/04.jpg')}}"
                                                         alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/08.jpg')}}"
                                                         alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="component-carousel.html#carousel-wrap" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="component-carousel.html#carousel-wrap" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Keyboard Option</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Whether the carousel should react to keyboard events. Default: true</p>
                                        <div id="carousel-keyboard" class="carousel slide" data-ride="carousel" data-keyboard="false">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-keyboard" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-keyboard" data-slide-to="1"></li>
                                                <li data-target="#carousel-keyboard" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('admin-assets/images/carousel/11.jpg')}}"
                                                         alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/06.jpg')}}"
                                                         alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/carousel/01.jpg')}}"
                                                         alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="component-carousel.html#carousel-keyboard" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="component-carousel.html#carousel-keyboard" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Carousel Options end -->
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
