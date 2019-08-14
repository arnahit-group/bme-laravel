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
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <h4 class="header2">تنظیمات</h4>
                                <div class="row">
                                    <div class=" col m12  alert alert-danger print-error-msg red-text"
                                         style="display:none">
                                        <ul></ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <form class="col s12"
                                          action="{{$urls['update']}}"
                                          method="post" enctype="multipart/form-data">
                                        {{@csrf_field()}}
                                        @include('widgets.forms.input_form', ['properties'=>$properties ])

                                        <div class="row">
                                            <div class="input-field col s12">

                                                @can("documents.settings.update" . ":". $type)
                                                    <button class="btn cyan waves-effect waves-light right"
                                                            type="submit"
                                                            id="submit"
                                                            name="action">{{ __('messages.input_titles')['submit']}}
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                                @endcan

                                            </div>
                                        </div>
                                    </form>
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
                        {{--window.location = "{{route('documents.index', ['document_type'=>$document_type])}}";--}}

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

                    submit.html('ذخیره');
                    submit.prop('disabled', false);
                    alert(result.status);

                }
            });

        });


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