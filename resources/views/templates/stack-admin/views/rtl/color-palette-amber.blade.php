
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
          <h3 class="content-header-title mb-0">Amber Color Page</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="color-palette-amber.html#">Color System</a>
                </li>
                <li class="breadcrumb-item active">Amber Palette
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
            </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="ft-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="ft-pie-chart"></i></a>
          </div>
        </div>
      </div>
      <div class="content-body"><!-- Background color start -->
        <section id="backColor">
          <div class="row">
            <div class="col-md-12 mt-3 mb-1">
              <h4 class="text-uppercase">Amber Background Color</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card p-1 text-white bg-amber">
                <div class="card-content">
                  <div class="card-body">
                    <div class="float-left">
                      <p class="white mb-0"><strong>Amber Color</strong></p>
                      <p class="card-title">.bg-amber</p>
                    </div>
                    <div class="float-right">
                      <p class="card-title"><small class="float-right">#FFC107</small></p>
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
                  <div class="bg-amber bg-lighten-1 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 1</strong><small class="text-muted float-right">#FFCA28</small></p>
                    <p class="mb-0">.bg-amber.bg-lighten-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-lighten-2 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 2</strong><small class="text-muted float-right">#FFD54F</small></p>
                    <p class="mb-0">.bg-amber.bg-lighten-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-lighten-3 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 3</strong><small class="text-muted float-right">#FFE082</small></p>
                    <p class="mb-0">.bg-amber.bg-lighten-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-lighten-4 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 4</strong><small class="text-muted float-right">#FFECB3</small></p>
                    <p class="mb-0">.bg-amber.bg-lighten-4</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-darken-1 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 1</strong><small class="text-muted float-right">#FFB300</small></p>
                    <p class="mb-0">.bg-amber.bg-darken-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-darken-2 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 2</strong><small class="text-muted float-right">#FFA000</small></p>
                    <p class="mb-0">.bg-amber.bg-darken-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-darken-3 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 3</strong><small class="text-muted float-right">#FF8F00</small></p>
                    <p class="mb-0">.bg-amber.bg-darken-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-darken-4 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 4</strong><small class="text-muted float-right">#FF6F00</small></p>
                    <p class="mb-0">.bg-amber.bg-darken-4</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-accent-1 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 1</strong><small class="text-muted float-right">#FFE57F</small></p>
                    <p class="mb-0">.bg-amber.bg-accent-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-accent-2 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 2</strong><small class="text-muted float-right">#FFD740</small></p>
                    <p class="mb-0">.bg-amber.bg-accent-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-accent-3 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 3</strong><small class="text-muted float-right">#FFC400</small></p>
                    <p class="mb-0">.bg-amber.bg-accent-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="bg-amber bg-accent-4 height-50"></div>
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 4</strong><small class="text-muted float-right">#FFAB00</small></p>
                    <p class="mb-0">.bg-amber.bg-accent-4</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Amber Palette Classes</h4>
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
                    <p>Amber color palette contains 13 colors: 1 main amber color and 4 lighten colors, 4 darken colors and  4 Accent colors. All colors works perfectly with any bootstrap components, form components or any stack controls, that makes Stack very effective, flexible and configurable.</p>
                    <p class="mt-1"><strong>Please note:</strong> You can use .bg-amber and .btn-amber as main colors, but if you want to use lighten, darken or accent colors, use bg-* bg-lighten-NUMBER for lighten color, bg-* bg-darken-NUMBER for darken color  and bg-* bg-accent-NUMBER for accent colors.</p>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <table class="table table-bordeamber">
                          <thead>
                            <tr>
                              <th style="width: 30%;">Class</th>
                              <th>Description</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><code>.bg-amber</code></td>
                              <td>Amber Class for background color.</td>
                            </tr>
                            <tr>
                              <td><code>.bg-amber</code><br><code>.bg-lighten-*</code></td>
                              <td>For <code>lighten</code> amber background color, this two classes needed. Here *: 1,2,3,4 lighten amber color options.</td>
                            </tr>
                            <tr>
                              <td><code>.bg-amber</code><br><code>.bg-darken-*</code></td>
                              <td>For <code>darken</code> amber background color, this two classes needed. Here *: 1,2,3,4 darken amber color options.</td>
                            </tr>
                            <tr>
                              <td><code>.bg-amber</code><br><code>.bg-accent-*</code></td>
                              <td>For <code>accent</code> amber background color, this two classes needed. Here *: 1,2,3,4 accent amber color options.</td>
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
              <h4 class="text-uppercase">Amber Border Color</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card-group mb-1">
                <div class="card p-1 border-amber">
                  <div class="card-body">
                    <div class="float-left">
                      <p class="mb-0"><strong>Amber Color</strong></p>
                      <p class="card-title mb-0">.border-amber</p>
                    </div>
                    <div class="float-right">
                      <p class="card-title"><small class="float-right">#FFC107</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-1 border-amber border-lighten-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 1</strong><small class="text-muted float-right">#FFCA28</small></p>
                    <p class="mb-0">.border-amber.border-lighten-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-lighten-2">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 2</strong><small class="text-muted float-right">#FFD54F</small></p>
                    <p class="mb-0">.border-amber.border-lighten-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-lighten-3">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 3</strong><small class="text-muted float-right">#FFE082</small></p>
                    <p class="mb-0">.border-amber.border-lighten-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-lighten-4">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 4</strong><small class="text-muted float-right">#FFECB3</small></p>
                    <p class="mb-0">.border-amber.border-lighten-4</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-1 border-amber border-darken-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 1</strong><small class="text-muted float-right">#FFB300</small></p>
                    <p class="mb-0">.border-amber.border-darken-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-darken-2">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 2</strong><small class="text-muted float-right">#FFA000</small></p>
                    <p class="mb-0">.border-amber.border-darken-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-darken-3">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 3</strong><small class="text-muted float-right">#FF8F00</small></p>
                    <p class="mb-0">.border-amber.border-darken-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-darken-4">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 4</strong><small class="text-muted float-right">#FF6F00</small></p>
                    <p class="mb-0">.border-amber.border-darken-4</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-1 border-amber border-accent-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 1</strong><small class="text-muted float-right">#FFE57F</small></p>
                    <p class="mb-0">.border-amber.border-accent-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-accent-2">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 2</strong><small class="text-muted float-right">#FFD740</small></p>
                    <p class="mb-0">.border-amber.border-accent-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-accent-3">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 3</strong><small class="text-muted float-right">#FFC400</small></p>
                    <p class="mb-0">.border-amber.border-accent-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1 border-amber border-accent-4">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 4</strong><small class="text-muted float-right">#FFAB00</small></p>
                    <p class="mb-0">.border-amber.border-accent-4</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Amber Border Classes</h4>
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
                        <table class="table table-bordeamber">
                          <thead>
                            <tr>
                              <th style="width: 30%;">Class</th>
                              <th>Description</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><code>.border-amber</code></td>
                              <td>Amber Class for background color.</td>
                            </tr>
                            <tr>
                              <td><code>.border-amber</code><br><code>.border-lighten-*</code></td>
                              <td>For lighten amber background color, this two classes needed. Here *: 1,2,3,4 lighten amber color options.</td>
                            </tr>
                            <tr>
                              <td><code>.border-top-amber</code><br><code>.border-top-lighten-*</code></td>
                              <td>For lighten amber <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-bottom-amber</code><br><code>.border-bottom-lighten-*</code></td>
                              <td>For lighten amber <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-right-amber</code><br><code>.border-right-lighten-*</code></td>
                              <td>For lighten amber <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-left-amber</code><br><code>.border-left-lighten-*</code></td>
                              <td>For lighten amber <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-amber</code><br><code>.border-darken-*</code></td>
                              <td>For darken amber background color, this two classes needed. Here *: 1,2,3,4 darken amber color options.</td>
                            </tr>
                            <tr>
                              <td><code>.border-top-amber</code><br><code>.border-top-darken-*</code></td>
                              <td>For darken amber <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-bottom-amber</code><br><code>.border-bottom-darken-*</code></td>
                              <td>For darken amber <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-right-amber</code><br><code>.border-right-darken-*</code></td>
                              <td>For darken amber <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-left-amber</code><br><code>.border-left-darken-*</code></td>
                              <td>For darken amber <code>left</code> border. Use this classes if you need to highlight only left border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-amber</code><br><code>.border-accent-*</code></td>
                              <td>For accent amber background color, this two classes needed. Here *: 1,2,3,4 accent amber color options.</td>
                            </tr>
                            <tr>
                              <td><code>.border-top-amber</code><br><code>.border-top-accent-*</code></td>
                              <td>For accent amber <code>top</code> border. Use this classes if you need to highlight only top border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-bottom-amber</code><br><code>.border-bottom-accent-*</code></td>
                              <td>For accent amber <code>bottom</code> border. Use this classes if you need to highlight only bottom border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-right-amber</code><br><code>.border-right-accent-*</code></td>
                              <td>For accent amber <code>right</code> border. Use this classes if you need to highlight only right border.</td>
                            </tr>
                            <tr>
                              <td><code>.border-left-amber</code><br><code>.border-left-accent-*</code></td>
                              <td>For accent amber <code>left</code> border. Use this classes if you need to highlight only left border.</td>
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
              <h4 class="text-uppercase">Amber Text Color</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card-group mb-1">
                <div class="card p-1">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="float-left">
                        <p class="mb-0"><strong>Amber Color</strong></p>
                        <p class="card-title">.amber</p>
                      </div>
                      <div class="float-right">
                        <p class="card-title mb-0 amber"><small class="float-right">#FFC107</small></p>
                      </div>
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
                    <p class="mb-0"><strong>Amber Lighten 1</strong><small class="text-muted float-right amber">#FFCA28</small></p>
                    <p class="mb-0">.amber.lighten-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 2</strong><small class="text-muted float-right amber lighten-2">#FFD54F</small></p>
                    <p class="mb-0">.amber.lighten-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 3</strong><small class="text-muted float-right amber lighten-3">#FFE082</small></p>
                    <p class="mb-0">.amber.lighten-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Lighten 4</strong><small class="text-muted float-right amber lighten-4">#FFECB3</small></p>
                    <p class="mb-0">.amber.lighten-4</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 1</strong><small class="text-muted float-right amber darken-1">#FFB300</small></p>
                    <p class="mb-0">.amber.darken-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 2</strong><small class="text-muted float-right amber darken-2">#FFA000</small></p>
                    <p class="mb-0">.amber.darken-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 3</strong><small class="text-muted float-right amber darken-3">#FF8F00</small></p>
                    <p class="mb-0">.amber.darken-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Darken 4</strong><small class="text-muted float-right amber darken-4">#FF6F00</small></p>
                    <p class="mb-0">.amber.darken-4</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 1</strong><small class="text-muted float-right amber accent-1">#FFE57F</small></p>
                    <p class="mb-0">.amber.accent-1</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 2</strong><small class="text-muted float-right amber accent-2">#FFD740</small></p>
                    <p class="mb-0">.amber.accent-2</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 3</strong><small class="text-muted float-right amber accent-3">#FFC400</small></p>
                    <p class="mb-0">.amber.accent-3</p>
                  </div>
                </div>
              </div>
              <div class="card mb-1">
                <div class="card-content">
                  <div class="p-1">
                    <p class="mb-0"><strong>Amber Accent 4</strong><small class="text-muted float-right amber accent-4">#FFAB00</small></p>
                    <p class="mb-0">.amber.accent-4</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Amber Text Classes</h4>
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
                        <table class="table table-bordeamber">
                          <thead>
                            <tr>
                              <th style="width: 30%;">Class</th>
                              <th>Description</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><code>.amber</code></td>
                              <td>Class for Amber Text color.</td>
                            </tr>
                            <tr>
                              <td><code>.amber</code><br><code>.lighten-*</code></td>
                              <td>For <code>lighten</code> amber text color, this two classes needed. Here *: 1,2,3,4 for lighten amber color options.</td>
                            </tr>
                            <tr>
                              <td><code>.amber</code><br><code>.darken-*</code></td>
                              <td>For <code>darken</code> amber text color, this two classes needed. Here *: 1,2,3,4 for darken amber color options.</td>
                            </tr>
                            <tr>
                              <td><code>.amber</code><br><code>.accent-*</code></td>
                              <td>For <code>accent</code> amber text color, this two classes needed. Here *: 1,2,3,4 for accent amber color options.</td>
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


