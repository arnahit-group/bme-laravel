<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{in_array(App::getLocale(),config('base.rtl_locales')) ? 'rtl':'ltr'}}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Dashboard eCommerce - Stack Responsive Bootstrap 4 Admin Template</title>
        <link rel="apple-touch-icon" href="{{asset('admin-assets/images/ico/apple-icon-120.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-assets/images/ico/favicon.ico')}}">
{{--        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">--}}
        <link href="{{asset('admin-assets/fonts/google/css/fonts.google.css')}}" rel="stylesheet">


        @yield('vendor-css')

        @if(in_array(App::getLocale(),config('base.rtl_locales')))
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/bootstrap.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/bootstrap-extended.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/colors.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/components.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/custom-rtl.min.css')}}">
        @else
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bootstrap-extended.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/colors.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/components.min.css')}}">
        @endif

        @yield('header')

    </head>

    <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar content-left-sidebar email-application  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

        <!-- BEGIN: Header-->
        {{--        header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light bg-blue bg-lighten-5 border-blue border-lighten-4--}}
        {{--        header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-border navbar-shadow--}}
        <nav class="header-navbar navbar-expand-sm navbar navbar-with-menu fixed-top navbar-light bg-lighten-5 border-blue border-lighten-4 ">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="index.html#"><i
                                        class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="stack admin logo"
                                                                                                    src="{{asset('admin-assets/images/logo/stack-logo.png')}}">
                                <h2 class="brand-text">Stack</h2></a></li>
                        <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                                        class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                        <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                                        class="fa fa-ellipsis-v"></i></a></li>
                    </ul>
                </div>
                <div class="navbar-container content">
                    <div class="collapse navbar-collapse" id="navbar-mobile">
                        <ul class="nav navbar-nav mr-auto float-left">
                            <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="index.html#" data-toggle="dropdown">Mega</a>
                                <ul class="mega-dropdown-menu dropdown-menu row">
                                    <li class="col-md-2 col-sm-6">
                                        <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-newspaper-o"></i> News</h6>
                                        <div id="mega-menu-carousel-example">
                                            <div><img class="rounded img-fluid mb-1" src="{{asset('admin-assets/images/slider/slider-2.png')}}" alt="First slide"><a
                                                        class="news-title mb-0 d-block" href="index.html#">Poster Frame PSD</a>
                                                <p class="news-content"><span class="font-small-2">January 26, 2016</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6">
                                        <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-random"></i> Menu</h6>
                                        <ul>
                                            <li class="menu-list">
                                                <ul>
                                                    <li><a class="dropdown-item" href="layout-fixed.html"><i class="ft-file"></i> Page layouts</a></li>
                                                    <li><a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color pallet</a></li>
                                                    <li><a class="dropdown-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-static.html"><i class="ft-edit"></i>
                                                            Starter kit</a></li>
                                                    <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                                                    <li><a class="dropdown-item" href="../../../../pixinvent_ticksy_default.html"><i class="fa fa-life-ring"></i> Support center</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3 col-sm-6">
                                        <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-list-ul"></i> Accordion</h6>
                                        <div class="mt-1" id="accordionWrap" role="tablist" aria-multiselectable="true">
                                            <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                                                <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" href="index.html#accordionOne"
                                                                                                                         aria-expanded="true" aria-controls="accordionOne">Accordion
                                                        Item #1</a></div>
                                                <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionWrap"
                                                     aria-expanded="true">
                                                    <div class="card-content">
                                                        <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans.
                                                            Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                                                    </div>
                                                </div>
                                                <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse"
                                                                                                                         href="index.html#accordionTwo" aria-expanded="false"
                                                                                                                         aria-controls="accordionTwo">Accordion Item #2</a></div>
                                                <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionWrap"
                                                     aria-expanded="false">
                                                    <div class="card-content">
                                                        <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly
                                                            marshmallow cake. Pastry oat cake chupa chups.</p>
                                                    </div>
                                                </div>
                                                <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse"
                                                                                                                           href="index.html#accordionThree" aria-expanded="false"
                                                                                                                           aria-controls="accordionThree">Accordion Item #3</a>
                                                </div>
                                                <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionWrap"
                                                     aria-expanded="false">
                                                    <div class="card-content">
                                                        <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes
                                                            donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-envelope-o"></i> Contact Us</h6>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="inputName1">Name</label>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                                                            <div class="form-control-position pl-1"><i class="fa fa-user-o"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="inputEmail1">Email</label>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                                                            <div class="form-control-position pl-1"><i class="fa fa-envelope-o"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="inputMessage1">Message</label>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative has-icon-left">
                                                            <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                                                            <div class="form-control-position pl-1"><i class="fa fa-commenting-o"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 mb-1">
                                                        <button class="btn btn-primary float-right" type="button"><i class="fa fa-paper-plane-o"></i> Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="index.html#"><i class="ficon ft-maximize"></i></a></li>
                            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="index.html#"><i class="ficon ft-search"></i></a>
                                <div class="search-input">
                                    <input class="input" type="text" placeholder="Explore Stack...">
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="index.html#" data-toggle="dropdown"
                                                                               aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span
                                            class="selected-language"></span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="index.html#"><i class="flag-icon flag-icon-gb"></i>
                                        English</a><a class="dropdown-item" href="index.html#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item"
                                                                                                                                                   href="index.html#"><i
                                                class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="index.html#"><i class="flag-icon flag-icon-de"></i>
                                        German</a></div>
                            </li>
                            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="index.html#" data-toggle="dropdown"><i
                                            class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span
                                                    class="notification-tag badge badge-danger float-right m-0">5 New</span></h6>
                                    </li>
                                    <li class="scrollable-container media-list"><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading red darken-1">99% Server load</h6>
                                                    <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Complete the task</h6>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Generate monthly report</h6>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="index.html#" data-toggle="dropdown"><i
                                            class="ficon ft-mail"></i><span class="badge badge-pill badge-warning badge-up">3</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span
                                                    class="notification-tag badge badge-warning float-right m-0">4 New</span></h6>
                                    </li>
                                    <li class="scrollable-container media-list"><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img
                                                                src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Margaret Govan</h6>
                                                    <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img
                                                                src="{{asset('admin-assets/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Bret Lezama</h6>
                                                    <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img
                                                                src="{{asset('admin-assets/images/portrait/small/avatar-s-3.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Carie Berra</h6>
                                                    <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img
                                                                src="{{asset('admin-assets/images/portrait/small/avatar-s-6.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Eric Alsobrook</h6>
                                                    <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="index.html#" data-toggle="dropdown"><span
                                            class="avatar avatar-online"><img src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span><span
                                            class="user-name">John Doe</span></a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a
                                            class="dropdown-item" href="app-email.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i
                                                class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->
        <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow border-blue border-lighten-4 " data-scroll-to-active="true">
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span><span
                                    class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>
                        <ul class="menu-content">
                            <li class="active"><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dashboard-ecommerce'])}}">eCommerce</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dashboard-analytics'])}}">Analytics</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dashboard-fitness'])}}">Fitness</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" navigation-header">
                        <span>Apps</span>
                        <i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Apps"></i>
                    </li>
                    <li class=" nav-item">
                        <a href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'app-email'])}}">
                            <i class="ft-mail"></i>
                            <span class="menu-title" data-i18n="">Email Application</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'app-chat'])}}">
                            <i class="ft-message-square"></i> <span class="menu-title" data-i18n="">Chat Application</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'app-todo'])}}">
                            <i class="ft-check-square"></i><span class="menu-title" data-i18n="">Todo Application</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'app-contacts'])}}">
                            <i class="ft-users"></i><span class="menu-title" data-i18n="">Contacts</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'project-summary'])}}">
                            <i class="ft-airplay"></i><span class="menu-title" data-i18n="">Project Summary</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'invoice-template'])}}">
                            <i class="ft-printer"></i><span class="menu-title" data-i18n="">Invoice Template</span>
                        </a>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-share"></i><span class="menu-title" data-i18n="">Timelines</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'timeline-center'])}}">Timelines Center</a>
                            </li>
                            <li>
                                <a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'timeline-horizontal'])}}">Timelines Horizontal</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-user"></i><span class="menu-title" data-i18n="">Users</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'user-profile'])}}">Users Profile</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'user-cards'])}}">Users Cards</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-plus-square"></i><span class="menu-title" data-i18n="">Calender</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'full-calender-basic'])}}">Full Calender Basic</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'full-calender-events'])}}">Full Calender Events</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'full-calender-advance'])}}">Full Calender Advance</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'full-calender-extra'])}}">Full Calender Extra</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-image"></i><span class="menu-title" data-i18n="">Gallery</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gallery-grid'])}}">Gallery Grid</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gallery-grid-with-desc'])}}">Gallery Grid with Desc</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gallery-masonry'])}}">Masonry Gallery</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gallery-masonry-with-desc'])}}">Masonry Gallery with Desc</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gallery-hover-effects'])}}">Hover Effects</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-search"></i><span class="menu-title" data-i18n="">Search</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'search-page'])}}">Search Page</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'search-website'])}}">Search Website</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'search-images'])}}">Search Images</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'search-videos'])}}">Search Videos</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-unlock"></i><span class="menu-title" data-i18n="">Authentication</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'login-simple'])}}">Login Simple</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'login-with-bg'])}}">Login with Bg</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'login-with-bg-image'])}}">Login with Bg Image</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'register-simple'])}}">Register Simple</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'register-with-bg'])}}">Register with Bg</a>
                            </li>
                            <li><a class="menu-item"
                                   href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/register-with-bg-image.html">Register
                                    with Bg Image</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'unlock-user'])}}">Unlock User</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'recover-password'])}}">Recover Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-alert-triangle"></i><span class="menu-title" data-i18n="">Error</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'error-400'])}}">Error 400</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'error-401'])}}">Error 401</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'error-403'])}}">Error 403</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'error-404'])}}">Error 404</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'error-500'])}}">Error 500</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-watch"></i><span class="menu-title" data-i18n="">Coming Soon</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'coming-soon-flat'])}}">Flat</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'coming-soon-bg-image'])}}">Bg image</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'coming-soon-bg-video'])}}">Bg video</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'under-maintenance'])}}"><i class="ft-cloud-off"></i><span class="menu-title" data-i18n="">Maintenance</span></a>
                    </li>
                    <li class=" navigation-header"><span>UI</span><i class="ft-droplet ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="UI"></i>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-globe"></i><span class="menu-title" data-i18n="">Content</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'content-grid'])}}">Grid</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'content-typography'])}}">Typography</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'content-text-utilities'])}}">Text utilities</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'content-syntax-highlighter'])}}">Syntax highlighter</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'content-helper-classes'])}}">Helper classes</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-square"></i><span class="menu-title" data-i18n="">Cards</span><span
                                    class="badge badge badge-pill badge-success float-right mr-2">Hot</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-bootstrap'])}}">Bootstrap</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-headings'])}}">Headings</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-options'])}}">Options</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-actions'])}}">Action</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-draggable'])}}">Draggable</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-layers"></i><span class="menu-title" data-i18n="">Advance Cards</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-statistics'])}}">Statistics</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-weather'])}}">Weather</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-charts'])}}">Charts</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-maps'])}}">Maps</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-social'])}}">Social</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'card-ecommerce'])}}">E-Commerce</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Color Palette</span><span
                                    class="badge badge badge-warning badge-pill float-right mr-2">14</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-primary'])}}">Primary palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-danger'])}}">Danger palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-success'])}}">Success palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-warning'])}}">Warning palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-info'])}}">Info palette</a>
                            </li>
                            <li class="navigation-divider"></li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-red'])}}">Red palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-pink'])}}">Pink palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-purple'])}}">Purple palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-blue'])}}">Blue palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-cyan'])}}">Cyan palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-teal'])}}">Teal palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-yellow'])}}">Yellow palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-amber'])}}">Amber palette</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'color-palette-blue-grey'])}}">Blue Grey palette</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-eye"></i><span class="menu-title" data-i18n="">Icons</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'icons-feather'])}}">Feather</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'icons-font-awesome'])}}">Font Awesome</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'icons-simple-line-icons'])}}">Simple Line Icons</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'icons-meteocons'])}}">Meteocons</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" navigation-header"><span>Components</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Components"></i>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-briefcase"></i><span class="menu-title" data-i18n="">Bootstrap Components</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-alerts'])}}">Alerts</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-callout'])}}">Callout</a>
                            </li>
                            <li><a class="menu-item" href="">Buttons</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-buttons-basic'])}}">Basic Buttons</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-buttons-extended'])}}">Extended Buttons</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-carousel'])}}">Carousel</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-collapse'])}}">Collapse</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-dropdowns'])}}">Dropdowns</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-list-group'])}}">List Group</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-modals'])}}">Modals</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-pagination'])}}">Pagination</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-navs-component'])}}">Navs Component</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-tabs-component'])}}">Tabs Component</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-pills-component'])}}">Pills Component</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-tooltips'])}}">Tooltips</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-popovers'])}}">Popovers</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-badges'])}}">Badges</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-pill-badges'])}}">Pill Badges</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-progress'])}}">Progress</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-media-objects'])}}">Media Objects</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-scrollable'])}}">Scrollable</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-bs-spinner'])}}">Spinner</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-bs-toast'])}}">Toasts</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-box"></i><span class="menu-title" data-i18n="">Extra Components</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-sweet-alerts'])}}">Sweet Alerts</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-ratings'])}}">Ratings</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-toastr'])}}">Toastr</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-noui-slider'])}}">NoUI Slider</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-knob'])}}">Knob</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-block-ui'])}}">Block UI</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-date-time-picker'])}}">DateTime Picker</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-file-uploader-dropzone'])}}">File Uploader</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'ex-component-image-cropper'])}}">Image Cropper</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'component-spinners'])}}">Spinners</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-edit"></i><span class="menu-title" data-i18n="">Forms</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="">Form Elements</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-inputs'])}}">Form Inputs</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-input-groups'])}}">Input Groups</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-input-grid'])}}">Input Grid</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-extended-inputs'])}}">Extended Inputs</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-checkboxes-radios'])}}">Checkboxes &amp; Radios</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-switch'])}}">Switch</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-select2'])}}">Select2</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-tags-input'])}}">Tags Input</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-validation'])}}">Validation</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="">Form Layouts</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-layout-basic'])}}">Basic Forms</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-layout-horizontal'])}}">Horizontal Forms</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-layout-hidden-labels'])}}">Hidden Labels</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-layout-form-actions'])}}">Form Actions</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-layout-bordered'])}}">Bordered</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-layout-striped-rows'])}}">Striped Rows</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-wizard'])}}">Form Wizard</a>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'form-repeater'])}}">Form Repeater</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-grid"></i><span class="menu-title" data-i18n="">Tables</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="">Bootstrap Tables</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'table-basic'])}}">Basic Tables</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'table-border'])}}">Table Border</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'table-sizing'])}}">Table Sizing</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'table-styling'])}}">Table Styling</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'table-components'])}}">Table Components</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="">DataTables</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-basic-initialization'])}}">Basic Initialisation</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-advanced-initialization'])}}">Advanced initialisation</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-styling'])}}">Styling</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-data-sources'])}}">Data Sources</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-api'])}}">API</a>
                                    </li>
                                    <li><a class="menu-item" href="" data-i18n="nav.datatable_extensions.main">DataTables Ext.</a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-autofill'])}}" data-i18n="nav.datatable_extensions.dt_extensions_autofill">AutoFill</a>
                                            </li>
                                            <li><a class="menu-item" href="" data-i18n="nav.datatable_extensions.datatable_buttons.main">Buttons</a>
                                                <ul class="menu-content">
                                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-buttons-basic'])}}"
                                                           data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic">Basic Buttons</a>
                                                    </li>
                                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-buttons-html-5-data-export'])}}"
                                                           data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export">HTML 5 Data Export</a>
                                                    </li>
                                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-buttons-flash-data-export'])}}"
                                                           data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export">Flash Data Export</a>
                                                    </li>
                                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-buttons-column-visibility'])}}"
                                                           data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility">Column Visibility</a>
                                                    </li>
                                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-buttons-print'])}}"
                                                           data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print">Print</a>
                                                    </li>
                                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-buttons-api'])}}"
                                                           data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api">API</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-column-reorder'])}}" data-i18n="nav.datatable_extensions.dt_extensions_column_reorder">Column
                                                    Reorder</a>
                                            </li>
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-fixed-columns'])}}" data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns">Fixed
                                                    Columns</a>
                                            </li>
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-key-table'])}}" data-i18n="nav.datatable_extensions.dt_extensions_key_table">Key Table</a>
                                            </li>
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-row-reorder'])}}" data-i18n="nav.datatable_extensions.dt_extensions_row_reorder">Row
                                                    Reorder</a>
                                            </li>
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-select'])}}" data-i18n="nav.datatable_extensions.dt_extensions_select">Select</a>
                                            </li>
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-fix-header'])}}" data-i18n="nav.datatable_extensions.dt_extensions_fix_header">Fix
                                                    Header</a>
                                            </li>
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-responsive'])}}"
                                                   data-i18n="nav.datatable_extensions.dt_extensions_responsive">Responsive</a>
                                            </li>
                                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'dt-extensions-column-visibility'])}}"
                                                   data-i18n="nav.datatable_extensions.dt_extensions_column_visibility">Column Visibility</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'table-jsgrid'])}}">jsGrid</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">Charts</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="">Echarts</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'echarts-line-area-charts'])}}">Line &amp; Area charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'echarts-bar-column-charts'])}}">Bar &amp; Column charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'echarts-pie-doughnut-charts'])}}">Pie &amp; Doughnut charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'echarts-scatter-charts'])}}">Scatter charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'echarts-radar-chord-charts'])}}">Radar &amp; Chord charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'echarts-funnel-gauges-charts'])}}">Funnel &amp; Gauges charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'echarts-combination-charts'])}}">Combination charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'echarts-advance-charts'])}}">Advance charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="">Chartjs</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartjs-line-charts'])}}">Line charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartjs-bar-charts'])}}">Bar charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartjs-pie-doughnut-charts'])}}">Pie &amp; Doughnut charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartjs-scatter-charts'])}}">Scatter charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartjs-polar-radar-charts'])}}">Polar &amp; Radar charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartjs-advance-charts'])}}">Advance charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'morris-charts'])}}">Morris Charts</a>
                            </li>
                            <li><a class="menu-item" href="">Flot Charts</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'flot-line-charts'])}}">Line charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'flot-bar-charts'])}}">Bar charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'flot-pie-charts'])}}">Pie charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="">Chartist</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartist-line-charts'])}}">Line charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartist-bar-charts'])}}">Bar charts</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'chartist-pie-charts'])}}">Pie charts</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-map"></i><span class="menu-title" data-i18n="">Maps</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="">google Maps</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gmaps-basic-maps'])}}">Maps</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gmaps-services'])}}">Services</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gmaps-overlays'])}}">Overlays</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gmaps-routes'])}}">Routes</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'gmaps-utils'])}}">Utils</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'vector-maps-jvector'])}}">jVector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" navigation-header"><span>Others</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Others"></i>
                    </li>
                    <li class=" nav-item"><a href=""><i class="ft-align-left"></i><span class="menu-title" data-i18n="">Menu levels</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="">Second level</a>
                            </li>
                            <li><a class="menu-item" href="">Second level child</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="">Third level</a>
                                    </li>
                                    <li><a class="menu-item" href="">Third level child</a>
                                        <ul class="menu-content">
                                            <li><a class="menu-item" href="">Fourth level</a>
                                            </li>
                                            <li><a class="menu-item" href="">Fourth level</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="{{route('new2', ['locale'=>App::getLocale(), 'page'=>'changelog'])}}"><i class="ft-file"></i><span class="menu-title" data-i18n="">Changelog</span><span
                                    class="badge badge badge-pill badge-info float-right">3.2</span></a>
                    </li>
                    <li class="disabled nav-item"><a href=""><i class="ft-slash"></i><span class="menu-title" data-i18n="">Disabled Menu</span></a>
                    </li>
                    <li class=" nav-item"><a href="../../../../pixinvent_ticksy_default.html"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Raise Support</span></a>
                    </li>
                    <li class=" nav-item"><a href="https://pixinvent.com/stack-bootstrap-admin-template/documentation"><i class="ft-folder"></i><span class="menu-title"
                                                                                                                                                      data-i18n="">Documentation</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- BEGIN: Content-->
    @yield('main')
    <!-- END: Content-->


        <!-- BEGIN: Customizer-->
        <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block">
            <a class="customizer-close" href="index.html#">
                <i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-danger" href="index.html#"><i
                        class="ft-settings font-medium-3 fa-spin fa fa-spin fa-fw white"></i></a>
            <div class="customizer-content p-2">
                <h4 class="text-uppercase mb-0">Theme Customizer</h4>
                <hr>
                <p>Customize & Preview in Real Time</p>

                <h5 class="mt-1 text-bold-500">Layout Options</h5>
                <ul class="nav nav-tabs nav-underline nav-justified layout-options">
                    <li class="nav-item">
                        <a class="nav-link layouts active" id="baseIcon-tab21-base" data-toggle="tab" aria-controls="tabIcon21-base" href="index.html#tabIcon21-base"
                           aria-expanded="true">Layouts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navigation" id="baseIcon-tab22-base" data-toggle="tab" aria-controls="tabIcon22-base" href="index.html#tabIcon22-base"
                           aria-expanded="false">Navigation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar" id="baseIcon-tab23-base" data-toggle="tab" aria-controls="tabIcon23-base" href="index.html#tabIcon23-base" aria-expanded="false">Navbar</a>
                    </li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div role="tabpanel" class="tab-pane active" id="tabIcon21-base" aria-expanded="true" aria-labelledby="baseIcon-tab21-base">

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="collapsed-sidebar" id="collapsed-sidebar">
                            <label class="custom-control-label" for="collapsed-sidebar">Collapsed Menu</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="fixed-layout" id="fixed-layout">
                            <label class="custom-control-label" for="fixed-layout">Fixed Layout</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="static-layout" id="static-layout">
                            <label class="custom-control-label" for="static-layout">Static Layout</label>
                        </div>

                    </div>
                    <div class="tab-pane" id="tabIcon22-base" aria-labelledby="baseIcon-tab22-base">

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="native-scroll" id="native-scroll">
                            <label class="custom-control-label" for="native-scroll">Native Scroll</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="right-side-icons" id="right-side-icons">
                            <label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="bordered-navigation" id="bordered-navigation">
                            <label class="custom-control-label" for="bordered-navigation">Bordered Navigation</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="flipped-navigation" id="flipped-navigation">
                            <label class="custom-control-label" for="flipped-navigation">Flipped Navigation</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="collapsible-navigation" id="collapsible-navigation">
                            <label class="custom-control-label" for="collapsible-navigation">Collapsible Navigation</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="static-navigation" id="static-navigation">
                            <label class="custom-control-label" for="static-navigation">Static Navigation</label>
                        </div>

                    </div>
                    <div class="tab-pane" id="tabIcon23-base" aria-labelledby="baseIcon-tab23-base">

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="brand-center" id="brand-center">
                            <label class="custom-control-label" for="brand-center">Brand Center</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="navbar-static-top" id="navbar-static-top">
                            <label class="custom-control-label" for="navbar-static-top">Static Top</label>
                        </div>

                    </div>
                </div>

                <hr>

                <h5 class="mt-1 text-bold-500">Navigation Color Options</h5>
                <ul class="nav nav-tabs nav-underline nav-justified color-options">
                    <li class="nav-item">
                        <a class="nav-link nav-semi-light active" id="color-opt-1" data-toggle="tab" aria-controls="clrOpt1" href="index.html#clrOpt1" aria-expanded="false">Semi
                            Light</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-semi-dark" id="color-opt-2" data-toggle="tab" aria-controls="clrOpt2" href="index.html#clrOpt2" aria-expanded="false">Semi Dark</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-dark" id="color-opt-3" data-toggle="tab" aria-controls="clrOpt3" href="index.html#clrOpt3" aria-expanded="false">Dark</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-light" id="color-opt-4" data-toggle="tab" aria-controls="clrOpt4" href="index.html#clrOpt4" aria-expanded="true">Light</a>
                    </li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div role="tabpanel" class="tab-pane active" id="clrOpt1" aria-expanded="true" aria-labelledby="color-opt-1">
                        <div class="row">
                            <div class="col-6">
                                <h6>Solid</h6>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="default-solid">
                                    <label class="custom-control-label" for="default-solid">Default</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="primary-solid">
                                    <label class="custom-control-label" for="primary-solid">Primary</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="danger-solid">
                                    <label class="custom-control-label" for="danger-solid">Danger</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-success" id="success-solid">
                                    <label class="custom-control-label" for="success-solid">Success</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="blue">
                                    <label class="custom-control-label" for="blue">Blue</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="cyan">
                                    <label class="custom-control-label" for="cyan">Cyan</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="pink">
                                    <label class="custom-control-label" for="pink">Pink</label>
                                </div>

                            </div>
                            <div class="col-6">
                                <h6>Gradient</h6>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" checked class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue"
                                           id="bg-gradient-x-grey-blue">
                                    <label class="custom-control-label" for="bg-gradient-x-grey-blue">Default</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary">
                                    <label class="custom-control-label" for="bg-gradient-x-primary">Primary</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger">
                                    <label class="custom-control-label" for="bg-gradient-x-danger">Danger</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success">
                                    <label class="custom-control-label" for="bg-gradient-x-success">Success</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue">
                                    <label class="custom-control-label" for="bg-gradient-x-blue">Blue</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan">
                                    <label class="custom-control-label" for="bg-gradient-x-cyan">Cyan</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink">
                                    <label class="custom-control-label" for="bg-gradient-x-pink">Pink</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="clrOpt2" aria-labelledby="color-opt-2">

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" checked class="custom-control-input bg-default" data-bg="bg-default" id="opt-default">
                            <label class="custom-control-label" for="opt-default">Default</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="opt-primary">
                            <label class="custom-control-label" for="opt-primary">Primary</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="opt-danger">
                            <label class="custom-control-label" for="opt-danger">Danger</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="opt-success">
                            <label class="custom-control-label" for="opt-success">Success</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="opt-blue">
                            <label class="custom-control-label" for="opt-blue">Blue</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="opt-cyan">
                            <label class="custom-control-label" for="opt-cyan">Cyan</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="opt-pink">
                            <label class="custom-control-label" for="opt-pink">Pink</label>
                        </div>

                    </div>
                    <div class="tab-pane" id="clrOpt3" aria-labelledby="color-opt-3">
                        <div class="row">
                            <div class="col-6">
                                <h3>Solid</h3>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="solid-blue-grey">
                                    <label class="custom-control-label" for="solid-blue-grey">Default</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="solid-primary">
                                    <label class="custom-control-label" for="solid-primary">Primary</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="solid-danger">
                                    <label class="custom-control-label" for="solid-danger">Danger</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="solid-success">
                                    <label class="custom-control-label" for="solid-success">Success</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="solid-blue">
                                    <label class="custom-control-label" for="solid-blue">Blue</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="solid-cyan">
                                    <label class="custom-control-label" for="solid-cyan">Cyan</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="solid-pink">
                                    <label class="custom-control-label" for="solid-pink">Pink</label>
                                </div>

                            </div>

                            <div class="col-6">
                                <h3>Gradient</h3>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue"
                                           id="bg-gradient-x-grey-blue1">
                                    <label class="custom-control-label" for="bg-gradient-x-grey-blue1">Default</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary"
                                           id="bg-gradient-x-primary1">
                                    <label class="custom-control-label" for="bg-gradient-x-primary1">Primary</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger"
                                           id="bg-gradient-x-danger1">
                                    <label class="custom-control-label" for="bg-gradient-x-danger1">Danger</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-success" data-bg="bg-gradient-x-success"
                                           id="bg-gradient-x-success1">
                                    <label class="custom-control-label" for="bg-gradient-x-success1">Success</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue1">
                                    <label class="custom-control-label" for="bg-gradient-x-blue1">Blue</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan1">
                                    <label class="custom-control-label" for="bg-gradient-x-cyan1">Cyan</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink1">
                                    <label class="custom-control-label" for="bg-gradient-x-pink1">Pink</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="clrOpt4" aria-labelledby="color-opt-4">

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey bg-lighten-4" id="light-blue-grey">
                            <label class="custom-control-label" for="light-blue-grey">Default</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-primary" data-bg="bg-primary bg-lighten-4" id="light-primary">
                            <label class="custom-control-label" for="light-primary">Primary</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-danger" data-bg="bg-danger bg-lighten-4" id="light-danger">
                            <label class="custom-control-label" for="light-danger">Danger</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-success" data-bg="bg-success bg-lighten-4" id="light-success">
                            <label class="custom-control-label" for="light-success">Success</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-blue" data-bg="bg-blue bg-lighten-4" id="light-blue">
                            <label class="custom-control-label" for="light-blue">Blue</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan bg-lighten-4" id="light-cyan">
                            <label class="custom-control-label" for="light-cyan">Cyan</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-pink" data-bg="bg-pink bg-lighten-4" id="light-pink">
                            <label class="custom-control-label" for="light-pink">Pink</label>
                        </div>

                    </div>
                </div>

                <hr>

                <h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
                <div class="form-group">
                    <!-- Outline Button group -->
                    <div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-info" data-sidebar="menu-light">Light Menu</button>
                        <button type="button" class="btn btn-outline-info" data-sidebar="menu-dark">Dark Menu</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Customizer-->

        <!-- Buynow Button-->
        <div class="buy-now">
            <a href="https://goo.gl/nJZ5V1" target="_blank" class="btn bg-gradient-directional-purple white btn-purple btn-glow px-2">Buy Now</a>
        </div>
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light navbar-border">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2019 <a
                            class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                            target="_blank">PIXINVENT 			</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i
                            class="ft-heart pink"></i></span></p>
        </footer>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
    @yield('vendor-js')
    <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{asset('admin-assets/js/core/app-menu.min.js')}}"></script>
        <script src="{{asset('admin-assets/js/core/app.min.js')}}"></script>
        <script src="{{asset('admin-assets/js/scripts/customizer.min.js')}}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
    @yield('footer')
    <!-- END: Page JS-->

    </body>
    <!-- END: Body-->
</html>