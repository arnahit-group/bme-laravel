@extends('layouts.public')

@section("header")

    <link rel="stylesheet" href="{{asset('style/style_contact.css')}}">
    <link rel="stylesheet" href="{{asset('style/style_about_us.css')}}">

    <link rel="stylesheet" href="{{asset('style/style_single.css')}}">
    <link rel="stylesheet" href="{{asset('style/style_information.css')}}">
    <link rel="stylesheet" href="{{asset('style/style_information_step2.css')}}">

    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.css' rel='stylesheet'/>


    <link rel="stylesheet" href="{{asset('style/style_contact.css')}}">

    <link rel="stylesheet" href="{{asset('style/lc_lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('style/dark.css')}}">
    <link rel="stylesheet" href="{{asset('style/light.css')}}">
    <link rel="stylesheet" href="{{asset('style/minimal.css')}}">
    <link rel="stylesheet" href="{{asset('style/style_image_gallery.css')}}">

    <script src="{{asset('scripts/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('scripts/lightslider.js')}}"></script>
    <script src="{{asset('scripts/pwt-date.js')}}"></script>
    <script src="{{asset('scripts/pwt-datepicker.js')}}"></script>
    <script src="{{asset('scripts/lc_lightbox.lite.js')}}"></script>
    <script src="{{asset('scripts/alloy_finger.min.js')}}"></script>


@endsection

@section('container')

    @if(count($widgets) > 0 and $widgets[0]->type == 'main')
        @include($widgets[0]->name, ['datas'=>$datas])
    @endif

@endsection

@section("footer")

    <script>


        $(document).ready(function (e) {
            // live handler
            lc_lightbox('.elem', {
                wrap_class: 'lcl_fade_oc',
                gallery: true,
                thumb_attr: 'data-lcl-thumb',

                skin: 'dark',
                radius: 0,
                padding: 0,
                border_w: 0,
//            fullscreen    : true,
            });

        });


        $("#btn-send-message-contact").click(function () {




//            alert("test 111");
//            return;

            var error = false;

            var input_email = $('#input-email');
            var input_name = $('#input-name');
            var input_mobile = $('#input-mobile');
            var input_location = $('#input-location');
            var txt_area = $('#txt-area');

            var spn_name_alert = $("#spn-name-alert");
            var spn_email_alert = $("#spn-email-alert");
            var spn_mobile_alert = $("#spn-mobile-alert");
            var spn_location_alert = $("#spn-location-alert");
            var spn_content_alert = $("#spn-content-alert");


            if (input_name.val().trim() == "") {
                spn_name_alert.prop('hidden', false);
                error = true;
            } else {
                spn_name_alert.prop('hidden', true);
            }

            if (input_email.val().trim() == "") {
                spn_email_alert.prop('hidden', false);
                error = true;
            } else {
                spn_email_alert.prop('hidden', true);
            }


            if (input_mobile.val().trim() == "") {
                spn_mobile_alert.prop('hidden', false);
                error = true;
            } else {
                spn_mobile_alert.prop('hidden', true);
            }

            if (input_location.val().trim() == "") {
                spn_location_alert.prop('hidden', false);
                error = true;
            } else {
                spn_location_alert.prop('hidden', true);
            }

            if (txt_area.val().trim() == "") {
                spn_content_alert.prop('hidden', false);
                error = true;
            } else {
                spn_content_alert.prop('hidden', true);
            }

//            alert(error);

            if (error == true)
                return;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });


            var email = input_email.val();
            var name = input_name.val();
            var mobile = input_mobile.val();
            var location = input_location.val();
            var content = txt_area.html();

//            alert(email + " " + name + " " + mobile + " " + location + " " + message);
//            return;

            $.ajax({
                url: "{{url("/documents/ajax/save")}}",
                timeout: 30000,
                method: 'post',
                data: {
                    'email': email,
                    'name': name,
                    'mobile': mobile,
                    'location': location,
                    'content': content,
                    'document_type': '{{$document_type}}'
                },
                success: function (result) {
                    input_email.val("");
                    input_name.val("");
                    input_mobile.val("");
                    input_location.val("");
                    txt_area.val("");

                    alert("پیغام با موفقیت ارسال شد");

                },
                error: function (result) {
//                    alert("error code :" + result.status);
                }
            });
        });


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

@endsection
