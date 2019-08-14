@extends('admin.layouts.admin')
@section('vendor-css')
    <link href="{{asset('app-assets/vendors/flag-icon/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/vendors/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/vendors/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">


@endsection

@section('header')

    <link href="{{asset('app-assets/vendors/hover-effects/media-hover-effects.css')}}" rel="stylesheet" type="text/css">

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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Media Hover Effects Page</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="media-hover-effects.html#">Medias</a>
                                </li>
                                <li class="breadcrumb-item active">Media Hover Effects Page
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="media-hover-effects.html#!"><i
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
                                <p class="caption mb-0">Masonry with Magnific Popup is a responsive lightbox &
                                    dialog script with focus on
                                    performance and providing best experience for user with any device</p>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Lily</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-lily">
                                    <img alt="img12" src="{{asset('app-assets/images/gallery/12.png')}}"/>
                                    <figcaption>
                                        <div>
                                            <h2>Nice
                                                <span>Lily</span>
                                            </h2>
                                            <p>Lily likes to play with crayons and pencils</p>

                                        </div>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-lily">
                                    <img alt="img1" src="{{asset('app-assets/images/gallery/1.png')}}"/>
                                    <figcaption>
                                        <div>
                                            <h2>Nice
                                                <span>Lily</span>
                                            </h2>
                                            <p>Lily likes to play with crayons and pencils</p>
                                        </div>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Sadie</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-sadie">
                                    <img alt="img02" src="{{asset('app-assets/images/gallery/2.png')}}"/>
                                    <figcaption>
                                        <h2>Holy
                                            <span>Sadie</span>
                                        </h2>
                                        <p>Sadie never took her eyes off me.
                                            <br>She had a dark soul.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-sadie">
                                    <img alt="img14" src="{{asset('app-assets/images/gallery/14.png')}}"/>
                                    <figcaption>
                                        <h2>Holy
                                            <span>Sadie</span>
                                        </h2>
                                        <p>Sadie never took her eyes off me.
                                            <br>She had a dark soul.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Honey</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-honey">
                                    <img alt="img04" src="{{asset('app-assets/images/gallery/4.png')}}"/>
                                    <figcaption>
                                        <h2>Dreamy
                                            <span>Honey</span>
                                            <i>Now</i>
                                        </h2>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-honey">
                                    <img alt="img05" src="{{asset('app-assets/images/gallery/5.png')}}"/>
                                    <figcaption>
                                        <h2>Dreamy
                                            <span>Honey</span>
                                            <i>Now</i>
                                        </h2>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Layla</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-layla">
                                    <img alt="img06" src="{{asset('app-assets/images/gallery/6.png')}}"/>
                                    <figcaption>
                                        <h2>Crazy
                                            <span>Layla</span>
                                        </h2>
                                        <p>When Layla appears, she brings an eternal summer along.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-layla">
                                    <img alt="img03" src="{{asset('app-assets/images/gallery/3.png')}}"/>
                                    <figcaption>
                                        <h2>Crazy
                                            <span>Layla</span>
                                        </h2>
                                        <p>When Layla appears, she brings an eternal summer along.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Zoe</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-zoe">
                                    <img alt="img25" src="{{asset('app-assets/images/gallery/25.png')}}"/>
                                    <figcaption>
                                        <h2>Creative
                                            <span>Zoe</span>
                                        </h2>
                                        <p class="icon-links">
                                            <a href="media-hover-effects.html#">
                                                <span class="icon-heart"></span>
                                            </a>
                                            <a href="media-hover-effects.html#">
                                                <span class="icon-eye"></span>
                                            </a>
                                            <a href="media-hover-effects.html#">
                                                <span class="icon-paper-clip"></span>
                                            </a>
                                        </p>
                                        <p class="description">Zoe never had the patience of her sisters. She
                                            deliberately punched the bear in his
                                            face.</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-zoe">
                                    <img alt="img26" src="{{asset('app-assets/images/gallery/26.png')}}"/>
                                    <figcaption>
                                        <h2>Creative
                                            <span>Zoe</span>
                                        </h2>
                                        <p class="icon-links">
                                            <a href="media-hover-effects.html#">
                                                <span class="icon-heart"></span>
                                            </a>
                                            <a href="media-hover-effects.html#">
                                                <span class="icon-eye"></span>
                                            </a>
                                            <a href="media-hover-effects.html#">
                                                <span class="icon-paper-clip"></span>
                                            </a>
                                        </p>
                                        <p class="description">Zoe never had the patience of her sisters. She
                                            deliberately punched the bear in his
                                            face.</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Oscar</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-oscar">
                                    <img alt="img09" src="{{asset('app-assets/images/gallery/9.png')}}"/>
                                    <figcaption>
                                        <h2>Warm
                                            <span>Oscar</span>
                                        </h2>
                                        <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-oscar">
                                    <img alt="img10" src="{{asset('app-assets/images/gallery/10.png')}}"/>
                                    <figcaption>
                                        <h2>Warm
                                            <span>Oscar</span>
                                        </h2>
                                        <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Marley</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-marley">
                                    <img alt="img11" src="{{asset('app-assets/images/gallery/11.png')}}"/>
                                    <figcaption>
                                        <h2>Sweet
                                            <span>Marley</span>
                                        </h2>
                                        <p>Marley tried to convince her but she was not interested.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-marley">
                                    <img alt="img12" src="{{asset('app-assets/images/gallery/12.png')}}"/>
                                    <figcaption>
                                        <h2>Sweet
                                            <span>Marley</span>
                                        </h2>
                                        <p>Marley tried to convince her but she was not interested.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Ruby</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-ruby">
                                    <img alt="img13" src="{{asset('app-assets/images/gallery/13.png')}}"/>
                                    <figcaption>
                                        <h2>Glowing
                                            <span>Ruby</span>
                                        </h2>
                                        <p>Ruby did not need any help. Everybody knew that.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-ruby">
                                    <img alt="img14" src="{{asset('app-assets/images/gallery/14.png')}}"/>
                                    <figcaption>
                                        <h2>Glowing
                                            <span>Ruby</span>
                                        </h2>
                                        <p>Ruby did not need any help. Everybody knew that.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Roxy</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-roxy">
                                    <img alt="img15" src="{{asset('app-assets/images/gallery/15.png')}}"/>
                                    <figcaption>
                                        <h2>Charming
                                            <span>Roxy</span>
                                        </h2>
                                        <p>Roxy was my best friend. She'd cross any border for me.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-roxy">
                                    <img alt="img01" src="{{asset('app-assets/images/gallery/1.png')}}"/>
                                    <figcaption>
                                        <h2>Charming
                                            <span>Roxy</span>
                                        </h2>
                                        <p>Roxy was my best friend. She'd cross any border for me.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Bubba</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-bubba">
                                    <img alt="img02" src="{{asset('app-assets/images/gallery/2.png')}}"/>
                                    <figcaption>
                                        <h2>Fresh
                                            <span>Bubba</span>
                                        </h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-bubba">
                                    <img alt="img16" src="{{asset('app-assets/images/gallery/16.png')}}"/>
                                    <figcaption>
                                        <h2>Fresh
                                            <span>Bubba</span>
                                        </h2>
                                        <p>Bubba likes to appear out of thin air.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Romeo</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-romeo">
                                    <img alt="img17" src="{{asset('app-assets/images/gallery/17.png')}}"/>
                                    <figcaption>
                                        <h2>Wild
                                            <span>Romeo</span>
                                        </h2>
                                        <p>Romeo never knows what he wants. He seemed to be very cross about
                                            something.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-romeo">
                                    <img alt="img18" src="{{asset('app-assets/images/gallery/18.png')}}"/>
                                    <figcaption>
                                        <h2>Wild
                                            <span>Romeo</span>
                                        </h2>
                                        <p>Romeo never knows what he wants. He seemed to be very cross about
                                            something.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Dexter</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-dexter">
                                    <img alt="img19" src="{{asset('app-assets/images/gallery/19.png')}}"/>
                                    <figcaption>
                                        <h2>Strange
                                            <span>Dexter</span>
                                        </h2>
                                        <p>Dexter had his own strange way. You could watch him training ants.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-dexter">
                                    <img alt="img12" src="{{asset('app-assets/images/gallery/12.png')}}"/>
                                    <figcaption>
                                        <h2>Strange
                                            <span>Dexter</span>
                                        </h2>
                                        <p>Dexter had his own strange way. You could watch him training ants.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Sarah</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-sarah">
                                    <img alt="img13" src="{{asset('app-assets/images/gallery/13.png')}}"/>
                                    <figcaption>
                                        <h2>Free
                                            <span>Sarah</span>
                                        </h2>
                                        <p>Sarah likes to watch clouds. She's quite depressed.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-sarah">
                                    <img alt="img20" src="{{asset('app-assets/images/gallery/20.png')}}"/>
                                    <figcaption>
                                        <h2>Free
                                            <span>Sarah</span>
                                        </h2>
                                        <p>Sarah likes to watch clouds. She's quite depressed.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Chico</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-chico">
                                    <img alt="img15" src="{{asset('app-assets/images/gallery/15.png')}}"/>
                                    <figcaption>
                                        <h2>Silly
                                            <span>Chico</span>
                                        </h2>
                                        <p>Chico's main fear was missing the morning bus.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-chico">
                                    <img alt="img04" src="{{asset('app-assets/images/gallery/4.png')}}"/>
                                    <figcaption>
                                        <h2>Silly
                                            <span>Chico</span>
                                        </h2>
                                        <p>Chico's main fear was missing the morning bus.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col s12">Milo</h4>
                            <div class="col s12 m6 grid">
                                <figure class="effect-milo">
                                    <img alt="img11" src="{{asset('app-assets/images/gallery/11.png')}}"/>
                                    <figcaption>
                                        <h2>Faithful
                                            <span>Milo</span>
                                        </h2>
                                        <p>Milo went to the woods. He took a fun ride and never came back.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col s12 m6 grid">
                                <figure class="effect-milo">
                                    <img alt="img03" src="{{asset('app-assets/images/gallery/3.png')}}"/>
                                    <figcaption>
                                        <h2>Faithful
                                            <span>Milo</span>
                                        </h2>
                                        <p>Milo went to the woods. He took a fun ride and never came back.</p>
                                        <a href="media-hover-effects.html#">View more</a>
                                    </figcaption>
                                </figure>
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
    <script src="{{asset('app-assets/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/masonry.pkgd.min.js')}}" type="text/javascript"></script>

@endsection

@section('footer')
    <script src="{{asset('app-assets/js/scripts/media-hover-effects.js')}}" type="text/javascript"></script>

@endsection

