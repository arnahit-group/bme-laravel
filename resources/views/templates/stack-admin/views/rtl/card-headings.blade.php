@extends('stack-admin.layouts.admin')

@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <!-- END: Vendor CSS-->

@endsection

@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/forms/switch.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/forms/switch.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Card Headings</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="card-headings.html#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Bootstrap Cards
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
            <div class="content-body"><!-- Card headings examples section start -->
                <section id="card-headings">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header" id="heading-links">
                                    <h4 class="card-title">With Links</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <a href="card-headings.html#" class="success">Link 1</a>
                                        <a href="card-headings.html#" class="danger">Link 2</a>
                                        <a href="card-headings.html#" class="info">Link 3</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Content title</h4>
                                    <p class="card-text">Add links in <code>.heading-element</code> div. That will set links on right side of the
                                        header.</p>
                                    <p class="card-text">Caramels lemon drops tootsie roll toffee. Gummi bears macaroon fruitcake sesame snaps
                                        dessert sugar plum lollipop donut jelly-o. Croissant wafer bonbon sweet cake icing chocolate oat cake lemon
                                        drops.</p>
                                    <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake
                                        sugar plum. Marshmallow wafer tiramisu jelly beans.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-labels">With Label &amp; Round label</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <span class="badge badge-info">Label</span>
                                        <span class="badge badge-warning round">Round</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Content title</h4>
                                    <p class="card-text">Add a badge to card with <code>.badge badge-COLOR</code> class with a wrapper of
                                        <code>.heading-elements</code> class.</p>
                                    <p class="card-text">Carrot cake jujubes dragée wafer sesame snaps bear claw lollipop sesame snaps. Tiramisu
                                        pudding jelly beans.</p>
                                    <p class="card-text">Gingerbread brownie sweet roll cheesecake chocolate cake jelly beans marzipan gummies
                                        dessert. Jelly beans sugar plum cheesecake cookie oat cake soufflé.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-pagination">With Pagination</h4>
                                    <div class="heading-elements heading-top-elements">
                                        <nav aria-label="Page navigation">
                                            <ul>
                                                <li class="page-item">
                                                    <a class="page-link border-0" href="card-headings.html#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link border-0" href="card-headings.html#">1</a></li>
                                                <li class="page-item active"><a class="page-link border-0" href="card-headings.html#">2</a></li>
                                                <li class="page-item"><a class="page-link border-0" href="card-headings.html#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link border-0" href="card-headings.html#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Content title</h4>
                                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                        lollipop.</p>
                                    <p class="card-text">Tart lollipop carrot cake sugar plum. Jelly beans sugar plum cheesecake cookie oat cake
                                        soufflé.</p>
                                    <p class="card-text">Soufflé soufflé tart gummies marshmallow. Wafer pie cheesecake marshmallow cookie
                                        tiramisu chocolate sweet roll. Marzipan bonbon carrot cake soufflé pudding halvah topping candy
                                        canes.Fruitcake halvah candy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-prev-next">With Next &amp; Previous</h4>
                                    <div class="heading-elements heading-top-elements">
                                        <nav aria-label="Page navigation">
                                            <ul>
                                                <li class="page-item">
                                                    <button class="page-link btn-sm" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo; Prev</span>
                                                        <span class="sr-only">Previous</span>
                                                    </button>
                                                </li>
                                                <li class="page-item">
                                                    <button class="page-link btn-sm" aria-label="Next">
                                                        <span aria-hidden="true">Next &raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Content title</h4>
                                    <p class="card-text">Cake icing chocolate cake gummi bears cupcake. Cheesecake cupcake icing cotton candy
                                        sugar plum caramels bonbon pastry. Danish jujubes icing sesame snaps.Gingerbread wafer sweet macaroon.</p>
                                    <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                        tiramisu pie powder.</p>
                                    <p class="card-text">Liquorice apple pie cookie tart. Chocolate cake danish chupa chups marshmallow liquorice
                                        danish biscuit oat cake. Cake halvah candy.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-icon">Single Icon</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a href="card-headings.html#"><i class="fa fa-mobile"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-multiple-icons">Multiple Icons</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a href="card-headings.html#"><i class="fa fa-link"></i></a></li>
                                            <li><a href="card-headings.html#"><i class="fa fa-refresh"></i></a></li>
                                            <li><a href="card-headings.html#"><i class="fa fa-cog"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-input">With Basic Input</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-input-icon">Input With Icon</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <fieldset class="position-relative">
                                            <input type="text" class="form-control form-control-sm">
                                            <div class="form-control-position">
                                                <i class="fa fa-arrow-circle-o-right"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12">
                                            <h4 class="card-title" id="heading-input-spinner">Input With Spinner Icon</h4>
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <div class="heading-elements">
                                                <fieldset class="position-relative">
                                                    <input type="text" class="form-control form-control-sm">
                                                    <div class="form-control-position">
                                                        <i class="ft-refresh-cw spinner"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-select">With Basic Select</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <fieldset>
                                            <select class="form-control" id="basicSelect">
                                                <option>Select City</option>
                                                <option>Amsterdam</option>
                                                <option>Antwerp</option>
                                                <option>Athens</option>
                                                <option>Barcelona</option>
                                                <option>Berlin</option>
                                                <option>Birmingham</option>
                                                <option>Bradford</option>
                                                <option>Bremen</option>
                                                <option>Brussels</option>
                                                <option>Bucharest</option>
                                                <option>Budapest</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-checkboxes">Multiple Checkboxes</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <div class="custom-control custom-checkbox custom-control-inline d-inline-block">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">1</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline d-inline-block">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">2</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-colored-checkbox">Colored Checkbox</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <div class="input-group input-group-sm">
                                            <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                <input type="checkbox" class="custom-control-input bg-danger" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">1</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-checkbox mr-1">
                                                <input type="checkbox" class="custom-control-input bg-info" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">2</label>
                                            </div>
                                            <div class="d-inline-block custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-success" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">3</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-radios">Multiple Radios</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <div class="custom-control custom-radio custom-control-inline d-inline-block mr-0">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input"
                                                   checked>
                                            <label class="custom-control-label" for="customRadioInline1">Checked</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline d-inline-block mr-0">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Unchecked</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-colored-radios">Colorful Radios</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <div class="input-group input-group-sm">
                                            <div class="custom-control custom-radio custom-control-inline mr-0">
                                                <input type="radio" id="customRadioInline5" name="customRadioInline5"
                                                       class="custom-control-input bg-danger">
                                                <label class="custom-control-label" for="customRadioInline5">Red</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline mr-0">
                                                <input type="radio" id="customRadioInline6" name="customRadioInline6"
                                                       class="custom-control-input bg-info">
                                                <label class="custom-control-label" for="customRadioInline6">Blue</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline mr-0">
                                                <input type="radio" id="customRadioInline7" name="customRadioInline7"
                                                       class="custom-control-input bg-success">
                                                <label class="custom-control-label" for="customRadioInline7">Green</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-toggle">Bootstrap Toggle</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <input type="checkbox" class="switch" id="switch" data-icon-cls="fa" data-off-icon-cls="fa-thumbs-o-down"
                                               data-on-icon-cls="fa-thumbs-o-up" data-group-cls="btn-group-sm"/>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-switchery">Switchery</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <input type="checkbox" id="switcheryColor" class="switchery" data-size="sm" data-color="info" checked/>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-thumbnail">Single Thumbnail</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
						<span class="avatar">
							<img src="{{asset('admin-assets/images/portrait/small/avatar-s-1.png" alt="avatar')}}">
						</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-multiple-thumbnails">Multiple Thumbnail</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
						<span class="avatar">
							<img src="{{asset('admin-assets/images/portrait/small/avatar-s-2.png" alt="avatar')}}">
						</span>
                                        <span class="avatar">
							<img src="{{asset('admin-assets/images/portrait/small/avatar-s-3.png" alt="avatar')}}">
						</span>
                                        <span class="avatar">
							<img src="{{asset('admin-assets/images/portrait/small/avatar-s-4.png" alt="avatar')}}">
						</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-thumbnail-status">Thumbnail with status</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <a href="card-headings.html#">
							<span class="avatar avatar-online">
								<img src="{{asset('admin-assets/images/portrait/small/avatar-s-18.png" alt="avatar')}}">
								<i></i>
							</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-notification">With notification</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <a href="card-headings.html#">
							<span class="avatar avatar-online">
								<img src="{{asset('admin-assets/images/portrait/small/avatar-s-21.png" alt="avatar')}}">
								<span class="badge badge-pill badge-danger badge-up badge-glow">3</span>
							</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-buttons1">Buttons</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <button type="button" class="btn btn-sm btn-icon btn-success">
                                            <i class="ft-user white"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-primary">Click</button>
                                        <button type="button" class="btn btn-sm bg-blue-grey white"><i class="fa fa-cog white"></i> Click</button>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-buttons2">Buttons</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <button type="button" class="btn btn-sm btn-outline-success">Click</button>
                                        <button type="button" class="btn btn-sm btn-round btn-outline-info">
                                            <i class="fa fa-heart-o info"></i>
                                            Click
                                        </button>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-dropdown">With Dropdown</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Default</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="card-headings.html#">Action</a>
                                                <a class="dropdown-item" href="card-headings.html#">Another action</a>
                                                <a class="dropdown-item" href="card-headings.html#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="card-headings.html#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-icon-dropdown">With Icon &amp; Dropdown</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <button type="button" class="btn btn-round btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i class="ft-user"></i> Default
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="card-headings.html#">Action</a>
                                            <a class="dropdown-item" href="card-headings.html#">Another action</a>
                                            <a class="dropdown-item" href="card-headings.html#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="card-headings.html#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-icon-buttons">Multiple Icon Buttons</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <a href="card-headings.html#" class="btn btn-float btn-round btn-secondary"><i class="ft-thumbs-up"></i></a>
                                        <a href="card-headings.html#" class="btn btn-float btn-round btn-secondary"><i class="ft-thumbs-down"></i></a>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="heading-social-buttons">Social Buttons</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <div class="social-buttons">
                                            <!-- Social Icons Outline Buttons -->
                                            <a href="card-headings.html#" class="btn btn-social-icon btn-sm mr-1 btn-linkedin"><span class="fa fa-linkedin"></span></a>
                                            <a href="card-headings.html#" class="btn btn-social-icon btn-sm mr-1 btn-pinterest"><span
                                                        class="fa fa-pinterest-p"></span></a>
                                            <a href="card-headings.html#" class="btn btn-social-icon btn-sm mr-1 btn-google"><span class="fa fa-google"></span></a>
                                            <a href="card-headings.html#" class="btn btn-social-icon btn-sm mr-1 btn-facebook"><span class="fa fa-facebook"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Content title</h4>
                                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice
                                            tiramisu pie powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.</p>
                                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow
                                            lollipop chupa chups donut fruitcake cake.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Card headings examples section end -->
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
    <script src="{{asset('admin-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection

@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/forms/switch.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
