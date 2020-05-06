@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')

    <!-- CSS -->
    <link href="{{asset('alibaba/css/date_time_picker.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/jquery.switch.css')}}" rel="stylesheet">


@endsection
@section('header')

@endsection
@section('main')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/single_tour_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>هتل آپادانا مشهد</h1>
                        <span>استان خراسان رضوی، مشهد، اندرزگو ۲</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main">
                            روزانه / شبانه <span><sup>۱۹۰.۰۰۰ تومان</sup></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="single_tour_working_booking.htm#">صفحه اصلی</a></li>
                <li><a href="single_tour_working_booking.htm#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">
                <div id="single_tour_feat">
                    <ul>
                        <li><i class="icon_set_1_icon-4"></i>موزه</li>
                        <li><i class="icon_set_1_icon-83"></i>۳ ساعت</li>
                        <li><i class="icon_set_1_icon-13"></i>دسترسی معلولین</li>
                        <li><i class="icon_set_1_icon-82"></i>۱۴۴ پسندیده شده</li>
                        <li><i class="icon_set_1_icon-22"></i>حیوان خانگی مجاز</li>
                        <li><i class="icon_set_1_icon-97"></i>راهنمای صوتی</li>
                        <li><i class="icon_set_1_icon-29"></i>راهنمای تور</li>
                    </ul>
                </div>

                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="single_tour_working_booking.htm#collapseMap" aria-expanded="false"
                                                    aria-controls="collapseMap">نمایش بر روی نقشه</a></p><!-- Map button for tablets/mobiles -->

                <div class="row">
                    <div class="col-md-3">
                        <h3>شرح</h3>
                    </div>
                    <div class="col-md-9">
                        <h4>لورم ایپسوم </h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                        <h4>لورم ایپسوم </h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم</li>
                                    <li>متنی آزمایشی و بی‌معنی</li>
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم</li>
                                    <li>متنی آزمایشی و بی‌معنی</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>لورم ایپسوم متن ساختگی</li>
                                    <li>لورم ایپسوم</li>
                                    <li>متنی آزمایشی و بی‌معنی</li>
                                    <li>لورم ایپسوم</li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div><!-- End row  -->

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>برنامه</h3>
                    </div>
                    <div class="col-md-9">
                        <div class=" table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            ۱۰ اردیبهشت ۱۳۹۶
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            سه شنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            چهار شنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            پنجشنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            جمعه
                                        </td>
                                        <td>
                                            <span class="label label-danger">تعطیل</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            شنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            یکشنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            دوشنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><em>تاریخ و زمان پذیرش</em></strong>
                                        </td>
                                        <td>
                                            <strong>۰۷:۰۰</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            ۱۵ اردیبهشت ۱۳۹۶
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            سه شنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            چهار شنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            پنجشنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            جمعه
                                        </td>
                                        <td>
                                            <span class="label label-danger">تعطیل</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            شنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            یکشنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            دوشنبه
                                        </td>
                                        <td>
                                            ۰۷:۰۰ تا ۱۸:۰۰
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><em>تاریخ و زمان پذیرش</em></strong>
                                        </td>
                                        <td>
                                            <strong>۰۷:۰۰</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>بررسی </h3>
                        <a href="single_tour_working_booking.htm#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">بررسی پیشرفته</a>
                    </div>
                    <div class="col-md-9">
                        <div id="general_rating">۱۱ نظر
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>موقعیت
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>راهنمای گردشگری
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>قیمت
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>مقدار
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row -->
                        <hr>
                        <div class="review_strip_single">
                            <img src="img/avatar1.jpg" alt="" class="img-circle">
                            <small> ۱۰ اردیبهشت ۱۳۹۶</small>
                            <h4>سامان</h4>
                            <p>
                                "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single">
                            <img src="img/avatar3.jpg" alt="" class="img-circle">
                            <small> ۱۰ اردیبهشت ۱۳۹۶</small>
                            <h4>سامان</h4>
                            <p>
                                "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single last">
                            <img src="img/avatar2.jpg" alt="" class="img-circle">
                            <small> ۱۰ اردیبهشت ۱۳۹۶</small>
                            <h4>سامان</h4>
                            <p>
                                "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->
                    </div>
                </div>
            </div><!--End  single_tour_desc-->

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="single_tour_working_booking.htm#collapseMap" aria-expanded="false" aria-controls="collapseMap">نمایش بر روی
                        نقشه</a>
                </p>
                <div class="box_style_1 expose">
                    <form id="booking" action="single_tour_working_booking.htm" method="post">
                        <h3 class="inner">رزرو</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control required" name="name_booking" id="name_booking" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>نام خانوادگی</label>
                                    <input class="form-control required" name="last_name_booking" id="last_name_booking" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control required" type="email" name="email_booking" id="email_booking">
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input class="form-control required" type="text" name="phone_booking" id="phone_booking">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> تاریخ را انتخاب کنید</label>
                                    <input class="date-pick form-control required" type="text" name="date_booking" id="date_booking">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label><i class=" icon-clock"></i> زمان</label>
                                    <input class="time-pick form-control required" type="text" name="time_booking" id="time_booking">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>بزرگسالان</label>
                                    <div class="numbers-row">
                                        <input type="text" value="1" id="adults" class="qty2 form-control" name="adults">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>کودکان</label>
                                    <div class="numbers-row">
                                        <input type="text" value="0" id="children" class="qty2 form-control " name="children">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped options_booking">
                            <thead>
                                <tr>
                                    <th colspan="3">
                                        Add options / Services
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="6%">
                                        <i class="icon_set_1_icon-16"></i>
                                    </td>
                                    <td width="59%">
                                        Tour guide <strong>+$34</strong>
                                    </td>
                                    <td width="35%">
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_1" id="option_1" checked value="Yes">
                                            <span>
						<span>No</span>
						<span>Yes</span>
						</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-26"></i>
                                    </td>
                                    <td>
                                        Pick up service <strong>+$34*</strong>
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_2" id="option_2" value="Yes">
                                            <span>
						<span>No</span>
						<span>Yes</span>
						</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-71"></i>
                                    </td>
                                    <td>
                                        Insurance <strong>+$24*</strong>
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_3" id="option_3" value="Yes" checked>
                                            <span>
						<span>No</span>
						<span>Yes</span>
						</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-15"></i>
                                    </td>
                                    <td>
                                        Welcome bottle <strong>+$24</strong>
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_4" id="option_4" value="Yes">
                                            <span>
						<span>No</span>
						<span>Yes</span>
						</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-59"></i>
                                    </td>
                                    <td>
                                        Coffe break <strong>+$12*</strong>
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_5" id="option_5" value="Yes">
                                            <span>
						<span>No</span>
						<span>Yes</span>
						</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-58"></i>
                                    </td>
                                    <td>
                                        Dinner <strong>+$26*</strong>
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_6" id="option_6" value="Yes">
                                            <span>
						<span>No</span>
						<span>Yes</span>
						</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon_set_1_icon-40"></i>
                                    </td>
                                    <td>
                                        Bike rent <strong>+$26*</strong>
                                    </td>
                                    <td>
                                        <label class="switch-light switch-ios pull-right">
                                            <input type="checkbox" name="option_7" id="option_7" value="Yes">
                                            <span>
						<span>No</span>
						<span>Yes</span>
						</span>
                                            <a></a>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            <small>* Prices for person.</small>
                        </p>
                        <button type="submit" class="btn_full">Book now</button>
                    </form>
                    <!-- END SEND MAIL SCRIPT -->

                </div><!--/box_style_1 -->

                <div class="box_style_4">
                    <i class="icon_set_1_icon-90"></i>
                    <h4><span>ارتباط </span> از طریق تلفن</h4>
                    <a href="http://ipixels.ir/demo/alibaba/%D8%AA%D9%84%D9%81%D9%86:/%DB%B0%DB%B0%DB%B4%DB%B5%DB%B4%DB%B2%DB%B3%DB%B4%DB%B4%DB%B5%DB%B9%DB%B9" class="phone">۰۷۶-۳۲۵۶۸۴۲۶</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>
            </aside>

        </div><!--End row -->
    </div><!--End container -->


@endsection

@section('footer')

    <script src="{{asset('alibaba/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('alibaba/js/bootstrap-timepicker.js')}}"></script>
    <script src="{{asset('alibaba/js/jquery.validate.js')}}"></script>
    <script>
        $("#booking").validate();
        $('input.date-pick').datepicker();
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>

    <!--Review modal validation -->
    <script src="{{asset('alibaba/assets/validate.js')}}"></script>

    <!-- Map -->
    <script src="{{asset('alibaba/ext/maps.googleapis.com/maps/api/js.JS')}}"></script>
    <script src="{{asset('alibaba/js/map.js')}}"></script>
    <script src="{{asset('alibaba/js/infobox.js')}}"></script>

@endsection
