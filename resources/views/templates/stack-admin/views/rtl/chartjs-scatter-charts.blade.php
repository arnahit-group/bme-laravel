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
          <h3 class="content-header-title mb-0">Chartjs Scatter Chart</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="chartjs-scatter-charts.html#">Chartjs</a>
                </li>
                <li class="breadcrumb-item active">Scatter Chart
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
      <div class="content-body"><!-- Scatter charts section start -->
        <section id="chartjs-scatter-charts">
          <!-- Scatter Chart -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Scatter Chart</h4>
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
                    <div class="height-500">
                      <canvas id="scatter-chart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Scatter logX Chart -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Scatter LogX Chart</h4>
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
                    <div class="height-500">
                      <canvas id="scatter-logx"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Scatter Multi Axis Chart -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Scatter Multi Axis Chart</h4>
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
                    <div class="height-500">
                      <canvas id="scatter-multi-axis"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Scatter charts section end -->
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
  <script src="{{asset('admin-assets/vendors/js/charts/chart.min.js')}}"></script>
  <!-- END: Page Vendor JS-->

@endsection

@section('footer')
  <!-- BEGIN: Page JS-->
  <script src="{{asset('admin-assets/js/scripts/charts/chartjs/scatter/scatter.min.js')}}"></script>
  <script src="{{asset('admin-assets/js/scripts/charts/chartjs/scatter/scatter-logX.min.js')}}"></script>
  <script src="{{asset('admin-assets/js/scripts/charts/chartjs/scatter/scatter-multi-axis.min.js')}}"></script>
  <!-- END: Page JS-->

@endsection
