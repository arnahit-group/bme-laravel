@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('alibaba/css/skins/square/grey.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/date_time_picker.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')

    <section id="search_container">
        <div id="search">
            <ul class="nav nav-tabs">
                <li class="active"><a href="index_7.html#tours" data-toggle="tab">تور ها</a></li>
                <li><a href="index_7.html#hotels" data-toggle="tab">هتل ها</a></li>
                <li><a href="index_7.html#transfers" data-toggle="tab">نقل و انتقالات</a></li>
                <li><a href="index_7.html#restaurants" data-toggle="tab">رستوران ها</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tours">
                    <h3>جستجو تور های ایران</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>وارد کردن متن مورد نظر </label>
                                <input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="عبارات مورد نظر خود را تایپ کنید">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>دسته بندی</label>
                                <select class="ddslick" name="category">
                                    <option value="0" data-imagesrc="img/icons_search/all_tours.png" selected>همه ی تور ها</option>
                                    <option value="1" data-imagesrc="img/icons_search/sightseeing.png">گشت و گذار شهرستان</option>
                                    <option value="2" data-imagesrc="img/icons_search/museums.png">تور های موزه</option>
                                    <option value="3" data-imagesrc="img/icons_search/historic.png">اماکن تاریخی</option>
                                    <option value="4" data-imagesrc="img/icons_search/walking.png">تور های پیاده روی</option>
                                    <option value="5" data-imagesrc="img/icons_search/eat.png">رستوران ها</option>
                                    <option value="6" data-imagesrc="img/icons_search/churches.png">کلیساها</option>
                                    <option value="7" data-imagesrc="img/icons_search/skyline.png">تور کوه نوردی</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- End row -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> تاریخ</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class=" icon-clock"></i> زمان</label>
                                <input class="time-pick form-control" value="۱۲:۰۰ ق.ظ" type="text">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">
                            <div class="form-group">
                                <label>بزرگسالان</label>
                                <div class="numbers-row">
                                    <input type="text" value="۱" id="adults" class="qty2 form-control" name="adults">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">
                            <div class="form-group">
                                <label>کودکان</label>
                                <div class="numbers-row">
                                    <input type="text" value="۱" id="children" class="qty2 form-control" name="children">
                                </div>
                            </div>
                        </div>

                    </div><!-- End row -->
                    <hr>
                    <button class="btn_1 green"><i class="icon-search"></i>اکنون جستجو کن
                    </button>
                </div><!-- End rab -->
                <div class="tab-pane" id="hotels">
                    <h3>جستجو هتل در کیش</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i>بررسی از</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> بررسی تا</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-5">
                            <div class="form-group">
                                <label>بزرگسالان</label>
                                <div class="numbers-row">
                                    <input type="text" value="۱" id="adults" class="qty2 form-control" name="adults_2">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-5">
                            <div class="form-group">
                                <label>کودکان</label>
                                <div class="numbers-row">
                                    <input type="text" value="۱" id="children" class="qty2 form-control" name="children_2">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label>اتاق</label>
                                <div class="numbers-row">
                                    <input type="text" value="۱" id="children" class="qty2 form-control" name="rooms">
                                </div>
                            </div>
                        </div>
                    </div><!-- End row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>نام هتل</label>
                                <input type="text" class="form-control" id="hotel_name" name="hotel_name" placeholder="در صورت تمایل نام هتل را وارد نمایید">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>منطقه شهرستان</label>
                                <select class="form-control" name="area">
                                    <option value="Centre" selected>مرکز</option>
                                    <option value="Gar du Nord Station">شمال</option>
                                    <option value="La Defance">جنوب</option>
                                </select>
                            </div>
                        </div>
                    </div> <!-- End row -->
                    <hr>
                    <button class="btn_1 green"><i class="icon-search"></i>اکنون جستجو کن</button>
                </div>
                <div class="tab-pane" id="transfers">
                    <h3>جستجو نقل و انتقالات در کیش</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="select-label">از</label>
                                <select class="form-control">
                                    <option value="orly_airport">فرودگاه کیش</option>
                                    <option value="gar_du_nord">فرودگاه بندرعباس</option>
                                    <option value="hotel_rivoli">فرودگاه مهرآباد</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="select-label">به</label>
                                <select class="form-control">
                                    <option value="orly_airport">فرودگاه کیش</option>
                                    <option value="gar_du_nord">فرودگاه بندرعباس</option>
                                    <option value="hotel_rivoli">فرودگاه مهرآباد</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- End row -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> تاریخ</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class=" icon-clock"></i> زمان</label>
                                <input class="time-pick form-control" value="۱۲:۰۰ ق.ظ" type="text">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="form-group">
                                <label>کودکان</label>
                                <div class="numbers-row">
                                    <input type="text" value="۱" id="adults" class="qty2 form-control" name="quantity">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-9">
                            <div class="form-group">
                                <div class="radio_fix">
                                    <label class="radio-inline" style="padding-left:0">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> یک طرفه
                                    </label>
                                </div>
                                <div class="radio_fix">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> برگشت
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row -->
                    <hr>
                    <button class="btn_1 green"><i class="icon-search"></i>اکنون جستجو کن</button>
                </div>
                <div class="tab-pane" id="restaurants">
                    <h3>جستجو رستوران ها در کیش</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>جستجوی نام</label>
                                <input type="text" class="form-control" id="restaurant_name" name="restaurant_name" placeholder="نام رستوران را وارد کنید...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>نوع غذا</label>
                                <select class="ddslick" name="category_2">
                                    <option value="0" data-imagesrc="img/icons_search/all_restaurants.png" selected>همه رستوران ها</option>
                                    <option value="1" data-imagesrc="img/icons_search/fast_food.png">فست فود</option>
                                    <option value="2" data-imagesrc="img/icons_search/pizza_italian.png">پیتزا / ایتالیایی</option>
                                    <option value="3" data-imagesrc="img/icons_search/international.png">بین المللی</option>
                                    <option value="4" data-imagesrc="img/icons_search/japanese.png">ژاپونی</option>
                                    <option value="5" data-imagesrc="img/icons_search/chinese.png">چینی</option>
                                    <option value="6" data-imagesrc="img/icons_search/bar.png">قهوه</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- End row -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> تاریخ</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><i class=" icon-clock"></i> زمان</label>
                                <input class="time-pick form-control" value="۱۲:۰۰ ق.ظ" type="text">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">
                            <div class="form-group">
                                <label>بزرگسالان</label>
                                <div class="numbers-row">
                                    <input type="text" value="۱" id="adults" class="qty2 form-control" name="adults">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">
                            <div class="form-group">
                                <label>کودکان</label>
                                <div class="numbers-row">
                                    <input type="text" value="۱" id="children" class="qty2 form-control" name="children">
                                </div>
                            </div>
                        </div>

                    </div><!-- End row -->
                    <hr>
                    <button class="btn_1 green"><i class="icon-search"></i>اکنون جستجو کن</button>
                </div>
            </div>
        </div>
    </section><!-- End hero -->

    <div class="container margin_60">

        <div class="main_title">
            <h2>تور های <span>برتر</span> کیش </h2>
            <p>مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا </p>
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_1.jpg" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>بنا های تاریخی<span class="price"><sup>۶۰.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>تور</strong> شهر قدیمی حریره</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_2.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="badge_save">تخفیف<strong>۳۰%</strong></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-43"></i>کلیسا ها<span class="price"><sup>۳۰.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>تور</strong> کلیسای باستانی</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_3.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon popular"></div>
                            <div class="badge_save">تخفیف<strong>۳۰%</strong></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>بنا های تاریخی<span class="price"><sup>۳۵.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>تور</strong> تخت جمشید</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_4.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon popular"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-30"></i>تور پیاده روی<span class="price"><sup>۱۲.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>تور</strong> پیاده روی کیش</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_14.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon popular"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-28"></i>تور پیاده روی<span class="price"><sup>۱۲.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>تور</strong> ساحلی</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_5.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>مکان های تاریخی<span class="price"><sup>۸۶.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>تور</strong> قلعه پرتغالی ها</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.7s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_8.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-3"></i>تفریحی گردشی<span class="price"><sup>۳۶.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>تور </strong> تهران گردی</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.8s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_9.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-4"></i>موزه ها<span class="price"><sup>۱۴۲.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>تور</strong> موزه تهران</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="img/tour_box_12.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-14"></i>رستوران<span class="price"><sup>۸۶.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>رستوران</strong> ایران</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقه مند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

        </div><!-- End row -->
        <p class="text-center nopadding">
            <a href="index_7.html#" class="btn_1 medium"><i class="icon-eye-7"></i>دیدن همه تور ها </a>
        </p>
    </div><!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2>تور های <span>محبوب</span> دیگر</h2>
                <p>
                    مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا
                </p>
            </div>
            <div class="row add_bottom_45">
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-3"></i>تور شهر بازی<span class="other_tours_price">۵۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-30"></i>تور خرید<span class="other_tours_price">۳۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-44"></i>تور مکان های تاریخی<span class="other_tours_price">۶۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-3"></i>تور سرگرمی<span class="other_tours_price">۶۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-44"></i>تور تخت جمشید<span class="other_tours_price">۹۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-3"></i>تور جنگل حرا<span class="other_tours_price">۴۵.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-1"></i>تور بازدید از مکان های مذهبی<span class="other_tours_price">۴۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-4"></i>تور تاریخی<span class="other_tours_price">۲۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-30"></i>تلکابین رامسر<span class="other_tours_price">۱۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-3"></i>تور اتوبوس گردی<span class="other_tours_price">۳۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-30"></i>تور کیش گردی<span class="other_tours_price">۶۸۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-3"></i>تور قشم گردی<span class="other_tours_price">۵۸۰.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-37"></i>تور اصفهان گردی<span class="other_tours_price">۳۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-1"></i>تور مشهد<span class="other_tours_price">۴۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-50"></i>تور مراکز خرید<span class="other_tours_price">۹۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-44"></i>تور غار گردی<span class="other_tours_price">۱۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-50"></i>تور خرید از قشم<span class="other_tours_price">۵۵۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_7.html#"><i class="icon_set_1_icon-44"></i>تور اثار تاریخی ایران<span class="other_tours_price">۱.۵۰۰.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
            </div><!-- End row -->

            <div class="banner colored add_bottom_30">
                <h4>دیدن تور های ویژه <span> ۵۶۰.۰۰۰ تومان</span></h4>
                <p>
                    تور های ویژه گردشگری ، بازدید از موزه ها و مکان های دیدنی کشور ها
                </p>
                <a href="single_tour.html" class="btn_1 white">مشاهده همه</a>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_7.html#"><img src="img/bus.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> تور گشت و گذار</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_7.html#"><img src="img/transfer.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> وسایل نقلیه</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_7.html#"><img src="img/guide.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> راهنمای تور</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_7.html#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> هتل</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End white_bg -->

    <section class="promo_full">
        <div class="promo_full_wp magnific">
            <div>
                <h3>متعلق به تمامی نقاط</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                </p>
                <a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video"><i class="icon-play-circled2-1"></i></a>
            </div>
        </div>
    </section><!-- End section -->

    <div class="container margin_60">

        <div class="main_title">
            <h2>چرا آژانس مسافرتی <span>علی بابا ؟</span></h2>
            <p>
                مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا
            </p>
        </div>

        <div class="row">

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span>درون استانی </span> بیش از ۱۲۰ تور</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                    <a href="about.html" class="btn_1 outline">ادامه مطلب</a>
                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-30"></i>
                    <h3><span>بیش از ۱۰۰۰</span> مشتری</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                    <a href="about.html" class="btn_1 outline">ادامه مطلب</a>
                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-57"></i>
                    <h3><span>پشتیبانی </span> ۲۴ ساعته</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                    <a href="about.html" class="btn_1 outline">ادامه مطلب</a>
                </div>
            </div>

        </div><!--End row -->

        <hr>

        <div class="row">
            <div class="col-md-6 col-sm-6 hidden-xs">
                <img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
            </div>
            <div class="col-md-6 col-sm-6">
                <h3><span>شروع به کار</span> با آژانس علی بابا</h3>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                <ul class="list_order">
                    <li><span>۱</span>تور مورد نظر خود را انتخاب کنید</li>
                    <li><span>۲</span>بلیط خود را خریداری کنید</li>
                    <li><span>۳</span>تور مناسب خود را دقیق انتخاب کنید</li>
                </ul>
                <a href="http://ipixels.ir/demo/alibaba/all_tour_list.html" class="btn_1">انتخاب تور</a>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->


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
    <script src="{{asset('alibaba/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('alibaba/js/bootstrap-timepicker.js')}}"></script>
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>
    <script src="{{asset('alibaba/js/jquery.ddslick.js')}}"></script>
    <script>
        $("select.ddslick").each(function () {
            $(this).ddslick({
                showSelectedHTML: true
            });
        });
    </script>

@endsection
