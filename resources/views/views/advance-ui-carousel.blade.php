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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Carousel</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="advance-ui-carousel.html#">Advance UI</a>
                                </li>
                                <li class="breadcrumb-item active">Carousel
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="advance-ui-carousel.html#!"><i
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
                                <p class="caption">Our Carousel is a robust and versatile component that can be an
                                    image slider, to an item
                                    carousel, to an onboarding experience. It is touch enabled making it especially
                                    smooth to use on mobile.</p>
                                <p>Note: This is also touch compatible! Try swiping with your finger to scroll
                                    through the carousel.</p>
                            </div>
                        </div>

                        <!--Prefilling Text Inputs-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="carousel">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l6">
                                                    <h4 class="card-title">Carousel</h4>
                                                </div>
                                                <div class="col s12 m6 l6">
                                                    <ul class="tabs">
                                                        <li class="tab col s4 p-0"><a class="active p-0"
                                                                                      href="advance-ui-carousel.html#view-carousel">View</a>
                                                        </li>
                                                        <li class="tab col s4 p-0"><a class="p-0"
                                                                                      href="advance-ui-carousel.html#html-carousel">Html</a>
                                                        </li>
                                                        <li class="tab col s4 p-0"><a class="p-0"
                                                                                      href="advance-ui-carousel.html#js-carousel">JS</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-carousel">
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="carousel">
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#one!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/1.png')}}">
                                                        </a>
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#two!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/2.png')}}">
                                                        </a>
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#three!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/3.png')}}">
                                                        </a>
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#four!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/4.png')}}">
                                                        </a>
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#five!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/5.png')}}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-carousel">
            <pre><code class="language-markup">
&lt;div class="carousel">
  &lt;a class="carousel-item" href="#one!">&lt;img src="https://lorempixel.com/250/250/nature/1">&lt;/a>
  &lt;a class="carousel-item" href="#two!">&lt;img src="https://lorempixel.com/250/250/nature/2">&lt;/a>
  &lt;a class="carousel-item" href="#three!">&lt;img src="https://lorempixel.com/250/250/nature/3">&lt;/a>
  &lt;a class="carousel-item" href="#four!">&lt;img src="https://lorempixel.com/250/250/nature/4">&lt;/a>
  &lt;a class="carousel-item" href="#five!">&lt;img src="https://lorempixel.com/250/250/nature/5">&lt;/a>
&lt;/div>
          </code></pre>
                                        </div>
                                        <div id="js-carousel">
            <pre><code class="language-javascript">
  $(document).ready(function(){
    $('.carousel').carousel();
  });
    </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  Options Section  -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default" id="jquery-plugin">
                                    <div class="card-content">
                                        <h4 class="card-title">jQuery Plugin Options</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <table class="highlight">
                                                    <thead>
                                                        <tr>
                                                            <th>Option Name</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>duration</td>
                                                            <td>Transition duration in milliseconds. (Default:
                                                                200)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>dist</td>
                                                            <td>Perspective zoom. If 0, all items are the same size.
                                                                (Default: -100)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>shift</td>
                                                            <td>Set the spacing of the center item. (Default: 0)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>padding</td>
                                                            <td>Set the padding between non center items. (Default:
                                                                0)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>fullWidth</td>
                                                            <td>Make the carousel a full width slider like the
                                                                second example. (Default: false)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>indicators</td>
                                                            <td>Set to true to show indicators. (Default: false)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>noWrap</td>
                                                            <td>Don't wrap around and cycle through items. (Default:
                                                                false)
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default" id="methods">
                                    <div class="card-content">
                                        <h4 class="card-title">jQuery Plugin Methods</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>We have methods to pause, start, move to next and move to
                                                    previous slide.</p>
                                                <pre><code class="language-javascript col s12">
