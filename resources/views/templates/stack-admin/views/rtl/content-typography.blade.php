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
                    <h3 class="content-header-title mb-0">Typography</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="content-typography.html#">Content</a>
                                </li>
                                <li class="breadcrumb-item active">Typography
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
            <div class="content-body"><!--native-font-stack -->
                <section id="global-settings" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Native font stack</h4>
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
                                <p>The default web fonts (Helvetica Neue, Helvetica, and Arial) have been dropped in Bootstrap 4 and replaced with a “native font stack” for optimum
                                    text rendering on every device and OS. Read more about <a
                                            href="../../../../www.smashingmagazine.com/2015/11/using-system-ui-fonts-practical-guide/using-system-ui-fonts-practical-guide.html"
                                            target="_blank">native font stacks</a></p>
                                <ul>
                                    <li>Use a <a href="https://pixinvent.com/content/reboot/#native-font-stack">native font stack</a> that selects the best <code
                                                class="highlighter-rouge">font-family</code> for each OS and device.
                                    </li>
                                    <li>Use the <code class="highlighter-rouge">$font-family-base</code>, <code class="highlighter-rouge">$font-size-base</code>, and <code
                                                class="highlighter-rouge">$line-height-base</code> attributes as our typographic base applied to the <code
                                                class="highlighter-rouge">&lt;body&gt;</code>.
                                    </li>
                                    <li>Set the global link color via <code class="highlighter-rouge">$link-color</code> and apply link underlines only on <code
                                                class="highlighter-rouge">:hover</code>.
                                    </li>
                                    <li>Use <code class="highlighter-rouge">$body-bg</code> to set a <code class="highlighter-rouge">background-color</code> on the <code
                                                class="highlighter-rouge">&lt;body&gt;</code> (<code class="highlighter-rouge">#fff</code> by default).
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Global settings -->

                <!-- Headings -->
                <section id="html-headings-default" class="row match-height">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">HTML headings
                                    <small class="text-muted">Default</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through <code class="highlighter-rouge">&lt;h6&gt;</code>, are
                                            available.</p>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1>H1. Heading</h1></td>
                                                <td class="type-info text-right">Semibold 2rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>H2. Heading</h2></td>
                                                <td class="type-info text-right">Semibold 74rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3>H3. Heading</h3></td>
                                                <td class="type-info text-right">Semibold 1.51rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>H4. Heading</h4></td>
                                                <td class="type-info text-right">Semibold 1.32rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>H5. Heading</h5></td>
                                                <td class="type-info text-right">Semibold 1.14rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>H6. Heading</h6></td>
                                                <td class="type-info text-right">Semibold 1rem</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Heading class</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p><code class="highlighter-rouge">.h1</code> through <code class="highlighter-rouge">.h6</code> classes are also available, for when you
                                            want to match the font styling of a heading but cannot use the associated HTML element.</p>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p class="h1">H1. Heading</p>
                                                </td>
                                                <td class="type-info text-right">Semibold 2rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="h2">H2. Heading</p>
                                                </td>
                                                <td class="type-info text-right">Semibold 74rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="h3">H3. Heading</p>
                                                </td>
                                                <td class="type-info text-right">Semibold 1.51rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="h4">H4. Heading</p>
                                                </td>
                                                <td class="type-info text-right">Semibold 1.32rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="h5">H5. Heading</p>
                                                </td>
                                                <td class="type-info text-right">Semibold 1.14rem</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="h6">H6. Heading</p>
                                                </td>
                                                <td class="type-info text-right">Semibold 1rem</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Headings -->

                <!--Headings weight-->
                <section id="thin-headings" class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thin headings</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1 class="text-bold-200">H1. Heading</h1></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="text-bold-200">H2. Heading</h2></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 class="text-bold-200">H3. Heading</h3></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4 class="text-bold-200">H4. Heading</h4></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="text-bold-200">H5. Heading</h5></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="text-bold-200">H6. Heading</h6></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Light headings</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1 class="text-bold-400">H1. Heading</h1></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="text-bold-400">H2. Heading</h2></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 class="text-bold-400">H3. Heading</h3></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4 class="text-bold-400">H4. Heading</h4></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="text-bold-400">H5. Heading</h5></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="text-bold-400">H6. Heading</h6></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bold headings</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1 class="text-bold-600">H1. Heading</h1></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="text-bold-600">H2. Heading</h2></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 class="text-bold-600">H3. Heading</h3></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4 class="text-bold-600">H4. Heading</h4></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="text-bold-600">H5. Heading</h5></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="text-bold-600">H6. Heading</h6></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Black headings</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1 class="text-bold-800">H1. Heading</h1></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="text-bold-800">H2. Heading</h2></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 class="text-bold-800">H3. Heading</h3></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4 class="text-bold-800">H4. Heading</h4></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="text-bold-800">H5. Heading</h5></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="text-bold-800">H6. Heading</h6></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/Headings weight-->

                <!-- Customizing headings -->
                <section id="customizing-headings-default" class="row match-height">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Customizing headings
                                    <small class="text-muted">Default</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Use the included utility classes to recreate the small secondary heading text.</p>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1>Display heading
                                                        <small class="text-muted">Secondary text</small>
                                                    </h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Display heading
                                                        <small class="text-muted">Secondary text</small>
                                                    </h2>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3>Display heading
                                                        <small class="text-muted">Secondary text</small>
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Display heading
                                                        <small class="text-muted">Secondary text</small>
                                                    </h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>Display heading
                                                        <small class="text-muted">Secondary text</small>
                                                    </h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Display heading
                                                        <small class="text-muted">Secondary text</small>
                                                    </h6>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Heading colors</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider
                                            using a <strong>display heading</strong>—a larger, slightly more opinionated heading style.</p>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1 class="primary">Display heading</h1></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="success">Display heading</h2></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 class="info">Display heading</h3></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4 class="warning">Display heading</h4></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="danger">Display heading</h5></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="">Display heading</h6></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Headings -->

                <!-- Display headings -->
                <section id="display-headings" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Display headings</h4>
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
                                <p>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a
                                    <strong>display heading</strong>—a larger, slightly more opinionated heading style.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h1 class="display-1">Display 1</h1></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h1 class="display-2">Display 2</h1></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h1 class="display-3">Display 3</h1></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h1 class="display-4">Display 4</h1></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!--/ Headings-->

                <!-- Blockquotes -->
                <section id="blockquotes" class="row">
                    <div class="col-md-12 mt-1">
                        <div class="group-area">
                            <h4>Blockquotes</h4>
                            <p>For quoting blocks of content from another source within your document. Wrap <code class="highlighter-rouge">&lt;blockquote
                                    class="blockquote"&gt;</code> around any
                                <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</p>
                            <hr>
                        </div>
                    </div>
                </section>

                <!-- Blockquotes basic-->
                <section id="blockquotes-default" class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Blockquotes
                                    <small class="text-muted">Default</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Left aligned basic blockquotes</p>
                                        <blockquote class="blockquote">
                                            <p class="mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Blockquotes
                                    <small class="text-muted">Right</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Add <code class="highlighter-rouge">.blockquote-reverse</code> for a blockquote with right-aligned content.</p>
                                        <blockquote class="blockquote">
                                            <p class="mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Blockquotes basic -->

                <!-- Naming a source -->
                <section id="naming-a-source-default" class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Naming a source
                                    <small class="text-muted">Default</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Add a <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code> for identifying the source. Wrap the name of the
                                            source work in <code class="highlighter-rouge">&lt;cite&gt;</code>.</p>
                                        <blockquote class="blockquote">
                                            <p class="mb-0">Being the richest man in the cemetery doesn't matter to me. Going to bed at night saying we've done something wonderful,
                                                that's what matters to me.</p>
                                            <footer class="blockquote-footer">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Naming a source
                                    <small class="text-muted">Right</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Add a <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code> for identifying the source with <code
                                                    class="highlighter-rouge">.blockquote-reverse</code> for a blockquote with right-aligned content.</p>
                                        <blockquote class="blockquote blockquote-reverse">
                                            <p class="mb-0">Being the richest man in the cemetery doesn't matter to me. Going to bed at night saying we've done something wonderful,
                                                that's what matters to me.</p>
                                            <footer class="blockquote-footer">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Naming a source -->

                <!-- Blockquotes styling -->
                <section id="blockquotes-styling-default" class="row match-height">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Blockquotes styling
                                    <small class="text-muted">Default</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Add a <code class="highlighter-rouge">.border-left-{color} .border-right-3</code> helper classes, where color can be any color from Stack
                                            Admin <a href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/color-red.html"
                                                     target="_blank">color palette</a>.</p>
                                        <blockquote class="blockquote pl-1 border-left-primary border-left-3">
                                            <p class="mb-0">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other
                                                innovations.</p>
                                            <footer class="blockquote-footer">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote pl-1 border-left-red border-left-3 mt-1">
                                            <p class="mb-0">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other
                                                innovations.</p>
                                            <footer class="blockquote-footer">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Blockquotes styling
                                    <small class="text-muted">Right</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Add a <code class="highlighter-rouge">.border-right-{color} .border-right-3</code> helper classes with <code>.blockquote-reverse</code>,
                                            where color can be any color from Stack Admin <a
                                                    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/color-red.html"
                                                    target="_blank">color palette</a>.</p>
                                        <blockquote class="blockquote border-right-teal border-right-3 blockquote-reverse">
                                            <p class="mb-0">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other
                                                innovations.</p>
                                            <footer class="blockquote-footer">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote border-right-amber border-right-3 blockquote-reverse mt-1">
                                            <p class="mb-0">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other
                                                innovations.</p>
                                            <footer class="blockquote-footer">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Blockquotes styling -->

                <!-- Blockquotes with avatar -->
                <section id="blockquotes-with-avatar" class="row match-height">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Blockquotes with avatar
                                    <small class="text-muted">Default</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Blockquotes with avatar. it use Media Object. You can customize image type, border alignment & style.</p>
                                        <blockquote class="blockquote pl-1 border-left-primary border-left-3">
                                            <div class="media">
                                                <div class="media-left pr-1">
                                                    <img class="media-object img-xl" src="{{asset('admin-assets/images/portrait/small/avatar-s-5.png')}}"
                                                         alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote pr-1 border-right-primary border-right-3 border-0-left">
                                            <div class="media">
                                                <div class="media-left pr-1">
                                                    <img class="media-object img-xl" src="{{asset('admin-assets/images/portrait/small/avatar-s-4.png')}}"
                                                         alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="mt-2">Blockquotes with avatar rounded image example</p>
                                        <blockquote class="blockquote pl-1 border-left-red border-left-3 mt-1">
                                            <div class="media">
                                                <div class="media-left pr-1">
                                                    <img class="media-object img-xl rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-3.png')}}"
                                                         alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote pr-1 border-right-red border-right-3 border-0-left mt-1">
                                            <div class="media">
                                                <div class="media-left pr-1">
                                                    <img class="media-object img-xl rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png')}}"
                                                         alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Blockquotes with avatar
                                    <small class="text-muted">Right</small>
                                </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Right aligned blockquotes with avatar, it also use Media Object. You can customize image type, border alignment & style.</p>
                                        <blockquote class="blockquote pr-1 border-right-teal border-right-3 blockquote-reverse">
                                            <div class="media">
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                                <div class="media-right">
                                                    <img class="media-object img-xl" src="{{asset('admin-assets/images/portrait/small/avatar-s-6.png')}}"
                                                         alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-left">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote border-left-teal border-left-3 border-0-right blockquote-reverse">
                                            <div class="media">
                                                <div class="media-body pl-1">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                                <div class="media-right">
                                                    <img class="media-object img-xl" src="{{asset('admin-assets/images/portrait/small/avatar-s-7.png')}}"
                                                         alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-left pl-1">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="mt-2">Right aligned blockquotes with avatar rounded image example</p>
                                        <blockquote class="blockquote pr-1 border-right-amber border-right-3 blockquote-reverse mt-1">
                                            <div class="media">
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                                <div class="media-right">
                                                    <img class="media-object img-xl rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-8.png')}}"
                                                         alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-left">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <blockquote class="blockquote border-left-amber border-left-3 border-0-right blockquote-reverse mt-1">
                                            <div class="media">
                                                <div class="media-body pl-1">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                                <div class="media-right">
                                                    <img class="media-object img-xl rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-9.png')}}"
                                                         alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-left pl-1">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Blockquotes styling -->

                <!-- Lists -->
                <section id="lists">
                    <div class="row">
                        <div class="col-md-12 mt-1">
                            <div class="group-area">
                                <h4>Lists</h4>
                                <p>For quoting blocks of content from another source within your document. Wrap <code class="highlighter-rouge">&lt;blockquote class="blockquote"&gt;</code>
                                    around any
                                    <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!-- Lists Unstyled -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Unstyled</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Use class <code>.list-unstyled</code> for Lists Unstyled. It remove the default <code class="highlighter-rouge">list-style</code> and
                                                left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning
                                                you will need to add the class for any nested lists as well.</p>
                                            <ul class="list-unstyled">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Lists Unstyled -->
                        <!-- Lists Unordered -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Unordered
                                        <small class="text-muted">Default</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>List of items in which the order does not explicitly matter.</p>
                                        <div class="card-text">
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Unordered -->
                        <!-- Lists Ordered -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Ordered
                                        <small class="text-muted">Default</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>List of items in which the order does explicitly matter.</p>
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ol>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ol>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Ordered -->
                    </div>
                    <div class="row match-height">
                        <!-- Lists Unordered Circle -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Unordered
                                        <small class="text-muted">Circle</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Use <code>.list-style-circle</code> class in unordered list to add circle bullet points.</p>
                                            <ul class="list-style-circle">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul class="list-style-circle">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Unordered Circle -->
                        <!-- Lists Unordered Square -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Unordered
                                        <small class="text-muted">Square</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.list-style-square</code> class in unordered list to add square bullet points.</p>
                                        <div class="card-text">
                                            <ul class="list-style-square">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul class="list-style-square">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Unordered Square -->
                        <!-- Lists Ordered Mixed -->
                        <div class="col-sm-12 col-md-4 match-height">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Ordered
                                        <small class="text-muted">Mixed</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Combine <code>.list-style-square</code> & <code>.list-style-circle</code> classes in unordered list to add square and circle bullet
                                                points.</p>
                                            <ul class="list-style-circle">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul class="list-style-square">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Ordered Mixed -->
                    </div>
                    <div class="row match-height">
                        <!-- Lists Ordered Type-->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Ordered
                                        <small class="text-muted">Type</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Use <code>&lt;ol type="1|a|A|i|I"&gt;</code>, The type attribute specifies the kind of marker to use in the list.</p>
                                            <ol type="I">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ol type="I">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ol>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Lists Ordered Type-->
                        <!-- Lists Ordered Mixed -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Ordered
                                        <small class="text-muted">Mixed</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can also mix up ordered list type, below example shows I & i type combination.</p>
                                        <div class="card-text">
                                            <ol type="I">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ol type="i">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ol>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Ordered Mixed -->
                        <!-- Lists icons -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists icons</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>list of terms with icons, use <code>.list-style-icons</code> class. You can use any icon from Stack Admin icon types.</p>
                                            <ul class="list-style-icons">
                                                <li><i class="fa fa-folder-open-o"></i> Facilisis in pretium nisl aliquet</li>
                                                <li><i class="fa fa-folder-open-open-o"></i> Nulla volutpat aliquam velit
                                                    <ul class="list-style-icons">
                                                        <li><i class="fa fa-folder-open-o"></i> Phasellus iaculis neque</li>
                                                        <li><i class="fa fa-folder-open-o"></i> Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li><i class="fa fa-folder-open-o"></i> Faucibus porta lacus fringilla vel</li>
                                                <li><i class="fa fa-folder-open-o"></i> Aenean sit amet erat nunc</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists icons -->
                    </div>
                    <div class="row match-height">
                        <!-- Inline Lists-->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inline Lists
                                        <small class="text-muted">Default</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Remove a list’s bullets and apply some light <code class="highlighter-rouge">margin</code> with a combination of two classes, <code
                                                        class="highlighter-rouge">.list-inline</code> and <code class="highlighter-rouge">.list-inline-item</code>.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">Chocolate</li>
                                                <li class="list-inline-item">Cake</li>
                                                <li class="list-inline-item">Ice-Cream</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inline Lists-->

                        <!-- Inline Lists-->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inline Lists
                                        <small class="text-muted">Ordered</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Use inline numbers, alphabet etc... for ordered Inline List.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">1. Chocolate</li>
                                                <li class="list-inline-item">2. Cake</li>
                                                <li class="list-inline-item">3. Ice-Cream</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inline Lists-->

                        <!-- Inline Lists-->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inline Lists
                                        <small class="text-muted">With icons</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>You can also use Stack Admin icons in Inline Lists.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-eur"></i> Euro</li>
                                                <li class="list-inline-item"><i class="fa fa-gbp"></i> Pound</li>
                                                <li class="list-inline-item"><i class="fa fa-usd"></i> Dollar</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inline Lists-->
                    </div>
                </section>
                <!--/ Lists -->

                <!-- Description list alignment -->
                <section id="description-list-alignment">
                    <div class="row">
                        <div class="col-md-12 mt-1">
                            <div class="group-area">
                                <h4>Description list alignment</h4>
                                <p>Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can
                                    optionally add a <code class="highlighter-rouge">.text-truncate</code> class to truncate the text with an ellipsis.</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!-- Description lists horizontal -->
                        <div class="col-sm-12 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Description lists
                                        <small class="text-muted">Horizontal</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <dl class="row">
                                                <dt class="col-sm-3">Description lists</dt>
                                                <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Euismod</dt>
                                                <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt></dt>
                                                <dd class="col-sm-9 ml-auto">Donec id elit non mi porta gravida at eget metus.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Malesuada porta</dt>
                                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                                    risus.
                                                </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Nesting</dt>
                                                <dd class="col-sm-9">
                                                    <dl class="row">
                                                        <dt class="col-sm-4">Nested definition list</dt>
                                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                                    </dl>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Description lists horizontal-->

                        <!-- Description lists vertical-->
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Description lists
                                        <small class="text-muted">Vertical</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <dl>
                                                <dt>Description lists</dt>
                                                <dd>A description list is perfect for defining terms.</dd>
                                                <dt>Euismod</dt>
                                                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio.
                                                </dd>
                                                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                <dt>Malesuada porta</dt>
                                                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Description lists vertical-->
                    </div>
                    <div class="row">
                        <!-- Description lists horizontal -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Description lists
                                        <small class="text-muted">Horizontal</small>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Description lists with right aligned text in <code>&lt;dt&gt;</code> tag using <code>.text-right</code></p>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right">Description lists</dt>
                                                <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right">Euismod</dt>
                                                <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt></dt>
                                                <dd class="col-sm-9 ml-auto">Donec id elit non mi porta gravida at eget metus.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right">Malesuada porta</dt>
                                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right text-truncate">Truncated term is truncated</dt>
                                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                                    risus.
                                                </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right">Nesting</dt>
                                                <dd class="col-sm-9">
                                                    <dl class="row">
                                                        <dt class="col-sm-4">Nested definition list</dt>
                                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                                    </dl>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Description lists horizontal-->
                    </div>
                </section>
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
