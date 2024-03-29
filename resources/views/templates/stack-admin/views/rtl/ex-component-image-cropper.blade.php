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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/images/cropper/cropper.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/images/cropper/cropper.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Image Cropper</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Image Cropper
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
            <div class="content-body"><!-- Image cropper section start -->
                <section id="image-cropper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Cropper Demo</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="font-small-3">This example covers image prviews with different preview sizes, Also shows X & Y co-ordinates and width - height of
                                            the cropper. With Rotate buttons you can rotate the image clockwise and anti-clockwise. You can also scale the image with horizontal
                                            flip and vertical flip buttons. You can get all data, image data, container data, canvas data and cropbox data clicking on respective
                                            buttons.</p>
                                        <div class="row mb-1">
                                            <div class="col-md-9">
                                                <div class="img-container overflow-hidden">
                                                    <img class="main-demo-image img-fluid" src="{{asset('admin-assets/images/crop-pic.jpg')}}"
                                                         alt="Picture">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="docs-preview clearfix">
                                                        <div class="img-preview preview-lg img-fluid"></div>
                                                        <div class="img-preview preview-md img-fluid"></div>
                                                        <div class="img-preview preview-sm img-fluid"></div>
                                                        <div class="img-preview preview-xs img-fluid"></div>
                                                    </div>
                                                </div>

                                                <!-- <h3 class="page-header">Data:</h3> -->
                                                <div class="docs-data">
                                                    <fieldset class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">X</span>
                                                            </div>
                                                            <input type="text" class="form-control main-demo-dataX" placeholder="x">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">px</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Y</span>
                                                            </div>
                                                            <input type="text" class="form-control main-demo-dataY" placeholder="y">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">px</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Width</span>
                                                            </div>
                                                            <input type="text" class="form-control main-demo-dataWidth" placeholder="width">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">px</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Height</span>
                                                            </div>
                                                            <input type="text" class="form-control main-demo-dataHeight" placeholder="height">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">px</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-blue rotate-m45-deg" type="button">Rotate -45&deg;</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-pink rotate-45-deg" type="button">Rotate 45&deg;</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-teal rotate-180-deg" type="button">Rotate 180&deg;</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-blue flip-horizontal" type="button" data-option="1">Flip Horizontal</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-pink flip-vertical" type="button" data-option="1">Flip Vertical</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-teal zoom-in" type="button">Zoom In</button>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-4">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-data">
                                                        <div class="input-group-append">
                                            <span class="input-group-btn">
                                                <button class="btn btn-outline-blue get-data-btn" type="button">Get Data</button>
                                            </span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-4">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-image-data">
                                                        <div class="input-group-append">
                                            <span class="input-group-btn">
                                                <button class="btn btn-outline-pink get-image-data-btn" type="button">Get Image Data</button>
                                            </span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-4">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-container-data">
                                                        <div class="input-group-append">
                                            <span class="input-group-btn">
                                                <button class="btn btn-outline-teal get-container-data-btn" type="button">Get Container Data</button>
                                            </span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-canvas-data">
                                                        <div class="input-group-append">
                                            <span class="input-group-btn">
                                                <button class="btn btn-outline-blue get-canvas-data-btn" type="button">Get Canvas Data</button>
                                            </span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-cropbox-data">
                                                        <div class="input-group-append">
                                            <span class="input-group-btn">
                                                <button class="btn btn-outline-teal get-cropbox-data-btn" type="button">Get Crop Box Data</button>
                                            </span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Basic Cropper -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Cropper</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This is the most basic example with cropper shown with overlay on the image.</p>
                                        <img class="basic-cropper" src="{{asset('admin-assets/images/gallery/1.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- No Overlay -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">No Overlay</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This is the most basic example with cropper shown on the image but without overlay.</p>
                                        <img class="no-overlay" src="{{asset('admin-assets/images/gallery/5.jpg')}}"
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- 16:9 Aspect Ratio -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">16:9 Aspect Ratio</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate the cropper ratio fixed to <code>16:9</code>. This must be set using the
                                            <code>aspectRatio</code> option.</p>
                                        <img class="aspect-ratio-16-9" src="{{asset('admin-assets/images/gallery/15.jpg')}}"
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4:3 Aspect Ratio -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">4:3 Aspect Ratio</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate the cropper ratio fixed to <code>4:3</code>. This must be set using the
                                            <code>aspectRatio</code> option.</p>
                                        <img class="aspect-ratio-4-3" src="{{asset('admin-assets/images/gallery/14.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Fixed Crop Box -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Fixed Crop Box</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate the fixed cropper that you can not move but you can increase - decrease the size of the
                                            cropper by dragging.</p>
                                        <img class="fixed-crop-box" src="{{asset('admin-assets/images/gallery/3.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Full Crop Box -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Fixed Size Crop Box</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate the fixed size of the cropper. You can move the crop box but can not increase or decrease
                                            the size of the cropper.</p>
                                        <img class="fixed-size-crop-box" src="{{asset('admin-assets/images/gallery/33.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Disable Guides -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable Guides</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate the guides being turned off.</p>
                                        <img class="disable-guides" src="{{asset('admin-assets/images/gallery/7.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Disable Center Indicator -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable Center Indicator</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate how to disable the center indicator while still showing the guides.</p>
                                        <img class="disable-center-indicator" src="{{asset('admin-assets/images/gallery/28.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Disable Auto Crop -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable Auto Crop</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate how to disable the autocrop feature. You need to set <code>autoCrop</code> option to <code>false</code>
                                            in order to disable.</p>
                                        <img class="disable-auto-crop" src="{{asset('admin-assets/images/gallery/15.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Disable New Crop Box Creation -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable New Crop Box Creation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate how to restrict a user from creating a new cropbox and just allowing to work with
                                            pre-defined cropbox.</p>
                                        <img class="disable-new-crop-box" src="{{asset('admin-assets/images/gallery/17.jpg')}}"
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Movable Image -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Movable Image</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate how to enable the image movement while keeping the cropbox fixed.</p>
                                        <img class="movable-image" src="{{asset('admin-assets/images/gallery/21.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Zoomable Image -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Zoomable Image</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate how to enable zoom functionality on mousewheel scroll.</p>
                                        <img class="zoomable-image" src="{{asset('admin-assets/images/gallery/27.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Minimum Crop Area -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Minimum Crop Area</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">In this example we have set minimum crop area size to <code>100 X 100</code>. User can not make smaller cropbox than
                                            limit applied.</p>
                                        <img class="min-crop-area" src="{{asset('admin-assets/images/gallery/29.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Disable background -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable background</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate how to disable the default background. Set <code>background</code> option to
                                            <code>false</code> in order to disable default background.</p>
                                        <img class="disable-background" src="{{asset('admin-assets/images/gallery/28.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Rotate Image -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Rotate Image</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate how to rotate the default image. Required to use <code>built</code> function to rotate
                                            image after setting all the options. </p>
                                        <img class="rotate-image" src="{{asset('admin-assets/images/gallery/33.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scale Image -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Scale Image</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <p class="font-small-3">This example demonstrate how to scale the default image. Required to use <code>built</code> function to scale image
                                            after setting all the options.</p>
                                        <img class="scale-image" src="{{asset('admin-assets/images/gallery/32.jpg')}}" 
                                             alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Image cropper section end -->
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
    <script src="{{asset('admin-assets/vendors/js/extensions/cropper.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/extensions/image-cropper.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
