@extends("admin.layouts.admin")

@section('vendor-css')

    @if(isset($widgets[0]->subview))
        @include("{$widgets[0]->subview}.vendor-css")
    @endif


@endsection

@section("header")

    @if(isset($widgets[0]->subview))
        @include("{$widgets[0]->subview}.header")
    @endif


@endsection
@section("main")

    @if(isset($widgets[0]->subview))
        @include("{$widgets[0]->subview}.main", ['datas'=> $properties])
    @endif

@endsection

@section('vendor-js')

    @if(isset($widgets[0]->subview))
        @include("{$widgets[0]->subview}.vendor-js")
    @endif

@endsection

@section("footer")

    @if(isset($widgets[0]->subview))
        @include("{$widgets[0]->subview}.footer")
    @endif

    <script>

        $(document).ready(function () {

            $("[id^=del-]").click(function () {

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
                        url: "{{$urls['destroy']}}",
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
                            alert(result.status);

                        }
                    });
                }


            });
        });

    </script>




@endsection