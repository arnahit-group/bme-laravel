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
                    <h3 class="content-header-title mb-0">Toast</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-bs-toast.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">toasts
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
            <div class="content-body"><!-- Start of Bootstrap Toasts -->

                <section id="bootstrap-toasts">
                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Toast</h4>
                                    <p class="mt-1">
                                        Toasts are as flexible as you need and have very little required markup. At a minimum, we
                                        require a single element to contain your “toasted” content and strongly encourage a dismiss
                                        button.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="btn btn-outline-primary toast-toggler">Toast</div>
                                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                                        <div class="toast-header">
                                            <img src="{{asset('admin-assets/images/ico/favicon-32.png')}}" class="rounded mr-2"
                                                 alt="Toast image">
                                            <strong class="mr-auto">Stack Admin</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                    <div class="toast-bs-container">
                                        <div class="toast-position">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Translucent</h4>
                                    <p class="mt-1">Toasts are slightly translucent, too, so they blend over whatever they might appear
                                        over. For browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the
                                        elements under a toast.</p>
                                </div>
                                <div class="card-block bg-dark">
                                    <div class="card-body">
                                        <!-- <div class="btn btn-outline-primary toast-toggler">Toast</div> -->
                                        <div class="toast toast-wrapper toast-translucent" role="toast" aria-live="assertive"
                                             aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="{{asset('admin-assets/images/ico/favicon-32.png')}}" class="rounded mr-2"
                                                     alt="Toast image">
                                                <strong class="mr-auto">Stack Admin</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Stacking</h4>
                                    <p class="mt-1">When you have multiple toasts, we default to vertically stacking them in a readable
                                        manner.</p>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <div class="btn btn-outline-primary toast-toggler">Auto Hide Off</div>
                                        <div class="toast" role="toast" aria-live="assertive" aria-atomic="true" data-autohide="false">
                                            <div class="toast-header">
                                                <img src="{{asset('admin-assets/images/ico/favicon-32.png')}}" class="rounded mr-2"
                                                     alt="Toast Image">
                                                <strong class="mr-auto">Stack Admin</strong>
                                                <small class="text-muted">just now</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                See? Just like this.
                                            </div>
                                        </div>
                                        <div class="btn btn-outline-success toast-toggler">Toast</div>
                                        <div class="toast" role="toast" aria-live="assertive" aria-atomic="true" data-delay="5000">
                                            <div class="toast-header">
                                                <img src="{{asset('admin-assets/images/ico/favicon-32.png')}}" class="rounded mr-2"
                                                     alt="Toast Image">
                                                <strong class="mr-auto">Stack Admin</strong>
                                                <small class="text-muted">2 seconds ago</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Heads up, toasts will stack automatically
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="title">Placement</h4>
                                    <p class="mt-1">You can place toasts with custom CSS as you need them, put the positioning styles
                                        right on the <code>.toast</code>.
                                        or You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.
                                    </p>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <div class="btn btn-outline-info placement">Toast Placement</div>
                                        <div class="toast" role="toast" aria-live="assertive" aria-atomic="true" data-delay="5000">
                                            <div class="toast-header">
                                                <img src="{{asset('admin-assets/images/ico/favicon-32.png')}}" class="rounded mr-2"
                                                     alt="Toast Image">
                                                <strong class="mr-auto">Stack Admin</strong>
                                                <small class="text-muted">2 seconds ago</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Heads up, toasts will stack automatically
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Bootstrap Toasts -->
                <div aria-live="polite" aria-atomic="true" class="toast-placement d-flex justify-content-center align-items-center"
                     data-autohide="false">
                    <div class="toast" role="toast" aria-live="assertive" aria-atomic="true" data-autohide="false">
                        <div class="toast-header">
                            <img src="{{asset('admin-assets/images/ico/favicon-32.png')}}" class="rounded mr-2" alt="Toast Image">
                            <strong class="mr-auto">Stack Admin</strong>
                            <small>1 mins ago</small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                    </div>
                </div>
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
    <script src="{{asset('admin-assets/js/scripts/pages/bootstrap-toast.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection

