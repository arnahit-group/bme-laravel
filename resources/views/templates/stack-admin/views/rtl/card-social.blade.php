@extends('stack-admin.layouts.admin')

@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/unslider.css')}}">
    <!-- END: Vendor CSS-->

@endsection

@section('header')

    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/users.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/users.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Advance Social Cards</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="card-social.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Social Cards
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
            <div class="content-body"><!-- Social cards section start -->
                <section id="social-cards">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Social Cards</h4>
                            <p>User's social profile cards with followers - following numbers and follow button.</p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card profile-card-with-cover">
                                <div class="card-content">
                                    <!--<img class="card-img-top img-fluid" src="{{asset('admin-assets/images/carousel/18.jpg" alt="Card cover image')}}">-->
                                    <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../admin-assets/images/backgrounds/fb.jpg') 0 30%;"></div>
                                    <div class="card-profile-image">
                                        <img src="{{asset('admin-assets/images/portrait/small/avatar-s-4.png" class="rounded-circle img-border box-shadow-1" alt="Card image')}}">
                                    </div>
                                    <div class="profile-card-with-cover-content text-center">
                                        <div class="profile-details mt-2">
                                            <h4 class="card-title">Linda Holland</h4>
                                            <ul class="list-inline clearfix mt-2">
                                                <li class="mr-3"><h2 class="block">3.5K</h2> Likes</li>
                                                <li class="mr-3"><h2 class="block">2845</h2> Followers</li>
                                                <li><h2 class="block">645</h2> Following</li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <a href="card-social.html#" class="btn btn-social btn-min-width mr-1 mb-1 btn-facebook"><i class="fa fa-facebook"></i> <span
                                                        class="pl-1">Follow</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card profile-card-with-cover">
                                <div class="card-content">
                                    <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../admin-assets/images/backgrounds/in.jpg') 0 40%;"></div>
                                    <div class="card-profile-image">
                                        <img src="{{asset('admin-assets/images/portrait/small/avatar-s-9.png" class="rounded-circle img-border box-shadow-1" alt="Card image')}}">
                                    </div>
                                    <div class="profile-card-with-cover-content text-center">
                                        <div class="profile-details mt-2">
                                            <h4 class="card-title">Philip Garrett</h4>
                                            <ul class="list-inline clearfix mt-2">
                                                <li class="mr-3"><h2 class="block">500+</h2> Connections</li>
                                                <li class="mr-3"><h2 class="block">485</h2> Posts</li>
                                                <li><h2 class="block">35</h2> Following</li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <a href="card-social.html#" class="btn btn-social btn-min-width mr-1 mb-1 btn-linkedin"><span class="fa fa-linkedin"></span> <span
                                                        class="pl-1">Follow</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card profile-card-with-cover">
                                <div class="card-content">
                                    <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../admin-assets/images/backgrounds/tw.jpg') 0 30%;"></div>
                                    <div class="card-profile-image">
                                        <img src="{{asset('admin-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border box-shadow-1" alt="Card image')}}">
                                    </div>
                                    <div class="profile-card-with-cover-content text-center">
                                        <div class="profile-details mt-2">
                                            <h4 class="card-title">Christine Wood</h4>
                                            <ul class="list-inline clearfix mt-2">
                                                <li class="mr-3"><h2 class="block">1.6K</h2> Likes</li>
                                                <li class="mr-3"><h2 class="block">264</h2> Followers</li>
                                                <li><h2 class="block">85</h2> Following</li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <a href="card-social.html#" class="btn btn-social btn-min-width mr-1 mb-1 btn-twitter"><span class="fa fa-twitter"></span> <span
                                                        class="pl-1">Follow</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-md-12">
                            <div class="card bg-twitter white">
                                <div class="card-content p-2">
                                    <div class="card-body">
                                        <div class="text-center mb-1">
                                            <i class="fa fa-twitter font-large-3"></i>
                                        </div>
                                        <div class="tweet-slider">
                                            <ul class="text-center">
                                                <li>Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!</li>
                                                <li>Contests are a great thing to partner on. Partnerships immediately <span class="yellow">#DOUBLE</span> the reach.</li>
                                                <li>Puns, humor, and quotes are great content on <span class="yellow">#Twitter</span>. Find some related to your business.</li>
                                                <li>Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-12">
                            <div class="card bg-facebook white">
                                <div class="card-content p-2">
                                    <div class="card-body">
                                        <div class="text-center mb-1">
                                            <i class="fa fa-facebook font-large-3"></i>
                                        </div>
                                        <div class="fb-post-slider">
                                            <ul class="text-center">
                                                <li>Congratulations to Rob Jones in accounting for winning our #NFL football pool!</li>
                                                <li>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.</li>
                                                <li>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.</li>
                                                <li>Are there #common-sense facts related to your business? Combine them with a great photo.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-12">
                            <div class="card bg-linkedin white">
                                <div class="card-content p-2">
                                    <div class="card-body">
                                        <div class="text-center mb-1">
                                            <i class="fa fa-linkedin font-large-3"></i>
                                        </div>
                                        <div class="fb-post-slider">
                                            <ul class="text-center">
                                                <li>Congratulations to Rob Jones in accounting for winning our #NFL football pool!</li>
                                                <li>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.</li>
                                                <li>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.</li>
                                                <li>Are there #common-sense facts related to your business? Combine them with a great photo.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Social cards section end -->
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
    <script src="{{asset('admin-assets/vendors/js/extensions/unslider-min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection

@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/cards/card-social.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
