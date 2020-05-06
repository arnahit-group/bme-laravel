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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/timeline.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/timeline.min.css')}}">
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
                    <h3 class="content-header-title mb-0">ChangeLog</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Change log
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
            <div class="content-body">
                <section id="changelog">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 id="v31" class="card-title">Version 3.2</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="ft-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="ft-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <h5 class="my-2">11-03-2019 [3.2]</h5>
                                        <h6>HTML Version</h6>
                                        <ul>
                                            <li>Added : New app ToDo</li>
                                            <li>Added : New app Contact</li>
                                            <li>Added : New Bootstrap components toaster, spinner & custom switch</li>
                                            <li>Updated : Template update & migration steps in documentation</li>
                                            <li>Updated : Bootstrap v4.3.1</li>
                                            <li>Updated : js/css plugins/libraries</li>
                                            <li>Updated : Made chat & email app workable</li>
                                            <li>Updated : Gradient color palette support to all app</li>
                                            <li>Updated : Folder structure, Style & Color Customization and JS usage in documentation</li>
                                            <li>Fixed: Coming soon counter</li>
                                            <li>Fixed: Menu expands & collapsed effect in md and sm screen while loading the app.</li>
                                            <li>Fixed: Fullcalender multi language support.</li>
                                            <li>Removed: Angular Starter-kit.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Version 3.1</h4>
                                    <p>Date : [20-11-2018]</p>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="ft-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="ft-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <ul>
                                            <li>Updated : Bootstrap v4.1.3</li>
                                            <li>Updated : js/css plugins/libraries</li>
                                            <li>Updated : Starter Kit</li>
                                            <li>Updated : Documentation</li>
                                            <li>Removed : Grunt Task Runner</li>
                                            <li>Removed : Pug Template Builder</li>
                                            <li>Fixed : Chart JS IE issue</li>
                                            <li>Fixed : Fullcalendar for Mobile View</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Version 3.0</h4>
                                    <p>Date : [14-03-2018]</p>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="ft-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="ft-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <ul>
                                            <li>Added : Dynamic assets and admin-assets path for pug</li>
                                            <li>Updated : Updated to Bootstrap 4 stable</li>
                                            <li>Updated : Converted all Jade files to Pug</li>
                                            <li>Updated : Grunt and Gulp packages</li>
                                            <li>Updated : Angular package updated to its latest version(v5.2.8)</li>
                                            <li>Updated : ng-bootstrap package updated to its latest version(v1.0.1)</li>
                                            <li>Updated : other package updated to its latest versions</li>
                                            <li>Updated : Angular 5 Starter kit updated to Bootstrap 4 stable</li>
                                            <li>Updated Documentation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Version 2.1</h4>
                                    <p>Date : [24-11-2017]</p>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="ft-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="ft-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <ul>
                                            <li>Added : Dual Listbox</li>
                                            <li>Fixed : Starter Kit card reload button click event error</li>
                                            <li>Fixed : Horizontal layout, align footer to center align</li>
                                            <li>Fixed : Horizontal layout, removed top padding for small screen</li>
                                            <li>Fixed : In RTL, mega menu contact form check button align</li>
                                            <li>Fixed : In RTL, Collapse menu icon alignment fixed</li>
                                            <li>Updated : Improved menu collapse/expand animation</li>
                                            <li>Updated Documentation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Version 2.0</h4>
                                    <p>Date : [18-11-2017]</p>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="ft-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="ft-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                Updated to Bootstrap 4 Beta (v4.0.0-beta.2)
                                                <ul>
                                                    <li>
                                                        Replaced below classes
                                                        <ul>
                                                            <li>card-body to card-content</li>
                                                            <li>card-block to card-body</li>
                                                            <li>bg-inverse to bg-dark</li>
                                                            <li>card-inverse to text-white</li>
                                                            <li>card-outline-* to border-*</li>
                                                            <li>card-(color) to bg-(color) Color = primary,success, danger, info, warning only</li>
                                                            <li>hidden-xs-down to d-none d-sm-block</li>
                                                            <li>hidden-sm-down to d-none d-md-block</li>
                                                            <li>hidden-md-down to d-none d-lg-block</li>
                                                            <li>hidden-lg-down to d-none d-xl-block</li>
                                                            <li>hidden-sm-up to d-sm-none</li>
                                                            <li>hidden-md-up to d-md-none</li>
                                                            <li>hidden-lg-up to d-lg-none</li>
                                                            <li>offset-*-* to ml-auto</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Added : Square and Round buttons in components</li>
                                            <li>Added : popper js</li>
                                            <li>Updated : jQuery to latest version</li>
                                            <li>Updated : Bootstrap js</li>
                                            <li>Updated : chartJS</li>
                                            <li>Updated : chartist</li>
                                            <li>Updated : DataTables</li>
                                            <li>Updated : Sweet alert plugin</li>
                                            <li>Updated : Ratings plugin</li>
                                            <li>Updated : Noui slider</li>
                                            <li>Updated : Dropzone file uploader</li>
                                            <li>Updated : Image cropper</li>
                                            <li>Updated : Documentation</li>
                                            <li>Updated : jquery.twbspagination js</li>
                                            <li>Updated : imagesloaded.pkgd js</li>
                                            <li>Updated : video js &amp; css</li>
                                            <li>Updated : bootstrap-maxlength</li>
                                            <li>Updated : jquery.repeater js</li>
                                            <li>Updated : Select2 js</li>
                                            <li>Updated : jquery validation js</li>
                                            <li>Updated : masonry.pkgd js</li>
                                            <li>Updated : photo-swipe</li>
                                            <li>Updated : daterangepicker js</li>
                                            <li>Updated : bootstrap-datetimepicker js &amp; css</li>
                                            <li>Updated : moment-with-locales js</li>
                                            <li>Updated : animate css</li>
                                            <li>Fixed : Email & Chat application issue on horizontal layouts</li>
                                            <li>Removed : tether js</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Version 1.1</h4>
                                    <p>Date : [18-08-2017]</p>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="ft-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="ft-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <ul>
                                            <li>Added : Modern vertical menu template</li>
                                            <li>Added : Chat application page</li>
                                            <li>Added : Email application page</li>
                                            <li>Added : New cards & widgets</li>
                                            <li>
                                                Added : New components
                                                <ul>
                                                    <li>File Uploader</li>
                                                    <li>Image Cropper</li>
                                                    <li>Form Repeater</li>
                                                </ul>
                                            </li>
                                            <li>Added : New Feather Icons</li>
                                            <li>Added : Starter Kit with Modern menu</li>
                                            <li>Added : Set vertical menu to compact by default</li>
                                            <li>Added : Videos to documentation</li>
                                            <li>Updated Documentation</li>
                                            <li>Fixed : Horizontal timeline</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Initial Release</h4>
                                    <p>Date : [09-06-2017]</p>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="ft-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="ft-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <h5>Founded in June 2017</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
