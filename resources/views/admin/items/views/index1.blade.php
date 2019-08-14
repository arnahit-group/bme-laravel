@extends("admin.layouts.admin")

@section('vendor-css')

{{--  @include('admin.items.subviews.table_with_action_bar.vendor-css')--}}

@endsection

@section("header")

{{--    @include('admin.items.subviews.table_with_action_bar.header')--}}


@endsection
@section("main")


{{--    @include('admin.items.subviews.table_with_action_bar.main',['datas'=> $datas] )--}}


    {{--    {{dd($permissions['create'])}}--}}
    <div id="main">
        <div class="row">
            <div class="col s12">

                <div class="container">
                    <div class="divider"></div>
                    @if(count($datas) < $type->can_have_item)
                        @can($permissions['create'])
                            <a class="btn-floating btn-large waves-effect waves-light orange darken-3"
                               href="{{$urls['create']}}">
                                <i class="material-icons">add</i>
                            </a>
                        @endcan
                    @endif

                    <div class="divider"></div>
                    <div id="horizontal-card" class="section">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="row">
                                    @foreach($datas as $data )
                                        @if(count($widgets) > 0 and $widgets[0]->type == 'main')
                                            @include($widgets[0]->name, ['data'=>$data])
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

{{--    @include('admin.items.subviews.table_with_action_bar.vendor-js')--}}

@endsection

@section("footer")

{{--    @include('admin.items.subviews.table_with_action_bar.footer')--}}

    <script>

        $("[id^=del-]").click(function () {

//                alert($(this).attr('id'));
//                return;

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
                    url: "{{ $urls['destroy'] }}",
                    method: 'post',
                    data: {
                        id: did
                    },
                    success: function (result) {
//                        alert(result.message);

                        $('#container-' + did).hide('normal', function () {
                            $('#container-' + did).remove();
                        });
                    },
                    error: function (result) {
                        alert("error");

                    }
                });
            }
        });


        $("form").submit(function (e) {
            var form = this;
            e.preventDefault();

            var submit = $('button[type="submit"]', this);
            submit.html('در حال ارسال');
            submit.prop('disabled', true);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function (result) {
                    if ($.isEmptyObject(result.error)) {

                        submit.html('پایان');
                        submit.prop('disabled', false);
//                        alert(result.success);
                        window.location = "{{$urls['index']}}";

                    } else {
//                        alert(result.error);

                        submit.html('ذخیره');
                        submit.prop('disabled', false);


                        $(".print-error-msg").find("ul").html('');
                        $(".print-error-msg").css('display', 'block');
                        $.each(result.error, function (key, value) {
                            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                        });
                    }


                },
                error: function (result) {
                    alert(result.status);

                }
            });

        });


    </script>



    @if($type == 'hotel' or  $type == 'website')
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
                    {{--url: "{{ url('/admin/data/ajax/change_property') }}",--}}
                    url: "{{ route('data.change', ['type'=>$type])}}",
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