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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">

    @endif

@endsection

@section('main')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Card Actions</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="card-actions.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Card Actions
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
            <div class="content-body"><!-- card actions section start -->
                <section id="card-actions">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Card Actions Example</h4>
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
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 mb-2">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Action</th>
                                                                <th>Live</th>
                                                                <th>Details</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-middle">Collapse</td>
                                                                <td>
                                                                    <a data-action="collapse" class="btn btn-sm btn-outline-primary">Collapse</a>
                                                                </td>
                                                                <td> In Card Header, " <i class="ft-minus"></i> " sign given. when you click on this icon, card will be collapsed
                                                                    and change it's sign to " <i class="fa fa-plus"></i> "
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-middle">Reload</td>
                                                                <td>
                                                                    <a data-action="reload" class="btn btn-sm btn-outline-primary">Refresh</a>
                                                                </td>
                                                                <td>In Card Header, " <i class="ft-rotate-cw"></i> " sign given. Click this icon when you want to reload/reset your
                                                                    card
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-middle">Expand</td>
                                                                <td>
                                                                    <a data-action="expand" class="btn btn-sm btn-outline-primary">Toggle</a>
                                                                </td>
                                                                <td> In Card Header, " <i class="ft-maximize"></i> " sign given.It is used to set card in fullscreen &amp; icon
                                                                    changes to " <i class="icon-contract"></i> "
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-middle">Close</td>
                                                                <td>
                                                                    <a data-action="close" class="btn btn-sm btn-outline-primary">Remove</a>
                                                                </td>
                                                                <td> In Card Header, " <i class="ft-x"></i> " sign given to remove card from this page.</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <h4 class="card-title">Card Title</h4>
                                                <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon
                                                    fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut
                                                    soufflé.</p>
                                                <p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow pudding pastry halvah dessert apple pie caramels bonbon toffee.
                                                    Jelly beans brownie sweet bear claw biscuit. Marshmallow jelly gummies marzipan tootsie roll topping.</p>
                                                <p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie roll jelly tart icing bear claw. Gingerbread brownie sweet
                                                    roll cheesecake chocolate cake jelly beans marzipan gummies dessert.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Collapse Example</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake
                                            topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                        <p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow pudding pastry halvah dessert apple pie caramels bonbon toffee. Jelly beans
                                            brownie sweet bear claw biscuit. Marshmallow jelly gummies marzipan tootsie roll topping.</p>
                                        <p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie roll jelly tart icing bear claw. Gingerbread brownie sweet roll
                                            cheesecake chocolate cake jelly beans marzipan gummies dessert.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Refresh Example</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake
                                            topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                        <p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow pudding pastry halvah dessert apple pie caramels bonbon toffee. Jelly beans
                                            brownie sweet bear claw biscuit. Marshmallow jelly gummies marzipan tootsie roll topping.</p>
                                        <p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie roll jelly tart icing bear claw. Gingerbread brownie sweet roll
                                            cheesecake chocolate cake jelly beans marzipan gummies dessert.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Expand/Fullscreen Example</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake
                                            topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                        <p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow pudding pastry halvah dessert apple pie caramels bonbon toffee. Jelly beans
                                            brownie sweet bear claw biscuit. Marshmallow jelly gummies marzipan tootsie roll topping.</p>
                                        <p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie roll jelly tart icing bear claw. Gingerbread brownie sweet roll
                                            cheesecake chocolate cake jelly beans marzipan gummies dessert.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Close Example</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake
                                            topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                        <p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow pudding pastry halvah dessert apple pie caramels bonbon toffee. Jelly beans
                                            brownie sweet bear claw biscuit. Marshmallow jelly gummies marzipan tootsie roll topping.</p>
                                        <p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie roll jelly tart icing bear claw. Gingerbread brownie sweet roll
                                            cheesecake chocolate cake jelly beans marzipan gummies dessert.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // card-actions section end -->
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
