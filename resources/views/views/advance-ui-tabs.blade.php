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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Tabs</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="advance-ui-tabs.html#">Advance UI</a>
                                </li>
                                <li class="breadcrumb-item active">Tabs
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="advance-ui-tabs.html#!"><i
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
                                <p class="caption mb-0">The tabs structure consists of an unordered list of tabs
                                    that have hashes corresponding
                                    to tab ids. Then when you click on each tab, only the container with the
                                    corresponding tab id will become
                                    visible.</p>
                            </div>
                        </div>

                        <!--Basic Tabs-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="basic-tabs">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title"> Basic Tabs </h4>
                                                    <p>When you click on each tab, only the container with the
                                                        corresponding tab id will become visible.</p>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col m4 s12 p-0"><a class="active p-0"
                                                                                          href="advance-ui-tabs.html#main-view">View</a>
                                                        </li>
                                                        <li class="tab col m4 s12 p-0"><a class="p-0"
                                                                                          href="advance-ui-tabs.html#html-view">Html</a>
                                                        </li>
                                                        <li class="tab col m4 s12 p-0"><a class="p-0"
                                                                                          href="advance-ui-tabs.html#js-view">JS</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="row" id="main-view">
                                                <div class="col s12">
                                                    <ul class="tabs tab-demo z-depth-1">
                                                        <li class="tab col m3"><a class="active"
                                                                                  href="advance-ui-tabs.html#test1">Test
                                                                1</a>
                                                        </li>
                                                        <li class="tab col m3"><a href="advance-ui-tabs.html#test2">Test
                                                                2</a>
                                                        </li>
                                                        <li class="tab col m3"><a href="advance-ui-tabs.html#test3">Test
                                                                3</a>
                                                        </li>
                                                        <li class="tab col m3"><a href="advance-ui-tabs.html#test4">Test
                                                                4</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col s12">
                                                    <div class="col s12" id="test1">
                                                        <p class="mt-2 mb-2">Oat cake oat cake marzipan macaroon
                                                            fruitcake. Ice cream gummi bears ice cream
                                                            ice cream danish
                                                            jelly beans caramels tootsie roll. Pie macaroon
                                                            croissant tart cake jelly beans fruitcake.</p>
                                                    </div>
                                                    <div class="col s12" id="test2">
                                                        <p class="mt-2 mb-2">
                                                            Pudding chocolate bear claw dragée biscuit. Jelly powder
                                                            cake. Liquorice biscuit donut jelly-o
                                                            chocolate. Liquorice cake gummies tart cupcake.
                                                        </p>
                                                    </div>
                                                    <div class="col s12" id="test3">
                                                        <p class="mt-2 mb-2">Cupcake ipsum dolor sit amet. Powder
                                                            donut cake. Pudding toffee jujubes marzipan
                                                            pudding.</p>
                                                    </div>
                                                    <div class="col s12" id="test4">
                                                        <p class="mt-2 mb-2">
                                                            Brownie marshmallow sweet macaroon. Danish carrot cake
                                                            chocolate bar dessert croissant toffee pie
                                                            caramels. Bonbon tart croissant chupa chups dessert.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="html-view">
            <pre><code class="language-markup">
    &lt;div class="row">
      &lt;div class="col s12">
        &lt;ul class="tabs">
          &lt;li class="tab col m3">&lt;a href="#test1">Test 1&lt;/a>&lt;/li>
          &lt;li class="tab col m3">&lt;a class="active" href="#test2">Test 2&lt;/a>&lt;/li>
          &lt;li class="tab col sm disabled">&lt;a href="#test3">Disabled Tab&lt;/a>&lt;/li>
          &lt;li class="tab col m3">&lt;a href="#test4">Test 4&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/div>
      &lt;div id="test1" class="col s12">Test 1&lt;/div>
      &lt;div id="test2" class="col s12">Test 2&lt;/div>
      &lt;div id="test3" class="col s12">Test 3&lt;/div>
      &lt;div id="test4" class="col s12">Test 4&lt;/div>
    &lt;/div>
    </code></pre>
                                        </div>

                                        <div id="js-view">
            <pre><code class="language-javascript">
    $(document).ready(function(){
      $('tabs').tabs();
    });
    </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--Fixed Width Tabs-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="Fixed-width-tabs">
                                    <div class="card-content">
                                        <h4 class="card-title">Fixed Width Tabs</h4>
                                        <div class="col s12">
                                            <p>Add the <a>.tabs-fixed-width</a> class</p>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                                                    <li class="tab"><a href="advance-ui-tabs.html#test40">Test 1</a>
                                                    </li>
                                                    <li class="tab"><a class="active"
                                                                       href="advance-ui-tabs.html#test5">Test 2</a>
                                                    </li>
                                                    <li class="tab disabled"><a href="advance-ui-tabs.html#test">Disabled
                                                            Tab</a></li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test6">Test 4</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test7">Test 5</a>
                                                    </li>
                                                    <li class="indicator" style="right: 434px; left: 128px;"></li>
                                                </ul>
                                            </div>
                                            <div class="col s12">
                                                <div class="col s12" id="test40">
                                                    <p class="mt-2 mb-2">
                                                        Fruitcake lemon drops tootsie roll liquorice sugar plum
                                                        wafer tiramisu. Gummies lollipop chocolate
                                                        macaroon donut cake cookie oat cake. Jelly-o lollipop
                                                        topping dragée.
                                                    </p>
                                                </div>
                                                <div class="col s12" id="test5">
                                                    <p class="mt-2 mb-2">
                                                        Sugar plum sugar plum carrot cake. Cupcake topping
                                                        marshmallow sweet roll bear claw sugar plum jelly
                                                        beans. Jelly-o chocolate muffin.
                                                    </p>
                                                </div>
                                                <div class="col s12" id="test6">
                                                    <p class="mt-2 mb-2">Cupcake ipsum dolor. Sit amet cookie
                                                        gummies lollipop topping soufflé. Tootsie
                                                        roll brownie gummi
                                                        bears jelly beans danish caramels jelly beans.</p>
                                                </div>
                                                <div class="col s12" id="test7">
                                                    <p class="mt-2 mb-2">
                                                        Cupcake ipsum dolor sit amet. Wafer jelly beans candy canes.
                                                        Bonbon dragée sweet roll gingerbread
                                                        muffin caramels sweet. Croissant marshmallow tootsie roll
                                                        lollipop chocolate.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Scrollable Tabs-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="Scrollable-tabs">
                                    <div class="card-content">
                                        <h4 class="card-title">Scrollable Tabs</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>Tabs automatically become scrollable</p>
                                            </div>
                                            <div class="col s12">
                                                <ul class="tabs tab-demo z-depth-1">
                                                    <li class="tab"><a href="advance-ui-tabs.html#test8">Test 1</a>
                                                    </li>
                                                    <li class="tab"><a class="active"
                                                                       href="advance-ui-tabs.html#test9">Test 2</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test10">Test 4</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test11">Test 1</a>
                                                    </li>
                                                    <li class="tab"><a class="active"
                                                                       href="advance-ui-tabs.html#test12">Test 2</a>
                                                    </li>
                                                    <li class="tab disabled"><a href="advance-ui-tabs.html#test13">Disabled
                                                            Tab</a></li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test14">Test 4</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test15">Test 1</a>
                                                    </li>
                                                    <li class="tab"><a class="active"
                                                                       href="advance-ui-tabs.html#test16">Test 2</a>
                                                    </li>
                                                    <li class="tab col sm disabled"><a
                                                                href="advance-ui-tabs.html#test17">Disabled Tab</a></li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test18">Test 1</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test14">Test 2</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test14">Test 3</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test14">Test 4</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test14">Test 5</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test14">Test 6</a>
                                                    </li>
                                                    <li class="tab"><a href="advance-ui-tabs.html#test14">Test 7</a>
                                                    </li>
                                                    <li class="indicator" style="right: 503px; left: 96px;"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- jQuery Plugin Methods -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="methods">
                                    <div class="card-content">
                                        <h4 class="card-title">jQuery Plugin Methods</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>You can programmatically trigger a tab change with our <code
                                                            class="language-javascript">select</code>
                                                    method. You have to input the id of the tab you want to switch
                                                    to. In the case of our demo it would be
                                                    either test1, test2, test3, or test4.</p>
                                            </div>
                                            <div class="col s12">
              <pre><code class="language-javascript">
