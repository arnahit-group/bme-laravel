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
                    <h3 class="content-header-title mb-0">Striped Row Forms</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="form-layout-striped-rows.html#">Form Layouts</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="form-layout-striped-rows.html#">Striped Row Forms</a>
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
            <div class="content-body"><!-- Striped row layout section start -->
                <section id="striped-row-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="striped-row-layout-basic">Project Info</h4>
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
                                <div class="card-content collpase show">
                                    <div class="card-body">

                                        <div class="card-text">
                                            <p>Add <code>.striped-rows</code> to form tag to add striped rows. In this example <code>.form-horizontal</code> and <code>.form-bordered</code>
                                                is used to show the striped rows functionality.</p>
                                        </div>

                                        <form class="form form-horizontal striped-rows form-bordered">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput1">First Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput2">Last Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                                    </div>
                                                </div>

                                                <div class="form-group row last">
                                                    <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                                    </div>
                                                </div>

                                                <h4 class="form-section"><i class="fa fa-clipboard"></i> Requirements</h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput5">Company</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput5" class="form-control" placeholder="Company Name" name="company">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput6">Interested in</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput6" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">Interested in</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput7">Budget</label>
                                                    <div class="col-md-9">
                                                        <select id="projectinput7" name="budget" class="form-control">
                                                            <option value="0" selected="" disabled="">Budget</option>
                                                            <option value="less than 5000$">less than 5000$</option>
                                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                            <option value="more than 20000$">more than 20000$</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Select File</label>
                                                    <div class="col-md-9">
                                                        <label id="projectinput8" class="file center-block">
                                                            <input type="file" id="file">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group row last">
                                                    <label class="col-md-3 label-control" for="projectinput9">About Project</label>
                                                    <div class="col-md-9">
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="striped-row-layout-icons">Timesheet</h4>
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
                                <div class="card-content collpase show">
                                    <div class="card-body">

                                        <div class="card-text">
                                            <p>Add <code>.striped-rows</code> to form tag to add striped rows. In this example icons are used with form controls to show the striped
                                                rows functionality.</p>
                                        </div>

                                        <form class="form form-horizontal striped-rows form-bordered">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">Employee Name</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
                                                            <div class="form-control-position">
                                                                <i class="ft-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="timesheetinput2">Project Name</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput2" class="form-control" placeholder="project name" name="projectname">
                                                            <div class="form-control-position">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="timesheetinput3">Date</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                            <div class="form-control-position">
                                                                <i class="ft-message-square"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Rate Per Hour</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)"
                                                                   name="rateperhour">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="timesheetinput5">Start Time</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                            <div class="form-control-position">
                                                                <i class="ft-clock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="timesheetinput6">End Time</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                            <div class="form-control-position">
                                                                <i class="ft-clock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row last">
                                                    <label class="col-md-3 label-control" for="timesheetinput7">Notes</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
                                                            <div class="form-control-position">
                                                                <i class="ft-file"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions right">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="striped-row-layout-card-center">Event Registration</h4>
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
                                <div class="card-content collpase show">
                                    <div class="card-body">

                                        <div class="card-text">
                                            <p>Add <code>.striped-rows</code> to form tag to add striped rows. In this example centered card is used to show the striped rows
                                                functionality.</p>
                                        </div>

                                        <form class="form form-horizontal striped-rows">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="eventRegInput1">Full Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="eventRegInput2">Title</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="eventRegInput3">Company</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="eventRegInput3" class="form-control" placeholder="company" name="company">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="eventRegInput4">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="eventRegInput4" class="form-control" placeholder="email" name="email">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="eventRegInput5">Contact Number</label>
                                                    <div class="col-md-9">
                                                        <input type="tel" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                                                    </div>
                                                </div>

                                                <div class="form-group row last">
                                                    <label class="col-md-3 label-control">Existing Customer</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" name="customer1" class="custom-control-input" checked id="yes">
                                                                <label class="custom-control-label" for="yes">Yes</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="no">
                                                                <label class="custom-control-label" for="no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions center">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Striped row layout section end -->
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
