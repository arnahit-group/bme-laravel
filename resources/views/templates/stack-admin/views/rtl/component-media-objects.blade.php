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
                    <h3 class="content-header-title mb-0">Media Objects</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-media-objects.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Media Objects
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
            <div class="content-body"><!-- Default Media Object start -->
                <section id="basic-media-object">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Default Media Object</h4>
                            <p>The default media allow to float a media object (images, video, audio) to the left or right of a content block.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Aligned Media Objects</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-3.png" alt="Generic placeholder image')}}"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Cookie candy</h4>
                                                    Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie lemon drops
                                                    chocolate cake donut croissant cotton candy.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-6.png')}}" 
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tootsie roll dessert </h4>
                                                    Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit icing
                                                    pastry tootsie roll gingerbread croissant chupa chups.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-13.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lemon drops ice cream</h4>
                                                    Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy sweet cake.
                                                    Tiramisu cookie toffee donut.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Media With Right Text</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-10.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Oat cake </h4>
                                                    Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut. Chocolate
                                                    pie croissant gummi bears muffin dessert chocolate.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-7.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Jelly chocolate cake</h4>
                                                    Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly beans
                                                    cake chocolate cake gummi bears lollipop.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-2.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Pudding marshmallow</h4>
                                                    Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops brownie
                                                    biscuit jelly-o biscuit gummies.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Aligned Media Objects</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading">Chocolate sweet</h4>
                                                    Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie lemon drops
                                                    chocolate cake donut croissant cotton candy.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading">Sugar plum jelly</h4>
                                                    Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit icing
                                                    pastry tootsie roll gingerbread croissant chupa chups.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-16.png')}}" 
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading">Gingerbread sugar</h4>
                                                    Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy sweet cake.
                                                    Tiramisu cookie toffee donut.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-6.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Media With Right Text</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list">
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Chupa chups candy</h4>
                                                    Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut. Chocolate
                                                    pie croissant gummi bears muffin dessert chocolate.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-5.png')}}" 
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Chocolate pudding</h4>
                                                    Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly beans
                                                    cake chocolate cake gummi bears lollipop.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-11.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Cotton candy jelly</h4>
                                                    Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops brownie
                                                    biscuit jelly-o biscuit gummies.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-20.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Default Media Object end -->


                <!-- Bordered Media Object start -->
                <section id="bordered-media-object">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Bordered Media Object</h4>
                            <p>Wrap media list using <code>.media-bordered</code> class for bordered Media Object.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Aligned Media Bordered</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-23.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Cookie candy</h4>
                                                    Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie lemon drops
                                                    chocolate cake donut croissant cotton candy.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-16.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tootsie roll dessert </h4>
                                                    Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit icing
                                                    pastry tootsie roll gingerbread croissant chupa chups.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-15.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lemon drops ice cream</h4>
                                                    Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy sweet cake.
                                                    Tiramisu cookie toffee donut.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Media</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Chupa chups candy</h4>
                                                    Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut. Chocolate
                                                    pie croissant gummi bears muffin dessert chocolate.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-9.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Chocolate pudding</h4>
                                                    Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly beans
                                                    cake chocolate cake gummi bears lollipop.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-14.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Cotton candy jelly</h4>
                                                    Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops brownie
                                                    biscuit jelly-o biscuit gummies.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-21.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bordered Media Object end -->


                <!-- Round Media Object start -->
                <section id="round-media-object">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Round Media Object</h4>
                            <p>Add <code>.rounded-circle</code> class to image for round media object.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Round Media Objects</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-3.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Cookie candy</h4>
                                                    Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie lemon drops
                                                    chocolate cake donut croissant cotton candy.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-6.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tootsie roll dessert </h4>
                                                    Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit icing
                                                    pastry tootsie roll gingerbread croissant chupa chups.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-13.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lemon drops ice cream</h4>
                                                    Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy sweet cake.
                                                    Tiramisu cookie toffee donut.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Round Media</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list">
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Oat cake </h4>
                                                    Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut. Chocolate
                                                    pie croissant gummi bears muffin dessert chocolate.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-10.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Jelly chocolate cake</h4>
                                                    Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly beans
                                                    cake chocolate cake gummi bears lollipop.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-7.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Pudding marshmallow</h4>
                                                    Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops brownie
                                                    biscuit jelly-o biscuit gummies.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-2.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Round Media Object end -->


                <!-- Bordered Round Media Object start -->
                <section id="bordered-round-media-object">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Bordered Round Media Object</h4>
                            <p>Wrap media list using <code>.media-bordered</code> class for bordered Media Object.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Round Media Objects</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-13.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Cookie candy</h4>
                                                    Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie lemon drops
                                                    chocolate cake donut croissant cotton candy.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-16.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tootsie roll dessert </h4>
                                                    Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit icing
                                                    pastry tootsie roll gingerbread croissant chupa chups.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-22.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lemon drops ice cream</h4>
                                                    Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy sweet cake.
                                                    Tiramisu cookie toffee donut.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Round Media With Right Align</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Oat cake </h4>
                                                    Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut. Chocolate
                                                    pie croissant gummi bears muffin dessert chocolate.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-17.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Jelly chocolate cake</h4>
                                                    Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly beans
                                                    cake chocolate cake gummi bears lollipop.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-2.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Pudding marshmallow</h4>
                                                    Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops brownie
                                                    biscuit jelly-o biscuit gummies.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-7.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bordered Round Media Object end -->


                <!-- Nested Media List start -->
                <section id="nested-media-list">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Nested Media List</h4>
                            <p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Media Aligned Left</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-19.png')}}"
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Cotton candy </h5>
                                                    Cookie caramels brownie carrot cake macaroon brownie pastry. Donut powder croissant tootsie roll cake cupcake. Cake tart icing
                                                    jelly-o ice cream tootsie roll bear claw toffee brownie.
                                                    <div class="media mt-1">
                                                        <a class="media-left" href="component-media-objects.html#">
                                                            <img src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png')}}"
                                                                 alt="Generic placeholder image"
                                                                 style="width: 64px;height: 64px;"/>
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">Chupa chups cookie</h5>
                                                            Dragée topping chocolate dragée icing gingerbread. Ice cream jujubes pie sweet roll sweet roll marshmallow powder.
                                                            Cotton candy dessert apple pie chocolate cake dessert lemon drops topping
                                                            <div class="media mt-1">
                                                                <a class="media-left" href="component-media-objects.html#">
                                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-16.png')}}"
                                                                         alt="Generic placeholder image"
                                                                         style="width: 64px;height: 64px;"/>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h5 class="media-heading">Marshmallow cake</h5>
                                                                    Sweet sesame snaps dragée chocolate tiramisu cotton candy sweet roll bonbon dessert. Chocolate cake tiramisu
                                                                    dragée. Carrot cake pudding marshmallow gingerbread powder liquorice.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-9.png')}}" 
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Fruitcake soufflé</h5>
                                                    Brownie jujubes caramels candy canes soufflé chocolate cake. Sesame snaps chocolate bar donut topping cake halvah chocolate bar
                                                    pie. Jelly jelly-o brownie jujubes pastry pastry gummies.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Aligned Media</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h5 class="media-heading">Bonbon sweet roll</h5>
                                                    Gummi bears marshmallow sweet roll. Chocolate bar halvah candy tart tart chocolate tart muffin. Cheesecake chocolate bar gummi
                                                    bears. Cookie topping chocolate biscuit jujubes.
                                                    <div class="media mt-1">
                                                        <div class="media-body text-right">
                                                            <h5 class="media-heading">Sweet roll tootsie</h5>
                                                            Tart brownie gummi bears pie cheesecake cake. Tootsie roll lemon drops oat cake muffin danish halvah cookie chocolate
                                                            croissant. Apple pie oat cake liquorice sesame snaps. Jelly-o dragée topping.
                                                            <div class="media mt-1">
                                                                <div class="media-body text-right">
                                                                    <h5 class="media-heading">Pie marzipan </h5>
                                                                    Ice cream lemon drops marshmallow sweet carrot cake marshmallow candy macaroon cupcake. Tart carrot cake
                                                                    fruitcake. Marzipan liquorice gummies oat cake. Donut cupcake caramels pastry.
                                                                </div>
                                                                <a class="media-right" href="component-media-objects.html#">
                                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-13.png')}}"
                                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a class="media-right" href="component-media-objects.html#">
                                                            <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-25.png')}}"
                                                                 alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-21.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h5 class="media-heading">Cupcake bonbon</h5>
                                                    Fruitcake donut chocolate bar. Jelly beans cake cotton candy cotton candy jelly beans bonbon halvah. Marzipan lemon drops oat
                                                    cake candy canes jelly cake powder sweet roll.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-8.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Nested Media List end -->


                <!-- Media Alignment start -->
                <section id="media-alignment">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Media Alignment</h4>
                            <p>The images or other media can be aligned top, middle, or bottom. The default is top aligned.</p>
                            <p>For left align, use class <code>.mr-3</code>, For Right align, use class <code>.media-right</code>.</p>
                            <p>Now, for vertical align, Top is default alignment. For Middle alignment, use <code>.align-self-center</code> and For Bottom alignment, use <code>.align-self-end</code>
                                with left or right aligned class.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Media Aligned Left</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <a class="align-self-start media-left" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-4.png')}}" 
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Top Aligned Media</h5>
                                                    Chocolate bar apple pie lollipop pastry candy canes. Candy soufflé brownie toffee tootsie roll. Brownie lemon drops chocolate
                                                    cake donut croissant cotton candy ice cream. <br>
                                                    Chocolate pudding jelly beans powder carrot cake pastry. Sweet candy dragée cake brownie cheesecake jelly beans tart lemon
                                                    drops. Liquorice cake fruitcake dragée sesame snaps candy canes biscuit pastry. <br>
                                                    Cookie caramels brownie carrot cake macaroon brownie pastry. Donut powder croissant tootsie roll cake cupcake. Cake tart icing
                                                    jelly-o ice cream tootsie roll bear claw toffee brownie. Sugar plum danish muffin gummi bears.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left align-self-center" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png')}}" 
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Middle Aligned Media</h5>
                                                    Dragée topping chocolate dragée icing gingerbread. Ice cream jujubes pie sweet roll sweet roll marshmallow powder. Cotton candy
                                                    dessert apple pie chocolate cake dessert lemon drops topping gingerbread biscuit. <br>
                                                    Sugar plum tootsie roll sweet gummi bears soufflé cake gummies lollipop jelly beans. Gummies sugar plum apple pie apple pie cake
                                                    bear claw. Jelly beans gingerbread biscuit lollipop. <br>
                                                    Topping halvah wafer croissant jelly tootsie roll. Candy jujubes gummi bears sweet roll dessert. Apple pie jelly gummies
                                                    tiramisu macaroon tiramisu oat cake. Apple pie tiramisu cake chocolate cake topping danish sweet apple pie sugar plum.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left align-self-end" href="component-media-objects.html#">
                                                    <img src="{{asset('admin-assets/images/portrait/small/avatar-s-16.png')}}" 
                                                         alt="Generic placeholder image"
                                                         style="width: 64px;height: 64px;"/>
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Bottom Aligned Media</h5>
                                                    Sweet sesame snaps dragée chocolate tiramisu cotton candy sweet roll bonbon dessert. Chocolate cake tiramisu dragée. Carrot cake
                                                    pudding marshmallow fruitcake carrot cake. <br>
                                                    Cotton candy pastry chocolate bar. Apple pie sesame snaps macaroon muffin cookie toffee bonbon gummies candy canes. Soufflé
                                                    chocolate bar soufflé tart fruitcake muffin. Macaroon sweet roll apple pie jelly beans powder pudding. <br>
                                                    Brownie cupcake bonbon sweet lemon drops. Lollipop danish jelly beans cotton candy marshmallow brownie. Brownie pastry tiramisu
                                                    candy oat cake tiramisu halvah cookie tart. Cotton candy danish gingerbread powder liquorice.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Aligned Media</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
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
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h5 class="media-heading">Top Aligned Media</h5>
                                                    Gummi bears marshmallow sweet roll. Chocolate bar halvah candy tart tart chocolate tart muffin. Cheesecake chocolate bar gummi
                                                    bears. Cookie topping chocolate biscuit jujubes. <br>
                                                    Cheesecake muffin danish candy chocolate sweet roll candy jelly powder. Chocolate marzipan dragée. Biscuit oat cake jelly beans
                                                    brownie donut ice cream biscuit. Soufflé soufflé dessert cotton candy chupa chups lemon drops. <br>
                                                    Tiramisu jujubes powder jujubes pie cheesecake liquorice lollipop lollipop. Cheesecake muffin liquorice. Soufflé caramels
                                                    cupcake. Dessert cake chocolate bar gummi bears marshmallow bonbon halvah cake.
                                                </div>
                                                <a class="media-right" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-12.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h5 class="media-heading">Middle Aligned Media</h5>
                                                    Powder jelly topping pastry chocolate icing bonbon powder. Lollipop brownie sugar plum sugar plum carrot cake donut. Pastry
                                                    sugar plum apple pie sesame snaps. <br>
                                                    Tart brownie gummi bears pie cheesecake cake. Tootsie roll lemon drops oat cake muffin danish halvah cookie chocolate croissant.
                                                    Apple pie oat cake liquorice sesame snaps. Jelly-o jelly-o dragée topping. Sugar plum danish muffin gummi bears.<br>
                                                    Biscuit halvah tiramisu tiramisu. Chocolate lemon drops cake halvah gingerbread topping. Oat cake gummies cheesecake halvah
                                                    marshmallow jelly beans apple pie gingerbread. Dessert cookie chocolate cake.
                                                </div>
                                                <a class="media-right align-self-center" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-11.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right">
                                                    <h5 class="media-heading">Bottom Aligned Media</h5>
                                                    Ice cream lemon drops marshmallow sweet carrot cake marshmallow candy macaroon cupcake. Tart carrot cake fruitcake. Marzipan
                                                    liquorice gummies oat cake. <br>
                                                    Danish jelly beans dessert sweet roll chupa chups candy canes gummies jujubes soufflé. Cheesecake sweet roll candy muffin halvah
                                                    dessert candy soufflé. Donut cupcake caramels pastry.Candy carrot cake liquorice chocolate bar gummi bears brownie donut. <br>
                                                    Bonbon sweet roll croissant candy canes sesame snaps chocolate cake jujubes cookie. Caramels gummi bears fruitcake jelly beans
                                                    gummies candy canes. Sugar plum fruitcake tootsie roll pastry chupa chups. Marshmallow marshmallow carrot cake gingerbread tart
                                                    tootsie roll macaroon cookie topping.
                                                </div>
                                                <a class="media-right align-self-end" href="component-media-objects.html#">
                                                    <img class="media-object rounded-circle" src="{{asset('admin-assets/images/portrait/small/avatar-s-24.png')}}"
                                                         alt="Generic placeholder image" style="width: 64px;height: 64px;"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Media Alignment end -->
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

