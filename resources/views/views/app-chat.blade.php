@extends('admin.layouts.admin')
@section('vendor-css')
@endsection

@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-chat.css')}}">

@endsection

@section('main')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
                <div class="container">
                    <div class="chat-application">
                        <div class="chat-content-head">
                            <div class="header-details">
                                <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">mail_outline</i>
                                    Chat</h5>
                            </div>
                        </div>
                        <div class="app-chat">
                            <div class="content-area content-right">
                                <div class="app-wrapper">
                                    <!-- Sidebar menu for small screen -->
                                    <a class="sidenav-trigger hide-on-large-only" data-target="chat-sidenav"
                                       href="app-chat.html#">
                                        <i class="material-icons">menu</i>
                                    </a>
                                    <!--/ Sidebar menu for small screen -->

                                    <div class="card card card-default scrollspy border-radius-6 fixed-width">
                                        <div class="card-content chat-content p-0">
                                            <!-- Sidebar Area -->
                                            <div class="sidebar-left sidebar-fixed animate fadeUp animation-fast">
                                                <div class="sidebar animate fadeUp">
                                                    <div class="sidebar-content">
                                                        <div class="sidebar-menu chat-sidebar list-group position-relative"
                                                             id="sidebar-list">
                                                            <div class="sidebar-list-padding app-sidebar sidenav"
                                                                 id="chat-sidenav">
                                                                <!-- Sidebar Header -->
                                                                <div class="sidebar-header">
                                                                    <div class="row valign-wrapper">
                                                                        <div class="col s2 media-image pr-0">
                                                                            <img alt=""
                                                                                 class="circle z-depth-2 responsive-img"
                                                                                 src="{{asset('app-assets/images/user/12.jpg')}}">
                                                                        </div>
                                                                        <div class="col s10">
                                                                            <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                Lawrence Collins</p>
                                                                            <p class="m-0 info-text">Apple pie
                                                                                bonbon cheesecake tiramisu</p>
                                                                        </div>
                                                                    </div>
                                                                    <span class="option-icon">
                          <i class="material-icons">more_vert</i>
                        </span>
                                                                </div>
                                                                <!--/ Sidebar Header -->

                                                                <!-- Sidebar Search -->
                                                                <div class="sidebar-search animate fadeUp">
                                                                    <div class="search-area">
                                                                        <i class="material-icons mr-2 search-icon">search</i>
                                                                        <input class="app-filter" id="chat_filter"
                                                                               placeholder="Search Chat" type="text">
                                                                    </div>
                                                                    <div class="add-user">
                                                                        <a href="app-chat.html#">
                                                                            <i class="material-icons mr-2 add-user-icon">person_add</i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!--/ Sidebar Search -->

                                                                <!-- Sidebar Content List -->
                                                                <div class="sidebar-content sidebar-chat">
                                                                    <div class="chat-list">
                                                                        <div class="chat-user animate fadeUp delay-1">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image online pr-0">
                                                                                        <img alt=""
                                                                                             class="circle z-depth-2 responsive-img"
                                                                                             src="{{asset('app-assets/images/user/2.jpg')}}">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                            Gorge Fernandis</p>
                                                                                        <p class="m-0 info-text">
                                                                                            Apple pie bonbon
                                                                                            cheesecake tiramisu</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="favorite">
                                                                                        <i class="material-icons amber-text">star</i>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>2.38 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="badge badge pill red">4</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-2 active">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image online pr-0">
                                                                                        <img alt=""
                                                                                             class="circle z-depth-2 responsive-img"
                                                                                             src="{{asset('app-assets/images/user/7.jpg')}}">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                            Alice Hawker</p>
                                                                                        <p class="m-0 info-text">
                                                                                            Apple pie bonbon
                                                                                            cheesecake tiramisu</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>12.58 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-3">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image away pr-0">
                                                                                        <img alt=""
                                                                                             class="circle z-depth-2 responsive-img"
                                                                                             src="{{asset('app-assets/images/user/10.jpg')}}">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                            Pari Kalin</p>
                                                                                        <p class="m-0 info-text">
                                                                                            Apple pie bonbon
                                                                                            cheesecake tiramisu</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>10.00 am</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="badge badge pill red">6</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-4">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image offline pr-0">
                                                                                        <img alt=""
                                                                                             class="circle z-depth-2 responsive-img"
                                                                                             src="{{asset('app-assets/images/user/4.jpg')}}">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                            Alin Kystal</p>
                                                                                        <p class="m-0 info-text">
                                                                                            Apple pie bonbon
                                                                                            cheesecake tiramisu</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>7.44 am</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-5">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image pr-0">
                                                                                        <img alt=""
                                                                                             class="circle z-depth-2 responsive-img"
                                                                                             src="{{asset('app-assets/images/user/8.jpg')}}">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                            Amy berry</p>
                                                                                        <p class="m-0 info-text">
                                                                                            Apple pie bonbon
                                                                                            cheesecake tiramisu</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="favorite">
                                                                                        <i class="material-icons amber-text">star</i>
                                                                                    </div>
                                                                                    <div class="time">
                                                                                        <span>5 hours</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="badge badge pill red">1</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-5">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image pr-0">
                                                                                        <img alt=""
                                                                                             class="circle z-depth-2 responsive-img"
                                                                                             src="{{asset('app-assets/images/user/1.jpg')}}">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                            John Doe</p>
                                                                                        <p class="m-0 info-text">
                                                                                            Apple pie bonbon
                                                                                            cheesecake tiramisu</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>20 hours</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-5">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image away pr-0">
                                                                                        <img alt=""
                                                                                             class="circle z-depth-2 responsive-img"
                                                                                             src="{{asset('app-assets/images/user/9.jpg')}}">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                            Kellin Blue</p>
                                                                                        <p class="m-0 info-text">
                                                                                            Apple pie bonbon
                                                                                            cheesecake tiramisu</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>Yesterday</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="badge badge pill red">3</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat-user animate fadeUp delay-5">
                                                                            <div class="user-section">
                                                                                <div class="row valign-wrapper">
                                                                                    <div class="col s2 media-image offline pr-0">
                                                                                        <img alt=""
                                                                                             class="circle z-depth-2 responsive-img"
                                                                                             src="{{asset('app-assets/images/user/5.jpg')}}">
                                                                                    </div>
                                                                                    <div class="col s10">
                                                                                        <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                                            Albert Henry</p>
                                                                                        <p class="m-0 info-text">
                                                                                            Apple pie bonbon
                                                                                            cheesecake tiramisu</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="info-section">
                                                                                <div class="star-timing">
                                                                                    <div class="time">
                                                                                        <span>2 days ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/ Sidebar Content List -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ Sidebar Area -->

                                            <!-- Content Area -->
                                            <div class="chat-content-area animate fadeUp">
                                                <!-- Chat header -->
                                                <div class="chat-header">
                                                    <div class="row valign-wrapper">
                                                        <div class="col media-image online pr-0">
                                                            <img alt="" class="circle z-depth-2 responsive-img"
                                                                 src="{{asset('app-assets/images/user/7.jpg')}}">
                                                        </div>
                                                        <div class="col">
                                                            <p class="m-0 blue-grey-text text-darken-4 font-weight-700">
                                                                Alice Hawker</p>
                                                            <p class="m-0 chat-text truncate">Apple pie bonbon
                                                                cheesecake tiramisu</p>
                                                        </div>
                                                    </div>
                                                    <span class="option-icon">
                  <span class="favorite">
                    <i class="material-icons">star_outline</i>
                  </span>
                  <i class="material-icons">delete</i>
                  <i class="material-icons">more_vert</i>
                </span>
                                                </div>
                                                <!--/ Chat header -->

                                                <!-- Chat content area -->
                                                <div class="chat-area">
                                                    <div class="chats">
                                                        <div class="chats">
                                                            <div class="chat chat-right">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img alt="avatar"
                                                                             class="circle"
                                                                             src="{{asset('app-assets/images/user/12.jpg')}}"/>
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>How can we help? We're here for you!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img alt="avatar"
                                                                             class="circle"
                                                                             src="{{asset('app-assets/images/user/7.jpg')}}"/>
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>Hey John, I am looking for the best admin
                                                                            template. Could you please help me to
                                                                            find it
                                                                            out?</p>
                                                                    </div>
                                                                    <div class="chat-text">
                                                                        <p>It should be material css compatible.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat chat-right">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img alt="avatar"
                                                                             class="circle"
                                                                             src="{{asset('app-assets/images/user/12.jpg')}}"/>
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>Absolutely!</p>
                                                                    </div>
                                                                    <div class="chat-text">
                                                                        <p>Materialize admin is the responsive
                                                                            material admin template.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img alt="avatar"
                                                                             class="circle"
                                                                             src="{{asset('app-assets/images/user/7.jpg')}}"/>
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>Looks clean and fresh UI.</p>
                                                                    </div>
                                                                    <div class="chat-text">
                                                                        <p>It's perfect for my next project.</p>
                                                                    </div>
                                                                    <div class="chat-text">
                                                                        <p>How can I purchase it?</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat chat-right">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img alt="avatar"
                                                                             class="circle"
                                                                             src="{{asset('app-assets/images/user/12.jpg')}}"/>
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>Thanks, from ThemeForest.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img alt="avatar"
                                                                             class="circle"
                                                                             src="{{asset('app-assets/images/user/7.jpg')}}"/>
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>I will purchase it for sure.</p>
                                                                    </div>
                                                                    <div class="chat-text">
                                                                        <p>Thanks.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat chat-right">
                                                                <div class="chat-avatar">
                                                                    <a class="avatar">
                                                                        <img alt="avatar"
                                                                             class="circle"
                                                                             src="{{asset('app-assets/images/user/12.jpg')}}"/>
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-text">
                                                                        <p>Great, Feel free to get in touch on</p>
                                                                    </div>
                                                                    <div class="chat-text">
                                                                        <p>https://pixinvent.ticksy.com/</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ Chat content area -->

                                                <!-- Chat footer <-->
                                                <div class="chat-footer">
                                                    <form action="javascript:void(0);" class="chat-input"
                                                          onsubmit="enter_chat();">
                                                        <input class="message" placeholder="Type message here.."
                                                               type="text">
                                                        <a class="btn waves-effect waves-light send"
                                                           onclick="enter_chat();">Send</a>
                                                    </form>
                                                </div>
                                                <!--/ Chat footer -->
                                            </div>
                                            <!--/ Content Area -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div class="slide-out-right-sidenav sidenav rightside-navigation" id="slide-out-right">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a
                                                            class="sidenav-close" href="app-chat.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="app-chat.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="app-chat.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="app-chat.html#activity">
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
                                            <input class="header-search-input mt-4 mb-2" name="Search"
                                                   placeholder="Search Messages"
                                                   type="text"/>
                                            <ul class="collection p-0">
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-1.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-2.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-3.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-4.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-5.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-6.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-8.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-1.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-9.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-10.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-11.png')}}"/>
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
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-12.png')}}"/>
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
                                                        Homepage mockup design <span
                                                                class="secondary-content">Just now</span>
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
                                                        12 new users registered <span
                                                                class="secondary-content">30 mins</span>
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
                                                        Josh is now following you <span
                                                                class="secondary-content">5 hrs</span>
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
                                                        Database overloaded 89% <span
                                                                class="secondary-content">20 min</span>
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
                                                        Production server down. <span
                                                                class="secondary-content">1 hrs</span>
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
                                <a href="app-chat.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
                                    Elliott</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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



@endsection

@section('vendor-js')

@endsection

@section('footer')

    <script src="{{asset('app-assets/js/scripts/app-chat.js')}}" type="text/javascript"></script>

@endsection

