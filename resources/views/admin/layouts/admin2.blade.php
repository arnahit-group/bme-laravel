<!DOCTYPE html>
<html class="loading" data-textdirection="rtl" lang="en">
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
        <!-- BEGIN: VENDOR CSS-->
        <link href="{{asset('app-assets/vendors/vendors.min.css')}}" rel="stylesheet" type="text/css">

    @yield('vendor-css')

    <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/materialize-rtl.css')}}"
              rel="stylesheet"
              type="text/css">
        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/style.css')}}" rel="stylesheet"
              type="text/css">
        <link href="{{asset('app-assets/css/themes/vertical-modern-menu-template/style-rtl.css')}}" rel="stylesheet"
              type="text/css">

    @yield('header')

    <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link href="{{asset('app-assets/css/custom/custom.css')}}" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->
    </head>
    <!-- END: Head-->
    <body dir="rtl"
          class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  app-page"
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
                                        href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a>
                            </li>
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
                                                alt="avatar"
                                                src="../../../app-assets/images/avatar/avatar-7.png"><i></i></span></a>
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
                                            class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A
                                    new
                                    order has been placed!</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
                                            class="material-icons icon-bg-circle red small">stars</span> Completed the
                                    task</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
                                            class="material-icons icon-bg-circle teal small">settings</span> Settings
                                    updated</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
                                            class="material-icons icon-bg-circle deep-orange small">today</span>
                                    Director
                                    meeting started</a>
                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                            </li>
                            <li><a class="grey-text text-darken-2" href="app-contacts.html#!"><span
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
                                alt="materialize logo"
                                src="../../../app-assets/images/logo/materialize-logo-color.png"/><span
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
                                               href="../vertical-menu-nav-dark-template/vertical-menu-nav-dark-template.html"><i
                                                        class="material-icons">radio_button_unchecked</i><span>Navbar Dark</span></a>
                                        </li>
                                        <li><a class="collapsible-body"
                                               data-i18n=""
                                               href="../vertical-gradient-menu-template/vertical-gradient-menu-template.html"><i
                                                        class="material-icons">radio_button_unchecked</i><span>Gradient Menu</span></a>
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
                                               href="../horizontal-menu-template/horizontal-menu-template.html"><i
                                                        class="material-icons">radio_button_unchecked</i><span>Horizontal Menu</span></a>
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
                                class="material-icons">import_contacts</i><span class="menu-title"
                                                                                data-i18n="">Contacts</span></a>
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
                                class="material-icons">content_paste</i><span class="menu-title"
                                                                              data-i18n="">Pages</span></a>
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
                                class="material-icons">crop_original</i><span class="menu-title"
                                                                              data-i18n="">Medias</span></a>
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
                                class="material-icons">photo_filter</i><span class="menu-title"
                                                                             data-i18n="">Basic UI</span></a>
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
                                class="material-icons">grid_on</i><span class="menu-title"
                                                                        data-i18n="">Data Tables</span></a>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="app-contacts.html#"><i
                                class="material-icons">chrome_reader_mode</i><span class="menu-title"
                                                                                   data-i18n="">Forms</span></a>
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
                                class="material-icons">pie_chart_outlined</i><span class="menu-title"
                                                                                   data-i18n="">Chart</span></a>
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
                                class="material-icons">photo_filter</i><span class="menu-title"
                                                                             data-i18n="">Menu levels</span></a>
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
                                class="material-icons">help_outline</i><span class="menu-title"
                                                                             data-i18n="">Support</span></a>
                </li>
            </ul>
            <div class="navigation-background"></div>
            <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
               data-target="slide-out" href="app-contacts.html#"><i class="material-icons">menu</i></a>
        </aside>
        <!-- END: SideNav-->

    @yield('main')
    <!-- BEGIN: Page Main-->

        <!-- END: Page Main-->

        <!-- Theme Customizer -->

        <!--/ Theme Customizer -->

        <!-- BEGIN: Footer-->

        <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
            <div class="footer-copyright">
                <div class="container"><span>&copy; 2019          <a
                                href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                                target="_blank">PIXINVENT</a> All rights reserved.</span><span
                            class="right hide-on-small-only">Design and Developed by <a
                                href="../../../../pixinvent_default.html">PIXINVENT</a></span></div>
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


        <script src="{{asset('app-assets/js/plugins-rtl.js')}}" type="text/javascript"></script>


        <script src="{{asset('app-assets/js/custom/custom-script.js')}}" type="text/javascript"></script>
    {{--        <script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>--}}
    <!-- END THEME  JS-->
        <!-- BEGIN PAGE LEVEL JS-->
    @yield('footer')


    <!-- END PAGE LEVEL JS-->
    </body>
</html>