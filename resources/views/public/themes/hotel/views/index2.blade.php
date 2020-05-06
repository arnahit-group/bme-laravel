@extends('public.themes.hotel.layouts.public')


@section('header')

    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />

@endsection
@section('container')


    <div class="slide">
        <img id="in-slide-img" src="{{asset('images/slider-txt.png')}}" class="in-slide-img responsive-img">
        <ul>
            @foreach($slides as $slide)
                <li data-bg="{{$slide->properties['path']->title}}"></li>
            @endforeach
        </ul>
    </div>

    <!--content-->

    <div class="content-sb">

        <div class="container">
            <span>درباره ما</span> <br>
            <h5>{{$hotel['name']->title}}</h5>
            <p id="about-us-p">
                {{$hotel['description']->title}}
            </p>
        </div>

    </div>

    <!--posts-->

    <div class="posts">
        <div class="row" style="margin: 0 !important;">

            {{--            @php($cnt=0)--}}
            {{--            @foreach($galleries as $gallery)--}}
            {{--                @php($cnt++)--}}
            {{--                <div class="col s12 l3 post">--}}
            {{--                    <img class="responsive-img" src="{{$gallery->properties->path}}">--}}
            {{--                    <div class="overlay">--}}
            {{--                        <div class="text-overlay"><span>تصویر بزرگتر</span></div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                @if($cnt == 8)--}}
            {{--                    @break--}}
            {{--                @endif--}}
            {{--            @endforeach--}}

        </div>
    </div>

    <!--facilities-->

    <div class="facilities">

        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 l4 facilities-part">
                        <div class="icon-block">
                            <img src="{{asset('images/clock.png')}}" class="responsive-img facilities-img"><br>
                            <h5 class="center">پشتیبانی شبانه روزی</h5>

                            <p class="light center">
                                سامانه خصوصی رزرو هتل آپارتمان صبوری، وبسایتی ایمن جهت رزرو
                                آنلاین هتل

                                صبوری می باشد، این امکان برای شما فراهم شده است.
                            </p>
                            <h6>توضیحات بیشتر</h6>
                        </div>
                    </div>

                    <div class="col s12 l4 facilities-part">
                        <div class="icon-block">
                            <img src="{{asset('images/dinner.png')}}" class="responsive-img facilities-img"><br>
                            <h5 class="center">رستوران و فست فود</h5>

                            <p class="light center">
                                سامانه خصوصی رزرو هتل آپارتمان صبوری، وبسایتی ایمن جهت رزرو
                                آنلاین هتل
                                صبوری می باشد، این امکان برای شما فراهم شده است.
                            </p>
                            <h6>توضیحات بیشتر</h6>
                        </div>
                    </div>

                    <div class="col s12 l4 facilities-part">
                        <div class="icon-block">
                            <img src="{{asset('images/breakfast.png')}}" class="responsive-img facilities-img"><br>
                            <h5 class="center">آلاچیق و کافی شاپ</h5>

                            <p class="light center">
                                سامانه خصوصی رزرو هتل آپارتمان صبوری، وبسایتی ایمن جهت رزرو
                                آنلاین هتل
                                صبوری می باشد، این امکان برای شما فراهم شده است.

                            </p>
                            <h6>توضیحات بیشتر</h6>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <!--reservation-->

    <div class="reservation">

        <span>سامانه رزرواسیون آنلاین</span> <br>
        <h5>{{$hotel['name']->title}}</h5>

        <div class="container">
            <div class="row">
                @foreach($rooms as $room)
                    @include('public.themes.hotel.widgets.room_widget' , ['data'=>$room])
                @endforeach
            </div>
        </div>
    </div>

    <!--restaurant parallax-->

    <div class="restaurant">
        <div class="parallax-container">
            <div class="container center">
                <img id="in-parallax-img" src="{{asset('images/restaurant-txt.png')}}"
                     class="responsive-img restaurant-img">
                <span id="in-parallax-span">
                {{$hotel['description']->title}}
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
{{$application['description']->title}}

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
                <div class="col l9 s12"><span>{{$hotel['address']->title}}</span>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('footer')

