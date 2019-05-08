@extends('layouts.public')

@section("header")

    <link rel="stylesheet" href="{{asset('style/lightslider.css')}}">
    <link rel="stylesheet" href="{{asset('style/style_single.css')}}">
    <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.css' rel='stylesheet'/>

    <link href="{{asset('style/jquerysctipttop.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('style/pwt-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('style/style_archive.css')}}">


@endsection

@section('container')

    @if(isset($datas))
        <div class="container">
            <div class="row">
                @if(count($widgets) > 0 and $widgets[0]->type == 'main')
                    @include($widgets[0]->name, ['datas'=>$datas])
                @endif
            </div>
        </div>
    @else
        @if(count($widgets) > 0 and $widgets[0]->type == 'main')
            @include($widgets[0]->name, ['data' =>$object, 'hotel'=>$data])
        @endif
    @endif

    <div class="content2">

    </div>

    <div class="restaurant">
        <div class="parallax-container">
            <div class="container center">
                <img id="in-parallax-img" src="{{asset('images/restaurant-txt.png')}}"
                     class="responsive-img restaurant-img">
                <span id="in-parallax-span">
                    {{$data['description']->title}}
                </span>
            </div>
            <div class="parallax"><img src="{{asset('images/footer_bg.jpg')}}"></div>
        </div>
    </div>


    <!--address with map-->

    <div class="address">
        <div class="container">
            <div class="row" style="margin: 0 !important;">
                <div class="col s12 l5 address-part center-on-small-only ">
                    <h6>کمی با ما آشنا شوید</h6>
                    <span>
                        {{$data['description']->title}}

    </span>
                </div>
                <div class="col s12 l7">
                    <div id='map' style='width: 100%; height: 370px;'></div>
                    <img id="map-img" src="{{asset('images/map.jpg')}}" class="responsive-img left" hidden>
                </div>
            </div>
        </div>
    </div>

    <!--address bar with text and icon-->

    <div class="address-bar">
        <div class="container">
            <div class="row center-on-small-only" style="margin: 0 !important;">
                <div class="col l1 s12"><img src="{{asset('images/location.png')}}"></div>
                <div class="col l9 s12"><span>
                        {{$data['address']->title}}
                    </span>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("footer")


    <script src="{{asset('scripts/lightslider.js')}}"></script>
    <script src="{{asset('scripts/pwt-date.js')}}"></script>
    <script src="{{asset('scripts/pwt-datepicker.js')}}"></script>

    <script>


        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function () {
            $('.parallax').parallax();
            $('.modal').modal();
            $('select').formSelect();

        });


        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function () {


        });


    </script>


    <script>

        $(document).ready(function () {
            $('#lightSlider').lightSlider({

                gallery: true,
                item: 1,
                loop: true,
                slideMargin: 0,
                thumbItem: 9,
                responsive: [
                    {
                        breakpoint: 800,
                        settings: {
                            item: 1,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 1,

                            slideMove: 1
                        }
                    }
                ]

            });
        });


    </script>

    <script>

        mapboxgl.accessToken = 'pk.eyJ1IjoiaG90ZWwtc2Fib3VyaSIsImEiOiJjanRiZXEzaTUwa3g3NDRudWRtYTVuanJoIn0.HzwDmQ5qSzX9Pm8-BCWz8w';
        mapboxgl.setRTLTextPlugin('https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-rtl-text/v0.2.0/mapbox-gl-rtl-text.js');

        var markers = [];

        var geojson = {
            type: 'FeatureCollection',
            features: [{
                type: 'Feature',
                geometry: {
                    type: 'Point',
                    coordinates: [49.605069, 37.276716]
                },
                properties: {
                    title: 'Mapbox',
                    description: 'Washington, D.C.'
                }
            },
                {
                    type: 'Feature',
                    geometry: {
                        type: 'Point',
                        coordinates: [49.605069, 37.276716]
                    },
                    properties: {
                        title: 'Mapbox',
                        description: 'San Francisco, California'
                    }
                }]
        };


        var map = new mapboxgl.Map({
            container: 'map',
//            style: 'mapbox://styles/mapbox/light-v9',
            style: 'mapbox://styles/mapbox/streets-v9',
            center: [49.605069, 37.276716],
            zoom: 15
        });


        // add markers to map
        geojson.features.forEach(function (marker) {

            // create a HTML element for each feature
            var el = document.createElement('div');
            el.className = 'marker-pink';

            // make a marker for each feature and add to the map
            var marker = new mapboxgl.Marker(el, {
                offset: [0, -25]
            })
                .setLngLat(marker.geometry.coordinates)
                .addTo(map);

            markers.push(marker);

        });

        map.on('click', addMarker);

        function addMarker(e) {

            var el = document.createElement('div');
            el.className = 'marker-green';

            var marker = new mapboxgl.Marker(el, {
                offset: [0, -25]
            })
                .setLngLat([e.lngLat.lng, e.lngLat.lat])
                .addTo(map);

            geojson.features.push({
                type: 'Feature',
                geometry: {
                    type: 'Point',
                    coordinates: [e.lngLat.lng, e.lngLat.lat]
                },
                properties: {
                    title: 'Mapbox',
                    description: 'San Francisco, California'
                }
            });

            markers.push(marker);
//                                    alert(geojson.features.length);
        }

        setInterval(ajaxCall, 1000); //300000 MS == 5 minutes
        function ajaxCall() {
            markers.forEach(function (marker) {
//                                        var latLng=  marker.getLngLat();
//                                        marker.setLngLat([latLng.lng + 0.0012,latLng.lat + 0.0012 ]);
//                                       marker.remove();
            });
            //alert("hi its interval");
        }

    </script>



    <script>
        var dp;
        $(document).ready(function () {
            var options = {
                format: "YYYY/MM/DD",
                formatter: function (unix) {
                    var pdate = new persianDate(unix);
                    pdate.formatPersian = false;
                    return pdate.format("YYYY/MM/DD");
//return new persinDate(unix).format("YYYY/MM/DD");
                },
                daysTitleFormat: "YYYY MMMM",
                observer: true,
                sendOption: "p",
//position : [2, 2],
                autoclose: true,
                toolbox: true,
                altField: "#alternateField",
                altFormat: "u",
                altFieldFormatter: function (unix) {
                    var pdate = new persianDate(unix);
                    pdate.formatPersian
                    pdate.formatPersian = false;
                    return pdate.format("YYYY MM DD");
                },
                onShow: function () {
//console.log("user config onShow event ")
                },
                onHide: function () {
//console.log("user config onHide event ")
                },
                onSelect: function (unix) {
//console.log("user config onSelect event as : "+unix)

                }
            };
            $(".datePicker").persianDatepicker(options);
            dp = $(".datePicker").data("datepicker");
        });




    </script>



@endsection
