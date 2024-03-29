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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-callout.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-callout.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Callout</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-callout.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Callout
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
            <div class="content-body"><!-- Basic Callouts start -->
                <section id="basic-callouts">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Callouts</h4>
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
                                        <p>Use <code>.bs-callout-COLOR</code> for default callout.</p>
                                        <div class="bs-callout-primary callout-border-left p-1">
                                            <strong>Good Morning!</strong>
                                            <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                        </div>
                                        <div class="bs-callout-success callout-border-left mt-1 p-1">
                                            <strong>Congratulations!</strong>
                                            <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu carrot
                                                cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                        </div>
                                        <div class="bs-callout-danger callout-border-left mt-1 p-1">
                                            <strong>Not Bad!</strong>
                                            <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps. Pie
                                                carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                        </div>
                                        <div class="bs-callout-info callout-border-left mt-1 p-1">
                                            <strong>Great Job!</strong>
                                            <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes brownie. Pie
                                                cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                        </div>
                                        <div class="bs-callout-warning callout-border-left mt-1 p-1">
                                            <strong>Are You Sure?</strong>
                                            <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake chocolate cake
                                                wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                        </div>
                                        <div class="bs-callout-pink callout-border-left mt-1 p-1">
                                            <strong>Super cool!!</strong>
                                            <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Callouts end -->
                <!-- Right Bordered Callouts start -->
                <section id="right-bordered-callouts">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Bordered Callouts</h4>
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
                                        <p>Use <code>.callout-right</code> for right bordered callout.</p>
                                        <div class="bs-callout-primary callout-border-right p-1">
                                            <strong>Good Morning!</strong>
                                            <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                        </div>
                                        <div class="bs-callout-success callout-border-right mt-1 p-1">
                                            <strong>Congratulations!</strong>
                                            <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu carrot
                                                cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                        </div>
                                        <div class="bs-callout-danger callout-border-right mt-1 p-1">
                                            <strong>Not Bad!</strong>
                                            <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps. Pie
                                                carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                        </div>
                                        <div class="bs-callout-info callout-border-right mt-1 p-1">
                                            <strong>Great Job!</strong>
                                            <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes brownie. Pie
                                                cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                        </div>
                                        <div class="bs-callout-warning callout-border-right mt-1 p-1">
                                            <strong>Are You Sure?</strong>
                                            <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake chocolate cake
                                                wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                        </div>
                                        <div class="bs-callout-blue-grey callout-border-right mt-1 p-1">
                                            <strong>Super cool!!</strong>
                                            <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Right Bordered Callouts end -->
                <!-- Callout with Transparent Background start -->
                <section id="transparent-callouts">
                    <div class="row">
                        <div class="col-12 mt-1">
                            <h4>Callout with Transparent Background</h4>
                            <p>Use <code>.callout-transparent</code> for callout with transparent background.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Callouts</h4>
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
                                        <div class="bs-callout-primary callout-border-left callout-transparent p-1">
                                            <h4 class="primary">Good Morning!</h4>
                                            <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                        </div>
                                        <div class="bs-callout-success callout-border-left callout-transparent mt-1 p-1">
                                            <h4 class="success">Congratulations!</h4>
                                            <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu carrot
                                                cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                        </div>
                                        <div class="bs-callout-danger callout-border-left callout-transparent mt-1 p-1">
                                            <h4 class="danger">Not Bad!</h4>
                                            <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps. Pie
                                                carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                        </div>
                                        <div class="bs-callout-info callout-border-left callout-transparent mt-1 p-1">
                                            <h4 class="info">Great Job!</h4>
                                            <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes brownie. Pie
                                                cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                        </div>
                                        <div class="bs-callout-warning callout-border-left callout-transparent mt-1 p-1">
                                            <h4 class="warning">Are You Sure?</h4>
                                            <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake chocolate cake
                                                wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                        </div>
                                        <div class="bs-callout-pink callout-border-left callout-transparent mt-1 p-1">
                                            <h4 class="pink">Super cool!</h4>
                                            <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Callout with Transparent Background end -->
                <!-- Right Bordered Transparent Callouts start -->
                <section id="right-bordered-transparent-callouts">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Bordered Callouts</h4>
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
                                        <div class="bs-callout-primary callout-border-right callout-transparent text-right callout-right p-1">
                                            <h4 class="primary">Good Morning!</h4>
                                            <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                        </div>
                                        <div class="bs-callout-success callout-border-right callout-transparent text-right callout-right mt-1 p-1">
                                            <h4 class="success">Congratulations!</h4>
                                            <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu carrot
                                                cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                        </div>
                                        <div class="bs-callout-danger callout-border-right callout-transparent text-right callout-right mt-1 p-1">
                                            <h4 class="danger">Not Bad!</h4>
                                            <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps. Pie
                                                carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                        </div>
                                        <div class="bs-callout-info callout-border-right callout-transparent text-right callout-right mt-1 p-1">
                                            <h4 class="info">Great Job!</h4>
                                            <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes brownie. Pie
                                                cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                        </div>
                                        <div class="bs-callout-warning callout-border-right callout-transparent text-right callout-right mt-1 p-1">
                                            <h4 class="warning">Are You Sure?</h4>
                                            <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake chocolate cake
                                                wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                        </div>
                                        <div class="bs-callout-blue-grey callout-border-right callout-transparent text-right callout-right mt-1 p-1">
                                            <h4 class="brown">Super cool!</h4>
                                            <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Right Bordered Transparent Callouts end -->
                <!-- Bordered Callout start -->
                <section id="bordered-callouts">
                    <div class="row">
                        <div class="col-12 mt-1">
                            <h4>Bordered Callout</h4>
                            <p>Use <code>.callout-bordered</code> for callout with border.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Callouts with Bordered</h4>
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
                                        <div class="bs-callout-primary callout-border-left callout-bordered p-1">
                                            <h4 class="primary">Good Morning!</h4>
                                            <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                        </div>
                                        <div class="bs-callout-success callout-border-left callout-bordered mt-1 p-1">
                                            <h4 class="success">Congratulations!</h4>
                                            <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu carrot
                                                cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                        </div>
                                        <div class="bs-callout-danger callout-border-left callout-bordered mt-1 p-1">
                                            <h4 class="danger">Not Bad!</h4>
                                            <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps. Pie
                                                carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                        </div>
                                        <div class="bs-callout-info callout-border-left callout-bordered mt-1 p-1">
                                            <h4 class="info">Great Job!</h4>
                                            <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes brownie. Pie
                                                cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                        </div>
                                        <div class="bs-callout-warning callout-border-left callout-bordered mt-1 p-1">
                                            <h4 class="warning">Are You Sure?</h4>
                                            <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake chocolate cake
                                                wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                        </div>
                                        <div class="bs-callout-pink callout-border-left callout-bordered mt-1 p-1">
                                            <h4 class="pink">Super cool!</h4>
                                            <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bordered Callout end -->
                <!-- Right Bordered Transparent background start -->
                <section id="right-bordered-transparent-background-callouts">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Bordered Callouts With Bordered and Transparent background</h4>
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
                                        <div class="bs-callout-primary callout-border-right callout-bordered callout-transparent p-1">
                                            <h4 class="primary">Good Morning!</h4>
                                            <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                        </div>
                                        <div class="bs-callout-success callout-border-right callout-bordered callout-transparent mt-1 p-1">
                                            <h4 class="success">Congratulations!</h4>
                                            <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu carrot
                                                cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                        </div>
                                        <div class="bs-callout-danger callout-border-right callout-bordered callout-transparent mt-1 p-1">
                                            <h4 class="danger">Not Bad!</h4>
                                            <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps. Pie
                                                carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                        </div>
                                        <div class="bs-callout-info callout-border-right callout-bordered callout-transparent mt-1 p-1">
                                            <h4 class="info">Great Job!</h4>
                                            <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes brownie. Pie
                                                cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                        </div>
                                        <div class="bs-callout-warning callout-border-right callout-bordered callout-transparent mt-1 p-1">
                                            <h4 class="warning">Are You Sure?</h4>
                                            <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake chocolate cake
                                                wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                        </div>
                                        <div class="bs-callout-blue-grey callout-border-right callout-bordered callout-transparent mt-1 p-1">
                                            <h4 class="brown">Super cool!</h4>
                                            <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Right Bordered Transparent background end -->
                <!-- Callout With Icon start -->
                <section id="callouts-with-icon">
                    <div class="row">
                        <div class="col-12 mt-1">
                            <h4>Callout With Icon</h4>
                            <p>Use class <code>.callout-icon</code> to use icon with callout.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Icon Callouts</h4>
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
                                        <div class="bs-callout-primary">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-primary p-2">
                                                    <i class="fa fa-sun-o white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Good Morning!</strong>
                                                    <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                        gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-success mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-success p-2">
                                                    <i class="fa fa-mixcloud white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Congratulations!</strong>
                                                    <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu
                                                        carrot cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-danger mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-danger p-2">
                                                    <i class="fa fa-snowflake-o  white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Not Bad!</strong>
                                                    <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps.
                                                        Pie carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-info mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Great Job!</strong>
                                                    <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes
                                                        brownie. Pie cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-info p-2">
                                                    <i class="fa fa-cloud white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-warning mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Are You Sure?</strong>
                                                    <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake
                                                        chocolate cake wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-warning p-2">
                                                    <i class="fa fa-headphones white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-pink mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Super cool!!</strong>
                                                    <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                        dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-pink p-2">
                                                    <i class="fa fa-slack white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Callout With Icon end -->
                <!-- Bordered Callout With Icon start -->
                <section id="bordered-callouts-with-icon">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered with Icons Callouts</h4>
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
                                        <p>Use <code>.callout-right</code> for right bordered callout.</p>
                                        <div class="bs-callout-primary callout-bordered">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-primary p-2">
                                                    <i class="fa fa-send-o fa-lg white"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Good Morning!</strong>
                                                    <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                        gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-success callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-success p-2">
                                                    <i class="fa fa-thumbs-o-up white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Congratulations!</strong>
                                                    <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu
                                                        carrot cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-danger callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-danger p-2">
                                                    <i class="fa fa-thumbs-o-down white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Not Bad!</strong>
                                                    <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps.
                                                        Pie carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-info callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Great Job!</strong>
                                                    <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes
                                                        brownie. Pie cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-info p-2">
                                                    <i class="fa fa-info white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-warning callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Are You Sure?</strong>
                                                    <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake
                                                        chocolate cake wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-warning p-2">
                                                    <i class="fa fa-warning white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-pink callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Super cool!!</strong>
                                                    <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                        dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-pink p-2">
                                                    <i class="fa fa-heart-o white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bordered Callout With Icon end -->
                <!-- Callout With Arrow start -->
                <section id="callouts-with-arrow">
                    <div class="row">
                        <div class="col-12 mt-1">
                            <h4>Callout With Arrow</h4>
                            <p>Use class <code>.callout-arrow</code> to use icon with callout.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Callouts with Arrow</h4>
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
                                        <div class="bs-callout-primary callout-transparent">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-primary position-relative callout-arrow-left p-2">
                                                    <i class="fa fa-send-o fa-lg white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Good Morning!</strong>
                                                    <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                        gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-success callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-success position-relative callout-arrow-left p-2">
                                                    <i class="fa fa-bell-o white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Congratulations!</strong>
                                                    <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu
                                                        carrot cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-danger callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-danger position-relative callout-arrow-left p-2">
                                                    <i class="fa fa-hand-o-right white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Not Bad!</strong>
                                                    <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps.
                                                        Pie carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-info callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Great Job!</strong>
                                                    <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes
                                                        brownie. Pie cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-info position-relative callout-arrow-right p-2">
                                                    <i class="fa fa-tasks white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-warning callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Are You Sure?</strong>
                                                    <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake
                                                        chocolate cake wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-warning position-relative callout-arrow-right p-2">
                                                    <i class="fa fa-link white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-pink callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Super cool!!</strong>
                                                    <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                        dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-pink position-relative callout-arrow-right p-2">
                                                    <i class="fa fa-flask white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Callout With Arrow end -->
                <!-- Bordered Callout With Arrow start -->
                <section id="bordered-callouts-with-arrow">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Callouts with Arrow</h4>
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
                                        <p>Use <code>.callout-arrow</code> for callout with right arrow.</p>
                                        <div class="bs-callout-primary callout-transparent callout-bordered">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-primary position-relative callout-arrow-left p-2">
                                                    <i class="fa fa-send-o fa-lg white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Good Morning!</strong>
                                                    <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                        gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-success callout-transparent callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-success position-relative callout-arrow-left p-2">
                                                    <i class="fa fa-bell-o white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Congratulations!</strong>
                                                    <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu
                                                        carrot cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-danger callout-transparent callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-danger position-relative callout-arrow-left p-2">
                                                    <i class="fa fa-hand-o-right white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Not Bad!</strong>
                                                    <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps.
                                                        Pie carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-info callout-transparent callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Great Job!</strong>
                                                    <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes
                                                        brownie. Pie cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-info position-relative callout-arrow-right p-2">
                                                    <i class="fa fa-tasks white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-warning callout-transparent callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Are You Sure?</strong>
                                                    <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake
                                                        chocolate cake wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-warning position-relative callout-arrow-right p-2">
                                                    <i class="fa fa-link white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-pink callout-transparent callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Super cool!!</strong>
                                                    <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                        dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-pink position-relative callout-arrow-right p-2">
                                                    <i class="fa fa-flask white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bordered Callout With Arrow end -->

                <!-- Square Callout start -->
                <section id="square-callout">
                    <div class="row">
                        <div class="col-12 mt-1">
                            <h4>Square Callout</h4>
                            <p>Use class <code>.callout-square</code> for Square callout.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square Callout</h4>
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
                                        <div class="bs-callout-primary callout-border-left callout-square p-1">
                                            <strong>Good Morning!</strong>
                                            <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                        </div>
                                        <div class="bs-callout-success callout-border-left callout-square callout-transparent mt-1 p-1">
                                            <strong>Congratulations!</strong>
                                            <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu carrot
                                                cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                        </div>
                                        <div class="bs-callout-danger callout-border-left callout-square callout-bordered callout-transparent mt-1 p-1">
                                            <strong>Not Bad!</strong>
                                            <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps. Pie
                                                carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                        </div>
                                        <div class="bs-callout-warning callout-square callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-warning p-2">
                                                    <i class="fa fa-database white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Are You Sure?</strong>
                                                    <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake
                                                        chocolate cake wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-info callout-square callout-bordered callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-info callout-arrow-left position-relative p-2">
                                                    <i class="fa fa-send-o white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Great Job!</strong>
                                                    <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes
                                                        brownie. Pie cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-pink callout-square callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="d-flex align-items-center bg-pink callout-arrow-left position-relative p-2">
                                                    <i class="fa fa-sliders white font-medium-5"></i>
                                                </div>
                                                <div class="media-body p-1">
                                                    <strong>Super cool!!</strong>
                                                    <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                        dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Square Callout end -->
                <!-- Square Right Callout start -->
                <section id="square-right-callout">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square Right Callout</h4>
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
                                        <div class="bs-callout-primary callout-border-right callout-square callout-right p-1">
                                            <strong>Good Morning!</strong>
                                            <p>Soufflé topping bear claw sugar plum gummies jelly. Carrot cake lemon drops gummies. Danish oat cake icing jelly icing cookie
                                                gingerbread jelly beans. Tiramisu sweet roll gummies cake carrot cake biscuit.</p>
                                        </div>
                                        <div class="bs-callout-success callout-border-right callout-square callout-right callout-transparent mt-1 p-1">
                                            <strong>Congratulations!</strong>
                                            <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet. Chocolate cake candy sweet macaroon sugar plum tiramisu carrot
                                                cake. Cupcake ice cream gummies. Sugar plum cupcake cotton candy jelly beans.</p>
                                        </div>
                                        <div class="bs-callout-danger callout-border-right callout-square callout-right callout-bordered callout-transparent mt-1 p-1">
                                            <strong>Not Bad!</strong>
                                            <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly. Halvah jelly beans dragée oat cake sesame snaps. Pie
                                                carrot cake liquorice. Chocolate marzipan chocolate gummi bears.</p>
                                        </div>
                                        <div class="bs-callout-warning callout-square callout-bordered mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Are You Sure?</strong>
                                                    <p>Gummies cupcake donut wafer jelly croissant topping toffee. Chocolate bar danish gummies macaroon bear claw oat cake
                                                        chocolate cake wafer cake. Cheesecake bear claw halvah tiramisu pudding cupcake pie.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-warning p-2">
                                                    <i class="fa fa-database white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-info callout-square callout-bordered callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Great Job!</strong>
                                                    <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice. Candy canes muffin gummies jujubes
                                                        brownie. Pie cake pie pastry sugar plum jelly apple pie cotton candy.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-info callout-arrow-right position-relative p-2">
                                                    <i class="fa fa-send-o white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-callout-pink callout-square callout-transparent mt-1">
                                            <div class="media align-items-stretch">
                                                <div class="media-body p-1">
                                                    <strong>Super cool!!</strong>
                                                    <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy gummi bears brownie sesame snaps lollipop bonbon marshmallow
                                                        dessert. Cake chupa chups candy canes powder ice cream tiramisu wafer. Chocolate cake ice cream pudding cake.</p>
                                                </div>
                                                <div class="d-flex align-items-center bg-pink callout-arrow-right position-relative p-2">
                                                    <i class="fa fa-sliders white font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Square Right Callout end -->

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


