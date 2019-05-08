@extends('layouts.public2')

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
//position : [2, 2],
                autoclose: true,
                toolbox: true,
                altField: "#alternateField",
                altFormat: "u",
                altFieldFormatter: function (unix) {
                    var pdate = new persianDate(unix);
                    pdate.formatPersian
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
            dp = $(".datePicker").data("datepicker");
        });

    </script>

@endsection

@section('container')

    @include('widgets.services.public.reserve', ['room'=>$object, 'count'=> $count, 'dates'=>$dates])




@endsection

@section("footer")

    <script>

        var counter_step = 1;
        var current_reserve_id = 0;
        var interval2;
        $(document).ready(function () {
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
                            if (current_reserve_id == 0)
                                return

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
                                            $("#btn-go-to-step-3").prop('disabled', '');
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
                            minutes: 5,
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
                                        url: "{{ url('/admin/services/change_situation') }}",
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


//                        jQuery("#countdown-2").countdowntimer("pause", "pause");
//                        jQuery("#countdown-2").countdowntimer( "destroy");
                        // Do something after Ajax completes
                    },
                    error: function (result) {
                        alert(result.status);
                    }
                });


            });

        });


        $(document).ready(function () {

            var countdowntimer;


//            var timer2 = "5:01";
//            var interval = setInterval(function () {
//                var timer = timer2.split(':');
//                //by parsing integer, I avoid all extra string processing
//                var minutes = parseInt(timer[0], 10);
//                var seconds = parseInt(timer[1], 10);
//                --seconds;
//                minutes = (seconds < 0) ? --minutes : minutes;
//                if (minutes < 0) clearInterval(interval);
//                seconds = (seconds < 0) ? 59 : seconds;
//                seconds = (seconds < 10) ? '0' + seconds : seconds;
//                //minutes = (minutes < 10) ?  minutes : minutes;
//                $('#countdown-1').html(minutes + ':' + seconds);
//                timer2 = minutes + ':' + seconds;
//            }, 1000);


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
                            $("#btn-open-modal-for-atm-code").removeClass("btn-unavailable");
                            $("#h-counter-info").html("اتاق مورد نظر شما تایید شد. لطفا جهت پرداخت اقدام نمایید")
                            $("#countdown-2").prop('hidden', false);
                            $("#countdown-1").prop('hidden', true);

                            countdowntimer = $("#countdown-2").countdowntimer({
                                minutes: 15,
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
                                            url: "{{ url('/admin/services/change_situation') }}",
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
        });


        var url = "{{url('/documents/ajax/voucher/')}}";

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems, options);
        });

        // Or with jQuery

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

                if (input_email.val().trim() == "") {
                    input_email.focus();
                    return;
                }

                if (input_name.val().trim() == "") {
                    input_name.focus();
                    return;
                }

                if (input_mobile.val().trim() == "") {
                    input_mobile.focus();
                    return;
                }

                if (input_phone.val().trim() == "") {
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
                        'data_type': 'room'
                    },
                    success: function (result) {
                        current_reserve_id = result.message.reserve_id;
                        reservation_code.html(result.message.code);

                        $("#btn-print-voucher").attr('href', url + "/" + result.message.code);
//                            alert(result.message);
//                            $("#modal2").modal();
//                            $('#modal2').modal('open');
//                            $('#modal2').openModal({ dismissible: false});
//                            $('.timer').startTimer();

                        countdowntimer = $("#countdown-1").countdowntimer({
                            minutes: 5,
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
                                        url: "{{ url('/admin/services/change_situation') }}",
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

                        stepsWizard.steps("next");
                    },
                    error: function (result) {
//                            alert("error code :" + result.status);

                        return false;
                    }
                });
            });


            $("#btn-open-modal-for-atm-code").click(function () {

                $("#modal21").modal('open');
            });


            $("#btn-go-to-step-3").click(function () {
//                $("#modal3").modal('open');
                stepsWizard.steps("next");

            });


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

        });


        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function () {


        });


        // Initialize wizard
        stepsWizard = $("#example-basic").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onInit: function (event, current) {
                $('.actions > ul > li').attr('style', 'display:none');
                $('.actions').attr('style', 'display:none');
            },
            labels: {
                finish: 'ff',
                next: 'nn',
                previous: 'pp'
            },
            autoFocus: true,
        });


        $("#pay-online").click(function () {
            $("#btn-go-to-step-3").prop('disabled', '');
        })


        {{--$("#btn-print-voucher").click(function () {--}}

        {{--//            alert(current_reserve_id);--}}
        {{--//            return;--}}
        {{--$.ajaxSetup({--}}
        {{--headers: {--}}
        {{--'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
        {{--}--}}
        {{--});--}}

        {{--$.ajax({--}}
        {{--url: "{{url("/documents/ajax/voucher")}}",--}}
        {{--method: 'post',--}}
        {{--data: {'reserve_id': current_reserve_id},--}}
        {{--success: function (result) {--}}

        {{--window.location = result.message;--}}
        {{--//                    window.open(result.message, '_blank');--}}
        {{--//                    alert("success");--}}
        {{--},--}}
        {{--error: function (result) {--}}
        {{--alert(result.status);--}}
        {{--}--}}
        {{--});--}}

        {{--});--}}


    </script>


@endsection