// Next slide
$('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.
// Set to nth slide
$('.carousel').carousel('set', 4);
// Destroy carousel
$('.carousel').carousel('destroy');
          </code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Full Width Slider -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="carousel-full-width">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l6">
                                                    <h4 class="card-title">Full Width Slider</h4>
                                                </div>
                                                <div class="col s12 m6 l6">
                                                    <ul class="tabs">
                                                        <li class="tab col s4 p-0"><a class="active p-0"
                                                                                      href="advance-ui-carousel.html#view-carousel-full-width">View</a>
                                                        </li>
                                                        <li class="tab col s4 p-0"><a class="p-0"
                                                                                      href="advance-ui-carousel.html#html-carousel-full-width">Html</a>
                                                        </li>
                                                        <li class="tab col s4 p-0"><a class="p-0"
                                                                                      href="advance-ui-carousel.html#js-carousel-full-width">JS</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-carousel-full-width">
                                            <div class="row">
                                                <div class="col s12 mb-2">
                                                    <p>Our carousel has a full width option that makes it into a
                                                        simple and elegant image carousel. You can
                                                        also have indicators that show up on the bottom of the
                                                        slider.</p>
                                                    <p>Note: This is also touch compatible! Try swiping with your
                                                        finger to scroll through the carousel.</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="carousel carousel-slider">
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#one!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/28.png')}}">
                                                        </a>
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#two!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/29.png')}}">
                                                        </a>
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#three!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/30.png')}}">
                                                        </a>
                                                        <a class="carousel-item"
                                                           href="advance-ui-carousel.html#four!">
                                                            <img alt=""
                                                                 src="{{asset('app-assets/images/gallery/31.png')}}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-carousel-full-width">
            <pre><code class="language-markup">
&lt;div class="carousel carousel-slider">
  &lt;a class="carousel-item" href="#one!">&lt;img src="https://lorempixel.com/800/400/food/1">&lt;/a>
  &lt;a class="carousel-item" href="#two!">&lt;img src="https://lorempixel.com/800/400/food/2">&lt;/a>
  &lt;a class="carousel-item" href="#three!">&lt;img src="https://lorempixel.com/800/400/food/3">&lt;/a>
  &lt;a class="carousel-item" href="#four!">&lt;img src="https://lorempixel.com/800/400/food/4">&lt;/a>
&lt;/div>
  </code></pre>
                                        </div>
                                        <div id="js-carousel-full-width">
            <pre><code class="language-javascript">
      $('.carousel.carousel-slider').carousel({fullWidth: true});
    </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Special Options -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="carousel-special-options">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l6">
                                                    <h4 class="card-title">Special Options</h4>
                                                </div>
                                                <div class="col s12 m6 l6">
                                                    <ul class="tabs">
                                                        <li class="tab col s4 p-0"><a class="active p-0"
                                                                                      href="advance-ui-carousel.html#view-carousel-carousel-special-options">View</a>
                                                        </li>
                                                        <li class="tab col s4 p-0"><a class="p-0"
                                                                                      href="advance-ui-carousel.html#html-carousel-special-options">Html</a>
                                                        </li>
                                                        <li class="tab col s4 p-0"><a class="p-0"
                                                                                      href="advance-ui-carousel.html#js-carousel-special-options">JS</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-carousel-carousel-special-options">
                                            <div class="row">
                                                <div class="col s12 mb-2">
                                                    <p>The carousel doesn't only support images but also allows you
                                                        to make content carousels. You can add
                                                        fixed items to your carousel by adding a div with the class
                                                        <a>carousel-fixed-item</a> and adding
                                                        your fixed content in there.</p>
                                                    <p>Note: This is also touch compatible! Try swiping with your
                                                        finger to scroll through the carousel.</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="carousel carousel-slider center carousel-indicators"
                                                         data-indicators="true">
                                                        <div class="carousel-fixed-item center">
                                                            <a class="btn waves-effect white grey-text darken-text-2">button</a>
                                                        </div>
                                                        <a class="carousel-item red white-text"
                                                           href="advance-ui-carousel.html#one!">
                                                            <h2>First Panel</h2>
                                                            <p class="white-text">This is your first panel</p>
                                                        </a>
                                                        <a class="carousel-item amber white-text"
                                                           href="advance-ui-carousel.html#two!">
                                                            <h2>Second Panel</h2>
                                                            <p class="white-text">This is your second panel</p>
                                                        </a>
                                                        <a class="carousel-item green white-text"
                                                           href="advance-ui-carousel.html#three!">
                                                            <h2>Third Panel</h2>
                                                            <p class="white-text">This is your third panel</p>
                                                        </a>
                                                        <a class="carousel-item blue white-text"
                                                           href="advance-ui-carousel.html#four!">
                                                            <h2>Fourth Panel</h2>
                                                            <p class="white-text">This is your fourth panel</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-carousel-special-options">
            <pre><code class="language-markup">
&lt;div class="carousel carousel-slider center" data-indicators="true">
  &lt;div class="carousel-fixed-item center">
    &lt;a class="btn waves-effect white grey-text darken-text-2">button&lt;/a>
  &lt;/div>
  &lt;div class="carousel-item red white-text" href="#one!">
    &lt;h2>First Panel&lt;/h2>
    &lt;p class="white-text">This is your first panel&lt;/p>
  &lt;/div>
  &lt;div class="carousel-item amber white-text" href="#two!">
    &lt;h2>Second Panel&lt;/h2>
    &lt;p class="white-text">This is your second panel&lt;/p>
  &lt;/div>
  &lt;div class="carousel-item green white-text" href="#three!">
    &lt;h2>Third Panel&lt;/h2>
    &lt;p class="white-text">This is your third panel&lt;/p>
  &lt;/div>
  &lt;div class="carousel-item blue white-text" href="#four!">
    &lt;h2>Fourth Panel&lt;/h2>
    &lt;p class="white-text">This is your fourth panel&lt;/p>
  &lt;/div>
&lt;/div>
  </code></pre>
                                        </div>
                                        <div id="js-carousel-special-options">
            <pre><code class="language-javascript">
              $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
              });
  </code></pre>
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
                                                            class="sidenav-close"
                                                            href="advance-ui-carousel.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="advance-ui-carousel.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="advance-ui-carousel.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="advance-ui-carousel.html#activity">
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
                                <a href="advance-ui-carousel.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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
    <script src="{{asset('app-assets/js/scripts/advance-ui-carousel.js')}}" type="text/javascript"></script>

@endsection

