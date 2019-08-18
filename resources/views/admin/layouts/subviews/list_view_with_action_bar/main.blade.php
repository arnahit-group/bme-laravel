<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>

        @include('admin.layouts.widgets.breadcrumbs', ['page_title'=>$page_title , 'breadcrumbs'=> $breadcrumbs])

        <div class="col s12">
            <div class="container">
                <!-- Sidebar Area Starts -->
                <div class="sidebar-left sidebar-fixed mt-3">
                    <div class="sidebar">
                        <div class="sidebar-content">
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
                                            <span class="email-options"><i
                                                        class="material-icons grey-text">more_vert</i></span>
                                        </div>
                                    </div>
                                    <div class="collection email-collection">

                                        @foreach($datas as $data)


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


                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Area Ends -->

                <!-- Add new email popup -->
                @can($permissions['create'])
                    <div class="fixed-action-btn direction-top" style="bottom: 54px; right: 19px;">
                        <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger"
                           href="{{$urls['create']}}">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
            @endcan
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
                <!-- Modal Structure Ends -->
                <!-- START RIGHT SIDEBAR NAV -->
            @include('admin.layouts.widgets.overlay_side_bar')
            <!-- END RIGHT SIDEBAR NAV -->

            </div>
        </div>
    </div>
</div>
