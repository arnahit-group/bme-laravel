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
                    <h3 class="content-header-title mb-0">Pagination</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-pagination.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Pagination
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
            <div class="content-body"><!-- Basic Pagination start -->
                <section id="basic-pagination">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Pagination</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                    <div class="card-body">
                                        <p>Simple pagination for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <h5 class="text-center">Basic Pagination</h5>
                                                <nav aria-label="Page navigation mb-3">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                    </ul>
                                                </nav>
                                                <p class="text-center">Default pagination without next previous.</p>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <h5 class="text-center">Pagination with Next/Prev Arrows</h5>
                                                <nav aria-label="Page navigation mb-3">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#" aria-label="Previous">«</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="component-pagination.html#" aria-label="Next">»</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="text-center">Default pagination with next previous icons.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <h5 class="text-center">Pagination with Next/Prev Link</h5>
                                                <nav aria-label="Page navigation mb-3">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item">
                                                            <a class="page-link" href="component-pagination.html#" aria-label="Previous">
                                                                <span aria-hidden="true">Prev</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="component-pagination.html#" aria-label="Next">
                                                                <span aria-hidden="true">Next</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="text-center">Default pagination with next previous links.</p>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <h5 class="text-center">Pagination with Next/Prev Link &amp; Arrows</h5>
                                                <nav aria-label="Page navigation mb-3">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item">
                                                            <a class="page-link" href="component-pagination.html#" aria-label="Previous">
                                                                <span aria-hidden="true">« Prev</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="component-pagination.html#" aria-label="Next">
                                                                <span aria-hidden="true">Next »</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="text-center">Default pagination with next previous icons &amp; text.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Pagination end -->

                <!-- Pagination Positions start -->
                <section id="pagination-positions">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pagination Positions</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                    <div class="card-body">
                                        <p>Use wrapper classes for pagination. To align left, use class <code>.text-left</code>. To align center, use class
                                            <code>.text-center</code>. To align right, use class <code>.text-right</code>.</p>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-12">
                                                <h5 class="text-left">Left Align</h5>
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination justify-content-start">
                                                        <li class="page-item"></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                        <li class="page-item"></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-xl-4 col-lg-12">
                                                <h5 class="text-center">Center Align</h5>
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-xl-4 col-lg-12">
                                                <h5 class="text-right">Right Align</h5>
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item"></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                        <li class="page-item"></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pagination Positions end -->

                <!-- Pagination Sizes start -->
                <section id="pagination-sizes">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Pagination Sizes</h4>
                            <p>Use class <code>.pagination-lg</code> for large size pagination &amp; use <code>.pagination-sm</code> for small size pagination. For Default size no
                                classes required.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pagination Sizes With Border</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-12">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination pagination-lg mb-1">
                                                        <li class="page-item"></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                        <li class="page-item"></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-xl-4 col-lg-12">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination mb-1">
                                                        <li class="page-item"></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                        <li class="page-item"></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-xl-4 col-lg-12">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination pagination-sm">
                                                        <li class="page-item"></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="component-pagination.html#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="component-pagination.html#">5</a></li>
                                                        <li class="page-item"></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pagination Sizes end -->

                <!-- Dynamic Pagination start -->
                <section id="dynamic-pagination">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Dynamic Pagination</h4>
                            <p>We are using <strong>jQuery Pagination plugin</strong>. This jQuery plugin simplifies the usage of Bootstrap Pagintion. It uses appropriate classes:
                                <code>.pagination</code>, <code>.active</code> and <code>.disabled</code>.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Pagination</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="page1-content" class="border-grey border-lighten-2 p-1 mb-1">You are on page 1</div>
                                        <div class="text-center">
                                            <ul class="pagination page1-links"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Pagination with last &amp; first</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="firstLast1-content" class="border-grey border-lighten-2 p-1 mb-1">You are on page 1</div>
                                        <div class="text-center">
                                            <ul class="pagination firstLast1-links"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pagination drop you here after reload</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="alert alert-warning">
                                            <strong>Warning!</strong> Page will be reload.
                                        </div>
                                        <div id="url1-content" class="border-grey border-lighten-2 p-1 mb-1">You are on page 1</div>
                                        <div class="text-center">
                                            <ul class="pagination url1-links"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Set Start Page Of Pagination</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="start-content" class="border-grey border-lighten-2 p-1 mb-1">Your start Page 5</div>
                                        <div class="text-center">
                                            <ul class="pagination start-links"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dynamic Pagination end -->
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
    <script src="{{asset('admin-assets/vendors/js/pagination/jquery.bootpag.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/pagination/jquery.twbsPagination.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection

@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/pagination/pagination.js')}}"></script>
    <!-- END: Page JS-->

@endsection
