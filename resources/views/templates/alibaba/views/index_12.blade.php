@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- REVOLUTION SLIDER CSS -->
    <link href="{{asset('alibaba/layerslider/css/layerslider.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')

    <!-- Slider -->
    <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%;height:600px;">
            <!-- first slide -->
            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                <img src="img/slides/slide_1.jpg" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                    data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                    تور کیش مقرون به صرفه</h3>
                <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">شهرهای گردشگری تورها / بلیط های تور /
                    راهنمای تور</p>
                <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;"
                   href='http://ipixels.ir/demo/alibaba/all_tour_list.html'>ادامه مطلب</a></p>
            </div>

            <!-- second slide -->
            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                <img src="img/slides/slide_2.jpg" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%; white-space:nowrap;"
                    data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0; ">
                    بیش از 100 تور مختلف در سراسر جهان</h3>
                <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">ابنیه تاریخی / تورهای اتوبوس گردی /
                    راهنمای موزه ها</p>
                <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;"
                   href='http://ipixels.ir/demo/alibaba/all_tour_list.html'>ادامه مطلب</a></p>
            </div>

            <!-- third slide -->
            <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                <img src="img/slides/slide_3.jpg" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                    data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                    دیدن مکان های فوق العاده</h3>
                <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">ارائه انواع خدمات</p>
                <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;"
                   href='http://ipixels.ir/demo/alibaba/all_tour_list.html'>ادامه مطلب</a></p>
            </div>

            <!-- fourth slide -->
            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:14;">
                <img src="img/slides/slide_4.jpg" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                    data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                    علی بابا فراهم کننده تور های گردشگری و تفریحی</h3>
                <p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">دیدن از موزه با یک راهنمای تور
                    اختصاصی</p>
                <a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;"
                   href='http://ipixels.ir/demo/alibaba/all_tour_list.html'>ادامه مطلب</a></p>
            </div>

        </div>
    </div><!-- End layerslider -->

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
                            <div class="badge_save">تخفیف<strong>۲۰%</strong></div>
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

        </div><!-- End row -->
        <p class="text-center add_bottom_30">
            <a href="all_tours_list.html" class="btn_1 medium"><i class="icon-eye-7"></i>مشاهده همه ی تور ها </a>
        </p>

        <hr>

        <div class="main_title">
            <h2>بهترین <span>هتل های</span> ایران</h2>
            <p>مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا </p>
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="hotel_container">
                    <div class="img_container">
                        <a href="single_hotel.html">
                            <img src="img/hotel_1.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="score"><span>۷.۵</span>خوب</div>
                            <div class="short_info hotel">
                                تور دریایی<span class="price"><sup>۴۲.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3><strong>تور</strong> جزیره هرمز</h3>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star-empty"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="index_12.html#">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقمند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="hotel_container">
                    <div class="img_container">
                        <a href="single_hotel.html">
                            <img src="img/hotel_2.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="score"><span>۹.۰</span>عالی</div>
                            <div class="short_info hotel">
                                تور خارجه<span class="price"><sup>۸.۰۰۰.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3><strong>تور</strong> مالزی</h3>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star-empty"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="index_12.html#">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقمند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="hotel_container">
                    <div class="img_container">
                        <a href="single_hotel.html">
                            <img src="img/hotel_3.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="score"><span>۹.۵</span>عالی</div>
                            <div class="short_info hotel">
                                تور خارجه<span class="price"><sup>۵.۰۰۰.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3><strong>هتل</strong> هرمز</h3>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star-empty"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="index_12.html#">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقمند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="hotel_container">
                    <div class="img_container">
                        <a href="single_hotel.html">
                            <img src="img/hotel_4.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon popular"></div>
                            <div class="score"><span>۷.۵</span>خوب</div>
                            <div class="short_info hotel">
                                تور خارجه<span class="price"><sup>۸.۰۰۰.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3><strong>Novelle</strong> Hotel</h3>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star-empty"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقمند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="hotel_container">
                    <div class="img_container">
                        <a href="single_hotel.html">
                            <img src="img/hotel_5.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon top_rated"></div>
                            <div class="score"><span>۸.۰</span>خوب</div>
                            <div class="short_info hotel">
                                تور خارجه<span class="price"><sup>۵.۰۰۰.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3><strong>تور </strong> پاریس</h3>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star-empty"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="index_12.html#">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقمند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box -->
            </div><!-- End col-md-4 -->

            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="hotel_container">
                    <div class="img_container">
                        <a href="single_hotel.html">
                            <img src="img/hotel_6.jpg" width="800" height="533" class="img-responsive" alt="">
                            <div class="ribbon popular"></div>
                            <div class="score"><span>۸.۵</span>عالی</div>
                            <div class="short_info hotel">
                                تور خارجه<span class="price"><sup>۸.۰۰۰.۰۰۰ تومان</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3><strong>تور</strong> ترکیه</h3>
                        <div class="rating">
                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star-empty"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                            class="tooltip-back">علاقمند شدم</span></span></a>
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box -->
            </div><!-- End col-md-4 -->

        </div><!-- End row -->
        <p class="text-center nopadding">
            <a href="all_hotels_list.html" class="btn_1 medium"><i class="icon-eye-7"></i>مشاهده همه ی هتل ها (۷۰) </a>
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
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-3"></i>تور شهر بازی<span class="other_tours_price">۵۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-30"></i>تور خرید<span class="other_tours_price">۳۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-44"></i>تور مکان های تاریخی<span class="other_tours_price">۶۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-3"></i>تور سرگرمی<span class="other_tours_price">۶۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-44"></i>تور تخت جمشید<span class="other_tours_price">۹۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-3"></i>تور جنگل حرا<span class="other_tours_price">۴۵.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-1"></i>تور بازدید از مکان های مذهبی<span class="other_tours_price">۴۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-4"></i>تور تاریخی<span class="other_tours_price">۲۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-30"></i>تلکابین رامسر<span class="other_tours_price">۱۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-3"></i>تور اتوبوس گردی<span class="other_tours_price">۳۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-30"></i>تور کیش گردی<span class="other_tours_price">۶۸۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-3"></i>تور قشم گردی<span class="other_tours_price">۵۸۰.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-37"></i>تور اصفهان گردی<span class="other_tours_price">۳۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-1"></i>تور مشهد<span class="other_tours_price">۴۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-50"></i>تور مراکز خرید<span class="other_tours_price">۹۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-44"></i>تور غار گردی<span class="other_tours_price">۱۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-50"></i>تور خرید از قشم<span class="other_tours_price">۵۵۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_12.html#"><i class="icon_set_1_icon-44"></i>تور اثار تاریخی ایران<span class="other_tours_price">۱.۵۰۰.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
            </div><!-- End row -->

            <div class="banner colored">
                <h4>دیدن تور های ویژه <span> ۵۶۰.۰۰۰ تومان</span></h4>
                <p>
                    تور های ویژه گردشگری ، بازدید از موزه ها و مکان های دیدنی کشور ها
                </p>
                <a href="single_tour.html" class="btn_1 white">مشاهده همه</a>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_12.html#"><img src="img/bus.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> تور گشت و گذار</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_12.html#"><img src="img/transfer.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> وسایل نقلیه</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_12.html#"><img src="img/guide.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> راهنمای تور</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_12.html#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a>
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
    <script src="{{asset('alibaba/layerslider/js/greensock.js')}}"></script>
    <script src="{{asset('alibaba/layerslider/js/layerslider.transitions.js')}}"></script>
    <script src="{{asset('alibaba/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            'use strict';
            $('#layerslider').layerSlider({
                autoStart: true,
                responsive: true,
                responsiveUnder: 1280,
                layersContainer: 1170,
                skinsPath: 'layerslider/skins/'
                // Please make sure that you didn't forget to add a comma to the line endings
                // except the last line!
            });
        });
    </script>

@endsection