{{--    <script>--}}
{{--        mapboxgl.accessToken = '{{$map['access-token']->title}}';--}}
{{--        //        mapboxgl.accessToken = 'pk.eyJ1IjoiaG90ZWwtc2Fib3VyaSIsImEiOiJjanRiZXEzaTUwa3g3NDRudWRtYTVuanJoIn0.HzwDmQ5qSzX9Pm8-BCWz8w';--}}
{{--        mapboxgl.setRTLTextPlugin('https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-rtl-text/v0.2.0/mapbox-gl-rtl-text.js');--}}

{{--        var markers = [];--}}

{{--        var geojson = {--}}
{{--            type: 'FeatureCollection',--}}
{{--            features: [--}}
{{--                {--}}
{{--                    type: 'Feature',--}}
{{--                    geometry: {--}}
{{--                        type: 'Point',--}}
{{--                        coordinates: [49.605069, 37.276716]--}}
{{--                    },--}}
{{--                    properties: {--}}
{{--                        title: 'هتل صبوری',--}}
{{--                        description: 'هتل سه ستاره صبوری'--}}
{{--                    }--}}
{{--                }--}}
{{--            ]--}}
{{--        };--}}


{{--        var map = new mapboxgl.Map({--}}
{{--            container: 'map',--}}
{{--//            style: 'mapbox://styles/mapbox/light-v9',--}}
{{--            style: 'mapbox://styles/mapbox/outdoors-v11',--}}
{{--            center: [49.605069, 37.276716],--}}
{{--            zoom: 15--}}
{{--        });--}}

{{--        // add markers to map--}}
{{--        geojson.features.forEach(function (marker) {--}}

{{--            // create a HTML element for each feature--}}
{{--            var el = document.createElement('div');--}}
{{--            el.className = 'marker-green';--}}

{{--            // make a marker for each feature and add to the map--}}
{{--            var marker = new mapboxgl.Marker(el, {--}}
{{--                offset: [0, -25]--}}
{{--            }).setLngLat(marker.geometry.coordinates)--}}
{{--                .setPopup(new mapboxgl.Popup({offset: 25})--}}
{{--                    .setHTML('<h5>' + marker.properties.title + '</h5><p>' + marker.properties.description + '</p>'))--}}
{{--                .addTo(map);--}}
{{--            markers.push(marker);--}}
{{--        });--}}


{{--        // map.on('click', addMarker);--}}
{{--        function addMarker(e) {--}}
{{--            var el = document.createElement('div');--}}
{{--            el.className = 'marker-green';--}}
{{--            var marker = new mapboxgl.Marker(el, {--}}
{{--                offset: [0, -25]--}}
{{--            })--}}
{{--                .setLngLat([e.lngLat.lng, e.lngLat.lat])--}}
{{--                .addTo(map);--}}

{{--            geojson.features.push({--}}
{{--                type: 'Feature',--}}
{{--                geometry: {--}}
{{--                    type: 'Point',--}}
{{--                    coordinates: [e.lngLat.lng, e.lngLat.lat]--}}
{{--                },--}}
{{--                properties: {--}}
{{--                    title: 'Mapbox',--}}
{{--                    description: 'San Francisco, California'--}}
{{--                }--}}
{{--            });--}}

{{--            markers.push(marker);--}}
{{--//                                    alert(geojson.features.length);--}}
{{--        }--}}

{{--        setInterval(ajaxCall, 1000); //300000 MS == 5 minutes--}}
{{--        function ajaxCall() {--}}
{{--            markers.forEach(function (marker) {--}}
{{--//                                        var latLng=  marker.getLngLat();--}}
{{--//                                        marker.setLngLat([latLng.lng + 0.0012,latLng.lat + 0.0012 ]);--}}
{{--//                                       marker.remove();--}}
{{--            });--}}
{{--            //alert("hi its interval");--}}
{{--        }--}}

{{--    </script>--}}

@endsection