@extends("layouts.admin")


@section("header")
    @foreach($properties as $property)
        @if($property->input_type == 'cropper')
            <link href="{{asset('vendors/cropper/cropper.css')}}" type="text/css" rel="stylesheet">
        @endif
    @endforeach

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
                    <div class="card-panel">
                        <h4 class="header2">ثبت </h4>
                        <div class="row">
                            <form class="col s12"
                                  action="{{route("documents.update", ['document_type'=> $document_type, 'id'=> $id])}}"
                                  method="post" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                @foreach($properties as $property)
                                    <div class="row">
                                        @if($property->level ==1)
                                            @if($property->input_type == "text")
                                                @include("widgets.inputs.text", ['property'=>$property])
                                            @elseif($property->input_type == "check")
                                                @include("widgets.inputs.check", ['property'=>$property])
                                            @elseif($property->input_type == "file")
                                                @include("widgets.inputs.file", ['property'=>$property])
                                            @elseif($property->input_type == "radio")
                                                @include("widgets.inputs.radio", ['property'=>$property])
                                            @elseif($property->input_type == "cropper")
                                                @include("widgets.inputs.cropper", ['property'=>$property])
                                            @elseif($property->input_type == "textarea")
                                                @include("widgets.inputs.textarea", ['property'=>$property])
                                            @elseif($property->input_type == "select")
                                                @include("widgets.inputs.select", ['property'=>$property])
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
                                                @elseif($property->input_type == "cropper")
                                                    @include("widgets.inputs.cropper", ['property'=>$property])

                                                @elseif($property->input_type == "textarea")
                                                    @include("widgets.inputs.textarea", ['property'=>$property])
                                                @elseif($property->input_type == "select")
                                                    @include("widgets.inputs.select", ['property'=>$property])
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>


                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit"
                                                name="action">{{ __('messages.input_titles')['submit']}}
                                            <i class="material-icons right">send</i>
                                        </button>
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

    @foreach($properties as $property)

        @if($property->input_type == 'cropper')
            <script type="text/javascript" src="{{asset('vendors/cropper/cropper.js')}}"></script>
            <script type="text/javascript" src="{{asset('vendors/cropper/jquery-cropper.js')}}"></script>

            <script>

                var $image = $(".featured_image > img");
                originalData = {};

                $image.cropper({
                    aspectRatio: '{{$settings->width}} / {{$settings->height}}',
                    resizable: true,
                    zoomable: false,
                    rotatable: false,
                    multiple: true,
                    dragend: function (data) {
                        originalData = $image.cropper("getCroppedCanvas");
                        console.log(originalData.toDataURL());
                        $('.data-url').text(originalData.toDataURL());
                    }
                });

                $('#send').click(function () {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });

//                alert($image.cropper("getCroppedCanvas").toDataURL());
//                    data: {'fp': $image.cropper("getCroppedCanvas").toDataURL()},

                    $.ajax({
                        url: "{{url("/cropper/save")}}",
                        method: 'post',
                        data: {'file': $image.cropper("getCroppedCanvas").toDataURL()},
                        success: function (result) {
//                        alert(result);
                            alert(result.message);

                        },
                        error: function (result) {
                            alert("error code :" + result.status);

                        }
                    });
                });







                var $inputImage = $("#inputImage");
                if (window.FileReader) {
                    $inputImage.change(function () {
                        var fileReader = new FileReader(),
                            files = this.files,
                            file;

                        if (!files.length) {
                            return;
                        }

                        file = files[0];

                        if (/^image\/\w+$/.test(file.type)) {
                            fileReader.readAsDataURL(file);
                            fileReader.onload = function () {
                                $inputImage.val("");
                                $image.cropper("reset", true).cropper("replace", this.result);
                            };
                        } else {
                            showMessage("Please choose an image file.");
                        }
                    });
                } else {
                    $inputImage.addClass("hide");
                }

















            </script>

            @break("")
        @endif

    @endforeach


@endsection