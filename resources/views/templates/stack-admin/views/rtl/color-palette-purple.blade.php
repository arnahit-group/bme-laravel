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
                    <h3 class="content-header-title mb-0">Purple Color Page</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="color-palette-purple.html#">Color System</a>
                                </li>
                                <li class="breadcrumb-item active">Purple Palette
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
            <div class="content-body"><!-- Background color start -->
                <section id="backColor">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Purple Background Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-1 text-white bg-purple">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="white mb-0"><strong>Purple Color</strong></p>
                                            <p class="card-title">.bg-purple</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title">
                                                <small class="float-right">#9C27B0</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="bg-purple bg-lighten-1 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Lighten 1</strong>
                                        <small class="text-muted float-right">#AB47BC</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-lighten-1</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-lighten-2 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Lighten 2</strong>
                                        <small class="text-muted float-right">#BA68C8</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-lighten-2</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-lighten-3 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Lighten 3</strong>
                                        <small class="text-muted float-right">#CE93D8</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-lighten-3</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-lighten-4 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Lighten 4</strong>
                                        <small class="text-muted float-right">#E1BEE7</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-lighten-4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="bg-purple bg-darken-1 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Darken 1</strong>
                                        <small class="text-muted float-right">#8E24AA</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-darken-1</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-darken-2 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Darken 2</strong>
                                        <small class="text-muted float-right">#7B1FA2</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-darken-2</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-darken-3 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Darken 3</strong>
                                        <small class="text-muted float-right">#6A1B9A</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-darken-3</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-darken-4 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Darken 4</strong>
                                        <small class="text-muted float-right">#4A148C</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-darken-4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="bg-purple bg-accent-1 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Accent 1</strong>
                                        <small class="text-muted float-right">#EA80FC</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-accent-1</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-accent-2 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Accent 2</strong>
                                        <small class="text-muted float-right">#E040FB</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-accent-2</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-accent-3 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Accent 3</strong>
                                        <small class="text-muted float-right">#D500F9</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-accent-3</p>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="bg-purple bg-accent-4 height-50"></div>
                                <div class="p-1">
                                    <p class="mb-0"><strong>Purple Accent 4</strong>
                                        <small class="text-muted float-right">#DD00FF</small>
                                    </p>
                                    <p class="mb-0">.bg-purple.bg-accent-4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title">Purple Palette Classes</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="mt-1">Purple color palette contains 13 colors: 1 main purple color and 4 lighten colors, 4 darken colors and 4 Accent colors. All
                                            colors works perfectly with any bootstrap components, form components or any stack controls, that makes Stack very effective, flexible
                                            and configurable.</p>
                                        <p class="mt-1"><strong>Please note:</strong> You can use .bg-purple and .btn-purple as main colors, but if you want to use lighten, darken
                                            or accent colors, use bg-* bg-lighten-NUMBER for lighten color, bg-* bg-darken-NUMBER for darken color and bg-* bg-accent-NUMBER for
                                            accent colors.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordepurple">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.bg-purple</code></td>
                                                            <td>Purple Class for background color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-purple</code><br><code>.bg-lighten-*</code></td>
                                                            <td>For <code>lighten</code> purple background color, this two classes needed. Here *: 1,2,3,4 lighten purple color
                                                                options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-purple</code><br><code>.bg-darken-*</code></td>
                                                            <td>For <code>darken</code> purple background color, this two classes needed. Here *: 1,2,3,4 darken purple color
                                                                options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-purple</code><br><code>.bg-accent-*</code></td>
                                                            <td>For <code>accent</code> purple background color, this two classes needed. Here *: 1,2,3,4 accent purple color
                                                                options.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Background color end -->

                <!-- Border color start -->
                <section id="borderColor">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Purple Border Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-1 border-purple">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="mb-0"><strong>Purple Color</strong></p>
                                            <p class="card-title">.border-purple</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title">
                                                <small class="float-right">#9C27B0</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-1 border-purple border-lighten-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Lighten 1</strong>
                                            <small class="text-muted float-right">#AB47BC</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-lighten-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-lighten-2">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Lighten 2</strong>
                                            <small class="text-muted float-right">#BA68C8</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-lighten-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-lighten-3">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Lighten 3</strong>
                                            <small class="text-muted float-right">#CE93D8</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-lighten-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-lighten-4">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Lighten 4</strong>
                                            <small class="text-muted float-right">#E1BEE7</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-lighten-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1 border-purple border-darken-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Darken 1</strong>
                                            <small class="text-muted float-right">#8E24AA</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-darken-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-darken-2">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Darken 2</strong>
                                            <small class="text-muted float-right">#7B1FA2</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-darken-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-darken-3">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Darken 3</strong>
                                            <small class="text-muted float-right">#6A1B9A</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-darken-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-darken-4">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Darken 4</strong>
                                            <small class="text-muted float-right">#4A148C</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-darken-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1 border-purple border-accent-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Accent 1</strong>
                                            <small class="text-muted float-right">#EA80FC</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-accent-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-accent-2">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Accent 2</strong>
                                            <small class="text-muted float-right">#E040FB</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-accent-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-accent-3">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Accent 3</strong>
                                            <small class="text-muted float-right">#D500F9</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-accent-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-purple border-accent-4">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Accent 4</strong>
                                            <small class="text-muted float-right">#DD00FF</small>
                                        </p>
                                        <p class="mb-0">.border-purple.border-accent-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Purple Border Classes</h4>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordepurple">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.border-purple</code></td>
                                                            <td>Purple Class for background color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-purple</code><br><code>.border-lighten-*</code></td>
                                                            <td>For lighten purple background color, this two classes needed. Here *: 1,2,3,4 lighten purple color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-purple</code><br><code>.border-top-lighten-*</code></td>
                                                            <td>For lighten purple <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-purple</code><br><code>.border-bottom-lighten-*</code></td>
                                                            <td>For lighten purple <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-purple</code><br><code>.border-right-lighten-*</code></td>
                                                            <td>For lighten purple <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-purple</code><br><code>.border-left-lighten-*</code></td>
                                                            <td>For lighten purple <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-purple</code><br><code>.border-darken-*</code></td>
                                                            <td>For darken purple background color, this two classes needed. Here *: 1,2,3,4 darken purple color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-purple</code><br><code>.border-top-darken-*</code></td>
                                                            <td>For darken purple <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-purple</code><br><code>.border-bottom-darken-*</code></td>
                                                            <td>For darken purple <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-purple</code><br><code>.border-right-darken-*</code></td>
                                                            <td>For darken purple <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-purple</code><br><code>.border-left-darken-*</code></td>
                                                            <td>For darken purple <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-purple</code><br><code>.border-accent-*</code></td>
                                                            <td>For accent purple background color, this two classes needed. Here *: 1,2,3,4 accent purple color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-purple</code><br><code>.border-top-accent-*</code></td>
                                                            <td>For accent purple <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-purple</code><br><code>.border-bottom-accent-*</code></td>
                                                            <td>For accent purple <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-purple</code><br><code>.border-right-accent-*</code></td>
                                                            <td>For accent purple <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-purple</code><br><code>.border-left-accent-*</code></td>
                                                            <td>For accent purple <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Border color end -->

                <!-- Text color start -->
                <section id="textColor">
                    <div class="row">
                        <div class="col-md-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Purple Text Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-1">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="mb-0"><strong>Purple Color</strong></p>
                                            <p class="card-title">.purple</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title mb-0 purple">
                                                <small class="float-right">#9C27B0</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Lighten 1</strong>
                                            <small class="text-muted float-right purple">#AB47BC</small>
                                        </p>
                                        <p class="mb-0">.purple.lighten-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Lighten 2</strong>
                                            <small class="text-muted float-right purple lighten-2">#BA68C8</small>
                                        </p>
                                        <p class="mb-0">.purple.lighten-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Lighten 3</strong>
                                            <small class="text-muted float-right purple lighten-3">#CE93D8</small>
                                        </p>
                                        <p class="mb-0">.purple.lighten-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Lighten 4</strong>
                                            <small class="text-muted float-right purple lighten-4">#E1BEE7</small>
                                        </p>
                                        <p class="mb-0">.purple.lighten-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Darken 1</strong>
                                            <small class="text-muted float-right purple darken-1">#8E24AA</small>
                                        </p>
                                        <p class="mb-0">.purple.darken-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Darken 2</strong>
                                            <small class="text-muted float-right purple darken-2">#7B1FA2</small>
                                        </p>
                                        <p class="mb-0">.purple.darken-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Darken 3</strong>
                                            <small class="text-muted float-right purple darken-3">#6A1B9A</small>
                                        </p>
                                        <p class="mb-0">.purple.darken-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Darken 4</strong>
                                            <small class="text-muted float-right purple darken-4">#4A148C</small>
                                        </p>
                                        <p class="mb-0">.purple.darken-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Accent 1</strong>
                                            <small class="text-muted float-right purple accent-1">#EA80FC</small>
                                        </p>
                                        <p class="mb-0">.purple.accent-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Accent 2</strong>
                                            <small class="text-muted float-right purple accent-2">#E040FB</small>
                                        </p>
                                        <p class="mb-0">.purple.accent-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Accent 3</strong>
                                            <small class="text-muted float-right purple accent-3">#D500F9</small>
                                        </p>
                                        <p class="mb-0">.purple.accent-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Purple Accent 4</strong>
                                            <small class="text-muted float-right purple accent-4">#DD00FF</small>
                                        </p>
                                        <p class="mb-0">.purple.accent-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Purple Text Classes</h4>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordepurple">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.purple</code></td>
                                                            <td>Class for Purple Text color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.purple</code><br><code>.lighten-*</code></td>
                                                            <td>For <code>lighten</code> purple text color, this two classes needed. Here *: 1,2,3,4 for lighten purple color
                                                                options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.purple</code><br><code>.darken-*</code></td>
                                                            <td>For <code>darken</code> purple text color, this two classes needed. Here *: 1,2,3,4 for darken purple color options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.purple</code><br><code>.accent-*</code></td>
                                                            <td>For <code>accent</code> purple text color, this two classes needed. Here *: 1,2,3,4 for accent purple color options.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Text color end -->
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

