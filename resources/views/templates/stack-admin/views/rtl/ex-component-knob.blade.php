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
                    <h3 class="content-header-title mb-0">Knob</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="ex-component-knob.html#">Extra Components</a>
                                </li>
                                <li class="breadcrumb-item active">Knob
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
            <div class="content-body"><!-- Knob example section start -->
                <section id="knob-examples">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="75" class="knob basic-dial">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable Display Input</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="35" class="knob hide-value" data-displayInput="false" data-fgColor="#00B5B8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Cursor Mode</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="29" class="knob cursor-mode" data-width="150" data-cursor="true" data-thickness=".3" data-fgColor="#FFA87D">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Display Previous Value</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="44" class="knob previous-val" data-displayPrevious="true" data-min="-100" data-fgColor="#2196F3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Angle Offset</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="35" class="knob angle-offset" data-angleOffset="90" data-linecap="round" data-fgColor="#FFA87D">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Angle Offset And Arc</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="44" class="knob angle-offset-arc" data-angleOffset="-125" data-angleArc="250" data-rotation="anticlockwise"
                                                   data-fgColor="#FF7588">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">4 Digit, Step 0.1</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" class="knob steps" data-step=".1" data-min="-10000" data-max="10000" value="0" data-displayPrevious="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Overloaded Draw Method</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="44" class="knob overload-draw" data-skin="tron" data-thickness=".2" data-displayPrevious="true"
                                                   data-fgColor="#00B5B8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Overload Draw Thickness</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="35" class="knob overload-draw-thick" data-thickness=".1" data-skin="tron" data-angleOffset="180"
                                                   data-fgColor="#2196F3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Superpose Clock</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="mx-auto position-relative width-250 height-250">
                                            <div style="position:absolute;left:10px;top:10px">
                                                <input class="knob hour" data-min="0" data-max="24" data-bgColor="#eeeeee" data-fgColor="#FF7588" data-displayInput="false"
                                                       data-width="200" data-height="200" data-thickness=".3">
                                            </div>
                                            <div style="position:absolute;left:50px;top:50px">
                                                <input class="knob minute" data-min="0" data-max="60" data-bgColor="#eeeeee" data-fgColor="#16D39A" data-displayInput="false"
                                                       data-width="120" data-height="120" data-thickness=".45">
                                            </div>
                                            <div style="position:absolute;left:85px;top:85px">
                                                <input class="knob second" data-min="0" data-max="60" data-bgColor="#eeeeee" data-fgColor="#FFA87D" data-displayInput="false"
                                                       data-width="50" data-height="50" data-thickness=".3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Read Only</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="44" class="knob read-only" data-readOnly="true" data-thickness=".4" data-fgColor="#FFA87D">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Infinite</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <input type="text" value="44" class="infinite" data-cursor="true" data-thickness=".5" data-fgColor="#16D39A" data-bgColor="#EEEEEE"
                                                   data-displayInput="false">
                                            <div class="infinite-val mx-auto width-100 mb-2">
                                                <span class="idir float-right font-medium-3"></span>
                                                <span class="ival font-medium-3"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Responsive</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row justify-content-md-center">
                                            <div class="col-sm-12 col-md-6 text-center height-400">
                                                <input class="knob responsive" data-width="80%" value="35" data-fgColor="#2196F3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Knob example section end -->


                <!-- Knob behaviors, UI & hooks section start -->
                <section id="knob-options">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Behaviors</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul>
                                            <li><strong>min</strong> : min value (default=0)</li>
                                            <li><strong>max</strong> : max value (default=100)</li>
                                            <li><strong>step</strong> : step size (default=1)</li>
                                            <li><strong>angleOffset</strong> : starting angle in degrees (default=0)</li>
                                            <li><strong>angleArc</strong> : arc size in degrees (default=360)</li>
                                            <li><strong>stopper</strong> : stop at min &amp; max on keydown/mousewheel (default=true)</li>
                                            <li><strong>readOnly</strong> : disable input and events (default=false)</li>
                                            <li><strong>rotation</strong> : direction of progression (default=clockwise)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">UI</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul>
                                            <li><strong>cursor</strong> : display mode “cursor”, cursor size could be changed passing a numeric value to the option, default width
                                                is used when passing boolean value “true” (default=gauge)
                                            </li>
                                            <li><strong>thickness</strong> : gauge thickness</li>
                                            <li><strong>lineCap</strong> : gauge stroke endings (default=butt, round=rounded line endings)</li>
                                            <li><strong>width</strong> : dial width</li>
                                            <li><strong>height</strong> : dial height</li>
                                            <li><strong>displayInput</strong> : display input (default=true)</li>
                                            <li><strong>displayPrevious</strong> : displays the previous value with transparency (default=false)</li>
                                            <li><strong>fgColor</strong> : foreground color</li>
                                            <li><strong>inputColor</strong> : input value (number) color</li>
                                            <li><strong>font</strong> : font family</li>
                                            <li><strong>fontWeight</strong> : font weight</li>
                                            <li><strong>bgColor</strong> : background color</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hooks</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul>
                                            <li><p><strong>‘release’</strong> : executed on release</p>
                                                <p>Parameters : + value : int, current value</p></li>
                                            <li><p><strong>‘change’</strong> : executed at each change of the value</p>
                                                <p>Parameters : + value : int, current value</p></li>
                                            <li><p><strong>‘draw’</strong> : when drawing the canvas</p>
                                                <p>Context : - this.g : canvas context 2D (see Canvas documentation) - this.$ : jQuery wrapped element - this.o : options - this.i :
                                                    input - … console.log(this);</p></li>
                                            <li><p><strong>‘cancel’</strong> : triggered on [esc] keydown</p></li>
                                            <li><p><strong>‘format’</strong> : allows to format output (add unit %, ms …)</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Knob behaviors, UI & hooks section end -->
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
    <script src="{{asset('admin-assets/vendors/js/extensions/jquery.knob.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/extensions/knob.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
