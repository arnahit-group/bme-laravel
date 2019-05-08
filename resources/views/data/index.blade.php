@extends("layouts.admin")


@section("header")



@endsection
@section("container")

    {{--{{$hotel}}--}}
    {{--    {{$datas}}--}}

    @include("widgets.breadcrumbs")

    @if($data_type != 'website' && $data_type != 'application' && $data_type != 'hotel')
        <a class="waves-effect waves-light  btn left" href="{{route("data.create",['data_type'=>$data_type])}}">add</a>
    @endif


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
                        @if($data_type== 'website' || $data_type== 'hotel')
                            @include($widgets[0]->name, ['datas'=>$datas])
                        @else

                            @foreach($datas as $data )
                                @if(count($widgets) > 0 and $widgets[0]->type == 'main')
                                    @include($widgets[0]->name, ['data'=>$data])
                                @endif
                            @endforeach


                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section("footer")


    @if($data_type == 'hotel' or  $data_type == 'website')
        @foreach($datas as $data)
            @foreach($data->properties as $property)

                {{--<p style="background-color: red" dir="ltr">{{$property->input_type}}</p>--}}
                @if($property->input_type == 'multi-text')
                    <script>
                        $("#btn-add-multi-text-{{$property->title}}").click(function () {

                            var txt = $("#txt-add-multi-text-{{$property->title}}");
                            var dv = $("#dv-multi-text-{{$property->title}}");

                            if (txt.val().trim() == '')
                                return;

                            var s = "";
                            s += '<div class="row" style="border: 1px dotted red;margin-bottom: 3px; ">';
                            s += '<input type="hidden" id="{{$property->title}}[]" name="{{$property->title}}[]" value="' + txt.val().trim() + '">';
                            s += '<div class="input-field col s12 m2">';
                            s += '</div>';
                            s += '<div class="input-field col s12 m6">';
                            s += txt.val();
                            s += '</div>';
                            s += '<div class="input-field col s12 m2">';
                            s += '<button type="button" class="btn button-delete">';
                            s += 'X';
                            s += '</button>';
                            s += '</div>';
                            s += '</div>';

                            dv.append(s);


                        });

                        $("#dv-multi-text-{{$property->title}}").on('click', '.button-delete', function () {
                            $(this).parent().parent().remove();
                        });

                    </script>
                @endif
            @endforeach
        @endforeach
    @endif




    <script>


        $(document).ready(function () {


            {{--$("#btn-add-multi-text-{{$property->title}}").click(function () {--}}
                {{--alert("asdasd");--}}
            {{--});--}}


            $("[id^=active-]").change(function () {

//                alert($(this).attr('id'));

                var s = $(this).attr('id');
                var ss = s.split('-');

                var did = ss[ss.length - 1];


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

//                alert($(this).prop('checked') == true ? 1 : 0);
                $.ajax({
                    url: "{{ url('/admin/data/ajax/change_property') }}",
                    method: 'post',
                    data: {
                        id: did,
                        key: 'available',
                        value: $(this).prop('checked') == true ? 1 : 0
                    },
                    success: function (result) {
                        alert(result.message);

//                        $('#container-' + did).hide('normal', function () {
//                            $('#container-' + did).remove();
//                        });
                    }
                    ,
                    error: function (result) {
                        alert(result.status);

                    }
                });
            });
        });

    </script>



@endsection