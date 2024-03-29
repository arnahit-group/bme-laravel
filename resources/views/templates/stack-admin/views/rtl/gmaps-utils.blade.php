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
                    <h3 class="content-header-title mb-0">gmaps - Utils</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="gmaps-utils.html#">gmaps</a>
                                </li>
                                <li class="breadcrumb-item active">Utils
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
            <div class="content-body"><!-- gmaps utils section start -->
                <section id="gmaps-utils">
                    <!-- Context Menu -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Context Menu</h4>
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

                                        <p class="card-text">You must define the <strong>control</strong> that the context menu is attached (<strong>map</strong> or
                                            <strong>marker</strong>) and an array of <strong>options</strong> with <code>title</code>, <code>name</code> and <code>action</code>
                                            Inside <code>action</code> you can use <code>this</code> for the GMaps.js object (<code>map</code> in this case) and MouseEvent object
                                            <code>e</code>.</p>

                                        <div id="context-menu" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Geofences -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Geofences</h4>
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

                                        <p>You must define an <strong>outside</strong> callback, which will use this <code>marker</code> and its <code>fence</code>.</p>

                                        <p>You also can use <code>checkMarkerGeofence</code> or <code>checkGeofence</code> methods.</p>

                                        <div id="geofences" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Controls -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Controls</h4>
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
                                        <p class="card-text">You can use the following positions:</p>
                                        <ul>
                                            <li>top_center</li>
                                            <li>top_left</li>
                                            <li>top_right</li>
                                            <li>left_top</li>
                                            <li>right_top</li>
                                            <li>left_center</li>
                                            <li>right_center</li>
                                            <li>left_bottom</li>
                                            <li>right_bottom</li>
                                            <li>bottom_center</li>
                                            <li>bottom_left</li>
                                            <li>bottom_right</li>
                                        </ul>
                                        <p class="card-text">You can learn more of custom controls <a href="https://developers.google.com/maps/documentation/javascript/controls">here</a>.
                                        </p>
                                        <div id="custom-controls" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fusion Table Layers -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Fusion Table Layers</h4>
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
                                        <p class="card-text">You can learn more about Fusion Table layers <a
                                                    href="https://developers.google.com/maps/documentation/javascript/layers#FusionTables">here</a>.</p>
                                        <div id="fusion-table-layers" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KML and GeoRSS Layers -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">KML and GeoRSS Layers</h4>
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
                                        <p class="card-text">You can learn more about KML and GeoRSS layers <a
                                                    href="https://developers.google.com/maps/documentation/javascript/layers#KMLLayers">here</a>.</p>
                                        <div id="kml-layers" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Types -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Map Types</h4>
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

                                        <p class="card-text">You can define many map types from external map services, like OpenStreetMap:</p>

                                        <p class="card-text">You must define a function called <code>getTileUrl</code>, which returns a tile URL according the coordenates in the
                                            map.</p>

                                        <div id="map-types" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Overlay Map Types -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Overlay Map Types</h4>
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

                                        <p class="card-text">You must define a function called <code>getTile</code>, which returns a HTML element used to fill the map overlay.
                                            Also, you have to set an overlay <code>index</code>, which place the overlay on top of the base map, according this index.</p>

                                        <p class="card-text">You can remove an overlay map type using <code>removeOverlayMapType(overlay_index)</code>.</p>

                                        <div id="overlay-map-types" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Street View Panoramas -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Street View Panoramas</h4>
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

                                        <p class="card-text">You must define <strong>container ID</strong>, <strong>latitude</strong> and <strong>longitude</strong> of the
                                            panorama's position.</p>

                                        <p>You also can define a <strong>pov (heading, pitch and zoom)</strong> and others values defined <a
                                                    href="https://developers.google.com/maps/documentation/javascript/reference#StreetViewPanoramaOptions">in the official
                                                documentation</a>.</p>

                                        <p>In the same way, you can define events, like in the <a
                                                    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/map_events.html">Map
                                                events</a> example. The events allowed are defined <a
                                                    href="https://developers.google.com/maps/documentation/javascript/reference#StreetViewPanorama">in the official documentation
                                                ("Events" section)</a>.</p>

                                        <div id="street-view-panoramas" class="height-400"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Interacting with UI -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Interacting with UI</h4>
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
                                        <p class="card-text">A line chart that is rendered within the browser using SVG or VML. Displays tooltips when hovering over points.</p>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <div id="interact-ui" class="height-400"></div>
                                            </div>
                                            <div class="col-lg-2 col-md-6">
                                                <h5>Using indices</h5>
                                                <ul id="markers-with-index">
                                                </ul>
                                            </div>
                                            <div class="col-lg-2 col-md-6">
                                                <h5>Using coordinates</h5>
                                                <ul id="markers-with-coordinates">
                                                </ul>
                                            </div>
                                        </div>
                                        <script type="text/html" id="edit_marker_template">
                                            <h4>Edit Marker</h4>
                                            <form class="edit_marker" action="gmaps-utils.html#" method="post" data-marker-index="{{index}}">
                                                <p>
                                                    <label for="marker_{{index}}_lat">Latitude:</label>
                                                    <input type="text" id="marker_{{index}}_lat" value="{{lat}}"/>
                                                </p>
                                                <p>
                                                    <label for="marker_{{index}}_lng">Longitude:</label>
                                                    <input type="text" id="marker_{{index}}_lng" value="{{lng}}"/>
                                                </p>
                                                <input type="submit" value="Update position"/>
                                            </form>
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Working with JSON -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Working with JSON</h4>
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
                                        <p class="card-text">A line chart that is rendered within the browser using SVG or VML. Displays tooltips when hovering over points.</p>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <div id="json" class="height-400"></div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <h5>Results for 'Ceviche' near 'Lima, Peru':</h5>
                                                <ul id="results"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // gmaps utils section end -->
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
    <script src="../../../../maps.googleapis.com/maps/api/js.JS"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/gmaps.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/charts/gmaps/utils.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
