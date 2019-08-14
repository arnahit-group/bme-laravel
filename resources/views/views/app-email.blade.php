@extends('admin.layouts.admin')
@section('vendor-css')
    <link href="{{asset('app-assets/vendors/flag-icon/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('header')

    <link href="{{asset('app-assets/css/pages/app-sidebar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/css/pages/app-email.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('main')

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
                <div class="container">
                    <!-- Sidebar Area Starts -->
                    <div class="sidebar-left sidebar-fixed">
                        <div class="sidebar">
                            <div class="sidebar-content">
                                <div class="sidebar-header">
                                    <div class="sidebar-details">
                                        <h5 class="m-0 sidebar-title"><i
                                                    class="material-icons app-header-icon text-top">mail_outline</i>
                                            Mailbox</h5>
                                        <div class="row valign-wrapper mt-10 pt-2 animate fadeLeft">
                                            <div class="col s2 media-image">
                                                <img alt="" class="circle z-depth-2 responsive-img"
                                                     src="{{asset('app-assets/images/user/12.jpg')}}">
                                                <!-- notice the "circle" class -->
                                            </div>
                                            <div class="col s10">
                                                <p class="m-0 subtitle font-weight-700">Lawrence Collins</p>
                                                <p class="m-0 text-muted">lawrence.collins@xyz.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-menu list-group position-relative animate fadeLeft"
                                     id="sidebar-list">
                                    <div class="sidebar-list-padding app-sidebar sidenav" id="email-sidenav">
                                        <ul class="email-list display-grid">
                                            <li class="sidebar-title">Folders</li>
                                            <li class="active"><a class="text-sub" href="app-email.html#!"><i
                                                            class="material-icons mr-2"> mail_outline </i> Inbox</a></li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="material-icons mr-2"> send </i> Sent</a></li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="material-icons mr-2"> description </i> Draft</a></li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="material-icons mr-2"> info_outline </i> Span</a></li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="material-icons mr-2"> delete </i> Trash</a></li>
                                            <li class="sidebar-title">Filters</li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="material-icons mr-2"> star_border </i> Starred</a></li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="material-icons mr-2"> label_outline </i> Important</a>
                                            </li>
                                            <li class="sidebar-title">Labels</li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="purple-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> Note</a></li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="amber-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> Paypal</a></li>
                                            <li><a class="text-sub" href="app-email.html#!"><i
                                                            class="light-green-text material-icons small-icons mr-2">
                                                        fiber_manual_record </i> Invoice</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="sidenav-trigger hide-on-large-only" data-target="email-sidenav"
                                   href="app-email.html#"><i class="material-icons">menu</i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Area Ends -->

                    <!-- Content Area Starts -->
                    <div class="app-email">
                        <div class="content-area content-right">
                            <div class="app-wrapper">
                                <div class="app-search">
                                    <i class="material-icons mr-2 search-icon">search</i>
                                    <input class="app-filter" id="email_filter" placeholder="Search Mail"
                                           type="text">
                                </div>
                                <div class="card card card-default scrollspy border-radius-6 fixed-width">
                                    <div class="card-content p-0">
                                        <div class="email-header">
                                            <div class="left-icons">
              <span class="header-checkbox">
                <label>
                  <input onClick="toggle(this)" type="checkbox"/>
                  <span></span>
                </label>
              </span>
                                                <span class="action-icons">
                <i class="material-icons">refresh</i>
                <i class="material-icons">mail_outline</i>
                <i class="material-icons">label_outline</i>
                <i class="material-icons">folder_open</i>
                <i class="material-icons">info_outline</i>
                <i class="material-icons delete-mails">delete</i>
              </span>
                                            </div>
                                            <div class="list-content"></div>
                                            <div class="email-action">
                                                <span class="email-options"><i class="material-icons grey-text">more_vert</i></span>
                                            </div>
                                        </div>
                                        <div class="collection email-collection">
                                            <a class="collection-item animate fadeUp delay-1"
                                               href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/2.jpg')}}">
                                                            <div class="list-title">Gorge Fernandis</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 2:03 PM</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp delay-2"
                                               href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/10.jpg')}}">
                                                            <div class="list-title">Pari Kalin</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Paypal</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 12:47 PM</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp delay-3"
                                               href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/4.jpg')}}">
                                                            <div class="list-title">Alin Kystal</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 8:18 AM</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp delay-4"
                                               href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/8.jpg')}}">
                                                            <div class="list-title">Amy berry</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Invoice</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> Yesterday</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp delay-5"
                                               href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/1.jpg')}}">
                                                            <div class="list-title">John Doe</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Paypal</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> Yesterday</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp" href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/9.jpg')}}">
                                                            <div class="list-title">Kellin Blue</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Paypal</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> Yesterday</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp" href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/5.jpg')}}">
                                                            <div class="list-title">Albert Henry</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 25 Jan</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp" href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/11.jpg')}}">
                                                            <div class="list-title">Kim Catty</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Invoice</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 25 Jan</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp" href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/7.jpg')}}">
                                                            <div class="list-title">Lina Shalin</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Invoice</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 17 Jan</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp" href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/3.jpg')}}">
                                                            <div class="list-title">Peter Patric</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 14 Jan</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp" href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/12.jpg')}}">
                                                            <div class="list-title">Colin Phelin</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="light-green-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Invoice</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 9 Jan</div>
                                                </div>
                                            </a>
                                            <a class="collection-item animate fadeUp" href="app-email-content.html">
                                                <div class="list-left">
                                                    <label>
                                                        <input name="foo" type="checkbox"/>
                                                        <span></span>
                                                    </label>
                                                    <div class="favorite">
                                                        <i class="material-icons">star_border</i>
                                                    </div>
                                                    <div class="email-label">
                                                        <i class="material-icons">label_outline</i>
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                    <div class="list-title-area">
                                                        <div class="user-media">
                                                            <img alt="" class="circle z-depth-2 responsive-img avtar"
                                                                 src="{{asset('app-assets/images/user/6.jpg')}}">
                                                            <div class="list-title">Jack Hawk</div>
                                                        </div>
                                                        <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                                                            <span class="badge grey lighten-3"><i
                                                                        class="amber-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Paypal</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-desc">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected humour,
                                                        or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of
                                                        Lorem Ipsum
                                                    </div>
                                                </div>
                                                <div class="list-right">
                                                    <div class="list-date"> 30 Dec</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Area Ends -->

                    <!-- Add new email popup -->
                    <div class="fixed-action-btn direction-top" style="bottom: 54px; right: 19px;">
                        <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger"
                           href="app-email.html#modal1">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
                    <!-- Add new email popup Ends-->

                    <!-- Modal Structure -->
                    <div class="modal border-radius-6" id="modal1">
                        <div class="modal-content">
                            <h5 class="mt-0">New Message</h5>
                            <hr>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> person_outline </i>
                                            <input class="validate" id="email" type="email">
                                            <label for="email">Recipients</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> title </i>
                                            <input class="validate" id="subject" type="text">
                                            <label for="subject">Subject</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="editor">Message</textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn modal-close waves-effect waves-light mr-2">
                                <i class="material-icons">send</i> Send
                            </a>
                        </div>
                    </div>
                    <!-- Modal Structure Ends --><!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div class="slide-out-right-sidenav sidenav rightside-navigation" id="slide-out-right">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a
                                                            class="sidenav-close" href="app-email.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="app-email.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="app-email.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="app-email.html#activity">
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
                                <a href="app-email.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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
    <script src="{{asset('app-assets/vendors/sortable/jquery-sortable-min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/waypoints/jquery.waypoints.min.js')}}"></script>

@endsection

@section('footer')

    <script src="{{asset('app-assets/js/scripts/app-email.js')}}" type="text/javascript"></script>

@endsection

