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
                    <h3 class="content-header-title mb-0">Form Repeater</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="form-repeater.html#">Form Repeater</a>
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
            <div class="content-body"><!-- Form repeater section start -->
                <section id="form-repeater">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="repeat-form">Repeating Forms</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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
                                        <div class="repeater-default">
                                            <div data-repeater-list="car">
                                                <div data-repeater-item>
                                                    <form class="form row">
                                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                                            <label for="email-addr">Email address</label>
                                                            <br>
                                                            <input type="email" class="form-control" id="email-addr" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                                            <label for="pass">Password</label>
                                                            <br>
                                                            <input type="password" class="form-control" id="pass" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                                            <label for="bio" class="cursor-pointer">Bio</label>
                                                            <br>
                                                            <textarea class="form-control" id="bio" rows="2"></textarea>
                                                        </div>
                                                        <div class="skin skin-flat form-group mb-1 col-sm-12 col-md-2">
                                                            <label for="tel-input">Gender</label>
                                                            <br>
                                                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="tel-input">
                                                        </div>
                                                        <div class="form-group mb-1 col-sm-12 col-md-2">
                                                            <label for="profession">Profession</label>
                                                            <br>
                                                            <select class="form-control" id="profession">
                                                                <option>Select Option</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-2 text-center mt-2">
                                                            <button type="button" class="btn btn-danger" data-repeater-delete><i class="ft-x"></i> Delete</button>
                                                        </div>
                                                    </form>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group overflow-hidden">
                                                <div class="col-12">
                                                    <button data-repeater-create class="btn btn-primary btn-lg">
                                                        <i class="icon-plus4"></i> Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Form repeater section end -->

                <!-- Form control repeater section start -->
                <section id="form-control-repeater">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="file-repeater">Project Info</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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

                                        <form class="form row">
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="Company" name="company">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="E-mail" name="email">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="Phone" name="phone">
                                            </div>

                                            <div class="form-group col-md-6 mb-2">
                                                <select name="interested" class="form-control">
                                                    <option value="none" selected="" disabled="">Interested in</option>
                                                    <option value="design">design</option>
                                                    <option value="development">development</option>
                                                    <option value="illustration">illustration</option>
                                                    <option value="branding">branding</option>
                                                    <option value="video">video</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <select name="budget" class="form-control">
                                                    <option value="0" selected="" disabled="">Budget</option>
                                                    <option value="less than 5000$">less than 5000$</option>
                                                    <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                    <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                    <option value="more than 20000$">more than 20000$</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 mb-2 file-repeater">
                                                <div data-repeater-list="repeater-list">
                                                    <div data-repeater-item>
                                                        <div class="row mb-1">
                                                            <div class="col-9 col-xl-10">
                                                                <label class="file center-block">
                                                                    <input type="file" id="file">
                                                                    <span class="file-custom"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-2 col-xl-1">
                                                                <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" data-repeater-create class="btn btn-primary">
                                                    <i class="icon-plus4"></i> Add new file
                                                </button>
                                            </div>
                                            <div class="form-group col-12 mb-2">
                                                <textarea rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="tel-repeater">User Profile</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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

                                        <form class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <input type="text" class="form-control" placeholder="Company" name="company">
                                            </div>
                                            <div class="form-group col-12 mb-2">
                                                <input type="text" class="form-control" placeholder="E-mail" name="email">
                                            </div>
                                            <div class="form-group col-12 mb-2 contact-repeater">

                                                <div data-repeater-list="repeater-group">
                                                    <div class="input-group mb-1" data-repeater-item>
                                                        <input type="tel" placeholder="Telephone" class="form-control" id="example-tel-input">
                                                        <div class="input-group-append">
                                            <span class="input-group-btn" id="button-addon2">
                                                <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" data-repeater-create class="btn btn-primary">
                                                    <i class="icon-plus4"></i> Add new telephone number
                                                </button>
                                            </div>
                                            <div class="form-group col-12 mb-2">
                                                <input type="text" class="form-control" placeholder="Occupation" name="occupation">
                                            </div>
                                            <div class="form-group col-12 mb-2">
                                                <textarea rows="5" class="form-control" name="bio" placeholder="Bio"></textarea>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Form control repeater section end -->

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
    <script src="{{asset('admin-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/forms/form-repeater.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
