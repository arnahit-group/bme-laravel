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
                    <h3 class="content-header-title mb-0">Tabs</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-tabs-component.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Tabs
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
            <div class="content-body"><!-- Basic tabs start -->
                <section id="basic-tabs-components">
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Tabs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface. </p>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="component-tabs-component.html#tab1"
                                                   role="tab" aria-selected="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="component-tabs-component.html#tab2" role="tab"
                                                   aria-selected="false">Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="component-tabs-component.html#tab3" role="tab"
                                                   aria-selected="false">Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tab1" role="tabpanel" aria-labelledby="base-tab1">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="base-tab2">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="base-tab3">
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
                                    <h4 class="card-title">Tabs with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can activate a tab navigation by simply specifying <code>data-toggle="tab"</code> on an element.</p>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab" data-toggle="tab" href="component-tabs-component.html#home" aria-controls="home" role="tab"
                                                   aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="component-tabs-component.html#profile" aria-controls="profile"
                                                   role="tab" aria-selected="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown1-tab" href="component-tabs-component.html#dropdown1" data-toggle="tab"
                                                       aria-controls="dropdown1" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown2-tab" href="component-tabs-component.html#dropdown2" data-toggle="tab"
                                                       aria-controls="dropdown2" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab" data-toggle="tab" href="component-tabs-component.html#about" aria-controls="about" role="tab"
                                                   aria-selected="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="home" aria-labelledby="home-tab" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown1" aria-labelledby="dropdown1-tab" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown2" aria-labelledby="dropdown2-tab" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
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
                                    <h4 class="card-title">Top Border Tabs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-top-border.no-hover-bg</code> class for top bordered active type. </p>
                                        <ul class="nav nav-tabs nav-top-border no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="component-tabs-component.html#tab11"
                                                   role="tab" aria-selected="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="component-tabs-component.html#tab12" role="tab"
                                                   aria-selected="false">Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab13" data-toggle="tab" aria-controls="tab13" href="component-tabs-component.html#tab13" role="tab"
                                                   aria-selected="false">Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tab11" role="tabpanel" aria-labelledby="base-tab11">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tab12" role="tabpanel" aria-labelledby="base-tab12">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tab13" role="tabpanel" aria-labelledby="base-tab13">
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
                                    <h4 class="card-title">Top Border with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-top-border.no-hover-bg</code> class for top borderd active status type.</p>
                                        <ul class="nav nav-tabs nav-top-border no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab1" data-toggle="tab" href="component-tabs-component.html#home1" aria-controls="home1" role="tab"
                                                   aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab1" data-toggle="tab" href="component-tabs-component.html#profile1"
                                                   aria-controls="profile1" role="tab" aria-selected="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown11-tab" href="component-tabs-component.html#dropdown11" data-toggle="tab"
                                                       aria-controls="dropdown11" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown12-tab" href="component-tabs-component.html#dropdown12" data-toggle="tab"
                                                       aria-controls="dropdown12" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab1" data-toggle="tab" href="component-tabs-component.html#about1" aria-controls="about1" role="tab"
                                                   aria-selected="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="home1" aria-labelledby="home-tab1" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profile1" aria-labelledby="profile-tab1" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown11" aria-labelledby="dropdown11-tab" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown12" aria-labelledby="dropdown12-tab" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about1" aria-labelledby="about-tab1" role="tabpanel">
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
                                    <h4 class="card-title">Topline with box</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-topline</code> class for topline box active type. </p>
                                        <ul class="nav nav-tabs nav-topline" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab21" data-toggle="tab" aria-controls="tab21" href="component-tabs-component.html#tab21"
                                                   role="tab" aria-selected="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab22" data-toggle="tab" aria-controls="tab22" href="component-tabs-component.html#tab22" role="tab"
                                                   aria-selected="false">Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab23" data-toggle="tab" aria-controls="tab23" href="component-tabs-component.html#tab23" role="tab"
                                                   aria-selected="false">Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">
                                            <div class="tab-pane active" id="tab21" role="tabpanel" aria-labelledby="base-tab21">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tab22" role="tabpanel" aria-labelledby="base-tab22">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tab23" role="tabpanel" aria-labelledby="base-tab23">
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
                                    <h4 class="card-title">Topline with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-topline</code> class for topline box active status type.</p>
                                        <ul class="nav nav-tabs nav-topline" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab2" data-toggle="tab" href="component-tabs-component.html#home2" aria-controls="home2" role="tab"
                                                   aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="component-tabs-component.html#profile2"
                                                   aria-controls="profile2" role="tab" aria-selected="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown21-tab" href="component-tabs-component.html#dropdown21" data-toggle="tab"
                                                       aria-controls="dropdown21" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown22-tab" href="component-tabs-component.html#dropdown22" data-toggle="tab"
                                                       aria-controls="dropdown22" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab2" data-toggle="tab" href="component-tabs-component.html#about2" aria-controls="about2" role="tab"
                                                   aria-selected="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1 border-grey border-lighten-2 border-0-top">
                                            <div class="tab-pane" id="home2" aria-labelledby="home-tab2" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profile2" aria-labelledby="profile-tab2" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown21" aria-labelledby="dropdown21-tab" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown22" aria-labelledby="dropdown22-tab" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about2" aria-labelledby="about-tab2" role="tabpanel">
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
                <!-- Basic Tag Input end -->


                <!-- Justified With Top Border start -->
                <section id="justified-top-border">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Justified With Top Border</h4>
                            <p>Different bottom border styles for active tabs.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Justified Tab</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-justified</code> class to set tabs justified.</p>
                                        <ul class="nav nav-tabs nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="active-tab" data-toggle="tab" href="component-tabs-component.html#active" aria-controls="active"
                                                   role="tab" aria-selected="true">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="link-tab" data-toggle="tab" href="component-tabs-component.html#link" aria-controls="link" role="tab"
                                                   aria-selected="false">Link</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownOpt1-tab" href="component-tabs-component.html#dropdownOpt1" data-toggle="tab"
                                                       aria-controls="dropdownOpt1" role="tab" aria-selected="true">dropdown 1</a>
                                                    <a class="dropdown-item" id="dropdownOpt2-tab" href="component-tabs-component.html#dropdownOpt2" data-toggle="tab"
                                                       aria-controls="dropdownOpt2" role="tab" aria-selected="true">dropdown 2</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="linkOpt-tab" data-toggle="tab" href="component-tabs-component.html#linkOpt" aria-controls="linkOpt">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active in" id="active" aria-labelledby="active-tab" role="tabpanel">
                                                <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy
                                                    jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                            </div>
                                            <div class="tab-pane" id="link" aria-labelledby="link-tab" role="tabpanel">
                                                <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes
                                                    brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOpt1" aria-labelledby="dropdownOpt1-tab" role="tabpanel">
                                                <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake
                                                    chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOpt2" aria-labelledby="dropdownOpt2-tab" role="tabpanel">
                                                <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops
                                                    sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                            </div>
                                            <div class="tab-pane" id="linkOpt" aria-labelledby="linkOpt-tab" role="tabpanel">
                                                <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                                    powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Justified Tab with top border</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-justified.nav-top-border.no-hover-bg</code> classes justified top bordered tabs. you can also use
                                            <code>.nav-topline</code> class in place of <code>.nav-top-border</code> class</p>
                                        <ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="active-tab1" data-toggle="tab" href="component-tabs-component.html#active1" aria-controls="active1"
                                                   role="tab" aria-selected="true">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="link-tab1" data-toggle="tab" href="component-tabs-component.html#link1" aria-controls="link1" role="tab"
                                                   aria-selected="false">Link</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownOpt1-tab1" href="component-tabs-component.html#dropdownOpt11" data-toggle="tab"
                                                       aria-controls="dropdownOpt11" role="tab" aria-selected="true">dropdown 1</a>
                                                    <a class="dropdown-item" id="dropdownOpt2-tab1" href="component-tabs-component.html#dropdownOpt12" data-toggle="tab"
                                                       aria-controls="dropdownOpt12" role="tab" aria-selected="true">dropdown 2</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="linkOpt-tab1" data-toggle="tab" href="component-tabs-component.html#linkOpt1" aria-controls="linkOpt1">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active in" id="active1" aria-labelledby="active-tab1" role="tabpanel">
                                                <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy
                                                    jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                            </div>
                                            <div class="tab-pane" id="link1" aria-labelledby="link-tab1" role="tabpanel">
                                                <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes
                                                    brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOpt11" aria-labelledby="dropdownOpt1-tab1" role="tabpanel">
                                                <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake
                                                    chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOpt12" aria-labelledby="dropdownOpt2-tab1" role="tabpanel">
                                                <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops
                                                    sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                            </div>
                                            <div class="tab-pane" id="linkOpt1" aria-labelledby="linkOpt-tab1" role="tabpanel">
                                                <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                                    powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Justified With Top Border end -->


                <!-- With Bottom Border start -->
                <section id="bottom-border">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">With Bottom Border</h4>
                            <p>Different bottom border styles for active tabs.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bottomline with box</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-underline</code> class for bottom bordered active type. </p>
                                        <ul class="nav nav-tabs nav-underline no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31" href="component-tabs-component.html#tab31"
                                                   role="tab" aria-selected="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="component-tabs-component.html#tab32" role="tab"
                                                   aria-selected="false">Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab33" href="component-tabs-component.html#tab33" role="tab"
                                                   aria-selected="false">Tab 3</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tab31" role="tabpanel" aria-labelledby="base-tab31">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tab32" role="tabpanel" aria-labelledby="base-tab32">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tab33" role="tabpanel" aria-labelledby="base-tab33">
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
                                    <h4 class="card-title">Tabs with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-underline</code> class for bottom borderd active status type.</p>
                                        <ul class="nav nav-tabs nav-underline no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab3" data-toggle="tab" href="component-tabs-component.html#home3" aria-controls="home3" role="tab"
                                                   aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab3" data-toggle="tab" href="component-tabs-component.html#profile3"
                                                   aria-controls="profile3" role="tab" aria-selected="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown31-tab" href="component-tabs-component.html#dropdown31" data-toggle="tab"
                                                       aria-controls="dropdown31" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown32-tab" href="component-tabs-component.html#dropdown32" data-toggle="tab"
                                                       aria-controls="dropdown32" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab3" data-toggle="tab" href="component-tabs-component.html#about3" aria-controls="about3" role="tab"
                                                   aria-selected="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="home3" aria-labelledby="home-tab3" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profile3" aria-labelledby="profile-tab3" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown31" aria-labelledby="dropdown31-tab" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown32" aria-labelledby="dropdown32-tab" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about3" aria-labelledby="about-tab3" role="tabpanel">
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
                                    <h4 class="card-title">Bottomline with Triangle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-linetriangle</code> class for bottom triangle active type. </p>
                                        <ul class="nav nav-tabs nav-linetriangle no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab41" data-toggle="tab" aria-controls="tab41" href="component-tabs-component.html#tab41"
                                                   role="tab" aria-selected="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab42" data-toggle="tab" aria-controls="tab42" href="component-tabs-component.html#tab42" role="tab"
                                                   aria-selected="false">Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab43" data-toggle="tab" aria-controls="tab43" href="component-tabs-component.html#tab43" role="tab"
                                                   aria-selected="false">Tab 3</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tab41" role="tabpanel" aria-labelledby="base-tab41">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tab42" role="tabpanel" aria-labelledby="base-tab42">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tab43" role="tabpanel" aria-labelledby="base-tab43">
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
                                    <h4 class="card-title">Tabs with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-linetriangle</code> class for bottom triangle active status type.</p>
                                        <ul class="nav nav-tabs nav-linetriangle no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab4" data-toggle="tab" href="component-tabs-component.html#home4" aria-controls="home4" role="tab"
                                                   aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab4" data-toggle="tab" href="component-tabs-component.html#profile4"
                                                   aria-controls="profile4" role="tab" aria-selected="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown41-tab" href="component-tabs-component.html#dropdown41" data-toggle="tab"
                                                       aria-controls="dropdown41" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown42-tab" href="component-tabs-component.html#dropdown42" data-toggle="tab"
                                                       aria-controls="dropdown42" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab4" data-toggle="tab" href="component-tabs-component.html#about4" aria-controls="about4" role="tab"
                                                   aria-selected="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="home4" aria-labelledby="home-tab4" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profile4" aria-labelledby="profile-tab4" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown41" aria-labelledby="dropdown41-tab" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown42" aria-labelledby="dropdown42-tab" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about4" aria-labelledby="about-tab4" role="tabpanel">
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
                <!-- With Bottom Border end -->


                <!-- Justified With Bottom Border start -->
                <section id="justified-bottom-border">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Justified Tabs With Bottom Border</h4>
                            <p>Use class <code>.nav-justified</code> for justified tabs.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tab with Underline</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-justified.nav-underline</code> classes justified bottom bordered tabs.</p>
                                        <ul class="nav nav-tabs nav-underline no-hover-bg nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="active-tab32" data-toggle="tab" href="component-tabs-component.html#active32"
                                                   aria-controls="active32" role="tab" aria-selected="true">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="link-tab32" data-toggle="tab" href="component-tabs-component.html#link32" aria-controls="link32" role="tab"
                                                   aria-selected="false">Link</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownOpt1-tab2" href="component-tabs-component.html#dropdownOpt21" data-toggle="tab"
                                                       aria-controls="dropdownOpt21" role="tab" aria-selected="true">dropdown 1</a>
                                                    <a class="dropdown-item" id="dropdownOpt2-tab2" href="component-tabs-component.html#dropdownOpt22" data-toggle="tab"
                                                       aria-controls="dropdownOpt22" role="tab" aria-selected="true">dropdown 2</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="component-tabs-component.html#linkOpt2" aria-controls="linkOpt2">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active in" id="active32" aria-labelledby="active-tab32" role="tabpanel">
                                                <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy
                                                    jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                            </div>
                                            <div class="tab-pane" id="link32" aria-labelledby="link-tab32" role="tabpanel">
                                                <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes
                                                    brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOpt21" aria-labelledby="dropdownOpt1-tab2" role="tabpanel">
                                                <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake
                                                    chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOpt22" aria-labelledby="dropdownOpt2-tab2" role="tabpanel">
                                                <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops
                                                    sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                            </div>
                                            <div class="tab-pane" id="linkOpt2" aria-labelledby="linkOpt-tab2" role="tabpanel">
                                                <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                                    powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tab with line triangle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-justified.nav-linetriangle</code> classes justified bottom triangle tabs.</p>
                                        <ul class="nav nav-tabs nav-linetriangle no-hover-bg nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="active-tab3" data-toggle="tab" href="component-tabs-component.html#active3" aria-controls="active3"
                                                   role="tab" aria-selected="true">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="link-tab3" data-toggle="tab" href="component-tabs-component.html#link3" aria-controls="link3" role="tab"
                                                   aria-selected="false">Link</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownOpt1-tab3" href="component-tabs-component.html#dropdownOpt31" data-toggle="tab"
                                                       aria-controls="dropdownOpt31" role="tab" aria-selected="true">dropdown 1</a>
                                                    <a class="dropdown-item" id="dropdownOpt2-tab3" href="component-tabs-component.html#dropdownOpt32" data-toggle="tab"
                                                       aria-controls="dropdownOpt32" role="tab" aria-selected="true">dropdown 2</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="linkOpt-tab3" data-toggle="tab" href="component-tabs-component.html#linkOpt3" aria-controls="linkOpt3">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active in" id="active3" aria-labelledby="active-tab3" role="tabpanel">
                                                <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan liquorice soufflé cotton candy
                                                    jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy macaroon chocolate sugar plum cake donut.</p>
                                            </div>
                                            <div class="tab-pane" id="link3" aria-labelledby="link-tab3" role="tabpanel">
                                                <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes
                                                    brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOpt31" aria-labelledby="dropdownOpt1-tab3" role="tabpanel">
                                                <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake
                                                    chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOpt32" aria-labelledby="dropdownOpt2-tab3" role="tabpanel">
                                                <p>Soufflé cake gingerbread apple pie sweet roll pudding. Sweet roll dragée topping cotton candy cake jelly beans. Pie lemon drops
                                                    sweet pastry candy canes chocolate cake bear claw cotton candy wafer.</p>
                                            </div>
                                            <div class="tab-pane" id="linkOpt3" aria-labelledby="linkOpt-tab3" role="tabpanel">
                                                <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread
                                                    powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Justified With Bottom Border end -->


                <!-- Tabs with Icons start -->
                <section id="tabs-with-icons">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Tabs with Icons</h4>
                            <p>Icon on left,right &amp; both side of the tab. Only icons tabs also available.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Tabs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="baseIcon-tab1" data-toggle="tab" aria-controls="tabIcon1"
                                                   href="component-tabs-component.html#tabIcon1" role="tab" aria-selected="true"><i class="fa fa-play"></i> Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="component-tabs-component.html#tabIcon2"
                                                   role="tab" aria-selected="false"><i class="fa fa-flag"></i> Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab3" data-toggle="tab" aria-controls="tabIcon3" href="component-tabs-component.html#tabIcon3"
                                                   role="tab" aria-selected="false"><i class="fa fa-cog"></i> Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-unlink"></i> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tabIcon1" role="tabpanel" aria-labelledby="baseIcon-tab1">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon2" role="tabpanel" aria-labelledby="baseIcon-tab2">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon3" role="tabpanel" aria-labelledby="baseIcon-tab3">
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
                                    <h4 class="card-title">Tabs with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeIcon-tab" data-toggle="tab" href="component-tabs-component.html#homeIcon" aria-controls="homeIcon"
                                                   role="tab" aria-selected="true"><i class="fa fa-align-justify"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileIcon-tab" data-toggle="tab" href="component-tabs-component.html#profileIcon"
                                                   aria-controls="profileIcon" role="tab" aria-selected="false"><i class="fa fa-header"></i> Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    <i class="fa fa-bars"></i> Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownIcon1-tab" href="component-tabs-component.html#dropdownIcon1" data-toggle="tab"
                                                       aria-controls="dropdownIcon1" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownIcon2-tab" href="component-tabs-component.html#dropdownIcon2" data-toggle="tab"
                                                       aria-controls="dropdownIcon2" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="component-tabs-component.html#about" aria-controls="about" role="tab"
                                                   aria-selected="false"><i class="fa fa-send-o"></i> About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon1" aria-labelledby="dropdownIcon1-tab" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon2" aria-labelledby="dropdownIcon2-tab" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutIcon" aria-labelledby="aboutIcon-tab" role="tabpanel">
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
                                    <h4 class="card-title">Basic Tabs with Bottom Line</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-top-border no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="baseIcon-tab11" data-toggle="tab" aria-controls="tabIcon11"
                                                   href="component-tabs-component.html#tabIcon11" role="tab" aria-selected="true"><i class="fa fa-play"></i> Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab12" data-toggle="tab" aria-controls="tabIcon12" href="component-tabs-component.html#tabIcon12"
                                                   role="tab" aria-selected="false"><i class="fa fa-flag"></i> Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab13" data-toggle="tab" aria-controls="tabIcon13" href="component-tabs-component.html#tabIcon13"
                                                   role="tab" aria-selected="false"><i class="fa fa-cog"></i> Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-unlink"></i> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tabIcon11" role="tabpanel" aria-labelledby="baseIcon-tab11">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon12" role="tabpanel" aria-labelledby="baseIcon-tab12">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon13" role="tabpanel" aria-labelledby="baseIcon-tab3">
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
                                    <h4 class="card-title">Tabs with dropdown &amp; top line</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-top-border no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeIcon-tab1" data-toggle="tab" href="component-tabs-component.html#homeIcon1" aria-controls="homeIcon1"
                                                   role="tab" aria-selected="true"><i class="fa fa-align-justify"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileIcon-tab1" data-toggle="tab" href="component-tabs-component.html#profileIcon1"
                                                   aria-controls="profileIcon1" role="tab" aria-selected="false"><i class="fa fa-header"></i> Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    <i class="fa fa-bars"></i> Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownIcon2-tab1" href="component-tabs-component.html#dropdownIcon01" data-toggle="tab"
                                                       aria-controls="dropdownIcon01" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownIcon2-tab2" href="component-tabs-component.html#dropdownIcon02" data-toggle="tab"
                                                       aria-controls="dropdownIcon02" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutIcon1-tab" data-toggle="tab" href="component-tabs-component.html#aboutIcon1" aria-controls="aboutIcon1"
                                                   role="tab" aria-selected="false"><i class="fa fa-send-o"></i> About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="homeIcon1" aria-labelledby="homeIcon-tab1" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profileIcon1" aria-labelledby="profileIcon-tab1" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon01" aria-labelledby="dropdownIcon2-tab1" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon02" aria-labelledby="dropdownIcon2-tab2" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutIcon1" aria-labelledby="aboutIcon1-tab" role="tabpanel">
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
                                    <h4 class="card-title">Basic Tabs with Bottom Line</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-underline" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="baseIcon-tab21" data-toggle="tab" aria-controls="tabIcon21"
                                                   href="component-tabs-component.html#tabIcon21" role="tab" aria-selected="true"><i class="fa fa-play"></i> Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab22" data-toggle="tab" aria-controls="tabIcon22" href="component-tabs-component.html#tabIcon22"
                                                   role="tab" aria-selected="false"><i class="fa fa-flag"></i> Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab23" data-toggle="tab" aria-controls="tabIcon23" href="component-tabs-component.html#tabIcon23"
                                                   role="tab" aria-selected="false"><i class="fa fa-cog"></i> Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-unlink"></i> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tabIcon21" role="tabpanel" aria-labelledby="baseIcon-tab21">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon22" role="tabpanel" aria-labelledby="baseIcon-tab22">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon23" role="tabpanel" aria-labelledby="baseIcon-tab23">
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
                                    <h4 class="card-title">Tabs with dropdown &amp; bottom line</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-underline" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeIcon1-tab1" data-toggle="tab" href="component-tabs-component.html#homeIcon11" aria-controls="homeIcon11"
                                                   role="tab" aria-selected="true"><i class="fa fa-align-justify"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileIcon1-tab1" data-toggle="tab" href="component-tabs-component.html#profileIcon11"
                                                   aria-controls="profileIcon11" role="tab" aria-selected="false"><i class="fa fa-header"></i> Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    <i class="fa fa-bars"></i> Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownIcon11-tab1" href="component-tabs-component.html#dropdownIcon11" data-toggle="tab"
                                                       aria-controls="dropdownIcon11" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownIcon12-tab1" href="component-tabs-component.html#dropdownIcon12" data-toggle="tab"
                                                       aria-controls="dropdownIcon12" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutIcon11-tab1" data-toggle="tab" href="component-tabs-component.html#aboutIcon11"
                                                   aria-controls="aboutIcon11" role="tab" aria-selected="false"><i class="fa fa-send-o"></i> About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="homeIcon11" aria-labelledby="homeIcon1-tab1" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profileIcon11" aria-labelledby="profileIcon1-tab1" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon11" aria-labelledby="dropdownIcon11-tab1" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon12" aria-labelledby="dropdownIcon12-tab1" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutIcon11" aria-labelledby="aboutIcon11-tab1" role="tabpanel">
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
                                    <h4 class="card-title">Basic Tabs with Bottom Arrow</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-linetriangle" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="baseIcon-tab31" data-toggle="tab" aria-controls="tabIcon31"
                                                   href="component-tabs-component.html#tabIcon31" role="tab" aria-selected="true"><i class="fa fa-play"></i> Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab32" data-toggle="tab" aria-controls="tabIcon32" href="component-tabs-component.html#tabIcon32"
                                                   role="tab" aria-selected="false"><i class="fa fa-flag"></i> Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab33" data-toggle="tab" aria-controls="tabIcon33" href="component-tabs-component.html#tabIcon33"
                                                   role="tab" aria-selected="false"><i class="fa fa-cog"></i> Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-unlink"></i> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tabIcon31" role="tabpanel" aria-labelledby="baseIcon-tab31">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon32" role="tabpanel" aria-labelledby="baseIcon-tab32">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon33" role="tabpanel" aria-labelledby="baseIcon-tab33">
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
                                    <h4 class="card-title">Tabs with dropdown &amp; Bottom Arrow</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-linetriangle" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeIcon2-tab1" data-toggle="tab" href="component-tabs-component.html#homeIcon21" aria-controls="homeIcon21"
                                                   role="tab" aria-selected="true"><i class="fa fa-align-justify"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileIcon2-tab1" data-toggle="tab" href="component-tabs-component.html#profileIcon21"
                                                   aria-controls="profileIcon21" role="tab" aria-selected="false"><i class="fa fa-header"></i> Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    <i class="fa fa-bars"></i> Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownIcon21-tab1" href="component-tabs-component.html#dropdownIcon21" data-toggle="tab"
                                                       aria-controls="dropdownIcon21" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownIcon22-tab1" href="component-tabs-component.html#dropdownIcon22" data-toggle="tab"
                                                       aria-controls="dropdownIcon22" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutIcon21-tab1" data-toggle="tab" href="component-tabs-component.html#aboutIcon21"
                                                   aria-controls="aboutIcon21" role="tab" aria-selected="false"><i class="fa fa-send-o"></i> About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="homeIcon21" aria-labelledby="homeIcon2-tab1" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profileIcon21" aria-labelledby="profileIcon2-tab1" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon21" aria-labelledby="dropdownIcon21-tab1" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon22" aria-labelledby="dropdownIcon22-tab1" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutIcon21" aria-labelledby="aboutIcon21-tab1" role="tabpanel">
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
                                    <h4 class="card-title">Basic Tabs with Icon Fall</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-iconfall</code> class for icon fall for active state.</p>
                                        <ul class="nav nav-tabs nav-iconfall" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="baseIcon-tab41" data-toggle="tab" aria-controls="tabIcon41"
                                                   href="component-tabs-component.html#tabIcon41" role="tab" aria-selected="true"><i class="fa fa-play"></i> Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab42" data-toggle="tab" aria-controls="tabIcon42" href="component-tabs-component.html#tabIcon42"
                                                   role="tab" aria-selected="false"><i class="fa fa-flag"></i> Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab43" data-toggle="tab" aria-controls="tabIcon43" href="component-tabs-component.html#tabIcon43"
                                                   role="tab" aria-selected="false"><i class="fa fa-cog"></i> Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-unlink"></i> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tabIcon41" role="tabpanel" aria-labelledby="baseIcon-tab41">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon42" role="tabpanel" aria-labelledby="baseIcon-tab42">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon43" role="tabpanel" aria-labelledby="baseIcon-tab43">
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
                                    <h4 class="card-title">Tabs with dropdown &amp; Icon Fall</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-iconfall</code> class for icon fall for active state.</p>
                                        <ul class="nav nav-tabs nav-iconfall" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeIcon3-tab1" data-toggle="tab" href="component-tabs-component.html#homeIcon31" aria-controls="homeIcon31"
                                                   role="tab" aria-selected="true"><i class="fa fa-align-justify"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileIcon3-tab1" data-toggle="tab" href="component-tabs-component.html#profileIcon31"
                                                   aria-controls="profileIcon31" role="tab" aria-selected="false"><i class="fa fa-header"></i> Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    <i class="fa fa-bars"></i> Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownIcon31-tab1" href="component-tabs-component.html#dropdownIcon31" data-toggle="tab"
                                                       aria-controls="dropdownIcon31" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownIcon32-tab1" href="component-tabs-component.html#dropdownIcon32" data-toggle="tab"
                                                       aria-controls="dropdownIcon32" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutIcon31-tab1" data-toggle="tab" href="component-tabs-component.html#aboutIcon31"
                                                   aria-controls="aboutIcon31" role="tab" aria-selected="false"><i class="fa fa-send-o"></i> About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="homeIcon31" aria-labelledby="homeIcon3-tab1" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profileIcon31" aria-labelledby="profileIcon3-tab1" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon31" aria-labelledby="dropdownIcon31-tab1" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon32" aria-labelledby="dropdownIcon32-tab1" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutIcon31" aria-labelledby="aboutIcon31-tab1" role="tabpanel">
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
                                    <h4 class="card-title">Tabs with Only Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-only-icon</code> class when you use only icons, So that will increase font size.</p>
                                        <ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="baseOnlyIcon-tab11" data-toggle="tab" aria-controls="tabOnlyIcon11"
                                                   href="component-tabs-component.html#tabOnlyIcon11" role="tab" aria-selected="true"><i class="fa fa-play"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseOnlyIcon-tab12" data-toggle="tab" aria-controls="tabOnlyIcon12"
                                                   href="component-tabs-component.html#tabOnlyIcon12" role="tab" aria-selected="false"><i class="fa fa-flag"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseOnlyIcon-tab23" data-toggle="tab" aria-controls="tabOnlyIcon13"
                                                   href="component-tabs-component.html#tabOnlyIcon13" role="tab" aria-selected="false"><i class="fa fa-cog"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-unlink"></i></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane active" id="tabOnlyIcon11" role="tabpanel" aria-labelledby="baseOnlyIcon-tab11">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot cake
                                                    marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tabOnlyIcon12" role="tabpanel" aria-labelledby="baseOnlyIcon-tab12">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                    caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="tabOnlyIcon13" role="tabpanel" aria-labelledby="baseOnlyIcon-tab23">
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
                                    <h4 class="card-title">Tabs with dropdown &amp; top line</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.nav-only-icon</code> class when you use only icons, So that will increase font size.</p>
                                        <ul class="nav nav-tabs nav-only-icon nav-top-border no-hover-bg" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeOnlyIcon-tab1" data-toggle="tab" href="component-tabs-component.html#homeOnlyIcon1"
                                                   aria-controls="homeOnlyIcon1" role="tab" aria-selected="true"><i class="fa fa-align-justify"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileOnlyIcon-tab1" data-toggle="tab" href="component-tabs-component.html#profileOnlyIcon1"
                                                   aria-controls="profileOnlyIcon1" role="tab" aria-selected="false"><i class="fa fa-header"></i></a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="component-tabs-component.html#" aria-haspopup="true">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownOnlyIcon1-tab" href="component-tabs-component.html#dropdownOnlyIcon1" data-toggle="tab"
                                                       aria-controls="dropdownOnlyIcon1" role="tab" aria-selected="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownOnlyIcon2-tab" href="component-tabs-component.html#dropdownOnlyIcon2" data-toggle="tab"
                                                       aria-controls="dropdownOnlyIcon2" role="tab" aria-selected="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutOnlyIcon1-tab" data-toggle="tab" href="component-tabs-component.html#aboutOnlyIcon1"
                                                   aria-controls="aboutOnlyIcon1" role="tab" aria-selected="false"><i class="fa fa-send-o"></i></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div class="tab-pane" id="homeOnlyIcon1" aria-labelledby="homeOnlyIcon-tab1" role="tabpanel">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps
                                                    lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active in" id="profileOnlyIcon1" aria-labelledby="profileOnlyIcon-tab1" role="tabpanel">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant
                                                    tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOnlyIcon1" aria-labelledby="dropdownOnlyIcon1-tab" role="tabpanel">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum
                                                    chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownOnlyIcon2" aria-labelledby="dropdownOnlyIcon2-tab" role="tabpanel">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops
                                                    danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutOnlyIcon1" aria-labelledby="aboutOnlyIcon1-tab" role="tabpanel">
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
                <!-- Tabs with Icons end -->


                <!-- Vertical Tabs start -->
                <section id="vertical-tabs">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Vertical Tabs</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical Left Tabs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add left navigation use <code>.nav-left</code> class to <code>.nav.nav-tabs</code>.
                                        </p>
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-left flex-column" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalLeft-tab1" data-toggle="tab" aria-controls="tabVerticalLeft1"
                                                       href="component-tabs-component.html#tabVerticalLeft1" role="tab" aria-selected="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft-tab2" data-toggle="tab" aria-controls="tabVerticalLeft2"
                                                       href="component-tabs-component.html#tabVerticalLeft2" role="tab" aria-selected="false">Tab 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft-tab3" data-toggle="tab" aria-controls="tabVerticalLeft3"
                                                       href="component-tabs-component.html#tabVerticalLeft3" role="tab" aria-selected="false">Tab 3 </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel" aria-labelledby="baseVerticalLeft-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                                        cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel" aria-labelledby="baseVerticalLeft-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                        caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft3" role="tabpanel" aria-labelledby="baseVerticalLeft-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                                        lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <h4 class="card-title">Vertical Right Tabs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add right navigation use <code>.nav-right</code> class to <code>.nav.nav-tabs</code>.
                                        </p>
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-right flex-column" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalRight-tab1" data-toggle="tab" aria-controls="tabVerticalRight1"
                                                       href="component-tabs-component.html#tabVerticalRight1" role="tab" aria-selected="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight-tab2" data-toggle="tab" aria-controls="tabVerticalRight2"
                                                       href="component-tabs-component.html#tabVerticalRight2" role="tab" aria-selected="false">Tab 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight-tab3" data-toggle="tab" aria-controls="tabVerticalRight3"
                                                       href="component-tabs-component.html#tabVerticalRight3" role="tab" aria-selected="false">Tab 3 </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div class="tab-pane active" id="tabVerticalRight1" role="tabpanel" aria-labelledby="baseVerticalRight-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                                        cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight2" role="tabpanel" aria-labelledby="baseVerticalRight-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                        caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight3" role="tabpanel" aria-labelledby="baseVerticalRight-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                                        lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <h4 class="card-title">Tabs with Left Border</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add left navigation use <code>.nav-left</code> &amp; use <code>nav-border-left</code>class
                                            to <code>.nav.nav-tabs</code> for leftside border effect to tab.</p>
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-left nav-border-left" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalLeft1-tab1" data-toggle="tab" aria-controls="tabVerticalLeft11"
                                                       href="component-tabs-component.html#tabVerticalLeft11" role="tab" aria-selected="true">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft1-tab2" data-toggle="tab" aria-controls="tabVerticalLeft12"
                                                       href="component-tabs-component.html#tabVerticalLeft12" role="tab" aria-selected="false">Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft1-tab3" data-toggle="tab" aria-controls="tabVerticalLeft13"
                                                       href="component-tabs-component.html#tabVerticalLeft13" role="tab" aria-selected="false">About</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div class="tab-pane active" id="tabVerticalLeft11" role="tabpanel" aria-labelledby="baseVerticalLeft1-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                                        cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft12" role="tabpanel" aria-labelledby="baseVerticalLeft1-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                        caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft13" role="tabpanel" aria-labelledby="baseVerticalLeft1-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                                        lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <h4 class="card-title">Tabs with Right Border</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add right navigation use <code>.nav-right</code> &amp; use <code>nav-border-right</code>class
                                            to <code>.nav.nav-tabs</code> for leftside border effect to tab.</p>
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-right nav-border-right" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalRight1-tab1" data-toggle="tab" aria-controls="tabVerticalRight11"
                                                       href="component-tabs-component.html#tabVerticalRight11" role="tab" aria-selected="true">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight1-tab2" data-toggle="tab" aria-controls="tabVerticalRight12"
                                                       href="component-tabs-component.html#tabVerticalRight12" role="tab" aria-selected="false">Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight1-tab3" data-toggle="tab" aria-controls="tabVerticalRight13"
                                                       href="component-tabs-component.html#tabVerticalRight13" role="tab" aria-selected="false">About</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div class="tab-pane active" id="tabVerticalRight11" role="tabpanel" aria-labelledby="baseVerticalRight1-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                                        cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight12" role="tabpanel" aria-labelledby="baseVerticalRight1-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                        caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight13" role="tabpanel" aria-labelledby="baseVerticalRight1-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                                        lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <h4 class="card-title">Tabs with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can also add icons to the tab name.</p>
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-left" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalLeft2-tab1" data-toggle="tab" aria-controls="tabVerticalLeft21"
                                                       href="component-tabs-component.html#tabVerticalLeft21" role="tab" aria-selected="true"><i class="fa fa-align-justify"></i>
                                                        Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft2-tab2" data-toggle="tab" aria-controls="tabVerticalLeft22"
                                                       href="component-tabs-component.html#tabVerticalLeft22" role="tab" aria-selected="false"><i class="fa fa-header"></i> Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft2-tab3" data-toggle="tab" aria-controls="tabVerticalLeft23"
                                                       href="component-tabs-component.html#tabVerticalLeft23" role="tab" aria-selected="false"><i class="fa fa-send-o"></i>
                                                        About</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div class="tab-pane active" id="tabVerticalLeft21" role="tabpanel" aria-labelledby="baseVerticalLeft2-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                                        cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft22" role="tabpanel" aria-labelledby="baseVerticalLeft2-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                        caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft23" role="tabpanel" aria-labelledby="baseVerticalLeft2-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                                        lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
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
                                    <h4 class="card-title">Tabs with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can also add icons to the tab name.</p>
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-right" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalRight2-tab1" data-toggle="tab" aria-controls="tabVerticalRight21"
                                                       href="component-tabs-component.html#tabVerticalRight21" role="tab"><i class="fa fa-align-justify float-right"></i> Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight2-tab2" data-toggle="tab" aria-controls="tabVerticalRight22"
                                                       href="component-tabs-component.html#tabVerticalRight22" role="tab" aria-selected="false"><i
                                                                class="fa fa-header float-right"></i> Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight2-tab3" data-toggle="tab" aria-controls="tabVerticalRight23"
                                                       href="component-tabs-component.html#tabVerticalRight23" role="tab" aria-selected="false"><i
                                                                class="fa fa-send-o float-right"></i> About</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div class="tab-pane active" id="tabVerticalRight21" role="tabpanel" aria-labelledby="baseVerticalRight2-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot cake. Jelly beans carrot
                                                        cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight22" role="tabpanel" aria-labelledby="baseVerticalRight2-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding
                                                        caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight23" role="tabpanel" aria-labelledby="baseVerticalRight2-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake
                                                        lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Vertical Tabs end -->
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
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/navs/navs.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
