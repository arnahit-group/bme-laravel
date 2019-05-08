<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <meta name="_token" content="{{csrf_token()}}"/>
        <link href="{{asset('vendors/cropper/cropper.css')}}" type="text/css" rel="stylesheet">
        <style>

            .featured_image {
                width: 70%;
            }

        </style>


    </head>
    <body>


        <div class="featured_image">
            <img src="{{asset('uploads/630df7303da006129bd6d2349daf99b7f5da3397.png')}}" alt=""/>
        </div>

        <label class="data-url"></label>

        <br>

        <label title="Upload image file" for="inputImage" class="btn btn-primary">
            <input type="file" accept="image/*" name="file" id="inputImage"
                   class="hide">
            انتخاب تصویر جدید
        </label>





        <br>
        <button id="send" type="button">TEST</button>

        <script type="text/javascript" src="{{asset('vendors/jquery-3.2.1.min.js')}}"></script>
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>--}}

        {{--<script src="https://fengyuanchen.github.io/js/common.js"></script>--}}
        <script type="text/javascript" src="{{asset('vendors/cropper/cropper.js')}}"></script>
        {{--<script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>--}}

        <script type="text/javascript" src="{{asset('vendors/cropper/jquery-cropper.js')}}"></script>
        <script>

            var $image = $(".featured_image > img");
            originalData = {};


            $image.cropper({
                aspectRatio: 200 / 200,
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

                $("#img").change(function () {

                    alert("ddd");

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


    </body>
</html>
