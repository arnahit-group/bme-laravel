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
                    <h3 class="content-header-title mb-0">Popovers</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-popovers.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Popovers
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
            <div class="content-body"><!-- Static Popovers start -->
                <section id="static-popovers">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Static demo</h4>
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
                                        <p>Four options are available: top, right, bottom, and left aligned.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-6 text-center">
                                                <h5 class="text-center">Basic Top Popover</h5>
                                                <div class="popover bs-popover-top show" style="display: block; position: relative; margin: 1rem auto; padding: 0; z-index: 100;">
                                                    <div class="arrow" style="left: 50%;"></div>
                                                    <div class="popover-header" style="max-width: none;">Popover on Top</div>
                                                    <div class="popover-body">
                                                        <p>Ice cream tootsie roll tiramisu tootsie roll toffee dragée sugar plum cake. Liquorice jelly jujubes. Powder danish tart
                                                            apple pie dessert cheesecake tiramisu soufflé bonbon. Carrot cake wafer toffee.</p>
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Add <code>.popover-top</code> class for top popover along with <code>.popover</code> class.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-6 text-center">
                                                <h5 class="text-center">Basic Right Popover</h5>
                                                <div class="popover bs-popover-right show" style="display: block; position: relative; margin: 1rem auto; padding: 0; z-index: 100;">
                                                    <div class="arrow" style="top: 50%;"></div>
                                                    <div class="popover-header" style="max-width: none;">Popover on Right</div>
                                                    <div class="popover-body">
                                                        <p>Ice cream tootsie roll tiramisu tootsie roll toffee dragée sugar plum cake. Liquorice jelly jujubes. Powder danish tart
                                                            apple pie dessert cheesecake tiramisu soufflé bonbon. Carrot cake wafer toffee.</p>
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Add <code>.popover-right</code> class for right popover along with <code>.popover</code> class.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-6 text-center">
                                                <h5 class="text-center">Basic Bottom Popover</h5>
                                                <div class="popover bs-popover-bottom show"
                                                     style="display: block; position: relative; margin: 1rem auto; padding: 0; z-index: 100;">
                                                    <div class="arrow" style="left: 50%;"></div>
                                                    <div class="popover-header" style="max-width: none;">Popover on Bottom</div>
                                                    <div class="popover-body">
                                                        <p>Ice cream tootsie roll tiramisu tootsie roll toffee dragée sugar plum cake. Liquorice jelly jujubes. Powder danish tart
                                                            apple pie dessert cheesecake tiramisu soufflé bonbon. Carrot cake wafer toffee.</p>
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Add <code>.popover-bottom</code> class for bottom popover along with <code>.popover</code> class.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-6 text-center">
                                                <h5 class="text-center">Basic Left Popover</h5>
                                                <div class="popover bs-popover-left show" style="display: block; position: relative; margin: 1rem auto; padding: 0; z-index: 100;">
                                                    <div class="arrow" style="top: 50%;"></div>
                                                    <div class="popover-header" style="max-width: none;">Popover on Left</div>
                                                    <div class="popover-body">
                                                        <p>Ice cream tootsie roll tiramisu tootsie roll toffee dragée sugar plum cake. Liquorice jelly jujubes. Powder danish tart
                                                            apple pie dessert cheesecake tiramisu soufflé bonbon. Carrot cake wafer toffee.</p>
                                                    </div>
                                                </div>
                                                <p class="mt-1 text-center">Add <code>.popover-left</code> class for left popover along with <code>.popover</code> class.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Static Popovers end -->

                <!-- Popover Positions start -->
                <section id="popover-positions">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Positions</h4>
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
                                        <p>Four options are available: top, right, bottom, and left aligned.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Basic Top Popover</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="top" data-container="body"
                                                            data-original-title="Popover on top"
                                                            data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                        Popover on top
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Add <code>data-toggle="popover"</code> &amp; <code>data-placement="top"</code> to add top popover.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Basic Right Popover</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="right" data-container="body"
                                                            data-original-title="Popover on right"
                                                            data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                        Popover on right
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Add <code>data-toggle="popover"</code> &amp; <code>data-placement="right"</code> to add right popover.
                                                </p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Basic Bottom Popover</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="bottom" data-container="body"
                                                            data-original-title="Popover on bottom"
                                                            data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                        Popover on bottom
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Add <code>data-toggle="popover"</code> &amp; <code>data-placement="bottom"</code> to add bottom popover.
                                                </p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Basic Left Popover</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="left" data-container="body"
                                                            data-original-title="Popover on left"
                                                            data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                        Popover on left
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Add <code>data-toggle="popover"</code> &amp; <code>data-placement="left"</code> to add left popover.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Positions end -->

                <!-- Popover Triggers start -->
                <section id="popover-triggers">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Triggers</h4>
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
                                        <p>Popover is triggered using - click | hover | focus | manual options. You may pass multiple triggers; separate them with a space. "manual"
                                            cannot be combined with any other trigger.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Hover</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-info" data-toggle="popover"
                                                            data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                            data-trigger="hover" data-original-title="Hover Triggered">
                                                        On Hover Trigger
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-trigger="hover"</code> for hover trigger.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Click</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-info" data-toggle="popover"
                                                            data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                            data-original-title="Click Triggered" data-trigger="click" data-placement="bottom">
                                                        On Click Trigger
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-trigger="click"</code> for click trigger. This is a default trigger.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Focus</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-info" data-toggle="popover"
                                                            data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                            data-original-title="Focus Triggered" data-trigger="focus">
                                                        On Focus Trigger
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-trigger="focus"</code> for focus trigger.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Manual</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-info manual" data-toggle="popover" data-placement="left"
                                                            data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                            data-original-title="Manual Triggered" data-trigger="manual">
                                                        On Manual Trigger
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-trigger="manual"</code> for manual trigger. You can do show/hide using js</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Triggers end -->

                <!-- Popover Options start -->
                <section id="popover-options">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Options</h4>
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
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Disabled Animaition</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning" data-toggle="popover"
                                                            data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                            data-original-title="Without Fade Animation" data-animation="false" data-placement="top">
                                                        No animation
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-animation="false"</code> to remove fade animation. Default is true.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Delay Show/Hide</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning delay" data-toggle="popover"
                                                            data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                            data-original-title="Click Triggered" data-delay="500" data-placement="left">
                                                        Delay Popover
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Delay showing and hiding the popover (<code>ms</code>) - does not apply to manual trigger type.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Supports HTML</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning" data-toggle="popover"
                                                            data-content="Tart macaroon marzipan I love soufflé <h6>apple pie</h6> wafer. <b>Chocolate</b> bar jelly caramels jujubes chocolate cake gummies."
                                                            data-original-title="<b>This</b> is <i>HTML</i> <u>popover</u>" data-html="true" data-placement="bottom">
                                                        HTML Popover
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-html="true"</code> for HTML supported trigger.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Popover Template</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning template" data-toggle="popover"
                                                            data-content="<div class='popover' role='popover'><div class='arrow'></div><div class='popover-header'></div><div class='popover-body'></div></div>"
                                                            data-original-title="Default Template Structure" data-trigger="click" data-placement="left">
                                                        Popover Template
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Base HTML to use when creating the popover. The popover's title will be injected into the <code>.popover-inner</code>.
                                                    <code>.arrow</code> will become the popover's arrow.The outermost wrapper element should have the <code>.popover</code> class.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Options end -->

                <!-- Popover Methods start -->
                <section id="popover-methods">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Methods</h4>
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
                                        <p>This is considered a “manual” triggering of the popover.Popovers whose both title and content are zero-length are never displayed.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Show</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-danger" id="show-method" data-popup="popover" data-placement="top"
                                                            data-original-title="Show Method Popover"
                                                            data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                                                            data-trigger="manual">
                                                        Show Method <i class="fa fa-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Reveals an element’s popover. Returns to the caller before the popover has actually been shown.(i.e.
                                                    before the <code>shown.bs.popover</code> event occurs)</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Hide</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-danger" id="hide-method" data-popup="popover" data-placement="left"
                                                            data-original-title="Hide Method Popover"
                                                            data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                                                            data-trigger="manual">
                                                        Hide Method <i class="fa fa-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Hides an element’s popover. Returns to the caller before the popover has actually been hidden (i.e.
                                                    before the <code>hidden.bs.popover</code> event occurs).</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Toggle</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-danger" id="toggle-method" data-popup="popover" data-original-title="Toggle Method Popover"
                                                            data-placement="top"
                                                            data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                                                            data-trigger="manual">
                                                        Toggle Method <i class="fa fa-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Toggles an element’s popover. Returns to the caller before the popover has actually been shown or hidden
                                                    (i.e. before the <code>shown.bs.popover</code> or <code>hidden.bs.popover</code> event occurs).</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Dispose</h5>
                                                <div class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger" data-toggle="popover" data-original-title="Dispose Method Popover"
                                                                data-placement="left"
                                                                data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                                                                data-trigger="click" id="dispose-method">
                                                            Dispose
                                                        </button>
                                                        <button type="button" class="btn btn-danger" id="dispose">
                                                            <i class="fa fa-play-circle"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Hides and destroys an element’s popover. Popovers that use delegation cannot be individually destroyed
                                                    on descendant trigger elements.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Methods end -->

                <!-- Popover Events start -->
                <section id="popover-events">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Events</h4>
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
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Show Event</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success" id="show-popover">
                                                        Show Event Popover
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">This event fires immediately when the <code>show</code> instance method is called.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Shown Event</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success" id="shown-popover">
                                                        Shown Event Popover
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">This event is fired when the popover has been made visible to the user (will wait for CSS transitions to
                                                    complete).</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Hide Event</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success" id="hide-popover">
                                                        Hide Event Popover
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">This event is fired immediately when the <code>hide</code> instance method has been called.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center">Hidden Event</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success" id="hidden-popover">
                                                        Hidden Event Popover
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">This event is fired when the popover has finished being hidden from the user (will wait for CSS
                                                    transitions to complete).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Events end -->
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
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/popover/popover.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection

