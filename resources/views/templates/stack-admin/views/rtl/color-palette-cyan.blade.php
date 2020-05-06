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
                    <h3 class="content-header-title mb-0">Cyan Color Page</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="color-palette-cyan.html#">Color System</a>
                                </li>
                                <li class="breadcrumb-item active">Cyan Palette
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
                            <h4 class="text-uppercase">Cyan Background Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-1 text-white bg-cyan">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="white mb-0"><strong>Cyan Color</strong></p>
                                            <p class="card-title">.bg-cyan</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title">
                                                <small class="float-right">#00BCD4</small>
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
                                    <div class="bg-cyan bg-lighten-1 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Lighten 1</strong>
                                            <small class="text-muted float-right">#26C6DA</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-lighten-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-lighten-2 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Lighten 2</strong>
                                            <small class="text-muted float-right">#4DD0E1</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-lighten-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-lighten-3 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Lighten 3</strong>
                                            <small class="text-muted float-right">#80DEEA</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-lighten-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-lighten-4 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Lighten 4</strong>
                                            <small class="text-muted float-right">#B2EBF2</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-lighten-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-darken-1 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Darken 1</strong>
                                            <small class="text-muted float-right">#00ACC1</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-darken-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-darken-2 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Darken 2</strong>
                                            <small class="text-muted float-right">#0097A7</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-darken-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-darken-3 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Darken 3</strong>
                                            <small class="text-muted float-right">#00838F</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-darken-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-darken-4 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Darken 4</strong>
                                            <small class="text-muted float-right">#006064</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-darken-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-accent-1 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Accent 1</strong>
                                            <small class="text-muted float-right">#84FFFF</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-accent-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-accent-2 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Accent 2</strong>
                                            <small class="text-muted float-right">#18FFFF</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-accent-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-accent-3 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Accent 3</strong>
                                            <small class="text-muted float-right">#00E5FF</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-accent-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-cyan bg-accent-4 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Accent 4</strong>
                                            <small class="text-muted float-right">#00B8D4</small>
                                        </p>
                                        <p class="mb-0">.bg-cyan.bg-accent-4</p>
                                    </div>
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
                                    <h4 class="card-title">Cyan Palette Classes</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p>Cyan color palette contains 13 colors: 1 main cyan color and 4 lighten colors, 4 darken colors and 4 Accent colors. All colors works
                                            perfectly with any bootstrap components, form components or any stack controls, that makes Stack very effective, flexible and
                                            configurable.</p>
                                        <p class="mt-1"><strong>Please note:</strong> You can use .bg-cyan and .btn-cyan as main colors, but if you want to use lighten, darken or
                                            accent colors, use bg-* bg-lighten-NUMBER for lighten color, bg-* bg-darken-NUMBER for darken color and bg-* bg-accent-NUMBER for accent
                                            colors.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordecyan">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.bg-cyan</code></td>
                                                            <td>Cyan Class for background color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-cyan</code><br><code>.bg-lighten-*</code></td>
                                                            <td>For <code>lighten</code> cyan background color, this two classes needed. Here *: 1,2,3,4 lighten cyan color options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-cyan</code><br><code>.bg-darken-*</code></td>
                                                            <td>For <code>darken</code> cyan background color, this two classes needed. Here *: 1,2,3,4 darken cyan color options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-cyan</code><br><code>.bg-accent-*</code></td>
                                                            <td>For <code>accent</code> cyan background color, this two classes needed. Here *: 1,2,3,4 accent cyan color options.
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
                            <h4 class="text-uppercase">Cyan Border Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-group mb-1">
                                <div class="card p-1 border-cyan">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="mb-0"><strong>Cyan Color</strong></p>
                                            <p class="card-title mb-0">.border-cyan</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title">
                                                <small class="float-right">#00BCD4</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-1 border-cyan border-lighten-1">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Lighten 1</strong>
                                        <small class="text-muted float-right">#26C6DA</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-lighten-1</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-lighten-2">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Lighten 2</strong>
                                        <small class="text-muted float-right">#4DD0E1</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-lighten-2</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-lighten-3">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Lighten 3</strong>
                                        <small class="text-muted float-right">#80DEEA</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-lighten-3</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-lighten-4">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Lighten 4</strong>
                                        <small class="text-muted float-right">#B2EBF2</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-lighten-4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1 border-cyan border-darken-1">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Darken 1</strong>
                                        <small class="text-muted float-right">#00ACC1</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-darken-1</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-darken-2">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Darken 2</strong>
                                        <small class="text-muted float-right">#0097A7</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-darken-2</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-darken-3">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Darken 3</strong>
                                        <small class="text-muted float-right">#00838F</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-darken-3</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-darken-4">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Darken 4</strong>
                                        <small class="text-muted float-right">#006064</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-darken-4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1 border-cyan border-accent-1">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Accent 1</strong>
                                        <small class="text-muted float-right">#84FFFF</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-accent-1</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-accent-2">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Accent 2</strong>
                                        <small class="text-muted float-right">#18FFFF</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-accent-2</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-accent-3">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Accent 3</strong>
                                        <small class="text-muted float-right">#00E5FF</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-accent-3</p>
                                </div>
                            </div>
                            <div class="card mb-1 border-cyan border-accent-4">
                                <div class="p-1">
                                    <p class="mb-0"><strong>Cyan Accent 4</strong>
                                        <small class="text-muted float-right">#00B8D4</small>
                                    </p>
                                    <p class="mb-0">.border-cyan.border-accent-4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Cyan Border Classes</h4>
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
                                                <table class="table table-bordecyan">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.border-cyan</code></td>
                                                            <td>Cyan Class for background color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-cyan</code><br><code>.border-lighten-*</code></td>
                                                            <td>For lighten cyan background color, this two classes needed. Here *: 1,2,3,4 lighten cyan color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-cyan</code><br><code>.border-top-lighten-*</code></td>
                                                            <td>For lighten cyan <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-cyan</code><br><code>.border-bottom-lighten-*</code></td>
                                                            <td>For lighten cyan <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-cyan</code><br><code>.border-right-lighten-*</code></td>
                                                            <td>For lighten cyan <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-cyan</code><br><code>.border-left-lighten-*</code></td>
                                                            <td>For lighten cyan <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-cyan</code><br><code>.border-darken-*</code></td>
                                                            <td>For darken cyan background color, this two classes needed. Here *: 1,2,3,4 darken cyan color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-cyan</code><br><code>.border-top-darken-*</code></td>
                                                            <td>For darken cyan <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-cyan</code><br><code>.border-bottom-darken-*</code></td>
                                                            <td>For darken cyan <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-cyan</code><br><code>.border-right-darken-*</code></td>
                                                            <td>For darken cyan <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-cyan</code><br><code>.border-left-darken-*</code></td>
                                                            <td>For darken cyan <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-cyan</code><br><code>.border-accent-*</code></td>
                                                            <td>For accent cyan background color, this two classes needed. Here *: 1,2,3,4 accent cyan color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-cyan</code><br><code>.border-top-accent-*</code></td>
                                                            <td>For accent cyan <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-cyan</code><br><code>.border-bottom-accent-*</code></td>
                                                            <td>For accent cyan <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-cyan</code><br><code>.border-right-accent-*</code></td>
                                                            <td>For accent cyan <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-cyan</code><br><code>.border-left-accent-*</code></td>
                                                            <td>For accent cyan <code>left</code> border. Use this classes if you need to highlight only left border.</td>
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
                            <h4 class="text-uppercase">Cyan Text Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-group mb-1">
                                <div class="card p-1">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="mb-0"><strong>Cyan Color</strong></p>
                                            <p class="card-title mb-0">.cyan</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title mb-0 cyan">
                                                <small class="float-right">#00BCD4</small>
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
                                        <p class="mb-0"><strong>Cyan Lighten 1</strong>
                                            <small class="text-muted float-right cyan">#26C6DA</small>
                                        </p>
                                        <p class="mb-0">.cyan.lighten-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Lighten 2</strong>
                                            <small class="text-muted float-right cyan lighten-2">#4DD0E1</small>
                                        </p>
                                        <p class="mb-0">.cyan.lighten-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Lighten 3</strong>
                                            <small class="text-muted float-right cyan lighten-3">#80DEEA</small>
                                        </p>
                                        <p class="mb-0">.cyan.lighten-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Lighten 4</strong>
                                            <small class="text-muted float-right cyan lighten-4">#B2EBF2</small>
                                        </p>
                                        <p class="mb-0">.cyan.lighten-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Darken 1</strong>
                                            <small class="text-muted float-right cyan darken-1">#00ACC1</small>
                                        </p>
                                        <p class="mb-0">.cyan.darken-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Darken 2</strong>
                                            <small class="text-muted float-right cyan darken-2">#0097A7</small>
                                        </p>
                                        <p class="mb-0">.cyan.darken-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Darken 3</strong>
                                            <small class="text-muted float-right cyan darken-3">#00838F</small>
                                        </p>
                                        <p class="mb-0">.cyan.darken-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Darken 4</strong>
                                            <small class="text-muted float-right cyan darken-4">#006064</small>
                                        </p>
                                        <p class="mb-0">.cyan.darken-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Accent 1</strong>
                                            <small class="text-muted float-right cyan accent-1">#84FFFF</small>
                                        </p>
                                        <p class="mb-0">.cyan.accent-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Accent 2</strong>
                                            <small class="text-muted float-right cyan accent-2">#18FFFF</small>
                                        </p>
                                        <p class="mb-0">.cyan.accent-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Accent 2</strong>
                                            <small class="text-muted float-right cyan accent-3">#00E5FF</small>
                                        </p>
                                        <p class="mb-0">.cyan.accent-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Cyan Accent 4</strong>
                                            <small class="text-muted float-right cyan accent-4">#00B8D4</small>
                                        </p>
                                        <p class="mb-0">.cyan.accent-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Cyan Text Classes</h4>
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
                                                <table class="table table-bordecyan">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.cyan</code></td>
                                                            <td>Class for Cyan Text color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.cyan</code><br><code>.lighten-*</code></td>
                                                            <td>For <code>lighten</code> cyan text color, this two classes needed. Here *: 1,2,3,4 for lighten cyan color options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.cyan</code><br><code>.darken-*</code></td>
                                                            <td>For <code>darken</code> cyan text color, this two classes needed. Here *: 1,2,3,4 for darken cyan color options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.cyan</code><br><code>.accent-*</code></td>
                                                            <td>For <code>accent</code> cyan text color, this two classes needed. Here *: 1,2,3,4 for accent cyan color options.
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

