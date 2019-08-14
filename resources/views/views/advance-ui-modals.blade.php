@extends('admin.layouts.admin')
@section('vendor-css')

@endsection

@section('header')


@endsection

@section('main')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0">Modals</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="advance-ui-modals.html#">Advance UI</a>
                                </li>
                                <li class="breadcrumb-item active">Modals
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="advance-ui-modals.html#!"><i
                                        class="material-icons hide-on-med-and-up">settings</i><span
                                        class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span
                                                class="new badge red">2</span></a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a>
                                </li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a>
                                </li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2"
                                                    href="user-login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Use a modal for dialog boxes, confirmation messages, or
                                    other content that can be called
                                    up. In order for the modal to work you have to add the Modal ID to the link of
                                    the trigger.</p>
                            </div>
                        </div>
                        <!-- Modal Example -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="fixed-example">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Modal Example</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="advance-ui-modals.html#view-example">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="advance-ui-modals.html#html-fixed-example">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-example">
                                            <div class="row">
                                                <div class="col s12">
                                                    <a class="waves-effect waves-light btn modal-trigger mb-2 mr-1"
                                                       href="advance-ui-modals.html#modal1">Modal</a>
                                                    <a class="waves-effect waves-light btn modal-trigger mb-2 mr-1"
                                                       href="advance-ui-modals.html#modal2">Modal With Fixed
                                                        Footer</a>
                                                    <a class="waves-effect waves-light btn modal-trigger mb-2"
                                                       href="advance-ui-modals.html#modal3">Modal Bottom Sheet
                                                        Style</a>
                                                    <div class="modal" id="modal1">
                                                        <div class="modal-content">
                                                            <h4>Modal Header</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim
                                                                veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Duis aute
                                                                irure dolor in reprehenderit in voluptate
                                                                velit esse cillum dolore eu fugiat nulla pariatur.
                                                                Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit
                                                                anim id est laborum</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a class="modal-action modal-close waves-effect waves-red btn-flat "
                                                               href="advance-ui-modals.html#!">Disagree</a>
                                                            <a class="modal-action modal-close waves-effect waves-green btn-flat "
                                                               href="advance-ui-modals.html#!">Agree</a>
                                                        </div>
                                                    </div>
                                                    <div class="modal modal-fixed-footer" id="modal2">
                                                        <div class="modal-content">
                                                            <h4>Modal Header</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim
                                                                veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Duis aute
                                                                irure dolor in reprehenderit in voluptate
                                                                velit esse cillum dolore eu fugiat nulla pariatur.
                                                                Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit
                                                                anim id est laborum</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim
                                                                veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Duis aute
                                                                irure dolor in reprehenderit in voluptate
                                                                velit esse cillum dolore eu fugiat nulla pariatur.
                                                                Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit
                                                                anim id est laborum</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim
                                                                veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Duis aute
                                                                irure dolor in reprehenderit in voluptate
                                                                velit esse cillum dolore eu fugiat nulla pariatur.
                                                                Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit
                                                                anim id est laborum</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim
                                                                veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Duis aute
                                                                irure dolor in reprehenderit in voluptate
                                                                velit esse cillum dolore eu fugiat nulla pariatur.
                                                                Excepteur sint occaecat cupidatat non
                                                                proident, sunt in culpa qui officia deserunt mollit
                                                                anim id est laborum</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a class="modal-action modal-close waves-effect waves-red btn-flat "
                                                               href="advance-ui-modals.html#!">Disagree</a>
                                                            <a class="modal-action modal-close waves-effect waves-green btn-flat "
                                                               href="advance-ui-modals.html#!">Agree</a>
                                                        </div>
                                                    </div>
                                                    <div class="modal bottom-sheet" id="modal3">
                                                        <div class="modal-content">
                                                            <h4>Modal Header</h4>
                                                            <ul class="collection">
                                                                <li class="collection-item avatar">
                                                                    <img alt=""
                                                                         class="circle" src="{{asset('app-assets/images/avatar/avatar-7.png')}}">
                                                                    <span class="title">Title</span>
                                                                    <p>First Line
                                                                        <br> Second Line
                                                                    </p>
                                                                    <a class="secondary-content"
                                                                       href="advance-ui-modals.html#!">
                                                                        <i class="material-icons">grade</i>
                                                                    </a>
                                                                </li>
                                                                <li class="collection-item avatar">
                                                                    <i class="material-icons circle">folder</i>
                                                                    <span class="title">Title</span>
                                                                    <p>First Line
                                                                        <br> Second Line
                                                                    </p>
                                                                    <a class="secondary-content"
                                                                       href="advance-ui-modals.html#!">
                                                                        <i class="material-icons">grade</i>
                                                                    </a>
                                                                </li>
                                                                <li class="collection-item avatar">
                                                                    <i class="material-icons circle green">assessment</i>
                                                                    <span class="title">Title</span>
                                                                    <p>First Line
                                                                        <br> Second Line
                                                                    </p>
                                                                    <a class="secondary-content"
                                                                       href="advance-ui-modals.html#!">
                                                                        <i class="material-icons">grade</i>
                                                                    </a>
                                                                </li>
                                                                <li class="collection-item avatar">
                                                                    <i class="material-icons circle red">play_arrow</i>
                                                                    <span class="title">Title</span>
                                                                    <p>First Line
                                                                        <br> Second Line
                                                                    </p>
                                                                    <a class="secondary-content"
                                                                       href="advance-ui-modals.html#!">
                                                                        <i class="material-icons">grade</i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-fixed-example">
            <pre><code class="language-markup">
  &lt;!-- Modal Trigger -->
  &lt;a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal&lt;/a>
  &lt;!-- Modal Structure -->
  &lt;div id="modal1" class="modal">
    &lt;div class="modal-content">
      &lt;h4>Modal Header&lt;/h4>
      &lt;p>A bunch of text&lt;/p>
    &lt;/div>
    &lt;div class="modal-footer">
      &lt;a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree&lt;/a>
    &lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modals with Fixed Footer -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="fixed-footer">
                                    <div class="card-content">
                                        <h4 class="card-title">Modals with Fixed Footer</h4>
                                        <p>If you have content that is very long and you want the action buttons to
                                            be visible all the time, you can
                                            add the <code class="language-markup">modal-fixed-footer</code> class to
                                            the modal. </p>
                                        <pre><code class="language-markup">
  &lt;!-- Modal Trigger -->
  &lt;a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal&lt;/a>
  &lt;!-- Modal Structure -->
  &lt;div id="modal1" class="modal modal-fixed-footer">
    &lt;div class="modal-content">
      &lt;h4>Modal Header&lt;/h4>
      &lt;p>A bunch of text&lt;/p>
    &lt;/div>
    &lt;div class="modal-footer">
      &lt;a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree&lt;/a>
    &lt;/div>
  &lt;/div>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Sheet Modals -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="sheet-modals">
                                    <div class="card-content">
                                        <h4 class="card-title">Bottom Sheet Modals</h4>
                                        <p>Bottom Sheet Modals are good for displaying actions to the user on the
                                            bottom of a screen. They still act
                                            the same as regular modals.</p>
                                        <pre><code class="language-markup">
  &lt;!-- Modal Trigger -->
  &lt;a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal&lt;/a>
  &lt;!-- Modal Structure -->
  &lt;div id="modal1" class="modal bottom-sheet">
    &lt;div class="modal-content">
      &lt;h4>Modal Header&lt;/h4>
      &lt;p>A bunch of text&lt;/p>
    &lt;/div>
    &lt;div class="modal-footer">
      &lt;a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree&lt;/a>
    &lt;/div>
  &lt;/div>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modals with Button trigger -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="button-trigger">
                                    <div class="card-content">
                                        <h4 class="card-title">Modals with Button trigger</h4>
                                        <p>If you prefer to use a button to open a modal specify the Modal ID in
                                            <code class="language-markup">data-target</code>
                                            rather than the href attribute. </p>
                                        <pre><code class="language-markup">
  &lt;!-- Modal Trigger -->
  &lt;button data-target="modal1" class="btn modal-trigger">Modal&lt;/button>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- jQuery Plugin Initialization -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="plugin-initialization">
                                    <div class="card-content">
                                        <h4 class="card-title">jQuery Plugin Initialization</h4>
                                        <p>To open a modal using a trigger:</p>
                                        <pre><code class="language-javascript">
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </code></pre>
                                        <p>You can also open modals programatically, the below code will make your
                                            modal open on document ready:</p>
                                        <pre><code class="language-javascript">
  $('#modal1').modal('open');
  </code></pre>
                                        <p>You can also close them programatically:</p>
                                        <pre><code class="language-javascript">
  $('#modal1').modal('close');
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Options -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="options">
                                    <div class="card-content">
                                        <h4 class="card-title">Options</h4>
                                        <p>You can customize the behavior of each modal using these options. For
                                            example, you can call a custom
                                            function to run when a modal is dismissed. To do this, just place your
                                            function in the intialization code
                                            as shown below.</p>
                                        <pre><code class="language-javascript">
