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
                    <h3 class="content-header-title mb-0">Dropdowns</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-dropdowns.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Dropdowns
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
            <div class="content-body"><!-- Basic Dropdowns start -->
                <section id="basic-dropdowns">
                    <div class="row match-height">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dropdown with divider</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Disabled Menu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item disabled" href="component-dropdowns.html#">Another action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With active state</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
                                            <a class="dropdown-item active" href="component-dropdowns.html#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Dropdowns end -->


                <!-- Dropdown with Headers start -->
                <section id="dropdown-with-headers">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Dropdown with Headers</h4>
                            <p>Add a header to label sections of actions in any dropdown menu.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Header</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                            <button class="dropdown-item" type="button">Another Link</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Header with divider</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Highlighted Menu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header highlight">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
                                            <h6 class="dropdown-header highlight">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Header Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header"><i class="fa fa-lightbulb-o mr-1 font-medium-1"></i> <i class="fa fa-list float-right font-medium-1"></i>
                                                1st Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
                                            <h6 class="dropdown-header highlight"><i class="fa fa-link mr-1 font-medium-1"></i> <i class="fa fa-eye float-right font-medium-1"></i>
                                                2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown with Headers end -->


                <!-- Dropdown with Submenu start -->
                <section id="dropdown-with-submenu">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Dropdown with Submenu</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Submenu Items</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                            <div class="dropdown-divider"></div>
                                            <div class="dropdown-submenu">
                                                <button class="dropdown-item" type="button">More Options</button>
                                                <div class="dropdown-menu" role="menu">
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dropup Submenu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu dropup" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                            <div class="dropdown-divider"></div>
                                            <div class="dropdown-submenu">
                                                <button class="dropdown-item" type="button">More Options</button>
                                                <div class="dropdown-menu" role="menu">
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Submenu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                            <div class="dropdown-divider"></div>
                                            <div class="dropdown-submenu">
                                                <button class="dropdown-item" type="button">More Options</button>
                                                <div class="dropdown-menu open-left" role="menu">
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown with Submenu end -->


                <!-- Dropdown Buttons with Arrow start -->
                <section id="dropdown-buttons-with-arrow">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dropdown Buttons with Arrow</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <p>Use <code>.arrow</code> class to <code>.dropdown-menu</code> to add arrow. <code>.arrow-right</code> &amp; <code>.arrow-left</code>
                                            classes to <code>.dropdown-menu</code> in submenu will give you arrow on right &amp; left accrodingly.</p>
                                        <div class="row">
                                            <div class="col-sm-3 col-6">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu arrow">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu arrow-left" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-danger btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu open-left arrow">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu open-left arrow-right" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <div class="btn-group dropup mr-1 mb-1">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu arrow">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu arrow-left" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <div class="btn-group dropup mr-1 mb-1">
                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu open-left arrow">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu open-left arrow-right" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
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
                <!-- Dropdown Buttons with Arrow end -->


                <!-- Dropdown Active states start -->
                <section id="dropdown-active-states">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dropdown Active states</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Dropdown Buttons with <code>.active</code> class and theme color buttons.</p>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-200">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-200">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-200">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-200">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-200">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-200">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu open-left" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
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
                <!-- Dropdown Active states end -->


                <!-- Dropdown Sizes start -->
                <section id="dropdown-sizes">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Dropdowns Sizes</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Extra Large Size</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.dropdown-menu-xl</code> class to set extra large size dropdown.</p>
                                        <div class="dropdown-menu dropdown-menu-xl" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Large Size</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.dropdown-menu-lg</code> class to set large size dropdown.</p>
                                        <div class="dropdown-menu dropdown-menu-lg" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Small Size</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.dropdown-menu-sm</code> class to set small size dropdown.</p>
                                        <div class="dropdown-menu dropdown-menu-sm" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Action</a>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Another action</a>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="component-dropdowns.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown Sizes end -->
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

