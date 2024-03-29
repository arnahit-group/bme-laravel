@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif


@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/search.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/search.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Search Videos</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="search-videos.html#">Search</a>
                                </li>
                                <li class="breadcrumb-item active">Search Videos
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
            <div class="content-body"><!-- Search form-->
                <div id="search-videos" class="card overflow-hidden">
                    <div class="card-header">
                        <h4 class="card-title">Videos search results</h4>
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
                        <!--Search Form-->
                        <div class="card-body pb-0">
                            <fieldset class="form-group position-relative mb-0">
                                <input type="text" class="form-control form-control-xl input-xl" id="iconLeft1" placeholder="Explore Modern ...">
                                <div class="form-control-position">
                                    <i class="ft-mic font-medium-4"></i>
                                </div>
                            </fieldset>
                        </div>
                        <!--/Search Form-->

                        <!--Search Navbar-->
                        <div id="search-nav" class="px-2 py-1">
                            <ul class="nav nav nav-inline">
                                <li class="nav-item">
                                    <a class="nav-link" href="search-website.html"><i class="fa fa-link"></i> Website</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="search-images.html"><i class="fa fa-file-image-o"></i> Images</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="search-videos.html"><i class="fa fa-file-video-o"></i> Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="search-videos.html#"><i class="fa fa-map-o"></i> Maps</a>
                                </li>
                                <li class="dropdown nav-item float-right">
                                    <a href="search-videos.html#" class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="search-videos.html#" class="dropdown-link">Languages</a></li>
                                        <li class="dropdown-item"><a href="search-videos.html#" class="dropdown-link">Search Settings</a></li>
                                        <li class="dropdown-item"><a href="search-videos.html#" class="dropdown-link">History</a></li>
                                        <li class="dropdown-item"><a href="search-videos.html#" class="dropdown-link">Search Help</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/ Search Navbar-->

                        <!--Search Result-->
                        <div id="search-results" class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <p class="text-muted font-small-3">About 56,000 results (0.36 seconds) </p>
                                    <ul class="media-list">
                                        <!--search with video-->
                                        <li class="row">
                                            <p class="lead mb-0 col-12"><a href="search-videos.html#"><span class="text-bold-600">The Table</span> - for what do you feel you would
                                                    bring to</a></p>
                                            <div class="col-md-3 col-sm-12">
                                                <iframe class="border-0" width="150" height="80"
                                                        src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <p class="mb-0"><a href="search-videos.html#" class="teal darken-1">http://youtube.com/<span class="text-bold-600">modern</span>/ <i
                                                                class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                                                <ul class="list-inline list-inline-pipe text-muted">
                                                    <li>By PlayStation</li>
                                                    <li>5M Views</li>
                                                    <li>2 hours ago</li>
                                                </ul>
                                                <p><span class="text-bold-600">Proceduralize</span> Not the long pole in my tent. Get buy-in pixel pushing, and quick win . What's
                                                    the status on the deliverables for eow? goalposts golden goose, and take five.</p>
                                            </div>
                                        </li>

                                        <li class="row">
                                            <p class="lead mb-0 col-12"><a href="search-videos.html#"><span class="text-bold-600">Microdosing</span> - deep v actually schlitz chia</a>
                                            </p>
                                            <div class="col-md-3 col-sm-12">
                                                <iframe class="border-0" src="https://player.vimeo.com/video/118589137?title=0&byline=0" width="150" height="80"></iframe>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <p class="mb-0"><a href="search-videos.html#" class="teal darken-1">http://themeforest.net/<span class="text-bold-600">modern</span>/microdosing
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                                                <ul class="list-inline list-inline-pipe text-muted">
                                                    <li>By Colonel</li>
                                                    <li>1M Views</li>
                                                    <li>Aug 3, 2017</li>
                                                </ul>
                                                <p>Lobortis erat rutrum dignissim. Colonel <span class="text-bold-600">Responsive Bootstrap Admin Template</span> Ut tellus dui,
                                                    rhoncus quis vulputate non, sodales ac ex. Fusce interdum efficitur purus quis viverra. Vivamus eros
                                                    urna, scelerisque ac enim...</p>
                                            </div>
                                        </li>

                                        <li class="row">
                                            <p class="lead mb-0 col-12"><a href="search-videos.html#">Aesthetic neutra <span class="text-bold-600">freegan</span>, mlkshk literally</a>
                                            </p>
                                            <div class="col-md-3 col-sm-12">
                                                <iframe class="border-0" src="https://player.vimeo.com/video/173541384?color=ff9933&title=0&byline=0" width="150"
                                                        height="80"></iframe>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <p class="mb-0"><a href="search-videos.html#" class="teal darken-1">http://envato.com/literally/<span
                                                                class="text-bold-600">modern</span>/ <i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                                                <ul class="list-inline list-inline-pipe text-muted">
                                                    <li>By Freegan</li>
                                                    <li>20K Views</li>
                                                    <li>June 18, 2017</li>
                                                </ul>
                                                <p><span class="text-muted">June 30, 2017 - </span><span class="text-bold-600">Humblebrag</span> mixtape tumblr small batch, marfa
                                                    blog mumblecore retro sustainable bitters normcore brunch whatever helvetica. <span
                                                            class="text-bold-600">Humblebrag mumblecore </span>beard
                                                    irony, XOXO craft beer kogi letterpress freegan vegan disrupt...</p>
                                            </div>
                                        </li>

                                        <li class="row">
                                            <p class="lead mb-0 col-12"><a href="search-videos.html#"><span class="text-bold-600">iCell</span> - disrupt butcher pitchfork.</a></p>
                                            <div class="col-md-3 col-sm-12">
                                                <iframe class="border-0" width="150" height="80"
                                                        src="https://player.vimeo.com/video/161753790?color=ff9933&title=0&byline=0"></iframe>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <p class="mb-0"><a href="search-videos.html#" class="teal darken-1">http://google.com/<span class="text-bold-600">icell</span>/ <i
                                                                class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                                                <ul class="list-inline list-inline-pipe text-muted">
                                                    <li>By Kogi</li>
                                                    <li>8K Views</li>
                                                    <li>March 31, 2017</li>
                                                </ul>
                                                <p><span class="text-muted">March 23, 2017 - </span>Church-key selfies bitters man bun post-ironic. <span class="text-bold-600">8-bit 3 wolf moon</span>
                                                    drinking vinegar, direct trade plaid cred hashtag offal. Fap XOXO chambray, intelligentsia
                                                    kogi keytar flexitarian cardigan kale chips food truck.</p>
                                            </div>
                                        </li>

                                        <li class="row">
                                            <p class="lead mb-0 col-12"><a href="search-videos.html#"><span class="text-bold-600">Run it</span> - up the flagpole, ping the boss</a>
                                            </p>
                                            <div class="col-md-3 col-sm-12">
                                                <iframe class="border-0" src="https://www.youtube.com/embed/hunYLg8I1Os?rel=0&amp;controls=0&amp;showinfo=0" width="150"
                                                        height="80"></iframe>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <p class="mb-0"><a href="search-videos.html#" class="teal darken-1">http://mail.example.com/<span class="text-bold-600">run</span>/
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                                                <ul class="list-inline list-inline-pipe text-muted">
                                                    <li>By Jerk</li>
                                                    <li>850 Views</li>
                                                    <li>Feb 28, 2017</li>
                                                </ul>
                                                <p>Pixel pushing horsehead offer that jerk from finance really threw me under the bus, but best practices new economy and take five,
                                                    punch the tree, and come back in here with a clear head...</p>
                                            </div>
                                        </li>

                                        <li class="row">
                                            <p class="lead mb-0 col-12"><a href="search-videos.html#"><span class="text-bold-600">Keytar</span> - jean shorts disrupt poutine</a>
                                            </p>
                                            <div class="col-md-3 col-sm-12">
                                                <iframe class="border-0" width="150" height="80"
                                                        src="https://www.youtube.com/embed/zqDxfHvZ3DU?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <p class="mb-0"><a href="search-videos.html#" class="teal darken-1">http://demo.keytar.com/<span class="text-bold-600">jean</span>/
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                                                <ul class="list-inline list-inline-pipe text-muted">
                                                    <li>By Chillwave</li>
                                                    <li>380 Views</li>
                                                    <li>Feb 14, 2017</li>
                                                </ul>
                                                <p><span class="text-muted">Jan 14, 2017 - </span><span class="text-bold-600">Brooklyn</span> ethical sartorial gastropub shabby
                                                    chic photo booth. Bushwick roof party kogi pitchfork food truck heirloom, street art occupy blog try-hard
                                                    single-origin coffee chillwave.</p>
                                            </div>
                                        </li>

                                        <li class="row">
                                            <p class="lead mb-0 col-12"><a href="search-videos.html#"><span class="text-bold-600">Helicopter</span> - view drop-dead date</a></p>
                                            <div class="col-md-3 col-sm-12">
                                                <iframe class="border-0" width="150" height="80"
                                                        src="https://www.youtube.com/embed/AVWPWYYIcpk?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <p class="mb-0"><a href="search-videos.html#" class="teal darken-1">http://demo.helicopter.com/<span
                                                                class="text-bold-600">date</span>/ <i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                                                <ul class="list-inline list-inline-pipe text-muted">
                                                    <li>By Python</li>
                                                    <li>150 Views</li>
                                                    <li>Jan 23, 2017</li>
                                                </ul>
                                                <p><span class="text-muted">Sept 18, 2017 - </span> Sacred cow execute pig in a python. We need to socialize the comms with the
                                                    wider stakeholder community collaboration through advanced technlogy three-martini lunch.</p>
                                            </div>
                                        </li>

                                        <li class="row">
                                            <p class="lead mb-0 col-12"><a href="search-videos.html#">Letterpress <span class="text-bold-600">freegan</span>, mlkshk literally</a>
                                            </p>
                                            <div class="col-md-3 col-sm-12">
                                                <iframe class="border-0" width="150" height="80"
                                                        src="https://www.youtube.com/embed/SzCgp-FEU50?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <p class="mb-0"><a href="search-videos.html#" class="teal darken-1">http://envato.com/literally/<span
                                                                class="text-bold-600">modern</span>/ <i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
                                                <ul class="list-inline list-inline-pipe text-muted">
                                                    <li>By XOXO</li>
                                                    <li>12 Views</li>
                                                    <li>Jan 2, 2017</li>
                                                </ul>
                                                <p><span class="text-muted">June 30, 2017 - </span><span class="text-bold-600">Letterpress</span> mixtape tumblr small batch, marfa
                                                    blog mumblecore retro sustainable bitters normcore brunch whatever helvetica. <span
                                                            class="text-bold-600">Humblebrag mumblecore </span>beard
                                                    irony, XOXO craft beer kogi letterpress freegan vegan disrupt...</p>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="text-center">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination pagination-separate pagination-round pagination-flat">
                                                <li class="page-item">
                                                    <a class="page-link" href="search-videos.html#" aria-label="Previous">
                                                        <span aria-hidden="true">« Prev</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="search-videos.html#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="search-videos.html#">2</a></li>
                                                <li class="page-item active"><a class="page-link" href="search-videos.html#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="search-videos.html#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="search-videos.html#">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="search-videos.html#" aria-label="Next">
                                                        <span aria-hidden="true">Next »</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card border-grey border-lighten-2">
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Fusce interdum</h4>
                                            <h6 class="card-subtitle text-muted">Vivamus eros urna scelerisque</h6>
                                        </div>
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="border-0" src="https://www.youtube.com/embed/cUd8GtQvvsw?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                        </div>
                                        <div class="card-body px-0">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.<a
                                                        href="search-videos.html#">Wikipedia</a></p>
                                            <ul class="list-group">
                                                <li class="list-group-item"><strong>By :</strong> Jhon doe</li>
                                                <li class="list-group-item"><strong>Views :</strong> 11M Views</li>
                                                <li class="list-group-item"><strong>Released :</strong> 16 Jan, 2017</li>
                                            </ul>
                                            <div class="py-1 text-center">
                                                <a href="search-videos.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                                <a href="search-videos.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                                <a href="search-videos.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
                                                            class="fa fa-linkedin font-medium-4"></span></a>
                                                <a href="search-videos.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
                                                            class="fa fa-github-square font-medium-4"></span></a>
                                            </div>
                                        </div>
                                        <div class="card-body px-0">
                                            <p class="text-bold-600">Related videos</p>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="border-0" src="https://www.youtube.com/embed/tr7AcjcE0BQ?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                                    </div>
                                                    <a href="search-videos.html#" class="font-small-2">Xbox One S</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="border-0" src="https://www.youtube.com/embed/f7_4QoZwH54?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                                    </div>
                                                    <a href="search-videos.html#" class="font-small-2">google I/O</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="border-0" src="https://www.youtube.com/embed/szkFREXvYW4?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                                    </div>
                                                    <a href="search-videos.html#" class="font-small-2">Windows 10 </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="border-0" src="https://www.youtube.com/embed/gH-XNZRN4J8?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                                    </div>
                                                    <a href="search-videos.html#" class="font-small-2">Galaxy S7</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="border-0" src="https://www.youtube.com/embed/RcrLLooXgSY?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                                    </div>
                                                    <a href="search-videos.html#" class="font-small-2">VanMoof </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="border-0" src="https://www.youtube.com/embed/Gy8-uhr-EzE?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                                    </div>
                                                    <a href="search-videos.html#" class="font-small-2">OnePlus 3 </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Search Result -->
                </div>
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
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')

@endsection
