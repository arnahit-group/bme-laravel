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
                    <h3 class="content-header-title mb-0">Tables styling</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="table-styling.html#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Table Styling
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
            <div class="content-body"><!-- Default styling start -->
                <div class="row" id="default">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default styling</h4>
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
                                <div class="card-body card-dashboard ">
                                    <p class="card-text">Example of a table with bootstrap default styling. By default any table with <code>.table</code> class has
                                        <em>transparent</em> background color.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*****</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>**********</td>
                                            </tr>
                                            <tr>
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default styling end -->
                <!-- Table header styling start -->
                <div class="row" id="header-styling">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table header styling</h4>
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
                                <div class="card-body card-dashboard">
                                    <p class="card-text">Example of a custom table <em>header</em> styling. Table header supports default contextual and custom background colors
                                        available in <a
                                                href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/colors-primary-palette.html"
                                                target="_blank">bootstrap brand colors</a>. To use bootstrap brand color in the table header, add <code>.bg-*</code> class to the
                                        header row. All border and text colors will be automatically adjusted.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-success">
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>******</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>***********</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-body card-dashboard">
                                    <p>Apart form bootstrap color options you can also use Stack Admin color palette options, To set the selected bg color lighten use
                                        <code>.bg-*</code> where <code>*</code> is the value of your selected color from palette, and with that use <code>.bg-lighten-*</code> or
                                        <code>.bg-darken-*</code> class where <code>*</code> is the value between '1-5' of your selected lighten/darken color from stack color
                                        palette. So for color lighten 4 bg class will be <code>.bg-lighten-4</code>.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="bg-yellow bg-lighten-4">
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>******</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>***********</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table header styling end -->
                <!-- Table footer styling start -->
                <div class="row" id="footer-styling">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table footer styling</h4>
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
                                <div class="card-body card-dashboard">
                                    <p class="card-text">Example of a custom table <em>footer</em> styling. Table footer supports default contextual and custom background colors
                                        available in <a
                                                href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/colors-primary-palette.html"
                                                target="_blank">bootstrap brand colors</a>. To use bootstrap brand color in the table footer, add <code>.bg-*</code> class to the
                                        footer row. All border and text colors will be automatically adjusted.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>******</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>***********</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="bg-success">
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="table-responsive">
                                        <div class="card-body card-dashboard">
                                            <p>Apart form bootstrap color options you can also use Stack Admin color palette options, To set the selected bg color lighten use
                                                <code>.bg-*</code> where <code>*</code> is the value of your selected color from palette, and with that use
                                                <code>.bg-lighten-*</code> or <code>.bg-darken-*</code> class where <code>*</code> is the value between '1-5' of your selected
                                                lighten/darken color from stack color palette. So for color lighten 4 bg class will be <code>.bg-lighten-4</code>.</p>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>John</td>
                                                        <td>Doe</td>
                                                        <td>john@example.com</td>
                                                        <td>********</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mary</td>
                                                        <td>Moe</td>
                                                        <td>mary@example.com</td>
                                                        <td>******</td>
                                                    </tr>
                                                    <tr>
                                                        <td>July</td>
                                                        <td>Dooley</td>
                                                        <td>july@example.com</td>
                                                        <td>********</td>
                                                    </tr>
                                                    <tr>
                                                        <td>July</td>
                                                        <td>Dooley</td>
                                                        <td>july@example.com</td>
                                                        <td>***********</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot class="bg-yellow bg-lighten-4">
                                                    <tr>
                                                        <th>Firstname</th>
                                                        <th>Lastname</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table footer styling end -->
                <!-- Contingent classes start -->
                <div class="row" id="contingent">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contingent classes</h4>
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
                                <div class="card-body card-dashboard">
                                    <p class="card-text">Example of Contingent classes for table <code>rows</code>. Contingent classes are used to color table rows or individual
                                        cells. It use Bootstrap by default colors.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-success bg-lighten-2">
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>Approved</td>
                                            </tr>
                                            <tr class="bg-danger bg-lighten-2">
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*********</td>
                                                <td>Declined</td>
                                            </tr>
                                            <tr class="bg-warning bg-lighten-2">
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>******</td>
                                                <td>Pending</td>
                                            </tr>
                                            <tr class="bg-info bg-lighten-2">
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>*********</td>
                                                <td>Information</td>
                                            </tr>
                                            <tr class="bg-active bg-lighten-2">
                                                <td>Jon</td>
                                                <td>Snow</td>
                                                <td>july@example.com</td>
                                                <td>***********</td>
                                                <td>Active</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-body card-dashboard">
                                    <p>Stack Admin color palette options can be use also for the contingent classes, To set the selected bg color lighten use <code>.bg-*</code>
                                        where <code>*</code> is the value of your selected color from palette, and with that use <code>.bg-lighten-*</code> or
                                        <code>.bg-darken-*</code> class where <code>*</code> is the value between '1-5' of your selected lighten/darken color from stack color
                                        palette. So for color lighten 4 bg class will be <code>.bg-lighten-4</code>.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-blue bg-lighten-4">
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>Approved</td>
                                            </tr>
                                            <tr class="bg-teal bg-lighten-4">
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*********</td>
                                                <td>Declined</td>
                                            </tr>
                                            <tr class="bg-pink bg-lighten-4">
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>******</td>
                                                <td>Pending</td>
                                            </tr>
                                            <tr class="bg-purple bg-lighten-4">
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>*********</td>
                                                <td>Information</td>
                                            </tr>
                                            <tr class="bg-yellow bg-lighten-4">
                                                <td>Jon</td>
                                                <td>Snow</td>
                                                <td>july@example.com</td>
                                                <td>***********</td>
                                                <td>Active</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contingent classes end -->
                <!-- Custom row colors start -->
                <div class="row" id="row-color">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom row colors</h4>
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
                                <div class="card-body card-dashboard">
                                    <p class="card-text">Example of <em>custom colors</em> for table rows. Add custom background colors available in <a
                                                href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/colors-primary-palette.html"
                                                target="_blank">bootstrap brand colors</a>. To use bootstrap brand color in the table footer, add <code>.bg-*</code> class to the
                                        footer row. All border and text colors will be automatically adjusted.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-success">
                                                <td>Alexandra</td>
                                                <td>Blake</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>Approved</td>
                                            </tr>
                                            <tr>
                                                <td>Alonso</td>
                                                <td>Lanier</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="bg-danger">
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*********</td>
                                                <td>Declined</td>
                                            </tr>
                                            <tr>
                                                <td>Carol</td>
                                                <td>Sankey</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="bg-warning">
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>******</td>
                                                <td>Pending</td>
                                            </tr>
                                            <tr>
                                                <td>Andrea</td>
                                                <td>Baker</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="bg-info">
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>*********</td>
                                                <td>Information</td>
                                            </tr>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="bg-active">
                                                <td>Claire</td>
                                                <td>Burgess</td>
                                                <td>july@example.com</td>
                                                <td>***********</td>
                                                <td>Active</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-body card-dashboard">
                                    <p>Stack Admin color palette options can be use also for the custom row color, To set the selected bg color lighten use <code>.bg-*</code> where
                                        <code>*</code> is the value of your selected color from palette, and with that use <code>.bg-lighten-*</code> or <code>.bg-darken-*</code>
                                        class where <code>*</code> is the value between '1-5' of your selected lighten/darken color from stack color palette. So for color lighten 4
                                        bg class will be <code>.bg-lighten-4</code>.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-blue bg-lighten-5">
                                                <td>Alexandra</td>
                                                <td>Blake</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>Approved</td>
                                            </tr>
                                            <tr>
                                                <td>Alonso</td>
                                                <td>Lanier</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="bg-teal bg-lighten-5">
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*********</td>
                                                <td>Declined</td>
                                            </tr>
                                            <tr>
                                                <td>Carol</td>
                                                <td>Sankey</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="bg-pink bg-lighten-5">
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>******</td>
                                                <td>Pending</td>
                                            </tr>
                                            <tr>
                                                <td>Andrea</td>
                                                <td>Baker</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="bg-purple bg-lighten-5">
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>*********</td>
                                                <td>Information</td>
                                            </tr>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>***********</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="bg-yellow bg-lighten-5">
                                                <td>Claire</td>
                                                <td>Burgess</td>
                                                <td>july@example.com</td>
                                                <td>***********</td>
                                                <td>Active</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Custom row colors end -->
                <!-- Custom table formatting start -->
                <div class="row" id="table-formatting">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom table formatting</h4>
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
                                <div class="card-body card-dashboard">
                                    <p class="card-text">Example of a table with custom <em>formatting</em> color. Add custom background colors available in <a
                                                href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/colors-primary-palette.html"
                                                target="_blank">bootstrap brand colors</a>. To use bootstrap brand color in the table footer, add <code>.bg-*</code> class to the
                                        footer row. All border and text colors will be automatically adjusted.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table bg-primary">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*****</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>**********</td>
                                            </tr>
                                            <tr>
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-bold-600 px-1">Header and footer formatting</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary bg-darken-1">
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-primary">
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*****</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>**********</td>
                                            </tr>
                                            <tr>
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="bg-primary bg-darken-1">
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="card-body card-dashboard">
                                    <p>Stack Admin color palette options can be use also for the custom table formatting, To set the selected bg color lighten use
                                        <code>.bg-*</code> where <code>*</code> is the value of your selected color from palette, and with that use <code>.bg-lighten-*</code> or
                                        <code>.bg-darken-*</code> class where <code>*</code> is the value between '1-5' of your selected lighten/darken color from stack color
                                        palette. So for color lighten 4 bg class will be <code>.bg-lighten-4</code>.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-inverse bg-purple bg-lighten-2">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*****</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>**********</td>
                                            </tr>
                                            <tr>
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-bold-600 px-1">Header and footer formatting</p>
                                <div class="table-responsive">
                                    <table class="table table-inverse mb-0">
                                        <thead class="bg-purple bg-lighten-1">
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-purple bg-lighten-2">
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*****</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>**********</td>
                                            </tr>
                                            <tr>
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="bg-purple bg-lighten-1">
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Custom table formatting end -->
                <!-- Table formatting options start -->
                <div class="row" id="formatting-options">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table formatting options</h4>
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
                                <div class="card-body card-dashboard">
                                    <p class="card-text">Table with custom formatting color supports all default table layouts and options. In this example our table displays all
                                        possible borders, striped rows and changes background color on row hover.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table bg-warning table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*****</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>**********</td>
                                            </tr>
                                            <tr>
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-body card-dashboard">
                                    <p>Stack Admin color palette options can be use also for the custom table formatting options, To set the selected bg color lighten use <code>.bg-*</code>
                                        where <code>*</code> is the value of your selected color from palette, and with that use <code>.bg-lighten-*</code> or
                                        <code>.bg-darken-*</code> class where <code>*</code> is the value between '1-5' of your selected lighten/darken color from stack color
                                        palette. So for color lighten 4 bg class will be <code>.bg-lighten-4</code>.</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table bg-red bg-lighten-1 table-inverse table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                                <td>********</td>
                                            </tr>
                                            <tr>
                                                <td>Mary</td>
                                                <td>Moe</td>
                                                <td>mary@example.com</td>
                                                <td>*****</td>
                                            </tr>
                                            <tr>
                                                <td>July</td>
                                                <td>Dooley</td>
                                                <td>july@example.com</td>
                                                <td>**********</td>
                                            </tr>
                                            <tr>
                                                <td>Piter</td>
                                                <td>pan</td>
                                                <td>july@example.com</td>
                                                <td>********</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table formatting options end -->

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
