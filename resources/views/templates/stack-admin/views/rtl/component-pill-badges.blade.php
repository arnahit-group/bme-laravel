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
                    <h3 class="content-header-title mb-0">Pill Badges</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-pill-badges.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Pill Badges
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
            <div class="content-body"><!-- Secondary Pill Badges start-->
                <section id="default-pill-badges">
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Secondary Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-pill</code> with <code>.badge-secondary</code>class within element to create
                                            default pill badge.</p>
                                        <div class="badge badge-pill badge-secondary">59</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Primary Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-pill</code> with <code>.badge-primary</code>class within element to create
                                            primary pill badge.</p>
                                        <div class="badge badge-pill badge-primary">43</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Success Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-pill</code> with <code>.badge-success</code>class within element to create
                                            success pill badge.</p>
                                        <div class="badge badge-pill badge-success">25</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Danger Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-danger</code>class within element to create
                                            danger pill badge.</p>
                                        <div class="badge badge-pill badge-danger">78</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Info Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-info</code>class within element to create info
                                            pill badge.</p>
                                        <div class="badge badge-pill badge-info">57</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Warning Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-warning</code>class within element to create
                                            warning pill badge.</p>
                                        <div class="badge badge-pill badge-warning">68</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Custom Blue Grey Color Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.bg-blue-grey</code>class within element to create blue grey label.</p>
                                        <div class="badge badge-pill bg-blue-grey">63</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Secondary Pill Badges end -->

                <!-- Pill Badges With Glow effect start-->
                <section id="glow-effect-pill-badges">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Pill Badges With Glow effect</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Secondary Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-glow</code>class within element to create glow
                                            styled pill badge.</p>
                                        <div class="badge badge-glow badge-pill badge-secondary">59</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Primary Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-glow</code>class within element to create glow
                                            styled pill badge.</p>
                                        <div class="badge badge-glow badge-pill badge-primary">41</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Success Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-glow</code>class within element to create glow
                                            styled pill badge.</p>
                                        <div class="badge badge-glow badge-pill badge-success">25</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Danger Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-glow</code>class within element to create glow
                                            styled pill badge.</p>
                                        <div class="badge badge-glow badge-pill badge-danger">78</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Info Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-glow</code>class within element to create glow
                                            styled pill badge.</p>
                                        <div class="badge badge-glow badge-pill badge-info">57</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Warning Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-glow</code>class within element to create glow
                                            styled pill badge.</p>
                                        <div class="badge badge-glow badge-pill badge-warning">68</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Custom Blue Grey Color Pill Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with <code>.badge-glow</code>class within element to create glow
                                            styled pill badge.</p>
                                        <div class="badge badge-pill badge-glow bg-blue-grey">63</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pill Badges With Glow effect end -->

                <!-- Square Pill Badges start-->
                <section id="square-pill-badges">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Square Pill Badges</h4>
                            <p>For square pill badges, use <code>.badge-square</code> class with <code>.badge</code> class.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Secondary Square Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-secondary badge-square">
                                            15
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Primary Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-primary badge-square">
                                            21
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Success Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-success badge-square">
                                            36
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Square Pill Badges end -->

                <!-- Pill Badges with Icons start-->
                <section id="pill-badges-with-icons">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Pill Badges with Icons</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Secondary Icon Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-secondary">
                                            <i class="font-medium-4 icon-line-height fa fa-camera"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Primary Icon Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-glow badge-primary">
                                            <i class="font-medium-4 icon-line-height fa fa-headphones"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Success Icon Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-glow badge-success">
                                            <i class="font-medium-4 icon-line-height fa fa-upload"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Danger Icon Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-danger badge-square">
                                            <i class="font-medium-4 icon-line-height fa fa-flask"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Info Icon pill badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-glow badge-info badge-square">
                                            <i class="font-medium-4 icon-line-height fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Warning Icon Label</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="badge badge-pill badge-glow badge-warning badge-square">
                                            <i class="font-medium-4 icon-line-height fa fa-youtube"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pill Badges with Icons end -->

                <!-- Pill Badges with Dropdown start-->
                <section id="pill-badges-with-dropdown">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Pill Badges with Dropdown</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Secondary Pill with Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-pill dropdown-toggle badge-secondary" data-toggle="dropdown">
                                                <i class="fa fa-camera font-medium-4"></i>
                                            </div>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="component-pill-badges.html#">Action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Another action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Primary Pill with Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-pill dropdown-toggle badge-glow badge-primary" data-toggle="dropdown">
                                                88
                                            </div>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="component-pill-badges.html#">Action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Another action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Success Pill with Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-pill dropdown-toggle badge-glow badge-success" data-toggle="dropdown">
                                                <i class="fa fa-upload font-medium-4"></i>
                                            </div>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="component-pill-badges.html#">Action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Another action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Danger Pill with Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-pill dropdown-toggle badge-danger badge-square" data-toggle="dropdown">
                                                <i class="fa fa-flask font-medium-4"></i>
                                            </div>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="component-pill-badges.html#">Action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Another action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Info Pill with Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-pill dropdown-toggle badge-glow badge-info badge-square" data-toggle="dropdown">
                                                33
                                            </div>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="component-pill-badges.html#">Action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Another action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Warning Pill with Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <div class="badge badge-pill dropdown-toggle badge-glow badge-warning badge-square" data-toggle="dropdown">
                                                <i class="fa fa-youtube font-medium-4"></i>
                                            </div>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="component-pill-badges.html#">Action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Another action</a>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="component-pill-badges.html#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pill Badges with Dropdown end -->

                <!-- Pill Badges as Notification start-->
                <section id="pill-badges-as-notification">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Pill Badges as Notification</h4>
                            <p>Use <code>.badge-up</code> to set pill badge to higher than other text. So that it can work with notifications also.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Secondary Icon Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <i class="font-large-1 icon-line-height fa fa-camera"></i>
                                        <span class="badge badge-pill badge-secondary badge-up">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Primary Icon Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <i class="font-large-1 icon-line-height fa fa-calendar"></i>
                                        <span class="badge badge-pill badge-glow badge-primary badge-up">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Success Icon Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <i class="font-large-1 icon-line-height fa fa-shopping-cart"></i>
                                        <span class="badge badge-pill badge-glow badge-success badge-up">6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Danger Icon Pill</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <i class="font-large-1 icon-line-height fa fa-cloud"></i>
                                        <span class="badge badge-pill badge-danger badge-square badge-up">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Info Icon pill badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <i class="font-large-1 icon-line-height fa fa-star-o"></i>
                                        <span class="badge badge-pill badge-glow badge-info badge-square badge-up">5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Square Warning Icon Label</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <i class="font-large-1 icon-line-height fa fa-cog"></i>
                                        <span class="badge badge-pill badge-glow badge-warning badge-square badge-up">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pill Badges as Notification end -->
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
