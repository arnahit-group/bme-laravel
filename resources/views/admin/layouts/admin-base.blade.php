<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="rtl">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description"
              content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
        <meta name="keywords"
              content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
        <meta name="author" content="ThemeSelect">
        <meta name="_token" content="{{csrf_token()}}"/>
        <title>Dashboard Modern 2 | Materialize - Material Design Admin Template</title>
        <link rel="apple-touch-icon" href="{{asset('app-assets/images/favicon/apple-touch-icon-152x152.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/favicon/favicon-32x32.png')}}">
        <link href="../../../../fonts.googleapis.com/icon.css" rel="stylesheet">
        <!-- BEGIN: VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/vendors.min.css')}}">


        @yield('vendor-css')


        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css/themes/vertical-modern-menu-template/materialize-rtl.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset('app-assets/css/themes/vertical-modern-menu-template/style-rtl.css')}}">

        <!-- END: VENDOR CSS-->

        <!-- BEGIN: Page Level CSS-->
    @yield('header')
    <!-- END: Page Level CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/custom/custom.css')}}">
        <!-- END: Custom CSS-->
    </head>
    <!-- END: Head-->
    <body dir="rtl" class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  "
          data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

        <!-- BEGIN: Header-->
        <header class="page-topbar" id="header">
            <div class="navbar navbar-fixed">
                <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
                    <div class="nav-wrapper">
                        <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                            <input class="header-search-input z-depth-2" type="text" name="Search"
                                   placeholder="Explore Materialize">
                        </div>
                        <ul class="navbar-list">

                            <li>
                                <a class="waves-effect waves-block waves-light sidenav-trigger " href="#"
                                   data-target="slide-out-right">
                                    <i class="material-icons flipX">format_indent_increase</i>
                                </a>
                            </li>


                            <li>
                                <a class="waves-effect waves-block waves-light profile-button"
                                   href="javascript:void(0);" data-target="profile-dropdown">
                                    <span class="avatar-status avatar-online">
                                        <img src="{{asset('app-assets/images/avatar/avatar-7.png')}}"
                                             alt="avatar"><i></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a class="waves-effect waves-block waves-light notification-button"
                                   href="javascript:void(0);" data-target="notifications-dropdown">
                                    <i class="material-icons">notifications_none
                                        <small class="notification-badge">5</small>
                                    </i>
                                </a>
                            </li>

                            <li class="hide-on-large-only">
                                <a class="waves-effect waves-block waves-light search-button"
                                   href="javascript:void(0);">
                                    <i class="material-icons">search</i>
                                </a>
                            </li>


                            <li class="hide-on-med-and-down">
                                <a class="waves-effect waves-block waves-light toggle-fullscreen"
                                   href="javascript:void(0);"><i class="material-icons">settings_overscan</i>
                                </a>
                            </li>


                            <li class="hide-on-med-and-down">
                                <a class="waves-effect waves-block waves-light translation-button"
                                   href="javascript:void(0);" data-target="translation-dropdown">
                                    <span class="flag-icon flag-icon-gb"></span>
                                </a>
                            </li>


                        </ul>
                        <!-- translation-button-->
                        <ul class="dropdown-content" id="translation-dropdown">
                            <li><a class="grey-text text-darken-1" href="#!"><i
                                            class="flag-icon flag-icon-gb"></i> English</a></li>
                            <li><a class="grey-text text-darken-1" href="#!"><i
                                            class="flag-icon flag-icon-fr"></i> French</a></li>
                            <li><a class="grey-text text-darken-1" href="#!"><i
                                            class="flag-icon flag-icon-cn"></i> Chinese</a></li>
                            <li><a class="grey-text text-darken-1" href="#!"><i
                                            class="flag-icon flag-icon-de"></i> German</a></li>
                        </ul>
                        <!-- notifications-dropdown-->
                        <ul class="dropdown-content" id="notifications-dropdown">
                            <li>
                                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                            </li>
                            <li class="divider"></li>
                            <li><a class="grey-text text-darken-2" href="#!"><span
                                            class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A
                                    new
                                    order has been placed!</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="#!"><span
                                            class="material-icons icon-bg-circle red small">stars</span> Completed the
                                    task</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="#!"><span
                                            class="material-icons icon-bg-circle teal small">settings</span> Settings
                                    updated</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="#!"><span
                                            class="material-icons icon-bg-circle deep-orange small">today</span>
                                    Director
                                    meeting started</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="#!"><span
                                            class="material-icons icon-bg-circle amber small">trending_up</span>
                                    Generate
                                    monthly report</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                            </li>
                        </ul>
                        <!-- profile-dropdown-->
                        <ul class="dropdown-content" id="profile-dropdown">
                            <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i
                                            class="material-icons">person_outline</i> Profile</a></li>
                            <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i>
                                    Chat</a></li>
                            <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i>
                                    Help</a></li>
                            <li class="divider"></li>
                            <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i
                                            class="material-icons">lock_outline</i> Lock</a></li>
                            <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i>
                                    Logout</a></li>
                        </ul>
                    </div>
                    <nav class="display-none search-sm">
                        <div class="nav-wrapper">
                            <form>
                                <div class="input-field">
                                    <input class="search-box-sm" type="search" required="">
                                    <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i
                                            class="material-icons search-sm-close">close</i>
                                </div>
                            </form>
                        </div>
                    </nav>
                </nav>
            </div>
        </header>
        <!-- END: Header-->

        <!-- BEGIN: SideNav-->
        <aside class="sidenav-main nav-expanded nav-lock nav-collapsible  sidenav-active-square">
            <div class="brand-sidebar">
                <h1 class="logo-wrapper">
                    <a class="brand-logo darken-1" href="index.html">
                        <img src="{{asset('app-assets/images/logo/materialize-logo-color.png')}}"
                             alt="materialize logo"/>
                        <span class="logo-text hide-on-med-and-down">Materialize</span>
                    </a>
                    <a class="navbar-toggler"
                       href="#">
                        <i class="material-icons">radio_button_checked</i>
                    </a>
                </h1>
            </div>
            <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow"
                id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">


                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("dashboard")) === "dashboard" ? 'active open' : ''}}">

                    <a class="collapsible-header  waves-effect vawe-cyan" href="#">
                        <i class="material-icons">settings_input_svideo</i>
                        <span class="menu-title" data-i18n="">Dashboard</span>
                        <span class="badge badge pill orange float-right ml-10">3</span>
                    </a>

                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'dashboard-modern' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'dashboard-modern' ? 'active' : ''}}"
                                   href="{{route('dashboard-modern')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Modern</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'dashboard-ecommerce' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'dashboard-ecommerce' ? 'active' : ''}}"
                                   href="{{route('dashboard-ecommerce')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>eCommerce</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'dashboard-analytics' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'dashboard-analytics' ? 'active' : ''}}"
                                   href="{{route('dashboard-analytics')}}" data-i18n=""><i
                                            class="material-icons">radio_button_unchecked</i><span>Analytics</span></a>
                            </li>
                        </ul>
                    </div>

                </li>

                <li class="navigation-header"><a class="navigation-header-text">Applications</a><i
                            class="navigation-header-icon material-icons">more_horiz</i>
                </li>

                <li class="{{Route::getCurrentRoute()->getName() == 'app-email' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'app-email' ? 'active' : ''}}"
                       href="{{route('app-email')}}">
                        <i class="material-icons">mail_outline</i>
                        <span class="menu-title" data-i18n="">Mail</span>
                        <span class="badge new badge pill pink accent-2 float-right mr-10">5</span>
                    </a>
                </li>

                <li class="{{Route::getCurrentRoute()->getName() == 'app-chat' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'app-chat' ? 'active' : ''}}"
                       href="{{route('app-chat')}}">
                        <i class="material-icons">chat_bubble_outline</i>
                        <span class="menu-title" data-i18n="">Chat</span>
                    </a>
                </li>

                <li class="{{Route::getCurrentRoute()->getName() == 'app-todo' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'app-todo' ? 'active' : ''}}"
                       href="{{route('app-todo')}}">
                        <i class="material-icons">check</i>
                        <span class="menu-title" data-i18n="">ToDo</span>
                    </a>
                </li>

                <li class="{{Route::getCurrentRoute()->getName() == 'app-contacts' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'app-contacts' ? 'active' : ''}}"
                       href="{{route('app-contacts')}}">
                        <i class="material-icons">import_contacts</i>
                        <span class="menu-title" data-i18n="">Contacts</span>
                    </a>
                </li>

                <li class="{{Route::getCurrentRoute()->getName() == 'app-calendar' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'app-calendar' ? 'active' : ''}}"
                       href="{{route('app-calendar')}}">
                        <i class="material-icons">today</i>
                        <span class="menu-title" data-i18n="">Calendar</span>
                    </a>
                </li>

                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("ecommerce")) === "ecommerce" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">add_shopping_cart</i>
                        <span class="menu-title" data-i18n="">eCommerce</span>
                    </a>

                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'ecommerce-products-page' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ecommerce-products-page' ? 'active' : ''}}"
                                   href="{{route('ecommerce-products-page')}}"
                                   data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Products Page</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ecommerce-pricing' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ecommerce-pricing' ? 'active' : ''}}"
                                   href="{{route('ecommerce-pricing')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Pricing</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ecommerce-invoice' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ecommerce-invoice' ? 'active' : ''}}"
                                   href="{{route('ecommerce-invoice')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="navigation-header">
                    <a class="navigation-header-text">Pages </a>
                    <i class="navigation-header-icon material-icons">more_horiz</i>
                </li>

                <li class="bold">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">content_paste</i>
                        <span class="menu-title" data-i18n="">Pages</span>
                    </a>

                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-contact' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-contact' ? 'active' : ''}}"
                                   href="{{route('page-contact')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Contact</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-blog-list' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-blog-list' ? 'active' : ''}}"
                                   href="{{route('page-blog-list')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Blog</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-search' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-search' ? 'active' : ''}}"
                                   href="{{route('page-search')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Search</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-knowledge' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-knowledge' ? 'active' : ''}}"
                                   href="{{route('page-knowledge')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Knowledge</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-faq' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-faq' ? 'active' : ''}}"
                                   href="{{route('page-faq')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>FAQs</span></a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-blank' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-blank' ? 'active' : ''}}"
                                   href="{{route('page-blank')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Page Blank</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("media")) === "media" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">crop_original</i>
                        <span class="menu-title" data-i18n="">Medias</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'media-gallery-page' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'media-gallery-page' ? 'active' : ''}}"
                                   href="{{route('media-gallery-page')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Gallery Page</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'media-hover-effects' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'media-hover-effects' ? 'active' : ''}}"
                                   href="{{route('media-hover-effects')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Media Hover Effects</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("user")) === "user" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">face</i><span class="menu-title" data-i18n="">User</span>
                        <span class="badge badge pill purple float-right mr-10">10</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'user-profile-page' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'user-profile-page' ? 'active' : ''}}"
                                   href="{{route('user-profile-page')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>User Profile</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'user-login' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'user-login' ? 'active' : ''}}"
                                   href="{{route('user-login')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Login</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'user-register' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'user-register' ? 'active' : ''}}"
                                   href="{{route('user-register')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Register</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'user-forgot-password' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'user-forgot-password' ? 'active' : ''}}"
                                   href="{{route('user-forgot-password')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Forgot Password</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'user-lock-screen' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'user-lock-screen' ? 'active' : ''}}"
                                   href="{{route('user-lock-screen')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Lock Screen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("page")) === "page" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">filter_tilt_shift</i>
                        <span class="menu-title" data-i18n="">Misc</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-404' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-404' ? 'active' : ''}}"
                                   href="{{route('page-404')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>404</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-maintenance' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-maintenance' ? 'active' : ''}}"
                                   href="{{route('page-maintenance')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Page Maintenanace</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'page-500' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'page-500' ? 'active ' : ''}}"
                                   href="{{route('page-500')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>500</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="navigation-header">
                    <a class="navigation-header-text">User Interface </a>
                    <i class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("cards")) === "cards" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">cast</i>
                        <span class="menu-title" data-i18n="">Cards</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'cards-basic' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'cards-basic' ? 'active' : ''}}"
                                   href="{{route('cards-basic')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Cards</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'cards-advance' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'cards-advance' ? 'active' : ''}}"
                                   href="{{route('cards-advance')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Cards Advance</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'cards-extended' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'cards-extended' ? 'active' : ''}}"
                                   href="{{route('cards-extended')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Cards Extended</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("css")) === "css" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">invert_colors</i>
                        <span class="menu-title" data-i18n="">CSS</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-typography' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-typography' ? 'active' : ''}}"
                                   href="{{route('css-typography')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Typograpy</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-color' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-color' ? 'active' : ''}}"
                                   href="{{route('css-color')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Color</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-grid' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-grid' ? 'active' : ''}}"
                                   href="{{route('css-grid')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Grid</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-helpers' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-helpers' ? 'active' : ''}}"
                                   href="{{route('css-helpers')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Helpers</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-media' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-media' ? 'active' : ''}}"
                                   href="{{route('css-media')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Media</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-pulse' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-pulse' ? 'active' : ''}}"
                                   href="{{route('css-pulse')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Pulse</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-sass' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-sass' ? 'active' : ''}}"
                                   href="{{route('css-sass')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Sass</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-shadow' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-shadow' ? 'active' : ''}}"
                                   href="{{route('css-shadow')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Shadow</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-animations' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-animations' ? 'active' : ''}}"
                                   href="{{route('css-animations')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Animations</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'css-transitions' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'css-transitions' ? 'active' : ''}}"
                                   href="{{route('css-transitions')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Transitions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("ui")) === "ui" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">photo_filter</i>
                        <span class="menu-title" data-i18n="">Basic UI</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == "ui-basic-buttons" || Route::getCurrentRoute()->getName() == "ui-extended-buttons" ? 'bold active open' : ''}}">
                                <a class="collapsible-body collapsible-header waves-effect waves-cyan"
                                   href="#" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Buttons</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li class="{{Route::getCurrentRoute()->getName() == 'ui-basic-buttons' ? 'active bold open' : ''}}">
                                            <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-basic-buttons' ? 'active' : ''}}"
                                               href="{{route('ui-basic-buttons')}}"
                                               data-i18n="">
                                                <i class="material-icons">radio_button_unchecked</i><span>Basic</span>
                                            </a>
                                        </li>
                                        <li class="{{Route::getCurrentRoute()->getName() == 'ui-extended-buttons' ? 'active bold open' : ''}}">
                                            <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-extended-buttons' ? 'active' : ''}}"
                                               href="{{route('ui-extended-buttons')}}"
                                               data-i18n="">
                                                <i class="material-icons">radio_button_unchecked</i><span>Extended</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-icons' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-icons' ? 'active' : ''}}"
                                   href="{{route('ui-icons')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Icons</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-alerts' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-alerts' ? 'active' : ''}}"
                                   href="{{route('ui-alerts')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Alerts</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-badges' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-badges' ? 'active' : ''}}"
                                   href="{{route('ui-badges')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Badges</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-breadcrumbs' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-breadcrumbs' ? 'active' : ''}}"
                                   href="{{route('ui-breadcrumbs')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Breadcrumbs</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-chips' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-chips' ? 'active' : ''}}"
                                   href="{{route('ui-chips')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Chips</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-collections' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-collections' ? 'active' : ''}}"
                                   href="{{route('ui-collections')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Collections</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-navbar' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-navbar' ? 'active' : ''}}"
                                   href="{{route('ui-navbar')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Navbar</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-pagination' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-pagination' ? 'active' : ''}}"
                                   href="{{route('ui-pagination')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Pagination</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'ui-preloader' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'ui-preloader' ? 'active' : ''}}"
                                   href="{{route('ui-preloader')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Preloader</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("advance-ui")) === "advance-ui" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">settings_brightness</i>
                        <span class="menu-title" data-i18n="">Advanced UI</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-carousel' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-carousel' ? 'active' : ''}}"
                                   href="{{route('advance-ui-carousel')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Carousel</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-collapsibles' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-collapsibles' ? 'active' : ''}}"
                                   href="{{route('advance-ui-collapsibles')}}"
                                   data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Collapsibles</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-toasts' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-toasts' ? 'active' : ''}}"
                                   href="{{route('advance-ui-toasts')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Toasts</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-tooltip' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-tooltip' ? 'active' : ''}}"
                                   href="{{route('advance-ui-tooltip')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Tooltip</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-dropdown' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-dropdown' ? 'active' : ''}}"
                                   href="{{route('advance-ui-dropdown')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Dropdown</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-feature-discovery' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-feature-discovery' ? 'active' : ''}}"
                                   href="{{route('advance-ui-feature-discovery')}}"
                                   data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Discovery</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-media' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-media' ? 'active' : ''}}"
                                   href="{{route('advance-ui-media')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Media</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-modals' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-modals' ? 'active' : ''}}"
                                   href="{{route('advance-ui-modals')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Modals</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-scrollspy' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-scrollspy' ? 'active' : ''}}"
                                   href="{{route('advance-ui-scrollspy')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Scrollspy</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-tabs' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-tabs' ? 'active' : ''}}"
                                   href="{{route('advance-ui-tabs')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Tabs</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'advance-ui-waves' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'advance-ui-waves' ? 'active' : ''}}"
                                   href="{{route('advance-ui-waves')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Waves</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("extra-components")) === "extra-components" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">add_to_queue</i>
                        <span class="menu-title" data-i18n="">Extra Components</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'extra-components-range-slider' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'extra-components-range-slider' ? 'active' : ''}}"
                                   href="{{route('extra-components-range-slider')}}"
                                   data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Range Slider</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'extra-components-sweetalert' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'extra-components-sweetalert' ? 'active' : ''}}"
                                   href="{{route('extra-components-sweetalert')}}"
                                   data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Sweetalert</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'extra-components-nestable' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'extra-components-nestable' ? 'active' : ''}}"
                                   href="{{route('extra-components-nestable')}}"
                                   data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Nestable</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'extra-components-translation' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'extra-components-translation' ? 'active' : ''}}"
                                   href="{{route('extra-components-translation')}}"
                                   data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Translation</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'extra-components-highlight' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'extra-components-highlight' ? 'active' : ''}}"
                                   href="{{route('extra-components-highlight')}}"
                                   data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Highlight</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="navigation-header">
                    <a class="navigation-header-text">Tables &amp; Forms </a>
                    <i class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="{{Route::getCurrentRoute()->getName() == 'table-basic' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'table-basic' ? 'active' : ''}}"
                       href="{{route('table-basic')}}">
                        <i class="material-icons">border_all</i>
                        <span class="menu-title" data-i18n="">Basic Tables</span>
                    </a>
                </li>
                <li class="{{Route::getCurrentRoute()->getName() == 'table-data-table' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'table-data-table' ? 'active' : ''}}"
                       href="{{route('table-data-table')}}">
                        <i class="material-icons">grid_on</i>
                        <span class="menu-title" data-i18n="">Data Tables</span>
                    </a>
                </li>
                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("form")) === "form" ? 'active open' : ''}}" >
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">chrome_reader_mode</i>
                        <span class="menu-title" data-i18n="">Forms</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'form-elements' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'form-elements' ? 'active' : ''}}"
                                   href="{{route('form-elements')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Form Elements</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'form-validation' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'form-validation' ? 'active' : ''}}"
                                   href="{{route('form-validation')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Form Validation</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'form-masks' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'form-masks' ? 'active' : ''}}"
                                   href="{{route('form-masks')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Form Masks</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'form-file-uploads' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'form-file-uploads' ? 'active' : ''}}"
                                   href="{{route('form-file-uploads')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>File Uploads</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="{{Route::getCurrentRoute()->getName() == 'form-layouts' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'form-layouts' ? 'active' : ''}}"
                       href="{{route('form-layouts')}}">
                        <i class="material-icons">image_aspect_ratio</i>
                        <span class="menu-title" data-i18n="">Form Layouts</span>
                    </a>
                </li>
                <li class="{{Route::getCurrentRoute()->getName() == 'form-wizard' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'form-wizard' ? 'active' : ''}}"
                       href="{{route('form-wizard')}}">
                        <i class="material-icons">settings_ethernet</i>
                        <span class="menu-title" data-i18n="">Form Wizard</span>
                    </a>
                </li>
                <li class="navigation-header">
                    <a class="navigation-header-text">Charts &amp; Maps </a>
                    <i class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold {{substr(Route::getCurrentRoute()->getName() , 0, strlen("charts")) === "charts" ? 'active open' : ''}}">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">pie_chart_outlined</i>
                        <span class="menu-title" data-i18n="">Chart</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li class="{{Route::getCurrentRoute()->getName() == 'charts-chartjs' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'charts-chartjs' ? 'active' : ''}}"
                                   href="{{route('charts-chartjs')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>ChartJS</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'charts-chartist' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'charts-chartist' ? 'active' : ''}}"
                                   href="{{route('charts-chartist')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Chartist</span>
                                </a>
                            </li>
                            <li class="{{Route::getCurrentRoute()->getName() == 'charts-sparklines' ? 'active bold open' : ''}}">
                                <a class="collapsible-body {{Route::getCurrentRoute()->getName() == 'charts-sparklines' ? 'active' : ''}}"
                                   href="{{route('charts-sparklines')}}" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Sparkline Charts</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="navigation-header">
                    <a class="navigation-header-text">Misc </a>
                    <i class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold">
                    <a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">photo_filter</i>
                        <span class="menu-title" data-i18n="">Menu levels</span>
                    </a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li>
                                <a class="collapsible-body" href="#" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i>
                                    <span>Second level</span>
                                </a>
                            </li>
                            <li>
                                <a class="collapsible-body collapsible-header waves-effect waves-cyan"
                                   href="#" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Second level child</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li>
                                            <a class="collapsible-body" href="#" data-i18n="">
                                                <i class="material-icons">radio_button_unchecked</i><span>Third level</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="{{Route::getCurrentRoute()->getName() == 'changelog' ? 'active bold open' : ''}}">
                    <a class="waves-effect waves-cyan {{Route::getCurrentRoute()->getName() == 'changelog' ? 'active' : ''}}"
                       href="{{route('changelog')}}">
                        <i class="material-icons">track_changes</i>
                        <span class="menu-title" data-i18n="">Changelog</span>
                        <span class="badge badge pill light-blue float-right mr-10">5.1</span>
                    </a>
                </li>
                <li class="bold">
                    <a class="waves-effect waves-cyan " href="#">
                        <i class="material-icons">import_contacts</i>
                        <span class="menu-title" data-i18n="">Documentation</span>
                    </a>
                </li>
                <li class="bold">
                    <a class="waves-effect waves-cyan " href="#">
                        <i class="material-icons">help_outline</i>
                        <span class="menu-title" data-i18n="">Support</span>
                    </a>
                </li>
            </ul>
            <div class="navigation-background"></div>
            <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
               href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
        </aside>
        <!-- END: SideNav-->

        <!-- BEGIN: Page Main-->
    @yield('main')
    <!-- END: Page Main-->

        <!-- BEGIN: Footer-->
        <footer class="page-footer footer footer-dark gradient-shadow navbar-border navbar-shadow">
            <div class="footer-copyright">
                <div class="container"><span>&copy; 2019          <a
                                href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                                target="_blank">PIXINVENT</a> All rights reserved.</span><span
                            class="right hide-on-small-only">Design and Developed by <a
                                href="#">PIXINVENT</a></span></div>
            </div>
        </footer>
        <!-- END: Footer-->

        <!-- BEGIN VENDOR JS-->
        <script src="{{asset('app-assets/js/vendors.min.js')}}" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->

        <!-- BEGIN PAGE VENDOR JS-->

    @yield('vendor-js')
    <!-- END PAGE VENDOR JS-->

        <!-- BEGIN THEME  JS-->
        <script src="{{asset('app-assets/js/plugins.js')}}" type="text/javascript"></script>
        <script src="{{asset('app-assets/js/custom/custom-script.js')}}" type="text/javascript"></script>
        <!-- END THEME  JS-->

        <!-- BEGIN PAGE LEVEL JS-->
    @yield('footer')
    <!-- END PAGE LEVEL JS-->
    </body>
</html>