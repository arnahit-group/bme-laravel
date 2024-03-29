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
                    <h3 class="content-header-title mb-0">Form Actions</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="form-layout-form-actions.html#">Form Layouts</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="form-layout-form-actions.html#">Form Actions</a>
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
            <div class="content-body"><!-- Form actions layout section start -->
                <section id="form-action-layouts">
                    <div class="row match-height">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-top-left">Project Info</h4>
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
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Form Actions On Top Left.</strong>
                                            </div>
                                            <p>To add form actions on top of the form add a div with <code>.form-actions</code> class to begin the form. Add <code>.top</code> class
                                                to add border below form actions.</p>
                                        </div>
                                        <form class="form">
                                            <div class="form-actions top">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput1">First Name</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput2">Last Name</label>
                                                        <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput3">E-mail</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput4">Contact Number</label>
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                                    </div>
                                                </div>

                                                <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="projectinput5">Company</label>
                                                        <input type="text" id="projectinput5" class="form-control" placeholder="Company Name" name="company">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput6">Interested in</label>
                                                        <select id="projectinput6" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">Interested in</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput7">Budget</label>
                                                        <select id="projectinput7" name="budget" class="form-control">
                                                            <option value="0" selected="" disabled="">Budget</option>
                                                            <option value="less than 5000$">less than 5000$</option>
                                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                            <option value="more than 20000$">more than 20000$</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Select File</label>
                                                        <label id="projectinput8" class="file center-block">
                                                            <input type="file" id="file">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="projectinput9">About Project</label>
                                                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-bottom-right">User Profile</h4>
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
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Form Actions On Bottom Right.</strong>
                                            </div>

                                            <p>To add form actions on bottom of the form add a div with <code>.form-actions</code> class to end the form. This is the default
                                                position for form actions. We have added <code>.right</code> class to move buttons on the right side.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="fa fa-eye"></i> About User</h4>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="userinput1">Fist Name</label>
                                                        <input type="text" id="userinput1" class="form-control border-primary" placeholder="Name" name="name">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="userinput2">Last Name</label>
                                                        <input type="text" id="userinput2" class="form-control border-primary" placeholder="Company" name="company">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="userinput3">Username</label>
                                                        <input type="text" id="userinput3" class="form-control border-primary" placeholder="Username" name="username">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="userinput4">Nick Name</label>
                                                        <input type="text" id="userinput4" class="form-control border-primary" placeholder="Nick Name" name="nickname">
                                                    </div>
                                                </div>

                                                <h4 class="form-section"><i class="ft-mail"></i> Contact Info & Bio</h4>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="userinput5">Email</label>
                                                        <input class="form-control border-primary" type="email" placeholder="email" id="userinput5">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="userinput6">Website</label>
                                                        <input class="form-control border-primary" type="url" placeholder="http://" id="userinput6">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Contact Number</label>
                                                        <input class="form-control border-primary" type="tel" placeholder="Contact Number" id="userinput7">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="userinput8">Bio</label>
                                                        <textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Bio"></textarea>
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


                    <div class="row match-height">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-top-bottom-left">Issue Tracking</h4>
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
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Form Actions On Top And Bottom Left.</strong>
                                            </div>

                                            <p>To add form actions on top and bottom of the form add a div with <code>.form-actions</code> class to start and end the form.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-body">

                                                <div class="form-actions top">
                                                    <button type="button" class="btn btn-warning mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-check-square-o"></i> Save
                                                    </button>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput1">Issue Title</label>
                                                        <input type="text" id="issueinput1" class="form-control" placeholder="issue title" name="issuetitle" data-toggle="tooltip"
                                                               data-trigger="hover" data-placement="top" data-title="Issue Title">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput2">Opened By</label>
                                                        <input type="text" id="issueinput2" class="form-control" placeholder="opened by" name="openedby" data-toggle="tooltip"
                                                               data-trigger="hover" data-placement="top" data-title="Opened By">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="issueinput3">Date Opened</label>
                                                        <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip" data-trigger="hover"
                                                               data-placement="top" data-title="Date Opened">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="issueinput4">Date Fixed</label>
                                                        <input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip" data-trigger="hover"
                                                               data-placement="top" data-title="Date Fixed">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput5">Priority</label>
                                                        <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" data-title="Priority">
                                                            <option value="low">Low</option>
                                                            <option value="medium">Medium</option>
                                                            <option value="high">High</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput6">Status</label>
                                                        <select id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                                data-title="Status">
                                                            <option value="not started">Not Started</option>
                                                            <option value="started">Started</option>
                                                            <option value="fixed">Fixed</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="issueinput8">Comments</label>
                                                        <textarea id="issueinput8" rows="5" class="form-control" name="comments" placeholder="comments" data-toggle="tooltip"
                                                                  data-trigger="hover" data-placement="top" data-title="Comments"></textarea>
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

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-top-bottom-right">Timesheet</h4>
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
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Form Actions On Top And Bottom Right.</strong>
                                            </div>

                                            <p>To add form actions on top and bottom of the form add a div with <code>.form-actions</code> class to start and end the form. Add
                                                <code>.right</code> class to align the form action buttons to right.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-body">
                                                <div class="form-actions top right">
                                                    <button type="button" class="btn btn-warning mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-check-square-o"></i> Save
                                                    </button>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="timesheetinput1">Employee Name</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
                                                            <div class="form-control-position">
                                                                <i class="ft-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="timesheetinput2">Project Name</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput2" class="form-control" placeholder="project name" name="projectname">
                                                            <div class="form-control-position">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="timesheetinput3">Date</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                            <div class="form-control-position">
                                                                <i class="ft-message-square"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Rate Per Hour</label>
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

                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="timesheetinput5">Start Time</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                            <div class="form-control-position">
                                                                <i class="ft-clock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="timesheetinput6">End Time</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                            <div class="form-control-position">
                                                                <i class="ft-clock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="timesheetinput7">Notes</label>
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


                    <div class="row match-height">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-center-dropdown">Complaint Form</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Default</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="form-layout-form-actions.html#">Action</a>
                                                <a class="dropdown-item" href="form-layout-form-actions.html#">Another action</a>
                                                <a class="dropdown-item" href="form-layout-form-actions.html#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="form-layout-form-actions.html#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <div class="card-text">
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Form Actions On Center With Dropdown Form Action.</strong>
                                            </div>

                                            <p>To add form actions on bottom of the form add a div with <code>.form-actions</code> class to end the form. Add <code>.center</code>
                                                class to align the form action buttons to center. We can also add more form action using dropdown button to the top right corner of
                                                the form.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput1">Company Name</label>
                                                        <input type="text" id="complaintinput1" class="form-control round" placeholder="company name" name="companyname">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput2">Employee Name</label>
                                                        <input type="text" id="complaintinput2" class="form-control round" placeholder="employee name" name="employeename">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput3">Date of Complaint</label>
                                                        <input type="date" id="complaintinput3" class="form-control round" name="complaintdate">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput4">Supervisor's Name</label>
                                                        <input type="text" id="complaintinput4" class="form-control round" placeholder="supervisor name" name="supervisorname">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput5">Complaint Details</label>
                                                        <textarea id="complaintinput5" rows="5" class="form-control round" name="complaintdetails" placeholder="details"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput6">Signature</label>
                                                        <input type="text" id="complaintinput6" class="form-control round" placeholder="signature" name="signature">
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

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-center-search">Donation</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <input type="text" class="form-control round" placeholder="search" name="form-search">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <div class="card-text">
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Form Actions On Center With Search Form Action.</strong>
                                            </div>

                                            <p>To add form actions on bottom of the form add a div with <code>.form-actions</code> class to end the form. Add <code>.center</code>
                                                class to align the form action buttons to center. We can also search bar action of the form.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="donationinput1">Full Name</label>
                                                        <input type="text" id="donationinput1" class="form-control square" placeholder="name" name="fullname">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="donationinput2">Email</label>
                                                        <input type="email" id="donationinput2" class="form-control square" placeholder="email" name="email">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="donationinput3">Contact Number</label>
                                                        <input type="tel" id="donationinput3" class="form-control square" name="contact">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="donationinput4">Dontaion Type</label>
                                                        <input type="text" id="donationinput4" class="form-control square" placeholder="type of donation" name="donationtype">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Amount</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control square" placeholder="amount" aria-label="Amount (to the nearest dollar)"
                                                                   name="amount">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="donationinput7">Comments</label>
                                                        <textarea id="donationinput7" rows="5" class="form-control square" name="comments" placeholder="comments"></textarea>
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


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="from-actions-multiple">Event Registration</h4>
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
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Multiple Form Actions On Top And Bottom.</strong>
                                            </div>

                                            <p>To add form actions on top and bottom of the form add a div with <code>.form-actions</code> class to start and end the form. Add
                                                <code>.buttons-group</code> class along with <code>.float-*</code> class to pull the buttons group to either left or right.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-actions top clearfix">
                                                <div class="buttons-group float-left">
                                                    <button type="button" class="btn btn-warning mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary mr-1">
                                                        <i class="fa fa-check-square-o"></i> Save
                                                    </button>
                                                </div>

                                                <div class="buttons-group float-right">
                                                    <button type="button" class="btn btn-info mr-1">Action 1</button>
                                                    <button type="submit" class="btn btn-danger mr-1">Action 2</button>
                                                    <button type="submit" class="btn btn-success">Action 3</button>
                                                </div>
                                            </div>

                                            <div class="row justify-content-md-center">
                                                <div class="col-md-6">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput1">Full Name</label>
                                                                <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput2">Title</label>
                                                                <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput3">Company</label>
                                                                <input type="text" id="eventRegInput3" class="form-control" placeholder="company" name="company">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput4">Email</label>
                                                                <input type="email" id="eventRegInput4" class="form-control" placeholder="email" name="email">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label for="eventRegInput5">Contact Number</label>
                                                                <input type="tel" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12 mb-2">
                                                                <label>Existing Customer</label>
                                                                <div class="input-group">
                                                                    <div class="d-inline-block custom-control custom-radio mr-1">
                                                                        <input type="radio" name="customer1" class="custom-control-input" id="yes">
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
                                                </div>
                                            </div>

                                            <div class="form-actions clearfix">
                                                <div class="buttons-group float-left">
                                                    <button type="button" class="btn btn-warning mr-1">
                                                        <i class="ft-x"></i> Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary mr-1">
                                                        <i class="fa fa-check-square-o"></i> Save
                                                    </button>
                                                </div>

                                                <div class="buttons-group float-right">
                                                    <button type="button" class="btn btn-info mr-1">Action 1</button>
                                                    <button type="submit" class="btn btn-danger mr-1">Action 2</button>
                                                    <button type="submit" class="btn btn-success">Action 3</button>
                                                </div>
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
                                    <h4 class="card-title" id="from-actions-top-bottom-center">Event Registration</h4>
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
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Form Actions On Top And Bottom Center.</strong>
                                            </div>

                                            <p>To add form actions on top and bottom of the form add a div with <code>.form-actions</code> class to start and end the form. Add
                                                <code>.center</code> class to align the form action buttons to center.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-actions top center">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput1">Full Name</label>
                                                        <input type="text" id="eventInput1" class="form-control" placeholder="name" name="fullname">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput2">Title</label>
                                                        <input type="text" id="eventInput2" class="form-control" placeholder="title" name="title">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput3">Company</label>
                                                        <input type="text" id="eventInput3" class="form-control" placeholder="company" name="company">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput4">Email</label>
                                                        <input type="email" id="eventInput4" class="form-control" placeholder="email" name="email">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventInput5">Contact Number</label>
                                                        <input type="tel" id="eventInput5" class="form-control" name="contact" placeholder="contact number">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Existing Customer</label>
                                                        <div class="input-group">
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" name="customer2" class="custom-control-input" id="yes1">
                                                                <label class="custom-control-label" for="yes1">Yes</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio">
                                                                <input type="radio" name="customer2" class="custom-control-input" id="no1">
                                                                <label class="custom-control-label" for="no1">No</label>
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
                <!-- // Form actions layout section end -->
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
