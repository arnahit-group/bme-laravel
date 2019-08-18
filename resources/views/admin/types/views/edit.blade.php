@extends("admin.layouts.admin")

@section('vendor-css')
    <link href="{{asset('app-assets/vendors/flag-icon/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section("header")


@endsection
@section("main")

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            @include('admin.layouts.widgets.breadcrumbs', ['page_title'=>$page_title , 'breadcrumbs'=> $breadcrumbs])
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Includes predefined classes for easy form layout
                                    options.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Form Advance -->
                            <div class="col s12 m12 l12">
                                <div class="card card card-default scrollspy" id="Form-advance">
                                    <div class="card-content">
                                        <h4 class="card-title">Form Advance</h4>
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <input id="first_name01" type="text">
                                                    <label for="first_name01">First Name</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <input id="last_name" type="text">
                                                    <label for="last_name">Last Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="email" type="email">
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="password" type="password">
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <select>
                                                        <option disabled selected value="">Choose your profile
                                                        </option>
                                                        <option value="1">Manager</option>
                                                        <option value="2">Developer</option>
                                                        <option value="3">Business</option>
                                                    </select>
                                                    <label>Select Profile</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <input class="datepicker" id="dob" type="date">
                                                    <label for="dob">DOB</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col m6 s12 file-field input-field">
                                                    <div class="btn float-right">
                                                        <span>File</span>
                                                        <input type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <span>Range</span>
                                                    <p class="range-field">
                                                        <input id="test5" max="100" min="0" type="range"/>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea class="materialize-textarea" id="message"></textarea>
                                                    <label for="message">Message</label>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right"
                                                                name="action" type="submit">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- START RIGHT SIDEBAR NAV -->
                @include('admin.layouts.widgets.overlay_side_bar')
                <!-- END RIGHT SIDEBAR NAV -->
                </div>
            </div>
        </div>
    </div>

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
                                          action="{{$urls['update']}}"
                                          method="post" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="input-field col s12 m12">
                                                <input id="title" name="title"
                                                       type="text">
                                                <label for="title">عنوان</label>
                                            </div>

                                            <div class="input-field col s12 m12">
                                                <input type="checkbox" id="can_have_child"
                                                       name="can_have_child" value="0" checked/> <label
                                                        for="can_have_child">دارای زیر گزینه</label>
                                            </div>

                                            <div class="input-field col s12 m12">
                                                <input id="can_have_item" name="can_have_item"
                                                       type="number">
                                                <label for="can_have_item">تعداد آیتم ها</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                @can($permissions['update'])
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

    <script src="{{asset('app-assets/js/scripts/form-layouts.js')}}" type="text/javascript"></script>
    <script>


        $("form").submit(function (e) {

            // alert($(this).serialize());
            //  return;

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