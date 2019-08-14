<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0">Media Hover Effects Page</h5>

                        <ol class="breadcrumbs mb-0">

                            @foreach($breadcrumbs  as $breadcrumb)
                                <li class="breadcrumb-item">
                                    @if($breadcrumb['url'] != '')
                                        <a href="{{$breadcrumb['url']}}">
                                            {{$breadcrumb['title']}}
                                        </a>
                                    @else
                                        {{$breadcrumb['title']}}
                                    @endif
                                </li>
                            @endforeach

                        </ol>

                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section">
                    <div class="card">
                        <div class="card-content">
                            <p class="caption mb-0">Masonry with Magnific Popup is a responsive lightbox &
                                dialog script with focus on
                                performance and providing best experience for user with any device</p>
                        </div>
                    </div>

                    <div class="row">


                        @foreach($datas as $data)


                            <div class="col s12 m3 grid">
                                <figure class="effect-zoe">

                                    @if(isset($data->properties['path']->title))
                                        <img alt="img25" src="{{$data->properties['path']->title}}"/>
                                    @else
                                        <img alt="img25" src="{{asset('app-assets/images/gallery/25.png')}}"/>
                                    @endif
                                    <figcaption>
                                        <h6 class="left">Creative
                                            <span>Zoe</span>
                                        </h6>
                                        <p class="icon-links">
                                            <a href="#">
                                                <span class="icon-heart"></span>
                                            </a>
                                            <a href="#">
                                                <span class="icon-eye"></span>
                                            </a>
                                            <a href="#">
                                                <span class="icon-paper-clip"></span>
                                            </a>
                                        </p>
                                        <p class="description">Zoe never had the patience of her sisters. She
                                            deliberately punched the bear in his
                                            face.</p>
                                    </figcaption>
                                </figure>
                            </div>

                        @endforeach

                    </div>
                </div>
                <!-- START RIGHT SIDEBAR NAV -->
                <aside id="right-sidebar-nav">
                    <div class="slide-out-right-sidenav sidenav rightside-navigation" id="slide-out-right">
                        <div class="row">
                            <div class="slide-out-right-title">
                                <div class="col s12 border-bottom-1 pb-0 pt-1">
                                    <div class="row">
                                        <div class="col s2 pr-0 center">
                                            <i class="material-icons vertical-text-middle"><a
                                                        class="sidenav-close"
                                                        href="media-hover-effects.html#">clear</a></i>
                                        </div>
                                        <div class="col s10 pl-0">
                                            <ul class="tabs">
                                                <li class="tab col s4 p-0">
                                                    <a class="active" href="media-hover-effects.html#messages">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="media-hover-effects.html#settings">
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="media-hover-effects.html#activity">
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
                                                    New order received urgent <span
                                                            class="secondary-content">Just now</span>
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
                            <a href="media-hover-effects.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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
                <div class="fixed-action-btn direction-top" style="bottom: 50px; right: 19px;"><a
                            class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i
                                class="material-icons">add</i></a>
                    <ul>
                        <li><a class="btn-floating blue" href="css-helpers.html"><i
                                        class="material-icons">help_outline</i></a>
                        </li>
                        <li><a class="btn-floating green" href="cards-extended.html"><i
                                        class="material-icons">widgets</i></a>
                        </li>
                        <li><a class="btn-floating amber" href="app-calendar.html"><i
                                        class="material-icons">today</i></a>
                        </li>
                        <li><a class="btn-floating red" href="app-email.html"><i class="material-icons">mail_outline</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
