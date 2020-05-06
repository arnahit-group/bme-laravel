@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <link href="{{asset('alibaba/css/date_time_picker.css')}}" rel="stylesheet">

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
                <li><a href="single_tour_fixed_sidebar.html#">صفحه اصلی</a></li>
                <li><a href="single_tour_fixed_sidebar.html#">دسته بندی</a></li>
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

                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="single_tour_fixed_sidebar.html#collapseMap" aria-expanded="false"
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
                </div>

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
                        <a href="single_tour_fixed_sidebar.html#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">بررسی پیشرفته</a>
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

            <aside class="col-md-4" id="sidebar">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="single_tour_fixed_sidebar.html#collapseMap" aria-expanded="false" aria-controls="collapseMap">نمایش بر روی
                        نقشه</a>
                </p>
                <div class="theiaStickySidebar">
                    <div class="box_style_1 expose" id="booking_box">
                        <h3 class="inner">رزرو</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> تاریخ را انتخاب کنید</label>
                                    <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label><i class=" icon-clock"></i> زمان</label>
                                    <input class="time-pick form-control" value="۱۲:۰۰ ق.ظ" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>بزرگسالان</label>
                                    <div class="numbers-row">
                                        <input type="text" value="۱" id="adults" class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>کودکان</label>
                                    <div class="numbers-row">
                                        <input type="text" value="۰" id="children" class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <table class="table table_summary">
                            <tbody>
                                <tr>
                                    <td>
                                        بزرگسالان
                                    </td>
                                    <td class="text-right">
                                        ۲
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        خردسالان
                                    </td>
                                    <td class="text-right">
                                        ۰
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        مجموع مقدار
                                    </td>
                                    <td class="text-right">
                                        ۳ عدد ۱۹۵.۰۰۰ تومان
                                    </td>
                                </tr>
                                <tr class="total">
                                    <td>
                                        هزینه کل
                                    </td>
                                    <td class="text-right">
                                        ۱۰۰.۰۰۰ تومان
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn_full" href="cart_fixed_sidebar.html">اکنون ثبت کن</a>
                        <a class="btn_full_outline" href="single_tour_fixed_sidebar.html#"><i class=" icon-heart"></i> اضافه کردن به لیست علاقمندی</a>
                    </div><!--/box_style_1 -->
                </div><!--/end sticky -->
            </aside>
        </div><!--End row -->
    </div><!--End container -->


@endsection

@section('footer')
    <!-- Specific scripts -->
    <script src="{{asset('alibaba/js/icheck.js')}}"></script>
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>

    <!-- Date and time pickers -->
    <script src="{{asset('alibaba/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('alibaba/js/bootstrap-timepicker.js')}}"></script>
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
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

    <!-- Fixed sidebar -->
    <script src="{{asset('alibaba/js/theia-sticky-sidebar.js')}}"></script>
    <script>
        jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
        });
    </script>

@endsection
