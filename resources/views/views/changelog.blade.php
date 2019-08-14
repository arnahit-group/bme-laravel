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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Changelog</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Changelog
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="changelog.html#!"><i
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
                    <div class="row">
                        <div class="col s12">
                            <!-- v5.1 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 5.1 - 19th February, 2019</h5>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fixed BreadCrumbs in IE</li>
                                        <li>Fixed Right slide out issue of IE</li>
                                        <li>Fixed Todo Select All IE issue</li>
                                        <li>Fixed Chat image IE issue</li>
                                        <li>Fixed Datatable View in IE</li>
                                        <li>Fixed Collapse Icon of menu for IE</li>
                                        <li>Fixed Pricing page icon issue in IE</li>
                                        <li>Fixed Modal popup for IE</li>
                                        <li>Fixed Fullscreen issue from IE</li>
                                        <!-- <li>Fixed Dashboard animations of chart for IE</li> -->
                                    </ul>
                                </div>
                            </div>

                            <!-- v5.0 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 5.0 - 11th February, 2019</h5>
                                    <p>
                                        This release is the major update of the Materialize Admin as the
                                        Materializecss framework v1.0.0
                                        released.
                                        Please follow
                                        <a href="../../../../github.com/Dogfalo/materialize/blob/b17de319055843d6b3ec7ee687effd4bcff744f7/v1-upgrade-guide.htm"
                                           target="_blank">Upgrade to v1.0.0 from v0.100.1</a>
                                        before you proceed with the upgrade.
                                    </p>
                                    <span class="badge green float-left ml-0 mt-1">New</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Added new vertical modern & dark menu templates</li>
                                        <li>Added theme customizer for customization & preview template in real
                                            time
                                        </li>
                                        <li>Added new vertical dark menu template</li>
                                        <li>Added new menu active style</li>
                                        <li>Added modern dashboard with clean and modern look & feel</li>
                                        <li>Added chat, todo, contact & ecommerce applications</li>
                                        <li>Added search, knowledge base & faq pages</li>
                                        <li>Added new advanced & extended cards</li>
                                        <li>Added all the framework components useful html,css & js code</li>
                                        <li>Added new components & options as per Materializecss framework</li>
                                        <li>Added form wizard with vertical & horizontal example</li>
                                        <li>Added intro section for landing page of admin template</li>
                                    </ul>
                                    <span class="badge purple float-left ml-0 mt-1">Improved</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Materializecss framework upgraded to v1.0.0</li>
                                        <li>Improved folder structure to make it easy to utilize</li>
                                        <li>Upgraded all the third party vendors & library</li>
                                        <li>Improved Email & Calendar app UI and functionality</li>
                                        <li>Improved user profile & error pages design</li>
                                        <li>Improved contact page UI</li>
                                        <li>Improved right slide out UI and added chat support</li>
                                        <li>Improved chart library and upgrade all the charts</li>
                                        <li>Improve the document for upgraded folder structure usage and
                                            customization
                                        </li>
                                        <li>Improve gulp tasks for the new folder structure</li>
                                    </ul>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fixed swipe to open menu in small screen</li>
                                        <li>Fixed chartjs issues by upgrading it to latest stable version</li>
                                        <li>Fixed form elements, validation & input mask related issues</li>
                                    </ul>
                                    <span class="badge red float-left ml-0 mt-1">Removed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Removed vertical overlay & fixed menu template</li>
                                        <li>Removed grunt task runner support</li>
                                        <li>Removed jsGrid, floatThead tables</li>
                                        <li>Removed advance-ui-scrollfire as per framework change</li>
                                        <li>Removed Morris, xChart & Flot charts</li>
                                        <li>Removed AngularJS directive support (Angular 1.0)</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- v4.0 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 4.0 - 18th October, 2017</h5>
                                    <span class="badge green float-left ml-0 mt-1">New</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>New Themes : Collapsible Menu, Collapsible Semi Dark Menu</li>
                                        <li>New Dashboard - dashboard-ecommerce.html</li>
                                        <li>Advanced cards - advanced-cards.html</li>
                                        <li>Advanced ui pulse - css-pulse.html</li>
                                        <li>Feature discovery - ui-feature-discovery.html</li>
                                        <li>CSS Transition - css-transitions.html</li>
                                        <li>Carousel - ui-carousel.html</li>
                                        <li>JS Transition - advanced-ui-transitions.html</li>
                                        <li>UI Advanced Buttons - ui-buttons-extended.html</li>
                                        <li>Dropdown - advance-ui-dropdown.html</li>
                                        <li>Scrollfire - advance-ui-scrollfire.html</li>
                                        <li>Scrollspy - advance-ui-scrollspy.html</li>
                                        <li>Add new layouts pages for light, dark, semi-dark, fixed footer and
                                            collapsible menu options
                                        </li>
                                        <li>Added support for jQuery 3</li>
                                        <li>Added Time Picker</li>
                                        <li>Added XL breakpoint</li>
                                        <li>Added Pulse CSS effect</li>
                                        <li>Added Feature Discovery component</li>
                                        <li>Added FABs in image cards</li>
                                        <li>Added swipeable tabs</li>
                                        <li>Added autocomplete integration with chips</li>
                                        <li>Added class method to dismiss all toasts</li>
                                        <li>Added callbacks to side nav</li>
                                        <li>Added instance method to remove specific toasts</li>
                                        <li>Added ability to remove autocompelete data</li>
                                        <li>Added container option for time picker</li>
                                        <li>Tab accessibility for date picker</li>
                                        <li>Validation styling support added for many form components</li>
                                        <li>Added carousel destroy</li>
                                        <li>Added close on select option for date picker</li>
                                        <li>Added support for custom active elements in scrollspy</li>
                                        <li>Basic horizontal cards</li>
                                        <li>Sidenav and Modals no longer cause flicker with scrollbar</li>
                                        <li>Materialbox overflow and z-index issues fixed</li>
                                        <li>Added new option for Card actions within a Card reveal</li>
                                    </ul>
                                    <span class="badge purple float-left ml-0 mt-1">Improved</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Materializecss framework upgraded to v0.100.1</li>
                                        <li>Updated styling for Date Picker</li>
                                        <li>Updated styling for switches</li>
                                        <li>Autocomplete: renamed and moved options to autocompleteOptions</li>
                                        <li>Range slider supports keyboard navigation</li>
                                        <li>Upgraded noUiSlider to version 9 with support for vertical sliders</li>
                                        <li>Improved tabs compatibility with cards</li>
                                        <li>Refactored Modal plugin</li>
                                        <li>Tabs now supported in navbar</li>
                                        <li>Chips data can now be reinitiailized</li>
                                        <li>Updated sidenav styles and new component</li>
                                        <li>Changed /font directory to /fonts</li>
                                        <li>Datepicker and ScrollSpy now compatible with jQuery 2.2.x</li>
                                        <li>css-icons.html --> ui-icons.html</li>
                                        <li>advanced-ui-chips.html - > ui-chips.html</li>
                                        <li>ui-toasts.html -> advance-ui-toasts.html</li>
                                        <li>ui-tooltip.html -> advance-ui-tooltip.html</li>
                                        <li>ui-waves.html -> advance-ui-waves.html</li>
                                        <li>ui-tabs.html -> advance-ui-tabs.html</li>
                                        <li>ui-collapsibles.html -> advance-ui-collapsibles.html</li>
                                        <li>ui-carousel.html -> advance-ui-carousel.html</li>
                                        <li>ui-transitions.html -> advanced-ui-transitions.html</li>
                                        <li>Renamed Plugins folder to Vendors and moved to root folder</li>
                                    </ul>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fixed bug where modal triggers could not contain child elements</li>
                                        <li>Fixed bug with right alignment option for dropdown</li>
                                        <li>Added fix for validation messages being mispositioned when input is
                                            empty
                                        </li>
                                        <li>Allow select native browser validation error messages</li>
                                        <li>Modal open no longer initializes plugin</li>
                                        <li>Fixed bug where modal open did not use initialized options</li>
                                        <li>Modal-trigger class required for modal trigger elements</li>
                                        <li>Fixed waves persisting bug</li>
                                        <li>Waves no longer throws error on svg elements</li>
                                        <li>Fixed side nav callback bugs</li>
                                        <li>Fixed carousel image loading bug</li>
                                        <li>Full width carousel now resizes height on resize</li>
                                        <li>Fixed multiple bugs with jQuery outerWidth on Linux</li>
                                        <li>Fixed cursor blinking on select on iOS</li>
                                        <li>Fixed search form styling in navbar</li>
                                        <li>Fixed label animation on date picker</li>
                                        <li>Browser errors now show up on radio buttons and checkboxes</li>
                                        <li>Fixed dynamic textarea resize bug</li>
                                        <li>Fixed collapsible preselect bug</li>
                                        <li>Fixed dropdown event bubbling bug</li>
                                        <li>Fixed range position inaccuracies</li>
                                        <li>Fixed feature discovery mobile styles</li>
                                        <li>Fixed carousel reinitialize bugs</li>
                                        <li>Fixed grid offset bug</li>
                                        <li>Fixed various select bugs on mobile devices</li>
                                        <li>Fixed small sideNav overlay bugs</li>
                                        <li>Fixed carousel resizing bug</li>
                                        <li>Fixed materialbox callback bug</li>
                                        <li>Fixed carousel misalignment when switching quickly</li>
                                        <li>Fixed carousel resize bug where slide widths wouldn't change when
                                            changing window size
                                        </li>
                                        <li>Fixed bug where using backspace to delete chips would navigate back in
                                            certain browsers
                                        </li>
                                        <li>Fixed dropdown options bug</li>
                                        <li>Carousel bug fixes and new features</li>
                                        <li>Responsive tables now work with empty cells</li>
                                        <li>Added focus states to checkboxes, switches, and radio buttons</li>
                                    </ul>
                                    <span class="badge red float-left ml-0 mt-1">Removed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Removed deprecated material icons from project</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- v3.1 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 3.1 - 28th January, 2016</h5>
                                    <span class="badge green float-left ml-0 mt-1">New</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Added a custom.scss file for making custom changes using SCSS.</li>
                                    </ul>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fixed navigation bar issue on small screen for Horizontal & full-screen
                                            layout
                                        </li>
                                        <li>Fixed card reveal effect and make made it more smooth</li>
                                        <li>Fixed chartist error on single pages like login, register etc..</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- v3.0 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 3.0 - 12th December, 2015</h5>
                                    <span class="badge green float-left ml-0 mt-1">New</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>
                                            Ready to use number of Angular directives, are handled by Angular in the
                                            right way. (
                                            angular-materialize.html)
                                        </li>
                                        <li>Language Translation (advanced-ui-translation.html)</li>
                                        <li>Sweetalert for beautiful Modal popup (advanced-ui-sweetalert.html)</li>
                                        <li>Shortable & Nestable (advanced-ui-nestable.html)</li>
                                        <li>Range Selector (advanced-ui-range-slider.html)</li>
                                        <li>Syntext Highlight (advanced-ui-highlight.html)</li>
                                        <li>Advanced form validations (form-validation.html)</li>
                                        <li>Input ttype mask (form-masks.html)</li>
                                        <li>Drag & Drop file upload with customizable drop zone
                                            (form-file-uploads.html)
                                        </li>
                                        <li>Updated new form elements (form-elements.html)</li>
                                        <li>jsGrid - Lightweight Grid jQuery Plugin (table-jsgrid.html)</li>
                                        <li>editableTable - turns any table into an editable spreadsheet.
                                            (table-editable.html)
                                        </li>
                                        <li>
                                            floatThead - fixed table header plugin that requires no special CSS and
                                            supports
                                            (table-floatThead.html)
                                        </li>
                                        <li>Material Chips (ui-chips.html)</li>
                                        <li>Alerts & Warnings (ui-alerts.html)</li>
                                        <li>Breadcrumbs (ui-breadcrumbs.html)</li>
                                        <li>
                                            Accordions page change to Collapsible with new popout feature.
                                            (ui-accordions.html - >
                                            ui-collapsible.html
                                            )
                                        </li>
                                        <li>CSS Animations (css-animations.html)</li>
                                        <li>Hoverable healpers (css-helpers.html)</li>
                                    </ul>
                                    <span class="badge purple float-left ml-0 mt-1">Improved</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Updated Material FAB Buttons (ui-buttons.html)</li>
                                    </ul>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fixed popup close issue on click of popup out side (body) area.</li>
                                        <li>Fixed the datatables row display select dropdown hide issue.</li>
                                        <li>Fixed the floating button hover issue.</li>
                                        <li>Fixed sparkline chaer hover stats background display issue.</li>
                                        <li>Fixed the dount chart stats position.</li>
                                        <li>Added the open close state menu icons and color.</li>
                                        <li>Added notification dropdown and county flag dropdown for translation.
                                        </li>
                                        <li>Fixed chart lag, scrollbar and map marker issues.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- v2.3 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 2.3 - 25th September, 2015</h5>
                                    <span class="badge green float-left ml-0 mt-1">New</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Update materialize the SASS files</li>
                                    </ul>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fixed Firefox dropdown menu support issues</li>
                                        <p>e-Commerce product page fix</p>
                                    </ul>
                                </div>
                            </div>

                            <!-- v2.2 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 2.2 - 18th August, 2015</h5>
                                    <span class="badge purple float-left ml-0 mt-1">Improved</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Improved Charts</li>
                                        <li>Update materialize the SASS files</li>
                                    </ul>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fixed IE and Firefox support issues</li>
                                        <li>Dashboard search fix and updates</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- v2.1 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 2.1 - 11th June, 2015</h5>
                                    <span class="badge green float-left ml-0 mt-1">New</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>2 New layout added - Horizontal & Full Screen</li>
                                        <li>New Page - Profile Page</li>
                                        <li>New Page - Contact Page</li>
                                        <li>New Page - ToDos Page</li>
                                        <li>New Page - Blog Type 1 & 2 Page</li>
                                        <li>New Page - Products Page</li>
                                        <li>New Page - Pricing Page</li>
                                        <li>New Page - Gallaery Page</li>
                                        <li>New Page - Image Hover Page</li>
                                    </ul>
                                    <span class="badge purple float-left ml-0 mt-1">Improved</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Updated Material Search</li>
                                        <li>Update materialize the SASS files</li>
                                    </ul>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fixed perfect scroll bar select to scroll issue</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- v1.1 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 1.1 - 6th June, 2015</h5>
                                    <span class="badge green float-left ml-0 mt-1">New</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Add new floating action button</li>
                                    </ul>
                                    <span class="badge purple float-left ml-0 mt-1">Improved</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Update materialize the SASS files</li>
                                    </ul>
                                    <span class="badge light-blue float-left ml-0 mt-1">Fixed</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Fix the trending chart lagging issue</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- v1.0 -->
                            <div class="card">
                                <div class="card-content">
                                    <h5 class="card-title">v 1.0 - 20th March, 2015</h5>
                                    <span class="badge green float-left ml-0 mt-2">New</span>
                                    <div class="clear-both"></div>
                                    <ul class="list-type-bullet">
                                        <li>Version 1.0 released on 20th March 2015.</li>
                                    </ul>
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
                                                            class="sidenav-close" href="changelog.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="changelog.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="changelog.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="changelog.html#activity">
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
                                <a href="changelog.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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

@endsection

