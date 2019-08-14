@extends("admin.layouts.admin")

@section('vendor-css')


    @include('admin.layouts.subviews.modern_dashboard.vendor-css')


@endsection


@section("header")

    @include('admin.layouts.subviews.modern_dashboard.header')

@endsection

@section("main")
    @include('admin.layouts.subviews.modern_dashboard.main')


@endsection

@section('vendor-js')
    @include('admin.layouts.subviews.modern_dashboard.vendor-js')
@endsection


@section("footer")
    @include('admin.layouts.subviews.modern_dashboard.footer')


{{--    <script>--}}

{{--        $(document).ready(function () {--}}
{{--            $('.modal').modal();--}}
{{--        });--}}

{{--        $(document).ready(function () {--}}

{{--            $("#waiting-reserves-list").on("click", ".button", function () {--}}
{{--                var service_id = $(this).attr("data-id");--}}
{{--                $.ajaxSetup({--}}
{{--                    headers: {--}}
{{--                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                    }--}}
{{--                });--}}

{{--                $.ajax({--}}
{{--                    url: "{{ route('services.get', ['type'=>'reserve']) }}",--}}
{{--                    method: 'post',--}}
{{--                    data: {--}}
{{--                        service_id: service_id--}}
{{--                    },--}}
{{--                    success: function (result) {--}}
{{--                        var service = result.message;--}}
{{--                        var tbl_reserve_info = $("#tbl-reserve-info");--}}
{{--                        var s = "<tr><th>کد رهگیری</th><th>تاریخ ورود</th><th>تاریخ خروج</th></tr>";--}}
{{--                        s += "<tr><td>" + service.properties['code'].title + "</td>";--}}
{{--                        s += "<td>" + service.properties['ja_start_date'].title + "<br>" + service.properties['gr_start_date'].title + "</td>";--}}
{{--                        s += "<td>" + service.properties['ja_end_date'].title + "<br>" + service.properties['gr_end_date'].title + "</td></tr>";--}}
{{--                        tbl_reserve_info.html("");--}}
{{--                        tbl_reserve_info.html(s);--}}
{{--                        $("#hdn-service-id").val(service.id);--}}

{{--                        if (service.properties['situation'].title == 1) {--}}
{{--                            $("#hdn-type").val("room");--}}
{{--                            $("#dv-check-image").prop('hidden', true);--}}
{{--                        } else if (service.properties['situation'].title == 5) {--}}
{{--                            $("#hdn-type").val("check");--}}
{{--                            $("#dv-check-image").prop('hidden', false);--}}
{{--                            $("#dv-check-image  img").attr('src', service.check_path);--}}
{{--//                            alert(service.check_path);--}}
{{--                        }--}}

{{--                        $("#modal-room-confirmation").modal("open");--}}

{{--                    },--}}
{{--                    error: function (result) {--}}
{{--                        alert(result.status);--}}
{{--                    }--}}

{{--                });--}}
{{--            });--}}

{{--            $("#btn-modal-confirm-room-service").click(function () {--}}


{{--                var value;--}}
{{--                if ($("#hdn-type").val() == "room") {--}}
{{--                    value = 3;--}}
{{--                } else if ($("#hdn-type").val() == "check") {--}}
{{--                    value = 7;--}}
{{--                }--}}

{{--                $.ajaxSetup({--}}
{{--                    headers: {--}}
{{--                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                    }--}}
{{--                });--}}

{{--                $.ajax({--}}
{{--                    url: "{{ route('services.change',['type'=>'reserve']) }}",--}}
{{--                    method: 'post',--}}
{{--                    data: {--}}
{{--                        service_id: $("#hdn-service-id").val(),--}}
{{--                        property: 'situation',--}}
{{--                        value: value,--}}
{{--                    },--}}
{{--                    success: function (result) {--}}
{{--                        $("#modal-room-confirmation").modal("close");--}}

{{--                    },--}}
{{--                    error: function (result) {--}}
{{--                        alert(result.status);--}}
{{--                    }--}}
{{--                });--}}


{{--            });--}}


{{--            $("#btn-modal-reject-room-service").click(function () {--}}


{{--                var value;--}}
{{--                if ($("#hdn-type").val() == "room") {--}}
{{--                    value = 2;--}}
{{--                } else if ($("#hdn-type").val() == "check") {--}}
{{--                    value = 6;--}}
{{--                }--}}

{{--                $.ajaxSetup({--}}
{{--                    headers: {--}}
{{--                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                    }--}}
{{--                });--}}

{{--                $.ajax({--}}
{{--                    url: "{{ route('services.change',['type'=>'reserve'])}}",--}}
{{--                    method: 'post',--}}
{{--                    data: {--}}
{{--                        service_id: $("#hdn-service-id").val(),--}}
{{--                        property: 'situation',--}}
{{--                        value: 6,--}}
{{--                    },--}}
{{--                    success: function (result) {--}}
{{--                        $("#modal-room-confirmation").modal("close");--}}

{{--                    },--}}
{{--                    error: function (result) {--}}
{{--                        alert(result.status);--}}
{{--                    }--}}
{{--                });--}}


{{--            });--}}

{{--            var refreshData = function () {--}}
{{--                $.ajaxSetup({--}}
{{--                    headers: {--}}
{{--                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                    }--}}
{{--                });--}}

{{--                $.ajax({--}}
{{--                    url: "{{ route('services.refresh', ['type'=>'reserve']) }}",--}}
{{--                    method: 'post',--}}
{{--                    data: {--}}
{{--                        type: 'reserve'--}}
{{--                    },--}}
{{--                    success: function (result) {--}}
{{--                        var oo = result.message.waiting_reserves;--}}

{{--                        $(".waiting-reserves-lists", "#waiting-reserves-list").remove();--}}
{{--                        var resreves = result.message.waiting_reserves;--}}
{{--                        $("#p-waiting-reserve-count").html(resreves.length + " عدد");--}}
{{--                        for (i = 0; i < resreves.length; i++) {--}}

{{--//                            $waiting_reserve - > room - > properties['title'] - > title--}}
{{--                            var ss = "";--}}
{{--                            if (resreves[i].properties['situation'].title == 1) {--}}
{{--                                ss = "<li class='collection-item waiting-reserves-lists'><div class='row'><div class='col s7'><p class='collections-title'>";--}}
{{--                                ss += "<strong> کد رهگیری : </strong><span dir='ltr'> " + resreves[i].properties['code'].title + "</span></p><p class='collections-content'>";--}}
{{--                                ss += resreves[i].room.properties['title'].title;--}}
{{--                                ss += "</p></div>";--}}
{{--                                ss += "<div class='col s2'></div><div class='col s3'><button data-id='" + resreves[i].id + "' class='btn btn-red btn-bg button'>"--}}
{{--                                ss += "تایید اتاق";--}}
{{--                                ss += "</button></div></div></li>";--}}
{{--                            } else if (resreves[i].properties['situation'].title == 5) {--}}
{{--                                ss = "<li class='collection-item waiting-reserves-lists yellow'><div class='row'><div class='col s7'><p class='collections-title'>";--}}
{{--                                ss += "<strong> کد رهگیری : </strong><span dir='ltr'> " + resreves[i].properties['code'].title + "</span></p><p class='collections-content'>";--}}
{{--                                ss += resreves[i].room.properties['title'].title;--}}
{{--                                ss += "</p></div>";--}}
{{--                                ss += "<div class='col s2'></div><div class='col s3'><button data-id='" + resreves[i].id + "' class='btn btn-red btn-bg button'>"--}}
{{--                                ss += "تایید رسید";--}}
{{--                                ss += "</button></div></div></li>";--}}
{{--                            }--}}
{{--                            $("#waiting-reserves-list").append(ss);--}}
{{--                        }--}}
{{--                    },--}}
{{--                    error: function (result) {--}}
{{--                        // alert("error");--}}
{{--                    }--}}
{{--                });--}}
{{--            };--}}
{{--            setInterval(refreshData, 5000);--}}
{{--        });--}}


{{--    </script>--}}







@endsection
