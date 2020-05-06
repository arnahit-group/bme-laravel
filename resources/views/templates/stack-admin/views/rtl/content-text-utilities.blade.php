@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/ui/prism.min.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
        <!-- END: Custom CSS-->

    @endif


@endsection
@section('main')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Text Utilities</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="content-text-utilities.html#">Content</a>
                                </li>
                                <li class="breadcrumb-item active">Text Utilities
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="ft-settings icon-left"></i> Settings
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a
                                        class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
                        </div>
                        <a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="ft-mail"></i></a><a class="btn btn-outline-primary"
                                                                                                                         href="timeline-center.html"><i
                                    class="ft-pie-chart"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Contextual colors -->
                <section id="contextual-colors" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contextual colors</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like
                                    our default link styles.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                        </td>
                                        <td><code>.text-muted</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-muted"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        </td>
                                        <td><code>.text-primary</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-primary"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </td>
                                        <td><code>.text-success</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-success"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                        </td>
                                        <td><code>.text-info</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-info"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                        </td>
                                        <td><code>.text-warning</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-warning"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        </td>
                                        <td><code>.text-danger</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-danger"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p>Stack Admin also provide custom <a
                                            href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/color-red.html"
                                            target="_blank">color palette</a> for the text, below table show you usage.</p>
                                <p>You can also use text lighten, darken and accent classes.</p>
                                <ul>
                                    <li><code>li.red .lighten-*</code> For lighten red text color, this two classes needed. Here *: 1,2,3,4 for lighten red color options.</li>
                                    <li><code>.red .darken-*</code> For darken red text color, this two classes needed. Here *: 1,2,3,4 for darken red color options.</li>
                                    <li><code>.red .accent-*</code> For accent red text color, this two classes needed. Here *: 1,2,3,4 for accent red color options.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="red">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                        </td>
                                        <td><code>.red</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="red"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="purple">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        </td>
                                        <td><code>.purple</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="purple"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="cyan">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </td>
                                        <td><code>.cyan</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="cyan"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="blue">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                        </td>
                                        <td><code>.blue</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="blue"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="teal">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                        </td>
                                        <td><code>.teal</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="teal"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="blue-grey">Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        </td>
                                        <td><code>.blue-grey</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="blue-grey"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!--/ Contextual colors -->

                <!-- Contextual background -->
                <section id="contextual-background" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contextual background</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like
                                    the text classes.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="bg-primary text-highlight white">Nullam id dolor id nibh ultricies vehicula ut id elit.</span>
                                        </td>
                                        <td><code>.bg-primary</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-primary"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-success text-highlight white">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</span>
                                        </td>
                                        <td><code>.bg-success</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-success"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-info text-highlight white">Maecenas sed diam eget risus varius blandit sit amet non magna.</span>
                                        </td>
                                        <td><code>.bg-info</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-info"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-warning text-highlight white">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</span>
                                        </td>
                                        <td><code>.bg-warning</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-warning"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-danger text-highlight white">Donec ullamcorper nulla non metus auctor fringilla.</span>
                                        </td>
                                        <td><code>.bg-danger</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-danger"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-dark text-highlight white">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</span>
                                        </td>
                                        <td><code>.bg-dark</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-dark"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p>Stack Admin also provide custom <a
                                            href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/color-red.html"
                                            target="_blank">color palette</a> for the background colors, below table show you usage.</p>
                                <p>You can also use background lighten, darken and accent classes.</p>
                                <ul>
                                    <li><code>.bg-red .bg-lighten-*</code> For lighten red text color, this two classes needed. Here *: 1,2,3,4 for lighten red color options.</li>
                                    <li><code>.bg-red .bg-darken-*</code> For darken red text color, this two classes needed. Here *: 1,2,3,4 for darken red color options.</li>
                                    <li><code>.bg-red .bg-accent-*</code> For accent red text color, this two classes needed. Here *: 1,2,3,4 for accent red color options.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="bg-red bg-dark text-highlight white"> Fusce dapibus, tellus ac cursus commodo.</span>
                                        </td>
                                        <td><code>.bg-red</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-red bg-dark"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-purple bg-dark text-highlight white"> Nullam id dolor id nibh ultricies.</span>
                                        </td>
                                        <td><code>.purple</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-purple bg-dark"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-cyan bg-dark text-highlight white"> Duis mollis, est non commodo luctus, nisi erat.</span>
                                        </td>
                                        <td><code>.bg-cyan</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-cyan bg-dark"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-blue bg-dark text-highlight white"> Maecenas sed diam eget risus varius blandit sit.</span>
                                        </td>
                                        <td><code>.bg-blue</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-blue bg-dark"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-teal bg-dark text-highlight white"> Fusce dapibus, tellus ac cursus commodo.</span>
                                        </td>
                                        <td><code>.bg-teal</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="bg-teal bg-dark"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="bg-blue-grey bg-dark text-highlight white"> Donec ullamcorper nulla non metus.</span>
                                        </td>
                                        <td><code>.blue-grey</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="blue-grey bg-dark"&gt;Your Text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!--/ Contextual background -->

                <!-- Text alignment -->
                <section id="text-alignment" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Text alignment</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Easily realign text to components with text alignment classes.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s.</p>
                                        </td>
                                        <td><code>.text-justify</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-justify"&gt;Justified text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-nowrap">It is a long established fact that a reader.</p>
                                        </td>
                                        <td><code>.text-nowrap</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code class="language-markup">
                                &lt;p class="text-nowrap"&gt;No wrap text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p>For left, right, and center alignment, responsive classes are available that use the same viewport width breakpoints as the grid system.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-white-space no-wrap table-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-left">Left aligned text on all viewport sizes.</p>
                                        </td>
                                        <td><code>.text-left</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-left"&gt;Left aligned text on all viewport sizes.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-center">Center aligned text on all viewport sizes.</p>
                                        </td>
                                        <td><code>.text-center</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code class="language-markup">
                                &lt;p class="text-center"&gt;Center aligned text on all viewport sizes.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-right">Right aligned text on all viewport sizes.</p>
                                        </td>
                                        <td><code>.text-right</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code class="language-markup">
                                &lt;p class="text-right"&gt;Right aligned text on all viewport sizes.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm-left">Left aligned text on viewports sized SM or wider.</p>
                                            <p class="text-md-left">Left aligned text on viewports sized MD or wider.</p>
                                            <p class="text-lg-left">Left aligned text on viewports sized LG or wider.</p>
                                            <p class="text-xl-left">Left aligned text on viewports sized XL or wider.</p>
                                        </td>
                                        <td><code>.text-sm-left</code> <code>.text-md-left</code> <code>.text-lg-left</code> <code>.text-xl-left</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code class="language-markup">
                                &lt;p class="text-sm-left"&gt;Left aligned text on viewports sized SM or wider.&lt;/p&gt;
                                &lt;p class="text-md-left"&gt;Left aligned text on viewports sized MD or wider.&lt;/p&gt;
                                &lt;p class="text-lg-left"&gt;Left aligned text on viewports sized LG or wider.&lt;/p&gt;
                                &lt;p class="text-xl-left"&gt;Left aligned text on viewports sized XL or wider.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm-center">Center aligned text on viewports sized SM or wider.</p>
                                            <p class="text-md-center">Center aligned text on viewports sized MD or wider.</p>
                                            <p class="text-lg-center">Center aligned text on viewports sized LG or wider.</p>
                                            <p class="text-xl-center">Center aligned text on viewports sized XL or wider.</p>
                                        </td>
                                        <td><code>.text-sm-center</code> <code>.text-md-center</code> <code>.text-lg-center</code> <code>.text-xl-center</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code class="language-markup">
                                &lt;p class="text-sm-center"&gt;Center aligned text on viewports sized SM or wider.&lt;/p&gt;
                                &lt;p class="text-md-center"&gt;Center aligned text on viewports sized MD or wider.&lt;/p&gt;
                                &lt;p class="text-lg-center"&gt;Center aligned text on viewports sized LG or wider.&lt;/p&gt;
                                &lt;p class="text-xl-center"&gt;Center aligned text on viewports sized XL or wider.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-sm-right">Right aligned text on viewports sized SM or wider.</p>
                                            <p class="text-md-right">Right aligned text on viewports sized MD or wider.</p>
                                            <p class="text-lg-right">Right aligned text on viewports sized LG or wider.</p>
                                            <p class="text-xl-right">Right aligned text on viewports sized XL or wider.</p>
                                        </td>
                                        <td><code>.text-sm-right</code> <code>.text-md-right</code> <code>.text-lg-right</code> <code>.text-xl-right</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code class="language-markup">
                                &lt;p class="text-sm-right"&gt;Right aligned text on viewports sized SM or wider.&lt;/p&gt;
                                &lt;p class="text-md-right"&gt;Right aligned text on viewports sized MD or wider.&lt;/p&gt;
                                &lt;p class="text-lg-right"&gt;Right aligned text on viewports sized LG or wider.&lt;/p&gt;
                                &lt;p class="text-xl-right"&gt;Right aligned text on viewports sized XL or wider.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!--/ Text alignment -->

                <!-- Text transform -->
                <section id="text-transform" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Text transform</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Transform text in components with text capitalization classes.</p>
                                <p>Note how <code class="highlighter-rouge">text-capitalize</code> only changes the first letter of each word, leaving the case of any other letters
                                    unaffected.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-lowercase">Lowercased text.</p>
                                        </td>
                                        <td><code>.text-lowercase</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-lowercase"&gt;Lowercased text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-uppercase">Uppercased text.</p>
                                        </td>
                                        <td><code>.text-uppercase</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code class="language-markup">
                                &lt;p class="text-uppercase"&gt;Uppercased text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-capitalize">CapiTaliZed text.</p>
                                        </td>
                                        <td><code>.text-capitalize</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code class="language-markup">
                                &lt;p class="text-capitalize"&gt;CapiTaliZed text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!--/ Text transform -->

                <!-- Text option -->
                <section id="text-option" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Text option</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="font-weight-800 mb-1">Font size</h5>
                                <p>Stack Admin provide font large & small sizes variant classes to change font size.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="font-large-3">Large lg text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-large-3</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-large-3" &gt;Large lg text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-large-2">Large lg text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-large-2</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-large-2" &gt;Large lg text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-large-1">Large lg text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-large-1</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-large-1" &gt;Large lg text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-medium-3">Large md text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-medium-3</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-medium-3" &gt;Large md text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-medium-2">Large md text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-medium-2</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-medium-2" &gt;Large md text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-medium-1">Large sm text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-medium-1</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-medium-1" &gt;Large sm text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Normal base text size.</p>
                                        </td>
                                        <td>
                                            N/A
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;Normal base text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-small-3">Small lg text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-small-3</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-small-3" &gt;Small lg text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-small-2">Small md text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-small-2</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-small-2" &gt;Small md text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-small-1">Small sm text size.</p>
                                        </td>
                                        <td>
                                            <code>.font-small-1</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="font-small-1" &gt;Small sm text size.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="font-weight-800 my-1">Font weight</h5>
                                <p>Stack Admin provide font weight class <code>.text-bold-{weight}</code>, where <code>{weight} value can be 100,200 ... 900.</code></p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Classes</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-bold-300">Font weight 300</p>
                                        </td>
                                        <td><code>.text-bold-300</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-bold-300"&gt;Font weight 300.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-bold-400">Font weight 400</p>
                                        </td>
                                        <td><code>.text-bold-400</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-bold-400"&gt;Font weight 400.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-bold-600">Font weight 600</p>
                                        </td>
                                        <td><code>.text-bold-600</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-bold-600"&gt;Font weight 600.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="text-bold-700">Font weight 700</p>
                                        </td>
                                        <td><code>.text-bold-700</code></td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p class="text-bold-700"&gt;Font weight 700.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="font-weight-800 my-1">Inline text elements</h5>
                                <p>Styling for common inline HTML5 elements.</p>
                                <p><code class="highlighter-rouge">.mark</code> and <code class="highlighter-rouge">.small</code> classes are also available to apply the same
                                    styles as <code class="highlighter-rouge">&lt;mark&gt;</code> and <code class="highlighter-rouge">&lt;small&gt;</code> while avoiding any
                                    unwanted semantic implications that the tags would bring.</p>
                                <p class="">While not shown above, feel free to use <code class="highlighter-rouge">&lt;b&gt;</code> and <code
                                            class="highlighter-rouge">&lt;i&gt;</code> in HTML5. <code class="highlighter-rouge">&lt;b&gt;</code> is meant to highlight words or
                                    phrases
                                    without conveying additional importance while <code class="highlighter-rouge">&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Example</th>
                                        <th>Snippet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>You can use the mark tag to
                                                <mark>highlight</mark>
                                                text.
                                            </p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <del>This line of text is meant to be treated as deleted text.</del>
                                            </p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <s>This line of text is meant to be treated as no longer accurate.</s>
                                            </p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                This line of text
                                                <ins>is meant to be treated as an addition to the document.</ins>
                                            </p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><u>This line of text will render as underlined</u></p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;&lt;u&gt;This line of text will render as underlined.&lt;/u&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <small>This line of text is meant to be treated as fine print.</small>
                                            </p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>This line rendered as bold text.</strong></p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>This line rendered as italicized text.</em></p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Sample
                                                <abbr title="" data-popup="tooltip" data-original-title="Abbr title">abbreviation</abbr>
                                            </p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt; Sample &lt;abbr&gt;Abbreviations.&lt;/abbr&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Sample
                                                <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> title.</p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt; Sample &lt;abbr title="HyperText Markup Language" class="initialism"&gt;HTML.&lt;/abbr&gt;&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <var>y</var> =
                                            <var>m</var>
                                            <var>x</var> +
                                            <var>b</var>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt; For indicating variables use the &lt;var&gt; tag.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Edit settings, press
                                                <kbd>
                                                    <kbd>ctrl</kbd> +
                                                    <kbd>,</kbd>
                                                </kbd>
                                            </p>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt; Use the &lt;kbd&gt;  to indicate input that is typically entered via keyboard.&lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <samp>This text is meant to be treated as sample output from a computer program.</samp>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt; For indicating sample output from a program use the  &lt;samp&gt;  tag. &lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code>Inline code snippet</code>
                                        </td>
                                        <td>
                            <pre class="language-markup">
                              <code>
                                &lt;p&gt; Wrap inline snippets of code with &lt;code&gt; tag. &lt;/p&gt;</code>
                            </pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!--/ Text option -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('vendor-js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/ui/prism.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')

@endsection
