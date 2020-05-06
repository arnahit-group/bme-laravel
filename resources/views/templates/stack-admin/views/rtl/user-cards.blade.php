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
                    <h3 class="content-header-title mb-0">User Cards</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="user-cards.html#">Users</a>
                                </li>
                                <li class="breadcrumb-item active">User Cards
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
            <div class="content-body"><!-- Simple User Cards -->
                <section id="simple-user-cards" class="row">
                    <div class="col-12">
                        <h4 class="text-uppercase">Simple User Cards</h4>
                        <p>A very basic simple user cards.</p>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-4.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Michelle Howard</h4>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-1.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Joseph Ryan</h4>
                                    <h6 class="card-subtitle text-muted">Marketing Head</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-6.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Frances Butler</h4>
                                    <h6 class="card-subtitle text-muted">Technical Lead</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-5.png')}}"
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Andrew Davis</h4>
                                    <h6 class="card-subtitle text-muted">UI/UX Designer</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Simple User Cards -->
                <!-- Simple User Cards with Border-->
                <section id="simple-user-cards-with-border" class="row mt-2">
                    <div class="col-12">
                        <h4 class="text-uppercase">Simple User Cards with Border</h4>
                        <p>Use color pallet border class <code>border-color</code>, <code>border-lighten-*</code>.</p>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card border-teal border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-4.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Michelle Howard</h4>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card border-pink border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-1.png')}}"
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Joseph Ryan</h4>
                                    <h6 class="card-subtitle text-muted">Marketing Head</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card border-blue border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-6.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Frances Butler</h4>
                                    <h6 class="card-subtitle text-muted">Technical Lead</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card border-amber border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-5.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Andrew Davis</h4>
                                    <h6 class="card-subtitle text-muted">UI/UX Designer</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Simple User Cards with Border-->
                <!-- Simple User Cards with Shadow-->
                <section id="user-cards-with-square-thumbnail" class="row mt-2">
                    <div class="col-12">
                        <h4 class="text-uppercase">Simple User Cards with Square Thumbnail</h4>
                        <p>Use shadow helper class <code>box-shadow-*</code> to add show in cards.</p>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card box-shadow-1">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-4.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Michelle Howard</h4>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card box-shadow-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-1.png')}}"
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Joseph Ryan</h4>
                                    <h6 class="card-subtitle text-muted">Marketing Head</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card box-shadow-3">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-6.png')}}"
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Frances Butler</h4>
                                    <h6 class="card-subtitle text-muted">Technical Lead</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card box-shadow-4">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-5.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Andrew Davis</h4>
                                    <h6 class="card-subtitle text-muted">UI/UX Designer</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Simple User Card with Border-->
                <!-- User Profile Cards -->
                <section id="user-profile-cards" class="row mt-2">
                    <div class="col-12">
                        <h4 class="text-uppercase">User Profile Cards</h4>
                        <p>User profile cards with border & shadow variant.</p>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-4.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Frances Butler</h4>
                                    <h6 class="card-subtitle text-muted">Technical Lead</h6>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-danger mr-1"><i class="fa fa-plus"></i> Follow</button>
                                    <button type="button" class="btn btn-primary mr-1"><i class="ft-user"></i> Profile</button>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="user-cards.html#" class="list-group-item"><i class="fa fa-briefcase"></i> Overview</a>
                                <a href="user-cards.html#" class="list-group-item"><i class="ft-mail"></i> Email</a>
                                <a href="user-cards.html#" class="list-group-item"><i class="ft-check-square"></i> Task</a>
                                <a href="user-cards.html#" class="list-group-item"> <i class="ft-message-square"></i> Calender</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card border-teal border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-5.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Andrew Davis</h4>
                                    <h6 class="card-subtitle text-muted">UI/UX Designer</h6>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-danger mr-1"><i class="fa fa-plus"></i> Follow</button>
                                    <button type="button" class="btn btn-primary mr-1"><i class="ft-user"></i> Profile</button>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="user-cards.html#" class="list-group-item"><i class="fa fa-briefcase"></i> Overview</a>
                                <a href="user-cards.html#" class="list-group-item"><i class="ft-mail"></i> Email</a>
                                <a href="user-cards.html#" class="list-group-item"><i class="ft-check-square"></i> Task</a>
                                <a href="user-cards.html#" class="list-group-item"> <i class="ft-message-square"></i> Calender</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card box-shadow-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-6.png')}}" 
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Michelle Howard</h4>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-danger mr-1"><i class="fa fa-plus"></i> Follow</button>
                                    <button type="button" class="btn btn-primary mr-1"><i class="ft-user"></i> Profile</button>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="user-cards.html#" class="list-group-item"><i class="fa fa-briefcase"></i> Overview</a>
                                <a href="user-cards.html#" class="list-group-item"><i class="ft-mail"></i> Email</a>
                                <a href="user-cards.html#" class="list-group-item"><i class="ft-check-square"></i> Task</a>
                                <a href="user-cards.html#" class="list-group-item"> <i class="ft-message-square"></i> Calender</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ User Profile Cards -->
                <!-- User Profile Cards with Stats -->
                <section id="user-profile-cards-with-stats" class="row mt-2">
                    <div class="col-12">
                        <h4 class="text-uppercase">User Profile Cards with Stats</h4>
                        <p>User profile cards with Stats in border & shadow variant.</p>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card profile-card-with-stats">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-8.png')}}"
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Linda Holland</h4>
                                    <ul class="list-inline list-inline-pipe">
                                        <li>@lindah</li>
                                        <li>domain.com</li>
                                    </ul>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="btn-group" role="group" aria-label="Profile example">
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info"><span class="ladda-label"><i class="fa fa-bell-o"></i><span>12+</span></span><span
                                                class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info"><span class="ladda-label"><i class="fa fa-heart-o"></i><span>25</span></span><span
                                                class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info"><span class="ladda-label"><i
                                                    class="fa fa-briefcase"></i><span>5</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info"><span class="ladda-label"><i
                                                    class="ft-mail"></i><span>75+</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info"><span class="ladda-label"><i
                                                    class="fa fa-dashcube"></i><span>125</span></span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, autem imperdiet et nam. Nullam labores id quo, sed ei.</p>
                                    <button type="button" class="btn btn-outline-danger btn-md mr-1"><i class="fa fa-plus"></i> Follow</button>
                                    <button type="button" class="btn btn-outline-primary btn-md mr-1"><i class="ft-user"></i> Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card profile-card-with-stats border-teal border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-7.png')}}"
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Philip Garrett</h4>
                                    <ul class="list-inline list-inline-pipe">
                                        <li>@philipg</li>
                                        <li>domain.com</li>
                                    </ul>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="btn-group" role="group" aria-label="Profile example">
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-round"><span class="ladda-label"><i class="fa fa-bell-o"></i><span>12+</span></span><span
                                                class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-round"><span class="ladda-label"><i
                                                    class="fa fa-heart-o"></i><span>25</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-round"><span class="ladda-label"><i
                                                    class="fa fa-briefcase"></i><span>5</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-round"><span class="ladda-label"><i
                                                    class="ft-mail"></i><span>75+</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-round"><span class="ladda-label"><i
                                                    class="fa fa-dashcube"></i><span>125</span></span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, autem imperdiet et nam. Nullam labores id quo, sed ei.</p>
                                    <button type="button" class="btn btn-outline-danger btn-md btn-round mr-1"><i class="fa fa-plus"></i> Follow</button>
                                    <button type="button" class="btn btn-outline-primary btn-md btn-round mr-1"><i class="ft-user"></i> Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card profile-card-with-stats box-shadow-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img src="{{asset('admin-assets/images/portrait/medium/avatar-m-10.png')}}"
                                         class="rounded-circle  height-150" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Christine Wood</h4>
                                    <ul class="list-inline list-inline-pipe">
                                        <li>@christine</li>
                                        <li>domain.com</li>
                                    </ul>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="btn-group" role="group" aria-label="Profile example">
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-square"><span class="ladda-label"><i
                                                    class="fa fa-bell-o"></i><span>12+</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-square"><span class="ladda-label"><i
                                                    class="fa fa-heart-o"></i><span>25</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-square"><span class="ladda-label"><i
                                                    class="fa fa-briefcase"></i><span>5</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-square"><span class="ladda-label"><i
                                                    class="ft-mail"></i><span>75+</span></span><span class="ladda-spinner"></span></button>
                                    <button type="button" class="btn btn-float box-shadow-0 btn-outline-info btn-square"><span class="ladda-label"><i
                                                    class="fa fa-dashcube"></i><span>125</span></span><span class="ladda-spinner"></span></button>
                                </div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, autem imperdiet et nam. Nullam labores id quo, sed ei.</p>
                                    <button type="button" class="btn btn-outline-danger btn-md btn-square mr-1"><i class="fa fa-plus"></i> Follow</button>
                                    <button type="button" class="btn btn-outline-primary btn-md btn-square mr-1"><i class="ft-user"></i> Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- User Profile Cards with Stats -->
                <!-- User Profile Cards with Cover Image -->
                <section id="user-profile-cards-with-cover-image" class="row mt-2">
                    <div class="col-12">
                        <h4 class="text-uppercase">User Profile Cards with Cover Image</h4>
                        <p>User profile cards with Cover Image in border & shadow variant.</p>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card profile-card-with-cover">
                            <!--<img class="card-img-top img-fluid" src="{{asset('admin-assets/images/carousel/18.jpg" alt="Card cover image')}}">-->
                            <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../admin-assets/images/carousel/18.jpg');"></div>
                            <div class="card-profile-image">
                                <img src="{{asset('admin-assets/images/portrait/small/avatar-s-4.png')}}" 
                                     class="rounded-circle img-border box-shadow-1" alt="Card image">
                            </div>
                            <div class="profile-card-with-cover-content text-center">
                                <div class="card-body">
                                    <h4 class="card-title">Linda Holland</h4>
                                    <ul class="list-inline list-inline-pipe">
                                        <li>@lindah</li>
                                        <li>domain.com</li>
                                    </ul>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-github"><span class="fa fa-github font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card profile-card-with-cover border-teal border-lighten-2">
                            <!--<img class="card-img-top img-fluid" src="{{asset('admin-assets/images/carousel/16.jpg" alt="Card cover image')}}">-->
                            <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../admin-assets/images/carousel/16.jpg');"></div>
                            <div class="card-profile-image">
                                <img src="{{asset('admin-assets/images/portrait/small/avatar-s-9.png')}}" 
                                     class="rounded-circle img-border" alt="Card image">
                            </div>
                            <div class="profile-card-with-cover-content text-center">
                                <div class="card-body">
                                    <h4 class="card-title">Philip Garrett</h4>
                                    <ul class="list-inline list-inline-pipe">
                                        <li>@philip</li>
                                        <li>domain.com</li>
                                    </ul>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-github"><span class="fa fa-github font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card profile-card-with-cover box-shadow-2">
                            <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../admin-assets/images/carousel/17.jpg');"></div>
                            <div class="card-profile-image">
                                <img src="{{asset('admin-assets/images/portrait/small/avatar-s-8.png')}}"
                                     class="rounded-circle img-border box-shadow-4" alt="Card image">
                            </div>
                            <div class="profile-card-with-cover-content text-center">
                                <div class="card-body">
                                    <h4 class="card-title">Christine Wood</h4>
                                    <ul class="list-inline list-inline-pipe">
                                        <li>@christine</li>
                                        <li>domain.com</li>
                                    </ul>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                </div>
                                <div class="text-center">
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                    <a href="user-cards.html#" class="btn btn-social-icon mb-1 btn-outline-github"><span class="fa fa-github font-medium-4"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ User Profile Cards with Cover Image -->

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
