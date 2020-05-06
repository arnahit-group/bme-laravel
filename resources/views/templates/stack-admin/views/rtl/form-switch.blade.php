@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/forms/switch.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/forms/switch.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Switch</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="form-switch.html#">Form Components</a>
                                </li>
                                <li class="breadcrumb-item active">Switch
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
            <div class="content-body"><!-- Checkbox Toggle start -->
                <section class="bootstrap-checkbox" id="bootstrap-checkbox">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Bootstrap Checkbox Toggle</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Simple Switch</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>.switch</code>class to checkbox to set as switch</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch1" checked="checked"/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Reverse Switch</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p> Add <code>checked</code> to set checked bootstrap switch</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch2" data-reverse/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Always toggle Switch</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>data-switch-always</code> to switch on every click</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch3" data-switch-always checked/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Disabled Switch</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Checked &amp; Disabled toggle</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch4" disabled checked/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Small Switch</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>data-group-cls="btn-group-sm"</code> attribute for small switch</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch5" data-group-cls="btn-group-sm"/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Large Switch</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>data-group-cls="btn-group-lg"</code> attribute for large switch</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch6" data-group-cls="btn-group-lg"/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Vertical Switch</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>data-group-cls="btn-group-vertical"</code> attribute for vertical switch</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch7" data-group-cls="btn-group-vertical" data-switch-always/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Change Switch Title</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>data-off-title="VALUE"</code> attribute for OFF hover title and <code>data-on-title="VALUE"</code> attribute for ON hover title
                                        </p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch8" data-off-title="Don't Say NO!!" data-on-title="Say,Yes please!!"
                                                       data-switch-always checked/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Switch with Icons</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>data-icon-cls="fa"</code> to set font family you are using <code>data-off-icon-cls="fa FONT_AWESOME_ICON"</code> attribute for
                                            off switch icon &amp; <code>data-on-icon-cls="fa FONT_AWESOME_ICON"</code> attribute for on switch icon</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch9" data-icon-cls="fa" data-off-icon-cls="ft-thumbs-down"
                                                       data-on-icon-cls="ft-thumbs-up"/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Only Switch Icons</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>To set only icon switch set <code>data-off-label="false"</code> &amp; <code>data-off-label="false"</code>.</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch10" data-off-label="false" data-on-label="false" data-icon-cls="fa"
                                                       data-off-icon-cls="fa-male" data-on-icon-cls="fa-female" checked/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">OnLabel Click change</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" id="switch11" data-col-sm-3/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label class="card-title">Change Switch Labels</label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>data-off-label="OffValue"</code> attribute for off switch label &amp; <code>data-on-label="OnValue"</code> attribute for on
                                            switch label</p>
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" data-on-label="Male" data-off-label="Female" id="switch12" checked/>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Checkbox Toggle end -->

                <!-- Switchery Switch start -->
                <section class="switchery-toggle" id="switchery-toggle">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Switchery Toggle</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Switchery Toggle</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                                        <p>To set Switchery toggle, add <code>.switchery</code> class to checkbox.</p>
                                        <div class="form-group pb-1">
                                            <input type="checkbox" id="switchery" class="switchery" checked/>
                                            <label for="switchery" class="font-medium-2 text-bold-600 ml-1">Switchery Default</label>
                                        </div>
                                        <div class="form-group pb-1">
                                            <input type="checkbox" id="switchery1" class="switchery"/>
                                            <label for="switchery1" class="font-medium-2 text-bold-600 ml-1">Switchery Unchecked</label>
                                        </div>
                                        <div class="form-group pb-1">
                                            <input type="checkbox" id="switchery2" class="switchery" checked disabled/>
                                            <label for="switchery2" class="font-medium-2 text-bold-600 ml-1">Switchery Checked &amp; Disabled</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="switchery3" class="switchery" disabled/>
                                            <label for="switchery3" class="font-medium-2 text-bold-600 ml-1">Switchery Disable</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Switchery Toggle</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                                        <p> To set Switchery toggle to right, wrap checkbox with <code>.float-right</code> class.</p>
                                        <div class="form-group pb-1">
                                            <div class="float-right">
                                                <input type="checkbox" name="switchery" id="switchery0" class="switchery" checked/>
                                            </div>
                                            <label for="switchery0" class="font-medium-2 text-bold-600">Switchery Default</label>
                                        </div>
                                        <div class="form-group pb-1">
                                            <div class="float-right">
                                                <input type="checkbox" name="switchery" id="switchery01" class="switchery"/>
                                            </div>
                                            <label for="switchery01" class="font-medium-2 text-bold-600">Switchery Unchecked</label>
                                        </div>
                                        <div class="form-group pb-1">
                                            <div class="float-right">
                                                <input type="checkbox" name="switchery" id="switchery02" class="switchery" checked disabled/>
                                            </div>
                                            <label for="switchery02" class="font-medium-2 text-bold-600">Switchery Checked &amp; Disabled</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="float-right">
                                                <input type="checkbox" name="switchery" id="switchery03" class="switchery" disabled/>
                                            </div>
                                            <label for="switchery03" class="font-medium-2 text-bold-600">Switchery Disable</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Switchery Sizes</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                                        <div class="form-group ">
                                            <input type="checkbox" id="switcherySize" class="switchery" data-size="lg" checked/>
                                            <label for="switcherySize" class="font-medium-2 text-bold-600 ml-1">Large Switchery</label>
                                            <p class="text-muted"> To set Large Switchery toggle, add <code>data-size="lg"</code> to checkbox with <code>.switchery</code> class.
                                            </p>
                                        </div>
                                        <div class="form-group mt-1">
                                            <input type="checkbox" id="switcherySize1" class="switchery" checked/>
                                            <label for="switcherySize1" class="font-medium-2 text-bold-600 ml-1">Default Switchery</label>
                                            <p class="text-muted"> To set Default Switchery toggle, add <code>.switchery</code> class to checkbox.</p>
                                        </div>
                                        <div class="form-group mt-1">
                                            <input type="checkbox" id="switcherySize2" class="switchery" data-size="sm" checked/>
                                            <label for="switcherySize2" class="font-medium-2 text-bold-600 ml-1">Small Switchery</label>
                                            <p class="text-muted"> To set Small Switchery toggle, add <code>data-size="sm"</code> to checkbox with <code>.switchery</code> class.
                                            </p>
                                        </div>
                                        <div class="form-group mt-1">
                                            <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                                            <label for="switcherySize3" class="font-medium-2 text-bold-600 ml-1">Extra Small Switchery</label>
                                            <p class="text-muted"> To set Extra Small Switchery toggle, add <code>data-size="xs"</code> to checkbox with <code>.switchery</code>
                                                class.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Switchery Labels on both sides</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                                        <div class="form-group pb-1">
                                            <label for="switcherySize10" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                                            <input type="checkbox" id="switcherySize10" class="switchery" data-size="lg" checked/>
                                            <label for="switcherySize10" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
                                        </div>
                                        <div class="form-group mt-1 pb-1">
                                            <label for="switcherySize11" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                                            <input type="checkbox" id="switcherySize11" class="switchery" checked/>
                                            <label for="switcherySize11" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
                                        </div>
                                        <div class="form-group mt-1 pb-1">
                                            <label for="switcherySize12" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                                            <input type="checkbox" id="switcherySize12" class="switchery" data-size="sm" checked/>
                                            <label for="switcherySize12" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
                                        </div>
                                        <div class="form-group mt-1">
                                            <label for="switcherySize13" class="font-medium-2 text-bold-600 mr-1">Left Label</label>
                                            <input type="checkbox" id="switcherySize13" class="switchery" data-size="xs" checked/>
                                            <label for="switcherySize13" class="font-medium-2 text-bold-600 ml-1">Right Label</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Switchery Switch end -->
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
    <script src="{{asset('admin-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/forms/switch.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
