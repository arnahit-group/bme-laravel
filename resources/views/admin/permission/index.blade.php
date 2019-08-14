@extends("admin.layouts.admin")
@section('vendor-css')

@endsection


@section("header")





    <style type="text/css">


        body {
            direction: rtl
        }

        /*  align the checkbox to the right    */
        [type="checkbox"] + label:before, [type="checkbox"] + label:after {
            right: 0px !important;
        }

        /*  align the v in the center of the checkbox    */
        [type="checkbox"].filled-in:checked + label:before {
            right: 11px !important;
        }

        /*  align the label left to the checkbox   */
        [type="checkbox"] + label {
            padding-right: 27px !important;
        }
    </style>

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
                                    @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <label>Main Navigation</label>
                            </div>
                        </div>
                        <div class="row">


                            <div class="col s12 m3">
                                <div class="card-panel">
                                    <h4 class="header2">ثبت سطح دسترسی جدید </h4>
                                    <div class="row">
                                        <form class="col s12"
                                              action="{{route("navigation.store")}}"
                                              method="post">
                                            {{@csrf_field()}}
                                            <div class="row">
                                                <div class="input-field col s12 m12">
                                                    <select id="type" name="type">
                                                        <option value="" disabled selected>Select Object Type</option>
                                                        <option value="data">data</option>
                                                        <option value="documents">documents</option>
                                                        <option value="navigation">navigation</option>
                                                        <option value="services">services</option>
                                                        <option value="conversations">conversations</option>
                                                        <option value="communications">communications</option>
                                                        <option value="users">users</option>
                                                    </select>
                                                    <label for="type">OBJECT TYPE:</label>
                                                </div>

                                                <div id="page-container" class="input-field col s12 m12">
                                                    <select id="sub_type" name="pages">
                                                        <option value="" disabled selected>Select Sub Type</option>
                                                        <option value="room">room</option>
                                                        <option value="hotel">hotel</option>
                                                        <option value="application">application</option>
                                                        <option value="website">website</option>
                                                    </select>
                                                    <label for="sub_type">SUB TYPE:</label>
                                                </div>
                                                <div class="input-field col s12 m12">
                                                    <select id="oparation" name="pages">
                                                        <option value="" disabled selected>Select Operation</option>
                                                        <option value="add">add</option>
                                                        <option value="edit">edit</option>
                                                        <option value="delete">delete</option>
                                                    </select>
                                                    <label for="sub_type">SUB TYPE:</label>
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

//            $('select').formSelect();

            function loadNavs(id) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('permissions.ajax.get') }}",
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


            $("#items").on('change', '[id^=perm-]', function () {

                var s = $(this).attr('id');
                var ss = s.split('-');
                var did;
                if (ss.length == 2) {

                    did = ss[ss.length - 1];

                } else {
                    ss.shift();
                    did = ss.join('-');
                }

//                alert(did + "has " + $(this).prop('checked'));
//                return;


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('permissions.change') }}",
                    method: 'post',
                    data: {
                        id: did,
                        role: $("#navs").val(),
                        value: $(this).prop('checked') == true ? 1 : 0
                    },
                    success: function (result) {
//                        alert(result.message);
                    }
                    ,
                    error: function (result) {
                        $(this).prop('checked', !$(this).prop('checked'));
                        alert(result.status);
                    }
                });


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
                        alert(result.status);
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