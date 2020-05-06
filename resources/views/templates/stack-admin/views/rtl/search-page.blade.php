<!DOCTYPE html>
<html class="loading" data-textdirection="rtl" lang="en">
    <!-- BEGIN: Head-->
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" name="viewport">
        <meta content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." name="description">
        <meta content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app" name="keywords">
        <meta content="PIXINVENT" name="author">
        <title>Search Page - Stack Responsive Bootstrap 4 Admin Template</title>
        <link href="{{asset('admin-assets/images/ico/apple-icon-120.png')}}" 
              rel="apple-touch-icon">
        <link href="{{asset('admin-assets/images/ico/favicon.ico')}}" 
              rel="shortcut icon" type="image/x-icon">
        <link href="../../../../fonts.googleapis.com/css.css" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}"
              rel="stylesheet" type="text/css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link href="{{asset('admin-assets/css-rtl/bootstrap.min.css')}}" 
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/bootstrap-extended.min.css')}}"
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/colors.min.css')}}"
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/components.min.css')}}"
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/custom-rtl.min.css')}}"
              rel="stylesheet" type="text/css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}"
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}"
              rel="stylesheet" type="text/css">
        <link href="{{asset('admin-assets/css-rtl/pages/search.min.css')}}"
              rel="stylesheet" type="text/css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link href="../../../assets/css/style-rtl.css" rel="stylesheet" type="text/css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern 1-column   fixed-navbar" data-col="1-column" data-menu="vertical-menu-modern" data-open="click">

        <!-- BEGIN: Header-->
        <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="search-page.html#"><i
                                class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item"><a class="navbar-brand" href="index.html"><img alt="stack admin logo" class="brand-logo"
                                                                                            src="{{asset('admin-assets/images/logo/stack-logo-light.png')}}">
                            <h2 class="brand-text">Stack</h2></a></li>
                        <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-target="#navbar-mobile" data-toggle="collapse"><i
                                class="fa fa-ellipsis-v"></i></a></li>
                    </ul>
                </div>
                <div class="navbar-container">
                    <div class="collapse navbar-toggleable-sm justify-content-end" id="navbar-mobile">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="index.html"><i class="ficon ft-arrow-left"></i></a></li>
                            <li class="dropdown nav-item"><a class="nav-link mr-2 nav-link-label" data-toggle="dropdown" href="search-page.html#"><i class="ficon ft-settings"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="row full-height-vh-with-nav">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="col-lg-6 col-10">
                                <img alt="Stack Search" class="img-fluid mx-auto d-block pb-3 pt-4 width-65-per" src="{{asset('admin-assets/images/logo/stack-logo-dark-big.png')}}">
                                <fieldset class="form-group position-relative">
                                    <input class="form-control form-control-xl input-xl" id="iconLeft1" placeholder="Explore Stack ..." type="text">
                                    <div class="form-control-position">
                                        <i class="ft-mic font-medium-4"></i>
                                    </div>
                                </fieldset>
                                <div class="row py-2">
                                    <div class="col-12 text-center">
                                        <a class="btn btn-primary btn-md" href="search-website.html"><i class="ft-search"></i> Stack Search</a>
                                        <div class="btn-group mr-1">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-warning btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                    type="button"><i class="fa fa-cog"></i> Advanced search
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="search-website.html"><i class="ft-globe"></i> Web</a>
                                                <a class="dropdown-item" href="search-images.html"><i class="fa fa-file-image-o"></i> Images</a>
                                                <a class="dropdown-item" href="search-videos.html"><i class="ft-video"></i> Videos</a>
                                                <a class="dropdown-item" href="search-page.html#"><i class="fa fa-map-o"></i> Maps</a>
                                                <span class="dropdown-divider block"></span>
                                                <a class="dropdown-item" href="search-page.html#"><i class="fa fa-smile-o"></i> I'm Feeling Lucky</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-12 text-center">
                                        <a class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook" href="search-page.html#"><span class="fa fa-facebook"></span></a>
                                        <a class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter" href="search-page.html#"><span class="fa fa-twitter"></span></a>
                                        <a class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin" href="search-page.html#"><span
                                                class="fa fa-linkedin font-medium-4"></span></a>
                                        <a class="btn btn-social-icon mr-1 mb-1 btn-outline-github" href="search-page.html#"><span class="fa fa-github font-medium-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Customizer-->
        <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="search-page.html#"><i
                class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-danger" href="search-page.html#"><i
                class="ft-settings font-medium-3 fa-spin fa fa-spin fa-fw white"></i></a>
            <div class="customizer-content p-2">
                <h4 class="text-uppercase mb-0">Theme Customizer</h4>
                <hr>
                <p>Customize & Preview in Real Time</p>

                <h5 class="mt-1 text-bold-500">Layout Options</h5>
                <ul class="nav nav-tabs nav-underline nav-justified layout-options">
                    <li class="nav-item">
                        <a aria-controls="tabIcon21-base" aria-expanded="true" class="nav-link layouts active" data-toggle="tab" href="search-page.html#tabIcon21-base"
                           id="baseIcon-tab21-base">Layouts</a>
                    </li>
                    <li class="nav-item">
                        <a aria-controls="tabIcon22-base" aria-expanded="false" class="nav-link navigation" data-toggle="tab" href="search-page.html#tabIcon22-base"
                           id="baseIcon-tab22-base">Navigation</a>
                    </li>
                    <li class="nav-item">
                        <a aria-controls="tabIcon23-base" aria-expanded="false" class="nav-link navbar" data-toggle="tab" href="search-page.html#tabIcon23-base"
                           id="baseIcon-tab23-base">Navbar</a>
                    </li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div aria-expanded="true" aria-labelledby="baseIcon-tab21-base" class="tab-pane active" id="tabIcon21-base" role="tabpanel">

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="collapsed-sidebar" name="collapsed-sidebar" type="checkbox">
                            <label class="custom-control-label" for="collapsed-sidebar">Collapsed Menu</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="fixed-layout" name="fixed-layout" type="checkbox">
                            <label class="custom-control-label" for="fixed-layout">Fixed Layout</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="boxed-layout" name="boxed-layout" type="checkbox">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="static-layout" name="static-layout" type="checkbox">
                            <label class="custom-control-label" for="static-layout">Static Layout</label>
                        </div>

                    </div>
                    <div aria-labelledby="baseIcon-tab22-base" class="tab-pane" id="tabIcon22-base">

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="native-scroll" name="native-scroll" type="checkbox">
                            <label class="custom-control-label" for="native-scroll">Native Scroll</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="right-side-icons" name="right-side-icons" type="checkbox">
                            <label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="bordered-navigation" name="bordered-navigation" type="checkbox">
                            <label class="custom-control-label" for="bordered-navigation">Bordered Navigation</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="flipped-navigation" name="flipped-navigation" type="checkbox">
                            <label class="custom-control-label" for="flipped-navigation">Flipped Navigation</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="collapsible-navigation" name="collapsible-navigation" type="checkbox">
                            <label class="custom-control-label" for="collapsible-navigation">Collapsible Navigation</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="static-navigation" name="static-navigation" type="checkbox">
                            <label class="custom-control-label" for="static-navigation">Static Navigation</label>
                        </div>

                    </div>
                    <div aria-labelledby="baseIcon-tab23-base" class="tab-pane" id="tabIcon23-base">

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="brand-center" name="brand-center" type="checkbox">
                            <label class="custom-control-label" for="brand-center">Brand Center</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-1">
                            <input class="custom-control-input" id="navbar-static-top" name="navbar-static-top" type="checkbox">
                            <label class="custom-control-label" for="navbar-static-top">Static Top</label>
                        </div>

                    </div>
                </div>

                <hr>

                <h5 class="mt-1 text-bold-500">Navigation Color Options</h5>
                <ul class="nav nav-tabs nav-underline nav-justified color-options">
                    <li class="nav-item">
                        <a aria-controls="clrOpt1" aria-expanded="false" class="nav-link nav-semi-light active" data-toggle="tab" href="search-page.html#clrOpt1" id="color-opt-1">Semi
                            Light</a>
                    </li>
                    <li class="nav-item">
                        <a aria-controls="clrOpt2" aria-expanded="false" class="nav-link nav-semi-dark" data-toggle="tab" href="search-page.html#clrOpt2" id="color-opt-2">Semi
                            Dark</a>
                    </li>
                    <li class="nav-item">
                        <a aria-controls="clrOpt3" aria-expanded="false" class="nav-link nav-dark" data-toggle="tab" href="search-page.html#clrOpt3" id="color-opt-3">Dark</a>
                    </li>
                    <li class="nav-item">
                        <a aria-controls="clrOpt4" aria-expanded="true" class="nav-link nav-light" data-toggle="tab" href="search-page.html#clrOpt4" id="color-opt-4">Light</a>
                    </li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div aria-expanded="true" aria-labelledby="color-opt-1" class="tab-pane active" id="clrOpt1" role="tabpanel">
                        <div class="row">
                            <div class="col-6">
                                <h6>Solid</h6>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="default-solid" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="default-solid">Default</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-primary" data-bg="bg-primary" id="primary-solid" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="primary-solid">Primary</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-danger" data-bg="bg-danger" id="danger-solid" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="danger-solid">Danger</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-success" data-bg="bg-success" id="success-solid" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="success-solid">Success</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-blue" data-bg="bg-blue" id="blue" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="blue">Blue</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-cyan" data-bg="bg-cyan" id="cyan" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="cyan">Cyan</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-pink" data-bg="bg-pink" id="pink" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="pink">Pink</label>
                                </div>

                            </div>
                            <div class="col-6">
                                <h6>Gradient</h6>

                                <div class="custom-control custom-radio mb-1">
                                    <input checked class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue" name="nav-slight-clr"
                                           type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-grey-blue">Default</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-primary">Primary</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-danger">Danger</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-success">Success</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-blue">Blue</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-cyan">Cyan</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink" name="nav-slight-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-pink">Pink</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div aria-labelledby="color-opt-2" class="tab-pane" id="clrOpt2">

                        <div class="custom-control custom-radio mb-1">
                            <input checked class="custom-control-input bg-default" data-bg="bg-default" id="opt-default" name="nav-sdark-clr" type="radio">
                            <label class="custom-control-label" for="opt-default">Default</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-primary" data-bg="bg-primary" id="opt-primary" name="nav-sdark-clr" type="radio">
                            <label class="custom-control-label" for="opt-primary">Primary</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-danger" data-bg="bg-danger" id="opt-danger" name="nav-sdark-clr" type="radio">
                            <label class="custom-control-label" for="opt-danger">Danger</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-success" data-bg="bg-success" id="opt-success" name="nav-sdark-clr" type="radio">
                            <label class="custom-control-label" for="opt-success">Success</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-blue" data-bg="bg-blue" id="opt-blue" name="nav-sdark-clr" type="radio">
                            <label class="custom-control-label" for="opt-blue">Blue</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-cyan" data-bg="bg-cyan" id="opt-cyan" name="nav-sdark-clr" type="radio">
                            <label class="custom-control-label" for="opt-cyan">Cyan</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-pink" data-bg="bg-pink" id="opt-pink" name="nav-sdark-clr" type="radio">
                            <label class="custom-control-label" for="opt-pink">Pink</label>
                        </div>

                    </div>
                    <div aria-labelledby="color-opt-3" class="tab-pane" id="clrOpt3">
                        <div class="row">
                            <div class="col-6">
                                <h3>Solid</h3>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="solid-blue-grey" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="solid-blue-grey">Default</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-primary" data-bg="bg-primary" id="solid-primary" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="solid-primary">Primary</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-danger" data-bg="bg-danger" id="solid-danger" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="solid-danger">Danger</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-success" data-bg="bg-success" id="solid-success" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="solid-success">Success</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-blue" data-bg="bg-blue" id="solid-blue" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="solid-blue">Blue</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-cyan" data-bg="bg-cyan" id="solid-cyan" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="solid-cyan">Cyan</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-pink" data-bg="bg-pink" id="solid-pink" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="solid-pink">Pink</label>
                                </div>

                            </div>

                            <div class="col-6">
                                <h3>Gradient</h3>

                                <div class="custom-control custom-radio mb-1">
                                    <input class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue1" name="nav-dark-clr"
                                           type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-grey-blue1">Default</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input checked class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary1" name="nav-dark-clr"
                                           type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-primary1">Primary</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input checked class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger1" name="nav-dark-clr"
                                           type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-danger1">Danger</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input checked class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success1" name="nav-dark-clr"
                                           type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-success1">Success</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input checked class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue1" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-blue1">Blue</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input checked class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan1" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-cyan1">Cyan</label>
                                </div>

                                <div class="custom-control custom-radio mb-1">
                                    <input checked class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink1" name="nav-dark-clr" type="radio">
                                    <label class="custom-control-label" for="bg-gradient-x-pink1">Pink</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div aria-labelledby="color-opt-4" class="tab-pane" id="clrOpt4">

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey bg-lighten-4" id="light-blue-grey" name="nav-light-clr" type="radio">
                            <label class="custom-control-label" for="light-blue-grey">Default</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-primary" data-bg="bg-primary bg-lighten-4" id="light-primary" name="nav-light-clr" type="radio">
                            <label class="custom-control-label" for="light-primary">Primary</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-danger" data-bg="bg-danger bg-lighten-4" id="light-danger" name="nav-light-clr" type="radio">
                            <label class="custom-control-label" for="light-danger">Danger</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-success" data-bg="bg-success bg-lighten-4" id="light-success" name="nav-light-clr" type="radio">
                            <label class="custom-control-label" for="light-success">Success</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-blue" data-bg="bg-blue bg-lighten-4" id="light-blue" name="nav-light-clr" type="radio">
                            <label class="custom-control-label" for="light-blue">Blue</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-cyan" data-bg="bg-cyan bg-lighten-4" id="light-cyan" name="nav-light-clr" type="radio">
                            <label class="custom-control-label" for="light-cyan">Cyan</label>
                        </div>

                        <div class="custom-control custom-radio mb-1">
                            <input class="custom-control-input bg-pink" data-bg="bg-pink bg-lighten-4" id="light-pink" name="nav-light-clr" type="radio">
                            <label class="custom-control-label" for="light-pink">Pink</label>
                        </div>

                    </div>
                </div>

                <hr>

                <h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
                <div class="form-group">
                    <!-- Outline Button group -->
                    <div aria-label="Basic example" class="btn-group customizer-sidebar-options" role="group">
                        <button class="btn btn-outline-info" data-sidebar="menu-light" type="button">Light Menu</button>
                        <button class="btn btn-outline-info" data-sidebar="menu-dark" type="button">Dark Menu</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Customizer-->

        <!-- Buynow Button-->
        <div class="buy-now"><a class="btn bg-gradient-directional-purple white btn-purple btn-glow px-2" href="https://goo.gl/nJZ5V1" target="_blank">Buy Now</a></div>
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer fixed-bottom footer-dark navbar-border">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2019 <a
                    class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT 			</a></span><span
                    class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
        </footer>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="{{asset('admin-assets/vendors/js/vendors.min.js')}}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{asset('admin-assets/js/core/app-menu.min.js')}}"></script>
        <script src="{{asset('admin-assets/js/core/app.min.js')}}"></script>
        <script src="{{asset('admin-assets/js/scripts/customizer.min.js')}}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->
</html>