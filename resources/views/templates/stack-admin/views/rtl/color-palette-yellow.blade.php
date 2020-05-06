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
                    <h3 class="content-header-title mb-0">Yellow Color</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="color-palette-yellow.html#">Color System</a>
                                </li>
                                <li class="breadcrumb-item active">Yellow Palette
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
                            <h4 class="text-uppercase">Yellow Background Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-1 text-white bg-yellow">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="white mb-0"><strong>Yellow Color</strong></p>
                                            <p class="card-title">.bg-yellow</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title">
                                                <small class="float-right">#FFEB3B</small>
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
                                    <div class="bg-yellow bg-lighten-1 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 1</strong>
                                            <small class="text-muted float-right">#FFEE58</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-lighten-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-lighten-2 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 2</strong>
                                            <small class="text-muted float-right">#FFF176</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-lighten-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-lighten-3 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 3</strong>
                                            <small class="text-muted float-right">#FFF59D</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-lighten-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-lighten-4 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 4</strong>
                                            <small class="text-muted float-right">#FFF9C4</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-lighten-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-darken-1 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 1</strong>
                                            <small class="text-muted float-right">#FDD835</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-darken-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-darken-2 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 2</strong>
                                            <small class="text-muted float-right">#FBC02D</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-darken-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-darken-3 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 3</strong>
                                            <small class="text-muted float-right">#F9A825</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-darken-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-darken-4 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 4</strong>
                                            <small class="text-muted float-right">#F57F17</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-darken-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-accent-1 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 1</strong>
                                            <small class="text-muted float-right">#FFFF8D</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-accent-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-accent-2 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 2</strong>
                                            <small class="text-muted float-right">#FFFF00</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-accent-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-accent-3 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 3</strong>
                                            <small class="text-muted float-right">#FFEA00</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-accent-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="bg-yellow bg-accent-4 height-50"></div>
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 4</strong>
                                            <small class="text-muted float-right">#FFD600</small>
                                        </p>
                                        <p class="mb-0">.bg-yellow.bg-accent-4</p>
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
                                    <h4 class="card-title">Yellow Palette Classes</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p>Yellow color palette contains 13 colors: 1 main yellow color and 4 lighten colors, 4 darken colors and 4 Accent colors. All colors works
                                            perfectly with any bootstrap components, form components or any stack controls, that makes Stack very effective, flexible and
                                            configurable.</p>
                                        <p class="mt-1"><strong>Please note:</strong> You can use .bg-yellow and .btn-yellow as main colors, but if you want to use lighten, darken
                                            or accent colors, use bg-* bg-lighten-NUMBER for lighten color, bg-* bg-darken-NUMBER for darken color and bg-* bg-accent-NUMBER for
                                            accent colors.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordeyellow">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.bg-yellow</code></td>
                                                            <td>Yellow Class for background color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-yellow</code><br><code>.bg-lighten-*</code></td>
                                                            <td>For <code>lighten</code> yellow background color, this two classes needed. Here *: 1,2,3,4 lighten yellow color
                                                                options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-yellow</code><br><code>.bg-darken-*</code></td>
                                                            <td>For <code>darken</code> yellow background color, this two classes needed. Here *: 1,2,3,4 darken yellow color
                                                                options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.bg-yellow</code><br><code>.bg-accent-*</code></td>
                                                            <td>For <code>accent</code> yellow background color, this two classes needed. Here *: 1,2,3,4 accent yellow color
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
                            <h4 class="text-uppercase">Yellow Border Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-1 border-yellow">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="mb-0"><strong>Yellow Color</strong></p>
                                            <p class="card-title">.border-yellow</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title">
                                                <small class="float-right">#FFEB3B</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-1 border-yellow border-lighten-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 1</strong>
                                            <small class="text-muted float-right">#FFEE58</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-lighten-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-lighten-2">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 2</strong>
                                            <small class="text-muted float-right">#FFF176</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-lighten-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-lighten-3">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 3</strong>
                                            <small class="text-muted float-right">#FFF59D</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-lighten-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-lighten-4">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 4</strong>
                                            <small class="text-muted float-right">#FFF9C4</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-lighten-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1 border-yellow border-darken-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 1</strong>
                                            <small class="text-muted float-right">#FDD835</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-darken-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-darken-2">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 2</strong>
                                            <small class="text-muted float-right">#FBC02D</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-darken-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-darken-3">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 3</strong>
                                            <small class="text-muted float-right">#F9A825</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-darken-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-darken-4">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 4</strong>
                                            <small class="text-muted float-right">#F57F17</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-darken-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1 border-yellow border-accent-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 1</strong>
                                            <small class="text-muted float-right">#FFFF8D</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-accent-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-accent-2">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 2</strong>
                                            <small class="text-muted float-right">#FFFF00</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-accent-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-accent-3">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 3</strong>
                                            <small class="text-muted float-right">#FFEA00</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-accent-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 border-yellow border-accent-4">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 4</strong>
                                            <small class="text-muted float-right">#FFD600</small>
                                        </p>
                                        <p class="mb-0">.border-yellow.border-accent-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Yellow Border Classes</h4>
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
                                                <table class="table table-bordeyellow">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.border-yellow</code></td>
                                                            <td>Yellow Class for background color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-yellow</code><br><code>.border-lighten-*</code></td>
                                                            <td>For lighten yellow background color, this two classes needed. Here *: 1,2,3,4 lighten yellow color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-yellow</code><br><code>.border-top-lighten-*</code></td>
                                                            <td>For lighten yellow <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-yellow</code><br><code>.border-bottom-lighten-*</code></td>
                                                            <td>For lighten yellow <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-yellow</code><br><code>.border-right-lighten-*</code></td>
                                                            <td>For lighten yellow <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-yellow</code><br><code>.border-left-lighten-*</code></td>
                                                            <td>For lighten yellow <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-yellow</code><br><code>.border-darken-*</code></td>
                                                            <td>For darken yellow background color, this two classes needed. Here *: 1,2,3,4 darken yellow color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-yellow</code><br><code>.border-top-darken-*</code></td>
                                                            <td>For darken yellow <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-yellow</code><br><code>.border-bottom-darken-*</code></td>
                                                            <td>For darken yellow <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-yellow</code><br><code>.border-right-darken-*</code></td>
                                                            <td>For darken yellow <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-yellow</code><br><code>.border-left-darken-*</code></td>
                                                            <td>For darken yellow <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-yellow</code><br><code>.border-accent-*</code></td>
                                                            <td>For accent yellow background color, this two classes needed. Here *: 1,2,3,4 accent yellow color options.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-top-yellow</code><br><code>.border-top-accent-*</code></td>
                                                            <td>For accent yellow <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-bottom-yellow</code><br><code>.border-bottom-accent-*</code></td>
                                                            <td>For accent yellow <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-right-yellow</code><br><code>.border-right-accent-*</code></td>
                                                            <td>For accent yellow <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.border-left-yellow</code><br><code>.border-left-accent-*</code></td>
                                                            <td>For accent yellow <code>left</code> border. Use this classes if you need to highlight only left border.</td>
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
                            <h4 class="text-uppercase">Yellow Text Color</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card p-1">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <p class="mb-0"><strong>Yellow Color</strong></p>
                                            <p class="card-title">.yellow</p>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-title mb-0 yellow">
                                                <small class="float-right">#FFEB3B</small>
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
                                        <p class="mb-0"><strong>Yellow Lighten 1</strong>
                                            <small class="text-muted float-right yellow">#FFEE58</small>
                                        </p>
                                        <p class="mb-0">.yellow.lighten-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 2</strong>
                                            <small class="text-muted float-right yellow lighten-2">#FFF176</small>
                                        </p>
                                        <p class="mb-0">.yellow.lighten-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 3</strong>
                                            <small class="text-muted float-right yellow lighten-3">#FFF59D</small>
                                        </p>
                                        <p class="mb-0">.yellow.lighten-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Lighten 4</strong>
                                            <small class="text-muted float-right yellow lighten-4">#FFF9C4</small>
                                        </p>
                                        <p class="mb-0">.yellow.lighten-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 1</strong>
                                            <small class="text-muted float-right yellow darken-1">#FDD835</small>
                                        </p>
                                        <p class="mb-0">.yellow.darken-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 2</strong>
                                            <small class="text-muted float-right yellow darken-2">#FBC02D</small>
                                        </p>
                                        <p class="mb-0">.yellow.darken-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 3</strong>
                                            <small class="text-muted float-right yellow darken-3">#F9A825</small>
                                        </p>
                                        <p class="mb-0">.yellow.darken-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Darken 4</strong>
                                            <small class="text-muted float-right yellow darken-4">#F57F17</small>
                                        </p>
                                        <p class="mb-0">.yellow.darken-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 1</strong>
                                            <small class="text-muted float-right yellow accent-1">#FFFF8D</small>
                                        </p>
                                        <p class="mb-0">.yellow.accent-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 2</strong>
                                            <small class="text-muted float-right yellow accent-2">#FFFF00</small>
                                        </p>
                                        <p class="mb-0">.yellow.accent-2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 3</strong>
                                            <small class="text-muted float-right yellow accent-3">#FFEA00</small>
                                        </p>
                                        <p class="mb-0">.yellow.accent-3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-content">
                                    <div class="p-1">
                                        <p class="mb-0"><strong>Yellow Accent 4</strong>
                                            <small class="text-muted float-right yellow accent-4">#FFD600</small>
                                        </p>
                                        <p class="mb-0">.yellow.accent-4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Yellow Text Classes</h4>
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
                                                <table class="table table-bordeyellow">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Class</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><code>.yellow</code></td>
                                                            <td>Class for Yellow Text color.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.yellow</code><br><code>.lighten-*</code></td>
                                                            <td>For <code>lighten</code> yellow text color, this two classes needed. Here *: 1,2,3,4 for lighten yellow color
                                                                options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.yellow</code><br><code>.darken-*</code></td>
                                                            <td>For <code>darken</code> yellow text color, this two classes needed. Here *: 1,2,3,4 for darken yellow color options.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><code>.yellow</code><br><code>.accent-*</code></td>
                                                            <td>For <code>accent</code> yellow text color, this two classes needed. Here *: 1,2,3,4 for accent yellow color options.
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

