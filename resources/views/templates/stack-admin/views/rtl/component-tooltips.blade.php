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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-tooltip.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-tooltip.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Tooltip</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-tooltips.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Tooltip
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
            <div class="content-body"><!--       Static demo	    -->
                <section id="static-demo">
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
                                            <div class="col-xl-3 col-lg-6 col-6 mb-1 text-center">
                                                <h5 class="text-center">Basic Top Tooltip</h5>
                                                <div class="tooltip top show" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
                                                    <div class="tooltip-arrow"
                                                         style="bottom: -5px; left: 50%; margin-left: -5px; border-width: 5px 5px 0; border-top-color: #000;"></div>
                                                    <div class="tooltip-inner" style="max-width: none;">
                                                        <i style="bottom: -5px; left: 50%;margin-left: -5px;border-width: 5px 5px 0;border-top-color: #000;position: absolute;border-style: solid;"></i>
                                                        Tooltip on Top
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Add <code>.top</code> class for top tooltip along with <code>.tooltip</code> class.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-6 mb-1 text-center">
                                                <h5 class="text-center">Basic Right Tooltip</h5>
                                                <div class="tooltip right show" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
                                                    <div class="tooltip-arrow" style="left: -5px;top: 50%;border-width: 5px 5px 5px 0;border-right-color: #000;"></div>
                                                    <div class="tooltip-inner" style="max-width: none;">
                                                        <i style="left: -5px; top: 50%;margin-top: -5px;border-width: 5px 5px 5px 0;border-right-color: #000;position: absolute;border-style: solid;"></i>
                                                        Tooltip on Right
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Add <code>.right</code> class for right tooltip along with <code>.tooltip</code> class.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-6 mb-1 text-center">
                                                <h5 class="text-center">Basic Bottom Tooltip</h5>
                                                <div class="tooltip bottom show" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
                                                    <div class="tooltip-arrow"
                                                         style="top: -5px;left: 50%;margin-left: -5px;border-width: 0 5px 5px;border-bottom-color: #000;"></div>
                                                    <div class="tooltip-inner" style="max-width: none;">
                                                        <i style="top: -5px; left: 50%;margin-left: -5px;border-width:0 5px 5px;border-bottom-color: #000;position: absolute;border-style: solid;"></i>
                                                        Tooltip on Bottom
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Add <code>.bottom</code> class for bottom tooltip along with <code>.tooltip</code> class.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-6 mb-1 text-center">
                                                <h5 class="text-center">Basic Left Tooltip</h5>
                                                <div class="tooltip left show" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
                                                    <div class="tooltip-arrow" style="right: -5px;top: 50%;border-width: 5px 0 5px 5px;border-left-color: #000;"></div>
                                                    <div class="tooltip-inner" style="max-width: none;">
                                                        <i style="right: -5px; top: 50%;margin-top: -5px;border-width: 5px 0 5px 5px;border-left-color: #000;position: absolute;border-style: solid;"></i>
                                                        Tooltip on Left
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Add <code>.left</code> class for left tooltip along with <code>.tooltip</code> class.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section Ends -->

                <!--       Tooltip Positions	  -->
                <section id="tooltip-positions">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Positions</h4>
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
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Basic Top Tooltip</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                        Tooltip on top
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Add <code>data-toggle="tooltip"</code> &amp; <code>data-placement="top"</code> to add top tooltip.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Basic Right Tooltip</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                                        Tooltip on right
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Add <code>data-toggle="tooltip"</code> &amp; <code>data-placement="right"</code> to add right tooltip.
                                                </p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Basic Bottom Tooltip</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                                        Tooltip on bottom
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Add <code>data-toggle="tooltip"</code> &amp; <code>data-placement="bottom"</code> to add bottom tooltip.
                                                </p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Basic Left Tooltip</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                                                        Tooltip on left
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Add <code>data-toggle="tooltip"</code> &amp; <code>data-placement="left"</code> to add left tooltip.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section Ends -->

                <!--       Tooltip Triggers	  -->
                <section id="tooltip-triggers">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Triggers</h4>
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
                                        <p>Tooltip is triggered using - click | hover | focus | manual options. You may pass multiple triggers; separate them with a space. "manual"
                                            cannot be combined with any other trigger.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Click</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-original-title="Click Triggered" data-trigger="click">
                                                        On Click Trigger
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-trigger="click"</code> for click trigger.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Focus</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-original-title="Focus Triggered" data-trigger="focus">
                                                        On Focus Trigger
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-trigger="focus"</code> for focus trigger.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Hover</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-original-title="Hover Triggered">
                                                        On Hover Trigger
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-trigger="hover"</code> for hover trigger. This is a default trigger.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Manual</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-info manual" data-toggle="tooltip" data-original-title="Manual Triggered"
                                                            data-trigger="manual">
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
                <!-- Section Ends -->

                <!--       Tooltip Options	  -->
                <section id="tooltip-options">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Options</h4>
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
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Disabled Animaition</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-original-title="Without Fade Animation"
                                                            data-animation="false">
                                                        No animation
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-animation="false"</code> to remove fade animation. Default is true.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Delay Show/Hide</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning delay" data-toggle="tooltip" data-original-title="Click Triggered"
                                                            data-delay="500">
                                                        Delay Tooltip
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Delay showing and hiding the tooltip (<code>ms</code>) - does not apply to manual trigger type.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Supports HTML</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning" data-toggle="tooltip"
                                                            data-original-title="<b>This</b> is <i>HTML</i> <u>tooltip</u>" data-html="true">
                                                        HTML Tooltip
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Use <code>data-html="true"</code> for HTML supported trigger.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Tooltip Template</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning template" data-toggle="tooltip"
                                                            data-original-title="Check console for default template structure" data-trigger="click">
                                                        Tooltip Template
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Base HTML to use when creating the tooltip. The tooltip's title will be injected into the <code>.tooltip-inner</code>.
                                                    <code>.tooltip-arrow</code> will become the tooltip's arrow.The outermost wrapper element should have the <code>.tooltip</code>
                                                    class.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section Ends -->

                <!--       Tooltip Methods	  -->
                <section id="tooltip-methods">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Methods</h4>
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
                                        <p>This is considered a “manual” triggering of the tooltip. Tooltips with zero-length titles are never displayed.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Show</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-danger" id="show-method" data-popup="tooltip" data-original-title="Show Method Tooltip"
                                                            data-trigger="manual">
                                                        Show Method <i class="fa fa-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Reveals an element’s tooltip. Returns to the caller before the tooltip has actually been shown.(i.e.
                                                    before the <code>shown.bs.tooltip</code> event occurs)</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Hide</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-danger" id="hide-method" data-popup="tooltip" data-original-title="Hide Method Tooltip"
                                                            data-trigger="manual">
                                                        Hide Method <i class="fa fa-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Hides an element’s tooltip. Returns to the caller before the tooltip has actually been hidden (i.e.
                                                    before the <code>hidden.bs.tooltip</code> event occurs).</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Toggle</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-danger" id="toggle-method" data-popup="tooltip" data-original-title="Toggle Method Tooltip"
                                                            data-trigger="manual">
                                                        Toggle Method <i class="fa fa-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">Toggles an element’s tooltip. Returns to the caller before the tooltip has actually been shown or hidden
                                                    (i.e. before the <code>shown.bs.tooltip</code> or <code>hidden.bs.tooltip</code> event occurs).</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Dispose</h5>
                                                <div class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-original-title="Dispose Method Tooltip"
                                                                data-trigger="click" id="dispose-method">
                                                            Dispose
                                                        </button>
                                                        <button type="button" class="btn btn-danger" id="dispose">
                                                            <i class="fa fa-play-circle"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">Hides and destroys an element’s tooltip. Tooltips that use delegation cannot be individually destroyed
                                                    on descendant trigger elements.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section Ends -->

                <!--       Tooltip Events	  -->
                <section id="tooltip-events">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Events</h4>
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
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Show Event</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success" id="show-tooltip">
                                                        Show Event Tooltip
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">This event fires immediately when the <code>show</code> instance method is called.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Shown Event</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success" id="shown-tooltip">
                                                        Shown Event Tooltip
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">This event is fired when the tooltip has been made visible to the user (will wait for CSS transitions to
                                                    complete).</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Hide Event</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success" id="hide-tooltip">
                                                        Hide Event Tooltip
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">This event is fired immediately when the <code>hide</code> instance method has been called.</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Hidden Event</h5>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success" id="hidden-tooltip">
                                                        Hidden Event Tooltip
                                                    </button>
                                                </div>
                                                <p class="text-center mt-1">This event is fired when the tooltip has finished being hidden from the user (will wait for CSS
                                                    transitions to complete).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section Ends -->
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
    <script src="{{asset('admin-assets/js/scripts/tooltip/tooltip.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
