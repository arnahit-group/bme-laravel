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
                    <h3 class="content-header-title mb-0">Buttons</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-buttons-basic.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Buttons
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
            <div class="content-body"><!-- States start -->
                <section id="basic-states">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">States</h4>
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
                                        <p>Buttons will appear pressed when active. However, you can still force the same active appearance with <code>.active</code> (and include
                                            the aria-pressed="true" attribute) should you need to replicate the state programmatically.</p>
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-4 col-xl-2">
                                                <ul class="pl-0 list-unstyled">
                                                    <li class="mb-1">
                                                        <button type="button" class="btn btn-secondary btn-block">Secondary</button>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Normal</span>
                                                                <span class="block"><small>#404E67</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color: #404E67; border:1px solid #404E67;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Hover</span>
                                                                <span class="block"><small>#313c4f</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color: #313c4f;border-color: #2c3648;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Active</span>
                                                                <span class="block"><small>#2c3648</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color: #2c3648; border-color: #283040;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Disabled</span>
                                                                <span class="block"><small>#87909f</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="btn-secondary disabled btn color-box" style="background-color:#87909f; border-color: #87909f;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-xl-2">
                                                <ul class="pl-0 list-unstyled">
                                                    <li class="mb-1">
                                                        <button type="button" class="btn btn-primary btn-block">Primary</button>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Normal</span>
                                                                <span class="block"><small>#00B5B8</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#00B5B8;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Hover</span>
                                                                <span class="block"><small>#26C0C3</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#26C0C3;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Active</span>
                                                                <span class="block"><small>#009DA0</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#009DA0;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Disabled</span>
                                                                <span class="block"><small>#5ACFD1</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="bg-primary btn disabled color-box"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-xl-2">
                                                <ul class="pl-0 list-unstyled">
                                                    <li class="mb-1">
                                                        <button type="button" class="btn btn-success btn-block">Success</button>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Normal</span>
                                                                <span class="block"><small>#16D39A</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#16D39A;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Hover</span>
                                                                <span class="block"><small>#39DAA9</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="hover color-box" style="background-color:#39DAA9;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Active</span>
                                                                <span class="block"><small>#0CC27E</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="active color-box" style="background-color:#0CC27E;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Disabled</span>
                                                                <span class="block"><small>#68E2BD</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="bg-success disabled btn color-box"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-xl-2">
                                                <ul class="pl-0 list-unstyled">
                                                    <li class="mb-1">
                                                        <button type="button" class="btn btn-danger btn-block">Danger</button>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Normal</span>
                                                                <span class="block"><small>#FF7588</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="bg-danger color-box"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Hover</span>
                                                                <span class="block"><small>#FF8A9A</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#FF8A9A;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Active</span>
                                                                <span class="block"><small>#FF586B</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#FF586B;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Disabled</span>
                                                                <span class="block"><small>#FFA5B2</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="bg-danger disabled btn color-box"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-xl-2">
                                                <ul class="pl-0 list-unstyled">
                                                    <li class="mb-1">
                                                        <button type="button" class="btn btn-info btn-block">Info</button>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Normal</span>
                                                                <span class="block"><small>#2DCEE3</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="bg-info color-box"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Hover</span>
                                                                <span class="block"><small>#4DD5E7</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#4DD5E7;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Active</span>
                                                                <span class="block"><small>#1CBCD8</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#1CBCD8;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Disabled</span>
                                                                <span class="block"><small>#77DFED</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="bg-info disabled btn color-box"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-xl-2">
                                                <ul class="pl-0 list-unstyled">
                                                    <li class="mb-1">
                                                        <button type="button" class="btn btn-warning btn-block">Warning</button>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Normal</span>
                                                                <span class="block"><small>#FFA87D</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="bg-warning color-box"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Hover</span>
                                                                <span class="block"><small>#FFB591</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#FFB591;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Active</span>
                                                                <span class="block"><small>#FF8D60</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="color-box" style="background-color:#FF8D60;"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-1">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <span class="block">Disabled</span>
                                                                <span class="block"><small>#FFC6AB</small></span>
                                                            </div>
                                                            <div class="col-sm-6 col-12">
                                                                <div class="bg-warning disabled btn color-box"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- States end -->
                <!-- Basic Buttons start -->
                <section id="basic-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Buttons </h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Buttons </h5>
                                                <p>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                                <div class="form-group">
                                                    <!-- basic buttons -->
                                                    <button type="button" class="btn btn-secondary btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-success btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-info btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-warning btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-light btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-dark btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Buttons end -->
                <!-- Square Buttons start -->
                <section id="square-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square Buttons </h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use <code>.square</code> class for square buttons.</p>
                                                <div class="form-group">
                                                    <!-- basic buttons -->
                                                    <button type="button" class="btn btn-secondary square btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-primary square btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-success square btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-info square btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-warning square btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-danger square btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-light square btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-dark square btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Square Buttons end -->
                <!-- Round Buttons start -->
                <section id="round-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Round Buttons </h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use <code>.round</code> class for round buttons.</p>
                                                <div class="form-group">
                                                    <!-- basic buttons -->
                                                    <button type="button" class="btn btn-secondary round btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-primary round btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-success round btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-info round btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-warning round btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-danger round btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-light round btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Round Buttons end -->
                <!-- Single button dropdowns start -->
                <section id="single-button-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Single button dropdowns</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Button dropdowns</h5>
                                                <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                                                <div class="form-group">
                                                    <!-- Single Button Dropdown -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="true">Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-primary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Success
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-info btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Info
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-warning btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Warning
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Danger
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-light btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Light
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-dark btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Dark
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single button dropdowns end -->
                <!-- Split Buttons start -->
                <section id="split-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Buttons</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Split button dropdowns</h5>
                                                <p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
                                                <div class="form-group">
                                                    <!-- Split Button Dropdown -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success">Success</button>
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-info">Info</button>
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger">Danger</button>
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-light">Light</button>
                                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-dark">Dark</button>
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Buttons end -->
                <!-- Basic Button group start -->
                <section id="basic-button-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Button group</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Group a series of buttons together on a single line with the button group. Wrap a series of buttons with <code>.btn</code> in
                                                    <code>.btn-group</code>.</p>
                                                <div class="form-group">
                                                    <!-- button group -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-success">Success</button>
                                                        <button type="button" class="btn btn-info">Info</button>
                                                        <button type="button" class="btn btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-danger">Danger</button>
                                                        <button type="button" class="btn btn-light">Light</button>
                                                        <button type="button" class="btn btn-dark">Dark</button>
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
                <!-- Basic Button group end -->
                <!-- Basic Button Icon start -->
                <section id="basic-button-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Buttons with Icon </h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                                <div class="form-group">
                                                    <!-- Buttons with Icon -->
                                                    <button type="button" class="btn btn-secondary btn-min-width mr-1 mb-1"><i class="fa fa-star-o"></i> Secondary</button>
                                                    <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-user-o"></i> Primary</button>
                                                    <button type="button" class="btn btn-success btn-min-width mr-1 mb-1"><i class="fa fa-check"></i> Success</button>
                                                    <button type="button" class="btn btn-info btn-min-width mr-1 mb-1"><i class="fa fa-info"></i> Info</button>
                                                    <button type="button" class="btn btn-warning btn-min-width mr-1 mb-1">Warning <i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1">Danger <i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-light btn-min-width mr-1 mb-1">Light <i class="fa fa-plug"></i></button>
                                                    <button type="button" class="btn btn-dark btn-min-width mr-1 mb-1">Dark <i class="fa fa-heart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Button Icon end -->
                <!-- Button dropdowns with icons start -->
                <section id="button-dropdowns-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button dropdowns with icons</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Button dropdowns with icons -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-user-o"></i> Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-primary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-star-o"></i> Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-check"></i> Success
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-info btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-info"></i> Info
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-warning btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-camera"></i> Warning
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-eye"></i> Danger
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-light btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-plug"></i> Light
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-dark btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-heart"></i> Dark
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Button dropdowns with icons end -->
                <!-- Split button dropdowns with icon start -->
                <section id="split-button-dropdown-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split button dropdowns with icon</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split button dropdowns with icon -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-secondary"><i class="fa fa-user-o"></i> Secondary</button>
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-primary"><i class="fa fa-star-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Success</button>
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-warning"><i class="fa fa-camera"></i> Warning</button>
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-eye"></i> Danger</button>
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-light"><i class="fa fa-plug"></i> Light</button>
                                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-dark"><i class="fa fa-heart"></i> Dark</button>
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split button dropdowns with icon end -->
                <!-- Button group with icon start -->
                <section id="button-group-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button group with icon</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Button group with icons and text.</p>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <!-- Button group with icons -->
                                                        <button type="button" class="btn btn-secondary"><i class="fa fa-star-o"></i> Secondary</button>
                                                        <button type="button" class="btn btn-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Success</button>
                                                        <button type="button" class="btn btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-warning"><i class="fa fa-camera"></i> Warning</button>
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-eye"></i> Danger</button>
                                                        <button type="button" class="btn btn-light"><i class="fa fa-plug"></i> Light</button>
                                                        <button type="button" class="btn btn-dark"><i class="fa fa-heart"></i> Dark</button>
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
                <!-- Button group with icon end -->
                <!-- Icon Buttons start -->
                <section id="icons-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon Buttons</h4>
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
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Simple Icon Button</p>
                                                <div class="form-group">
                                                    <!-- Simple Icon Button -->
                                                    <button type="button" class="btn btn-icon btn-secondary mr-1 mb-1"><i class="fa fa-star-o"></i></button>
                                                    <button type="button" class="btn btn-icon btn-primary mr-1 mb-1"><i class="fa fa-user-o"></i></button>
                                                    <button type="button" class="btn btn-icon btn-success mr-1 mb-1"><i class="fa fa-check"></i></button>
                                                    <button type="button" class="btn btn-icon btn-info mr-1 mb-1"><i class="fa fa-info"></i></button>
                                                    <button type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-icon btn-danger mr-1 mb-1"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-light mr-1 mb-1"><i class="fa fa-plug"></i></button>
                                                    <button type="button" class="btn btn-icon btn-dark mr-1 mb-1"><i class="fa fa-heart"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Use <code>.btn-icon.btn-pure</code> classes for only icon buttons</p>
                                                <div class="form-group">
                                                    <!-- Icon Button -->
                                                    <button type="button" class="btn btn-icon btn-pure secondary mr-1"><i class="fa fa-desktop"></i></button>
                                                    <button type="button" class="btn btn-icon btn-pure primary mr-1"><i class="fa fa-star-o"></i></button>
                                                    <button type="button" class="btn btn-icon btn-pure success mr-1"><i class="fa fa-check-circle"></i></button>
                                                    <button type="button" class="btn btn-icon btn-pure info mr-1"><i class="fa fa-moon-o"></i></button>
                                                    <button type="button" class="btn btn-icon btn-pure warning mr-1"><i class="fa fa-heart-o"></i></button>
                                                    <button type="button" class="btn btn-icon btn-pure danger mr-1"><i class="fa fa-archive"></i></button>
                                                    <button type="button" class="btn btn-icon btn-pure light mr-1"><i class="fa fa-plug"></i></button>
                                                    <button type="button" class="btn btn-icon btn-pure dark mr-1"><i class="fa fa-heart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Icon Buttons end -->
                <!-- Icon Buttons dropdowns start -->
                <section id="icons-buttons-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon Button dropdowns</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Icon Button dropdowns -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-icon btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-user-o"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-star-o"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-check"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-info btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-info"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-icon btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-camera"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-eye"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-plug"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-dark btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-heart"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Icon Buttons dropdowns end -->
                <!-- Split Icon Buttons dropdowns start -->
                <section id="split-icons-buttons-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split icon button dropdowns</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split icon button dropdowns -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-secondary"><i class="fa fa-user-o"></i></button>
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-primary"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button>
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-info"><i class="fa fa-info"></i></button>
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-warning"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-light"><i class="fa fa-plug"></i></button>
                                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-dark"><i class="fa fa-heart"></i></button>
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Icon Buttons dropdowns end -->
                <!-- Icon Buttons group start -->
                <section id="icons-buttons-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon Button group</h4>
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
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Icon Button group without text.</p>
                                                <div class="form-group">
                                                    <!-- Icon Button group -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-icon btn-secondary"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-icon btn-primary"><i class="fa fa-user-o"></i></button>
                                                        <button type="button" class="btn btn-icon btn-success"><i class="fa fa-check"></i></button>
                                                        <button type="button" class="btn btn-icon btn-info"><i class="fa fa-info"></i></button>
                                                        <button type="button" class="btn btn-icon btn-warning"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-light"><i class="fa fa-plug"></i></button>
                                                        <button type="button" class="btn btn-icon btn-dark"><i class="fa fa-heart"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Combine sets of button groups into <strong>Button toolbar</strong> for more complex components.</p>
                                                <div class="form-group">
                                                    <!-- Icon Button toolbar group -->
                                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                        <div class="btn-group" role="group" aria-label="First Group">
                                                            <button type="button" class="btn btn-icon btn-light"><i class="fa fa-umbrella"></i></button>
                                                            <button type="button" class="btn btn-icon btn-secondary"><i class="fa fa-moon-o"></i></button>
                                                            <button type="button" class="btn btn-icon btn-primary"><i class="fa fa-cloud-download"></i></button>
                                                        </div>
                                                        <div class="btn-group mx-2" role="group" aria-label="Second Group">
                                                            <button type="button" class="btn btn-icon btn-success"><i class="fa fa-thermometer"></i></button>
                                                            <button type="button" class="btn btn-icon btn-info"><i class="fa fa-location-arrow"></i></button>
                                                            <button type="button" class="btn btn-icon btn-warning"><i class="fa fa-gavel"></i></button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="Third Group">
                                                            <button type="button" class="btn btn-icon btn-danger"><i class="fa fa-tint"></i></button>
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
                <!-- Icon Buttons group end -->
                <!-- Sizes start -->
                <section id="sizes-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sizes</h4>
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
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for Fancy larger or smaller buttons size.</p>
                                                <!-- simple sizes -->
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-primary btn-lg">Large button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-primary">Secondary button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-secondary">Secondary button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-primary btn-sm">Small button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-secondary btn-sm">Small button</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Buttons with Icons in different sizes</p>
                                                <!-- sizes with icons -->
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-success btn-lg"><i class="fa fa-star-o"></i> Large button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-danger btn-lg"><i class="fa fa-heart"></i> Large button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-success"><i class="fa fa-check-circle"></i> Secondary button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-danger"><i class="fa fa-archive"></i> Secondary button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-success btn-sm"><i class="fa fa-desktop"></i> Small button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="fa fa-moon-o"></i> Small button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sizes end -->
                <!-- Button Dropdowns Sizes start -->
                <section id="button-dropdown-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button Dropdowns Sizes</h4>
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
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Button dropdowns work with buttons of all sizes.</p>
                                                <div class="form-group">
                                                    <!-- Button Dropdowns Sizes -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Buttons with Icons in different sizes</p>
                                                <div class="form-group">
                                                    <!-- Button Dropdowns Sizes with Icons -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-toggle-on"></i> Success
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-smile-o"></i> Danger
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-toggle-on"></i> Success
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-smile-o"></i> Danger
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-toggle-on"></i> Success
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-smile-o"></i> Danger
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Button Dropdowns Sizes end -->
                <!-- Button Group Sizes start -->
                <section id="button-group-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button Group Sizes</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each
                                                    <code>.btn-group</code>.</p>
                                                <div class="form-group">
                                                    <!-- Button Group Sizes -->
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-light">Secondary</button>
                                                        <button type="button" class="btn btn-info">Info</button>
                                                        <button type="button" class="btn btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-light">Secondary</button>
                                                        <button type="button" class="btn btn-info">Info</button>
                                                        <button type="button" class="btn btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-light">Secondary</button>
                                                        <button type="button" class="btn btn-info">Info</button>
                                                        <button type="button" class="btn btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p>Button Group with Icons in different sizes</p>
                                                <div class="form-group">
                                                    <!-- Button Group with Icons in different sizes -->
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-warning"><i class="fa fa-link"></i> Warning</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-warning"><i class="fa fa-link"></i> Warning</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-warning"><i class="fa fa-link"></i> Warning</button>
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
                <!-- Button Group Sizes end -->
                <!-- Block level buttons start -->
                <section id="block-level-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Block level buttons</h4>
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
                                        <!-- Block level buttons -->
                                        <p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>.</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn mb-1 btn-primary btn-lg btn-block">Block level button</button>
                                                    <button type="button" class="btn mb-1 btn-secondary btn-lg btn-block">Block level button</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <!-- Block level buttons with icon -->
                                                <div class="form-group">
                                                    <button type="button" class="btn mb-1 btn-success btn-icon btn-lg btn-block"><i class="fa fa-check-circle"></i> Block level
                                                        button
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-danger btn-icon btn-lg btn-block">Block level button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Block level buttons end -->
                <!-- Button tags start -->
                <section id="button-tags">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button tags</h4>
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
                                        <!-- anchor, button tag, input button, input submit Tags -->
                                        <p>The .btn classes are designed to be used with the <code>&lt;button&gt;</code> element. However, you can also use these classes on <code>&lt;a&gt;</code>
                                            or <code>&lt;input&gt;</code> elements.</p>
                                        <div class="form-group">
                                            <a class="btn btn-primary btn-min-width mr-1 mb-1" href="component-buttons-basic.html#" role="button">Link</a>
                                            <button class="btn btn-primary btn-min-width mr-1 mb-1" type="submit">Button</button>
                                            <input class="btn btn-primary btn-min-width mr-1 mb-1" type="button" value="Input">
                                            <input class="btn btn-primary btn-min-width mr-1 mb-1" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Button tags end -->
                <!-- Outline Buttons start -->
                <section id="outline-button">
                    <div class="row">
                        <div class="col-md-12 mb-1 mt-2">
                            <h3 class="text-uppercase">Outline Buttons </h3>
                            <p>Replace the default modifier classes with the <code>.btn-outline </code>ones to remove all background images and colors on any button.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline buttons</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use a class <code>.btn-outline-*</code> to quickly create a outline button.</p>
                                                <div class="form-group">
                                                    <!-- Outline buttons -->
                                                    <button type="button" class="btn btn-outline-secondary btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-outline-primary btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-outline-success btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-outline-warning btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-outline-danger btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-outline-light btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-outline-dark btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline Buttons end -->
                <!-- Square Buttons start -->
                <section id="square-outline-button">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square buttons</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use a class <code>.square</code> with outline button class to create square outline button.</p>
                                                <div class="form-group">
                                                    <!-- Square buttons -->
                                                    <button type="button" class="btn btn-outline-secondary square btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-outline-primary square btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-outline-success square btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-outline-info square btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-outline-warning square btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-outline-danger square btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-outline-light square btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-outline-dark square btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Square Buttons end -->
                <!-- Round Buttons start -->
                <section id="round-outline-button">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Round buttons</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use a class <code>.round</code> with outline button class to create round outline button.</p>
                                                <div class="form-group">
                                                    <!-- Round buttons -->
                                                    <button type="button" class="btn btn-outline-secondary round btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-outline-primary round btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-outline-success round btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-outline-info round btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-outline-warning round btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-outline-danger round btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-outline-light round btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-outline-dark round btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Round Buttons end -->
                <!-- Single outline button dropdowns start -->
                <section id="single-outline-button-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Single outline button dropdowns</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Single outline button dropdowns -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-secondary btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-primary btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-success btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Success
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-info btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Info
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-warning btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Warning
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-danger btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Danger
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-light btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Light
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-dark btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Dark
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single outline button dropdowns end -->
                <!-- Split Outline button dropdowns with background start -->
                <section id="split-outline-button-dropdown">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Outline button dropdowns with dropdown background</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split Outline button dropdowns with dropdown background -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-success">Success</button>
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-light">Light</button>
                                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-dark">Dark</button>
                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Outline button dropdowns with dropdown background end -->

                <!-- Split Outline button dropdowns start -->
                <section id="split-outline-button-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Outline button dropdowns</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split Outline button dropdowns -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-success">Success</button>
                                                        <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-light">Light</button>
                                                        <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-dark">Dark</button>
                                                        <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Outline button dropdowns end -->
                <!-- Outline Button group start -->
                <section id="outline-button-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Button group</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Outline button group</p>
                                                <div class="form-group">
                                                    <!-- Outline Button group -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-outline-success">Success</button>
                                                        <button type="button" class="btn btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-outline-light">Light</button>
                                                        <button type="button" class="btn btn-outline-dark">Dark</button>
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
                <!-- Outline Button group end -->
                <!-- Outline Button with Icons start -->
                <section id="outline-button-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline buttons with Icons</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Outline Buttons with icon.</p>
                                                <div class="form-group">
                                                    <!-- Outline buttons with Icons -->
                                                    <button type="button" class="mr-1 mb-1 btn btn-outline-secondary btn-min-width"><i class="fa fa-star-o"></i> Secondary</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-outline-primary btn-min-width"><i class="fa fa-user-o"></i> Primary</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-outline-success btn-min-width"><i class="fa fa-search"></i> Success</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-outline-info btn-min-width"><i class="fa fa-camera"></i> Info</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-outline-warning btn-min-width"><i class="fa fa-camera"></i> Warning</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-outline-danger btn-min-width"><i class="fa fa-smile-o"></i> Danger</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-outline-light btn-min-width"><i class="fa fa-plug"></i> Light</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-outline-dark btn-min-width"><i class="fa fa-heart"></i> Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline Button with Icons end -->
                <!-- Split Outline Button dropdown with Icons start -->
                <section id="split-outline-button-dropdown-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Outline button dropdowns with icon &amp; dropdown outline</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split Outline button dropdowns with icon & dropdown outline -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-secondary"><i class="fa fa-user-o"></i> Secondary</button>
                                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-star-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-camera"></i> Info</button>
                                                        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-camera"></i> Warning</button>
                                                        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-light"><i class="fa fa-plug"></i> Light</button>
                                                        <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-dark"><i class="fa fa-heart"></i> Dark</button>
                                                        <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Outline Button dropdown with Icons end -->
                <!-- Outline Button group with Icons start -->
                <section id="outline-button-group-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Button group with icon</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Outline button group with icons and text.</p>
                                                <div class="form-group">
                                                    <!-- Outline button group with icons and text. -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-secondary"><i class="fa fa-star-o"></i> Secondary</button>
                                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-camera"></i> Info</button>
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-camera"></i> Warning</button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-outline-light"><i class="fa fa-plug"></i> Light</button>
                                                        <button type="button" class="btn btn-outline-dark"><i class="fa fa-heart"></i> Dark</button>
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
                <!-- Outline Button group with Icons end -->
                <!-- Outline Icon Buttons start -->
                <section id="outline-icons-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Icon Buttons</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Outline Icon Buttons.</p>
                                                <div class="form-group">
                                                    <!-- Outline Icon Buttons -->
                                                    <button type="button" class="btn btn-outline-secondary mr-1 mb-1"><i class="fa fa-star-o"></i></button>
                                                    <button type="button" class="btn btn-outline-primary mr-1 mb-1"><i class="fa fa-user-o"></i></button>
                                                    <button type="button" class="btn btn-outline-success mr-1 mb-1"><i class="fa fa-search"></i></button>
                                                    <button type="button" class="btn btn-outline-info mr-1 mb-1"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-outline-warning mr-1 mb-1"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-outline-danger mr-1 mb-1"><i class="fa fa-smile-o"></i></button>
                                                    <button type="button" class="btn btn-outline-light mr-1 mb-1"><i class="fa fa-plug"></i></button>
                                                    <button type="button" class="btn btn-outline-dark mr-1 mb-1"><i class="fa fa-heart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline Icon Buttons end -->
                <!-- Outline Icon Button group start -->
                <section id="outline-icons-button-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Icon Button group</h4>
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
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Icon Button group without text.</p>
                                                <div class="form-group">
                                                    <!-- Outline Icon Button group -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-icon btn-outline-secondary"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-icon btn-outline-primary"><i class="fa fa-user-o"></i></button>
                                                        <button type="button" class="btn btn-icon btn-outline-success"><i class="fa fa-search"></i></button>
                                                        <button type="button" class="btn btn-icon btn-outline-warning"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-icon btn-outline-info"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-icon btn-outline-danger"><i class="fa fa-smile-o"></i></button>
                                                        <button type="button" class="btn btn-icon btn-outline-light"><i class="fa fa-plug"></i></button>
                                                        <button type="button" class="btn btn-icon btn-outline-dark"><i class="fa fa-heart"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Combine sets of button groups into <strong>Button toolbar</strong> for more complex components.</p>
                                                <div class="form-group">
                                                    <!-- Outline Icon Button toolbar group -->
                                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                        <div class="btn-group" role="group" aria-label="First Group">
                                                            <button type="button" class="btn btn-icon btn-outline-light"><i class="fa fa-umbrella"></i></button>
                                                            <button type="button" class="btn btn-icon btn-outline-secondary"><i class="fa fa-moon-o"></i></button>
                                                            <button type="button" class="btn btn-icon btn-outline-primary"><i class="fa fa-cloud-download"></i></button>
                                                        </div>
                                                        <div class="btn-group mx-2" role="group" aria-label="Second Group">
                                                            <button type="button" class="btn btn-icon btn-outline-success"><i class="fa fa-thermometer"></i></button>
                                                            <button type="button" class="btn btn-icon btn-outline-warning"><i class="fa fa-gavel"></i></button>
                                                            <button type="button" class="btn btn-icon btn-outline-info"><i class="fa fa-tint"></i></button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="Third Group">
                                                            <button type="button" class="btn btn-icon btn-outline-danger"><i class="fa fa-cloud"></i></button>
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
                <!-- Outline Icon Button group end -->
                <!-- Sizes start -->
                <section id="sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sizes</h4>
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
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <!-- Outline Sizes -->
                                                <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for Fancy larger or smaller buttons size.</p>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary btn-lg">Large button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary">Default button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-secondary">Default button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary btn-sm">Small button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-secondary btn-sm">Small button</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Buttons with Icons in different sizes</p>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-success btn-lg"><i class="fa fa-star-o"></i> Large button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-lg"><i class="fa fa-heart"></i> Large button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-success"><i class="fa fa-check-circle"></i> Default button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-danger"><i class="fa fa-archive"></i> Default button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-success btn-sm"><i class="fa fa-desktop"></i> Small button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm"><i class="fa fa-moon-o"></i> Small button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sizes end -->
                <!-- Outline botton Dropdowns Sizes start -->
                <section id="outline-button-dropdowns-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Button Dropdowns Sizes</h4>
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
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Button dropdowns work with buttons of all sizes.</p>
                                                <div class="form-group">
                                                    <!-- Outline Button Dropdowns Sizes -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-primary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Primary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Secondary
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Icon Buttons in different sizes</p>
                                                <div class="form-group">
                                                    <!-- Icon Buttons in different sizes -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-info dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-info"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-warning dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-warning"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-info"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-warning"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-info"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-outline-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fa fa-warning"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Another action</a>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="component-buttons-basic.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline botton Dropdowns Sizes end -->

                <!-- Button Group Sizes start -->
                <section id="button-group-sizes-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button Group Sizes</h4>
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
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each
                                                    <code>.btn-group</code>.</p>
                                                <div class="form-group">
                                                    <!-- Button Group Sizes -->
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p>Button Group with Icons in different sizes</p>
                                                <div class="form-group">
                                                    <!-- Button Group Sizes with icon -->
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-link"></i> Warning</button>
                                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-info"></i> Info</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-link"></i> Warning</button>
                                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-info"></i> Info</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-outline-warning"><i class="fa fa-link"></i> Warning</button>
                                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-info"></i> Info</button>
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
                <!-- Button Group Sizes end -->

                <!-- Block level Button start -->
                <section id="block-level-button">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Block level buttons</h4>
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
                                        <p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>.</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <!-- block level buttons -->
                                                    <button type="button" class="btn btn-outline-primary btn-lg mr-1 mb-1 btn-block">Block level button</button>
                                                    <button type="button" class="btn btn-outline-secondary btn-lg mr-1 mb-1 btn-block">Block level button</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <!-- block level buttons with icon -->
                                                    <button type="button" class="btn btn-outline-success btn-icon btn-lg mr-1 mb-1 btn-block">Block level button</button>
                                                    <button type="button" class="btn btn-outline-danger btn-icon btn-lg mr-1 mb-1 btn-block">Block level button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Block level Button end -->

                <!-- Nesting Button group start -->
                <section id="nesting-button-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nesting Button group</h4>
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
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> for dropdown menu buttons.</p>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-success">1</button>
                                                        <button type="button" class="btn btn-danger">2</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                                                <a class="dropdown-item bg-warning" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item bg-warning" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p>Nesting Button group with outline</p>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-outline-success">1</button>
                                                        <button type="button" class="btn btn-outline-danger">2</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop2" type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
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
                <!-- Nesting Button group end -->

                <!-- Vertical variation start -->
                <section id="vertical-variation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical variation</h4>
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
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-sm-12">
                                                <p>Make a set of buttons appear vertically.</p>
                                                <div class="form-group">
                                                    <!-- Vertical variation -->
                                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-secondary">Button</button>
                                                        <button type="button" class="btn btn-secondary">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary">Button</button>
                                                        <button type="button" class="btn btn-secondary">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12">
                                                <p>Vertical variation with different colors</p>
                                                <div class="form-group">
                                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop5" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Secondary
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-success">Success</button>
                                                        <button type="button" class="btn btn-danger">Danger</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop6" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop7" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop8" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12">
                                                <p>Vertical variation with Outlines</p>
                                                <div class="form-group">
                                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-outline-primary">Button</button>
                                                        <button type="button" class="btn btn-outline-secondary">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop9" type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-outline-success">Button</button>
                                                        <button type="button" class="btn btn-outline-danger">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop10" type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop11" type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop12" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12">
                                                <p>Vertical variation with Outlines</p>
                                                <div class="form-group">
                                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-outline-amber">Button</button>
                                                        <button type="button" class="btn btn-outline-cyan">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop13" type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop5">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-outline-red">Button</button>
                                                        <button type="button" class="btn btn-outline-blue-grey">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop14" type="button" class="btn btn-outline-purple dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop5">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop15" type="button" class="btn btn-outline-pink dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop16" type="button" class="btn btn-outline-amber dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop6">
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
                                                                <a class="dropdown-item" href="component-buttons-basic.html#">Dropdown link</a>
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
                <!-- Vertical variation end -->
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

