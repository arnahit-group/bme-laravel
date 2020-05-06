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
                    <h3 class="content-header-title mb-0">Input Grid</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="form-input-grid.html#">Form Components</a>
                                </li>
                                <li class="breadcrumb-item active">Input Grid
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
            <div class="content-body"><!-- horizontal grid start -->
                <section class="horizontal-grid" id="horizontal-grid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Grid</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-11">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-4">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-5">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- horizontal grid end -->


                <!-- Grid With Row Label start -->
                <section class="grid-row-label" id="grid-row-label">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Grid With Row Label</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <label>Row Label </label>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-11">
                                                        </div>
                                                    </div>
                                                </div>
                                                <label>Row Label </label>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <label>Row Label </label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                                <label>Row Label </label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-4">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                                <label>Row Label </label>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-5">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                                <label>Row Label </label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Grid With Row Label end -->


                <!-- Grid With Label start -->
                <section class="grid-with-label" id="grid-with-label">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Grid With Label</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-11">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-4">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-5">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Grid With Label end -->


                <!-- Left Right Offset start -->
                <section class="left-right-offset" id="left-right-offset">
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Offset</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-12">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-11">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-5">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-left">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Offset</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-12">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-11 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-10 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-9 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-9 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-8 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-7 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-7 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-6 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-5 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-4 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-3 ml-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-2 ml-auto0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1 ml-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="11">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Left Right Offset end -->


                <!-- Centered Input start -->
                <section class="checkbox-input-grid" id="checkbox-input-grid">
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Centered Input</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-12">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 m-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-10 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 m-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-8 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 m-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-6 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 m-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-4 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 m-auto">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-2 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-4 text-right">Label</label>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-3 text-right">Label</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-2 text-right">Label</label>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-1 text-right px-0">Label</label>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Centered Input with Default label</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-12">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 m-auto">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-10 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-9 m-auto">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-8 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 m-auto">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-6 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 m-auto">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-4 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2 m-auto">
                                                        <div class="form-group">
                                                            <label>Label</label>
                                                            <input type="text" class="form-control" placeholder="col-md-2 m-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Centered Input end -->


                <!-- Grid with Row Label start -->
                <section class="grid-with-inline-row-label" id="grid-with-inline-row-label">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Grid With Row Label</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-lg-1">Label</label>
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                    <input type="text" class="form-control" placeholder="col-md-1">
                                                                </div>

                                                                <div class="col-md-11">
                                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-lg-1">Label</label>
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                                </div>

                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-lg-1">Label</label>
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                                </div>

                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-lg-1">Label</label>
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-lg-1">Label</label>
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                                </div>

                                                                <div class="col-md-7">
                                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-lg-1">Label</label>
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Grid with Row Label end -->


                <!-- Grid With Inline Labels start -->
                <section class="grid-with-inline-labels" id="grid-with-inline-labels">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Grid With Inline Input Label</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                                </div>
                                                                <label class="col-md-4 px-0">Label </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="row">
                                                                <label class="col-md-4 text-right">Label </label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                                </div>
                                                                <label class="col-md-4">Label </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <label class="col-md-4 text-right">Label </label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                                </div>
                                                                <label class="col-md-4">Label </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <label class="col-md-4 text-right">Label </label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                                </div>
                                                                <label class="col-md-4">Label </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="row">
                                                                <label class="col-md-4 text-right">Label </label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                                </div>
                                                                <label class="col-md-4">Label </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label class="col-md-4 text-right">Label </label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Grid With Inline Labels end -->


                <!-- Multiple Inputs with Label start -->
                <section class="multiple-input-with-labels" id="multiple-input-with-labels">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Multiple Input With Default Label</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <label>Label </label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Input &amp; First Row">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second Input &amp; First Row">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                </div>

                                                <label>Multiple width Input Label</label>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Input &amp; First Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second Input &amp; First Row">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="First Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Second Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Multiple Inputs with Label end -->


                <!-- Multiple Inputs with Inline Label start -->
                <section class="multiple-input-with-inline-labels" id="multiple-input-with-inline-labels">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Multiple Input With Inline Label</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
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
                                        <form action="form-input-grid.html#">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-2">Label </label>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="First Input &amp; First Row">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="First Input &amp; Second Row">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Second Input &amp; First Row">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Second Input &amp; Second Row">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2">Multiple width Input Label </label>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="First Input &amp; First Row">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Second Input &amp; First Row">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="First Input &amp; Second Row">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Second Input &amp; Second Row">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                                    <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Multiple Inputs with Inline Label end -->
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
