@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/forms/switch.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/forms/validation/form-validation.css')}}">
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
                    <h3 class="content-header-title mb-0">JQuery Bootstrap Validation</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="form-validation.html#">Form Components</a>
                                </li>
                                <li class="breadcrumb-item active">JQuery Bootstrap Validation
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
            <div class="content-body"><!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inputs Validation</h4>
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
                                        <p class="mt-1">Add <code>novalidate</code> attribute to form tag.</p>
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Basic Text Input <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" required
                                                                   data-validation-required-message="This field is required">
                                                        </div>
                                                        <p class="mt-1">Add <code>required</code> attribute to field for required
                                                            validation.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Email Field <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" required
                                                                   data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Repeat Email Field <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email2" data-validation-match-match="email"
                                                                   class="form-control" required>
                                                            <p class="mt-1">Add <code>data-validation-match-match</code> attribute with
                                                                the field name as value to match with it.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Password Input Field <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control" required
                                                                   data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Repeat Password Input Field <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password2"
                                                                   data-validation-match-match="password" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Input with Right Icon <span class="required">*</span></h5>
                                                        <div class="controls position-relative has-icon-right">
                                                            <input type="text" class="form-control" placeholder="Addon To Right"
                                                                   data-validation-required-message="This field is required">
                                                            <div class="form-control-position">
                                                                <i class="fa fa-code-fork"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Input addon with Right Icon <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Addon To Right"
                                                                       data-validation-required-message="This field is required">
                                                                <div class="input-group-append">
													<span class="input-group-text" id="basic-addon5"><i
                                                                class="fa fa-suitcase"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Maximum Character Length <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="maxChar" class="form-control" required
                                                                   data-validation-required-message="This field is required"
                                                                   maxlength="10">
                                                        </div>
                                                        <p class="mt-1">Add <code>maxlength</code> attribute for maximum number of
                                                            characters to accept. Also use
                                                            <code>data-validation-maxlength-message</code> attribute for maxlength
                                                            failure message</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Minimum Character Length <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="minChar" class="form-control" required
                                                                   data-validation-required-message="This field is required" minlength="6">
                                                            <p class="mt-1">Add <code>minlength</code> attribute for minimum number of
                                                                characters to accept. Also use
                                                                <code>data-validation-minlength-message</code> attribute for minlength
                                                                failure message</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Only Numbers <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">$</span>
                                                                </div>
                                                                <input type="number" name="onlyNum" class="form-control" required
                                                                       data-validation-required-message="This field is required">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Maximum Number <span class="required">*</span></h5>
                                                        <small><i>Must be lower than 25</i></small>
                                                        <div class="controls">
                                                            <input type="number" name="maxNum" class="form-control" required
                                                                   data-validation-required-message="This field is required" max="25">
                                                        </div>
                                                        <p class="mt-1">Add <code>max</code> attribute for maximum number to accept.
                                                            Also use <code>data-validation-max-message</code> attribute for max failure
                                                            message</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Minimum Number <span class="required">*</span></h5>
                                                        <small><i>Must be higher than 10</i></small>
                                                        <div class="controls">
                                                            <input type="number" name="minNum" class="form-control" required
                                                                   data-validation-required-message="This field is required" min="10">
                                                        </div>
                                                        <p class="mt-1">Add <code>min</code> attribute for minimum number to accept.
                                                            Also use <code>data-validation-min-message</code> attribute for min failure
                                                            message</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>File Input Field <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="file" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Custom Required Message <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="textRange" class="form-control" required
                                                                   data-validation-required-message="This is custom message"
                                                                   placeholder="Custom Message">
                                                            <p class="mt-1">Add <code>data-validation-required-message</code> attribute
                                                                for Custom required failure message</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Text Input Range <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="text" class="form-control" required
                                                                   data-validation-required-message="This field is required" minlength="10"
                                                                   maxlength="20" placeholder="Enter number between 10 &amp; 20">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Input with Button <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Button on right"
                                                                       required>
                                                                <span class="input-group-append" id="button-addon2">
													<button class="btn btn-warning" type="button">
														<i class="fa fa-pencil"></i>
													</button>
												</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Touchspin</h5>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control touchspin" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>No Characters, Only Numbers <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="noChar" class="form-control" required
                                                                   data-validation-containsnumber-regex="(\d)+"
                                                                   data-validation-containsnumber-message="No Characters Allowed, Only Numbers">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Pattern <span class="required">*</span>
                                                            <small><i>Must start with 'a' and
                                                                    end with 'z'</i></small>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" name="pattern" pattern="a.*z"
                                                                   data-validation-pattern-message="Must start with 'a' and end with 'z'"
                                                                   class="form-control" required>
                                                            <p class="mt-1">Add <code>pattern</code> attribute to set input pattern.
                                                                Also use <code>data-validation-pattern-message</code> attribute for
                                                                pattern failure message</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Enter URL <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" placeholder="Add URL"
                                                                   data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*"
                                                                   data-validation-regex-message="Only Valid URL's">
                                                            <p class="mt-1">Add <code>data-validation-regex-regex</code> attribute for
                                                                regular expression. Also use <code>data-validation-regex-message</code>
                                                                attribute for regex failure message</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Enter Email Address <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" placeholder="Email Address"
                                                                   data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                                                                   data-validation-regex-message="Enter Valid Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Enter Date <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" placeholder="MM/DD/YYYY"
                                                                   data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                                                                   data-validation-regex-message="Enter Valid Date">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Basic Select <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select name="select" id="select" required class="form-control">
                                                                <option value="">Select Your City</option>
                                                                <option value="1">Amsterdam</option>
                                                                <option value="2">Antwerp</option>
                                                                <option value="3">Athens</option>
                                                                <option value="4">Barcelona</option>
                                                                <option value="5">Berlin</option>
                                                                <option value="6">Birmingham</option>
                                                                <option value="7">Bradford</option>
                                                                <option value="8">Bremen</option>
                                                                <option value="9">Brussels</option>
                                                                <option value="10">Bucharest</option>
                                                                <option value="11">Budapest</option>
                                                                <option value="12">Cologne</option>
                                                                <option value="13">Copenhagen</option>
                                                                <option value="14">Dortmund</option>
                                                                <option value="15">Dresden</option>
                                                                <option value="16">Dublin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Basic Textarea <span class="required">*</span></h5>
                                                        <div class="controls">
											<textarea name="textarea" id="textarea" class="form-control" required
                                                      placeholder="Basic Textarea"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-success">Submit <i
                                                                    class="fa fa-thumbs-o-up position-right"></i></button>
                                                        <button type="reset" class="btn btn-danger">Reset <i
                                                                    class="fa fa-refresh position-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->


                <!-- Checkbox Validation start -->
                <section class="checkbox-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Checkbox Validation</h4>
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
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <h5><strong>Basic Checkbox </strong><span class="required">*</span></h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="checkbox" value="" id="single_checkbox" required>
                                                                        <label for="single_checkbox">I am unchecked Checkbox</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5><strong>Checkbox Group </strong><span class="required">*</span></h5>
                                                                <div class="controls">
                                                                    <div>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value="" name="basic_checkbox"
                                                                                   required id="check_group1">
                                                                            <label for="check_group1">I am unchecked Checkbox</label>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value="" name="basic_checkbox"
                                                                                   id="check_group2">
                                                                            <label for="check_group2">I am unchecked too</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5><strong>Maximum Checkbox selection</strong><span
                                                                            class="required">*</span></h5>
                                                                <div class="controls">
                                                                    <div>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value=""
                                                                                   data-validation-maxchecked-maxchecked="2"
                                                                                   data-validation-maxchecked-message="Don't be greedy!"
                                                                                   name="max_checkbox" required id="check_max1">
                                                                            <label for="check_max1">I am unchecked Checkbox</label>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value="" name="max_checkbox"
                                                                                   id="check_max2">
                                                                            <label for="check_max2">I am unchecked too</label>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value="" name="max_checkbox"
                                                                                   id="check_max3">
                                                                            <label for="check_max3">You can check me</label>
                                                                        </div>
                                                                    </div>
                                                                    <p>Select any 2 options</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <h5><strong>Minimum Checkbox selection</strong><span
                                                                            class="required">*</span></h5>
                                                                <div class="controls">
                                                                    <div>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value=""
                                                                                   data-validation-minchecked-minchecked="2"
                                                                                   data-validation-minchecked-message="Choose at least two"
                                                                                   name="min_checkbox" required id="check_min1">
                                                                            <label for="check_min1">I am unchecked Checkbox</label>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value="" name="min_checkbox"
                                                                                   id="check_min2">
                                                                            <label for="check_min2">I am unchecked too</label>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="skin skin-square">
                                                                            <input type="checkbox" value="" name="min_checkbox"
                                                                                   id="check_min3">
                                                                            <label for="check_min3">You can check me</label>
                                                                        </div>
                                                                    </div>
                                                                    <p>Select any 2 options</p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5><strong>Radio Group </strong><span class="required">*</span></h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="1" name="basic_radio" required
                                                                               id="radio1">
                                                                        <label for="radio1">Check Me</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="2" name="basic_radio" id="radio2">
                                                                        <label for="radio2">Or Me</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <h5><strong>Styled Checkbox </strong><span class="required">*</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" required value="single"
                                                                               name="styled_single_checkbox" class="custom-control-input"
                                                                               id="customCheck">
                                                                        <label class="custom-control-label" for="customCheck">Check this
                                                                            custom checkbox</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5><strong>Styled Checkbox Group </strong><span
                                                                            class="required">*</span></h5>
                                                                <div class="controls">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" value="x" name="styled_checkbox" required
                                                                               class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1">I am
                                                                            unchecked Checkbox</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" required value="y" name="styled_checkbox"
                                                                               class="custom-control-input" id="customCheck2">
                                                                        <label class="custom-control-label" for="customCheck2">I am
                                                                            unchecked too</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5><strong>Maximum Styled Checkbox selection</strong><span
                                                                            class="required">*</span></h5>
                                                                <div class="controls">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="styled_max_checkbox"
                                                                               data-validation-maxchecked-maxchecked="2"
                                                                               data-validation-maxchecked-message="Don't be greedy!"
                                                                               required class="custom-control-input" id="customCheck6">
                                                                        <label class="custom-control-label" for="customCheck6">I am
                                                                            unchecked Checkbox</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="styled_max_checkbox"
                                                                               class="custom-control-input" id="customCheck7">
                                                                        <label class="custom-control-label" for="customCheck7">I am
                                                                            unchecked too</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="styled_max_checkbox"
                                                                               class="custom-control-input" id="customCheck8">
                                                                        <label class="custom-control-label" for="customCheck8">You can
                                                                            check me</label>
                                                                    </div>
                                                                </div>
                                                                <p>Select any 2 options</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <h5><strong>Minimum Styled Checkbox selection</strong><span
                                                                            class="required">*</span></h5>
                                                                <div class="controls">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" value="1"
                                                                               data-validation-minchecked-minchecked="2"
                                                                               data-validation-minchecked-message="Choose at least two"
                                                                               name="styled_min_checkbox" required
                                                                               class="custom-control-input" id="customCheck9">
                                                                        <label class="custom-control-label" for="customCheck9">I am
                                                                            unchecked Checkbox</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" value="2" name="styled_min_checkbox"
                                                                               class="custom-control-input" id="customCheck10">
                                                                        <label class="custom-control-label" for="customCheck10">I am
                                                                            unchecked too</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" value="3" name="styled_min_checkbox"
                                                                               class="custom-control-input" id="customCheck11">
                                                                        <label class="custom-control-label" for="customCheck11">You can
                                                                            check me</label>
                                                                    </div>
                                                                </div>
                                                                <p>Select any 2 options</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <h5><strong>Styled Radio Group </strong><span class="required">*</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" value="1" name="styled_radio" required
                                                                               id="styled_radio1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="styled_radio1">Check
                                                                            me</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" value="2" name="styled_radio" required
                                                                               id="styled_radio2" class="custom-control-input">
                                                                        <label class="custom-control-label" for="styled_radio2">Or
                                                                            me</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-success">Submit <i
                                                                    class="fa fa-thumbs-o-up position-right"></i></button>
                                                        <button type="reset" class="btn btn-danger">Reset <i
                                                                    class="fa fa-refresh position-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Checkbox Validation end -->


                <!-- Switch Validation start -->
                <section class="switch-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Switch Validation</h4>
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
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <h5><strong>Single Switchery </strong><span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="checkbox" name="single_switchery" class="switchery" required>
                                                            I am unchecked Switchery
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5><strong>Inline Switchery Group </strong><span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <div class="pb-1">
                                                                <input type="checkbox" class="switchery" name="inline_switchery"
                                                                       required id="switchery_inline1">
                                                                <label for="switchery_inline1">I am unchecked Switchery</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" class="switchery" name="inline_switchery"
                                                                       id="switchery_inline2">
                                                                <label for="switchery_inline2">I am unchecked too</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <h5><strong>Switchery Group </strong><span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <div class="pb-1">
                                                                <input type="checkbox" class="switchery" name="basic_switchery" required
                                                                       id="switchery_group1">
                                                                <label for="switchery_group1">I am unchecked Switchery</label>
                                                            </div>
                                                            <div class="pb-1">
                                                                <input type="checkbox" class="switchery" name="basic_switchery"
                                                                       id="switchery_group2">
                                                                <label for="switchery_group2">I am unchecked too</label>
                                                            </div>
                                                            <div>
                                                                <input type="checkbox" class="switchery" name="basic_switchery"
                                                                       id="switchery_group3">
                                                                <label for="switchery_group3">You can check me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-success">Submit <i
                                                                    class="fa fa-thumbs-o-up position-right"></i></button>
                                                        <button type="reset" class="btn btn-danger">Reset <i
                                                                    class="fa fa-refresh position-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Switch Validation end -->
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
    <script src="{{asset('admin-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/forms/validation/form-validation.js')}}"></script>
    <!-- END: Page JS-->


@endsection
