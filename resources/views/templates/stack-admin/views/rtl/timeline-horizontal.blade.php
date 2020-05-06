@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/timeline.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/timeline.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Horizontal Timeline</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="timeline-horizontal.html#">Timelines</a>
                                </li>
                                <li class="breadcrumb-item active">Timeline Horizontal
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
            <div class="content-body"><!-- Basic Horizontal Timeline -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Horizontal Timeline</h4>
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
                            <div class="card-text">
                                <p>This horizontal time line contain just date based post timeline.</p>
                                <section class="cd-horizontal-timeline">
                                    <div class="timeline">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li><a href="timeline-horizontal.html#0" data-date="16/01/2015" class="selected">16 Jan</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="28/02/2015">28 Feb</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="20/04/2015">20 Mar</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="20/05/2015">20 May</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="09/07/2015">09 Jul</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="30/08/2015">30 Aug</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="15/09/2015">15 Sep</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="01/11/2015">01 Nov</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="10/12/2015">10 Dec</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="19/01/2016">29 Jan</a></li>
                                                    <li><a href="timeline-horizontal.html#0" data-date="03/03/2016">3 Mar</a></li>
                                                </ol>

                                                <span class="filling-line" aria-hidden="true"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->

                                        <ul class="cd-timeline-navigation">
                                            <li><a href="timeline-horizontal.html#0" class="prev inactive">Prev</a></li>
                                            <li><a href="timeline-horizontal.html#0" class="next">Next</a></li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->

                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2015">
                                                <h2>Horizontal Timeline</h2>
                                                <h3 class="text-muted mb-1"><em>January 16th, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="28/02/2015">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>February 28th, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="20/04/2015">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>March 20th, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="20/05/2015">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>May 20th, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="09/07/2015">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>July 9th, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="30/08/2015">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>August 30th, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="15/09/2015">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>September 15th, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="01/11/2015">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>November 1st, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="10/12/2015">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>December 10th, 2015</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="19/01/2016">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>January 19th, 2016</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>

                                            <li data-date="03/03/2016">
                                                <h2>Event title here</h2>
                                                <h3 class="text-muted mb-1"><em>March 3rd, 2016</em></h3>
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla
                                                    adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                                    reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                </p>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- .events-content -->
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Basic Horizontal Timeline -->
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
    <script src="{{asset('admin-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')

@endsection
