@extends("layouts.admin")


@section("header")



@endsection
@section("container")

    {{--{{$hotel}}--}}

    {{--    {{$datas}}--}}


    @include("widgets.breadcrumbs")

    {{--<a class="waves-effect waves-light  btn left" href="{{route("documents.create",['document_type'=>$document_type])}}">add</a>--}}

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

                    <a class="waves-effect waves-light  btn left" href="{{route("relations.create",['relation_type'=>$relation_type])}}">add</a>

                </div>

            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="row">
                        {{--@php($i=1)--}}
                        @if(isset($relations ))
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <select id="relations" name="relations">
                                        <option value="" disabled selected>Select Main Navigation</option>
                                        @foreach($relations as $relation )
                                            <option value="{{$relation->id}}">{{$relation->title}}</option>
                                        @endforeach
                                    </select>
                                    <label for="relations">Main Navigation</label>
                                </div>
                            </div>
                        @else




                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="row">
                        <div class="card-panel" id="items">


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
@section("footer")



    <script>
        $(document).ready(function () {

            $('#relations').change(function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

//                alert($(this).val());
                $.ajax({
                    url: "{{ url('/admin/relations/ajax/get') }}",
                    method: 'post',
                    data: {
                        id: $(this).val()
                    },
                    success: function (result) {

//                        $('#items').html(result.message);

                        var items = result.message;

                        $('#items').html("");
//                        $('#items').append("<table>");

                        for (i = 0; i < items.length; i++) {
                            $('#items').append(items[i].id);
                            $('#items').append("<br>");
                        }

//                        $('#items').append("</table>");

//                        alert(result.message);

                    },
                    error: function (result) {
                        alert("error");

                    }
                });
            });
        });
    </script>




@endsection