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
                    <h3 class="content-header-title mb-0">Modal</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="component-modals.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Modal
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
            <div class="content-body"><!-- Basic Modals start -->
                <section id="basic-modals">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Modals</h4>
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
                                        <div class="row my-2">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Default Modal</h5>
                                                    <p>Toggle a modal via JavaScript by clicking the button above.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#default">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Modal With Icons</h5>
                                                    <p> With some icons and success alert to give success message.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#iconModal">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Disable Keyboard</h5>
                                                    <p> By Default, closes the modal when escape key is pressed. Disable keyboard interaction using data-backdrop="false".</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-keyboard="false"
                                                            data-target="#keyboard">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="keyboard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel3">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Disable Backdrop</h5>
                                                    <p>Disable backdrop element using data-backdrop="false", it includes a modal-backdrop element. Alternatively, specify static for
                                                        a backdrop which doesn't close the modal on outsidedata-backdrop="false" click.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-backdrop="false"
                                                            data-target="#backdrop">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel4">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Modal Show</h5>
                                                    <p>Manually opens a modal. Returns to the caller before the modal has actually been shown.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-show="false" data-target="#show">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel5">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Disable Animation</h5>
                                                    <p>For modals that simply appear rather than fade in to view, remove the .fade class from your modal markup.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#animation">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal text-left" id="animation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel6"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Modals end -->

                <!-- Modal Themes start -->
                <section id="modal-themes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal Themes</h4>
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
                                        <div class="row my-2">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Primary Modal Template</h5>
                                                    <p>To use primary modal theme, add <code>.bg-primary</code> class to the <code>.modal-header</code> container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-backdrop="false"
                                                            data-target="#primary">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary white">
                                                                    <h4 class="modal-title" id="myModalLabel8">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Success Modal Template</h5>
                                                    <p>To use success modal theme, add <code>.bg-success</code> class to the <code>.modal-header</code> container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#success">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-success white">
                                                                    <h4 class="modal-title" id="myModalLabel9"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-success">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Danger Modal Template</h5>
                                                    <p>To use danger modal theme, add <code>.bg-danger</code> class to the <code>.modal-header</code> container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" data-target="#danger">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger white">
                                                                    <h4 class="modal-title" id="myModalLabel10">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-danger">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Info Modal Template</h5>
                                                    <p>To use info modal theme, add <code>.bg-info</code> class to the <code>.modal-header</code> container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-info block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#info">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-info white">
                                                                    <h4 class="modal-title" id="myModalLabel11">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-info">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Warning Modal Template</h5>
                                                    <p> To use warning modal theme, add <code>.bg-warning</code> class to the <code>.modal-header</code> container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-warning block btn-lg" data-toggle="modal" data-target="#warning">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-warning white">
                                                                    <h4 class="modal-title" id="myModalLabel12"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-warning">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Border Modal Template</h5>
                                                    <p>To use Border color modal theme, add <code>.border-COLORNAME</code> class to the <code>.modal-content</code> container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-pink block btn-lg border-pink pink" data-toggle="modal" data-target="#border">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="border" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content border-pink">
                                                                <div class="modal-header border-bottom-pink">
                                                                    <h4 class="modal-title" id="myModalLabel15"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Modal Themes end -->

                <!-- Modal Sizes start -->
                <section id="modal-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal Sizes</h4>
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
                                        <div class="row my-2">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Extra Small Modal Size</h5>
                                                    <p>Add class <code>.modal-xs</code> with <code>.modal-dialog</code> to use Extra Small size of modal.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#xSmall">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="xSmall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
                                                        <div class="modal-dialog modal-xs" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel20">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Small Modal Size</h5>
                                                    <p>Add class <code>.modal-sm</code> with <code>.modal-dialog</code> to use small size of modal.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#small">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="small" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel19">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Default Modal Size</h5>
                                                    <p>For <code>default size</code>, modal markup doesn't require any additional sizing class.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#defaultSize">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="defaultSize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel18"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Large Modal</h5>
                                                    <p>Add class <code>.modal-lg</code> with <code>.modal-dialog</code> to use large size of modal.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#large">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel17">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Extra Large Modal</h5>
                                                    <p>Add class <code>.modal-xl</code> with <code>.modal-dialog</code> to use extra large size of modal.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#xlarge">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel16">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Modal Sizes end -->

                <!-- Modal Events start -->
                <section id="modal-events">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal Events</h4>
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
                                        <p>Bootstrap’s modal class exposes a few events for hooking into modal functionality. All modal events are fired at the modal itself</p>
                                        <div class="row my-2">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>OnShow Modal Event</h5>
                                                    <p>This event fires immediately when the show instance method is called. If caused by a click, the clicked element is available
                                                        as the relatedTarget property of the event.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onshowbtn" data-target="#onshow">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="onshow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel21" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel21">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>OnShown Modal Event</h5>
                                                    <p>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused
                                                        by a click, the clicked element is available as the relatedTarget property of the event.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onshownbtn" data-target="#onshown">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="onshown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel22" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel22">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>OnHide Modal Event</h5>
                                                    <p>This event is fired immediately when the hide instance method has been called.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onhidebtn" data-target="#onhide">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="onhide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel23" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel23"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>OnHidden Modal Event</h5>
                                                    <p>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete).</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onhiddenbtn" data-target="#onhidden">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="onhidden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel24" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel24">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake
                                                                        candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
                                                                        liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish. Biscuit
                                                                        sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Modal Events end -->

                <!-- Form Components start -->
                <section id="form-components">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Components</h4>
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
                                        <div class="row my-2">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Login Form</h5>
                                                    <p> Created Simple Login Form.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-warning block btn-lg" data-toggle="modal" data-target="#inlineForm">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="component-modals.html#">
                                                                    <div class="modal-body">
                                                                        <label>Email: </label>
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Email Address" class="form-control">
                                                                        </div>

                                                                        <label>Password: </label>
                                                                        <div class="form-group">
                                                                            <input type="password" placeholder="Password" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Form with Icons</h5>
                                                    <p>Login Form With Icon.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-warning block btn-lg" data-toggle="modal" data-target="#iconForm">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="iconForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="myModalLabel34">Modal Title</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form>
                                                                    <div class="modal-body">
                                                                        <label>Email: </label>
                                                                        <div class="form-group position-relative has-icon-left">
                                                                            <input type="text" placeholder="Email Address" class="form-control">
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-envelope font-medium-5 line-height-1 text-muted icon-align"></i>
                                                                            </div>
                                                                        </div>

                                                                        <label>Password: </label>
                                                                        <div class="form-group position-relative has-icon-left">
                                                                            <input type="password" placeholder="Password" class="form-control">
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-lock font-large-1 line-height-1 text-muted icon-align"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Bootstrap Input Style Form</h5>
                                                    <p>Bootstrap Form using Floating Label fields.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-warning block btn-lg" data-toggle="modal" data-target="#bootstrap">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="myModalLabel35"> Modal Title</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form>
                                                                    <div class="modal-body">
                                                                        <fieldset class="form-group floating-label-form-group">
                                                                            <label for="email">Email Address</label>
                                                                            <input type="text" class="form-control" id="email" placeholder="Email Address">
                                                                        </fieldset>
                                                                        <br>
                                                                        <fieldset class="form-group floating-label-form-group">
                                                                            <label for="title">Password</label>
                                                                            <input type="password" class="form-control" id="title" placeholder="Password">
                                                                        </fieldset>
                                                                        <br>
                                                                        <fieldset class="form-group floating-label-form-group">
                                                                            <label for="title1">Description</label>
                                                                            <textarea class="form-control" id="title1" rows="3" placeholder="Description"></textarea>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form Components end -->
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
    <script src="{{asset('admin-assets/js/scripts/modal/components-modal.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
