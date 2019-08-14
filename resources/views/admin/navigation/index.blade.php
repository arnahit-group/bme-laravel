@extends("admin.layouts.admin")

@section('vendor-css')

@endsection

@section("header")



@endsection
@section("main")

    <div id="main">
        <div class="row">
            <div class="col s12">

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


                            <div class="col s12 m3">
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
                                                        {{--<option value="route">route</option>--}}
                                                        <option value="page">page</option>
                                                        <option value="url" disabled>url</option>
                                                    </select>
                                                    <label for="type">TYPE:</label>
                                                </div>

                                                <div id="route-container" class="input-field col s12 m12" hidden>
                                                    <select id="route" name="route">
                                                        <option value="" disabled selected>Select Route</option>

                                                    </select>
                                                    <label for="route">ROUTE:</label>
                                                </div>

                                                <div id="page-container" class="input-field col s12 m12">
                                                    <select id="pages" name="pages">
                                                        <option value="" disabled selected>Select Page</option>
                                                        @foreach($pages as $page)
                                                            <option value="{{$page->title}}">{{$page->title}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="pages">PAGES:</label>

                                                </div>


                                                <div id="url-container" class="input-field col s12 m12" hidden>
                                                    <input id="url" name="url"
                                                           type="url">
                                                    <label for="url">URL:</label>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12 m12">
                                                        <input id="title" name="title"
                                                               type="text">
                                                        <label for="title">{{ __('messages.input_titles')['title']}}</label>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m2">
                                                    </div>
                                                    <div class="input-field col s12 m10">
                                                        <input id="title-en" name="title-en"
                                                               type="text">
                                                        <label for="title-en">انگلیسی</label>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col s12 m2">
                                                    </div>
                                                    <div class="input-field col s12 m10">
                                                        <input id="title-ar" name="title-ar"
                                                               type="text">
                                                        <label for="title-ar">عربی</label>
                                                    </div>
                                                </div>

                                                <div class="input-field col s12 m12">
                                                    <button class="btn cyan waves-effect waves-light right"
                                                            type="submit"
                                                            id="submit" disabled
                                                            name="submit">{{ __('messages.input_titles')['submit']}}
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
            </div>
        </div>
    </div>


@endsection
@section('vendor-js')
@endsection

@section("footer")


    <script>

        $(document).ready(function () {


            function loadNavs(id) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('navigation.get') }}",
                    method: 'post',
                    data: {
                        id: id
                    },
                    success: function (result) {
                        $('#items').html(result.message);
                    },
                    error: function (result) {
                        alert("error");
                    }
                });

            }


            $('#navs').change(function () {

                loadNavs($(this).val());
                if ($(this).val() != "") {
                    $("#submit").prop('disabled', false);
                } else {
                    $("#submit").prop('disabled', true);
                }
            });

            $("#type").change(function () {


                var type = $(this).val();
                if (type == 'url') {
                    $("#url-container").prop('hidden', false);
                    $("#page-container").prop('hidden', true);
                    return;

                } else if (type == 'page') {
                    $("#url-container").prop('hidden', true);
                    $("#page-container").prop('hidden', false);
                }

//                alert("sdad");

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('navigation.routes.get') }}",
                    method: 'post',
                    data: {
                        type: $(this).val()
                    },
                    success: function (result) {

//                        alert(result.message.length);

                        var oo = result.message;

                        for (i = 0; i < oo.length; i++) {
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


            $("#items").on('change', '[id^=enabled-]', function () {

                var item = $(this);
//                alert($(this).attr('id'));
                var s = $(this).attr('id');
                var ss = s.split('-');
                var did = ss[ss.length - 1];
//                alert(did);
//                return;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('navigation.change') }}",
                    method: 'post',
                    data: {
                        id: did,
                        key: 'enabled',
                        value: item.prop('checked') == true ? 1 : 0
                    },
                    success: function (result) {

                        if (result.error == 1) {
                            item.prop('checked', !item.prop('checked'));
                            alert('ابتدا یکی از گزینه ها باید غیر فعل شود تا این گزینه فعال شود');
                        } else {

                            alert(result.message);
                        }

                    },
                    error: function (result) {
                        item.prop('checked', !item.prop('checked'));
                        alert(result.status);
                    }
                });
            });


            $("#items").on('click', '[id^=delete-]', function () {

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
                        url: "{{ url('/admin/navigation/destroy') }}",
                        method: 'post',
                        data: {
                            id: did
                        },
                        success: function (result) {
//                        alert(result.message);
                            loadNavs($('#navs').val());
                        }
                        ,
                        error: function (result) {
                            alert(result.status);
                        }
                    });


                }
                return false;

            });


            $("#submit").click(function (e) {
                e.preventDefault();

                if ($('#navs').val() == "") {
                    alert("ابتدا یکی از منو ها را از بالا انتخاب نمایید");
                    return;
                }

                if ($("#type").val() == "") {
                    alert("اطلاعات را پر گنید");
                    return;
                }

                if ($("#title").val().trim() == "" || $("#title-en").val().trim() == "" || $("#title-ar").val().trim() == "") {
                    alert("عنوان های همه زبان ها را پر نمایید");
                    return;
                }


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ url('/admin/navigation/store') }}",
                    method: 'post',
                    data: {
                        type: $("#type").val(),
                        title: $("#title").val(),
                        title_en: $("#title-en").val(),
                        title_ar: $("#title-ar").val(),
                        url: $("#url").val(),
                        page: $("#pages").val(),
                        navigation: $('#navs').val()
                    },
                    success: function (result) {
                        loadNavs($('#navs').val());
//                        alert(result.message);
                    }
                    ,
                    error: function (result) {
//                        alert(result.status);
                    }
                });


            });

//            $("[id^=enabled-]").change(function () {
//
//                alert($(this).attr('id'));

            {{--var s = $(this).attr('id');--}}
            {{--var ss = s.split('-');--}}

            {{--var did = ss[ss.length - 1];--}}


            {{--$.ajaxSetup({--}}
            {{--headers: {--}}
            {{--'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
            {{--}--}}
            {{--});--}}

            {{--//                alert($(this).prop('checked') == true ? 1 : 0);--}}
            {{--$.ajax({--}}
            {{--url: "{{ url('/admin/data/ajax/change_property') }}",--}}
            {{--method: 'post',--}}
            {{--data: {--}}
            {{--id: did,--}}
            {{--key: 'available',--}}
            {{--value: $(this).prop('checked') == true ? 1 : 0--}}
            {{--},--}}
            {{--success: function (result) {--}}
            {{--alert(result.message);--}}

            {{--//                        $('#container-' + did).hide('normal', function () {--}}
            {{--//                            $('#container-' + did).remove();--}}
            {{--//                        });--}}
            {{--}--}}
            {{--,--}}
            {{--error: function (result) {--}}
            {{--alert(result.status);--}}

            {{--}--}}
            {{--});--}}
            //            });


        });


    </script>





@endsection