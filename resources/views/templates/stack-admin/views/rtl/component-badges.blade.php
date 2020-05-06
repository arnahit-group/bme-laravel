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
                    <h3 class="content-header-title mb-0">Badge</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-badges.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Badge
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
            <div class="content-body"><!-- Basic Badges start -->
                <section id="basic-badges">
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Secondary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-secondary</code>class within element to create secondary badge.</p>
                                        <div class="badge badge-secondary">Secondary Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Primary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-primary</code>class within element to create primary badge.</p>
                                        <div class="badge badge-primary">Primary Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Success Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-success</code>class within element to create success badge.</p>
                                        <div class="badge badge-success">Success Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Danger Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-danger</code>class within element to create danger badge.</p>
                                        <div class="badge badge-danger">Danger Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Info Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-info</code>class within element to create info badge.</p>
                                        <div class="badge badge-info">Info Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Warning Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-warning</code>class within element to create warning badge.</p>
                                        <div class="badge badge-warning">Warning Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Custom Blue Grey Color Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.bg-blue-grey</code>class within element to create blue grey badge.</p>
                                        <div class="badge bg-blue-grey">Custom Blue Grey Color Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Badges end -->

                <!-- Badges with Icons start -->
                <section id="badges-with-icons">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Badges with Icons</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Secondary Badge with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-secondary</code>class within element to create secondary badge.</p>
                                        <div class="badge badge-secondary">
                                            <i class="fa fa-eye font-medium-2"></i>
                                            <span>Secondary Badge</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Square Primary Badge with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-square</code> class for square bordered badge.</p>
                                        <div class="badge badge-primary badge-square">
                                            <i class="fa fa-envelope font-medium-2"></i>
                                            <span>Primary Badge</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Round Success Badge with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.round</code> class for round bordered badge.</p>
                                        <div class="badge badge-success round">
                                            <i class="fa fa-file-o font-medium-2"></i>
                                            <span>Success Badge</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Danger Badge with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-danger</code>class within element to create danger badge.</p>
                                        <div class="badge badge-danger">
                                            <span>Danger Badge</span>
                                            <i class="fa fa-bell-o font-medium-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Square Info Badge with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-square</code>class for square badge.</p>
                                        <div class="badge badge-info badge-square">
                                            <span>Info Badge</span>
                                            <i class="fa fa-tv font-medium-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Round Warning Badge with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.round</code> class for round bordered.</p>
                                        <div class="badge badge-warning round">
                                            <span>Warning Badge</span>
                                            <i class="fa fa-lock font-medium-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Badges with Icons end -->

                <!-- Badges with Only Icons start -->
                <section id="badges-with-only-icons">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Badges with Only Icons</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Secondary Icon Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-secondary</code>class within element to create secondary badge.</p>
                                        <div class="badge badge-secondary">
                                            <i class="font-medium-2 icon-line-height fa fa-camera"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Square Icon Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-square</code>class to square bordered badge.</p>
                                        <div class="badge badge-primary badge-square">
                                            <i class="font-medium-2 icon-line-height fa fa-headphones"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Round Icon Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.round</code> class for round warning badge.</p>
                                        <div class="badge badge-success round">
                                            <i class="font-medium-2 icon-line-height fa fa-cloud-upload"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Danger Icon Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-danger</code>class within element to create danger badge.</p>
                                        <div class="badge badge-danger">
                                            <i class="font-medium-2 icon-line-height fa fa-eyedropper"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Square Icon Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-square</code> class to square bordered badge.</p>
                                        <div class="badge badge-info badge-square">
                                            <i class="font-medium-2 icon-line-height fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Round Icon Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.round</code> class for round warning badge.</p>
                                        <div class="badge badge-warning round">
                                            <i class="font-medium-2 icon-line-height fa fa-youtube"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Badges with Only Icons end -->

                <!-- Badges With Links start -->
                <section id="badges-with-links">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Badges With Links</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Secondary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-secondary">
                                            <a href="component-badges.html#">Link Badge</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Primary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-primary">
                                            <a href="component-badges.html#">
                                                <i class="fa fa-gift font-medium-2"></i>
                                                <span>Link Badge</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Success Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-success">
                                            <a href="component-badges.html#"><i class="fa fa-star-o font-medium-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Badges With Links end -->

                <!-- Badges With Dropdowns start -->
                <section id="badges-with-dropdowns">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Badges With Dropdown</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Secondary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-secondary">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#">Dropdown Badge</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="component-badges.html#">Action</a>
                                                    <a class="dropdown-item" href="component-badges.html#">Another action</a>
                                                    <a class="dropdown-item" href="component-badges.html#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="component-badges.html#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Primary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-primary">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#">
                                                    <i class="fa fa-gift font-medium-2"></i>
                                                    <span>Dropdown Badge</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="component-badges.html#">Action</a>
                                                    <a class="dropdown-item" href="component-badges.html#">Another action</a>
                                                    <a class="dropdown-item" href="component-badges.html#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="component-badges.html#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Success Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-success">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="component-badges.html#"><i class="fa fa-star-o font-medium-2"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="component-badges.html#">Action</a>
                                                    <a class="dropdown-item" href="component-badges.html#">Another action</a>
                                                    <a class="dropdown-item" href="component-badges.html#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="component-badges.html#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Badges With Dropdowns end -->

                <!-- Block Badges start -->
                <section id="block-badges">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Block Badges</h4>
                            <p>Use <code>.block</code> class with <code>.badge</code>, to set block badge.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Secondary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge block badge-secondary">
                                            <a href="component-badges.html#">Link Badge</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Primary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge block badge-primary">
                                            <a href="component-badges.html#">
                                                <i class="fa fa-gift font-medium-2"></i>
                                                <span>Link Badge</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Success Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge block badge-success">
                                            <a href="component-badges.html#"><i class="fa fa-star-o font-medium-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Block Badges end -->
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

