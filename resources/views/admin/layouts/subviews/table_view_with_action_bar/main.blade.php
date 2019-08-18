<div id="main">


    <div class="row">

        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>

        @include('admin.layouts.widgets.breadcrumbs', ['page_title'=>$page_title , 'breadcrumbs'=> $breadcrumbs])

        <div class="col s12">
            <div class="container">
                <!-- Add new contact popup -->
                @can($permissions['create'])
                    <div class="fixed-action-btn direction-top" style="bottom: 54px; left: 19px;">
                        <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger"
                           href="{{$urls['create']}}">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
            @endcan
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
                <div class="sidebar-left sidebar-fixed mt-3">
                    <div class="sidebar">
                        <div class="sidebar-content">

                            {{--                            <div class="sidebar-header">--}}
                            {{--                                <div class="sidebar-details">--}}
                            {{--                                    <h5 class="m-0 sidebar-title"><i--}}
                            {{--                                                class="material-icons app-header-icon text-top">perm_identity</i>--}}
                            {{--                                        Contacts--}}
                            {{--                                    </h5>--}}
                            {{--                                    <div class="mt-10 pt-2">--}}
                            {{--                                        <p class="m-0 subtitle font-weight-700">Total number of contacts</p>--}}
                            {{--                                        <p class="m-0 text-muted">1457 Contacts</p>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
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
                                                        class="material-icons mr-2"> keyboard_arrow_up </i>
                                                Export</a>
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


                                {{--                                <table class="display" id="data-table-contact" style="width:100%">--}}
                                {{--                                    <thead>--}}

                                {{--                                        <tr>--}}
                                {{--                                            <th class="background-image-none center-align">--}}
                                {{--                                                <label>--}}
                                {{--                                                    <input onClick="toggle(this)" type="checkbox"/>--}}
                                {{--                                                    <span></span>--}}
                                {{--                                                </label>--}}
                                {{--                                            </th>--}}

                                {{--                                            <th>User</th>--}}
                                {{--                                            <th>Full Name</th>--}}
                                {{--                                            <th>Email</th>--}}
                                {{--                                            <th>Phone</th>--}}
                                {{--                                            <th>Favorite</th>--}}
                                {{--                                            <th>Delete</th>--}}
                                {{--                                            <!-- <th class="background-image-none"><i class="material-icons">star_border</i></th>--}}
                                {{--                                            <th class="background-image-none"><i class="material-icons">delete_outline</i></th> -->--}}
                                {{--                                        </tr>--}}


                                {{--                                    </thead>--}}
                                {{--                                    <tbody>--}}


                                {{--                                        @foreach($datas as $data)--}}

                                {{--                                            <tr>--}}
                                {{--                                                <td class="center-align">--}}
                                {{--                                                    <label>--}}
                                {{--                                                        <input name="foo" type="checkbox"/>--}}
                                {{--                                                        <span></span>--}}
                                {{--                                                    </label>--}}
                                {{--                                                </td>--}}
                                {{--                                                <td>--}}
                                {{--                                                                                    <span class="avatar-contact avatar-online">--}}
                                {{--                                                                                        <img alt="avatar"--}}
                                {{--                                                                                             src="{{asset('app-assets/images/avatar/avatar-1.png')}}">--}}
                                {{--                                                                                    </span>--}}
                                {{--                                                </td>--}}
                                {{--                                                <td>John</td>--}}
                                {{--                                                <td>john@domain.com</td>--}}
                                {{--                                                <td>202-555-0119</td>--}}
                                {{--                                                <td>--}}
                                {{--                                                                                    <span class="favorite">--}}
                                {{--                                                                                        <i class="material-icons"> star_border </i>--}}
                                {{--                                                                                    </span>--}}
                                {{--                                                </td>--}}
                                {{--                                                <td>--}}
                                {{--                                                    <i class="material-icons delete">delete_outline</i>--}}
                                {{--                                                </td>--}}
                                {{--                                            </tr>--}}

                                {{--                                        @endforeach--}}

                                {{--                                    </tbody>--}}
                                {{--                                </table>--}}

                                @if(isset($widgets[0]->widget))

                                    @include($widgets[0]->widget , ['datas'=>$datas])
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Area Ends -->
                <!-- START RIGHT SIDEBAR NAV -->
            @include('admin.layouts.widgets.overlay_side_bar')
            <!-- END RIGHT SIDEBAR NAV -->

            </div>
        </div>
    </div>
</div>