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
                    <h3 class="content-header-title mb-0">Navs</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-navs-component.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Navs
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
            <div class="content-body"><!-- Basic Navs start -->
                <section id="basic-nav-components">
                    <div class="row">
                        <div class="col-md-12 mt-1">
                            <p class="mt-1">If you are using navs to provide a navigation bar, be sure to add a role="navigation" to the
                                most logical
                                parent container of the <code>&lt;ul&gt;,</code> or wrap a <code>&lt;nav&gt;</code> element around the
                                whole navigation.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Base nav</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">Roll your own navigation style by extending the base <code>.nav</code>
                                            component. All
                                            Bootstrap’s nav components are built on top of this by specifying additional styles.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nav with Border</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-item">
                                                <a class="nav-link active">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">To wrap with border, use <code>.wrap-border</code> class.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nav with Square Border</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border square-border">
                                            <li class="nav-item">
                                                <a class="nav-link active">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">To wrap with square border, use <code>.square-border</code> class with
                                            <code>.wrap-border</code> class.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nav with Divider</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-item">
                                                <a class="nav-link active">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">To add divider, use <code>.dropdown-divider</code> class to
                                            <code>&lt;li&gt;</code></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Navs end -->


                <!-- Nav with Header Options start -->
                <section id="nav-with-header-options">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Navs with header Options</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nav with Header</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-header mt-1">Heading Option 1</li>
                                            <li class="nav-item">
                                                <a class="nav-link active">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-header">Heading Option 2</li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">To add header to nav, use <code>.nav-header</code> class.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-header mt-1"><i class="fa fa-bars mr-1"></i> Heading Option 1</li>
                                            <li class="nav-item">
                                                <a class="nav-link active">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-header"><i class="fa fa-bars mr-1"></i> Heading Option 2</li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">You can also add icon to the text in header section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading with Right Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-header mt-1">Heading Option 1 <i class="fa fa-bell-o float-right mr-1"></i></li>
                                            <li class="nav-item">
                                                <a class="nav-link active">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-header">Heading Option 2 <i class="fa fa-eye mr-1 float-right"></i></li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">You can add icon to right side of the text by using <code>.float-right</code>
                                            class.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading Icon both the side</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-header mt-1"><i class="fa fa-bars mr-1"></i> Heading Option 1 <i
                                                        class="fa fa-bell-o float-right mr-1"></i></li>
                                            <li class="nav-item">
                                                <a class="nav-link active">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-header"><i class="fa fa-bars mr-1"></i> Heading Option 2 <i
                                                        class="fa fa-eye mr-1 float-right"></i></li>
                                            <li class="nav-item">
                                                <a class="nav-link">Link</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">You can also add icon to both sides of the text in header section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Nav with Header Options end -->


                <!-- Links with Icons start -->
                <section id="links-with-icons">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Links with Icons</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon on left</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-header mt-1">Heading Option 1</li>
                                            <li class="nav-item">
                                                <a class="nav-link active"><i class="fa fa-angle-double-right"></i> Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-angle-double-right"></i> Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-angle-double-right"></i> Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-header">Heading Option 2</li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-angle-double-right"></i> Link</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">Use icon name class to set icons.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon on Right</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-header mt-1">Heading Option 1</li>
                                            <li class="nav-item">
                                                <a class="nav-link active"><i class="fa fa-eye float-right"></i>Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-eye float-right"></i>Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-eye float-right"></i>Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-header">Heading Option 2</li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-eye float-right"></i>Link</a>
                                            </li>
                                        </ul>
                                        <p class="mt-1">To set icons to right use <code>.float-right</code> class.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon on both side of links</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-header mt-1">Heading Option 1</li>
                                            <li class="nav-item">
                                                <a class="nav-link active"><i class="fa fa-angle-double-right"></i><i
                                                            class="fa fa-eye float-right"></i> Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-angle-double-right"></i><i
                                                            class="fa fa-eye float-right"></i> Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-angle-double-right"></i><i
                                                            class="fa fa-eye float-right"></i> Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-header">Heading Option 2</li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-angle-double-right"></i><i
                                                            class="fa fa-eye float-right"></i> Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Header and list Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav flex-column wrap-border">
                                            <li class="nav-header mt-1"><i class="fa fa-disc2"></i> Heading Option 1</li>
                                            <li class="nav-item">
                                                <a class="nav-link active"><i class="fa fa-caret-right"></i><i
                                                            class="fa fa-heart6 float-right"></i> Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-caret-right"></i><i
                                                            class="fa fa-heart6 float-right"></i> Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-caret-right"></i><i
                                                            class="fa fa-heart6 float-right"></i> Link</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="nav-header"><i class="fa fa-disc2"></i> Heading Option 2</li>
                                            <li class="nav-item">
                                                <a class="nav-link"><i class="fa fa-caret-right"></i><i
                                                            class="fa fa-heart6 float-right"></i> Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Links with Icons end -->
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
