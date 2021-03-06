@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/sweetalert.css')}}">
    <!-- END: Vendor CSS-->

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
                    <h3 class="content-header-title mb-0">Sweet Alerts</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="ex-component-sweet-alerts.html#">Extra Components</a>
                                </li>
                                <li class="breadcrumb-item active">Sweet Alerts
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
            <div class="content-body"><!-- Basic example section start -->
                <section id="basic-examples">

                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Basic Examples</h4>
                            <p>SweetAlert automatically centers itself on the page and looks great no matter if you're using a desktop computer, mobile or tablet. It's even highly
                                customizable, as you can see below!</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-4 col-sm-12">
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="basic-alert">Basic</button>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="with-title">With Title</button>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="html-alert">HTML</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic example section end -->

                <!-- Types section start -->
                <section id="types">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Types</h4>
                            <p>The type of the modal. SweetAlert comes with 4 built-in types which will show a corresponding icon animation: "warning", "error", "success" and
                                "info". You can also set it as "input" to get a prompt modal. It can either be put in the object under the key "icon" or passed as the third
                                parameter of the function.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-6 col-sm-12">
                                        <button type="button" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-success">Success</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <button type="button" class="btn btn-lg btn-block btn-outline-info mb-2" id="type-info">Info</button>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-6 col-sm-12">
                                        <button type="button" class="btn btn-lg btn-block btn-outline-warning mb-2" id="type-warning">Warning</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <button type="button" class="btn btn-lg btn-block btn-outline-danger mb-2" id="type-error">Error</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Types section end -->


                <!-- Options section start -->
                <section id="options">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Options</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-4 col-sm-12">
                                        <h5>Custom Icon</h5>
                                        <p><code>icon</code> is used to add a customized icon for the modal. Should contain a string with the path to the image.</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="custom-icon">Custom Icon</button>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <h5>Auto Close Timer</h5>
                                        <p>A message with auto close timer. <code>timer</code> is default set to <code>null</code>. You can set timer in ms (milliseconds).</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="auto-close">Auto Close</button>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <h5>Close on click outside</h5>
                                        <p>If <code>closeOnClickOutside</code> is set to <code>true</code>, the user can dismiss the modal by clicking outside it.</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="outside-click">Click Outside</button>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-4 col-sm-12">
                                        <h5>Show Cancel Button</h5>
                                        <p>You can set <code>buttons: true</code> to show both buttons, or <code>buttons: false</code> to hide all buttons. By default, only the
                                            confirm button is shown.</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="cancel-button">Cancel Button</button>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <h5>Prompt Function</h5>
                                        <p>A replacement for the "prompt" function. You can set <code>content</code> as "input" to get a prompt modal.</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="prompt-function">Prompt</button>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <h5>Ajax Request</h5>
                                        <p>Search for a movie. e.g. "La La Land" to view the AJAX request for example.</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="ajax-request">Ajax</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Options section end -->

                <!-- Confirm option section start -->
                <section id="confirm-option">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Confirm Options</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-6 col-sm-12">
                                        <h5>Confirm Button Text</h5>
                                        <p>Use this to change the text on the "Confirm"-button. If <code>showCancelButton</code> is set as <code>true</code>, the confirm button
                                            will automatically show "Confirm" instead of "OK".</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-text">Confirm Text</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h5>Confirm Button Color</h5>
                                        <p>Use <code>className: "btn-warning"</code> option to change the background color of the "Confirm"-button.</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-color">Confirm Button Color</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Confirm option section end -->
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
    <script src="{{asset('admin-assets/vendors/js/extensions/sweetalert.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/extensions/sweet-alerts.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
