@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')

    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-climacon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/simple-line-icons/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/meteocons/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/users.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-climacon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/simple-line-icons/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/meteocons/style.min.css')}}">
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
            </div>
            <div class="content-body"><!-- fitness target -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                                        <div class="my-1 text-center">
                                            <div class="card-header mb-2 pt-0">
                                                <h5 class="primary">Steps</h5>
                                                <h3 class="font-large-2 text-bold-200">3,261</h3>
                                            </div>
                                            <div class="card-content">
                                                <input type="text" value="65" class="knob hide-value responsive angle-offset" data-angleOffset="40" data-thickness=".15"
                                                       data-linecap="round" data-width="130" data-height="130" data-inputColor="#BABFC7" data-readOnly="true" data-fgColor="#00B5B8"
                                                       data-knob-icon="icon-trophy">
                                                <ul class="list-inline clearfix pt-1 mb-0">
                                                    <li class="border-right-grey border-right-lighten-2 pr-2">
                                                        <h2 class="grey darken-1 text-bold-400">65%</h2>
                                                        <span class="primary"><span class="ft-arrow-up"></span> Completed</span>
                                                    </li>
                                                    <li class="pl-2">
                                                        <h2 class="grey darken-1 text-bold-400">35%</h2>
                                                        <span class="danger"><span class="ft-arrow-down"></span> Remaining</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                                        <div class="my-1 text-center">
                                            <div class="card-header mb-2 pt-0">
                                                <h5 class="danger">Distance</h5>
                                                <h3 class="font-large-2 text-bold-200">7.6 <span class="font-medium-1 grey darken-1 text-bold-400">mile</span></h3>
                                            </div>
                                            <div class="card-content">
                                                <input type="text" value="70" class="knob hide-value responsive angle-offset" data-angleOffset="0" data-thickness=".15"
                                                       data-linecap="round" data-width="130" data-height="130" data-inputColor="#BABFC7" data-readOnly="true" data-fgColor="#FF7588"
                                                       data-knob-icon="icon-pointer">
                                                <ul class="list-inline clearfix pt-1 mb-0">
                                                    <li>
                                                        <h2 class="grey darken-1 text-bold-400">10</h2>
                                                        <span class="danger">Miles Today's Target</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                                        <div class="my-1 text-center">
                                            <div class="card-header mb-2 pt-0">
                                                <h5 class="warning">Calories</h5>
                                                <h3 class="font-large-2 text-bold-200">4,025 <span class="font-medium-1 grey darken-1 text-bold-400">kcal</span></h3>
                                            </div>
                                            <div class="card-content">
                                                <input type="text" value="81" class="knob hide-value responsive angle-offset" data-angleOffset="20" data-thickness=".15"
                                                       data-linecap="round" data-width="130" data-height="130" data-inputColor="#BABFC7" data-readOnly="true" data-fgColor="#FFA87D"
                                                       data-knob-icon="icon-energy">
                                                <ul class="list-inline clearfix pt-1 mb-0">
                                                    <li>
                                                        <h2 class="grey darken-1 text-bold-400">5000</h2>
                                                        <span class="warning">kcla Today's Target</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-12">
                                        <div class="my-1 text-center">
                                            <div class="card-header mb-2 pt-0">
                                                <h5 class="success">Heart Rate</h5>
                                                <h3 class="font-large-2 text-bold-200">102 <span class="font-medium-1 grey darken-1 text-bold-400">BPM</span></h3>
                                            </div>
                                            <div class="card-content">
                                                <input type="text" value="75" class="knob hide-value responsive angle-offset" data-angleOffset="20" data-thickness=".15"
                                                       data-linecap="round" data-width="130" data-height="130" data-inputColor="#BABFC7" data-readOnly="true" data-fgColor="#16D39A"
                                                       data-knob-icon="icon-heart">
                                                <ul class="list-inline clearfix pt-1 mb-0">
                                                    <li>
                                                        <h2 class="grey darken-1 text-bold-400">125</h2>
                                                        <span class="success">BPM Highest</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ fitness target -->
                <!-- activity charts -->
                <div class="row match-height">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header border-0-bottom">
                                <h4 class="card-title">Activity Chart <span class="text-muted text-bold-400">Weekly</span></h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="weekly-activity-chart" class="height-250"></div>
                                    <ul class="list-inline text-center m-0">
                                        <li>
                                            <h6><i class="ft-circle danger"></i> Runnig</h6>
                                        </li>
                                        <li class="ml-1">
                                            <h6><i class="ft-circle success"></i> Walking</h6>
                                        </li>
                                        <li class="ml-1">
                                            <h6><i class="ft-circle warning"></i> Cycling</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="activity-division" class="height-250 echart-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ activity charts -->
                <!--fitness stats-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix">
                                            <div class="media">
                                                <div class="media-left pr-1">
                                                    <img class="media-object img-xl" src="{{asset('admin-assets/images/portrait/small/avatar-s-5.png')}}" 
                                                         alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="text-bold-500 pt-1 mb-0">Running</h6>
                                                    <p>Walk - Run Training</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix">
                                            <p>Distance <span class="text-muted">(Last Week)</span></p>
                                            <div class="progress progress-sm mt-1 mb-0">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <h6 class="text-bold-500 mt-1 mb-0">80 KM</h6>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix py-2 text-center">
                                            <div id="fitness-stats"></div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-12 text-center clearfix">
                                            <h6 class="pt-1"><span class="icon-clock"></span> 56:55 Hrs</h6>
                                            <p>Anverage Running Time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fitness stats-->
                <!-- friends & weather charts -->
                <div class="row match-height">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Daily Diet</h4>
                                    <p class="card-text">Some quick example text to build on the card.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <span class="badge badge-pill bg-primary float-right">4</span> Protein Milk
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-pill bg-info float-right">2</span> oz Water
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-pill bg-danger float-right">8</span> Vegetable Juice
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-pill bg-warning float-right">1</span> Sugar Free Jello-O
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-pill bg-success float-right">3</span> Protein Meal
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <a href="dashboard-fitness.html#" class="card-link">Card link</a>
                                    <a href="dashboard-fitness.html#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-12">
                        <div class="card border-0 box-shadow-0">
                            <div class="card-content">
                                <div class="weather-date position-relative">
                                    <div class="date-info position-absolute bg-success bg-lighten-1 white p-1 text-center">
                                        <span class="date block">14</span>
                                        <span class="month">Nov</span>
                                    </div>
                                </div>
                                <div class="card-body bg-success bg-lighten-4">
                                    <ul class="list-inline text-right">
                                        <li><a data-action="reload"><i class="ft-rotate-cw font-medium-4 success"></i></a></li>
                                    </ul>
                                    <div class="animated-weather-icons text-center">
                                        <svg version="1.1" id="wind1" class="climacon climacon_wind climacon-success climacon-darken-2 height-200" viewBox="15 15 70 70">
                                            <g class="climacon_iconWrap climacon_iconWrap-wind">
                                                <g class="climacon_wrapperComponent climacon_componentWrap-wind">
                                                    <path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl"
                                                          d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z"/>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-wind"
                                                          d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="weather-details text-center">
                                        <span class="pt-2 block success darken-2">Windy</span>
                                        <span class="font-medium-4 text-bold-500 success darken-4">Beijing, China</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-success bg-darken-3 py-3 text-center border-0">
                                    <div class="row">
                                        <div class="col-4 text-center display-table-cell">
                                            <i class="me-wind font-large-1 white lighten-3 align-middle"></i> <span class="white align-middle">2MPH</span>
                                        </div>
                                        <div class="col-4 text-center display-table-cell">
                                            <i class="me-sun2 font-large-1 white lighten-3 align-middle"></i> <span class="white align-middle">2%</span>
                                        </div>
                                        <div class="col-4 text-center display-table-cell">
                                            <i class="me-thermometer font-large-1 white lighten-3 align-middle"></i> <span class="white align-middle">13.0&deg;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Friends</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div id="friends-activity" class="media-list height-400 position-relative">
                                    <a href="dashboard-fitness.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <img class="media-object avatar avatar-sm rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-7.png')}}"
                                                 alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body w-100">
                                            <h5 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-right">1,0215</span></h5>
                                            <p class="list-group-item-text mb-0"><span class="badge badge-success">Running</span><span
                                                        class="badge badge-warning ml-1">Cycling</span></p>
                                        </div>
                                    </a>
                                    <a href="dashboard-fitness.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <img class="media-object avatar avatar-sm rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-8.png')}}"
                                                 alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body w-100">
                                            <h5 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-right">2,0215</span></h5>
                                            <p class="list-group-item-text mb-0"><span class="badge badge-danger">Dancing</span> <span
                                                        class="badge badge-primary ml-1">Fitness</span></p>
                                        </div>
                                    </a>
                                    <a href="dashboard-fitness.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <img class="media-object avatar avatar-sm rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-9.png')}}"
                                                 alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body w-100">
                                            <h5 class="list-group-item-heading">Linda Olson <span class="font-medium-4 float-right">1,112</span></h5>
                                            <p class="list-group-item-text mb-0"><span class="badge badge-success">Running</span> <span
                                                        class="badge badge-warning ml-1">Cycling</span> <span class="tag bg-grey ml-1">Other</span></p>
                                        </div>
                                    </a>
                                    <a href="dashboard-fitness.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <img class="media-object avatar avatar-sm rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-10.png')}}"
                                                 alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body w-100">
                                            <h5 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-right">2,815</span></h5>
                                            <p class="list-group-item-text mb-0"><span class="badge badge-warning">Fitness</span> <span
                                                        class="badge badge-danger ml-1">Dancing</span></p>
                                        </div>
                                    </a>
                                    <a href="dashboard-fitness.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <img class="media-object avatar avatar-sm rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-11.png')}}"
                                                 alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body w-100">
                                            <h5 class="list-group-item-heading">Tammy Gonzales <span class="font-medium-4 float-right">3,226</span></h5>
                                            <p class="list-group-item-text mb-0"><span class="badge badge-danger">Dancing</span> <span
                                                        class="badge badge-success ml-1">Running</span></p>
                                        </div>
                                    </a>
                                    <a href="dashboard-fitness.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <img class="media-object avatar avatar-sm rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-12.png')}}"
                                                 alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body w-100">
                                            <h5 class="list-group-item-heading">Justin Hawkins <span class="font-medium-4 float-right">4,564</span></h5>
                                            <p class="list-group-item-text mb-0"><span class="badge badge-success">Running</span> <span
                                                        class="badge badge-primary ml-1">Fitness</span></p>
                                        </div>
                                    </a>
                                    <a href="dashboard-fitness.html#" class="media border-0">
                                        <div class="media-left pr-1">
                                            <img class="media-object avatar avatar-sm rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-10.png')}}"
                                                 alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body w-100">
                                            <h5 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-right">2,815</span></h5>
                                            <p class="list-group-item-text mb-0"><span class="badge badge-warning">Fitness</span> <span
                                                        class="badge badge-danger ml-1">Dancing</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- friends & weather charts -->
                <!-- Running Routes & Daily Activities  -->
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header border-0-bottom">
                                <h4 class="card-title">Running Routes</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="routes" class="height-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header border-0-bottom">
                                <h4 class="card-title">Daily Activity</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div id="daily-activity" class="table-responsive height-350">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" id="icheck-input-all" class="icheck-activity">
                                                </th>
                                                <th>Time</th>
                                                <th>Activity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input type="checkbox" id="icheck-input-1" class="icheck-activity" checked>
                                                </td>
                                                <td class="text-truncate">5.00 A.M</td>
                                                <td class="text-truncate">Bricks Walking</td>
                                                <td class="text-truncate"><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input type="checkbox" id="icheck-input-2" class="icheck-activity" checked>
                                                </td>
                                                <td class="text-truncate">5.30 A.M</td>
                                                <td class="text-truncate">Morning Exercise</td>
                                                <td class="text-truncate"><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input type="checkbox" id="icheck-input-3" class="icheck-activity">
                                                </td>
                                                <td class="text-truncate">6.30 A.M</td>
                                                <td class="text-truncate">Yoga</td>
                                                <td class="text-truncate"><span class="badge badge-danger">Missed</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input type="checkbox" id="icheck-input-4" class="icheck-activity" checked>
                                                </td>
                                                <td class="text-truncate">7.00 A.M</td>
                                                <td class="text-truncate">Gym</td>
                                                <td class="text-truncate"><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input type="checkbox" id="icheck-input-5" class="icheck-activity" checked>
                                                </td>
                                                <td class="text-truncate">8.00 A.M</td>
                                                <td class="text-truncate">Steam Bath</td>
                                                <td class="text-truncate"><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input type="checkbox" id="icheck-input-6" class="icheck-activity">
                                                </td>
                                                <td class="text-truncate">9.00 A.M</td>
                                                <td class="text-truncate">Meditation</td>
                                                <td class="text-truncate"><span class="badge badge-danger">Missed</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input type="checkbox" id="icheck-input-7" class="icheck-activity">
                                                </td>
                                                <td class="text-truncate">8.00 P.M</td>
                                                <td class="text-truncate">Bricks Walking</td>
                                                <td class="text-truncate"><span class="badge badge-warning">Delayed</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate">
                                                    <input type="checkbox" id="icheck-input-8" class="icheck-activity">
                                                </td>
                                                <td class="text-truncate">9.00 P.M</td>
                                                <td class="text-truncate">Exercise</td>
                                                <td class="text-truncate"><span class="badge badge-warning">Delayed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Running Routes & Daily Activities  -->
                <!-- fitness info & twitter, facebook -->
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                                <li data-target="#carousel-example" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('admin-assets/images/pages/fitness-slide-1.jpg')}}"
                                                         class="img-fluid" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/pages/fitness-slide-2.jpg')}}"
                                                         class="img-fluid" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('admin-assets/images/pages/fitness-slide-3.jpg')}}"
                                                         class="img-fluid" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="dashboard-fitness.html#carousel-example" role="button" data-slide="prev">
                                                <span class="icon-prev" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="dashboard-fitness.html#carousel-example" role="button" data-slide="next">
                                                <span class="icon-next" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Health News &amp; Fitness Advice</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="dashboard-fitness.html#" class="card-link">Card link</a>
                                            <a href="dashboard-fitness.html#" class="card-link">Another link</a>
                                        </div>
                                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted m-1">
                                            <span class="float-left">2 days ago</span>
                                            <span class="tags float-right">
                                <span class="badge badge-pill badge-primary">Branding</span>
                            <span class="badge badge-pill badge-danger">Design</span>
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card profile-card-with-cover">
                                    <div class="card-content">
                                        <div class="card-img-top img-fluid bg-cover height-200"
                                             style="background: url('../../../admin-assets/images/pages/fitness-profile.jpg') 0 40%;"></div>
                                        <div class="card-profile-image">
                                            <img src="{{asset('admin-assets/images/portrait/small/avatar-s-8.png')}}" 
                                                 class="rounded-circle img-border box-shadow-1" alt="Card image">
                                        </div>
                                        <div class="profile-card-with-cover-content text-center">
                                            <div class="my-2">
                                                <h4 class="card-title">Susan Garrett</h4>
                                                <ul class="list-inline clearfix pt-2">
                                                    <li class="pr-2">
                                                        <h2 class="block">-2.05 <span class="font-small-3 text-muted">KG</span></h2> Body Fat
                                                    </li>
                                                    <li class="pr-2">
                                                        <h2 class="block">52 <span class="font-small-3 text-muted">KG</span></h2> Target
                                                    </li>
                                                    <li>
                                                        <h2 class="block">-2.1 <span class="font-small-3 text-muted">KG</span></h2> Weight
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <a href="dashboard-fitness.html#" class="btn btn-social btn-min-width pr-1 mb-1 btn-linkedin"><span class="ft-plus"></span> <span
                                                            class="pl-1">Follow</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-12">
                                <div class="card bg-info white">
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
                            <div class="col-xl-12 col-lg-6 col-md-12">
                                <div class="card bg-success white">
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
                        </div>
                    </div>
                </div>
                <!--/ fitness info & twitter, facebook -->

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
    <script src="../../../../maps.googleapis.com/maps/api/js.JS"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/gmaps.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/extensions/jquery.knob.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/extensions/unslider-min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/echarts/echarts.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/pages/dashboard-fitness.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection

