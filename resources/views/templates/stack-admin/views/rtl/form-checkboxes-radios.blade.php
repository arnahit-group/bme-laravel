@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/forms/checkboxes-radios.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/forms/checkboxes-radios.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Checkboxes and Radio Buttons</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="form-checkboxes-radios.html#">Form Components</a>
                                </li>
                                <li class="breadcrumb-item active">Checkboxes &amp; Radios
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
            <div class="content-body"> <!-- Basic Checkbox start -->
                <section class="basic-checkbox">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Simple Checkboxes</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Checkbox</h4>
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
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <fieldset class="checkboxsas">
                                            <label>
                                                <input type="checkbox" value="">
                                                I am unchecked Checkbox
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" checked>
                                                I am checked Checkbox
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox disabled">
                                            <label>
                                                <input type="checkbox" value="" disabled>
                                                I am disabled Checkbox
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox disabled">
                                            <label>
                                                <input type="checkbox" value="" disabled checked>
                                                I am checked &amp; disabled Checkbox
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Right Checkbox</h4>
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
                                        <p> Simple Right side checkboxes with <code>.right-checkbox</code> wrapper class.</p>
                                        <fieldset class="right-checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                I am unchecked Checkbox
                                            </label>
                                        </fieldset>
                                        <fieldset class="right-checkbox">
                                            <label>
                                                <input type="checkbox" value="" checked>
                                                I am checked Checkbox
                                            </label>
                                        </fieldset>
                                        <fieldset class="right-checkbox disabled">
                                            <label>
                                                <input type="checkbox" value="" disabled>
                                                I am disabled Checkbox
                                            </label>
                                        </fieldset>
                                        <fieldset class="right-checkbox disabled">
                                            <label>
                                                <input type="checkbox" value="" disabled checked>
                                                I am checked &amp; disabled Checkbox
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Checkbox</h4>
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
                                        <p>Add <code>.custom-input.custom-checkbox</code> as a single wrapper &amp; add
                                            <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code> for better output. Also use
                                            <code>.custom-control-description</code> class for checkbox description.</p>
                                        <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Custom checkbox checked</label>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">Custom checkbox disabled</label>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked name="customCheck4" id="customCheck4"
                                                       disabled>
                                                <label class="custom-control-label" for="fixed-layout">Custom checkbox checked &amp; disabled</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Right Checkbox</h4>
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
                                        <p>Add <code>.custom-input.custom-checkbox</code> as a single wrapper &amp; add
                                            <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code> for better output &amp; wrap with
                                            <code>right-checkbox</code> for right aligned checkbox.</p>
                                        <fieldset class="right-checkbox">
                                            <div class="custom-control custom-checkbox pl-0">
                                                <input type="checkbox" class="custom-control-input" name="customCheckRight" id="customCheckRight1">
                                                <label class="custom-control-label w-100" for="customCheckRight1">Custom checkbox</label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="right-checkbox">
                                            <div class="custom-control custom-checkbox pl-0">
                                                <input type="checkbox" class="custom-control-input" name="customCheckRight" id="customCheckRight2"
                                                       checked>
                                                <label class="custom-control-label w-100" for="customCheckRight2">Custom checkbox checked</label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="right-checkbox disabled">
                                            <div class="custom-control custom-checkbox pl-0">
                                                <input type="checkbox" class="custom-control-input" name="customCheckRight" id="customCheckRight3"
                                                       disabled>
                                                <label class="custom-control-label w-100" for="customCheckRight3">Custom checkbox disabled</label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="right-checkbox disabled">
                                            <div class="custom-control custom-checkbox pl-0">
                                                <input type="checkbox" class="custom-control-input" checked name="customCheckRight"
                                                       id="customCheckRight4" disabled="">
                                                <label class="custom-control-label w-100" for="customCheckRight4">Custom checkbox checked &amp;
                                                    disabled</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Checkbox end -->

                <!-- Basic Radio Buttons start -->
                <section class="basic-radios">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Simple Radio Buttons</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Radio Buttons</h4>
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
                                        <fieldset class="radio">
                                            <label>
                                                <input type="radio" name="radio" value="">
                                                I am unchecked Radio Button
                                            </label>
                                        </fieldset>
                                        <fieldset class="radio">
                                            <label>
                                                <input type="radio" name="radio" value="" checked>
                                                I am checked Radio Button
                                            </label>
                                        </fieldset>
                                        <fieldset class="radio disabled">
                                            <label>
                                                <input type="radio" name="radio" value="" disabled>
                                                I am disabled Radio Button
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Right Radio Buttons</h4>
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
                                        <p>Simple Radio Button with right align using <code>.right-radio</code> class.</p>
                                        <fieldset class="right-radio">
                                            <label>
                                                <input type="radio" name="radio1" value="">
                                                I am unchecked Radio Button
                                            </label>
                                        </fieldset>
                                        <fieldset class="right-radio">
                                            <label>
                                                <input type="radio" name="radio1" value="" checked>
                                                I am checked Radio Button
                                            </label>
                                        </fieldset>
                                        <fieldset class="right-radio disabled">
                                            <label>
                                                <input type="radio" name="radio1" value="" disabled>
                                                I am disabled Radio Button
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Radio Buttons</h4>
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
                                        <p>Add <code>.custom-input.custom-radio</code> as a single wrapper &amp; add
                                            <code>&lt;span class="custom-control-indicator"&gt;&lt;/span&gt;</code> for better output. Also use
                                            <code>.custom-control-description</code> class for radio description.</p>
                                        <fieldset>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="customRadio" id="customRadio1">
                                                <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="customRadio" id="customRadio2" checked>
                                                <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="customRadio" id="customRadio3" disabled>
                                                <label class="custom-control-label" for="customRadio3">Or toggle this other custom radio</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Right Radio Buttons</h4>
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
                                        <p>Add <code>.c-input.c-radio</code> as a single wrapper &amp; add
                                            <code>&lt;span class="c-indicator"&gt;&lt;/span&gt;</code> for better output &amp; wrap with
                                            <code>right-radio</code> for right aligned radio.</p>
                                        <fieldset class="right-radio">
                                            <div class="custom-control custom-radio pl-0">
                                                <input type="radio" class="custom-control-input" name="customRadioRight" id="customRadioRight1">
                                                <label class="custom-control-label w-100" for="customRadioRight1">Toggle this custom radio</label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="right-radio">
                                            <div class="custom-control custom-radio pl-0">
                                                <input type="radio" class="custom-control-input" name="customRadioRight" id="customRadioRight2" checked>
                                                <label class="custom-control-label w-100" for="customRadioRight2">Or toggle this other custom radio</label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="right-radio disabled">
                                            <div class="custom-control custom-radio pl-0">
                                                <input type="radio" class="custom-control-input" name="customRadioRight" id="customRadioRight3"
                                                       disabled>
                                                <label class="custom-control-label w-100" for="customRadioRight3">Or toggle this other custom radio</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Radio Buttons end -->

                <!-- iCheck Checkbox start -->
                <section class="icheck-checkbox">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">iCheck Checkbox</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Skin iCheck</h4>
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
                                        <p>Wrap with <code>.icheck_minimal.skin</code> for this style of checkbox.</p>
                                        <div class="row icheck_minimal skin">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="checkbox" id="input-5">
                                                    <label for="input-5">Checkbox</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-6" checked>
                                                    <label for="input-6">Checkbox Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-7" disabled>
                                                    <label for="input-7">Checkbox Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-8" checked disabled>
                                                    <label for="input-8">Checkbox Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state icheckbox_minimal mr-1"></div>
                                                        <label>Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_minimal hover mr-1"></div>
                                                        <label>Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_minimal checked mr-1"></div>
                                                        <label>Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_minimal disabled mr-1"></div>
                                                        <label>Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_minimal checked disabled mr-1"></div>
                                                        <label>Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <fieldset class="colors clear">
                                                    <strong>Color schemes</strong>
                                                    <ul>
                                                        <li class="active" title="Black"></li>
                                                        <li class="red" title="Red"></li>
                                                        <li class="green" title="Green"></li>
                                                        <li class="blue" title="Blue"></li>
                                                        <li class="aero" title="Aero"></li>
                                                        <li class="grey" title="Grey"></li>
                                                        <li class="orange" title="Orange"></li>
                                                        <li class="yellow" title="Yellow"></li>
                                                        <li class="pink" title="Pink"></li>
                                                        <li class="purple" title="Purple"></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square Skin iCheck</h4>
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
                                        <p>Wrap with <code>.skin.skin-square</code> for square and colored checkbox. Have to do color changes using
                                            JS.</p>
                                        <div class="row skin skin-square">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="checkbox" id="input-11">
                                                    <label for="input-11">Checkbox</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-12" checked>
                                                    <label for="input-12">Checkbox Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-13" disabled>
                                                    <label for="input-13">Checkbox Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-14" checked disabled>
                                                    <label for="input-14">Checkbox Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state icheckbox_square-red mr-1"></div>
                                                        <label>Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_square-red hover mr-1"></div>
                                                        <label>Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_square-red checked mr-1"></div>
                                                        <label>Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_square-red disabled mr-1"></div>
                                                        <label>Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_square-red checked disabled mr-1"></div>
                                                        <label>Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <fieldset class="colors clear">
                                                    <strong>Color schemes</strong>
                                                    <ul>
                                                        <li title="Black"></li>
                                                        <li class="red active" title="Red"></li>
                                                        <li class="green" title="Green"></li>
                                                        <li class="blue" title="Blue"></li>
                                                        <li class="aero" title="Aero"></li>
                                                        <li class="grey" title="Grey"></li>
                                                        <li class="orange" title="Orange"></li>
                                                        <li class="yellow" title="Yellow"></li>
                                                        <li class="pink" title="Pink"></li>
                                                        <li class="purple" title="Purple"></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Flat Skin iCheck</h4>
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
                                        <p>Wrap with <code>.skin.skin-flat</code> for Flat colored checkbox. Have to do color changes using JS.</p>
                                        <div class="row skin skin-flat">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="checkbox" id="input-15">
                                                    <label for="input-15">Checkbox</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-16" checked>
                                                    <label for="input-16">Checkbox Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-17" disabled>
                                                    <label for="input-17">Checkbox Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-18" checked disabled>
                                                    <label for="input-18">Checkbox Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state icheckbox_flat-green mr-1"></div>
                                                        <label>Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_flat-green hover mr-1"></div>
                                                        <label>Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_flat-green checked mr-1"></div>
                                                        <label>Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_flat-green disabled mr-1"></div>
                                                        <label>Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_flat-green checked disabled mr-1"></div>
                                                        <label>Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <fieldset class="colors clear">
                                                    <strong>Color schemes</strong>
                                                    <ul>
                                                        <li title="Black"></li>
                                                        <li class="red" title="Red"></li>
                                                        <li class="green active" title="Green"></li>
                                                        <li class="blue" title="Blue"></li>
                                                        <li class="aero" title="Aero"></li>
                                                        <li class="grey" title="Grey"></li>
                                                        <li class="orange" title="Orange"></li>
                                                        <li class="yellow" title="Yellow"></li>
                                                        <li class="pink" title="Pink"></li>
                                                        <li class="purple" title="Purple"></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Line iCheck Checkbox</h4>
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
                                        <p>Wrap with <code>.skin.skin-line</code> for line checkbox. Have to do color changes using JS.</p>
                                        <div class="row skin skin-line">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="checkbox" id="input-1">
                                                    <label for="input-1">Checkbox</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-2" checked>
                                                    <label for="input-2">Checkbox Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-3" disabled>
                                                    <label for="input-3">Checkbox Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-4" checked disabled>
                                                    <label for="input-4">Checkbox Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state icheckbox_line-blue mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Normal State
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_line-blue hover mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Hover State
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_line-blue checked mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Checked State
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_line-blue disabled mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Disabled State
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_line-blue checked disabled mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Checked &amp; Disabled State
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <fieldset class="colors clear">
                                                    <strong>Color schemes</strong>
                                                    <ul>
                                                        <li title="Black"></li>
                                                        <li class="red" title="Red"></li>
                                                        <li class="green" title="Green"></li>
                                                        <li class="blue active" title="Blue"></li>
                                                        <li class="aero" title="Aero"></li>
                                                        <li class="grey" title="Grey"></li>
                                                        <li class="orange" title="Orange"></li>
                                                        <li class="yellow" title="Yellow"></li>
                                                        <li class="pink" title="Pink"></li>
                                                        <li class="purple" title="Purple"></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card text-white bg-blue-grey bg-darken-4">
                                <div class="card-header">
                                    <h4 class="card-title bg-blue-grey bg-darken-4">Polaris Skin iCheck</h4>
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
                                        <p class="white">Wrap with <code>.skin.skin-polaris</code> for polaris checkbox.</p>
                                        <div class="row skin skin-polaris">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="checkbox" id="input-21">
                                                    <label class="white" for="input-21">Checkbox</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-22" checked>
                                                    <label class="white" for="input-22">Checkbox Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-23" disabled>
                                                    <label class="white" for="input-23">Checkbox Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-24" checked disabled>
                                                    <label class="white" for="input-24">Checkbox Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state icheckbox_polaris mr-1"></div>
                                                        <label class="white">Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_polaris hover mr-1"></div>
                                                        <label class="white">Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_polaris checked mr-1"></div>
                                                        <label class="white">Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_polaris disabled mr-1"></div>
                                                        <label class="white">Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_polaris checked disabled mr-1"></div>
                                                        <label class="white">Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card text-white bg-blue-grey bg-darken-4">
                                <div class="card-header">
                                    <h4 class="card-title bg-blue-grey bg-darken-4">Futurico Skin iCheck</h4>
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
                                        <p class="white">Wrap with <code>.skin.skin-futurico</code> for futurico checkbox.</p>
                                        <div class="row skin skin-futurico">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="checkbox" id="input-25">
                                                    <label class="white" for="input-25">Checkbox</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-26" checked>
                                                    <label class="white" for="input-26">Checkbox Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-27" disabled>
                                                    <label class="white" for="input-27">Checkbox Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="input-28" checked disabled>
                                                    <label class="white" for="input-28">Checkbox Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state icheckbox_futurico mr-1"></div>
                                                        <label class="white">Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_futurico hover mr-1"></div>
                                                        <label class="white">Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_futurico checked mr-1"></div>
                                                        <label class="white">Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_futurico disabled mr-1"></div>
                                                        <label class="white">Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state icheckbox_futurico checked disabled mr-1"></div>
                                                        <label class="white">Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- iCheck Checkbox end -->

                <!-- iCheck Radio start -->
                <section class="icheck-radio">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">iCheck Radio Buttons</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Minimal iCheck Radio Option</h4>
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
                                        <p>Wrap with <code>.icheck_minimal</code> with <code>.skin</code> to use another icheck radio style.</p>
                                        <div class="row icheck_minimal skin">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="input-radio-2" id="input-radio-5">
                                                    <label for="input-radio-5">Radio Button</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-2" id="input-radio-6" checked>
                                                    <label for="input-radio-6">Radio Button Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-2" id="input-radio-7" disabled>
                                                    <label for="input-radio-7">Radio Button Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" id="input-radio-8" checked disabled>
                                                    <label for="input-radio-8">Radio Button Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state iradio_minimal mr-1"></div>
                                                        <label>Normal State</label>

                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_minimal hover mr-1"></div>
                                                        <label>Hover State</label>

                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_minimal checked mr-1"></div>
                                                        <label>Checked State</label>

                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_minimal disabled mr-1"></div>
                                                        <label>Disabled State</label>

                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_minimal checked disabled mr-1"></div>
                                                        <label>Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <fieldset class="colors clear">
                                                    <strong>Color schemes</strong>
                                                    <ul>
                                                        <li class="active" title="Black"></li>
                                                        <li class="red" title="Red"></li>
                                                        <li class="green" title="Green"></li>
                                                        <li class="blue" title="Blue"></li>
                                                        <li class="aero" title="Aero"></li>
                                                        <li class="grey" title="Grey"></li>
                                                        <li class="orange" title="Orange"></li>
                                                        <li class="yellow" title="Yellow"></li>
                                                        <li class="pink" title="Pink"></li>
                                                        <li class="purple" title="Purple"></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Filled Skin iCheck Radio</h4>
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
                                        <p>Wrap with <code>.skin.skin-square</code> for square and colored radio. Have to do color changes using JS.
                                        </p>
                                        <div class="row skin skin-square">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="input-radio-3" id="input-radio-11">
                                                    <label for="input-radio-11">Radio Button</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-3" id="input-radio-12" checked>
                                                    <label for="input-radio-12">Radio Button Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-3" id="input-radio-13" disabled>
                                                    <label for="input-radio-13">Radio Button Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" id="input-radio-14" checked disabled>
                                                    <label for="input-radio-14">Radio Button Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state iradio_square-red mr-1"></div>
                                                        <label>Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_square-red hover mr-1"></div>
                                                        <label>Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_square-red checked mr-1"></div>
                                                        <label>Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_square-red disabled mr-1"></div>
                                                        <label>Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_square-red checked disabled mr-1"></div>
                                                        <label>Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <fieldset class="colors clear">
                                                    <strong>Color schemes</strong>
                                                    <ul>
                                                        <li title="Black"></li>
                                                        <li class="red active" title="Red"></li>
                                                        <li class="green" title="Green"></li>
                                                        <li class="blue" title="Blue"></li>
                                                        <li class="aero" title="Aero"></li>
                                                        <li class="grey" title="Grey"></li>
                                                        <li class="orange" title="Orange"></li>
                                                        <li class="yellow" title="Yellow"></li>
                                                        <li class="pink" title="Pink"></li>
                                                        <li class="purple" title="Purple"></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Flat Skin iCheck Radio</h4>
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
                                        <p>Wrap with <code>.skin.skin-flat</code> for Flat colored radio. Have to do color changes using JS.</p>
                                        <div class="row skin skin-flat">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="input-radio-4" id="input-radio-15">
                                                    <label for="input-radio-15">Radio Button</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-4" id="input-radio-16" checked>
                                                    <label for="input-radio-16">Radio Button Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-4" id="input-radio-17" disabled>
                                                    <label for="input-radio-17">Radio Button Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" id="input-radio-18" checked disabled>
                                                    <label for="input-radio-18">Radio Button Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state iradio_flat-green mr-1"></div>
                                                        <label>Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_flat-green hover mr-1"></div>
                                                        <label>Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_flat-green checked mr-1"></div>
                                                        <label>Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_flat-green disabled mr-1"></div>
                                                        <label>Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_flat-green checked disabled mr-1"></div>
                                                        <label>Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <fieldset class="colors clear">
                                                    <strong>Color schemes</strong>
                                                    <ul>
                                                        <li title="Black"></li>
                                                        <li class="red" title="Red"></li>
                                                        <li class="green active" title="Green"></li>
                                                        <li class="blue" title="Blue"></li>
                                                        <li class="aero" title="Aero"></li>
                                                        <li class="grey" title="Grey"></li>
                                                        <li class="orange" title="Orange"></li>
                                                        <li class="yellow" title="Yellow"></li>
                                                        <li class="pink" title="Pink"></li>
                                                        <li class="purple" title="Purple"></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Line iCheck Radio</h4>
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
                                        <p>Wrap with <code>.skin.skin-line</code> for line Radio. Have to do color changes using JS.</p>
                                        <div class="row skin skin-line">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="input-radio-1" id="input-radio-1">
                                                    <label for="input-radio-1">Radio Button</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-1" id="input-radio-2" checked>
                                                    <label for="input-radio-2">Radio Button Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" id="input-radio-3" disabled>
                                                    <label for="input-radio-3">Radio Button Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" id="input-radio-4" checked disabled>
                                                    <label for="input-radio-4">Radio Button Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state iradio_line-blue mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Normal State
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_line-blue hover mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Hover State
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_line-blue checked mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Checked State
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_line-blue disabled mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Disabled State
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_line-blue checked disabled mr-1">
                                                            <div class="icheck_line-icon"></div>
                                                            Checked &amp; Disabled State
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <fieldset class="colors clear">
                                                    <strong>Color schemes</strong>
                                                    <ul>
                                                        <li title="Black"></li>
                                                        <li class="red" title="Red"></li>
                                                        <li class="green" title="Green"></li>
                                                        <li class="blue active" title="Blue"></li>
                                                        <li class="aero" title="Aero"></li>
                                                        <li class="grey" title="Grey"></li>
                                                        <li class="orange" title="Orange"></li>
                                                        <li class="yellow" title="Yellow"></li>
                                                        <li class="pink" title="Pink"></li>
                                                        <li class="purple" title="Purple"></li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card text-white bg-blue-grey bg-darken-4">
                                <div class="card-header">
                                    <h4 class="card-title bg-blue-grey bg-darken-4">Polaris Skin iCheck Radio</h4>
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
                                        <p class="white">Wrap with <code>.skin.skin-polaris</code> for polaris radio.</p>
                                        <div class="row skin skin-polaris">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="input-radio-5" id="input-radio-21">
                                                    <label class="white" for="input-radio-21">Radio Button</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-5" id="input-radio-22" checked>
                                                    <label class="white" for="input-radio-22">Radio Button Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-5" id="input-radio-23" disabled>
                                                    <label class="white" for="input-radio-23">Radio Button Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" id="input-radio-24" checked disabled>
                                                    <label class="white" for="input-radio-24">Radio Button Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state iradio_polaris mr-1"></div>
                                                        <label class="white">Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_polaris hover mr-1"></div>
                                                        <label class="white">Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_polaris checked mr-1"></div>
                                                        <label class="white">Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_polaris disabled mr-1"></div>
                                                        <label class="white">Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_polaris checked disabled mr-1"></div>
                                                        <label class="white">Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card text-white bg-blue-grey bg-darken-4">
                                <div class="card-header">
                                    <h4 class="card-title bg-blue-grey bg-darken-4">Futurico Skin iCheck Radio</h4>
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
                                        <p class="white">Wrap with <code>.skin.skin-futurico</code> for futurico radio.</p>
                                        <div class="row skin skin-futurico">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="input-radio-6" id="input-radio-25">
                                                    <label class="white" for="input-radio-25">Radio Button</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-6" id="input-radio-26" checked>
                                                    <label class="white" for="input-radio-26">Radio Button Checked</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" name="input-radio-6" id="input-radio-27" disabled>
                                                    <label class="white" for="input-radio-27">Radio Button Disabled</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="radio" id="input-radio-28" checked disabled>
                                                    <label class="white" for="input-radio-28">Radio Button Checked &amp; Disabled</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="skin-states">
                                                    <fieldset>
                                                        <div class="state iradio_futurico mr-1"></div>
                                                        <label class="white">Normal State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_futurico hover mr-1"></div>
                                                        <label class="white">Hover State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_futurico checked mr-1"></div>
                                                        <label class="white">Checked State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_futurico disabled mr-1"></div>
                                                        <label class="white">Disabled State</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="state iradio_futurico checked disabled mr-1"></div>
                                                        <label class="white">Checked &amp; Disabled State</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- iCheck Radio end -->

                <!-- Color Checkboxes start -->
                <section class="input-type-options">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Color Checkboxes</h4>
                            <p>Add <code>.bg-COLOR</code> to span to set according to theme color.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Template Color Checkbox</h4>
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
                                        <fieldset>
                                            <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                <input type="checkbox" class="custom-control-input bg-primary" name="colorCheck" id="colorCheck1">
                                                <label class="custom-control-label" for="colorCheck1">Primary Checkbox</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                <input type="checkbox" class="custom-control-input bg-success" name="colorCheck" id="colorCheck2"
                                                       checked>
                                                <label class="custom-control-label" for="colorCheck2">Success Checkbox</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                <input type="checkbox" class="custom-control-input bg-danger" name="colorCheck" id="colorCheck3">
                                                <label class="custom-control-label" for="colorCheck3">Danger Checkbox</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Another Template color checkbox example</h4>
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
                                        <fieldset>
                                            <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                <input type="checkbox" class="custom-control-input bg-info" name="colorCheck" id="colorCheck4" checked>
                                                <label class="custom-control-label" for="colorCheck4">Information Checkbox</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                <input type="checkbox" class="custom-control-input bg-warning" name="colorCheck" id="colorCheck5">
                                                <label class="custom-control-label" for="colorCheck5">Warning Checkbox</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                <input type="checkbox" class="custom-control-input bg-purple" name="colorCheck" id="colorCheck6">
                                                <label class="custom-control-label" for="colorCheck6">Custom color purple</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Color Checkboxes end -->

                <!-- Color Radio start -->
                <section class="color-radio">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Custom Bootstrap Color Radio Buttons</h4>
                            <p>Add <code>.bg-COLOR</code> to span to set according to theme color.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Template color Radio Button</h4>
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
                                        <fieldset>
                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                <input type="radio" class="custom-control-input bg-primary" name="colorRadio" id="colorRadio1">
                                                <label class="custom-control-label" for="colorRadio1">Primary Radio</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                <input type="radio" class="custom-control-input bg-success" name="colorRadio" id="colorRadio2">
                                                <label class="custom-control-label" for="colorRadio2">Success Radio</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                <input type="radio" class="custom-control-input bg-danger" name="colorRadio" id="colorRadio3">
                                                <label class="custom-control-label" for="colorRadio3">Danger Radio</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Another Template color Radio example</h4>
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
                                        <fieldset>
                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                <input type="radio" class="custom-control-input bg-info" name="colorRadio" id="colorRadio4">
                                                <label class="custom-control-label" for="colorRadio4">Information Radiobox</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                <input type="radio" class="custom-control-input bg-warning" checked name="colorRadio" id="colorRadio5">
                                                <label class="custom-control-label" for="colorRadio5">Warning Radiobox</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                <input type="radio" class="custom-control-input bg-pink" name="colorRadio" id="colorRadio6">
                                                <label class="custom-control-label" for="colorRadio6">Custom color pink</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Color Radio end -->

                <!-- Inline Checkbox start -->
                <section class="inline-checkbox">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Inline Checkboxes</h4>
                            <p>Add <code>.inline</code> class to the checkbox wrapper for inline checkbox.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Inline Checkboxes</h4>
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
                                        <div class="d-inline-block custom-control custom-checkbox mr-1">
                                            <input type="checkbox" class="custom-control-input" name="colorCheck" id="checkbox1">
                                            <label class="custom-control-label" for="checkbox1">Unchecked custom checkbox</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-checkbox mr-1">
                                            <input type="checkbox" class="custom-control-input" name="colorCheck" checked id="checkbox2">
                                            <label class="custom-control-label" for="checkbox2">Checked custom checkbox</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-checkbox mr-1">
                                            <input type="checkbox" class="custom-control-input" name="colorCheck" id="checkbox3" disabled>
                                            <label class="custom-control-label" for="checkbox3">Disabled custom checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inline Checkbox end -->

                <!-- Inline Radio start -->
                <section class="inline-radio">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Inline Radio Buttons</h4>
                            <p>Add <code>.inline</code> class to the radio wrapper.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Inline Radio</h4>
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
                                        <div class="d-inline-block custom-control custom-radio mr-1">
                                            <input type="radio" class="custom-control-input" name="colorRadio" id="radio1">
                                            <label class="custom-control-label" for="radio1">Unchecked custom radio</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-radio mr-1">
                                            <input type="radio" class="custom-control-input" name="colorRadio" id="radio2" checked>
                                            <label class="custom-control-label" for="radio2">Checked custom radio</label>
                                        </div>
                                        <div class="d-inline-block custom-control custom-radio mr-1">
                                            <input type="radio" class="custom-control-input" name="colorRadio" id="radio3" disabled>
                                            <label class="custom-control-label" for="radio3">Disabled custom radio</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inline Radio end -->

                <!-- Start Of Bootstrap Switches-->

                <section id="bootstrap-switch">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Switches</h4>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Switch</h4>
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
                                        <p>Use class <code>.custom-switch</code> for Custom Switch</p>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                            <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Inline Switch</h4>
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
                                        <p>Use class <code>.custom-control-inline</code> for Inline Custom Switch</p>
                                        <div class="custom-control-inline custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch10" checked>
                                            <label class="custom-control-label" for="customSwitch10">Toggle this switch element</label>
                                        </div>
                                        <div class="custom-control-inline custom-switch">
                                            <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2">Disabled Inline switch element</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Bootstrap Switches -->
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
    <script src="{{asset('admin-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/forms/checkbox-radio.min.js')}}"></script>
    <!-- END: Page JS-->
@endsection
