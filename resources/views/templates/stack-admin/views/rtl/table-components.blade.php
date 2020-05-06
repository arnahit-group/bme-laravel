@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/forms/switch.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-callout.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/forms/switch.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Table components</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="table-components.html#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Table Components
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
            <div class="content-body"><!-- UI components start -->
                <div class="row" id="ui">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">UI components</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-responsive table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Button</td>
                                                <td class="width-350">
                                                    <button type="button" class="btn btn-success mr-1 mb-1">Default Buttons</button>
                                                </td>
                                                <td>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</td>
                                            </tr>
                                            <tr>
                                                <td>Round Buttons</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-round mr-1 mb-1">Default Buttons</button>
                                                </td>
                                                <td>Use <code>.btn-round</code> class to button for Round Buttons.</td>
                                            </tr>
                                            <tr>
                                                <td>Button dropdowns</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info dropdown-toggle mr-1 mb-1" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Info
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="table-components.html#">Action</a>
                                                            <a class="dropdown-item" href="table-components.html#">Another action</a>
                                                            <a class="dropdown-item" href="table-components.html#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="table-components.html#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </td>
                                                <td>Turn a button into a dropdown toggle with some basic markup changes.</td>
                                            </tr>
                                            <tr>
                                                <td>Basic Button group</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-success">Success</button>
                                                        <button type="button" class="btn btn-warning">Warning</button>
                                                    </div>
                                                </td>
                                                <td>Group a series of buttons together on a single line with the button group. Wrap a series of buttons with <code>.btn</code> in
                                                    <code>.btn-group.</code></td>
                                            </tr>
                                            <tr>
                                                <td>Buttons with Icon</td>
                                                <td>
                                                    <button type="button" class="btn btn-info mr-1 mb-1"><i class="ft-info"></i> Info</button>
                                                </td>
                                                <td>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</td>
                                            </tr>
                                            <tr>
                                                <td>Icon Button</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-success mr-1"><i class="ft-camera"></i></button>
                                                </td>
                                                <td>Simple Icon Button</td>
                                            </tr>
                                            <tr>
                                                <td>Floating Buttons</td>
                                                <td>
                                                    <button type="button" class="btn btn-float btn-info"><i class="ft-search"></i><span>search</span></button>
                                                </td>
                                                <td>Floating action buttons are used for a special type of promoted action. They are distinguished by a circled icon floating above
                                                    the UI and have special motion behaviors related to morphing, launching, and the transferring anchor point.
                                                    <p>
                                                        Use the class <code>.btn</code> along with class <code>.btn-floating</code></p> .
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Loading Buttons</td>
                                                <td>
                                                    <button class="btn btn-primary mr-1 mb-1 ladda-button" data-style="expand-up"><span class="ladda-label">Expand UP</span>
                                                    </button>
                                                </td>
                                                <td>Expand Animation Buttons</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- UI components end -->
                <!-- Alerts start -->
                <div class="row" id="alerts">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alerts</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Basic Alert</td>
                                                <td class="width-350">
                                                    <div class="alert alert-primary" role="alert">
                                                        <strong>Good Morning!</strong> Start your day with some alerts.
                                                    </div>
                                                </td>
                                                <td>Alerts are available for any length of text, as well as an optional dismiss button. Add <code>.alert.alert-COLOR</code> classes
                                                    for alert with all theme colors.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alerts with Links</td>
                                                <td>
                                                    <div class="alert alert-info" role="alert">
                                                        <strong>Heads up!</strong> This alert needs <a href="table-components.html#" class="alert-link">your attention</a>, but it's
                                                        not super important.
                                                    </div>
                                                </td>
                                                <td>Add <code>.alert-link</code> class to add links to alerts.</td>
                                            </tr>
                                            <tr>
                                                <td>Dismissible Alerts</td>
                                                <td>
                                                    <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <strong>Good Morning!</strong> Start <a href="table-components.html#" class="alert-link">your day</a> with some alerts.
                                                    </div>
                                                </td>
                                                <td>
                                                    Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding to the right of the alert and
                                                    positions the <code>.close</code> button. On the dismiss button, add the <code>data-dismiss="alert"</code> attribute, which
                                                    triggers the JavaScript functionality. Be sure to use the <code>&lt;button&gt;</code> element with it for proper behavior across
                                                    all devices. To animate alerts when dismissing them, be sure to add the <code>.fade</code> and <code>.in</code> classes.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alerts with icons</td>
                                                <td>
                                                    <div class="alert alert-icon-left alert-primary alert-dismissible mb-2" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <strong>Good Morning!</strong> Start <a href="table-components.html#" class="alert-link">your day</a> with some alerts.
                                                    </div>
                                                </td>
                                                <td>
                                                    To add left/right icons to the alert, use class <code>.alert-icon-left</code> or <code>alert-icon-right</code> as required.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Alerts end -->
                <!-- Callouts start -->
                <div class="row" id="callouts">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Callouts</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200"> Basic Callout</td>
                                                <td class="width-350">
                                                    <div class="bs-callout-info callout-border-left p-1">
                                                        <strong>Great Job!</strong>
                                                        <p>Biscuit macaroon tootsie roll croissant. Dessert candy canes halvah cookie liquorice.</p>
                                                    </div>
                                                </td>
                                                <td>Use <code>.bs-callout-COLOR</code> for color callout.</td>
                                            </tr>
                                            <tr>
                                                <td>Right Bordered Callouts</td>
                                                <td>
                                                    <div class="bs-callout-danger callout-bordered callout-border-right p-1">
                                                        <strong>Not Bad!</strong>
                                                        <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly.</p>
                                                    </div>
                                                </td>
                                                <td>Use <code>.callout-border-right</code> for right bordered callout.</td>
                                            </tr>
                                            <tr>
                                                <td>Callout with transparent Background</td>
                                                <td>
                                                    <div class="bs-callout-pink callout-transparent callout-border-left p-1">
                                                        <h4 class="pink">Super cool!</h4>
                                                        <p>Cupcake macaroon chupa chups fruitcake. Candy canes cotton candy dessert.</p>
                                                    </div>
                                                </td>
                                                <td>Use <code>.callout-transparent</code> for callout with white background.</td>
                                            </tr>
                                            <tr>
                                                <td>Callout With Icon</td>
                                                <td>
                                                    <div class="bs-callout-success mt-1">
                                                        <div class="media align-items-stretch">
                                                            <div class="media-left media-middle bg-success p-2 pt-3">
                                                                <i class="ft-eye white"></i>
                                                            </div>
                                                            <div class="media-body p-1">
                                                                <strong>Congratulations!</strong>
                                                                <p>Cake chupa chups tootsie roll brownie pastry marzipan lollipop sweet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Use class <code>.callout-icon</code> to use icon with callout.</td>
                                            </tr>
                                            <tr>
                                                <td>Round Callout</td>
                                                <td>
                                                    <div class="bs-callout-danger callout-round callout-bordered callout-transparent p-1">
                                                        <strong>Not Bad!</strong>
                                                        <p>Croissant carrot cake sesame snaps dessert wafer dessert wafer icing jelly.</p>
                                                    </div>
                                                </td>
                                                <td>Use class <code>.callout-round</code> for round callout.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Callouts end -->
                <!-- Progress start -->
                <div class="row" id="progress">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Progress</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Default Progress</td>
                                                <td class="width-350">
                                                    <div class="text-center" id="example-caption-2">Reticulating splines&hellip; 25%</div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100" style="width:25%"
                                                             aria-describedby="example-caption-2"></div>
                                                    </div>
                                                </td>
                                                <td>To caption a progress bar, simply add a <code>&lt;div&gt;</code> with your caption text, align the text using a utility class,
                                                    and associate the caption with the progress element using the aria-describedby attribute.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Striped Progress</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="60"
                                                             aria-valuemax="100" style="width:60%"></div>
                                                    </div>
                                                </td>
                                                <td>Uses a gradient to create a striped effect.</td>
                                            </tr>
                                            <tr>
                                                <td>Progress Sizes</td>
                                                <td>
                                                    <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100" style="width:25%"
                                                             aria-describedby="example-caption-2"></div>
                                                    </div>
                                                </td>
                                                <td>Different sized progress. For Default progress, No size class needed.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Progress end -->
                <!-- Checkboxes start -->
                <div class="row" id="checkbox">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Checkboxes</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Basic Checkbox</td>
                                                <td class="width-350">
                                                    <div class="card-body">
                                                        <fieldset class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="" checked> I am checked Checkbox
                                                            </label>
                                                        </fieldset>
                                                    </div>
                                                </td>
                                                <td>Basic Checkbox</td>
                                            </tr>
                                            <tr>
                                                <td>Default iCheck Checkbox</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="icheck1">
                                                            <fieldset>
                                                                <input type="checkbox" id="input-2" checked>
                                                                <label for="input-2">Checkbox Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.icheck1</code> to use icheck checkbox.</td>
                                            </tr>
                                            <tr>
                                                <td>Basic Skin iCheck</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="icheck2 skin">
                                                            <fieldset>
                                                                <input type="checkbox" id="input-6" checked>
                                                                <label for="input-6">Checkbox Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.icheck2.skin</code> for this style of checkbox.</td>
                                            </tr>
                                            <tr>
                                                <td>Square Skin iCheck</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="skin skin-square">
                                                            <fieldset>
                                                                <input type="checkbox" id="input-12" checked>
                                                                <label for="input-12">Checkbox Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.skin.skin-square</code> for square and colored checkbox. Have to do color changes using JS.</td>
                                            </tr>
                                            <tr>
                                                <td>Flat Skin iCheck</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="skin skin-flat">
                                                            <fieldset>
                                                                <input type="checkbox" id="input-16" checked>
                                                                <label for="input-16">Checkbox Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.skin.skin-flat</code> for Flat colored checkbox. Have to do color changes using JS.</td>
                                            </tr>
                                            <tr>
                                                <td>Polaris Skin iCheck</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="skin skin-polaris">
                                                            <fieldset>
                                                                <input type="checkbox" id="input-22" checked>
                                                                <label for="input-22">Checkbox Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.skin.skin-polaris</code> for polaris checkbox.</td>
                                            </tr>
                                            <tr>
                                                <td>Futurico Skin iCheck</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="skin skin-futurico">
                                                            <fieldset>
                                                                <input type="checkbox" id="input-26" checked>
                                                                <label for="input-26">Checkbox Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.skin.skin-futurico</code> for futurico checkbox.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checkboxes end -->
                <!-- Radio Buttons start -->
                <div class="row" id="radio">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Radio Buttons</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Basic Radio Buttons</td>
                                                <td class="width-350">
                                                    <div class="card-body">
                                                        <fieldset class="radio">
                                                            <label>
                                                                <input type="radio" name="radio" value="" checked> I am checked Radio Button
                                                            </label>
                                                        </fieldset>
                                                    </div>
                                                </td>
                                                <td>Basic Radio Buttons</td>
                                            </tr>
                                            <tr>
                                                <td>Basic iCheck Radio</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="icheck1">
                                                            <fieldset>
                                                                <input type="radio" name="input-radio-1" id="input-radio-2" checked>
                                                                <label for="input-radio-2">Radio Button Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.icheck1</code> to use default icheck radio button.</td>
                                            </tr>
                                            <tr>
                                                <td>Another iCheck Radio Option</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="icheck2 skin">
                                                            <fieldset>
                                                                <input type="radio" name="input-radio-2" id="input-radio-6" checked>
                                                                <label for="input-radio-6">Radio Button Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.icheck2</code> with <code>.skin</code> to use another icheck radio style.</td>
                                            </tr>
                                            <tr>
                                                <td>Flat Skin iCheck Radio</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="skin skin-flat">
                                                            <fieldset>
                                                                <input type="radio" name="input-radio-4" id="input-radio-16" checked>
                                                                <label for="input-radio-16">Radio Button Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.skin.skin-flat</code> for Flat colored radio. Have to do color changes using JS.</td>
                                            </tr>
                                            <tr>
                                                <td>Polaris Skin iCheck Radio</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="skin skin-polaris">
                                                            <fieldset>
                                                                <input type="radio" name="input-radio-5" id="input-radio-22" checked>
                                                                <label for="input-radio-22">Radio Button Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.skin.skin-polaris</code> for polaris radio.</td>
                                            </tr>
                                            <tr>
                                                <td>Futurico Skin iCheck Radio</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="skin skin-futurico">
                                                            <fieldset>
                                                                <input type="radio" name="input-radio-6" id="input-radio-26" checked>
                                                                <label for="input-radio-26">Radio Button Checked</label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Wrap with <code>.skin.skin-futurico</code> for futurico radio.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Radio Buttons end -->
                <!-- Select start -->
                <div class="row" id="select">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Select</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Single Select2</td>
                                                <td class="width-350">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <select class="select2 form-control">
                                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                </optgroup>
                                                                <optgroup label="Pacific Time Zone">
                                                                    <option value="CA">California</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                </optgroup>
                                                                <optgroup label="Mountain Time Zone">
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </optgroup>
                                                                <optgroup label="Central Time Zone">
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                </optgroup>
                                                                <optgroup label="Eastern Time Zone">
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Use <code>.select2</code> class for basic select2 control.</td>
                                            </tr>
                                            <tr>
                                                <td>Disabled Mode</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <select class="select2 form-control" id="single_disabled" disabled>
                                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                </optgroup>
                                                                <optgroup label="Pacific Time Zone">
                                                                    <option value="CA">California</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                </optgroup>
                                                                <optgroup label="Mountain Time Zone">
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </optgroup>
                                                                <optgroup label="Central Time Zone">
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                </optgroup>
                                                                <optgroup label="Eastern Time Zone">
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Select2 will respond to the <code>disabled</code> attribute on <code>&lt;select&gt;</code> elements. You can also initialize
                                                    Select2 with <code>disabled: true</code> to get the same effect.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Select With Icon</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons">
                                                                <optgroup label="Services">
                                                                    <option value="wordpress2" data-icon="fa fa-wordpress" selected>WordPress</option>
                                                                    <option value="codepen" data-icon="fa fa-codepen">Codepen</option>
                                                                    <option value="drupal" data-icon="fa fa-drupal">Drupal</option>
                                                                    <option value="pinterest2" data-icon="fa fa-css3">CSS3</option>
                                                                    <option value="html5" data-icon="fa fa-html5">HTML5</option>
                                                                </optgroup>
                                                                <optgroup label="File types">
                                                                    <option value="pdf" data-icon="fa fa-file-pdf-o">PDF</option>
                                                                    <option value="word" data-icon="fa fa-file-word-o">Word</option>
                                                                    <option value="excel" data-icon="fa fa-file-excel-o">Excel</option>
                                                                    <option value="facebook" data-icon="fa fa-facebook-official">Facebook</option>
                                                                </optgroup>
                                                                <optgroup label="Browsers">
                                                                    <option value="chrome" data-icon="fa fa-chrome">Chrome</option>
                                                                    <option value="firefox" data-icon="fa fa-firefox">Firefox</option>
                                                                    <option value="safari" data-icon="fa fa-safari">Safari</option>
                                                                    <option value="opera" data-icon="fa fa-opera">Opera</option>
                                                                    <option value="IE" data-icon="fa fa-internet-explorer">IE</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Use data attribute <code>data-icon</code> to add icon name for each options. And use class <code>.select2-icons</code> to set
                                                    icon with option.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Template support</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <select class="select2-theme form-control" id="select2-theme">
                                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                </optgroup>
                                                                <optgroup label="Pacific Time Zone">
                                                                    <option value="CA">California</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                </optgroup>
                                                                <optgroup label="Mountain Time Zone">
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </optgroup>
                                                                <optgroup label="Central Time Zone">
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                </optgroup>
                                                                <optgroup label="Eastern Time Zone">
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Select2 supports custom themes using the theme option so you can style Select2 to match the rest of your application. These are
                                                    using the <code>classic</code> theme, which matches the old look of Select2.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Templating</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <select class="select2-templating form-control" id="select2-templating">
                                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                </optgroup>
                                                                <optgroup label="Pacific Time Zone">
                                                                    <option value="CA">California</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                </optgroup>
                                                                <optgroup label="Mountain Time Zone">
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </optgroup>
                                                                <optgroup label="Central Time Zone">
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                </optgroup>
                                                                <optgroup label="Eastern Time Zone">
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Various display options of the Select2 component can be changed: You can access the <code>&lt;option&gt;</code> element (or
                                                    <code>&lt;optgroup&gt;</code>) and any attributes on those elements using .element. Templating is primarily controlled by the
                                                    <code>templateResult</code> and <code>templateSelection</code> options.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Extra Small Select</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <select class="select2-size-xs form-control" id="xsmall-select">
                                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                </optgroup>
                                                                <optgroup label="Pacific Time Zone">
                                                                    <option value="CA">California</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                </optgroup>
                                                                <optgroup label="Mountain Time Zone">
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </optgroup>
                                                                <optgroup label="Central Time Zone">
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                </optgroup>
                                                                <optgroup label="Eastern Time Zone">
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>For different sizes of select2, Use classes like <code>.select2-size-lg, .select2-size-sm, .select2-size-lg,</code> & <code>select2-size-xs</code>
                                                    for Large, & small Select respectively.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Select end -->
                <!-- Input start -->
                <div class="row" id="input">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Default Input text</td>
                                                <td class="width-350">
                                                    <div class="card-body">
                                                        <input type="text" class="form-control" id="basicInput">
                                                    </div>
                                                </td>
                                                <td>Standard form controls supported in all example form elements. Form controls automatically receives global styling. The
                                                    .form-group class is the easiest way to add some structure to form elements like <code> &lt;input&gt;, &lt;textarea&gt;, </code>and<code>&lt;select&gt;</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Input Font Color</td>
                                                <td>
                                                    <div class="card-body">
                                                        <input type="text" class="form-control primary" id="textColor" value="Primary colored Text">
                                                    </div>
                                                </td>
                                                <td>Input Primary colored Font</td>
                                            </tr>
                                            <tr>
                                                <td>Input Border Color</td>
                                                <td>
                                                    <div class="card-body">
                                                        <input type="text" class="form-control border-success" id="textColor1" placeholder="Success bordered Input">
                                                    </div>
                                                </td>
                                                <td>Input Success Border Color</td>
                                            </tr>
                                            <tr>
                                                <td>Input Background Color</td>
                                                <td>
                                                    <div class="card-body">
                                                        <input type="text" class="form-control bg-warning" id="textColor2" value="Background color Input">
                                                    </div>
                                                </td>
                                                <td>Background Warning Color Input</td>
                                            </tr>
                                            <tr>
                                                <td>Default Input with Left Icon</td>
                                                <td>
                                                    <div class="card-body">
                                                        <fieldset class="form-group position-relative has-icon-left">
                                                            <input type="text" class="form-control" id="iconLeft" placeholder="Icon Left, Default Input">
                                                            <div class="form-control-position">
                                                                <i class="ft-phone-call primary"></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </td>
                                                <td>Left Icon Default Input</td>
                                            </tr>
                                            <tr>
                                                <td>Default Input group</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Add span with <code>.input-group-prepend</code> class before <code>&lt;input&gt;</code></td>
                                            </tr>
                                            <tr>
                                                <td>Input group with Switchery</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="radio-addon1">
                                                    <input type="checkbox" id="switchery1" class="switchery" data-size="xs" checked/>
    											</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-lg" placeholder="Input with Left switchery"
                                                                   aria-describedby="radio-addon1"/>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Add span with <code>.input-group-prepend</code> class before <code>&lt;input&gt;</code> text and Add switchery inside.</td>
                                            </tr>
                                            <tr>
                                                <td>Primary Touchspin</td>
                                                <td>
                                                    <div class="card-body">
                                                        <div class="input-group">
                                                            <div class="input-group">
                                                                <input type="text" class="touchspin" value="50" data-bts-button-down-class="btn btn-primary"
                                                                       data-bts-button-up-class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>set <code>data-bts-button-down-class</code> & <code>data-bts-button-up-class</code> attribute and add value as <code>btn
                                                        btn-primary</code> for Primary color spinner.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Input end -->
                <!-- Badges start -->
                <div class="row" id="badges">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Badges</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Basic Pills</td>
                                                <td class="text-center width-350">
                                                    <div class="badge badge-pill badge-info">59</div>
                                                </td>
                                                <td>Use the <code>.badge </code>class, followed by <code>.badge-pill</code> with <code>.badge-secondary</code> class within element
                                                    to create default pill.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pills With Glow effect</td>
                                                <td class="text-center">
                                                    <div class="badge badge-glow badge-pill badge-warning">68</div>
                                                </td>
                                                <td>Use the <code>.badge</code> class, followed by .badge-pill with <code>.badge-glow</code> class within element to create <code>glow</code>
                                                    styled pill.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pills with Icons</td>
                                                <td class="text-center">
                                                    <div class="badge badge-pill badge-danger label-square">
                                                        <i class="font-medium-2 icon-line-height ft-droplet"></i>
                                                    </div>
                                                </td>
                                                <td>I dont have text to put hear</td>
                                            </tr>
                                            <tr>
                                                <td>Pills as Notification</td>
                                                <td class="text-center">
                                                    <i class="font-medium-5 icon-line-height fa fa-calendar"></i>
                                                    <span class="badge badge-pill badge-glow badge-primary badge-up">1</span>
                                                </td>
                                                <td>Use <code>.badge-up</code> to set pill to higher than other text. So that it can work with notifications also.</td>
                                            </tr>
                                            <tr>
                                                <td>Bordered Badges (Pills)</td>
                                                <td class="text-center">
                                                    <div class="badge badge-pill badge-border border-success success">25</div>
                                                </td>
                                                <td>Use the <code>.badge</code> class, followed by<code>.badge-border</code> with <code>.badge-success</code> class within element
                                                    to create success pill.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Badges end -->
                <!-- Tooltip Triggers start -->
                <div class="row" id="tooltip">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tooltip Triggers</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Hover</td>
                                                <td class="width-350">
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-info" data-toggle="tooltip" data-original-title="Hover Triggered">
                                                            On Hover Trigger
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>Use <code>data-trigger="hover"</code> for hover trigger. This is a default trigger.</td>
                                            </tr>
                                            <tr>
                                                <td>Click</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-success" data-toggle="tooltip" data-original-title="Click Triggered"
                                                                data-trigger="click">
                                                            On Click Trigger
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>Use <code>data-trigger="click"</code> for click trigger.</td>
                                            </tr>
                                            <tr>
                                                <td>Focus</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-warning" data-toggle="tooltip" data-original-title="Focus Triggered"
                                                                data-trigger="focus">
                                                            On Focus Trigger
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>Use <code>data-trigger="focus"</code> for focus trigger.</td>
                                            </tr>
                                            <tr>
                                                <td>Manual</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-danger manual" data-toggle="tooltip" data-original-title="Manual Triggered"
                                                                data-trigger="manual">
                                                            On Manual Trigger
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>Use <code>data-trigger="manual"</code> for manual trigger. You can do show/hide using js</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tooltip Triggers end -->
                <!-- Tags start -->
                <div class="row" id="tags">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tags</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Info Label</td>
                                                <td class="text-center width-350">
                                                    <div class="badge badge-info">Info Label</div>
                                                </td>
                                                <td>Use the <code>.badge</code> class, followed by<code>.badge-info</code> class within element to create info label.</td>
                                            </tr>
                                            <tr>
                                                <td>Tags with Icons</td>
                                                <td class="text-center">
                                                    <div class="badge badge-primary label-square">
                                                        <i class="fa fa-paperclip font-medium-2"></i>
                                                        <span>Primary Label</span>
                                                    </div>
                                                </td>
                                                <td>Use the .badge class, followed by<code>.badge-square</code> class for square bordered label.</td>
                                            </tr>
                                            <tr>
                                                <td>Tags with Only Icons</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success round">
                                                        <i class="font-medium-2 icon-line-height ft-upload"></i>
                                                    </div>
                                                </td>
                                                <td>Use the <code>.badge</code> class, followed by<code>.round</code> class for round warning label.</td>
                                            </tr>
                                            <tr>
                                                <td>Bordered Tags</td>
                                                <td class="text-center">
                                                    <div class="tag border-danger danger badge-border">Danger Label</div>
                                                </td>
                                                <td>Use the <code>.badge-bordered</code> with class <code>.badge</code>. Also use <code>.border-COLOR</code> class to add border and
                                                    use <code>.COLOR</code> for text color
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tags end -->
                <!-- Switch start -->
                <div class="row" id="switch">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Switch</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Simple Switch</td>
                                                <td class="text-center width-350">
                                                    <div class="card-body">
                                                        <input type="checkbox" class="switch" id="switch1" checked="checked"/>
                                                    </div>
                                                </td>
                                                <td>Add <code>.switch</code> class to checkbox to set as switch</td>
                                            </tr>
                                            <tr>
                                                <td>Small Switch</td>
                                                <td class="text-center">
                                                    <div class="card-body">
                                                        <input type="checkbox" class="switch" id="switch5" data-group-cls="btn-group-sm"/>
                                                    </div>
                                                </td>
                                                <td>Add <code>data-group-cls="btn-group-sm"</code> attribute for small switch</td>
                                            </tr>
                                            <tr>
                                                <td>Switch with Icons</td>
                                                <td class="text-center">
                                                    <div class="card-body">
                                                        <input type="checkbox" class="switch" id="switch9" data-icon-cls="fa" data-off-icon-cls="fa-thumbs-o-down"
                                                               data-on-icon-cls="fa-thumbs-o-up"/>
                                                    </div>
                                                </td>
                                                <td>Add <code>data-icon-cls="fa"</code> to set font family you are using <code>data-off-icon-cls="fa FONT_AWESOME_ICON"</code>
                                                    attribute for off switch icon & <code>data-on-icon-cls="fa FONT_AWESOME_ICON"</code> attribute for on switch icon
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Basic Switchery Toggle</td>
                                                <td class="text-center">
                                                    <div class="card-body">
                                                        <input type="checkbox" id="switchery2" class="switchery" checked/>
                                                    </div>
                                                </td>
                                                <td>To set Switchery toggle, add <code>.switchery</code> class to checkbox.</td>
                                            </tr>
                                            <tr>
                                                <td>Small Switchery</td>
                                                <td class="text-center">
                                                    <div class="card-body">
                                                        <input type="checkbox" id="switcherySize2" class="switchery" data-size="sm" checked/>
                                                    </div>
                                                </td>
                                                <td>To set Small Switchery toggle, add <code>data-size="sm"</code> attribute with class <code>.switchery</code> to checkbox.</td>
                                            </tr>
                                            <tr>
                                                <td>Color Switchery (Danger Switchery)</td>
                                                <td class="text-center">
                                                    <div class="card-body">
                                                        <input type="checkbox" id="switcheryColor3" class="switchery" data-color="danger" checked/>
                                                    </div>
                                                </td>
                                                <td>To get Danger Switchery, add <code>data-color="danger"</code> attribute to checkbox.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Switch end -->
                <!-- Chart start -->
                <div class="row" id="chart">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chart</h4>
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
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="width-200">Sparkline Chart</td>
                                                <td class="text-center width-350">
                                                    <div id="chart1"></div>
                                                </td>
                                                <td>Sparkline is a very small chart, usually drawn without axes and other elements of a chart.</td>
                                            </tr>
                                            <tr>
                                                <td>Sparkline Chart</td>
                                                <td class="text-center">
                                                    <div id="chart2"></div>
                                                </td>
                                                <td>This is sparkline bar chart.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart end -->

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
    <script src="{{asset('admin-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="../../../../www.google.com/jsapi.JS"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/jquery.sparkline.min.js')}}"></script>
    <!-- END: Page Vendor JS-->


@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/tables/components/table-components.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
