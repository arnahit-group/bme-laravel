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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/animate/animate.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/animate/animate.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Collapse</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-collapse.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Collapse
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
            <div class="content-body"><!-- Accordion start -->
                <section id="accordion">
                    <div class="row">
                        <div class="col-12 mt-1">
                            <h3 class="text-uppercase">Accordion</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Basic Accordion</h5>
                                <p>Basic accordion toggle.</p>
                            </div>
                            <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div id="heading1" class="card-header" role="tab">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion1"
                                           aria-expanded="false" aria-controls="accordion1" class="card-title lead">Accordion Group
                                            Item #1</a>
                                    </div>
                                    <div id="accordion1" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading1" class="collapse show">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                                chocolate cake liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie
                                                pudding jelly beans. Wafer liquorice chocolate bar chocolate bar liquorice. Tootsie roll
                                                gingerbread gingerbread chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                                macaroon sweet danish. Cupcake soufflé toffee marzipan candy canes pie jelly-o. Cotton
                                                candy bonbon powder topping carrot cake cookie caramels lemon drops liquorice. Dessert
                                                cookie ice cream toffee apple pie.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading2" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion2"
                                           aria-expanded="false" aria-controls="accordion2" class="card-title lead collapsed">Accordion
                                            Group Item #2</a>
                                    </div>
                                    <div id="accordion2" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading2" class="collapse"
                                         aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                                muffin jelly marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot
                                                cake topping donut sesame snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake
                                                biscuit pastry chocolate cake. Cupcake chocolate biscuit lemon drops cotton candy
                                                marshmallow oat cake donut. Croissant chocolate cake oat cake brownie topping carrot
                                                cake jelly beans. Dessert gingerbread marshmallow pudding donut lemon drops cake. Cake
                                                topping gummi bears cake.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading3" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion3"
                                           aria-expanded="false" aria-controls="accordion3" class="card-title lead collapsed">Accordion
                                            Group Item #3</a>
                                    </div>
                                    <div id="accordion3" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading3" class="collapse"
                                         aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée
                                                jujubes donut chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly
                                                beans toffee muffin tiramisu sesame snaps brownie. Cake halvah pastry soufflé oat cake
                                                candy candy canes. Lemon drops gummies gingerbread toffee. Tart jelly candy pastry.
                                                Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake.
                                                Powder danish candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies
                                                lollipop.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading4" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion4"
                                           aria-expanded="false" aria-controls="accordion4" class="card-title lead collapsed">Accordion
                                            Group Item #4</a>
                                    </div>
                                    <div id="accordion4" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading4" class="collapse"
                                         aria-expanded="false" style="height: 0px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée
                                                candy canes carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit
                                                bear claw. Sesame snaps cotton candy cheesecake topping ice cream cookie tiramisu.
                                                Liquorice bonbon cookie pie halvah. Cookie toffee ice cream cotton candy lollipop
                                                fruitcake. Tart cheesecake tiramisu danish marzipan pie pastry chocolate cake. Pastry
                                                bonbon lollipop oat cake pastry halvah dessert jelly. Toffee caramels croissant apple
                                                pie chupa chups toffee muffin chupa chups apple pie.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Right Aligned Accordion</h5>
                                <p>Use <code>.text-right</code> to header for right aligned text to basic accordion toggle.</p>
                            </div>
                            <div id="accordionWrap01" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div id="heading01" class="card-header text-right">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion01"
                                           aria-expanded="true" aria-controls="accordion01" class="card-title lead">Accordion Group
                                            Item #1</a>
                                    </div>
                                    <div id="accordion01" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading01" class="collapse show">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                                chocolate cake liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie
                                                pudding jelly beans. Wafer liquorice chocolate bar chocolate bar liquorice. Tootsie roll
                                                gingerbread gingerbread chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                                macaroon sweet danish. Cupcake soufflé toffee marzipan candy canes pie jelly-o. Cotton
                                                candy bonbon powder topping carrot cake cookie caramels lemon drops liquorice. Dessert
                                                cookie ice cream toffee apple pie.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading02" class="card-header text-right">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion02"
                                           aria-expanded="false" aria-controls="accordion02"
                                           class="card-title lead collapsed">Accordion Group Item #2</a>
                                    </div>
                                    <div id="accordion02" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading02" class="collapse"
                                         aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                                muffin jelly marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot
                                                cake topping donut sesame snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake
                                                biscuit pastry chocolate cake. Cupcake chocolate biscuit lemon drops cotton candy
                                                marshmallow oat cake donut. Croissant chocolate cake oat cake brownie topping carrot
                                                cake jelly beans. Dessert gingerbread marshmallow pudding donut lemon drops cake. Cake
                                                topping gummi bears cake.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading03" class="card-header text-right">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion03"
                                           aria-expanded="false" aria-controls="accordion03"
                                           class="card-title lead collapsed">Accordion Group Item #3</a>
                                    </div>
                                    <div id="accordion03" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading03" class="collapse"
                                         aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée
                                                jujubes donut chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly
                                                beans toffee muffin tiramisu sesame snaps brownie. Cake halvah pastry soufflé oat cake
                                                candy candy canes. Lemon drops gummies gingerbread toffee. Tart jelly candy pastry.
                                                Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake.
                                                Powder danish candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies
                                                lollipop.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading04" class="card-header text-right">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion04"
                                           aria-expanded="false" aria-controls="accordion04"
                                           class="card-title lead collapsed">Accordion Group Item #4</a>
                                    </div>
                                    <div id="accordion04" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading04" class="collapse"
                                         aria-expanded="false" style="height: 0px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée
                                                candy canes carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit
                                                bear claw. Sesame snaps cotton candy cheesecake topping ice cream cookie tiramisu.
                                                Liquorice bonbon cookie pie halvah. Cookie toffee ice cream cotton candy lollipop
                                                fruitcake. Tart cheesecake tiramisu danish marzipan pie pastry chocolate cake. Pastry
                                                bonbon lollipop oat cake pastry halvah dessert jelly. Toffee caramels croissant apple
                                                pie chupa chups toffee muffin chupa chups apple pie.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Accordion with Icon</h5>
                                <p>Use class <code>.collapse-icon.</code> to set icon accordion toggle. Use
                                    <code>.accordion-icon-rotate</code> class for rotation animation for icons.</p>
                            </div>
                            <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    <div id="heading11" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion11" aria-expanded="true"
                                           aria-controls="accordion11" class="card-title lead">Accordion Group Item #1</a>
                                    </div>
                                    <div id="accordion11" role="tabpanel" data-parent="#accordionWrap1" aria-labelledby="heading11" class="collapse show">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                                chocolate cake liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie
                                                pudding jelly beans. Wafer liquorice chocolate bar chocolate bar liquorice. Tootsie roll
                                                gingerbread gingerbread chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                                macaroon sweet danish. Cupcake soufflé toffee marzipan candy canes pie jelly-o. Cotton
                                                candy bonbon powder topping carrot cake cookie caramels lemon drops liquorice. Dessert
                                                cookie ice cream toffee apple pie.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading12" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion12"
                                           aria-expanded="false" aria-controls="accordion12"
                                           class="card-title lead collapsed">Accordion Group Item #2</a>
                                    </div>
                                    <div id="accordion12" role="tabpanel" data-parent="#accordionWrap1" aria-labelledby="heading12" class="collapse"
                                         aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                                muffin jelly marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot
                                                cake topping donut sesame snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake
                                                biscuit pastry chocolate cake. Cupcake chocolate biscuit lemon drops cotton candy
                                                marshmallow oat cake donut. Croissant chocolate cake oat cake brownie topping carrot
                                                cake jelly beans. Dessert gingerbread marshmallow pudding donut lemon drops cake. Cake
                                                topping gummi bears cake.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading13" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion13"
                                           aria-expanded="false" aria-controls="accordion13"
                                           class="card-title lead collapsed">Accordion Group Item #3</a>
                                    </div>
                                    <div id="accordion13" role="tabpanel" data-parent="#accordionWrap1" aria-labelledby="heading13" class="collapse"
                                         aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée
                                                jujubes donut chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly
                                                beans toffee muffin tiramisu sesame snaps brownie. Cake halvah pastry soufflé oat cake
                                                candy candy canes. Lemon drops gummies gingerbread toffee. Tart jelly candy pastry.
                                                Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake.
                                                Powder danish candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies
                                                lollipop.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading14" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion14"
                                           aria-expanded="false" aria-controls="accordion14"
                                           class="card-title lead collapsed">Accordion Group Item #4</a>
                                    </div>
                                    <div id="accordion14" role="tabpanel" data-parent="#accordionWrap1" aria-labelledby="heading14" class="collapse"
                                         aria-expanded="false" style="height: 0px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée
                                                candy canes carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit
                                                bear claw. Sesame snaps cotton candy cheesecake topping ice cream cookie tiramisu.
                                                Liquorice bonbon cookie pie halvah. Cookie toffee ice cream cotton candy lollipop
                                                fruitcake. Tart cheesecake tiramisu danish marzipan pie pastry chocolate cake. Pastry
                                                bonbon lollipop oat cake pastry halvah dessert jelly. Toffee caramels croissant apple
                                                pie chupa chups toffee muffin chupa chups apple pie.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Accordion with Left Icon</h5>
                                <p>Use class <code>.collapse-icon.left</code>, for accordion with left icon. Use
                                    <code>.accordion-icon-rotate</code> class for rotation animation for icons.</p>
                            </div>
                            <div id="accordionWrap2" role="tablist" aria-multiselectable="true">
                                <div class="card collapse-icon accordion-icon-rotate left">
                                    <div id="heading21" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion21" aria-expanded="true"
                                           aria-controls="accordion21" class="card-title lead">Accordion Group Item #1</a>
                                    </div>
                                    <div id="accordion21" role="tabpanel" data-parent="#accordionWrap2" aria-labelledby="heading21" class="collapse show">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                                chocolate cake liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie
                                                pudding jelly beans. Wafer liquorice chocolate bar chocolate bar liquorice. Tootsie roll
                                                gingerbread gingerbread chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                                macaroon sweet danish. Cupcake soufflé toffee marzipan candy canes pie jelly-o. Cotton
                                                candy bonbon powder topping carrot cake cookie caramels lemon drops liquorice. Dessert
                                                cookie ice cream toffee apple pie.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading22" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion22"
                                           aria-expanded="false" aria-controls="accordion22"
                                           class="card-title lead collapsed">Accordion Group Item #2</a>
                                    </div>
                                    <div id="accordion22" role="tabpanel" data-parent="#accordionWrap2" aria-labelledby="heading22" class="collapse"
                                         aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon
                                                muffin jelly marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot
                                                cake topping donut sesame snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake
                                                biscuit pastry chocolate cake. Cupcake chocolate biscuit lemon drops cotton candy
                                                marshmallow oat cake donut. Croissant chocolate cake oat cake brownie topping carrot
                                                cake jelly beans. Dessert gingerbread marshmallow pudding donut lemon drops cake. Cake
                                                topping gummi bears cake.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading23" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion23"
                                           aria-expanded="false" aria-controls="accordion23"
                                           class="card-title lead collapsed">Accordion Group Item #3</a>
                                    </div>
                                    <div id="accordion23" role="tabpanel" data-parent="#accordionWrap2" aria-labelledby="heading23" class="collapse"
                                         aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée
                                                jujubes donut chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly
                                                beans toffee muffin tiramisu sesame snaps brownie. Cake halvah pastry soufflé oat cake
                                                candy candy canes. Lemon drops gummies gingerbread toffee. Tart jelly candy pastry.
                                                Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake.
                                                Powder danish candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies
                                                lollipop.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="heading24" class="card-header">
                                        <a data-toggle="collapse" href="component-collapse.html#accordion24"
                                           aria-expanded="false" aria-controls="accordion24"
                                           class="card-title lead collapsed">Accordion Group Item #4</a>
                                    </div>
                                    <div id="accordion24" role="tabpanel" data-parent="#accordionWrap2" aria-labelledby="heading24" class="collapse"
                                         aria-expanded="false" style="height: 0px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée
                                                candy canes carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit
                                                bear claw. Sesame snaps cotton candy cheesecake topping ice cream cookie tiramisu.
                                                Liquorice bonbon cookie pie halvah. Cookie toffee ice cream cotton candy lollipop
                                                fruitcake. Tart cheesecake tiramisu danish marzipan pie pastry chocolate cake. Pastry
                                                bonbon lollipop oat cake pastry halvah dessert jelly. Toffee caramels croissant apple
                                                pie chupa chups toffee muffin chupa chups apple pie.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Accordion end -->


                <!-- Collapse start -->
                <section id="collapsible">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-uppercase">Collapse</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Basic Collapse</h5>
                                <p>It will work as collapsible toggle by default.</p>
                            </div>
                            <div class="card">
                                <div id="headingCollapse1" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse1" aria-expanded="true" aria-controls="collapse1"
                                       class="card-title lead">Collapsible Group Item #1</a>
                                </div>
                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse show">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                            chocolate cake liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie
                                            pudding jelly beans. Wafer liquorice chocolate bar chocolate bar liquorice. Tootsie roll
                                            gingerbread gingerbread chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                            macaroon sweet danish. Cupcake soufflé toffee marzipan candy canes pie jelly-o. Cotton candy
                                            bonbon powder topping carrot cake cookie caramels lemon drops liquorice. Dessert cookie ice
                                            cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse2" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse2" aria-expanded="false" aria-controls="collapse2"
                                       class="card-title lead collapsed">Collapsible Group Item #2</a>
                                </div>
                                <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="collapse"
                                     aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin
                                            jelly marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot cake
                                            topping donut sesame snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit
                                            pastry chocolate cake. Cupcake chocolate biscuit lemon drops cotton candy marshmallow oat
                                            cake donut. Croissant chocolate cake oat cake brownie topping carrot cake jelly beans.
                                            Dessert gingerbread marshmallow pudding donut lemon drops cake. Cake topping gummi bears
                                            cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse3" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse3" aria-expanded="false" aria-controls="collapse3"
                                       class="card-title lead collapsed">Collapsible Group Item #3</a>
                                </div>
                                <div id="collapse3" role="tabpanel" aria-labelledby="headingCollapse3" class="collapse"
                                     aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée
                                            jujubes donut chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly beans
                                            toffee muffin tiramisu sesame snaps brownie. Cake halvah pastry soufflé oat cake candy candy
                                            canes. Lemon drops gummies gingerbread toffee. Tart jelly candy pastry. Pastry cake jelly
                                            beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake. Powder danish candy
                                            carrot cake pastry. Tart marshmallow caramels cake macaroon gummies lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse4" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse4" aria-expanded="false" aria-controls="collapse4"
                                       class="card-title lead collapsed">Collapsible Group Item #4</a>
                                </div>
                                <div id="collapse4" role="tabpanel" aria-labelledby="headingCollapse4" class="collapse"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée
                                            candy canes carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit bear
                                            claw. Sesame snaps cotton candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                            bonbon cookie pie halvah. Cookie toffee ice cream cotton candy lollipop fruitcake. Tart
                                            cheesecake tiramisu danish marzipan pie pastry chocolate cake. Pastry bonbon lollipop oat
                                            cake pastry halvah dessert jelly. Toffee caramels croissant apple pie chupa chups toffee
                                            muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Basic Collapse</h5>
                                <p>Use <code>.text-right</code> to header for right aligned text.</p>
                            </div>
                            <div class="card">
                                <div id="headingCollapse01" class="card-header text-right">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse01" aria-expanded="true" aria-controls="collapse01"
                                       class="card-title lead">Collapsible Group Item #1</a>
                                </div>
                                <div id="collapse01" role="tabpanel" aria-labelledby="headingCollapse01" class="collapse show">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                            chocolate cake liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie
                                            pudding jelly beans. Wafer liquorice chocolate bar chocolate bar liquorice. Tootsie roll
                                            gingerbread gingerbread chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                            macaroon sweet danish. Cupcake soufflé toffee marzipan candy canes pie jelly-o. Cotton candy
                                            bonbon powder topping carrot cake cookie caramels lemon drops liquorice. Dessert cookie ice
                                            cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse02" class="card-header text-right">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse02" aria-expanded="false" aria-controls="collapse02"
                                       class="card-title lead collapsed">Collapsible Group Item #2</a>
                                </div>
                                <div id="collapse02" role="tabpanel" aria-labelledby="headingCollapse02" class="collapse"
                                     aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin
                                            jelly marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot cake
                                            topping donut sesame snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit
                                            pastry chocolate cake. Cupcake chocolate biscuit lemon drops cotton candy marshmallow oat
                                            cake donut. Croissant chocolate cake oat cake brownie topping carrot cake jelly beans.
                                            Dessert gingerbread marshmallow pudding donut lemon drops cake. Cake topping gummi bears
                                            cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse03" class="card-header text-right">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse03" aria-expanded="false" aria-controls="collapse03"
                                       class="card-title lead collapsed">Collapsible Group Item #3</a>
                                </div>
                                <div id="collapse03" role="tabpanel" aria-labelledby="headingCollapse03" class="collapse"
                                     aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée
                                            jujubes donut chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly beans
                                            toffee muffin tiramisu sesame snaps brownie. Cake halvah pastry soufflé oat cake candy candy
                                            canes. Lemon drops gummies gingerbread toffee. Tart jelly candy pastry. Pastry cake jelly
                                            beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake. Powder danish candy
                                            carrot cake pastry. Tart marshmallow caramels cake macaroon gummies lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse04" class="card-header text-right">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse04" aria-expanded="false" aria-controls="collapse04"
                                       class="card-title lead collapsed">Collapsible Group Item #4</a>
                                </div>
                                <div id="collapse04" role="tabpanel" aria-labelledby="headingCollapse04" class="collapse"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée
                                            candy canes carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit bear
                                            claw. Sesame snaps cotton candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                            bonbon cookie pie halvah. Cookie toffee ice cream cotton candy lollipop fruitcake. Tart
                                            cheesecake tiramisu danish marzipan pie pastry chocolate cake. Pastry bonbon lollipop oat
                                            cake pastry halvah dessert jelly. Toffee caramels croissant apple pie chupa chups toffee
                                            muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Collapse with Icon</h5>
                                <p>Use class <code>.collapse-icon</code> to set icon collapse.</p>
                            </div>
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div id="headingCollapse11" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse11" aria-expanded="true" aria-controls="collapse11"
                                       class="card-title lead">Collapsible Group Item #1</a>
                                </div>
                                <div id="collapse11" role="tabpanel" aria-labelledby="headingCollapse11" class="collapse show">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                            chocolate cake liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie
                                            pudding jelly beans. Wafer liquorice chocolate bar chocolate bar liquorice. Tootsie roll
                                            gingerbread gingerbread chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                            macaroon sweet danish. Cupcake soufflé toffee marzipan candy canes pie jelly-o. Cotton candy
                                            bonbon powder topping carrot cake cookie caramels lemon drops liquorice. Dessert cookie ice
                                            cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse12" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse12" aria-expanded="false" aria-controls="collapse12"
                                       class="card-title lead collapsed">Collapsible Group Item #2</a>
                                </div>
                                <div id="collapse12" role="tabpanel" aria-labelledby="headingCollapse12" class="collapse"
                                     aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin
                                            jelly marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot cake
                                            topping donut sesame snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit
                                            pastry chocolate cake. Cupcake chocolate biscuit lemon drops cotton candy marshmallow oat
                                            cake donut. Croissant chocolate cake oat cake brownie topping carrot cake jelly beans.
                                            Dessert gingerbread marshmallow pudding donut lemon drops cake. Cake topping gummi bears
                                            cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse13" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse13" aria-expanded="false" aria-controls="collapse13"
                                       class="card-title lead collapsed">Collapsible Group Item #3</a>
                                </div>
                                <div id="collapse13" role="tabpanel" aria-labelledby="headingCollapse13" class="collapse"
                                     aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée
                                            jujubes donut chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly beans
                                            toffee muffin tiramisu sesame snaps brownie. Cake halvah pastry soufflé oat cake candy candy
                                            canes. Lemon drops gummies gingerbread toffee. Tart jelly candy pastry. Pastry cake jelly
                                            beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake. Powder danish candy
                                            carrot cake pastry. Tart marshmallow caramels cake macaroon gummies lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse14" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse14" aria-expanded="false" aria-controls="collapse14"
                                       class="card-title lead collapsed">Collapsible Group Item #4</a>
                                </div>
                                <div id="collapse14" role="tabpanel" aria-labelledby="headingCollapse14" class="collapse"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée
                                            candy canes carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit bear
                                            claw. Sesame snaps cotton candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                            bonbon cookie pie halvah. Cookie toffee ice cream cotton candy lollipop fruitcake. Tart
                                            cheesecake tiramisu danish marzipan pie pastry chocolate cake. Pastry bonbon lollipop oat
                                            cake pastry halvah dessert jelly. Toffee caramels croissant apple pie chupa chups toffee
                                            muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Collapse with left Icon</h5>
                                <p>Use class <code>.collapse-icon.left</code> to set left icon collapse.</p>
                            </div>
                            <div class="card collapse-icon accordion-icon-rotate left">
                                <div id="headingCollapse21" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse21" aria-expanded="true" aria-controls="collapse21"
                                       class="card-title lead">Collapsible Group Item #1</a>
                                </div>
                                <div id="collapse21" role="tabpanel" aria-labelledby="headingCollapse21" class="collapse show">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels
                                            chocolate cake liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie
                                            pudding jelly beans. Wafer liquorice chocolate bar chocolate bar liquorice. Tootsie roll
                                            gingerbread gingerbread chocolate bar tart chupa chups sugar plum toffee. Carrot cake
                                            macaroon sweet danish. Cupcake soufflé toffee marzipan candy canes pie jelly-o. Cotton candy
                                            bonbon powder topping carrot cake cookie caramels lemon drops liquorice. Dessert cookie ice
                                            cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse22" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse22" aria-expanded="false" aria-controls="collapse22"
                                       class="card-title lead collapsed">Collapsible Group Item #2</a>
                                </div>
                                <div id="collapse22" role="tabpanel" aria-labelledby="headingCollapse22" class="collapse"
                                     aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin
                                            jelly marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot cake
                                            topping donut sesame snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit
                                            pastry chocolate cake. Cupcake chocolate biscuit lemon drops cotton candy marshmallow oat
                                            cake donut. Croissant chocolate cake oat cake brownie topping carrot cake jelly beans.
                                            Dessert gingerbread marshmallow pudding donut lemon drops cake. Cake topping gummi bears
                                            cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse23" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse23" aria-expanded="false" aria-controls="collapse23"
                                       class="card-title lead collapsed">Collapsible Group Item #3</a>
                                </div>
                                <div id="collapse23" role="tabpanel" aria-labelledby="headingCollapse23" class="collapse"
                                     aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée
                                            jujubes donut chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly beans
                                            toffee muffin tiramisu sesame snaps brownie. Cake halvah pastry soufflé oat cake candy candy
                                            canes. Lemon drops gummies gingerbread toffee. Tart jelly candy pastry. Pastry cake jelly
                                            beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake. Powder danish candy
                                            carrot cake pastry. Tart marshmallow caramels cake macaroon gummies lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse24" class="card-header">
                                    <a data-toggle="collapse" href="component-collapse.html#collapse24" aria-expanded="false" aria-controls="collapse24"
                                       class="card-title lead collapsed">Collapsible Group Item #4</a>
                                </div>
                                <div id="collapse24" role="tabpanel" aria-labelledby="headingCollapse24" class="collapse"
                                     aria-expanded="false" style="height: 0px;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée
                                            candy canes carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit bear
                                            claw. Sesame snaps cotton candy cheesecake topping ice cream cookie tiramisu. Liquorice
                                            bonbon cookie pie halvah. Cookie toffee ice cream cotton candy lollipop fruitcake. Tart
                                            cheesecake tiramisu danish marzipan pie pastry chocolate cake. Pastry bonbon lollipop oat
                                            cake pastry halvah dessert jelly. Toffee caramels croissant apple pie chupa chups toffee
                                            muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Collapse end -->
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

