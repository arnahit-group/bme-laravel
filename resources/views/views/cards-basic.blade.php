@extends('admin.layouts.admin')
@section('vendor-css')
@endsection

@section('header')
    <link href="{{asset('app-assets/css/pages/cards-basic.css')}}" rel="stylesheet" type="text/css">
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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Cards Basic</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="cards-basic.html#">CSS</a>
                                </li>
                                <li class="breadcrumb-item active">Cards Basic
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="cards-basic.html#!"><i
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
                    <!--Basic Card-->
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Basic Cards</h4>
                            <p>Basic card good at containing small bits of information.</p>
                            <div class="row">
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <div class="card light-blue">
                                            <div class="card-content white-text">
                                                <span class="card-title">Card Title</span>
                                                <p>
                                                    I am a very simple card with solid background & link. I am good
                                                    at
                                                    containing small bits of
                                                    information. I am convenient because I require little markup to
                                                    use
                                                    effectively.
                                                </p>
                                            </div>
                                            <div class="card-action">
                                                <a class="lime-text text-accent-1" href="cards-basic.html#!">This is
                                                    a link</a>
                                                <a class="lime-text text-accent-1" href="cards-basic.html#!">This is
                                                    a link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <div class="card gradient-45deg-light-blue-cyan gradient-shadow">
                                            <div class="card-content white-text">
                                                <span class="card-title">Card Title</span>
                                                <p>
                                                    I am a very simple card with gradient background & button. I am
                                                    good at
                                                    containing small bits
                                                    of
                                                    information. I am convenient because I require little markup to
                                                    use
                                                    effectively.
                                                </p>
                                            </div>
                                            <div class="card-action">
                                                <a class="waves-effect waves-light btn gradient-45deg-red-pink"
                                                   href="cards-basic.html#!">Button</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider mt-2"></div>

                    <!--Image Card-->
                    <div class="section" id="image-card">
                        <h4 class="header">Image Card</h4>
                        <p>Here is the standard card with an image thumbnail.</p>
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-image">
                                        <img alt="sample" src="{{asset('app-assets/images/gallery/4.png')}}"/> <span
                                                class="card-title">Card
                                    Title</span>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            I am a very simple card with link. I am good at containing small bits of
                                            information. I am convenient
                                            because I require little markup to use effectively.
                                        </p>
                                    </div>
                                    <div class="card-action"><a href="cards-basic.html#">This is a link</a> <a
                                                href="cards-basic.html#">This is a link</a></div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-image">
                                        <img alt="sample" src="{{asset('app-assets/images/gallery/3.png')}}"/> <span
                                                class="card-title">Card
                                    Title</span>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            I am a very simple card with button. I am good at containing small bits
                                            of
                                            information. I am
                                            convenient
                                            because I require little markup to use effectively.
                                        </p>
                                    </div>
                                    <div class="card-action">
                                        <a class="waves-effect waves-light btn gradient-45deg-red-pink"
                                           href="cards-basic.html#!">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider mt-2"></div>

                    <!-- FABs in Cards -->
                    <div class="section" id="fabs-card">
                        <h4 class="header">FABs in Cards</h4>
                        <p>Here is an image card with a Floating Action Button.</p>
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-image">
                                        <img alt="" src="{{asset('app-assets/images/gallery/6.png')}}"/> <span
                                                class="card-title">Card
                                    Title</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light red"> <i
                                                    class="material-icons">add</i>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            I am a very simple card with small size solid color fab button. I am
                                            good at
                                            containing small bits of
                                            information. I am convenient because I require little markup to use
                                            effectively.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-image">
                                        <img alt="" src="{{asset('app-assets/images/gallery/8.png')}}"/> <span
                                                class="card-title">Card
                                    Title</span>
                                        <a class="btn-floating btn-large halfway-fab waves-effect waves-light gradient-45deg-red-pink gradient-shadow">
                                            <i class="material-icons">add</i>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            I am a very simple card with large size gradient color fab button. I am
                                            good at
                                            containing small bits
                                            of
                                            information. I am convenient because I require little markup to use
                                            effectively.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider mt-2"></div>

                    <!-- Horizontal Card -->
                    <div class="section" id="horizontal-card">
                        <h4 class="header">Horizontal Card</h4>
                        <p>Here is the standard card with a horizontal image.</p>
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card horizontal">
                                    <div class="card-image"><img alt=""
                                                                 src="{{asset('app-assets/images/gallery/11.png')}}"/></div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                            <p>I am a very simple card with link. I am good at containing small bits
                                                of
                                                information.</p>
                                        </div>
                                        <div class="card-action"><a href="cards-basic.html#">This is a link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card horizontal">
                                    <div class="card-image"><img alt=""
                                                                 src="{{asset('app-assets/images/gallery/18.png')}}"/></div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                            <p>I am a very simple card with button. I am good at containing small
                                                bits of.</p>
                                        </div>
                                        <div class="card-action">
                                            <a class="waves-effect waves-light btn gradient-45deg-red-pink"
                                               href="cards-basic.html#!">Button</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider mt-2"></div>

                    <!--Card Reveal-->
                    <div class="section" id="card-reveal">
                        <h4 class="header">Card Reveal</h4>
                        <p>Here you can add a card that reveals more information once clicked.</p>

                        <div class="row">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img alt="" alt="office"
                                             class="activator" src="{{asset('app-assets/images/gallery/12.png')}}"/>
                                    </div>
                                    <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Card Title <i
                                          class="material-icons right">more_vert</i>
                              </span>
                                        <p><a href="cards-basic.html#">This is a link</a></p>
                                    </div>
                                    <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Card Title <i
                                          class="material-icons right">close</i>
                              </span>
                                        <p>Here is some more information about this product that is only revealed
                                            once clicked
                                            on.</p>
                                    </div>
                                </div>
                                <p>
                                    Just add the <code class=" language-markup">card-reveal</code> div with a
                                    <code class=" language-markup">span.card-title</code> inside to make this work.
                                    Add the class
                                    <code class=" language-markup">activator</code> to an element inside the card to
                                    allow it to
                                    open the card
                                    reveal.
                                </p>
                            </div>

                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img alt="" class="activator"
                                             src="{{asset('app-assets/images/gallery/19.png')}}"/>
                                    </div>
                                    <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Card Title <i
                                          class="material-icons right">more_vert</i>
                              </span>
                                        <p><a href="cards-basic.html#!">This is a link</a></p>
                                    </div>
                                    <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Card Title <i
                                          class="material-icons right">close</i>
                              </span>
                                        <p>Here is some more information about this product that is only revealed
                                            once clicked
                                            on.</p>
                                    </div>
                                    <div class="card-action"><a href="cards-basic.html#">This is a link</a> <a
                                                href="cards-basic.html#">This is a link</a></div>
                                </div>
                                <p>The default state is having the card-reveal go over the card-action.</p>
                            </div>

                            <div class="col s12 m6 l4">
                                <div class="card sticky-action">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img alt="" class="activator"
                                             src="{{asset('app-assets/images/gallery/21.png')}}"/>
                                    </div>
                                    <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Card Title <i
                                          class="material-icons right">more_vert</i>
                              </span>
                                        <p><a href="cards-basic.html#!">This is a link</a></p>
                                    </div>
                                    <div class="card-action"><a href="cards-basic.html#">This is a link</a> <a
                                                href="cards-basic.html#">This is a link</a></div>
                                    <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Card Title <i
                                          class="material-icons right">close</i>
                              </span>
                                        <p>Here is some more information about this product that is only revealed
                                            once clicked
                                            on.</p>
                                    </div>
                                </div>
                                <p>
                                    You can make your card-action always visible by adding the class
                                    <code class=" language-markup">sticky-action</code> to the overall card.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="divider mt-2"></div>

                    <!--Tabs in Cards-->
                    <div class="section" id="tabs-in-card">
                        <h4 class="header">Tabs in Cards</h4>
                        <p>For a simpler card with less markup, try using a card panel which just has padding and a
                            shadow effect</p>
                        <div class="row">
                            <div class="col s12 m6">
                                <h6 class="light">White</h6>
                                <div class="card">
                                    <div class="card-content">
                                        <p>
                                            I am a very simple card. I am good at containing small bits of
                                            information. I am
                                            convenient because I
                                            require little markup to use effectively.
                                        </p>
                                    </div>
                                    <div class="card-tabs">
                                        <ul class="tabs tabs-fixed-width">
                                            <li class="tab"><a href="cards-basic.html#test4">Test 1</a></li>
                                            <li class="tab"><a class="active" href="cards-basic.html#test5">Test
                                                    2</a></li>
                                            <li class="tab"><a href="cards-basic.html#test6">Test 3</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-content grey lighten-4">
                                        <div id="test4">Low-hanging fruit, social innovation do-gooder state of play
                                            families
                                            resist collaborative consumption justice. Strategize NGO effective
                                            altruism
                                            changemaker game-changer, social.
                                        </div>
                                        <div id="test5">
                                            <h6 class="center"> social innovation </h6>
                                            Empower change-makers; a challenges and opportunities collective impact
                                            collaborate.
                                        </div>
                                        <div id="test6">Revolutionary, expose the truth shine benefit corporation,
                                            activate
                                            incubator revolutionary co-create.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <h6 class="light">Colored</h6>
                                <div class="card blue">
                                    <div class="card-content white-text">
                                        <p>
                                            I am a very simple card. I am good at containing small bits of
                                            information. I am
                                            convenient because I
                                            require little markup to use effectively.
                                        </p>
                                    </div>
                                    <div class="card-tabs">
                                        <ul class="tabs tabs-fixed-width tabs-transparent">
                                            <li class="tab"><a href="cards-basic.html#test1">Test 1</a></li>
                                            <li class="tab"><a class="active" href="cards-basic.html#test2">Test
                                                    2</a></li>
                                            <li class="tab"><a href="cards-basic.html#test3">Test 3</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-content blue lighten-5">
                                        <div id="test1">Low-hanging fruit, social innovation do-gooder state of play
                                            families
                                            resist collaborative consumption justice. Strategize NGO effective
                                            altruism
                                            changemaker game-changer, social.
                                        </div>
                                        <div id="test2">
                                            <h6 class="center"> social innovation </h6>
                                            Empower change-makers; a challenges and opportunities collective impact
                                            collaborate.
                                        </div>
                                        <div id="test3">Revolutionary, expose the truth shine benefit corporation,
                                            activate
                                            incubator revolutionary co-create.Revolutionary, expose the truth shine
                                            benefit
                                            corporation
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider mt-2"></div>

                    <!--Card Size-->
                    <div class="section" id="card-size">
                        <h4 class="header">Card Size</h4>
                        <div class="row">
                            <div class="col s12">
                                <p class="caption">Small</p>
                                <p>The Small Card limits the height of the card to 300px.</p>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card small">
                                    <div class="card-image">
                                        <img alt="sample" src="{{asset('app-assets/images/gallery/23.png')}}"/>
                                        <span class="card-title">Card Title</span>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            I am a very simple card. I am good at containing small bits of
                                            information. I am
                                            convenient because I
                                            require little markup to use effectively.
                                        </p>
                                    </div>
                                    <div class="card-action"><a href="cards-basic.html#">This is a link</a> <a
                                                href="cards-basic.html#">This is a link</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <p class="caption">Medium</p>
                                <p>The Medium Card limits the height of the card to 400px.</p>
                            </div>
                            <div class="col s12 m7 l7">
                                <div class="card medium">
                                    <div class="card-image">
                                        <img alt="sample" src="{{asset('app-assets/images/gallery/25.png')}}"/>
                                        <span class="card-title">Card Title</span>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            I am a very simple card. I am good at containing small bits of
                                            information. I am
                                            convenient because I
                                            require little markup to use effectively.
                                        </p>
                                    </div>
                                    <div class="card-action"><a href="cards-basic.html#">This is a link</a> <a
                                                href="cards-basic.html#">This is a link</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <p class="caption">Large</p>
                                <p>The Large Card limits the height of the card to 500px.</p>
                            </div>
                            <div class="col s12 m8 l8">
                                <div class="card large">
                                    <div class="card-image">
                                        <img alt="sample" src="{{asset('app-assets/images/gallery/28.png')}}"/>
                                        <span class="card-title">Card Title</span>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            I am a very simple card. I am good at containing small bits of
                                            information. I am
                                            convenient because I
                                            require little markup to use effectively.
                                            I am a very simple card. I am good at containing small bits of
                                            information. I am
                                            convenient because I
                                            require little markup to use effectively.
                                            I am a very simple card. I am good at containing small bits of
                                            information. I am
                                            convenient because I
                                            require little markup to use effectively.
                                        </p>
                                    </div>
                                    <div class="card-action"><a href="cards-basic.html#">This is a link</a> <a
                                                href="cards-basic.html#">This is a link</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider mt-2"></div>

                    <!--Card Panel-->
                    <div class="section" id="card-panel-type">
                        <h4 class="header">Card Panel</h4>
                        <p>For a simpler card with less markup, try using a card panel which just has padding and a
                            shadow effect</p>

                        <div class="row">
                            <div class="col s12 m4 l4">
                                <div class="card-panel yellow darken-4">
                        <span class="white-text">I am a very simple solid color card. I am good at containing small
                              bits of
                              information.I am convenient
                              because I require little markup to use effectively. I am similar to what is called a
                              panel in other
                              frameworks.</span>
                                </div>
                            </div>
                            <div class="col s12 m4 l4">
                                <div class="card-panel gradient-45deg-light-blue-cyan gradient-shadow">
                        <span class="white-text">I am a very simple gradient color card. I am good at containing small
                              bits of
                              information.I am convenient
                              because I require little markup to use effectively. I am similar to what is called a
                              panel in other
                              frameworks.</span>
                                </div>
                            </div>
                            <div class="col s12 m4 l4">
                                <div class="card-panel gradient-45deg-red-pink gradient-shadow">
                        <span class="white-text">I am a very simple gradient color card. I am good at containing small
                              bits of
                              information.I am convenient
                              because I require little markup to use effectively. I am similar to what is called a
                              panel in other
                              frameworks.</span>
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
                                                            class="sidenav-close" href="cards-basic.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="cards-basic.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="cards-basic.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="cards-basic.html#activity">
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
                                <a href="cards-basic.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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