$('.modal').modal({
  dismissible: true, // Modal can be dismissed by clicking outside of the modal
  opacity: .5, // Opacity of modal background
  inDuration: 300, // Transition in duration
  outDuration: 200, // Transition out duration
  startingTop: '4%', // Starting top style attribute
  endingTop: '10%', // Ending top style attribute
  ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
  alert("Ready");
  console.log(modal, trigger);
  },
  complete: function() { alert('Closed'); } // Callback for Modal close
  }
);
</code></pre>
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
                                                            class="sidenav-close"
                                                            href="advance-ui-modals.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="advance-ui-modals.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="advance-ui-modals.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="advance-ui-modals.html#activity">
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
                                <a href="advance-ui-modals.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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
                            <li><a class="btn-floating blue" href="css-helpers.html"><i class="material-icons">help_outline</i></a>
                            </li>
                            <li><a class="btn-floating green" href="cards-extended.html"><i class="material-icons">widgets</i></a>
                            </li>
                            <li><a class="btn-floating amber" href="app-calendar.html"><i class="material-icons">today</i></a>
                            </li>
                            <li><a class="btn-floating red" href="app-email.html"><i class="material-icons">mail_outline</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('vendor-js')

@endsection

@section('footer')
    <script src="{{asset('app-assets/js/scripts/advance-ui-modals.js')}}" type="text/javascript"></script>

@endsection

