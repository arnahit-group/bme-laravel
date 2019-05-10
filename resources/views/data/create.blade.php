@extends("layouts.admin")


@section("header")


@endsection
@section("container")

    <section id="content">
        <!--breadcrumbs start-->

    @include("widgets.breadcrumbs")

    <!--breadcrumbs end-->
        <!--start container-->
        <div class="container">

            <div class="row">
                <div class="col s12 m12 l12">
                    <div>
                        <h4 class="header2">ثبت </h4>
                        <div class="row">
                            <form class="col s12"
                                  action="{{route("data.store", ['data_type'=> $data_type])}}"
                                  method="post">

                                <div class="row">
                                    <div class="col s12 m9 ">
                                        <div class="card-panel">
                                            {{@csrf_field()}}
                                            @foreach($properties as $property)
                                                <div class="row">
                                                    @if($property->level ==1)
                                                        @if($property->input_type == "text")
                                                            @include("widgets.inputs.text", ['property'=>$property])
                                                        @elseif($property->input_type == "check")
                                                            @include("widgets.inputs.check", ['property'=>$property])
                                                        @elseif($property->input_type == "radio")
                                                            @include("widgets.inputs.radio", ['property'=>$property])
                                                        @elseif($property->input_type == "textarea")
                                                            @include("widgets.inputs.textarea", ['property'=>$property])
                                                        @elseif($property->input_type == "select")
                                                            @include("widgets.inputs.select", ['property'=>$property])
                                                        @elseif($property->input_type == "multi-relation-document-images")
                                                            @include("widgets.inputs.select_image", ['property'=>$property, 'images'=>$images])
                                                        @elseif($property->input_type == "single-relation-price")
                                                            @php($property->input_type= 'number')
                                                            @include("widgets.inputs.currency", ['property'=>$property])
                                                        @endif
                                                    @endif
                                                </div>
                                            @endforeach

                                            <div class="row">
                                                @foreach($properties as $property)
                                                    @if($property->level ==2)
                                                        <div class="col s3">
                                                            @if($property->input_type == "text")
                                                                @include("widgets.inputs.text", ['property'=>$property])
                                                            @elseif($property->input_type == "check")
                                                                @include("widgets.inputs.check", ['property'=>$property])
                                                            @elseif($property->input_type == "radio")
                                                                @include("widgets.inputs.radio", ['property'=>$property])
                                                            @elseif($property->input_type == "textarea")
                                                                @include("widgets.inputs.textarea", ['property'=>$property])
                                                            @elseif($property->input_type == "select")
                                                                @include("widgets.inputs.select", ['property'=>$property])
                                                            @elseif($property->input_type == "multi-relation-document-images")
                                                                @include("widgets.inputs.select_image", ['property'=>$property, 'images'=>$images])
                                                            @elseif($property->input_type == "single-relation-price")
                                                                @php($property->input_type= 'number')
                                                                @include("widgets.inputs.currency", ['property'=>$property])
                                                            @endif
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>

                                            @foreach($properties as $property)
                                                <div class="row">
                                                    @if($property->level ==3)
                                                        <div class="col s3">
                                                            @if($property->input_type == "text")
                                                                @include("widgets.inputs.text", ['property'=>$property])
                                                            @elseif($property->input_type == "check")
                                                                @include("widgets.inputs.check", ['property'=>$property])
                                                            @elseif($property->input_type == "radio")
                                                                @include("widgets.inputs.radio", ['property'=>$property])
                                                            @elseif($property->input_type == "textarea")
                                                                @include("widgets.inputs.textarea", ['property'=>$property])
                                                            @elseif($property->input_type == "select")
                                                                @include("widgets.inputs.select", ['property'=>$property])
                                                            @elseif($property->input_type == "multi-relation-document-images")
                                                                @include("widgets.inputs.select_image", ['property'=>$property, 'images'=>$images])
                                                            @elseif($property->input_type == "single-relation-price")
                                                                @php($property->input_type= 'number')
                                                                @include("widgets.inputs.currency", ['property'=>$property])
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach


                                        </div>


                                    </div>

                                    <div class="col s12 m3">

                                        <div class="card-panel">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="col s12 btn cyan waves-effect waves-light right"
                                                            type="submit"
                                                            name="action">{{ __('messages.input_titles')['submit']}}
                                                        <i class="material-icons right">send</i>
                                                    </button>
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
    </section>






@endsection
@section("footer")

    <script>


        //        document.addEventListener('DOMContentLoaded', function() {
        //            var elems = document.querySelectorAll('.modal');
        //            var instances = M.Modal.init(elems, options);
        //        });

        // Or with jQuery

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