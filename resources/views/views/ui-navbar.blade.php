@extends('admin.layouts.admin')
@section('vendor-css')
@endsection

@section('header')

    <link href="{{asset('app-assets/css/pages/component-navbar.css')}}" rel="stylesheet" type="text/css">

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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Navbar</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="ui-navbar.html#">Basic UI</a>
                                </li>
                                <li class="breadcrumb-item active">Navbar
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="ui-navbar.html#!"><i
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
                    <div class="section section-navbar">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">The navbar is fully contained by an HTML5 Nav tag. Inside a
                                    recommended container div,
                                    there are 2 main parts of the navbar. A logo or brand link, and the navigations
                                    links. You can align these
                                    links to the left or right.</p>
                            </div>
                        </div>

                        <!-- Right Aligned Links -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="right-aligned">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Right Aligned Links</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-right-aligned">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-right-aligned">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-right-aligned">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p class="mb-2">To right align your navbar links, just add a
                                                        <code class="language-markup">right</code>
                                                        class to your <code class="language-markup">&lt;ul></code>
                                                        that contains them.</p>
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <div class="col s12">
                                                                <a class="brand-logo"
                                                                   href="ui-navbar.html#!">Logo</a>
                                                                <ul class="right hide-on-med-and-down">
                                                                    <li><a href="ui-navbar.html#">Sass</a></li>
                                                                    <li><a href="ui-navbar.html#">Components</a>
                                                                    </li>
                                                                    <li><a href="ui-navbar.html#">JavaScript</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-right-aligned">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="#" class="brand-logo">Logo&lt;/a>
      &lt;ul id="nav-mobile" class="right hide-on-med-and-down">
        &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">JavaScript&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left Aligned Links -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="left-aligned">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Left Aligned Links</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-left-aligned">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-left-aligned">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-left-aligned">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p class="mb-2">To left align your navbar links, just add a
                                                        <code class="language-markup">left</code>
                                                        class to your <code class="language-markup">&lt;ul></code>
                                                        that contains them.</p>
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <div class="col s12">
                                                                <a class="brand-logo right" href="ui-navbar.html#!">Logo</a>
                                                                <ul class="left hide-on-med-and-down">
                                                                    <li><a href="ui-navbar.html#">Sass</a></li>
                                                                    <li><a href="ui-navbar.html#">Components</a>
                                                                    </li>
                                                                    <li><a href="ui-navbar.html#">JavaScript</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-left-aligned">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="#" class="brand-logo right">Logo&lt;/a>
      &lt;ul id="nav-mobile" class="left hide-on-med-and-down">
        &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">JavaScript&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Centering the logo -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="gradient">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Centering the logo</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-centering-logo">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-centering-logo">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-centering-logo">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p class="mb-2">The logo will center itself on medium and down
                                                        screens, but if you want the logo to
                                                        always be centered, add the <code class="language-markup">center</code>
                                                        class to your <code class="language-markup">&lt;a
                                                            class="brand-logo"></code>. You will have to make sure
                                                        yourself that links do not overlap if you
                                                        use this.</p>

                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo center"
                                                               href="ui-navbar.html#">Logo</a>
                                                            <ul class="left hide-on-med-and-down" id="nav-mobile">
                                                                <li><a href="ui-navbar.html#">Sass</a></li>
                                                                <li><a href="ui-navbar.html#">Components</a></li>
                                                                <li><a href="ui-navbar.html#">JavaScript</a></li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-centering-logo">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="#" class="brand-logo center">Logo&lt;/a>
      &lt;ul id="nav-mobile" class="left hide-on-med-and-down">
        &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">JavaScript&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navbar Gradient color with shadow -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="gradient-shadow">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Navbar Gradient color with shadow</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-gradient-shadow">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-gradient-shadow">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-gradient-shadow">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p class="mb-2">Apart from the material solid colors you can
                                                        also use the gradient color feature with
                                                        Navbar. Just add <code class="language-markup">gradient-45deg-purple-deep-orange
                                                            gradient-shadow</code>
                                                        class to your <code class="language-markup">&lt;nav></code>
                                                        tag.</p>
                                                    <nav class="gradient-45deg-purple-deep-orange gradient-shadow">
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo center" href="ui-navbar.html#!">Logo</a>
                                                            <ul class="left hide-on-med-and-down">
                                                                <li><a href="ui-navbar.html#">Sass</a></li>
                                                                <li><a href="ui-navbar.html#">Components</a></li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-gradient-shadow">
            <pre><code class="language-markup">
  &lt;nav class="gradient-45deg-purple-deep-orange gradient-shadow">
    &lt;div class="nav-wrapper">
    &lt;a href="#" class="brand-logo center">Logo&lt;/a>
      &lt;ul id="nav-mobile" class="left hide-on-med-and-down">
        &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">JavaScript&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Items -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="active-items">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Active Items</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-active-items">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-active-items">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-active-items">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p class="mb-2">
                                                        Add active class to your li tags to denote the current page.
                                                    </p>
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo center" href="ui-navbar.html#!">Logo</a>
                                                            <ul class="left hide-on-med-and-down">
                                                                <li><a href="ui-navbar.html#">Sass</a></li>
                                                                <li><a href="ui-navbar.html#">Components</a></li>
                                                                <li class="active"><a href="ui-navbar.html#">JavaScript</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-active-items">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="#!" class="brand-logo center">Logo&lt;/a>
      &lt;ul class="left hide-on-med-and-down">
        &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
        &lt;li class="active">&lt;a href="#">JavaScript&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Extended Navbar with Tabs -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="extended-navbar">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Extended Navbar with Tabs</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-extended-navbar">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-extended-navbar">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-extended-navbar">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p class="mb-2">
                                                        To add extended components to the navbar, add the class
                                                        <code class="language-markup">nav-extended</code>
                                                        to the outer
                                                        <span class="language-markup">nav</span> tag. This will
                                                        allow your navbar height to be variable. Then
                                                        you can just include a tabs component inside the
                                                        <span class="language-markup">nav-wrapper</span>.
                                                    </p>
                                                    <nav class="nav-extended">
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo" href="ui-navbar.html#">Logo</a>
                                                            <a class="sidenav-trigger hide-on-med-and-up" data-target="mobile-demo"
                                                               href="ui-navbar.html#"><i
                                                                        class="material-icons">menu</i></a>
                                                            <ul class="right hide-on-med-and-down">
                                                                <li><a href="ui-navbar.html#">Sass</a></li>
                                                                <li><a href="ui-navbar.html#">Components</a></li>
                                                                <li><a href="ui-navbar.html#">JavaScript</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nav-content">
                                                            <ul class="tabs tabs-transparent">
                                                                <li class="tab"><a href="ui-navbar.html#test1">Test
                                                                        1</a></li>
                                                                <li class="tab"><a class="active"
                                                                                   href="ui-navbar.html#test2">Test
                                                                        2</a></li>
                                                                <li class="tab disabled"><a
                                                                            href="ui-navbar.html#test3">Disabled Tab</a>
                                                                </li>
                                                                <li class="tab"><a href="ui-navbar.html#test4">Test
                                                                        4</a></li>
                                                            </ul>
                                                        </div>
                                                    </nav>

                                                    <ul class="sidenav" id="mobile-demo">
                                                        <li><a href="ui-navbar.html#">Sass</a></li>
                                                        <li><a href="ui-navbar.html#">Components</a></li>
                                                        <li><a href="ui-navbar.html#">JavaScript</a></li>
                                                    </ul>

                                                    <div class="col s12" id="test1">Jelly beans chocolate gummies
                                                        gummies I love. Cupcake cake bear claw
                                                        tart wafer tootsie roll. Dessert biscuit gummi bears oat
                                                        cake apple pie jelly halvah cupcake.

                                                    </div>
                                                    <div class="col s12" id="test2">
                                                        Liquorice powder tart danish biscuit I love. Cotton candy
                                                        biscuit carrot cake bear claw jelly-o
                                                        tiramisu. Tootsie roll fruitcake brownie cotton candy
                                                        pudding gummi bears.
                                                    </div>
                                                    <div class="col s12" id="test3">
                                                        Cupcake ipsum dolor sit. Amet cake apple pie cupcake. Sugar
                                                        plum icing tootsie roll.
                                                    </div>
                                                    <div class="col s12" id="test4">Cupcake ipsum dolor sit. Amet
                                                        jelly-o pie. Cake cake pie lemon drops
                                                        pie candy canes.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-extended-navbar">
            <pre><code class="language-markup">
  &lt;nav class="nav-extended">
    &lt;div class="nav-wrapper">
      &lt;a href="#" class="brand-logo">Logo&lt;/a>
      &lt;a href="#" data-target="mobile-demo" class="button-collapse  hide-on-med-and-up">&lt;i class="material-icons">menu&lt;/i>&lt;/a>
      &lt;ul id="nav-mobile" class="right hide-on-med-and-down">
        &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">JavaScript&lt;/a>&lt;/li>
      &lt;/ul>
      &lt;ul class="sidenav" id="mobile-demo">
        &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">JavaScript&lt;/a>&lt;/li>
      &lt;/ul>
      &lt;/div>
      &lt;div class="nav-content">
        &lt;ul class="tabs tabs-transparent">
          &lt;li class="tab">&lt;a href="#test1">Test 1&lt;/a>&lt;/li>
          &lt;li class="tab">&lt;a class="active" href="#test2">Test 2&lt;/a>&lt;/li>
          &lt;li class="tab disabled">&lt;a href="#test3">Disabled Tab&lt;/a>&lt;/li>
          &lt;li class="tab">&lt;a href="#test4">Test 4&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/div>
    &lt;/nav>
  &lt;div id="test1" class="col s12">Test 1&lt;/div>
  &lt;div id="test2" class="col s12">Test 2&lt;/div>
  &lt;div id="test3" class="col s12">Test 3&lt;/div>
  &lt;div id="test4" class="col s12">Test 4&lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fixed Navbar -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-default scrollspy" id="navbar-fixed">
                                    <div class="card-content">
                                        <h4 class="card-title">Fixed Navbar</h4>
                                        <p class="mb-2">
                                            To make the navbar fixed, you have to add an outer wrapping div with the
                                            class <code class="language-markup">navbar-fixed</code>.
                                            This will offset your other content while making your nav fixed. You can
                                            adjust the height of this outer
                                            div to change how much offset is on your content.
                                        </p>
                                        <pre><code class="language-markup">
  &lt;div class="navbar-fixed">
  &lt;nav>
  &lt;div class="nav-wrapper">
  &lt;a href="#!" class="brand-logo">Logo&lt;/a>
  &lt;ul class="right hide-on-med-and-down">
  &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
  &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
  &lt;/ul>
  &lt;/div>
  &lt;/nav>
  &lt;/div>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navbar Dropdown Menu -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="navbar-dropdown">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l6">
                                                    <h4 class="card-title">Navbar Dropdown Menu</h4>
                                                </div>
                                                <div class="col s12 m6 l6">
                                                    <ul class="tabs">
                                                        <li class="tab col s4 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-dropdown-menu">View</a>
                                                        </li>
                                                        <li class="tab col s4 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-dropdown-menu">Html</a>
                                                        </li>
                                                        <li class="tab col s4 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#js-dropdown-menu">JS</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-dropdown-menu">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>
                                                        To add a navbar dropdown menu, add the <code
                                                                class="language-markup">ul</code> dropdown structure
                                                        into the page. Then, add an element to trigger the dropdown
                                                        menu. Make sure to supply the id of the
                                                        dropdown structure to the
                                                        <code class="language-markup">data-target</code> attribute
                                                        of the dropdown trigger.
                                                    </p>
                                                    <!-- Dropdown Structure -->
                                                    <ul class="dropdown-content" id="dropdown1">
                                                        <li><a href="ui-navbar.html#!">one</a></li>
                                                        <li><a href="ui-navbar.html#!">two</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="ui-navbar.html#!">three</a></li>
                                                    </ul>
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo ml-2"
                                                               href="ui-navbar.html#!">Logo</a>
                                                            <ul class="right hide-on-med-and-down">
                                                                <li><a href="ui-navbar.html#">Sass</a></li>
                                                                <li><a href="ui-navbar.html#">Components</a></li>
                                                                <!-- Dropdown Trigger -->
                                                                <li><a class="dropdown-trigger"
                                                                       data-target="dropdown1"
                                                                       href="ui-navbar.html#!">Dropdown<i
                                                                                class="material-icons right">arrow_drop_down</i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                    <br>
                                                    <h5>Trigger dropdown menu on click</h5>
                                                    <p>
                                                        By default, the dropdown menu is activated by hovering over
                                                        the dropdown trigger. To activate the
                                                        dropdown menu on click, pass <code
                                                                class="language-javascript">{ hover: false }</code> into
                                                        the above
                                                        <code class="language-javascript">dropdown()</code> function
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-dropdown-menu">
            <pre><code class="language-markup">
  &lt;!-- Dropdown Structure -->
  &lt;ul id="dropdown1" class="dropdown-content">
    &lt;li>&lt;a href="#!">one&lt;/a>&lt;/li>
    &lt;li>&lt;a href="#!">two&lt;/a>&lt;/li>
    &lt;li class="divider">&lt;/li>
    &lt;li>&lt;a href="#!">three&lt;/a>&lt;/li>
  &lt;/ul>
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="#!" class="brand-logo">Logo&lt;/a>
      &lt;ul class="right hide-on-med-and-down">
        &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
        &lt;!-- Dropdown Trigger -->
        &lt;li>&lt;a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown&lt;i class="material-icons right">arrow_drop_down&lt;/i>&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav>
  </code></pre>
                                        </div>
                                        <div id="js-dropdown-menu">
            <pre><code class="language-javascript">
    $(".dropdown-trigger").dropdown();
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon Links -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="icon-links">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Icon Links</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-icon-links">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-icon-links">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-icon-links">
                                            <div class="row">
                                                <div class="col s12">
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo ml-2" href="ui-navbar.html#!">
                                                                <i class="material-icons mr-1">cloud</i>Logo</a>
                                                            <ul class="right hide-on-med-and-down">
                                                                <li>
                                                                    <a href="ui-navbar.html#">
                                                                        <i class="material-icons">search</i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="ui-navbar.html#">
                                                                        <i class="material-icons">view_module</i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="ui-navbar.html#">
                                                                        <i class="material-icons">refresh</i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="ui-navbar.html#">
                                                                        <i class="material-icons">more_vert</i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                    <br>
                                                    <p>You can add icons into links. For icon only links you don't
                                                        need any additional class. Just pop the
                                                        <code class="language-markup">i</code> tag in and it will
                                                        work.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-icon-links">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="#!" class="brand-logo">&lt;i class="material-icons">cloud&lt;/i>Logo&lt;/a>
      &lt;ul class="right hide-on-med-and-down">
        &lt;li>&lt;a href="#">&lt;i class="material-icons">search&lt;/i>&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">&lt;i class="material-icons">view_module&lt;/i>&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">&lt;i class="material-icons">refresh&lt;/i>&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">&lt;i class="material-icons">more_vert&lt;/i>&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav></code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Icon left or right -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="icon-left-to-right">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Icon left or right</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-left-to-right">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-left-to-right">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-left-to-right">
                                            <div class="row">
                                                <div class="col s12">
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo ml-2"
                                                               href="ui-navbar.html#!">Logo</a>
                                                            <ul class="right hide-on-med-and-down">
                                                                <li>
                                                                    <a href="ui-navbar.html#">
                                                                        <i class="material-icons left">search</i>Link
                                                                        with Left Icon</a>
                                                                </li>
                                                                <li>
                                                                    <a href="ui-navbar.html#">
                                                                        <i class="material-icons right">view_module</i>
                                                                        Link with Right Icon</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                    <br>
                                                    <p>For adding an icon to a text link you need to add either a
                                                        <code class="language-markup">left</code>
                                                        or <code class="language-markup">right</code> class to the
                                                        icon depending on where you want the icon
                                                        to be.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-left-to-right">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="#!" class="brand-logo">Logo&lt;/a>
      &lt;ul class="right hide-on-med-and-down">
        &lt;li>&lt;a href="#">&lt;i class="material-icons left">search&lt;/i>Link with Left Icon&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#">&lt;i class="material-icons right">view_module&lt;/i>Link with Right Icon&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav></code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="nav-buttons">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Buttons</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-nav-buttons">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-nav-buttons">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-nav-buttons">
                                            <div class="row">
                                                <div class="col s12">
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo" href="ui-navbar.html#!">Logo</a>
                                                            <ul class="right hide-on-med-and-down">
                                                                <li>
                                                                    <a class="waves-effect waves-light btn">Button</a>
                                                                </li>
                                                                <li><a class="waves-effect waves-light btn">Button
                                                                        <i class="material-icons right">cloud</i></a>
                                                                </li>
                                                                <li><a class="waves-effect waves-light btn-large">Large
                                                                        Button</a></li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                    <br>
                                                    <p>You can add buttons into links. For buttons you don't need
                                                        any additional class. Just pop the <code
                                                                class="language-markup">.btn</code> class on the
                                                        <code class="language-markup">a</code> tag.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-nav-buttons">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="#!" class="brand-logo">Logo&lt;/a>
      &lt;ul class="right hide-on-med-and-down">
        &lt;li>&lt;a class="waves-effect waves-light btn">Button&lt;/a>&lt;/li>
        &lt;li>&lt;a class="waves-effect waves-light btn">Button &lt;i class="material-icons right">cloud&lt;/i>&lt;/a>&lt;/li>
        &lt;li>&lt;a class="waves-effect waves-light btn-large">Large Button&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav></code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Halfway FAB in Extended Navbar -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="halfway-fab">
                                    <div class="card-content pb-3">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Halfway FAB in Extended Navbar</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-halfway-fab">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-halfway-fab">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-halfway-fab">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p class="mb-2">Add a halfway FAB to your extended navbar.</p>
                                                    <nav class="nav-extended">
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo ml-2"
                                                               href="ui-navbar.html#!">Logo</a>
                                                            <ul class="right hide-on-med-and-down">
                                                                <li><a>A link</a></li>
                                                                <li><a>A second link</a></li>
                                                                <li><a>A third link</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nav-content">
                                                            <span class="nav-title ml-2">Title</span>
                                                            <a class="btn-floating btn-large halfway-fab waves-effect waves-light cyan">
                                                                <i class="material-icons">add</i>
                                                            </a>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-halfway-fab">
            <pre><code class="language-markup">
  &lt;nav class="nav-extended">
    &lt;div class="nav-wrapper">
      &lt;a href="#!" class="brand-logo">Logo&lt;/a>
      &lt;ul class="right hide-on-med-and-down">
        &lt;li>&lt;a>A link&lt;/a>&lt;/li>
        &lt;li>&lt;a>A second link&lt;/a>&lt;/li>
        &lt;li>&lt;a>A third link&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
    &lt;div class="nav-content">
      &lt;span class="nav-title">Title&lt;/span>
      &lt;a class="btn-floating btn-large halfway-fab waves-effect waves-light teal">
      &lt;i class="material-icons">add&lt;/i>
      &lt;/a>
    &lt;/div>
  &lt;/nav></code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Search Bar -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="search-bar">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Search Bar</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-search-bar">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-search-bar">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-search-bar">
                                            <div class="row">
                                                <div class="col s12">
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <form>
                                                                <div class="input-field">
                                                                    <input id="search-example" required
                                                                           type="search">
                                                                    <label class="label-icon" for="search-example">
                                                                        <i class="material-icons">search</i>
                                                                    </label>
                                                                    <i class="material-icons">close</i>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </nav>
                                                    <br>
                                                    <p>You can add a search form in the navbar.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-search-bar">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;form>
        &lt;div class="input-field">
          &lt;input id="search" type="search" required>
          &lt;label class="label-icon" for="search">&lt;i class="material-icons">search&lt;/i>&lt;/label>
          &lt;i class="material-icons">close&lt;/i>
        &lt;/div>
      &lt;/form>
    &lt;/div>
  &lt;/nav></code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Collapse Button -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="mobile-collapse">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Mobile Collapse Button</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-navbar.html#view-mobile-collapse">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-navbar.html#html-mobile-collapse">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-mobile-collapse">
                                            <div class="row">
                                                <div class="col s12">
                                                    <nav>
                                                        <div class="nav-wrapper">
                                                            <a class="brand-logo ml-2"
                                                               href="ui-navbar.html#!">Logo</a>
                                                            <a class="button-collapse sidenav-trigger hide-on-med-and-up" data-target="mobile-demo2"
                                                               href="ui-navbar.html#">
                                                                <i class="material-icons">menu</i>
                                                            </a>
                                                            <ul class="right hide-on-med-and-down">
                                                                <li><a href="ui-navbar.html#">Sass</a></li>
                                                                <li><a href="ui-navbar.html#">Components</a></li>
                                                                <li><a href="ui-navbar.html#">Javascript</a></li>
                                                                <li><a href="ui-navbar.html#">Mobile</a></li>
                                                                <li><a class="btn waves-effect waves-light"
                                                                       href="ui-navbar.html#">Buttons</a></li>
                                                            </ul>
                                                            <ul class="sidenav" id="mobile-demo2">
                                                                <li><a href="ui-navbar.html#">Sass</a></li>
                                                                <li><a href="ui-navbar.html#">Components</a></li>
                                                                <li><a href="ui-navbar.html#">Javascript</a></li>
                                                                <li><a href="ui-navbar.html#">Mobile</a></li>
                                                                <li><a class="btn waves-effect waves-light"
                                                                       href="ui-navbar.html#">Buttons</a></li>
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                    <br>
                                                    <p>When your nav bar is resized, you will see that the links on
                                                        the right turn into a hamburger icon
                                                        <i class="material-icons">menu</i>. Take a look at the
                                                        example below to get this functionality. Add
                                                        the entire <code
                                                                class="language-markup">button-collapse</code> line
                                                        to your <code class="language-markup">nav</code>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-mobile-collapse">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
    &lt;a href="#!" class="brand-logo">Logo&lt;/a>
    &lt;a href="#" data-target="mobile-demo2" class="button-collapse hide-on-med-and-up sidenav-trigger">&lt;i class="material-icons">menu&lt;/i>&lt;/a>
    &lt;ul class="right hide-on-med-and-down">
      &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Javascript&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Mobile&lt;/a>&lt;/li>
    &lt;/ul>
    &lt;ul class="sidenav" id="mobile-demo2">
      &lt;li>&lt;a href="#">Sass&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Components&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Javascript&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Mobile&lt;/a>&lt;/li>
    &lt;/ul>
    &lt;/div>
  &lt;/nav>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Initialization -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-default scrollspy" id="sidenav-init">
                                    <div class="card-content">
                                        <h4 class="card-title">Initialization</h4>
                                        <p>After including the sidenav-triggerline into your navbar, all you have to
                                            do now is place this code in
                                            your page's <code class="language-javascript">$( document
                                                ).ready(function(){})</code> code. This example
                                            below assumes you have not modified the classes in the above example. In
                                            the case that you have, just
                                            change the jQuery selector in the line below to match it.</p>
                                        <pre><code class="language-javascript">
$(".sidenav").sideNav();
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
                                                            class="sidenav-close" href="ui-navbar.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="ui-navbar.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="ui-navbar.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="ui-navbar.html#activity">
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
                                <a href="ui-navbar.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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

