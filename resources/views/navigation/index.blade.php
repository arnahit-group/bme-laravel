@extends("layouts.admin")


@section("header")



@endsection
@section("container")

    {{--{{$hotel}}--}}

    {{--    {{$datas}}--}}


    @include("widgets.breadcrumbs")

    {{--<a class="waves-effect waves-light  btn left" href="{{route("navigation.create")}}">add</a>--}}

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


        <div class="divider"></div>
        <div id="horizontal-card" class="section">
            <div class="row">
                <div class="input-field col s12 m12">
                    <select id="navs" name="navs">
                        <option value="" disabled selected>Select Main Navigation</option>
                        @foreach($navs as $nav)
                            <option value="{{$nav->id}}">{{$nav->title}}</option>
                        @endforeach
                    </select>
                    <label>Main Navigation</label>
                </div>
            </div>
            <div class="row">


                <div class="col s12 m3" >
                    <div class="card-panel">
                        <h4 class="header2">ثبت </h4>
                        <div class="row">
                            <form class="col s12"
                                  action="{{route("navigation.store")}}"
                                  method="post">
                                {{@csrf_field()}}
                                <div class="row">
                                    <div class="input-field col s12 m12">
                                        <select id="type" name="type">
                                            <option value="" disabled selected>Select Type</option>
                                            <option value="route">route</option>
                                            <option value="page">page</option>
                                            <option value="url">url</option>
                                        </select>
                                        <label for="type">TYPE:</label>
                                    </div>

                                    <div id="route-container" class="input-field col s12 m12">
                                        <select id="route" name="route">
                                            <option value="" disabled selected>Select Route</option>

                                        </select>
                                        <label for="route">ROUTE:</label>
                                    </div>


                                    <div id="url-container" class="input-field col s12 m12" hidden>
                                        <input id="url" name="url"
                                               type="url">
                                        <label for="url">URL:</label>
                                    </div>


                                    <div class="input-field col s12 m12">
                                        <input id="title" name="title"
                                               type="text">
                                        <label for="title">{{ __('messages.input_titles')['title']}}</label>
                                    </div>


                                    <div class="input-field col s12 m12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" disabled
                                                name="action">{{ __('messages.input_titles')['submit']}}
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col s12 m9">
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

            $('#navs').change(function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ url('/admin/navigation/ajax/get') }}",
                    method: 'post',
                    data: {
                        id: $(this).val()
                    },
                    success: function (result) {

                        $('#items').html(result.message);
//                        alert(result.message);

                    },
                    error: function (result) {
                        alert("error");

                    }
                });
            });

            $("#type").change(function () {

                var type = $(this).val();
                if (type == 'url') {
                    $("#url-container").prop('hidden', false);
                    $("#route-container").prop('hidden', true);
                    return;

                } else {
                    $("#url-container").prop('hidden', true);
                    $("#route-container").prop('hidden', false);
                }


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ url('/admin/navigation/ajax/routes/get') }}",
                    method: 'post',
                    data: {
                        type: $(this).val()
                    },
                    success: function (result) {

//                        alert(result.message.length);

                        var oo= result.message;

                        for(i=0;i< oo.length; i++) {
                            var o = new Option(oo[i], oo[i]);
                            $(o).html(oo[i]);
                            $('#route').append(o);
                        }




//                        $('#route').html(result.message);
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