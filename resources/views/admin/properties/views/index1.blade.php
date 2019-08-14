@extends("admin.layouts.admin")

@section('vendor-css')

@endsection

@section("header")



@endsection
@section("main")


{{--    @include('properties.widgets.single_card)--}}
    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="divider"></div>
                    @can($permissions['create'])
                        <a class="btn-floating btn-large waves-effect waves-light red"
                           href="{{$urls['create']}}">
                            <i class="material-icons">add</i>
                        </a>
                    @endcan
                    <div class="divider"></div>
                    <div id="horizontal-card" class="section">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="row">
                                    {{--@php($i=1)--}}
                                    @foreach($properties as $property )
                                        @if(count($widgets) > 0 and $widgets[0]->type == 'main')
                                            @include($widgets[0]->name, ['data'=>$property])
{{--                                            @include('admin.properties.widgets.single_card', ['data'=>$property])--}}
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('vendor-js')

@endsection

@section("footer")

    <script>

        $(document).ready(function () {

            $("[id^=del-]").click(function () {

                if (confirm("Are you sure?")) {

                    var s = $(this).attr('id');
                    var ss = s.split('-');
                    var did = ss[ss.length - 1];
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{$urls['destroy']}}",
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
                            alert(result.status);

                        }
                    });
                }


            });
        });

    </script>




@endsection