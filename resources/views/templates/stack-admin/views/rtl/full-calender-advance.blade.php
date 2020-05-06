@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/calendars/fullcalendar.min.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/calendars/fullcalendar.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/calendars/fullcalendar.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Full Calendar Advance</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Full Calendar
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
            <div class="content-body"><!-- Full calendar advance example section start -->
                <section id="advance-examples">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">External Dragging</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">Add extended dragging functionality with droppable option. Data can be attached to the element in order to specify its
                                            duration when dropped. A <code>Duration</code>-ish value can be provided. This can either be done via jQuery or via an <code>data-duration</code>
                                            attribute. This option operates with jQuery UI draggables. You must <code>download</code> the appropriate jQuery UI files and initialize
                                            a <code>draggable</code> element. Additionally, you must set the calendar's <code>droppable</code> option to <code>true</code>.</p>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div id='external-events'>
                                                    <h4>Draggable Events</h4>
                                                    <div class="fc-events-container">
                                                        <div class='fc-event' data-color='#2D95BF'>All Day Event</div>
                                                        <div class='fc-event' data-color='#48CFAE'>Long Event</div>
                                                        <div class='fc-event' data-color='#50C1E9'>Meeting</div>
                                                        <div class='fc-event' data-color='#FB6E52'>Birthday party</div>
                                                        <div class='fc-event' data-color='#ED5564'>Lunch</div>
                                                        <div class='fc-event' data-color='#F8B195'>Conference Meeting</div>
                                                        <div class='fc-event' data-color='#6C5B7B'>Party</div>
                                                        <div class='fc-event' data-color='#355C7D'>Happy Hour</div>
                                                        <div class='fc-event' data-color='#547A8B'>Dance party</div>
                                                        <div class='fc-event' data-color='#3EACAB'>Dinner</div>
                                                        <p>
                                                            <input type='checkbox' id='drop-remove'/>
                                                            <label for='drop-remove'>remove after drop</label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div id='fc-external-drag'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Selectable</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">Allows a user to highlight multiple days or timeslots by clicking and dragging. To let the user make selections by
                                            clicking and dragging, <code>selectable</code> option must be set to <code>true</code>. The <code>select</code> and
                                            <code>unselect</code> callbacks will be useful for monitoring when selections are made and cleared.</p>
                                        <div id='fc-selectable'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Full calendar advance example section end -->
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
    <script src="{{asset('admin-assets/vendors/js/extensions/moment.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/extensions/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/jquery-ui.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/extensions/fullcalendar.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
