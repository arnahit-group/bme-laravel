@extends('public.themes.hotel.layouts.public2')

@section("header")





    {{--<link rel="stylesheet" type="text/css" href="{{asset('style/jquery.countdownTimer.css')}}"/>--}}
    <script type="text/javascript" src="{{asset('scripts/jquery.countdownTimer.js')}}"></script>


    <script>
        $(document).ready(function () {
            $('#lightSlider').lightSlider({

                gallery: true,
                item: 1,
                loop: true,
                slideMargin: 0,
                thumbItem: 9,
                responsive: [
                    {
                        breakpoint: 800,
                        settings: {
                            item: 1,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 1,

                            slideMove: 1
                        }
                    }
                ]

            });


        });


        $(".datePicker").val('');
        var dp;
        $(document).ready(function () {
            var options = {
                format: "YYYY/MM/DD",
                formatter: function (unix) {
                    var pdate = new persianDate(unix);
                    pdate.formatPersian = false;
                    return pdate.format("YYYY/MM/DD");
//return new persinDate(unix).format("YYYY/MM/DD");
                },
                daysTitleFormat: "YYYY MMMM",
                observer: true,
                sendOption: "p",
                initialValue: true,
//position : [2, 2],
                autoclose: true,
                toolbox: true,
                minDate: new Date().getTime(),
                altField: "#alternateField",
                altFormat: "u",
                altFieldFormatter: function (unix) {
                    var pdate = new persianDate(unix);
                    // pdate.formatPersian
                    pdate.formatPersian = false;
                    return pdate.format("YYYY MM DD");
                },
                onShow: function () {
//console.log("user config onShow event ")
                },
                onHide: function () {
//console.log("user config onHide event ")
                },
                onSelect: function (unix) {
//console.log("user config onSelect event as : "+unix)

                }
            };

            $(".datePicker").persianDatepicker(options);

            // var tt = new Date().getTime();
            // alert(tt);
            // var pd = $('.datePicker').persianDatepicker();
            // pd.setDate(tt);


            dp = $(".datePicker").data("datepicker");
        });

    </script>

@endsection

@section('container')

    @if(Request::route()->getName() == 'home.service')

        @if(Request::get('step') == 1)
            @include('widgets.services.public.reserve', ['room'=>$object, 'count'=> $count, 'dates'=>$dates])
        @elseif(Request::get('step') == 2)
            @include('widgets.services.public.reserve')
        @elseif(Request::get('step') == 3)
            @include('widgets.services.public.reserve')
        @endif

    @else
        @include('widgets.services.public.tracking')
    @endif



@endsection

