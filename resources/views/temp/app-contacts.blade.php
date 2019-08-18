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
<html class="loading" data-textdirection="ltr" lang="en">
    <!-- BEGIN: Head-->
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" name="viewport">
        <meta content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google."
              name="description">
        <meta content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard"
              name="keywords">
        <meta content="ThemeSelect" name="author">
        <title>App Contacts | Materialize - Material Design Admin Template</title>
        <link href="{{asset('app-assets/images/favicon/apple-touch-icon-152x152.png')}}" rel="apple-touch-icon">
        <link href="{{asset('app-assets/images/favicon/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon">
        <link href="../../../../fonts.googleapis.com/icon.css" rel="stylesheet">
        <!-- BEGIN: VENDOR CSS-->
        <link href="{{asset('app-assets/vendors/vendors.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('app-assets/vendors/flag-icon/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}" rel="stylesheet"
              type="text/css">
        <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}" rel="stylesheet"
              type="text/css">

        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/materialize-rtl.css')}}" rel="stylesheet"
              type="text/css">





        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/style.css')}}" rel="stylesheet"
              type="text/css">


        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/style-rtl.css')}}" rel="stylesheet"
              type="text/css">


        <link href="{{asset('app-assets/css/pages/app-sidebar.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('app-assets/css/pages/app-contacts.css')}}" rel="stylesheet" type="text/css">
        <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link href="{{asset('app-assets/css/custom/custom.css')}}" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->
    </head>
    <!-- END: Head-->
    <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  app-page"
          data-col="2-columns" data-menu="vertical-modern-menu" data-open="click">

        <!-- BEGIN: Header-->
        <header class="page-topbar" id="header">
            <div class="navbar navbar-fixed">
                <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
                    <div class="nav-wrapper">
                        <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                            <input class="header-search-input z-depth-2" name="Search" placeholder="Explore Materialize"
                                   type="text">
                        </div>
                        <ul class="navbar-list right">
                            <li class="hide-on-med-and-down"><a
                                        class="waves-effect waves-block waves-light translation-button"
                                        data-target="translation-dropdown" href="javascript:void(0);"><span
                                            class="flag-icon flag-icon-gb"></span></a></li>
                            <li class="hide-on-med-and-down"><a
                                        class="waves-effect waves-block waves-light toggle-fullscreen"
                                        href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                            <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button"
                                                              href="javascript:void(0);"><i class="material-icons">search</i></a>
                            </li>
                            <li><a class="waves-effect waves-block waves-light notification-button"
                                   data-target="notifications-dropdown" href="javascript:void(0);"><i
                                            class="material-icons">notifications_none
                                        <small class="notification-badge">5</small>
                                    </i></a></li>
                            <li><a class="waves-effect waves-block waves-light profile-button"
                                   data-target="profile-dropdown" href="javascript:void(0);"><span
                                            class="avatar-status avatar-online"><img
                                                alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"><i></i></span></a>
                            </li>
                            <li><a class="waves-effect waves-block waves-light sidenav-trigger"
                                   data-target="slide-out-right" href="app-contacts.html#"><i class="material-icons">format_indent_increase</i></a>
                            </li>
                        </ul>
                        <!-- translation-button-->
                        <ul class="dropdown-content" id="translation-dropdown">
                            <li><a class="grey-text text-darken-1" href="app-contacts.html#!"><i
                                            class="flag-icon flag-icon-gb"></i> English</a></li>
                            <li><a class="grey-text text-darken-1" href="app-contacts.html#!"><i
                                            class="flag-icon flag-icon-fr"></i> French</a></li>
                            <li><a class="grey-text text-darken-1" href="app-contacts.html#!"><i
                                            class="flag-icon flag-icon-cn"></i> Chinese</a></li>
                            <li><a class="grey-text text-darken-1" href="app-contacts.html#!"><i
                                            class="flag-icon flag-icon-de"></i> German</a></li>
                        </ul>
                        <!-- notifications-dropdown-->
                        <ul class="dropdown-content" id="notifications-dropdown">
                            <li>
                                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                            </li>
                            <li class="divider"></li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
                                            class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new
                                    order has been placed!</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
                                            class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
                                            class="material-icons icon-bg-circle teal small">settings</span> Settings
                                    updated</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
                                            class="material-icons icon-bg-circle deep-orange small">today</span> Director
                                    meeting started</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
                                            class="material-icons icon-bg-circle amber small">trending_up</span> Generate
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
                                    <input class="search-box-sm" required="" type="search">
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
        <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
            <div class="brand-sidebar">
                <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img
                                alt="materialize logo" src="../../../app-assets/images/logo/materialize-logo-color.png"/><span
                                class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler"
                                                                                                href="app-contacts.html#"><i
                                class="material-icons">radio_button_checked</i></a></h1>
            </div>
            <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow"
                data-collapsible="menu-accordion" data-menu="menu-navigation" id="slide-out">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">settings_input_svideo</i><span class="menu-title"
                                                                                      data-i18n="">Dashboard</span><span
                                class="badge badge pill orange float-right mr-10">3</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="dashboard-modern.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Modern</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="dashboard-ecommerce.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>eCommerce</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="dashboard-analytics.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Analytics</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">dvr</i><span class="menu-title" data-i18n="">Templates</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body collapsible-header waves-effect waves-cyan"
                                   data-i18n="" href="app-contacts.html#"><i class="material-icons">radio_button_unchecked</i><span>Vertical</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li><a class="collapsible-body" data-i18n=""
                                               href="vertical-modern-menu-template.html"><i class="material-icons">radio_button_unchecked</i><span>Modern  Menu</span></a>
                                        </li>
                                        <li><a class="collapsible-body"
                                               data-i18n=""
                                               href="../vertical-menu-nav-dark-template/vertical-menu-nav-dark-template.html"><i class="material-icons">radio_button_unchecked</i><span>Navbar Dark</span></a>
                                        </li>
                                        <li><a class="collapsible-body"
                                               data-i18n=""
                                               href="../vertical-gradient-menu-template/vertical-gradient-menu-template.html"><i class="material-icons">radio_button_unchecked</i><span>Gradient Menu</span></a>
                                        </li>
                                        <li><a class="collapsible-body" data-i18n=""
                                               href="../vertical-dark-menu-template.html"><i class="material-icons">radio_button_unchecked</i><span>Dark Menu</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="collapsible-body collapsible-header waves-effect waves-cyan"
                                   data-i18n="" href="app-contacts.html#"><i class="material-icons">radio_button_unchecked</i><span>Horizontal</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li><a class="collapsible-body"
                                               data-i18n=""
                                               href="../horizontal-menu-template/horizontal-menu-template.html"><i class="material-icons">radio_button_unchecked</i><span>Horizontal Menu</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="navigation-header"><a class="navigation-header-text">Applications</a><i
                            class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i class="material-icons">mail_outline</i><span
                                class="menu-title" data-i18n="">Mail</span><span
                                class="badge new badge pill pink accent-2 float-right mr-10">5</span></a>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span
                                class="menu-title" data-i18n="">Chat</span></a>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i class="material-icons">check</i><span
                                class="menu-title" data-i18n="">ToDo</span></a>
                </li>
                <li class="active bold"><a class="waves-effect waves-cyan active " href="app-contacts.html"><i
                                class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Contacts</span></a>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="app-calendar.html"><i class="material-icons">today</i><span
                                class="menu-title" data-i18n="">Calendar</span></a>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">add_shopping_cart</i><span class="menu-title"
                                                                                  data-i18n="">eCommerce</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="eCommerce-products-page.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="eCommerce-pricing.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="eCommerce-invoice.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="navigation-header"><a class="navigation-header-text">Pages </a><i
                            class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Pages</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="page-contact.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Contact</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="page-blog-list.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Blog</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="page-search.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Search</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="page-knowledge.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Knowledge</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="page-faq.html"><i class="material-icons">radio_button_unchecked</i><span>FAQs</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="page-blank.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Page Blank</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">crop_original</i><span class="menu-title" data-i18n="">Medias</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="media-gallery-page.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Gallery Page</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="media-hover-effects.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Media Hover Effects</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">face</i><span class="menu-title" data-i18n="">User</span><span
                                class="badge badge pill purple float-right mr-10">10</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="user-profile-page.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>User Profile</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="user-login.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Login</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="user-register.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Register</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="user-forgot-password.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Forgot Password</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="user-lock-screen.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Lock Screen</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">filter_tilt_shift</i><span class="menu-title"
                                                                                  data-i18n="">Misc</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="page-404.html"><i class="material-icons">radio_button_unchecked</i><span>404</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="page-maintenance.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Page Maintenanace</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="page-500.html"><i class="material-icons">radio_button_unchecked</i><span>500</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i
                            class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">cast</i><span class="menu-title" data-i18n="">Cards</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="cards-basic.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Cards</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="cards-advance.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Cards Advance</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="cards-extended.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Cards Extended</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">invert_colors</i><span class="menu-title" data-i18n="">CSS</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="css-typography.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Typograpy</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-color.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Color</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-grid.html"><i class="material-icons">radio_button_unchecked</i><span>Grid</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-helpers.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Helpers</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-media.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Media</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-pulse.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Pulse</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-sass.html"><i class="material-icons">radio_button_unchecked</i><span>Sass</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-shadow.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Shadow</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-animations.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Animations</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="css-transitions.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Transitions</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Basic UI</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body collapsible-header waves-effect waves-cyan"
                                   data-i18n="" href="app-contacts.html#"><i class="material-icons">radio_button_unchecked</i><span>Buttons</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li><a class="collapsible-body" data-i18n="" href="ui-basic-buttons.html"><i
                                                        class="material-icons">radio_button_unchecked</i><span>Basic</span></a>
                                        </li>
                                        <li><a class="collapsible-body" data-i18n="" href="ui-extended-buttons.html"><i
                                                        class="material-icons">radio_button_unchecked</i><span>Extended</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-icons.html"><i class="material-icons">radio_button_unchecked</i><span>Icons</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-alerts.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Alerts</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-badges.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Badges</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-breadcrumbs.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Breadcrumbs</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-chips.html"><i class="material-icons">radio_button_unchecked</i><span>Chips</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-collections.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Collections</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-navbar.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Navbar</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-pagination.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Pagination</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="ui-preloader.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Preloader</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">settings_brightness</i><span class="menu-title"
                                                                                    data-i18n="">Advanced UI</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-carousel.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Carousel</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-collapsibles.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Collapsibles</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-toasts.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Toasts</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-tooltip.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Tooltip</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-dropdown.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Dropdown</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-feature-discovery.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Discovery</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-media.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Media</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-modals.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Modals</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-scrollspy.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Scrollspy</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-tabs.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Tabs</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="advance-ui-waves.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Waves</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">add_to_queue</i><span class="menu-title"
                                                                             data-i18n="">Extra Components</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="extra-components-range-slider.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Range Slider</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="extra-components-sweetalert.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Sweetalert</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="extra-components-nestable.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Nestable</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="extra-components-translation.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Translation</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="extra-components-highlight.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Highlight</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i
                            class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="table-basic.html"><i class="material-icons">border_all</i><span
                                class="menu-title" data-i18n="">Basic Tables</span></a>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="table-data-table.html"><i
                                class="material-icons">grid_on</i><span class="menu-title" data-i18n="">Data Tables</span></a>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="">Forms</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="form-elements.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Form Elements</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="form-validation.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Form Validation</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="form-masks.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Form Masks</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="form-file-uploads.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>File Uploads</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span
                                class="menu-title" data-i18n="">Form Layouts</span></a>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i class="material-icons">settings_ethernet</i><span
                                class="menu-title" data-i18n="">Form Wizard</span></a>
                </li>
                <li class="navigation-header"><a class="navigation-header-text">Charts &amp; Maps </a><i
                            class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="">Chart</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="charts-chartjs.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>ChartJS</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="charts-chartist.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Chartist</span></a>
                            </li>
                            <li><a class="collapsible-body" data-i18n="" href="charts-sparklines.html"><i
                                            class="material-icons">radio_button_unchecked</i><span>Sparkline Charts</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="navigation-header"><a class="navigation-header-text">Misc </a><i
                            class="navigation-header-icon material-icons">more_horiz</i>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Menu levels</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-body" data-i18n="" href="app-contacts.html#"><i
                                            class="material-icons">radio_button_unchecked</i><span>Second level</span></a>
                            </li>
                            <li><a class="collapsible-body collapsible-header waves-effect waves-cyan"
                                   data-i18n="" href="app-contacts.html#"><i class="material-icons">radio_button_unchecked</i><span>Second level child</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li><a class="collapsible-body" data-i18n="" href="app-contacts.html#"><i
                                                        class="material-icons">radio_button_unchecked</i><span>Third level</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="changelog.html"><i class="material-icons">track_changes</i><span
                                class="menu-title" data-i18n="">Changelog</span><span
                                class="badge badge pill light-blue float-right mr-10">5.1</span></a>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="../../../documentation/index.html"><i
                                class="material-icons">import_contacts</i><span class="menu-title"
                                                                                data-i18n="">Documentation</span></a>
                </li>
                <li class="bold"><a class="waves-effect waves-cyan " href="../../../../pixinvent_ticksy_default.html"><i
                                class="material-icons">help_outline</i><span class="menu-title" data-i18n="">Support</span></a>
                </li>
            </ul>
            <div class="navigation-background"></div>
            <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
               data-target="slide-out" href="app-contacts.html#"><i class="material-icons">menu</i></a>
        </aside>
        <!-- END: SideNav-->

        <!-- BEGIN: Page Main-->
        <div id="main">
            <div class="row">
                <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
                <div class="col s12">
                    <div class="container">
                        <!-- Add new contact popup -->
                        <div class="fixed-action-btn direction-top" style="bottom: 54px; right: 19px;">
                            <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger"
                               href="app-contacts.html#modal1">
                                <i class="material-icons">person_add</i>
                            </a>
                        </div>
                        <!-- Add new contact popup Ends-->

                        <!-- Modal Structure -->
                        <div class="modal border-radius-6" id="modal1">
                            <div class="modal-content">
                                <h5 class="mt-0">Create new contact</h5>
                                <hr>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <i class="material-icons prefix"> perm_identity </i>
                                                <input class="validate" id="first_name" type="text">
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <i class="material-icons prefix"> perm_identity </i>
                                                <input class="validate" id="last_name" type="text">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <i class="material-icons prefix"> business </i>
                                                <input class="validate" id="company" type="text">
                                                <label for="company">Company</label>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <i class="material-icons prefix"> business_center </i>
                                                <input class="validate" id="business" type="text">
                                                <label for="business">Job Title</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix"> email </i>
                                                <input class="validate" id="email" type="email">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix"> call </i>
                                                <input class="validate" id="phone" type="number">
                                                <label for="phone">Phone</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix"> note </i>
                                                <input class="validate" id="notes" type="text">
                                                <label for="notes">Notes</label>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a class="btn modal-close waves-effect waves-light mr-2">Add Contact</a>
                            </div>
                        </div>
                        <!-- Modal Structure Ends -->

                        <!-- Sidebar Area Starts -->
                        <div class="sidebar-left sidebar-fixed">
                            <div class="sidebar">
                                <div class="sidebar-content">
                                    <div class="sidebar-header">
                                        <div class="sidebar-details">
                                            <h5 class="m-0 sidebar-title"><i
                                                        class="material-icons app-header-icon text-top">perm_identity</i>
                                                Contacts
                                            </h5>
                                            <div class="mt-10 pt-2">
                                                <p class="m-0 subtitle font-weight-700">Total number of contacts</p>
                                                <p class="m-0 text-muted">1457 Contacts</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-menu list-group position-relative animate fadeLeft delay-1"
                                         id="sidebar-list">
                                        <div class="sidebar-list-padding app-sidebar sidenav" id="contact-sidenav">
                                            <ul class="contact-list display-grid">
                                                <li class="sidebar-title">Filters</li>
                                                <li class="active"><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="material-icons mr-2"> perm_identity </i> All
                                                        Contact</a></li>
                                                <li><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="material-icons mr-2"> history </i> Frequent</a></li>
                                                <li><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="material-icons mr-2"> star_border </i> Starred
                                                        Contacts</a></li>
                                                <li class="sidebar-title">Options</li>
                                                <li><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="material-icons mr-2"> keyboard_arrow_down </i> Import</a>
                                                </li>
                                                <li><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="material-icons mr-2"> keyboard_arrow_up </i> Export</a>
                                                </li>
                                                <li><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="material-icons mr-2"> print </i> Print</a></li>
                                                <li class="sidebar-title">Department</li>
                                                <li><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="purple-text material-icons small-icons mr-2">
                                                            fiber_manual_record </i> Engineering</a></li>
                                                <li><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="amber-text material-icons small-icons mr-2">
                                                            fiber_manual_record </i> Sales</a></li>
                                                <li><a class="text-sub" href="app-contacts.html#!"><i
                                                                class="light-green-text material-icons small-icons mr-2">
                                                            fiber_manual_record </i> Support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="sidenav-trigger hide-on-large-only" data-target="contact-sidenav"
                                       href="app-contacts.html#"><i
                                                class="material-icons">menu</i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Area Ends -->

                        <!-- Content Area Starts -->
                        <div class="content-area content-right">
                            <div class="app-wrapper">
                                <div class="datatable-search">
                                    <i class="material-icons mr-2 search-icon">search</i>
                                    <input class="app-filter" id="global_filter" placeholder="Search Contact"
                                           type="text">
                                </div>
                                <div class="card card card-default scrollspy border-radius-6 fixed-width"
                                     id="button-trigger">
                                    <div class="card-content p-0">
                                        <table class="display" id="data-table-contact" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="background-image-none center-align">
                                                        <label>
                                                            <input onClick="toggle(this)" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th>User</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Favorite</th>
                                                    <th>Delete</th>
                                                    <!-- <th class="background-image-none"><i class="material-icons">star_border</i></th>
                                                    <th class="background-image-none"><i class="material-icons">delete_outline</i></th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-1.png"></span></td>
                                                    <td>John</td>
                                                    <td>john@domain.com</td>
                                                    <td>202-555-0119</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-2.png"></span></td>
                                                    <td>Rodolfo</td>
                                                    <td>rodo@domain.com</td>
                                                    <td>202-555-0125</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-3.png"></span></td>
                                                    <td>Marco</td>
                                                    <td>marco@domain.com</td>
                                                    <td>202-555-0177</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-4.png"></span></td>
                                                    <td>Joshua</td>
                                                    <td>jos@domain.com</td>
                                                    <td>202-555-0126</td>
                                                    <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span>
                                                    </td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-4.png"></span></td>
                                                    <td>Gene</td>
                                                    <td>gene@domain.com</td>
                                                    <td>202-555-0130</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-5.png"></span></td>
                                                    <td>Oscar</td>
                                                    <td>oscar@domain.com</td>
                                                    <td>+1-202-555-0119</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-6.png"></span></td>
                                                    <td>William</td>
                                                    <td>will@domain.com</td>
                                                    <td>+1-202-555-0125</td>
                                                    <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span>
                                                    </td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-7.png"></span></td>
                                                    <td>Dorian</td>
                                                    <td>dori@domain.com</td>
                                                    <td>202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-8.png"></span></td>
                                                    <td>Lester</td>
                                                    <td>les@domain.com</td>
                                                    <td>+1-202-555-0177</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-9.png"></span></td>
                                                    <td>Charles</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0126</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-1.png"></span></td>
                                                    <td>William</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0130</td>
                                                    <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span>
                                                    </td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-11.png"></span></td>
                                                    <td>John</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-12.png"></span></td>
                                                    <td>John</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span>
                                                    </td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-13.png"></span></td>
                                                    <td>John</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-14.png"></span></td>
                                                    <td>Jake</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-15.png"></span></td>
                                                    <td>Jake</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-16.png"></span></td>
                                                    <td>Heather</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span>
                                                    </td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-17.png"></span></td>
                                                    <td>Joanna</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span>
                                                    </td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-1.png"></span></td>
                                                    <td>Joanna</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-2.png"></span></td>
                                                    <td>Cassandra</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-3.png"></span></td>
                                                    <td>Dolores</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-4.png"></span></td>
                                                    <td>Susan</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-5.png"></span></td>
                                                    <td>Susan</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-6.png"></span></td>
                                                    <td>Kathleen</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span>
                                                    </td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-7.png"></span></td>
                                                    <td>Chief</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-8.png"></span></td>
                                                    <td>Walter</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-9.png"></span></td>
                                                    <td>Walter</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span>
                                                    </td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-10.png"></span></td>
                                                    <td>Kathleen</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                                <tr>
                                                    <td class="center-align">
                                                        <label>
                                                            <input name="foo" type="checkbox"/>
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="avatar-contact avatar-online"><img
                                                                    alt="avatar"
                                                                    src="../../../app-assets/images/avatar/avatar-11.png"></span></td>
                                                    <td>Terry</td>
                                                    <td>name@domain.com</td>
                                                    <td>+1-202-555-0112</td>
                                                    <td><span class="favorite"><i
                                                                    class="material-icons"> star_border </i></span></td>
                                                    <td><i class="material-icons delete">delete_outline</i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Area Ends --><!-- START RIGHT SIDEBAR NAV -->
                        <aside id="right-sidebar-nav">
                            <div class="slide-out-right-sidenav sidenav rightside-navigation" id="slide-out-right">
                                <div class="row">
                                    <div class="slide-out-right-title">
                                        <div class="col s12 border-bottom-1 pb-0 pt-1">
                                            <div class="row">
                                                <div class="col s2 pr-0 center">
                                                    <i class="material-icons vertical-text-middle"><a
                                                                class="sidenav-close"
                                                                href="app-contacts.html#">clear</a></i>
                                                </div>
                                                <div class="col s10 pl-0">
                                                    <ul class="tabs">
                                                        <li class="tab col s4 p-0">
                                                            <a class="active" href="app-contacts.html#messages">
                                                                <span>Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="tab col s4 p-0">
                                                            <a href="app-contacts.html#settings">
                                                                <span>Settings</span>
                                                            </a>
                                                        </li>
                                                        <li class="tab col s4 p-0">
                                                            <a href="app-contacts.html#activity">
                                                                <span>Activity</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-out-right-body">
                                        <div class="col s12" id="messages">
                                            <div class="collection border-none">
                                                <input class="header-search-input mt-4 mb-2" name="Search" placeholder="Search Messages"
                                                       type="text"/>
                                                <ul class="collection p-0">
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Thank you</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">5.00 AM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-1.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Mary Adams</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Hello Boo</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">4.14 AM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-2.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Caleb Richards</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Hello Boo</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">4.14 AM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-3.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Caleb Richards</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Keny !</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">9.00 PM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-4.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">June Lane</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Ohh God</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">4.14 AM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-5.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Edward Fletcher</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Love you</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">5.15 PM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-6.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Crystal Bates</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Can we</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">8.00 AM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Nathan Watts</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Great!</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">9.53 PM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-8.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Willard Wood</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Do it</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">4.20 AM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-1.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Ronnie Ellis</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Got that</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">5.20 AM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-9.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Daniel Russell</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Thank you</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">12.00 AM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-10.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Sarah Graves</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Okay you</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">11.14 PM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-11.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Andrew Hoffman</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Can do</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">7.30 PM</span>
                                                    </li>
                                                    <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                        data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-12.png"/>
                           <i></i>
                        </span>
                                                        <div class="user-content">
                                                            <h6 class="line-height-0">Camila Lynch</h6>
                                                            <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                                Leave it</p>
                                                        </div>
                                                        <span class="secondary-content medium-small">2.00 PM</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col s12" id="settings">
                                            <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                            <ul class="collection border-none">
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Notifications</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input checked type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Show recent activity</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Show recent activity</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Show Task statistics</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Show your emails</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Email Notifications</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input checked type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                            <ul class="collection border-none">
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>System Logs</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Error Reporting</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Applications Logs</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input checked type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Backup Servers</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="collection-item border-none mt-3">
                                                    <div class="m-0">
                                                        <span>Audit Logs</span>
                                                        <div class="switch right">
                                                            <label>
                                                                <input type="checkbox"/>
                                                                <span class="lever"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col s12" id="activity">
                                            <div class="activity">
                                                <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                                <ul class="collection with-header">
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">
                                                            Homepage mockup design <span class="secondary-content">Just now</span>
                                                        </div>
                                                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                        <span class="new badge amber"
                                                              data-badge-caption="Important"> </span>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">
                                                            Melissa liked your activity Drinks. <span
                                                                    class="secondary-content">10 mins</span>
                                                        </div>
                                                        <p class="mt-0 mb-2">Here are some news feed interactions
                                                            concepts.</p>
                                                        <span class="new badge light-green"
                                                              data-badge-caption="Resolved"></span>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">
                                                            12 new users registered <span class="secondary-content">30 mins</span>
                                                        </div>
                                                        <p class="mt-0 mb-2">Here are some news feed interactions
                                                            concepts.</p>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">
                                                            Tina is attending your activity <span
                                                                    class="secondary-content">2 hrs</span>
                                                        </div>
                                                        <p class="mt-0 mb-2">Here are some news feed interactions
                                                            concepts.</p>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">
                                                            Josh is now following you <span class="secondary-content">5 hrs</span>
                                                        </div>
                                                        <p class="mt-0 mb-2">Here are some news feed interactions
                                                            concepts.</p>
                                                        <span class="new badge red" data-badge-caption="Pending"></span>
                                                    </li>
                                                </ul>
                                                <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                                <ul class="collection with-header">
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">
                                                            New order received urgent <span class="secondary-content">Just now</span>
                                                        </div>
                                                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">System shutdown. <span
                                                                    class="secondary-content">5 min</span></div>
                                                        <p class="mt-0 mb-2">Here are some news feed interactions
                                                            concepts.</p>
                                                        <span class="new badge blue"
                                                              data-badge-caption="Urgent"> </span>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">
                                                            Database overloaded 89% <span class="secondary-content">20 min</span>
                                                        </div>
                                                        <p class="mt-0 mb-2">Here are some news feed interactions
                                                            concepts.</p>
                                                    </li>
                                                </ul>
                                                <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                                <ul class="collection with-header">
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">System error <span
                                                                    class="secondary-content">10 min</span></div>
                                                        <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="font-weight-900">
                                                            Production server down. <span class="secondary-content">1 hrs</span>
                                                        </div>
                                                        <p class="mt-0 mb-2">Here are some news feed interactions
                                                            concepts.</p>
                                                        <span class="new badge blue" data-badge-caption="Urgent"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide Out Chat -->
                            <ul class="sidenav slide-out-right-sidenav-chat" id="slide-out-chat">
                                <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                    <a href="app-contacts.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
                                        Elliott</a>
                                </li>
                                <li class="chat-body">
                                    <ul class="collection">
                                        <li class="collection-item display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"/>
               </span>
                                            <div class="user-content speech-bubble">
                                                <p class="medium-small">hello!</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <div class="user-content speech-bubble-right">
                                                <p class="medium-small">How can we help? We're here for you!</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"/>
               </span>
                                            <div class="user-content speech-bubble">
                                                <p class="medium-small">I am looking for the best admin template.?</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <div class="user-content speech-bubble-right">
                                                <p class="medium-small">Materialize admin is the responsive
                                                    materializecss admin template.</p>
                                            </div>
                                        </li>

                                        <li class="collection-item display-grid width-100 center-align">
                                            <p>8:20 a.m.</p>
                                        </li>

                                        <li class="collection-item display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"/>
               </span>
                                            <div class="user-content speech-bubble">
                                                <p class="medium-small">Ohh! very nice</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <div class="user-content speech-bubble-right">
                                                <p class="medium-small">Thank you.</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"/>
               </span>
                                            <div class="user-content speech-bubble">
                                                <p class="medium-small">How can I purchase it?</p>
                                            </div>
                                        </li>

                                        <li class="collection-item display-grid width-100 center-align">
                                            <p>9:00 a.m.</p>
                                        </li>

                                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <div class="user-content speech-bubble-right">
                                                <p class="medium-small">From ThemeForest.</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <div class="user-content speech-bubble-right">
                                                <p class="medium-small">Only $24</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"/>
               </span>
                                            <div class="user-content speech-bubble">
                                                <p class="medium-small">Ohh! Thank you.</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar pl-5 pb-0"
                                            data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="../../../app-assets/images/avatar/avatar-7.png"/>
               </span>
                                            <div class="user-content speech-bubble">
                                                <p class="medium-small">I will purchase it for sure.</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <div class="user-content speech-bubble-right">
                                                <p class="medium-small">Great, Feel free to get in touch on</p>
                                            </div>
                                        </li>
                                        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                            data-target="slide-out-chat">
                                            <div class="user-content speech-bubble-right">
                                                <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="center-align chat-footer">
                                    <form action="javascript:void(0);" class="col s12" onsubmit="slide_out_chat()">
                                        <div class="input-field">
                                            <input class="search" id="icon_prefix" type="text"/>
                                            <label for="icon_prefix">Type here..</label>
                                            <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </aside>
                        <!-- END RIGHT SIDEBAR NAV -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END: Page Main-->

        <!-- Theme Customizer -->

        <a
                class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
                data-target="theme-cutomizer-out"
                href="app-contacts.html#"
        ><i class="material-icons">settings</i></a
        >

        <div class="theme-cutomizer sidenav row" id="theme-cutomizer-out">
            <div class="col s12">
                <a class="sidenav-close" href="app-contacts.html#!"><i class="material-icons">close</i></a>
                <h5 class="theme-cutomizer-title">Theme Customizer</h5>
                <p class="medium-small">Customize & Preview in Real Time</p>
                <div class="menu-options">
                    <h6 class="mt-6">Menu Options</h6>
                    <hr class="customize-devider"/>
                    <div class="menu-options-form row">
                        <div class="input-field col s12 menu-color mb-0">
                            <p class="mt-0">Menu Color</p>
                            <div class="gradient-color center-align">
                                <span class="menu-color-option gradient-45deg-indigo-blue"
                                      data-color="gradient-45deg-indigo-blue"></span>
                                <span
                                        class="menu-color-option gradient-45deg-purple-deep-orange"
                                        data-color="gradient-45deg-purple-deep-orange"
                                ></span>
                                <span
                                        class="menu-color-option gradient-45deg-light-blue-cyan"
                                        data-color="gradient-45deg-light-blue-cyan"
                                ></span>
                                <span
                                        class="menu-color-option gradient-45deg-purple-amber"
                                        data-color="gradient-45deg-purple-amber"
                                ></span>
                                <span
                                        class="menu-color-option gradient-45deg-purple-deep-purple"
                                        data-color="gradient-45deg-purple-deep-purple"
                                ></span>
                                <span
                                        class="menu-color-option gradient-45deg-deep-orange-orange"
                                        data-color="gradient-45deg-deep-orange-orange"
                                ></span>
                                <span class="menu-color-option gradient-45deg-green-teal"
                                      data-color="gradient-45deg-green-teal"></span>
                                <span
                                        class="menu-color-option gradient-45deg-indigo-light-blue"
                                        data-color="gradient-45deg-indigo-light-blue"
                                ></span>
                                <span class="menu-color-option gradient-45deg-red-pink"
                                      data-color="gradient-45deg-red-pink"></span>
                            </div>
                            <div class="solid-color center-align">
                                <span class="menu-color-option red" data-color="red"></span>
                                <span class="menu-color-option purple" data-color="purple"></span>
                                <span class="menu-color-option pink" data-color="pink"></span>
                                <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                                <span class="menu-color-option cyan" data-color="cyan"></span>
                                <span class="menu-color-option teal" data-color="teal"></span>
                                <span class="menu-color-option light-blue" data-color="light-blue"></span>
                                <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                                <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                            </div>
                        </div>
                        <div class="input-field col s12 menu-bg-color mb-0">
                            <p class="mt-0">Menu Background Color</p>
                            <div class="gradient-color center-align">
                  <span
                          class="menu-bg-color-option gradient-45deg-indigo-blue"
                          data-color="gradient-45deg-indigo-blue"
                  ></span>
                                <span
                                        class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                                        data-color="gradient-45deg-purple-deep-orange"
                                ></span>
                                <span
                                        class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                                        data-color="gradient-45deg-light-blue-cyan"
                                ></span>
                                <span
                                        class="menu-bg-color-option gradient-45deg-purple-amber"
                                        data-color="gradient-45deg-purple-amber"
                                ></span>
                                <span
                                        class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                                        data-color="gradient-45deg-purple-deep-purple"
                                ></span>
                                <span
                                        class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                                        data-color="gradient-45deg-deep-orange-orange"
                                ></span>
                                <span class="menu-bg-color-option gradient-45deg-green-teal"
                                      data-color="gradient-45deg-green-teal"></span>
                                <span
                                        class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                                        data-color="gradient-45deg-indigo-light-blue"
                                ></span>
                                <span class="menu-bg-color-option gradient-45deg-red-pink"
                                      data-color="gradient-45deg-red-pink"></span>
                            </div>
                            <div class="solid-color center-align">
                                <span class="menu-bg-color-option red" data-color="red"></span>
                                <span class="menu-bg-color-option purple" data-color="purple"></span>
                                <span class="menu-bg-color-option pink" data-color="pink"></span>
                                <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                                <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                                <span class="menu-bg-color-option teal" data-color="teal"></span>
                                <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                                <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                                <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div class="switch">
                                Menu Dark
                                <label class="float-right"
                                ><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                                    ></label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div class="switch">
                                Menu Collapsed
                                <label class="float-right"
                                ><input class="menu-collapsed-checkbox" type="checkbox"/> <span
                                            class="lever ml-0"></span
                                    ></label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div class="switch">
                                <p class="mt-0">Menu Selection</p>
                                <label>
                                    <input
                                            class="menu-selection-radio with-gap"
                                            name="menu-selection"
                                            type="radio"
                                            value="sidenav-active-square"
                                    />
                                    <span>Square</span>
                                </label>
                                <label>
                                    <input
                                            class="menu-selection-radio with-gap"
                                            name="menu-selection"
                                            type="radio"
                                            value="sidenav-active-rounded"
                                    />
                                    <span>Rounded</span>
                                </label>
                                <label>
                                    <input class="menu-selection-radio with-gap" name="menu-selection" type="radio"
                                           value=""/>
                                    <span>Normal</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="mt-6">Navbar Options</h6>
                <hr class="customize-devider"/>
                <div class="navbar-options row">
                    <div class="input-field col s12 navbar-color mb-0">
                        <p class="mt-0">Navbar Color</p>
                        <div class="gradient-color center-align">
                            <span class="navbar-color-option gradient-45deg-indigo-blue"
                                  data-color="gradient-45deg-indigo-blue"></span>
                            <span
                                    class="navbar-color-option gradient-45deg-purple-deep-orange"
                                    data-color="gradient-45deg-purple-deep-orange"
                            ></span>
                            <span
                                    class="navbar-color-option gradient-45deg-light-blue-cyan"
                                    data-color="gradient-45deg-light-blue-cyan"
                            ></span>
                            <span class="navbar-color-option gradient-45deg-purple-amber"
                                  data-color="gradient-45deg-purple-amber"></span>
                            <span
                                    class="navbar-color-option gradient-45deg-purple-deep-purple"
                                    data-color="gradient-45deg-purple-deep-purple"
                            ></span>
                            <span
                                    class="navbar-color-option gradient-45deg-deep-orange-orange"
                                    data-color="gradient-45deg-deep-orange-orange"
                            ></span>
                            <span class="navbar-color-option gradient-45deg-green-teal"
                                  data-color="gradient-45deg-green-teal"></span>
                            <span
                                    class="navbar-color-option gradient-45deg-indigo-light-blue"
                                    data-color="gradient-45deg-indigo-light-blue"
                            ></span>
                            <span class="navbar-color-option gradient-45deg-red-pink"
                                  data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="navbar-color-option red" data-color="red"></span>
                            <span class="navbar-color-option purple" data-color="purple"></span>
                            <span class="navbar-color-option pink" data-color="pink"></span>
                            <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="navbar-color-option cyan" data-color="cyan"></span>
                            <span class="navbar-color-option teal" data-color="teal"></span>
                            <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                            <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Navbar Dark
                            <label class="float-right"
                            ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                                ></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Navbar Fixed
                            <label class="float-right"
                            ><input checked class="navbar-fixed-checkbox" type="checkbox"/> <span
                                        class="lever ml-0"></span
                                ></label>
                        </div>
                    </div>
                </div>
                <h6 class="mt-6">Footer Options</h6>
                <hr class="customize-devider"/>
                <div class="navbar-options row">
                    <div class="input-field col s12">
                        <div class="switch">
                            Footer Dark
                            <label class="float-right"
                            ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                                ></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Footer Fixed
                            <label class="float-right"
                            ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                                ></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Theme Customizer -->

        <a
                class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
                data-position="left"
                data-tooltip="Buy Now!"
                href="https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=PIXINVENT"
                target="_blank"
        ><i class="material-icons">add_shopping_cart</i></a
        >

        <!-- BEGIN: Footer-->

        <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
            <div class="footer-copyright">
                <div class="container"><span>&copy; 2019          <a
                                href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                                target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a
                                href="../../../../pixinvent_default.html">PIXINVENT</a></span></div>
            </div>
        </footer>

        <!-- END: Footer-->
        <!-- BEGIN VENDOR JS-->
        <script src="{{asset('app-assets/js/vendors.min.js')}}" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"
                type="text/javascript"></script>
        <script src="{{asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"
                type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN THEME  JS-->



        <script src="{{asset('app-assets/js/plugins-rtl.js')}}" type="text/javascript"></script>


        <script src="{{asset('app-assets/js/custom/custom-script.js')}}" type="text/javascript"></script>
        <script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
        <!-- END THEME  JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{asset('app-assets/js/scripts/app-contacts.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    </body>
</html>