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
                    <h3 class="content-header-title mb-0">Pills</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-pills-component.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Pills
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
            <div class="content-body"><!-- Basic Pills start -->
                <section id="basic-pills">
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Pills</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Takes the basic nav pills from above and adds the <code>.nav-pills</code> class to generate a pilled interface. </p>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pill1" data-toggle="pill" href="component-pills-component.html#pill1" aria-expanded="true">Pill
                                                    1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill2" data-toggle="pill" href="component-pills-component.html#pill2" aria-expanded="false">Pill 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill3" data-toggle="pill" href="component-pills-component.html#pill3" aria-expanded="false">Pill 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="pill1" aria-expanded="true" aria-labelledby="base-pill1">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="pill2" aria-labelledby="base-pill2">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="pill3" aria-labelledby="base-pill3">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon
                                                    drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pills with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can activate a pill navigation by simply specifying <code>data-toggle="pill"</code> on an element.</p>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab" data-toggle="pill" href="component-pills-component.html#home" aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab" data-toggle="pill" href="component-pills-component.html#profile" aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown1-tab" href="component-pills-component.html#dropdown1" data-toggle="pill"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown2-tab" href="component-pills-component.html#dropdown2" data-toggle="pill"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab" data-toggle="pill" href="component-pills-component.html#about" aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="home" aria-labelledby="home-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups
                                                    marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Pills</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-pill-bordered</code> class to <code>.nav-pills</code> for bordered type pills. </p>
                                        <ul class="nav nav-pills nav-pill-bordered">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pill11" data-toggle="pill" href="component-pills-component.html#pill11" aria-expanded="true">Pill
                                                    1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill12" data-toggle="pill" href="component-pills-component.html#pill12" aria-expanded="false">Pill
                                                    2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill13" data-toggle="pill" href="component-pills-component.html#pill13" aria-expanded="false">Pill
                                                    3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="pill11" aria-expanded="true" aria-labelledby="base-pill11">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="pill12" aria-labelledby="base-pill12">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="pill13" aria-labelledby="base-pill13">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon
                                                    drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Pills with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-pill-bordered</code> class to <code>.nav-pills</code> for bordered type pills. </p>
                                        <ul class="nav nav-pills nav-pill-bordered">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home1-tab" data-toggle="pill" href="component-pills-component.html#home1" aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile1-tab" data-toggle="pill" href="component-pills-component.html#profile1"
                                                   aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown11-tab" href="component-pills-component.html#dropdown11" data-toggle="pill"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown12-tab" href="component-pills-component.html#dropdown12" data-toggle="pill"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about1-tab" data-toggle="pill" href="component-pills-component.html#about1" aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="home1" aria-labelledby="home1-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active" id="profile1" role="tabpanel" aria-labelledby="profile1-tab" aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown11" role="tabpanel" aria-labelledby="dropdown11-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown12" role="tabpanel" aria-labelledby="dropdown12-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about1" role="tabpanel" aria-labelledby="about1-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups
                                                    marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Pills with Active Border</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-pill-with-active-bordered</code> class to <code>.nav-pills</code> for bordered type pills. </p>
                                        <ul class="nav nav-pills nav-pill-with-active-bordered">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pill21" data-toggle="pill" href="component-pills-component.html#pill21" aria-expanded="true">Pill
                                                    1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill22" data-toggle="pill" href="component-pills-component.html#pill22" aria-expanded="false">Pill
                                                    2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill23" data-toggle="pill" href="component-pills-component.html#pill23" aria-expanded="false">Pill
                                                    3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="pill21" aria-expanded="true" aria-labelledby="base-pill21">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="pill22" aria-labelledby="base-pill22">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="pill23" aria-labelledby="base-pill23">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon
                                                    drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Pills with active border and dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-pill-with-active-bordered</code> class to <code>.nav-pills</code> for bordered type pills. </p>
                                        <ul class="nav nav-pills nav-pill-with-active-bordered">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home2-tab" data-toggle="pill" href="component-pills-component.html#home2" aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile2-tab" data-toggle="pill" href="component-pills-component.html#profile2"
                                                   aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown21-tab" href="component-pills-component.html#dropdown21" data-toggle="pill"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown22-tab" href="component-pills-component.html#dropdown22" data-toggle="pill"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about2-tab" data-toggle="pill" href="component-pills-component.html#about2" aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="home2" aria-labelledby="home2-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active" id="profile2" role="tabpanel" aria-labelledby="profile2-tab" aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown21" role="tabpanel" aria-labelledby="dropdown21-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown22" role="tabpanel" aria-labelledby="dropdown22-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about2" role="tabpanel" aria-labelledby="about2-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups
                                                    marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Active Border Pills</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-active-bordered-pill</code> class to <code>.nav-pills</code> for bordered type pills. </p>
                                        <ul class="nav nav-pills nav-active-bordered-pill">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pill31" data-toggle="pill" href="component-pills-component.html#pill31" aria-expanded="true">Pill
                                                    1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill32" data-toggle="pill" href="component-pills-component.html#pill32" aria-expanded="false">Pill
                                                    2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill33" data-toggle="pill" href="component-pills-component.html#pill33" aria-expanded="false">Pill
                                                    3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="pill31" aria-expanded="true" aria-labelledby="base-pill31">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="pill32" aria-labelledby="base-pill32">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="pill33" aria-labelledby="base-pill33">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon
                                                    drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Active Pills with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-active-bordered-pill</code> class to <code>.nav-pills</code> for bordered type pills. </p>
                                        <ul class="nav nav-pills nav-active-bordered-pill">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home3-tab" data-toggle="pill" href="component-pills-component.html#home3" aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile3-tab" data-toggle="pill" href="component-pills-component.html#profile3"
                                                   aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown31-tab" href="component-pills-component.html#dropdown31" data-toggle="pill"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown32-tab" href="component-pills-component.html#dropdown32" data-toggle="pill"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about3-tab" data-toggle="pill" href="component-pills-component.html#about3" aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="home3" aria-labelledby="home3-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active" id="profile3" role="tabpanel" aria-labelledby="profile3-tab" aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown31" role="tabpanel" aria-labelledby="dropdown31-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown32" role="tabpanel" aria-labelledby="dropdown32-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about3" role="tabpanel" aria-labelledby="about3-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups
                                                    marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Toolbar Pills</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-pill-toolbar</code> class to <code>.nav-pills</code> for bordered type pills. </p>
                                        <ul class="nav nav-pills nav-pill-toolbar">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pill41" data-toggle="pill" href="component-pills-component.html#pill41" aria-expanded="true">Pill
                                                    1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill42" data-toggle="pill" href="component-pills-component.html#pill42" aria-expanded="false">Pill
                                                    2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pill43" data-toggle="pill" href="component-pills-component.html#pill43" aria-expanded="false">Pill
                                                    3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="pill41" aria-expanded="true" aria-labelledby="base-pill41">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="pill42" aria-labelledby="base-pill42">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="pill43" aria-labelledby="base-pill43">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon
                                                    drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Toolbar Pills with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-pill-toolbar</code> class to <code>.nav-pills</code> for bordered type pills. </p>
                                        <ul class="nav nav-pills nav-pill-toolbar">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home4-tab" data-toggle="pill" href="component-pills-component.html#home4" aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile4-tab" data-toggle="pill" href="component-pills-component.html#profile4"
                                                   aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown41-tab" href="component-pills-component.html#dropdown41" data-toggle="pill"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown42-tab" href="component-pills-component.html#dropdown42" data-toggle="pill"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about4-tab" data-toggle="pill" href="component-pills-component.html#about4" aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="home4" aria-labelledby="home4-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active" id="profile4" role="tabpanel" aria-labelledby="profile4-tab" aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown41" role="tabpanel" aria-labelledby="dropdown41-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown42" role="tabpanel" aria-labelledby="dropdown42-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about4" role="tabpanel" aria-labelledby="about4-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups
                                                    marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Pills end -->

                <!-- Stacked Pills start -->
                <section id="stacked-pills">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Stacked Pills</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Stacked Pills</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.flex-column</code> class with <code>.nav.nav-pills</code> to stack them vertically. Each <code>.nav-link</code> becomes
                                            block-level, allowing for larger hit areas via mouse or tap. </p>
                                        <ul class="nav nav-pills flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pillOpt21" data-toggle="pill" href="component-pills-component.html#pillOpt21"
                                                   aria-expanded="true">Pill 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillOpt22" data-toggle="pill" href="component-pills-component.html#pillOpt22" aria-expanded="false">Pill
                                                    2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillOpt23" data-toggle="pill" href="component-pills-component.html#pillOpt23" aria-expanded="false">Pill
                                                    3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Stacked Pills with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.flex-column</code> class with <code>.nav.nav-pills</code> to stack them vertically. Each <code>.nav-link</code> becomes
                                            block-level, allowing for larger hit areas via mouse or tap. </p>
                                        <ul class="nav nav-pills flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="homeOpt21-tab" data-toggle="pill" href="component-pills-component.html#homeOpt21"
                                                   aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profileOpt21-tab" data-toggle="pill" href="component-pills-component.html#profileOpt21"
                                                   aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownOption21-tab" href="component-pills-component.html#dropdownOption21" data-toggle="pill"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownOption22-tab" href="component-pills-component.html#dropdownOption22" data-toggle="pill"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutOpt21-tab" data-toggle="pill" href="component-pills-component.html#aboutOpt21" aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Stacked Pills Toolbar</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-pill-toolbar</code> class to <code>.flex-column</code> for bordered type pills.</p>
                                        <ul class="nav nav-pills flex-column nav-pill-toolbar">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pillOpt31" data-toggle="pill" href="component-pills-component.html#pillOpt31"
                                                   aria-expanded="true">Pill 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillOpt32" data-toggle="pill" href="component-pills-component.html#pillOpt32" aria-expanded="false">Pill
                                                    2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillOpt33" data-toggle="pill" href="component-pills-component.html#pillOpt33" aria-expanded="false">Pill
                                                    3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Stacked Pills Toolbar with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-pills flex-column nav-pill-toolbar">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="homeOpt31-tab" data-toggle="pill" href="component-pills-component.html#homeOpt31"
                                                   aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profileOpt31-tab" data-toggle="pill" href="component-pills-component.html#profileOpt31"
                                                   aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownOption31-tab" href="component-pills-component.html#dropdownOption31" data-toggle="pill"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownOption32-tab" href="component-pills-component.html#dropdownOption32" data-toggle="pill"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutOpt31-tab" data-toggle="pill" href="component-pills-component.html#aboutOpt31" aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Stacked Pills end -->

                <!-- Pills Elements start -->
                <section id="pills-elements">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Pills Elements</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pills with Left Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use font icons before pill name to get pills with icon.</p>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pillEle1" data-toggle="pill" href="component-pills-component.html#pillEle1"
                                                   aria-expanded="true"><i class="fa fa-asterisk"></i> Pill 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillEle2" data-toggle="pill" href="component-pills-component.html#pillEle2" aria-expanded="false"><i
                                                            class="fa fa-bars"></i> Pill 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillEle3" data-toggle="pill" href="component-pills-component.html#pillEle3" aria-expanded="false"><i
                                                            class="fa fa-refresh"></i> Pill 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-ban"></i> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active show" id="pillEle1" aria-expanded="true" aria-labelledby="base-pillEle1">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="pillEle2" aria-labelledby="base-pillEle2">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="pillEle3" aria-labelledby="base-pillEle3">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon
                                                    drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pills with dropdown &amp; Left Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use font icons before pill name to get pills with icon.</p>
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeEle-tab" data-toggle="pill" href="component-pills-component.html#homeEle" aria-expanded="true"><i
                                                            class="fa fa-home"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileEle-tab" data-toggle="pill" href="component-pills-component.html#profileEle"
                                                   aria-expanded="false"><i class="fa fa-user"></i> Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fa fa-bars"></i> Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownEle1-tab" href="component-pills-component.html#dropdownEle1" data-toggle="pill"
                                                       aria-expanded="true"><i class="fa fa-fighter-jet"></i> @fat</a>
                                                    <a class="dropdown-item" id="dropdownEle2-tab" href="component-pills-component.html#dropdownEle2" data-toggle="pill"
                                                       aria-expanded="true"><i class="fa fa-fighter-jet"></i> @mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutEle-tab" data-toggle="pill" href="component-pills-component.html#aboutEle" aria-expanded="false"><i
                                                            class="fa fa-envelope"></i> About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="homeEle" aria-labelledby="homeEle-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active show" id="profileEle" role="tabpanel" aria-labelledby="profileEle-tab" aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownEle1" role="tabpanel" aria-labelledby="dropdownEle1-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownEle2" role="tabpanel" aria-labelledby="dropdownEle2-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutEle" role="tabpanel" aria-labelledby="aboutEle-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups
                                                    marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pills with Right Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use font icons with <code>.float-right</code> class to get pills with right icon.</p>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pillEle11" data-toggle="pill" href="component-pills-component.html#pillEle11"
                                                   aria-expanded="true"><i class="float-right fa fa-asterisk"></i> Pill 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillEle12" data-toggle="pill" href="component-pills-component.html#pillEle12" aria-expanded="false"><i
                                                            class="float-right fa fa-bars"></i> Pill 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillEle13" data-toggle="pill" href="component-pills-component.html#pillEle13" aria-expanded="false"><i
                                                            class="float-right fa fa-refresh"></i> Pill 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="float-right fa fa-ban"></i> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active show" id="pillEle11" aria-expanded="true" aria-labelledby="base-pillEle11">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="pillEle12" aria-labelledby="base-pillEle12">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="pillEle13" aria-labelledby="base-pillEle13">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon
                                                    drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pills with dropdown &amp; Right Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use font icons with <code>.float-right</code> class to get pills with right icon.</p>
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeEle1-tab" data-toggle="pill" href="component-pills-component.html#homeEle1" aria-expanded="true"><i
                                                            class="float-right fa fa-home"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileEle1-tab" data-toggle="pill" href="component-pills-component.html#profileEle1"
                                                   aria-expanded="false"><i class="float-right fa fa-user"></i> Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="float-right fa fa-bars"></i> Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownEle11-tab" href="component-pills-component.html#dropdownEle11" data-toggle="pill"
                                                       aria-expanded="true"><i class="float-right fa fa-fighter-jet"></i> @fat</a>
                                                    <a class="dropdown-item" id="dropdownEle12-tab" href="component-pills-component.html#dropdownEle12" data-toggle="pill"
                                                       aria-expanded="true"><i class="float-right fa fa-fighter-jet"></i> @mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutEle1-tab" data-toggle="pill" href="component-pills-component.html#aboutEle1" aria-expanded="false"><i
                                                            class="float-right fa fa-envelope"></i> About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="homeEle1" aria-labelledby="homeEle1-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active show" id="profileEle1" role="tabpanel" aria-labelledby="profileEle1-tab" aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownEle11" role="tabpanel" aria-labelledby="dropdownEle11-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownEle12" role="tabpanel" aria-labelledby="dropdownEle12-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutEle1" role="tabpanel" aria-labelledby="aboutEle1-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups
                                                    marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pills with Only Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use font icons as pill name to get Icon pills.</p>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-pillEle21" data-toggle="pill" href="component-pills-component.html#pillEle21"
                                                   aria-expanded="true"><i class="fa fa-asterisk"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillEle22" data-toggle="pill" href="component-pills-component.html#pillEle22" aria-expanded="false"><i
                                                            class="fa fa-bars"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-pillEle23" data-toggle="pill" href="component-pills-component.html#pillEle23" aria-expanded="false"><i
                                                            class="fa fa-refresh"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-ban"></i></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active show" id="pillEle21" aria-expanded="true" aria-labelledby="base-pillEle21">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="pillEle22" aria-labelledby="base-pillEle22">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="pillEle23" aria-labelledby="base-pillEle23">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon
                                                    drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pills with dropdown &amp; Left Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use font icons as pill name to get only Icon pills.</p>
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeEle2-tab" data-toggle="pill" href="component-pills-component.html#homeEle2" aria-expanded="true"><i
                                                            class="fa fa-home"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileEle2-tab" data-toggle="pill" href="component-pills-component.html#profileEle2"
                                                   aria-expanded="false"><i class="fa fa-user"></i></a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-pills-component.html#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownEle21-tab" href="component-pills-component.html#dropdownEle21" data-toggle="pill"
                                                       aria-expanded="true"><i class="fa fa-fighter-jet"></i> @fat</a>
                                                    <a class="dropdown-item" id="dropdownEle22-tab" href="component-pills-component.html#dropdownEle22" data-toggle="pill"
                                                       aria-expanded="true"><i class="fa fa-fighter-jet"></i> @mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutEle2-tab" data-toggle="pill" href="component-pills-component.html#aboutEle2" aria-expanded="false"><i
                                                            class="fa fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="homeEle2" aria-labelledby="homeEle2-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active show" id="profileEle2" role="tabpanel" aria-labelledby="profileEle2-tab" aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownEle21" role="tabpanel" aria-labelledby="dropdownEle21-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownEle22" role="tabpanel" aria-labelledby="dropdownEle22-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutEle2" role="tabpanel" aria-labelledby="aboutEle2-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups
                                                    marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pills Elements end -->
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