@section("footer")

    <script>
        var counter_step = 1;
        var current_reserve_id = 0;
        var interval2;
        var countdowntimer;
        var url = "{{url('/documents/ajax/voucher/')}}";
        var url_payout = "{{url('/services/payout/')}}";


        $(document).ready(function () {
            $('.parallax').parallax();
            $('.modal').modal();
            $("#modal2").modal({
                dismissible: false
            });
            $("#modal21").modal({
                dismissible: false
            });

            $('select').formSelect();
        });

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems, options);
        });


    </script>

    @if(Request::get('step') == 1)

        <script>
            // import moment from 'moment-jalaali';
            var app = new Vue({
                el: '#app',
                data: {
                    date:  moment().format('jYYYY/jMM/jDD'),
                    today: moment().format('jYYYY/jMM/jDD'),
                },
                components: {
                    DatePicker: VuePersianDatetimePicker
                }
            });
        </script>

        <script>

            $("#btn-update-service-form").click(function () {

                var start = $("#alternateField");
                var count = $("#count");
                var spn_start_date = $("#spn-start-date");
                var spn_end_date = $("#spn-end-date");
                var dv_dates = $("#dv-dates");
                var btn_grey = $("#btn-grey");

                var input_price = $('#input-price');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });


                $.ajax({
                    url: "{{url("/service/ajax/update")}}",
                    timeout: 30000,
                    method: 'post',
                    data: {
                        'start': start.val(),
                        'count': count.val(),
                        'price': '{{$object->properties['price']->prices[0]}}'
                    },
                    success: function (result) {

                        var p = 0;
                        var price = result.message.price;

                        dv_dates.html("");
                        var dates = result.message.dates;
                        for (i = 0; i < dates.length; i++) {
                            var d = "<span class='black-text'>" + dates[i] + "</span><span class='left'>" + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "  " + " تومان " + "</span><br>"
                            dv_dates.append(d);
                            p += Number(price);
                        }

                        spn_start_date.html(dates[0]);
                        spn_end_date.html(dates[dates.length - 1]);
                        input_price.val(p);
                        btn_grey.html(p.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " مجموع");
                        $("#btn-grey-2").html("مجموع:" + p.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " تومان");
                        $("#modal1").modal('close');

                    },
                    error: function (result) {
                        alert("error code :" + result.status);
                    }
                });


            });
            $("#btn-go-to-step-2").click(function () {

                var input_email = $('#input-email');
                var input_name = $('#input-name');
                var input_mobile = $('#input-mobile');
                var input_phone = $('#input-phone');
                var input_price = $('#input-price');

                var reservation_code = $('#reservation-code');

                if (input_email.val().trim() === "") {
                    input_email.focus();
                    return;
                }

                if (input_name.val().trim() === "") {
                    input_name.focus();
                    return;
                }

                if (input_mobile.val().trim() === "") {
                    input_mobile.focus();
                    return;
                }

                if (input_phone.val().trim() === "") {
                    input_phone.focus();
                    return;
                }


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });


                var email = input_email.val();
                var name = input_name.val();
                var mobile = input_mobile.val();
                var phone = input_phone.val();
                var price = input_price.val();


                var start_date = $('#spn-start-date').html();
                var end_date = $('#spn-end-date').html();


                $.ajax({
                    url: "{{url("/service/ajax/save")}}",
                    timeout: 30000,
                    method: 'post',
                    data: {
                        'step': 1,
                        'email': email,
                        'name': name,
                        'mobile': mobile,
                        'phone': phone,
                        'price': price,
                        'start_date': start_date,
                        'end_date': end_date,
                        'data_id': '{{$object->id}}',
                        'type': 'room'
                    },
                    success: function (result) {
                        current_reserve_id = result.message.reserve_id;
                        reservation_code.html(result.message.code);

                        $("#btn-print-voucher").attr('href', url + "/" + result.message.code);
                        $("#pay-online").attr('href', url_payout + "/" + result.message.code);
                        window.location = result.message.url;
                    },
                    error: function (result) {
                        alert(result.status);
                        return false;
                    }
                });
            });


        </script>
    @elseif(Request::get('step') == 2)
        <script>

            current_reserve_id = '{{$reserve->id}}';
            $(document).ready(function () {
                countdowntimer = $("#countdown-1").countdowntimer({
                    @php($rvt=$settings->{'room-verification-time'})
                    minutes: '{{$rvt}}',
                    seconds: 1,
                    size: "lg",
                    timeUp: function () {
                        if (counter_step == 1) {


                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            });

                            $.ajax({
                                url: "{{ route('services.change',['type'=>'reserve'])}}",
                                method: 'post',
                                data: {
                                    service_id: current_reserve_id,
                                    property: 'situation',
                                    value: 4,
                                },
                                success: function (result) {

                                    alert('متاسفانه روزو شما جهت ادامه و پردداخت تایید نگردید');
                                    // TODO should change window location here after time out
//                                            window.location = '/';
                                },
                                error: function (result) {
                                    alert(result.status);
                                }
                            });


                        }
                    }
                });


                $('#btn-upload-check').click(function () {

                    var file_data = $("#atm-code").prop("files")[0];
                    var form_data = new FormData();
                    form_data.append("path", file_data);
                    form_data.append("service_id", current_reserve_id);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{url('/service/ajax/save/check')}}",
                        timeout: 30000,
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        method: 'post',
                        success: function (result) {

                            $("#modal21").modal("close");
                            counter_step++;

                            $("#countdown-2").prop('hidden', true);
                            $("#countdown-3").prop('hidden', false);

                            var s = "لطفا جهت تایید رسید پرداخت منتظر باشید.";
                            $("#h-counter-info").html(s);


                            interval2 = setInterval(function () {

                                console.log('t1');
                                if (current_reserve_id == 0)
                                    return
                                console.log('t2');
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                    }
                                });

                                $.ajax({
                                    url: "{{url("/service/ajax/get/property/value")}}",
                                    timeout: 30000,
                                    method: 'post',
                                    data: {
                                        'property': 'situation',
                                        'service_id': current_reserve_id,
                                    },
                                    success: function (result) {
                                        var value = result.message;
                                        if (value == 6 || value == 7) {
                                            counter_step++;

                                            if (value == 7) {
                                                $("#h-counter-info").html("رسید پرداخت شما تایید گردید.")
                                                $("#btn-go-to-step-3").prop('hidden', false);

                                            } else if (value == 6) {
                                                $("#h-counter-info").html("رسید پرداخت شما تایید نگردید")
                                            }

                                            $("#countdown-1").prop('hidden', true);
                                            $("#countdown-2").prop('hidden', true);
                                            $("#countdown-3").prop('hidden', true);
                                            clearInterval(interval2);
                                        }
                                    },
                                    error: function (result) {
                                        alert(result.status);
                                    }
                                });
                            }, 5000);

                            countdowntimer = $("#countdown-3").countdowntimer({
                                @php($cvt=$settings->{'check-verification-time'})
                                minutes: '{{$cvt}}',
                                seconds: 1,
                                size: "lg",
                                timeUp: function () {
                                    if (counter_step == 3) {

                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                            }
                                        });

                                        $.ajax({
                                            url: "{{ route('services.change',['type'=>'reserve']) }}",
                                            method: 'post',
                                            data: {
                                                service_id: current_reserve_id,
                                                property: 'situation',
                                                value: 6,
                                            },
                                            success: function (result) {
                                                alert('متاسفانه رسید پرداخت شما تایید نشد.');
                                                // TODO should change window location here after time out
//                                            window.location = '/';
                                            },
                                            error: function (result) {
                                                alert(result.status);
                                            }
                                        });
                                    }
                                }
                            });

                        },
                        error: function (result) {
                            alert(result.status);
                        }
                    });


                });


                var interval = setInterval(function () {
//                alert(current_reserve_id);
                    if (current_reserve_id == 0)
                        return
//                return;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });

                    //todo should change based on situation
                    $.ajax({
                        url: "{{url("/service/ajax/get/property/value")}}",
                        timeout: 30000,
                        method: 'post',
                        data: {
                            'property': 'situation',
                            'service_id': current_reserve_id,
                        },
                        success: function (result) {
                            var value = result.message;
//                        alert(value);
                            if (value == 3) {
                                counter_step++;
//                            countdowntimer.stop();
//                            $("#countdown-1").html("");
                                $("#pay-online").removeClass("btn-unavailable");
                                $("#btn-open-modal-for-atm-code").removeClass("btn-unavailable").removeClass('disabled');
                                $("#pay-online").removeClass("btn-unavailable").removeClass('disabled');
                                $("#h-counter-info").html("اتاق مورد نظر شما تایید شد. لطفا جهت پرداخت اقدام نمایید")
                                $("#countdown-2").prop('hidden', false);
                                $("#countdown-1").prop('hidden', true);

                                countdowntimer = $("#countdown-2").countdowntimer({
                                    @php($pt=$settings->{'payout-time'})
                                    minutes: '{{$pt}}',
                                    seconds: 1,
                                    size: "lg",
                                    timeUp: function () {
                                        if (counter_step == 2) {
                                            $.ajaxSetup({
                                                headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                                }
                                            });

                                            $.ajax({
                                                url: "{{route('services.change',['type'=>'reserve']) }}",
                                                method: 'post',
                                                data: {
                                                    service_id: current_reserve_id,
                                                    property: 'situation',
                                                    value: 7,
                                                },
                                                success: function (result) {

                                                    alert('متاسفانه به علت پرداخت نکردن رقم رزرو رزرو تایید نشد');
                                                    // TODO should change window location here after time out
//                                            window.location = '/';
                                                },
                                                error: function (result) {
                                                    alert(result.status);
                                                }
                                            });
                                        }
                                    }
                                });


                                clearInterval(interval);
                            }
                        },
                        error: function (result) {
                            alert(result.status);
                        }
                    });

                }, 5000);

                $("#btn-open-modal-for-atm-code").click(function () {

                    $("#modal21").modal('open');
                });

                {{--$("#btn-go-to-step-3").click(function () {--}}
                {{--    --}}
                {{--    window.location = '{{route('home.service', ['service_type'=>'reserve','step'=>'3','code' => Request::get('code')])}}';--}}
                {{--    --}}
                {{--});--}}

                $("#cancel-reserve", "#modal2").click(function () {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{url("/service/ajax/cancel")}}",
                        method: 'post',
                        data: {'service_id': current_reserve_id},
                        success: function (result) {
//                            alert(result);
                            current_reserve_id = 0;
                            $("#modal2").modal('close');

//                            alert(result.message);
//                            $("#modal2").modal();
//                        $('#modal2').modal('open');
//                            $('#modal2').openModal({ dismissible: false});
//                        $('.timer').startTimer();
//                        stepsWizard.steps("next"); // this will send us on next step :-)
                        },
                        error: function (result) {
//                            alert("error code :" + result.status);

//                            return false;
                        }
                    });


                });

                $("#pay-online").click(function () {
                    $("#btn-go-to-step-3").prop('hidden', false);
                });

            });

        </script>
    @elseif(Request::get('step') == 3)
        <script>


        </script>
    @endif


@endsection
