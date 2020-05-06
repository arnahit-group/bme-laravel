@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/raty/jquery.raty.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/meteocons/style.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/meteocons/style.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Ratings</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="ex-component-ratings.html#">Extra Components</a>
                                </li>
                                <li class="breadcrumb-item active">Rating
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
            <div class="content-body"><!-- Star ratings section start -->
                <section id="star-ratings">

                    <div class="row match-height">
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Default</h4>
                                        <p>This is the most basic example of ratings.</p>
                                        <div id="default-star-rating"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Score</h4>
                                        <p>Used when we want starts with a saved rating.</p>
                                        <div id="score-rating"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Number Of Stars</h4>
                                        <p>Changes the number of stars.</p>
                                        <div id="no-of-stars"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Number Max</h4>
                                        <p>Change the maximum of stars that can be created.</p>
                                        <div id="max-number-stars"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Read Only</h4>
                                        <p>You can prevent users to vote. It can be applied with or without score and all stars will receives the hint corresponding of the selected
                                            star. Stop the mouse over the stars to see:</p>
                                        <div id="read-only-stars"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">No Rated Message</h4>
                                        <p>If readOnly is enabled and there is no score, the hint "Not rated yet!" will be shown for all stars. But you can change it. Stop the
                                            mouse over the star to see:</p>
                                        <div id="no-rated-msg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Cancel</h4>
                                        <p>Add a cancel button on the left side of the stars to cancel the score. Inside the click callback the argument code receives the value
                                            null when we click on cancel button.</p>
                                        <div id="cancel-star"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Space</h4>
                                        <p>You can take off the space between the star.</p>
                                        <div id="space-star"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Single</h4>
                                        <p>You can turn on just the mouseovered star instead all from the first until that one.</p>
                                        <div id="single-star"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Half</h4>
                                        <p>Enables the half star mouseover to be possible vote with half values.</p>
                                        <p>If you want to vote with more precision than half value, please check the option precision.</p>
                                        <div id="half-star"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Star Half</h4>
                                        <p>Changes the name of the half star.</p>
                                        <p>Pay attention, when you want specify a different icon with a different directory, you must to set the path option to null to avoid it to
                                            be prepender on your path and, consequently, specify all other icons with explicit original path.</p>
                                        <div id="star-half"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Round Enabled</h4>
                                        <p>The round rules are:</p>

                                        <ul>
                                            <li>Down: score &lt;= x.25 the star will be rounded down;</li>
                                            <li>Half: score &gt;= x.26 and &lt;= x.75 the star will be a half star;</li>
                                            <li>Up: score &gt;= x.76 the star will be rounded up.</li>
                                        </ul>

                                        <div id="round-enabled"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Round Disabled</h4>
                                        <p>The round rules becomes:</p>

                                        <ul>
                                            <li>Down: score &lt; x.6 the star will be rounded down;</li>
                                            <li>Up: score &gt;= x.6 the star will be rounded up;</li>
                                        </ul>
                                        <div id="round-disabled"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Custom Icon</h4>
                                        <p>Change the maximum of stars that can be created.</p>
                                        <div id="custom-icon-star"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="mb-1">Icon Range</h4>
                                        <p>Change the maximum of stars that can be created.</p>
                                        <div id="icon-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Star ratings section end -->
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
    <script src="{{asset('admin-assets/vendors/js/extensions/jquery.raty.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/extensions/rating.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
