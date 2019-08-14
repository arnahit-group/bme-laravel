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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Grid</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="css-grid.html#">CSS</a>
                                </li>
                                <li class="breadcrumb-item active">Grid
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="css-grid.html#!"><i
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
                                <p class="caption">Materialize using a standard 12 column fluid responsive grid
                                    system.The grid helps you layout
                                    your page in an ordered, easy fashion.</p>
                            </div>
                        </div>

                        <!--Container-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="Container">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Container</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-container">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-container">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-container">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>The container class is not strictly part of the grid but is
                                                        important in laying out content. It
                                                        allows you to center your page content. The <code
                                                                class=" language-markup">container</code> class is
                                                        set to ~70% of the window width. It helps you center and
                                                        contain your page content. We use the
                                                        container to contain our body content.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <h4 class="card-title">Demo</h4>
                                                    <p>Try the button below to see what the page looks like without
                                                        containers.</p>
                                                    <a class="btn waves-effect waves-light"
                                                       id="container-toggle-button">Turn off Containers</a>
                                                </div>
                                                <div class="col s12">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <div class="browser-window">
                                                                <div class="top-bar">
                                                                    <div class="circles">
                                                                        <div class="close-circle circle"></div>
                                                                        <div class="minimize-circle circle"></div>
                                                                        <div class="maximize-circle circle"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="site-layout-example-top col s12">
                                                                            <!-- <p class="flat-text-logo"></p> -->
                                                                        </div>
                                                                        <div class="site-layout-example-right col s12">
                                                                            <div class="container">
                                                                                <p class="flat-text small"></p>
                                                                                <p class="flat-text full-width"></p>
                                                                                <p class="flat-text full-width"></p>
                                                                                <p class="flat-text full-width"></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col s12">
                                                            <p>To add a container just put your content inside a
                                                                <code class="language-markup">&lt;div></code>
                                                                tag with a <code
                                                                        class="language-markup">container</code>
                                                                class. Here's an example of how your
                                                                page might be set up.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-container">
            <pre><code class="language-markup">
  &lt;body>
    &lt;div class="container">
    &lt;!-- Page Content goes here -->
    &lt;/div>
  &lt;/body>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--12 Columns-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="12-columns">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">12 Columns</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-12-columns">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-columns">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-12-columns">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>The container class is not strictly part of the grid but is
                                                        important in laying out content. It
                                                        allows you to center your page content. The <code
                                                                class=" language-markup">container</code> class is
                                                        set to ~70% of the window width. It helps you center and
                                                        contain your page content. We use the
                                                        container to contain our body content.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>Take a look at this section to quickly understand how the
                                                        grid works!</p>
                                                    <p>Our standard grid has 12 columns. No matter the size of the
                                                        browser, each of these columns will
                                                        always have an equal width.</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">1</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">2</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">3</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">4</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">5</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">6</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">7</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">8</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">9</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">10</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">11</span>
                                                    </div>
                                                    <div class="col s1 grid-example">
                                                        <span class="flow-text">12</span>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <p>To get a feel of how the grid is used in HTML. Take a look at
                                                        this code below which will produce a
                                                        similar result as the one above.</p>
                                                    <p>Note: For now, just know that the <code
                                                                class=" language-markup">s1</code> stands for small-1
                                                        which
                                                        in plain English means "1 column on small screens".</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-columns">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s1">1&lt;/div>
    &lt;div class="col s1">2&lt;/div>
    &lt;div class="col s1">3&lt;/div>
    &lt;div class="col s1">4&lt;/div>
    &lt;div class="col s1">5&lt;/div>
    &lt;div class="col s1">6&lt;/div>
    &lt;div class="col s1">7&lt;/div>
    &lt;div class="col s1">8&lt;/div>
    &lt;div class="col s1">9&lt;/div>
    &lt;div class="col s1">10&lt;/div>
    &lt;div class="col s1">11&lt;/div>
    &lt;div class="col s1">12&lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Columns live inside Rows-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="inside-rows">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Columns live inside Rows</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-inside-rows">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-inside-rows">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-inside-rows">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>The container class is not strictly part of the grid but is
                                                        important in laying out content. It
                                                        allows you to center your page content. The <code
                                                                class=" language-markup">container</code> class is
                                                        set to ~70% of the window width. It helps you center and
                                                        contain your page content. We use the
                                                        container to contain our body content.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>Remember when you are creating your layout that all columns
                                                        must be contained inside a row and that
                                                        you must add the <code class=" language-markup">col</code>
                                                        class to your inner divs to make them into
                                                        columns</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="col s12 grid-example">
                                                        <span class="flow-text">This div is 12-columns wide on all screen sizes</span>
                                                    </div>
                                                    <div class="col s6 grid-example">
                                                        <span class="flow-text">6-columns (one-half)</span>
                                                    </div>
                                                    <div class="col s6 grid-example">
                                                        <span class="flow-text">6-columns (one-half)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-inside-rows">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s12">This div is 12-columns wide on all screen sizes&lt;/div>
    &lt;div class="col s6">6-columns (one-half)&lt;/div>
    &lt;div class="col s6">6-columns (one-half)&lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Offsets-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="offsets">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Offsets</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-offsets">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-offsets">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-offsets">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>To offset, simply add <code class=" language-markup">offset-s2</code>
                                                        to the class where <code
                                                                class=" language-markup">s</code>
                                                        signifies the screen class-prefix (s = small, m = medium, l
                                                        = large) and the number after is the
                                                        number of columns you want to offset by.</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="col s12 grid-example">
                                                        <span class="flow-text">This div is 12-columns wide on all screen sizes</span>
                                                    </div>
                                                    <div class="col s6 offset-s6 grid-example">
                                                        <span class="flow-text">6-columns (offset-by-6)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-offsets">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s12">&lt;span class="flow-text">This div is 12-columns wide on all screen sizes&lt;/span>&lt;/div>
    &lt;div class="col s6 offset-s6">&lt;span class="flow-text">6-columns (offset-by-6)&lt;/span>&lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Grid push and pull -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="push-and-pull">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Push and Pull</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-pull-push">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-pull-push">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-pull-push">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>You can easily change the order of your columns with push and
                                                        pull. Simply add <code
                                                                class="language-markup">push-s2</code>
                                                        or <code class="language-markup">pull-s2</code> to the class
                                                        where <code
                                                                class="language-markup">s</code>
                                                        signifies the screen class-prefix (s = small, m = medium, l
                                                        = large) and the number after is the
                                                        number of columns you want to push or pull by.</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="col s7 push-s5 grid-example">
                                                        <span style="font-size: 14px;">This div is 7-columns wide on pushed to the right by 5-columns.</span>
                                                    </div>
                                                    <div class="col s5 pull-s7 grid-example">
                                                        <span style="font-size: 14px;">5-columns wide pulled to the left by 7-columns.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-pull-push">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s7 push-s5">&lt;span class="flow-text">This div is 7-columns wide on pushed to the right by 5-columns.&lt;/span>&lt;/div>
    &lt;div class="col s5 pull-s7">&lt;span class="flow-text">5-columns wide pulled to the left by 7-columns.&lt;/span>&lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Creating Layouts-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="creating-layouts">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Creating Layouts</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-layouts">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-layouts">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-layouts">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>Here we will show you how to create some commonly used
                                                        layouts with our grid system. Hopefully these
                                                        will get you more comfortable with laying out elements. To
                                                        keep these demos simple, the ones here
                                                        will not be responsive.</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="card-panel">
                                                        <div class="row">
                                                            <div class="col s12 m6">
                                                                <h4>Section</h4>
                                                                <p>The section class is used for simple top and
                                                                    bottom padding. Just add the <code
                                                                            class=" language-markup">section</code>
                                                                    class to your div's containing large blocks of
                                                                    content.</p>
                                                            </div>
                                                            <div class="col s12 m6">
                                                                <h4>Divider</h4>
                                                                <p>Dividers are 1 pixel lines that help break up
                                                                    your content. Just add the <code
                                                                            class=" language-markup">divider</code>
                                                                    to a div in between your content.</p>
                                                            </div>
                                                        </div>
                                                        <!--Sections and Dividers-->
                                                        <h4 class="header">Example Sections and Dividers</h4>
                                                        <div class="divider"></div>
                                                        <div class="section">
                                                            <h5>Section 1</h5>
                                                            <p>Stuff</p>
                                                        </div>
                                                        <div class="divider"></div>
                                                        <div class="section">
                                                            <h5>Section 2</h5>
                                                            <p>Stuff</p>
                                                        </div>
                                                        <div class="divider"></div>
                                                        <div class="section">
                                                            <h5>Section 3</h5>
                                                            <p>Stuff</p>
                                                        </div>
                                                        <div class="divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-layouts">
            <pre><code class="language-markup">
  &lt;div class="divider">&lt;/div>
    &lt;div class="section">
      &lt;h5>Section 1&lt;/h5>
      &lt;p>Stuff&lt;/p>
    &lt;/div>
    &lt;div class="divider">&lt;/div>
    &lt;div class="section">
      &lt;h5>Section 2&lt;/h5>
      &lt;p>Stuff&lt;/p>
    &lt;/div>
    &lt;div class="divider">&lt;/div>
    &lt;div class="section">
      &lt;h5>Section 3&lt;/h5>
      &lt;p>Stuff&lt;/p>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Example Promotion Table-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="example-promotion">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Example Promotion Table</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-tabs">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-tabs">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-tabs">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>If we want 3 divs that are equal size, we define the divs
                                                        with a width of 4-columns, 4+4+4 = 12,
                                                        which nicely adds up to 12. Inside those divs, we can put
                                                        our content. Take our front page content
                                                        for example. We've modified it slightly for the sake of this
                                                        example.</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="card-panel mb-3">
                                                        <div class="row">
                                                            <div class="col s12 m4 l4">
                                                                <div class="center promo promo-example">
                                                                    <i class="material-icons">flash_on</i>
                                                                    <p class="flow-text">Speeds up development</p>
                                                                    <p class="light center">We did most of the heavy
                                                                        lifting for you to provide a default
                                                                        stylings
                                                                        that incorporate our custom components.</p>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4 l4">
                                                                <div class="center promo promo-example">
                                                                    <i class="material-icons">group</i>
                                                                    <p class="flow-text">User Experience Focused</p>
                                                                    <p class="light center">By utilizing elements
                                                                        and principles of Material Design, we were
                                                                        able
                                                                        to create a framework that focuses on User
                                                                        Experience.</p>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4 l4">
                                                                <div class="center promo promo-example">
                                                                    <i class="material-icons">settings</i>
                                                                    <p class="flow-text">Easy to work with</p>
                                                                    <p class="light center">We have provided
                                                                        detailed as well as specific code examples
                                                                        to help new
                                                                        users get started.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-tabs">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s4">
    &lt;!-- Promo Content 1 goes here -->
    &lt;/div>
    &lt;div class="col s4">
    &lt;!-- Promo Content 2 goes here -->
    &lt;/div>
    &lt;div class="col s4">
    &lt;!-- Promo Content 3 goes here -->
    &lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Example Side Navigation Layout-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="navigation-layout">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Example Side Navigation Layout</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-navigation">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-navigation">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-navigation">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>You can see how easy it is to create layouts using the grid
                                                        system. Just remember to make sure your
                                                        column numbers add up to 12 for a even layout</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <div class="browser-window">
                                                                <div class="top-bar">
                                                                    <div class="circles">
                                                                        <div class="close-circle circle"></div>
                                                                        <div class="minimize-circle circle"></div>
                                                                        <div class="maximize-circle circle"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="site-layout-example-top col s12">
                                                                            <!-- <p class="flat-text-logo"></p> -->
                                                                        </div>
                                                                        <div class="site-layout-example-left col s3">
                                                                            <p class="flat-text-header"></p>
                                                                            <p class="flat-text"></p>
                                                                            <p class="flat-text"></p>
                                                                        </div>
                                                                        <div class="site-layout-example-right col s9">
                                                                            <p class="flat-text"></p>
                                                                            <p class="flat-text"></p>
                                                                            <p class="flat-text"></p>
                                                                            <p class="flat-text"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-navigation">
            <pre><code class="language-markup">
  &lt;!-- Navbar goes here -->
  &lt;!-- Page Layout here -->
  &lt;div class="row">
    &lt;div class="col s3">
    &lt;!-- Grey navigation panel -->
    &lt;/div>
    &lt;div class="col s9">
    &lt;!-- Teal page content  -->
    &lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Creating Responsive Layouts-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card-default" id="creating-responsive-layouts">
                                    <div class="card-content">
                                        <h4 class="card-title">Creating Responsive Layouts</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <p>Above we showed you how to layout elements using our grid system.
                                                    Now we'll show you how to design
                                                    your layouts so that they look great on all screen sizes.</p>
                                            </div>
                                            <div class="col s12">
                                                <table class="highlight responsive-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th data-field="id">Mobile Devices
                                                                <br>&lt;= 600px
                                                            </th>
                                                            <th data-field="name">Tablet Devices
                                                                <br>&gt; 600px
                                                            </th>
                                                            <th data-field="price">Desktop Devices
                                                                <br>&gt; 992px
                                                            </th>
                                                            <th data-field="price">Large Desktop Devices
                                                                <br>&gt; 1200px
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <strong>Class Prefix</strong>
                                                            </td>
                                                            <td><code class="language-markup">.s</code></td>
                                                            <td><code class="language-markup">.m</code></td>
                                                            <td><code class="language-markup">.l</code></td>
                                                            <td><code class="language-markup">.xl</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Container Width</strong>
                                                            </td>
                                                            <td>90%</td>
                                                            <td>85%</td>
                                                            <td>70%</td>
                                                            <td>70%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Number of Columns</strong>
                                                            </td>
                                                            <td>12</td>
                                                            <td>12</td>
                                                            <td>12</td>
                                                            <td>12</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Creating Responsive Layouts-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="adding-responsiveness">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Adding Responsiveness</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-adding">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-adding">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-adding">
                                            <div class="col s12">
                                                <p>In the previous examples, we only defined the size for small
                                                    screens using <code
                                                            class=" language-markup">"col
                                                        s12"</code>. This is fine if we want a fixed layout since
                                                    the rules propogate upwards. By just
                                                    saying
                                                    s12, we are essentially saying
                                                    <code class=" language-markup">"col s12 m12 l12"</code>. But by
                                                    explicitly defining the size we can
                                                    make our website more responsive.</p>
                                            </div>
                                            <div class="col s12">
                                                <div class="grid-example col s12 teal lighten-2">
                                                    <span class="flow-text">I am always full-width (col s12)</span>
                                                </div>
                                                <div class="grid-example col s12 m6 teal lighten-2">
                                                    <span class="flow-text">I am full-width on mobile (col s12 m6)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-adding">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="grid-example col s12">&lt;span class="flow-text">I am always full-width (col s12)&lt;/span>&lt;/div>
    &lt;div class="grid-example col s12 m6">&lt;span class="flow-text">I am full-width on mobile (col s12 m6)&lt;/span>&lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Responsive Side Navigation Layout-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="responsive-side">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Responsive Side Navigation Layout</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-side-navigation">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-side-navigation">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-side-navigation">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>In this example below, we take the same layout from above,
                                                        but we make it responsive by defining how
                                                        many columns the div should take up on each screen size. Try
                                                        resizing your browser and watch the
                                                        layout change below.</p>
                                                </div>
                                                <div class="col s12">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <div class="browser-window">
                                                                <div class="top-bar">
                                                                    <div class="circles">
                                                                        <div class="close-circle circle"></div>
                                                                        <div class="minimize-circle circle"></div>
                                                                        <div class="maximize-circle circle"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="site-layout-example-top col s12">
                                                                            <!-- <p class="flat-text-logo"></p> -->
                                                                        </div>
                                                                        <div class="site-layout-example-left col s12 m4 l3">
                                                                            <p class="flat-text-header"></p>
                                                                            <p class="flat-text"></p>
                                                                            <p class="flat-text"></p>
                                                                        </div>
                                                                        <div class="site-layout-example-right col s12 m8 l9">
                                                                            <p class="flat-text"></p>
                                                                            <p class="flat-text"></p>
                                                                            <p class="flat-text"></p>
                                                                            <p class="flat-text"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-side-navigation">
            <pre><code class="language-markup">
  &lt;!-- Navbar goes here -->
    &lt;!-- Page Layout here -->
    &lt;div class="row">
    &lt;div class="col s12 m4 l3"> &lt;!-- Note that "m4 l3" was added -->
    &lt;!-- Grey navigation panel
        This content will be:
    3-columns-wide on large screens,
    4-columns-wide on medium screens,
    12-columns-wide on small screens  -->
    &lt;/div>
    &lt;div class="col s12 m8 l9"> &lt;!-- Note that "m8 l9" was added -->
    &lt;!-- Teal page content
        This content will be:
    9-columns-wide on large screens,
    8-columns-wide on medium screens,
    12-columns-wide on small screens  -->
    &lt;/div>
  &lt;/div>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--More Responsive Grid Examples-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="grid-examples">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">More Responsive Grid Examples</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="css-grid.html#view-grid-examples">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="css-grid.html#html-grid-examples">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-grid-examples">
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <div class="col grid-example s12 blue lighten-1">
                                                                <span class="flow-text">s12</span>
                                                            </div>
                                                            <div class="col grid-example s12 m4 l2 teal lighten-1">
                                                                <span class="flow-text">s12 m4 l2</span>
                                                            </div>
                                                            <div class="col grid-example s12 m4 l8 teal lighten-1">
                                                                <span class="flow-text">s12 m4 l8</span>
                                                            </div>
                                                            <div class="col grid-example s12 m4 l2 teal lighten-1">
                                                                <span class="flow-text">s12 m4 l2</span>
                                                            </div>
                                                            <div class="col grid-example s12 m6 l3 purple lighten-3">
                                                                <span class="flow-text">s12 m6 l3</span>
                                                            </div>
                                                            <div class="col grid-example s12 m6 l3 purple lighten-3">
                                                                <span class="flow-text">s12 m6 l3</span>
                                                            </div>
                                                            <div class="col grid-example s12 m6 l3 purple lighten-3">
                                                                <span class="flow-text">s12 m6 l3</span>
                                                            </div>
                                                            <div class="col grid-example s12 m6 l3 purple lighten-3">
                                                                <span class="flow-text">s12 m6 l3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-grid-examples">
            <pre><code class="language-markup col s12">
  &lt;div class="row">
    &lt;div class="col s12">&lt;p>s12&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l2">&lt;p>s12 m4&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l8">&lt;p>s12 m4&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l2">&lt;p>s12 m4&lt;/p>&lt;/div>
    &lt;/div>
    &lt;div class="row">
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
  &lt;/div>
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
                                                            class="sidenav-close" href="css-grid.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="css-grid.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="css-grid.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="css-grid.html#activity">
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
                                <a href="css-grid.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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
    <script src="{{asset('app-assets/js/scripts/css-grid.js')}}" type="text/javascript"></script>

@endsection

