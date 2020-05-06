@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/tags/tagging.css')}}">
    <!-- END: Vendor CSS-->

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
                    <h3 class="content-header-title mb-0">Tag Inputs</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="form-tags-input.html#">Form Components</a>
                                </li>
                                <li class="breadcrumb-item active">Tag Inputs
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
            <div class="content-body"><!-- Tagging JS start -->
                <section class="tagging-js-tags" id="tagging-js">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Tagging JS</h4>
                        </div>
                    </div>

                    <div class="row match-height">
                        <!-- Tagging JS Simple Options -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Options</h4>
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
                                        <!-- Allow Case Sensitive -->
                                        <fieldset>
                                            <label>Allow Case Sensitive</label>
                                            <div class="form-group">
                                                <div class="case-sensitive form-control" data-tags-input-name="case-sensitive">Australia, India, USA</div>
                                                <p class="text-muted">By default <code>case-sensitive</code> is <code>false</code>. Set it to <code>true</code> to allow case
                                                    sensitive.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Disable Close Char -->
                                        <fieldset>
                                            <label>Disable Close Char</label>
                                            <div class="form-group">
                                                <div class="close-char form-control" data-tags-input-name="close-char">Sydney, Beijing</div>
                                                <p class="text-muted">By default close char is <code>"&times;"</code>. Pass empty string <code>close-char:""</code> To remove close
                                                    char.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Delete tag on delete -->
                                        <fieldset>
                                            <label>Delete tag on delete</label>
                                            <div class="form-group">
                                                <div class="edit-on-delete form-control" data-tags-input-name="edit-on-delete">Cairo, Amsterdam, Washington</div>
                                                <p class="text-muted">By default you can edit the tag you just deleted from the tag box. set it <code>edit-on-delete:false</code> to
                                                    avoid that.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Allow Duplicate Tag -->
                                        <fieldset>
                                            <label>Allow Duplicate Tag</label>
                                            <div class="form-group">
                                                <div class="no-duplicate form-control" data-tags-input-name="no-duplicate">India, Brazil</div>
                                                <p class="text-muted">By Default duplicate tags are not allowed, set <code>no-duplicate:false</code> to allow duplicates.</p>
                                            </div>
                                        </fieldset>

                                        <!-- No Enter -->
                                        <fieldset>
                                            <label>No Enter</label>
                                            <div class="form-group">
                                                <div class="no-enter form-control" data-tags-input-name="no-enter">Amsterdam, Beijing</div>
                                                <p class="text-muted">Enter key add a new tag by default, set it <code>no-enter:true</code> to avoid that.</p>
                                            </div>
                                        </fieldset>

                                        <!-- No Comma -->
                                        <fieldset>
                                            <label>No Comma</label>
                                            <div class="form-group">
                                                <div class="no-comma form-control" data-tags-input-name="no-comma">Sydney, Washington</div>
                                                <p class="text-muted">Comma <code>","</code> key add a new tag by default, set it <code>no-comma:true</code> to avoid that.</p>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tagging JS Advance Options -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Advance Options</h4>
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

                                        <!-- Forbidden Chars -->
                                        <fieldset>
                                            <label>Forbidden Chars</label>
                                            <div class="form-group">
                                                <div class="forbidden-chars form-control" data-tags-input-name="forbidden-chars">Australia, India, USA</div>
                                                <p class="text-muted">You can pass an array like <code>["," , ".", "_", "?"]</code> of forbidden chars.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Forbidden Words -->
                                        <fieldset>
                                            <label>Forbidden Words</label>
                                            <div class="form-group">
                                                <div class="forbidden-words form-control" data-tags-input-name="forbidden-words">Sydney, Beijing</div>
                                                <p class="text-muted">Following words as forbidden, <code>"bastard","bitch","biatch","bloody"</code>.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Pre Tags Separator -->
                                        <fieldset>
                                            <label>Pre Tags Separator</label>
                                            <div class="form-group">
                                                <div class="pre-tags-separator form-control" data-tags-input-name="pre-tags-separator">Cairo / Amsterdam / Washington</div>
                                                <p class="text-muted">Define your pre tag separator. In this example <code>/</code> is used as pre tag separator.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Tag On Blur -->
                                        <fieldset>
                                            <label>Tag On Blur</label>
                                            <div class="form-group">
                                                <div class="badge-on-blur form-control" data-tags-input-name="badge-on-blur">India, Brazil</div>
                                                <p class="text-muted">If <code>false</code>, clicking away from the $type_zone won't add a new tag.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Tag Char -->
                                        <fieldset>
                                            <label>Tag Char</label>
                                            <div class="form-group">
                                                <div class="badge-char form-control" data-tags-input-name="badge-char">Amsterdam, Beijing</div>
                                                <p class="text-muted">Define your tag char. In this example we have used <code>*</code> as tag char.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Type Zone Class -->
                                        <fieldset>
                                            <label>Type Zone Class</label>
                                            <div class="form-group">
                                                <div class="type-zone-class form-control" data-tags-input-name="type-zone-class">Sydney, Washington</div>
                                                <p class="text-muted">Define your Class of the type-zone.</p>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Tagging JS end -->


                <!-- Tagging-methods start -->
                <section class="tagging-methods">
                    <div class="row match-height">
                        <!-- Tagging JS Simple Methods -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Methods</h4>
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
                                        <!-- Add -->
                                        <fieldset>
                                            <label>Add</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="add-box form-control" data-tags-input-name="add-box">Australia, India, USA</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info add-tagging" type="button">Add Sydney</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Remove -->
                                        <fieldset>
                                            <label>Remove</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="remove-box form-control " data-tags-input-name="remove-box">Sydney, Beijing, Cairo</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info remove-tagging" type="button">Remove Cairo</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Remove All -->
                                        <fieldset>
                                            <label>Remove All</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="remove-all-box form-control " data-tags-input-name="remove-all-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info remove-all-tagging" type="button">Remove All</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Refresh -->
                                        <fieldset>
                                            <label>Refresh</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="refresh-box form-control " data-tags-input-name="refresh-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info refresh-tagging" type="button">Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Reset -->
                                        <fieldset>
                                            <label>Reset</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="reset-box form-control " data-tags-input-name="reset-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info reset-tagging" type="button">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Destroy -->
                                        <fieldset>
                                            <label>Destroy</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="destroy-box form-control " data-tags-input-name="destroy-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info destroy-tagging" type="button">Destroy</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tagging JS Advance Methods -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Advance Methods</h4>
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

                                        <!-- Add Special Keys -->
                                        <fieldset>
                                            <label>Add Special Keys</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="special-keys-box form-control " data-tags-input-name="special-keys-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info add-special-keys" type="button">Add Keys</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Focus Input -->
                                        <fieldset>
                                            <label>Focus Input</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="focus-input-box form-control " data-tags-input-name="focus-input-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info focus-input" type="button">Focus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Get Special Keys -->
                                        <fieldset>
                                            <label>Get Special Keys</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="get-special-keys-box form-control " data-tags-input-name="get-special-keys-box">Washington, Sydney, Beijing
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info get-special-keys" type="button">Get Keys</button>
                                                    </div>
                                                </div>
                                                <p class="text-muted">Check your console to see the special key objects.</p>
                                                <div class="form-group">
                                                    <span>Returns object</span>
                                                    <div class="prism-show-language">
                                                        <div class="prism-show-language-label">JavaScript</div>
                                                    </div>
                                                    <pre class=" language-javascript">
                                        <code class="language-javascript">
                                            Object {comma: 188, enter: 13, spacebar: 32, del: 46, backspace: 8}
                                        </code>
                                    </pre>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Val Input -->
                                        <fieldset>
                                            <label>Val Input</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="val-input-box form-control " data-tags-input-name="val-input-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info val-input" type="button">Val Input</button>
                                                    </div>
                                                </div>
                                                <p class="text-muted">Check your console to see the returned value.</p>
                                                <div class="form-group">
                                                    <span>Returned Value</span>
                                                    <div class="prism-show-language">
                                                        <div class="prism-show-language-label">JavaScript</div>
                                                    </div>
                                                    <pre class=" language-javascript">
                                        <code class="language-javascript">
                                            cairo
                                        </code>
                                    </pre>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Tagging-methods end -->
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
    <script src="{{asset('admin-assets/vendors/js/forms/tags/tagging.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/prism.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/forms/tags/tagging.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