instance.select('tab_id');
              </code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- jQuery Plugin Options -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="jquery-plugin">
                                    <div class="card-content">
                                        <h4 class="card-title">jQuery Plugin Options</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>You can programmatically trigger a tab change with our <code
                                                            class="language-javascript">select</code>
                                                    method. You have to input the id of the tab you want to switch
                                                    to. In the case of our demo it would be
                                                    either test1, test2, test3, or test4.</p>
                                            </div>
                                            <table class="highlight">
                                                <thead>
                                                    <tr>
                                                        <th>Option Name</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>onShow</td>
                                                        <td>Execute a callback function when the tab is changed.
                                                            <br/> The callback provides a parameter which refers to
                                                            the current tab being shown.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>swipeable</td>
                                                        <td>Set to true to enable swipeable tabs. This also uses the
                                                            responsiveThreshold option. Default:
                                                            false
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>responsiveThreshold</td>
                                                        <td>The maximum width of the screen, in pixels, where the
                                                            swipeable functionality initializes.
                                                            Default: Infinity
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- External Link -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="external-page">
                                    <div class="card-content">
                                        <h4 class="header">Linking to an External Page</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>By default, Materialize tabs will ignore their default anchor
                                                    behaviour. To force a tab to behave as a
                                                    regular hyperlink, just specify the <code
                                                            class="language-markup">target</code> property of that
                                                    link!
                                                    A list of <code class="language-markup">target</code> values may
                                                    be
                                                    <a href="{{asset('../www.w3schools.com/tags/att_a_target.htm')}}">found
                                                        here</a>.</p>
                                            </div>
                                            <div class="col s12">
              <pre><code class="language-markup col s12">
    &lt;li class="tab col s2">
      &lt;a target="_blank" href="https://github.com/Dogfalo/materialize">External link in new window&lt;/a>
    &lt;/li>
    &lt;li class="tab col s2">
      &lt;a target="_self" href="https://github.com/Dogfalo/materialize">External link in same window&lt;/a>
    &lt;/li>
  </code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Preselecting a tab-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="preselecting">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title"> Preselecting a tab </h4>
                                                    <p>When you click on each tab, only the container with the
                                                        corresponding tab id will become visible.</p>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col m6 s12 p-0"><a class="active p-0"
                                                                                          href="advance-ui-tabs.html#main-view-tab">View</a>
                                                        </li>
                                                        <li class="tab col m6 s12 p-0"><a class="p-0"
                                                                                          href="advance-ui-tabs.html#html-view-tab">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>By default, the first tab is selected. But if this is not what
                                                    you want, you can preselect a tab by
                                                    either passing in the hash in the url ex:<code
                                                            class=" language-markup">#test2</code>. Or you can add
                                                    the class <code class=" language-markup">active</code> to the
                                                    <code class=" language-markup">a</code>
                                                    tag.</p>
                                            </div>
                                            <div class="col s12">
                                                <div class="row" id="main-view-tab">
                                                    <div class="col s12">
                                                        <ul class="tabs tab-demo-active z-depth-1 cyan">
                                                            <li class="tab col m4"><a
                                                                        class="white-text waves-effect waves-light"
                                                                        href="advance-ui-tabs.html#sapien">Sapien</a>
                                                            </li>
                                                            <li class="tab col m4"><a
                                                                        class="white-text waves-effect waves-light active"
                                                                        href="advance-ui-tabs.html#activeone">Active
                                                                    One</a>
                                                            </li>
                                                            <li class="tab col m4"><a
                                                                        class="white-text waves-effect waves-light"
                                                                        href="advance-ui-tabs.html#vestibulum">Vestibulum</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col s12">
                                                        <div class="col s12  cyan lighten-4" id="sapien">
                                                            <p class="mt-2 mb-2">Cupcake ipsum dolor sit. Amet gummi
                                                                bears chupa chups. Tart cotton candy
                                                                fruitcake cupcake
                                                                croissant sweet biscuit candy candy.</p>
                                                        </div>
                                                        <div class="col s12  cyan lighten-4" id="activeone">
                                                            <p class="mt-2 mb-2">
                                                                Icing tart toffee brownie carrot cake. Brownie jelly
                                                                soufflé. Ice cream bear claw macaroon
                                                                pastry. Bonbon jelly cookie gummies sweet roll
                                                                muffin pie.


                                                            </p>
                                                        </div>
                                                        <div class="col s12  cyan lighten-4" id="vestibulum">
                                                            <p class="mt-2 mb-2">Cupcake ipsum dolor sit amet candy
                                                                canes cake. Marshmallow brownie gummi bears
                                                                jelly beans sugar
                                                                plum macaroon donut. Liquorice liquorice lollipop.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="html-view-tab">
              <pre><code class="language-markup col s12">
    &lt;li class="tab col s2">&lt;a class="active" href="#test3">Test 3&lt;/a>&lt;/li>
  </code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Swipeable Tabs-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="swipeable-tabs">
                                    <div class="card-content">
                                        <h4 class="header">Swipeable Tabs</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>By setting the <a>swipeable</a> option to <a>true</a>, you can
                                                    enable tabs where you can swipe on
                                                    touch enabled devices to switch tabs. Make sure you keep the tab
                                                    content divs in the same wrapping
                                                    container. You can also set the <a>responsiveThreshold</a>
                                                    option to a screen width in pixels where the
                                                    swipeable functionality will activate.</p>
                                                <br/>
                                                <p>Note: This is also touch compatible! Try swiping with your finger
                                                    to scroll through the carousel.</p>
                                            </div>
                                            <div class="col s12">
                                                <ul class="tabs" id="tabs-swipe-demo">
                                                    <li class="tab col m4"><a
                                                                href="advance-ui-tabs.html#test-swipe-1">Test 1</a></li>
                                                    <li class="tab col m4"><a class="active"
                                                                              href="advance-ui-tabs.html#test-swipe-2">Test
                                                            2</a></li>
                                                    <li class="tab col m4"><a
                                                                href="advance-ui-tabs.html#test-swipe-3">Test 3</a></li>
                                                </ul>
                                                <div class="col s12 carousel carousel-item blue white-text"
                                                     id="test-swipe-1">
                                                    <div class="col s12 mt-1"></div>
                                                    Test 1
                                                </div>
                                            </div>
                                            <div class="col s12 carousel carousel-item red white-text"
                                                 id="test-swipe-2">
                                                <div class="col s12 mt-1"></div>
                                                Test 2
                                            </div>
                                        </div>
                                        <div class="col s12 carousel carousel-item green white-text"
                                             id="test-swipe-3">
                                            <div class="col s12 mt-1"></div>
                                            Test 3
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
                                                            class="sidenav-close" href="advance-ui-tabs.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="advance-ui-tabs.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="advance-ui-tabs.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="advance-ui-tabs.html#activity">
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
                                <a href="advance-ui-tabs.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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

