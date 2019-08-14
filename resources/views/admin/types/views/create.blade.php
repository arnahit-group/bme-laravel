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

                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div>
                                <h4 class="header2">ثبت </h4>
                                <div class="row">
                                    <div class=" col m12  alert alert-danger print-error-msg red-text"
                                         style="display:none">
                                        <ul></ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="col s12"
                                          action="{{$urls['store']}}"
                                          method="post">

                                        <div class="row">


                                            <div class="col s12 m9">
                                                <div class="card-panel">
                                                    {{@csrf_field()}}

                                                    <div class="row">
                                                        <div class="input-field col s12 m12">
                                                            <input id="title" name="title"
                                                                   type="text">
                                                            <label for="title">عنوان</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12 m12">
                                                            <label>
                                                                <input type="checkbox" id="can_have_child"
                                                                       name="can_have_child" value="1" />
                                                                <span>دارای زیر گزینه</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12 m12">
                                                            <input id="can_have_item" name="can_have_item" min="0"
                                                                   type="number">
                                                            <label for="can_have_item">تعداد آیتم ها</label>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col s12 m3">
                                                <div class="card-panel">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            @can($permissions['store'])
                                                                <button class="col s12 btn cyan waves-effect waves-light right"
                                                                        type="submit"
                                                                        name="action">{{ __('messages.input_titles')['submit']}}
                                                                    <i class="material-icons right">send</i>
                                                                </button>
                                                            @endcan
                                                        </div>
                                                    </div>
                                                </div>
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


        $(document).ready(function () {
            $('.modal').modal();
        });

        $("#slide-images").click(function () {
        });

        $("#btn-add-image").click(function () {

            $("#rw-selected-images").html("");
            var tt = $("#property-title").val();

            $('#rw-images').find('.se-image').each(function () {
                var c = $(this).attr('data-content');
                if (c == 1) {
                    var t = "<div class='col m3 l3'>";
                    t += "<input type='hidden' name='" + tt + "[]' value='" + $(this).attr('src') + "'>";
                    t += "<img src='" + $(this).attr('src') + "' style='width: 100%'>";
                    t += "</div>";

                    $("#rw-selected-images").append(t);
//                    alert($(this).attr('src'));
                }
            });


            $("#modal1").modal("close");

        });


        $(".se-image").click(function () {

            var c = $(this).attr('data-content');
            if (c == 0) {
                $(this).css('border', '2px solid red');
                $(this).attr('data-content', 1);
            } else {
                $(this).css('border', '2px none red');
                $(this).attr('data-content', 0);
            }

        });

    </script>




@endsection