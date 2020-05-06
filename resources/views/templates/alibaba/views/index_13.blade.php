@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- REVOLUTION SLIDER CSS -->
    <link href="{{asset('alibaba/rs-plugin/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/extralayers.css')}}" rel="stylesheet">

    <link href="{{asset('alibaba/css/tabs_home.css')}}" rel="stylesheet">

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

    </div><!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2>تور های <span>پیشنهادی</span> کیش</h2>
                <p>
                    مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا
                </p>
            </div>
            <div id="tabs" class="tabs">
                <nav>
                    <ul>
                        <li><a href="index_13.html#section-1" class="icon-tours"><span>تور ها</span></a></li>
                        <li><a href="index_13.html#section-2" class="icon-hotels"><span>هتل ها</span></a></li>
                        <li><a href="index_13.html#section-3" class="icon-restaurants"><span>رستوران ها</span></a></li>
                    </ul>
                </nav>
                <div class="content">
                    <section id="section-1">
                        <div class="row list_tours_tabs">
                            <div class="col-md-4 col-sm-4">
                                <h2>تور های جدید</h2>
                                <ul>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_1.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> تاق پیروزی</h3>
                                                <small>از ۲۰.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_2.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> تخت جمشید</h3>
                                                <small>از ۲۰.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_3.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> تاق رستم</h3>
                                                <small>از ۲۰.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_4.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> موزه اصفهان</h3>
                                                <small>از ۲۰.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_5.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> کوهنوردی</h3>
                                                <small>از ۲۰.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="all_tours_list.html">دیدن همه تور ها</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <h2>محبوبترین تور ها</h2>
                                <ul>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_6.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> کیش</h3>
                                                <small>از ۲۲۲.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_7.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> اصفهان</h3>
                                                <small>از ۲۲۲.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_8.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور </strong> شیراز</h3>
                                                <small>از ۲۲۲.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_9.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> مشهد</h3>
                                                <small>از ۲۲۲.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_10.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> قشم</h3>
                                                <small>از ۲۲۲.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="all_tours_list.html">دیدن همه تور ها</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <h2>پیشنهاد این ماه</h2>
                                <ul>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_3.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> پاریس</h3>
                                                <small style="text-decoration:line-through"> ۲۲۲.۲۰۰ تومان</small>
                                                <small>از ۲۰۲.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_10.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> ترکیه</h3>
                                                <small style="text-decoration:line-through"> ۲۲۲.۲۰۰ تومان</small>
                                                <small>از ۲۰۲.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="single_tour_fixed_sidebar.html">
                                                <figure><img src="img/thumb_home_tabs_8.jpg" alt="" class="img-rounded"></figure>
                                                <h3><strong>تور</strong> آلمان</h3>
                                                <small style="text-decoration:line-through"> ۲۲۲.۲۰۰ تومان</small>
                                                <small>از ۲۰۲.۰۰۰ تومان</small>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div><a href="all_tours_list.html">دیدن همه تور ها</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="section-2">
                        <div class="row list_hotels_tabs">
                            <div class="col-md-4 col-sm-6">
                                <div class="hotel_container">
                                    <div class="img_container">
                                        <a href="single_hotel.html">
                                            <img src="img/hotel_6.jpg" width="800" height="533" class="img-responsive" alt="">
                                            <div class="ribbon popular"></div>
                                            <div class="score"><span>۸.۵</span>عالی</div>
                                            <div class="short_info hotel">
                                                یک شبانه روز<span class="price"><sup>۵۰.۰۰۰ تومان</sup></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hotel_title">
                                        <h3><strong>هتل</strong> قدس مشهد</h3>
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div><!-- end rating -->
                                        <div class="wishlist">
                                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقه مند شدم</span></span></a>
                                        </div><!-- End wish list-->
                                    </div>
                                </div><!-- End box -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="hotel_container">
                                    <div class="img_container">
                                        <a href="single_hotel.html">
                                            <img src="img/hotel_3.jpg" width="800" height="533" class="img-responsive" alt="">
                                            <div class="ribbon top_rated"></div>
                                            <div class="score"><span>۹.۵</span>عالی</div>
                                            <div class="short_info hotel">
                                                یک شبانه روز<span class="price"><sup>۱۰۰.۰۰۰ تومان</sup></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hotel_title">
                                        <h3><strong>هتل</strong> پردیس</h3>
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div><!-- end rating -->
                                        <div class="wishlist">
                                            <a class="tooltip_flip tooltip-effect-1" href="index_13.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقه مند شدم</span></span></a>
                                        </div><!-- End wish list-->
                                    </div>
                                </div><!-- End box -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="hotel_container">
                                    <div class="img_container">
                                        <a href="single_hotel.html">
                                            <img src="img/hotel_2.jpg" width="800" height="533" class="img-responsive" alt="">
                                            <div class="ribbon top_rated"></div>
                                            <div class="score"><span>۹.۰</span>عالی</div>
                                            <div class="short_info hotel">
                                                یک شبانه روز<span class="price"><sup>۹۰.۰۰۰ تومان</sup\</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hotel_title">
                                        <h3><strong>هتل</strong> داریوش</h3>
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                    class="icon-star-empty"></i>
                                        </div><!-- end rating -->
                                        <div class="wishlist">
                                            <a class="tooltip_flip tooltip-effect-1" href="index_13.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقه مند شدم</span></span></a>
                                        </div><!-- End wish list-->
                                    </div>
                                </div><!-- End box -->
                            </div>
                        </div><!--End row -->
                    </section>
                    <section id="section-3">
                        <div class="row list_hotels_tabs">
                            <div class="col-md-4 col-sm-6">
                                <div class="tour_container">
                                    <div class="img_container">
                                        <a href="single_restaurant.html">
                                            <img src="img/restaurant_box_1.jpg" width="800" height="533" class="img-responsive" alt="">
                                            <div class="ribbon top_rated"></div>
                                            <div class="short_info">
                                                <i class="icon_set_3_restaurant-2"></i> فست فود <span class="price"><sup>۶۰.۰۰۰ تومان</sup></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tour_title">
                                        <h3><strong>همبرگر مخصوص</strong></h3>
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                        </div><!-- end rating -->
                                        <div class="wishlist">
                                            <a class="tooltip_flip tooltip-effect-1" href="index_13.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقه مند شدم</span></span></a>
                                        </div><!-- End wish list-->
                                    </div>
                                </div><!-- End box tour -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="tour_container">
                                    <div class="img_container">
                                        <a href="single_restaurant.html">
                                            <img src="img/restaurant_box_2.jpg" width="800" height="533" class="img-responsive" alt="">
                                            <div class="ribbon top_rated"></div>
                                            <div class="short_info">
                                                <i class="icon_set_3_restaurant-2"></i> فست فود <span class="price"><sup>۶۰.۰۰۰ تومان</sup></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tour_title">
                                        <h3><strong>سمبوسه</strong></h3>
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                        </div><!-- end rating -->
                                        <div class="wishlist">
                                            <a class="tooltip_flip tooltip-effect-1" href="index_13.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقه مند شدم</span></span></a>
                                        </div><!-- End wish list-->
                                    </div>
                                </div><!-- End box tour -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="tour_container">
                                    <div class="img_container">
                                        <a href="single_restaurant.html">
                                            <img src="img/restaurant_box_3.jpg" width="800" height="533" class="img-responsive" alt="">
                                            <div class="ribbon popular"></div>
                                            <div class="short_info">
                                                <i class="icon_set_3_restaurant-1"></i> پیتزا های ایتالیایی<span class="price"><sup>۶۰.۰۰۰ تومان</sup></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tour_title">
                                        <h3><strong>بلا ناپولی</strong></h3>
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                        </div><!-- end rating -->
                                        <div class="wishlist">
                                            <a class="tooltip_flip tooltip-effect-1" href="index_13.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقه مند شدم</span></span></a>
                                        </div><!-- End wish list-->
                                    </div>
                                </div><!-- End box tour -->
                            </div>
                        </div><!--End row -->
                    </section>

                </div><!-- /content -->
            </div><!-- End tabs -->


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
                        <a href="index_13.html#"><img src="img/bus.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> تور گشت و گذار</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_13.html#"><img src="img/transfer.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> وسایل نقلیه</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_13.html#"><img src="img/guide.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>رزرو</span> راهنمای تور</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="index_13.html#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a>
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
        <!-- End row -->

    </div><!-- End container -->

@endsection

@section('footer')
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{asset('alibaba/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('alibaba/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('alibaba/js/revolution_func.js')}}"></script>

    <script src="{{asset('alibaba/js/tabs.js')}}"></script>
    <script>new CBPFWTabs(document.getElementById('tabs'));</script>

@endsection
