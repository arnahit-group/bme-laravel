@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('alibaba/css/jquery.cookiebar.css')}}" rel="stylesheet">
    <!-- REVOLUTION SLIDER CSS -->
    <link href="{{asset('alibaba/rs-plugin/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/extralayers.css')}}" rel="stylesheet">

@endsection
@section('header')


@endsection
@section('main')
    <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_1.jpg" data-bgposition="center top" data-bgfit="cover"
                         data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">تور کیش مقرون به صرفه
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05"
                         data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            شهرهای گردشگری تورها / بلیط های تور / راهنمای تور
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                         data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='http://ipixels.ir/demo/alibaba/all_tour_list.html'
                                                                                                    class="button_intro">نمایش تورها</a> <a href='single_tour.html'
                                                                                                                                            class=" button_intro outline">ادامه
                            مطلب</a>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_4.jpg" data-bgposition="center top" data-bgfit="cover"
                         data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">بیش از ۱۰۰ تور در دسترس
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05"
                         data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            ابنیه تاریخی / تورهای اتوبوس گردی / راهنمای موزه ها
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                         data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='http://ipixels.ir/demo/alibaba/all_tour_list.html'
                                                                                                    class="button_intro">نمایش تورها</a> <a href='single_tour.html'
                                                                                                                                            class=" button_intro outline">ادامه
                            مطلب</a>
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_6.jpg" data-bgposition="center top" data-bgfit="cover"
                         data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">دیدن مکان های فوق العاده
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05"
                         data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            ارائه انواع خدمات
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                         data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='http://ipixels.ir/demo/alibaba/all_tour_list.html'
                                                                                                    class="button_intro">نمایش تورها</a> <a href='single_tour.html'
                                                                                                                                            class=" button_intro outline">ادامه
                            مطلب</a>
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_5.jpg" data-bgposition="center top" data-bgfit="cover"
                         data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">علی بابا فراهم کننده تور های گردشگری و تفریحی
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05"
                         data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                            دیدن از موزه با یک راهنمای تور اختصاصی
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                         data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='http://ipixels.ir/demo/alibaba/all_tour_list.html'
                                                                                                    class="button_intro">نمایش تورها</a> <a href='single_tour.html'
                                                                                                                                            class=" button_intro outline">ادامه
                            مطلب</a>
                    </div>
                </li>


            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!-- End Slider -->

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
                            <a class="tooltip_flip tooltip-effect-1" href="index_10.html#">+<span class="tooltip-content-flip"><span
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
                            <a class="tooltip_flip tooltip-effect-1" href="index_10.html#">+<span class="tooltip-content-flip"><span
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
                            <a class="tooltip_flip tooltip-effect-1" href="index_10.html#">+<span class="tooltip-content-flip"><span
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
                            <a class="tooltip_flip tooltip-effect-1" href="index_10.html#">+<span class="tooltip-content-flip"><span
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
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-3"></i>تور شهر بازی<span class="other_tours_price">۵۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-30"></i>تور خرید<span class="other_tours_price">۳۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-44"></i>تور مکان های تاریخی<span class="other_tours_price">۶۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-3"></i>تور سرگرمی<span class="other_tours_price">۶۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-44"></i>تور تخت جمشید<span class="other_tours_price">۹۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-3"></i>تور جنگل حرا<span class="other_tours_price">۴۵.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-1"></i>تور بازدید از مکان های مذهبی<span class="other_tours_price">۴۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-4"></i>تور تاریخی<span class="other_tours_price">۲۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-30"></i>تلکابین رامسر<span class="other_tours_price">۱۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-3"></i>تور اتوبوس گردی<span class="other_tours_price">۳۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-30"></i>تور کیش گردی<span class="other_tours_price">۶۸۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-3"></i>تور قشم گردی<span class="other_tours_price">۵۸۰.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-37"></i>تور اصفهان گردی<span class="other_tours_price">۳۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-1"></i>تور مشهد<span class="other_tours_price">۴۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-50"></i>تور مراکز خرید<span class="other_tours_price">۹۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-44"></i>تور غار گردی<span class="other_tours_price">۱۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-50"></i>تور خرید از قشم<span class="other_tours_price">۵۵۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_10.html#"><i class="icon_set_1_icon-44"></i>تور اثار تاریخی ایران<span class="other_tours_price">۱.۵۰۰.۰۰۰ تومان</span></a>
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
                        <a href="index_10.html#"><img src="img/bus.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> تور گشت و گذار</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_10.html#"><img src="img/transfer.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> وسایل نقلیه</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_10.html#"><img src="img/guide.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> راهنمای تور</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_10.html#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a>
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
        </div>
    </div><!-- End row -->

@endsection

@section('footer')
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{asset('alibaba/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('alibaba/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('alibaba/js/revolution_func.js')}}"></script>

    <!-- Cookie bar script -->
    <script src="{{asset('alibaba/js/jquery.cookiebar.js')}}"></script>
    <script>
        $(document).ready(function () {
            'use strict';
            $.cookieBar({
                fixed: true
            });
        });
    </script>

@endsection
