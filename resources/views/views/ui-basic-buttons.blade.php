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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Buttons</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="ui-basic-buttons.html#">CSS</a>
                                </li>
                                <li class="breadcrumb-item active">Buttons
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="ui-basic-buttons.html#!"><i
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

                                <p>There are 3 main button types described in material design. The raised button is
                                    a
                                    standard button that signify actions and seek to give depth to a mostly flat
                                    page. The floating
                                    circular
                                    action button is meant for very important functions. Flat buttons are usually
                                    used within elements
                                    that
                                    already have depth like cards or modals.</p>
                            </div>
                        </div>

                        <!--Raised Button-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="raised-button">
                                    <div class="card-content">

                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Raised Button</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-basic-buttons.html#view-raised-button">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-basic-buttons.html#html-raised-button">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-raised-button">
                                            <div class="col s12">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p>The raised button is a standard button that signify
                                                            actions and seek to give depth to a mostly
                                                            flat page. The floating circular action button is meant
                                                            for very important functions. Flat buttons
                                                            are usually used within elements that already have depth
                                                            like cards or modals.</p>
                                                    </div>
                                                    <div class="col s12 mt-3 mb-3">
                                                        <a class="waves-effect waves-light btn mb-1">button</a>
                                                        <a class="waves-effect waves-light btn mb-1">
                                                            <i class="material-icons left">settings_backup_restore</i>
                                                            button</a>
                                                        <a class="waves-effect waves-light btn mb-1">
                                                            <i class="material-icons right">gps_fixed</i> button</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-raised-button">
            <pre><code class="language-markup">
  &lt;a class="waves-effect waves-light  btn">button&lt;/a>
  &lt;a class="waves-effect waves-light  btn">&lt;i class="material-icons left">settings_backup_restore&lt;/i> button&lt;/a>
  &lt;a class="waves-effect waves-light  btn">&lt;i class="material-icons right">gps_fixed&lt;/i> button&lt;/a>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Flat Buttton-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs position-none" id="flat-button">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Flat Button</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-basic-buttons.html#view-flat-button">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-basic-buttons.html#html-flat-button">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-flat-button">
                                            <div class="row">
                                                <div class="col s12 mt-3">
                                                    <a class="btn-flat mb-1 waves-effect">Button</a>
                                                    <a class="btn-flat mb-1 waves-effect">
                                                        <i class="material-icons left">comment</i> Button</a>
                                                    <a class="btn-flat mb-1 waves-effect">
                                                        <i class="material-icons right">email</i> Button</a>
                                                    <a class="btn-flat mb-1 dropdown-trigger waves-effect"
                                                       data-target="dropdown1" href="ui-basic-buttons.html#!">Dropdown<i
                                                                class="material-icons right">arrow_drop_down</i></a>
                                                    <ul class="dropdown-content" id="dropdown1">
                                                        <li><a class="-text" href="ui-basic-buttons.html#!">.zip</a>
                                                        </li>
                                                        <li><a class="-text" href="ui-basic-buttons.html#!">.tar</a>
                                                        </li>
                                                        <li><a class="-text" href="ui-basic-buttons.html#!">.exe</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-flat-button">
            <pre><code class="language-markup col s12">
  &lt;a class="waves-effect btn-flat">Button&lt;/a>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Floating Buttton-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card-default position-none" id="floating-button">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title">Floating Button</h4>
                                            </div>
                                            <div class="col s12 mt-3">
                                                <div class="row">
                                                    <div class="col s12 m4 center">
                                                        <a class="btn-floating mb-1 btn-large waves-effect waves-light ">
                                                            <i class="material-icons">add</i>
                                                        </a>
                                                        <a class="btn-floating mb-1 waves-effect waves-light ">
                                                            <i class="material-icons">clear</i>
                                                        </a>
                                                        <p class="mt-1">Raised</p>
                                                    </div>
                                                    <div class="col s12 m4 center">
                                                        <a class="btn-floating mb-1 btn-large btn-flat waves-effect waves-light pink accent-2 white-text">
                                                            <i class="material-icons">content_copy</i>
                                                        </a>
                                                        <a class="btn-floating mb-1 btn-flat waves-effect waves-light pink accent-2 white-text">
                                                            <i class="material-icons">content_cut</i>
                                                        </a>
                                                        <p class="mt-1">Default</p>
                                                    </div>
                                                    <div class="col s12 m4 center">
                                                        <a class="dropdown-trigger btn-floating mb-1 btn-large waves-effect waves-light "
                                                           data-target="dropdown2"
                                                           href="ui-basic-buttons.html#!">
                                                            <i class="material-icons">vertical_align_bottom</i>
                                                        </a>
                                                        <ul class="dropdown-content" id="dropdown2">
                                                            <li><a class="-text"
                                                                   href="ui-basic-buttons.html#!">.zip</a>
                                                            </li>
                                                            <li><a class="-text"
                                                                   href="ui-basic-buttons.html#!">.tar</a>
                                                            </li>
                                                            <li><a class="-text"
                                                                   href="ui-basic-buttons.html#!">.exe</a>
                                                            </li>
                                                        </ul>
                                                        <a class="dropdown-trigger btn-floating mb-1 btn-flat waves-effect waves-light  pink accent-2 white-text"
                                                           data-target="dropdown2" href="ui-basic-buttons.html#!">
                                                            <i class="material-icons">cloud_download</i>
                                                        </a>
                                                        <p class="mt-1">Dropdown</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Submit Button-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="submit-button">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Submit Button</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-basic-buttons.html#view-submit-button">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-basic-buttons.html#html-submit-button">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-submit-button">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>When you use a button to submit a form, instead of using a
                                                        input tag, use a button tag with a type
                                                        submit</p>
                                                </div>
                                                <div class="col s12 mt-2 mb-2">
                                                    <button class="btn mb-1 waves-effect waves-light " name="action"
                                                            type="submit">Submit
                                                    </button>
                                                    <button class="btn mb-1 waves-effect waves-light " name="action"
                                                            type="submit">Reply
                                                        <i class="material-icons left">reply</i>
                                                    </button>
                                                    <button class="btn mb-1 waves-effect waves-light " name="action"
                                                            type="submit">Send
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-submit-button">
            <pre><code class="language-markup">
  &lt;button class="btn waves-effect waves-light " type="submit" name="action">Submit&lt;/button>
  &lt;button class="btn waves-effect waves-light " type="submit" name="action">Reply
    &lt;i class="material-icons left">reply&lt;/i>
  &lt;/button>
  &lt;button class="btn waves-effect waves-light " type="submit" name="action">Send
    &lt;i class="material-icons right">send&lt;/i>
  &lt;/button>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Larger Button Size-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="larger-button">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Larger Button</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-basic-buttons.html#view-larger-button">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-basic-buttons.html#html-larger-button">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-larger-button">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>This button has a larger height for buttons that need more
                                                        attention.</p>
                                                </div>
                                                <div class="col s12 mt-2 mb-2">
                                                    <a class="waves-effect waves-light btn-large mb-1">Button</a>
                                                    <a class="waves-effect waves-light btn-large mb-1">
                                                        <i class="material-icons left">desktop_mac</i> button</a>
                                                    <a class="waves-effect waves-light btn-large mb-1">
                                                        <i class="material-icons right">cast</i> button</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-larger-button">
            <pre><code class="language-markup col s12">
  &lt;a class="waves-effect waves-light btn-large">Button&lt;/a>
  &lt;a class="waves-effect waves-light btn-large">&lt;i class="material-icons left">cloud&lt;/i>button&lt;/a>
  &lt;a class="waves-effect waves-light btn-large">&lt;i class="material-icons right">cloud&lt;/i>button&lt;/a>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Larger Button Size-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="small-button">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Small Button</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-basic-buttons.html#view-small-button">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-basic-buttons.html#html-small-button">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-small-button">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>When mouse and keyboard are the primary input methods, this
                                                        smaller button is useful for denser UI
                                                        layouts.</p>
                                                </div>
                                                <div class="col s12 mt-2 mb-2">
                                                    <a class="waves-effect waves-light btn-small mb-1">Button</a>
                                                    <a class="waves-effect waves-light btn-small mb-1"><i
                                                                class="material-icons left">cloud</i>button</a>
                                                    <a class="waves-effect waves-light btn-small mb-1"><i
                                                                class="material-icons right">cloud</i>button</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-small-button">
            <pre><code class="language-markup col s12">
  &lt;a class="waves-effect waves-light btn-small">Button&lt;/a>
  &lt;a class="waves-effect waves-light btn-small">&lt;i class="material-icons left">cloud&lt;/i>button&lt;/a>
  &lt;a class="waves-effect waves-light btn-small">&lt;i class="material-icons right">cloud&lt;/i>button&lt;/a>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Disabled Button Size-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="disabled-button">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Disabled Button</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-basic-buttons.html#view-disabled-button">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-basic-buttons.html#html-disabled-button">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-disabled-button">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>This style can be applied to all button types.</p>
                                                </div>
                                                <div class="col s12 mt-2 mb-2">
                                                    <a class="btn-large disabled mb-1">Button</a>
                                                    <a class="btn disabled mb-1">Button</a>
                                                    <a class="btn-flat disabled mb-1">Button</a>
                                                    <a class="btn-floating disabled mb-1"><i class="material-icons">add</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-disabled-button">
            <pre><code class="language-markup col s12">
  &lt;a class="btn-large disabled">Button&lt;/a>
  &lt;a class="btn disabled">Button&lt;/a>
  &lt;a class="btn-flat disabled">Button&lt;/a>
  &lt;a class="btn-floating disabled">&lt;i class="material-icons">add&lt;/i>&lt;/a>
  </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Button colors-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card card-default" id="button-colors">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title">Button Colors</h4>
                                            </div>
                                            <div class="col s12">
                                                <h6>Material Colors</h6>
                                                <div class="row mt-4">
                                                    <div class="col s12 m3 l3 center mb-3">
                                                        <p>
                                                            <a class="mb-6 btn waves-effect waves-light purple lightrn-1">button</a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn waves-effect waves-light cyan">button</a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn waves-effect waves-light red accent-2">button</a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn waves-effect waves-light amber darken-4">button</a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn waves-effect waves-light green darken-1">button</a>
                                                        </p>
                                                    </div>
                                                    <div class="col s12 m3 l3 center mb-3">
                                                        <p>
                                                            <a class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn-floating waves-effect waves-light cyan">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn-floating waves-effect waves-light red accent-2">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn-floating waves-effect waves-light amber darken-4">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn-floating waves-effect waves-light green darken-1">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="col s12 m3 l3 center mb-3">
                                                        <p>
                                                            <a class="mb-6 btn btn-large waves-effect waves-light purple lightrn-1">button</a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn btn-large waves-effect waves-light cyan">button</a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn btn-large waves-effect waves-light red accent-2">button</a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn btn-large waves-effect waves-light amber darken-4">button</a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn btn-large waves-effect waves-light green darken-1">button</a>
                                                        </p>
                                                    </div>
                                                    <div class="col s12 m3 l3 center">
                                                        <p>
                                                            <a class="mb-6 btn-floating btn-large waves-effect waves-light purple lightrn-1">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn-floating btn-large waves-effect waves-light cyan">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn-floating btn-large waves-effect waves-light red accent-2">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn-floating btn-large waves-effect waves-light amber darken-4">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <a class="mb-6 btn-floating btn-large waves-effect waves-light green darken-1">
                                                                <i class="material-icons">clear</i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="col s12">
                                                        <div class="card card-alert green white-text">
                                                            <div class="card-content">
                                                                <p>
                                                                    <span class="font-weight-600">Note:</span>
                                                                    Please refer <a href="css-color.html"
                                                                                    target="_blank">css-color.html</a>
                                                                    file for all colors classes & more details.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                            href="ui-basic-buttons.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="ui-basic-buttons.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="ui-basic-buttons.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="ui-basic-buttons.html#activity">
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
                                <a href="ui-basic-buttons.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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

