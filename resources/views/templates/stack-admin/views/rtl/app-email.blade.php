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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/simple-line-icons/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/app-email.min.css')}}">
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/simple-line-icons/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/app-email.min.css')}}">
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">

    @endif

@endsection

@section('main')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="content-overlay"></div>
                <div class="sidebar-content email-app-sidebar d-flex">
                    <div class="email-app-menu col-md-5 card">
                        <div class="form-group form-group-compose text-center">
                            <button type="button" class="btn btn-danger btn-block my-1"><i class="ft-mail"></i> Compose</button>
                        </div>
                        <h6 class="text-muted text-bold-500 mb-1">Messages</h6>
                        <div class="list-group list-group-messages">
                            <a href="app-email.html#" class="list-group-item active border-0">
                                <i class="ft-inbox mr-1"></i> Inbox <span class="badge badge-secondary badge-pill float-right">8</span>
                            </a>
                            <a href="app-email.html#" class="list-group-item list-group-item-action border-0"><i class="fa fa-paper-plane-o mr-1"></i> Sent</a>
                            <a href="app-email.html#" class="list-group-item list-group-item-action border-0"><i class="ft-file mr-1"></i> Draft</a>
                            <a href="app-email.html#" class="list-group-item list-group-item-action border-0"><i class="ft-star mr-1"></i> Starred<span
                                        class="badge badge-danger badge-pill float-right">3</span> </a>
                            <a href="app-email.html#" class="list-group-item list-group-item-action border-0"><i class="ft-trash-2 mr-1"></i> Trash</a>
                        </div>
                        <h6 class="text-muted text-bold-500 mt-1 mb-1">Labels</h6>
                        <div class="list-group list-group-messages">
                            <a href="app-email.html#" class="list-group-item list-group-item-action border-0">
                                <i class="ft-circle mr-1 warning"></i> Work <span class="badge badge-warning badge-pill float-right">5</span>
                            </a>
                            <!--<a href="#" class="list-group-item list-group-item-action border-0"><i class="ft-circle mr-1 danger"></i> Family</a>-->
                            <!--<a href="#" class="list-group-item list-group-item-action border-0"><i class="ft-circle mr-1 primary"></i> Friends</a>-->
                            <a href="app-email.html#" class="list-group-item list-group-item-action border-0"><i class="ft-circle mr-1 success"></i> Private <span
                                        class="badge badge-success badge-pill float-right">3</span> </a>
                        </div>
                    </div>
                    <div class="email-app-list-wraper col-md-7 card p-0">
                        <div class="email-app-list">
                            <div class="card-body chat-fixed-search">
                                <div class="sidebar-toggle d-block d-lg-none"><i class="ft-menu font-large-1"></i></div>
                                <fieldset class="form-group position-relative has-icon-left m-0 pb-1">
                                    <input type="text" class="form-control" id="iconLeft4" placeholder="Search email">
                                    <div class="form-control-position">
                                        <i class="ft-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="users-list" class="list-group">
                                <div class="users-list-padding media-list">
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-info">T</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading text-bold-500">Tonny Deep
                                                <span class="float-right"><span class="font-small-2 primary">4:14 AM</span></span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate text-bold-600 mb-0">PixInvent, I fount you...</p>
                                            <p class="list-group-item-text mb-0">I would be good.<span class="float-right"><span class="badge badge-danger mr-1">Family</span> <span
                                                            class="favorite"><i class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-danger">L</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading text-bold-500">Louis Welch <span class="float-right"><i class="fa-paperclip fa"></i> <span
                                                            class="font-small-2 primary">2:15 AM</span></span></h6>
                                            <p class="list-group-item-text text-truncate text-bold-600 mb-0">Thanks, Let's do it.</p>
                                            <p class="list-group-item-text mb-0">Can we connect today...<span class="float-right"><span class="favorite"><i
                                                                class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-warning">E</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading text-bold-500">Envato Market<span class="float-right"><span
                                                            class="font-small-2 primary">11:18 PM</span></span></h6>
                                            <p class="list-group-item-text text-truncate text-bold-600 mb-0">You have new comment...</p>
                                            <p class="list-group-item-text mb-0">Hi Pixinvent...<span class="float-right"><span class="badge badge-warning mr-1">Work</span> <span
                                                            class="favorite"><i class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media active">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md"><img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-7.png')}}"
                                                                alt="Generic placeholder image">
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Wayne Burton <span class="font-small-2 float-right">Today</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0">Project ABC Status...</p>
                                            <p class="list-group-item-text mb-0">Andy, Lte's...<span class="float-right"><span class="badge badge-success mr-1">Private</span> <span
                                                            class="favorite"><i class="font-medium-1 ft-star warning"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md"><img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-5.png')}}"
                                                                                alt="Generic placeholder image"></span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Sarah Montgomery <span class="font-small-2 float-right">Yesterday</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0">Your New UI.</p>
                                            <p class="list-group-item-text text-truncate mb-0">Everything looks good.</p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-success">H</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Heather Howell <span class="float-right"><i class="fa-paperclip fa"></i> <span class="font-small-2">15 July</span></span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</p>
                                            <p class="list-group-item-text mb-0">Can we connect today...<span class="float-right"><span class="favorite"><i
                                                                class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md"><img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-8.png')}}"
                                                                alt="Generic placeholder image">
                            <i></i>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Kelly Reyes <span class="font-small-2 float-right">12 July</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0">I paid it, Thanks.</p>
                                            <p class="list-group-item-text mb-0">Check once...<span class="float-right"><span class="badge badge-warning mr-1">Work</span> <span
                                                            class="favorite"><i class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-warning">V</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Vincent Nelson <span class="font-small-2 float-right">11 July</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0"><i class="ft-check primary font-small-2"></i> Where are you John?</p>
                                            <p class="list-group-item-text mb-0">Party tonight ?<span class="float-right"><span
                                                            class="badge badge-primary mr-1">Friends</span> <span class="favorite"><i
                                                                class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-info">E</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Elizabeth Elliott <span class="font-small-2 float-right">8 July</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0">Okay, I will call you.</p>
                                            <p class="list-group-item-text mb-0">Here they are work.<span class="float-right"><span class="favorite"><i
                                                                class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md"><img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-6.png')}}"
                                                                                alt="Generic placeholder image"></span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Sarah Montgomery <span class="font-small-2 float-right">Yesterday</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0">Your New UI.</p>
                                            <p class="list-group-item-text text-truncate mb-0">Everything looks good.<span class="float-right"><span class="favorite"><i
                                                                class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-success">H</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Heather Howell <span class="float-right"><i class="fa-paperclip fa"></i> <span class="font-small-2">15 July</span></span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</p>
                                            <p class="list-group-item-text mb-0">Can we connect today...<span class="float-right"><span class="favorite"><i
                                                                class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md"><img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-10.png')}}"
                                                                alt="Generic placeholder image">
                            <i></i>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Kelly Reyes <span class="font-small-2 float-right">12 July</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0">I paid it, Thanks.</p>
                                            <p class="list-group-item-text mb-0">Check once...<span class="float-right"><span class="badge badge-warning mr-1">Work</span> <span
                                                            class="favorite"><i class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-warning">V</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Vincent Nelson <span class="font-small-2 float-right">11 July</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0"><i class="ft-check primary font-small-2"></i> Where are you John?</p>
                                            <p class="list-group-item-text mb-0">Party tonight ?<span class="float-right"><span
                                                            class="badge badge-primary mr-1">Friends</span> <span class="favorite"><i
                                                                class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                    <a href="app-email.html#" class="media border-0">
                                        <div class="media-left pr-1">
                            <span class="avatar avatar-md">
                                <span class="media-object rounded-circle text-circle bg-info">E</span>
                            </span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Elizabeth Elliott <span class="font-small-2 float-right">8 July</span></h6>
                                            <p class="list-group-item-text text-truncate mb-0">Okay, I will call you.</p>
                                            <p class="list-group-item-text mb-0">Here they are work.<span class="float-right"><span class="favorite"><i
                                                                class="font-medium-1 ft-star"></i></span></span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="card email-app-details">
                        <div class="card-content">
                            <div class="d-block d-lg-none mt-1 ml-1">
                                <span class="btn btn-primary go-back"><i class="ft-arrow-left"></i> Back to Mails</span>
                            </div>
                            <div class="email-app-options card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Replay">
                                                <i class="fa fa-reply"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top"
                                                    data-original-title="Replay All"><i class="fa fa-reply-all"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top"
                                                    data-original-title="Report SPAM"><i class="ft-alert-octagon"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                                <i class="ft-trash-2"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top"
                                                    data-original-title="Previous"><i class="fa fa-angle-left"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Next"><i
                                                        class="fa fa-angle-right"></i></button>
                                        </div>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">More
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="app-email.html#">Mark as unread</a>
                                                <a class="dropdown-item" href="app-email.html#">Mark as unimportant</a>
                                                <a class="dropdown-item" href="app-email.html#">Add star</a>
                                                <a class="dropdown-item" href="app-email.html#">Add to task</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="app-email.html#">Filter mail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="email-app-title card-body">
                                <h3 class="list-group-item-heading">Project ABC Status Report</h3>
                                <p class="list-group-item-text"><span class="badge badge-primary">Previous</span> <span class="favorite"><i
                                                class="float-right font-medium-3 ft-star"></i></span></p>
                            </div>


                            <div class="media-list">
                                <div id="headingCollapse1" class="card-header p-0">
                                    <a data-toggle="collapse" href="app-email.html#collapse1" aria-expanded="true" aria-controls="collapse1"
                                       class="collapsed email-app-sender media border-0 bg-blue-grey bg-lighten-5">

                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md"><img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png')}}"
                                                                                alt="Generic placeholder image"></span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">John Doe</h6>
                                            <p class="list-group-item-text">Can you please provide me ABC Status Report. <span class="float-right text muted">12 July</span></p>
                                        </div>

                                    </a>
                                </div>

                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="card-collapse collapse" aria-expanded="true">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>Hi Wayne,</p>
                                            <p>Can you please provide me ABC Status Report.</p>
                                            <p>Gmail Material Design Concept. Please check the full project on Behance. Hope that will be fine for you.</p>
                                            <p>Thanks for your consideration !</p>
                                            <p>Regards,<br/>John</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="headingCollapse2" class="card-header p-0">
                                    <a data-toggle="collapse" href="app-email.html#collapse2" aria-expanded="false" aria-controls="collapse2"
                                       class="email-app-sender media border-0">

                                        <div class="media-left pr-1">
                                            <span class="avatar avatar-md"><img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-7.png')}}"
                                                                                alt="Generic placeholder image"></span>
                                        </div>
                                        <div class="media-body w-100">
                                            <h6 class="list-group-item-heading">Wayne Burton</h6>
                                            <p class="list-group-item-text">to me <span>Today</span>
                                                <span class="float-right">
								<i class="fa fa-reply mr-1"></i>
								<i class="fa fa-arrow-right mr-1"></i>
								<i class="fa fa-ellipsis-v"></i>
							</span>
                                            </p>
                                        </div>

                                    </a>
                                </div>
                                <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="card-collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="email-app-text card-body">
                                            <div class="email-app-message">
                                                <p>Hi John,</p>
                                                <p>Thanks for your feedback ! Here's a new layout for a new Stack Admin theme.</p>
                                                <p>We will start the new application development soon once this will be completed, I will provide you more details after this
                                                    Saturday. Hope that will be fine for you.</p>
                                                <p>Hope your like it, or feel free to comment, feedback or rebound !</p>
                                                <p>Cheers~</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-app-text-action card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/pages/app-email.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection

