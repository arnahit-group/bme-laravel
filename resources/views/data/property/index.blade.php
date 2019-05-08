@extends("layouts.admin")


@section("header")



@endsection
@section("container")

    {{--{{$hotel}}--}}

    {{--    {{$datas}}--}}


    @include("widgets.breadcrumbs")

    <a class="waves-effect waves-light  btn left" href="{{route("data.properties.create",['data_type'=>$data_type])}}">add</a>

    {{--<div class="fixed-action-btn toolbar">--}}
    {{--<a class="btn-floating btn-large red">--}}
    {{--<i class="large material-icons">mode_edit</i>--}}
    {{--</a>--}}
    {{--<ul>--}}
    {{--<li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i></a></li>--}}
    {{--<li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i></a></li>--}}
    {{--<li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>--}}
    {{--<li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}

    <!--start container-->
    <div class="container">
        <div class="divider"></div>
        <!--Basic Card-->
        <!-- Horizontal Card -->
        <div class="divider"></div>
        <div id="horizontal-card" class="section">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="row">
                        {{--@php($i=1)--}}
                        @foreach($properties as $property )

                            {{--@include("widgets.data.property", ['data'=>$property])--}}

                            @if(count($widgets) > 0 and $widgets[0]->type == 'main')
                                @include($widgets[0]->name, ['data'=>$property])
                            @endif

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section("footer")

    <script>

        $(document).ready(function () {

            $("[id^=del-]").click(function () {

//                alert("sadsdsa");
//                return;

//                alert($(this).attr('id'));

                var s = $(this).attr('id');
                var ss = s.split('-');

                var did = ss[ss.length - 1];

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });


                $.ajax({
                    url: "{{ url('/admin/ajax/data/properties/destroy') }}",
                    method: 'post',
                    data: {
                        id: did
                    },
                    success: function (result) {
//                        alert(result.message);
                        var e = result.error;
                        if (e == true) {
                            alert(result.message);
                        } else {

                            $('#container-' + did).hide('normal', function () {
                                $('#container-' + did).remove();
                            });

                        }
                    },
                    error: function (result) {
                        alert("error");

                    }
                });
            });
        });

    </script>




@endsection