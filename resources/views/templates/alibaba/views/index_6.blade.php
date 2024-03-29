@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')

@endsection
@section('header')

@endsection
@section('main')

    <section id="hero">
        <div class="intro_title">
            <h1 class="animated fadeInDown">تور کیش مقرون به صرفه</h1>
            <p class="animated fadeInDown">شهرهای گردشگری تورها / بلیط های تور / راهنمای تور</p>
            <a href="index_6.html#" class="animated fadeInUp button_intro">نمایش تورها</a> <a href="index_6.html#" class="animated fadeInUp button_intro outline">نمایش بلیط</a>
        </div>

        <div id="search_bar_container">
            <div class="container">
                <div class="search_bar">
                            <span class="nav-facade-active" id="nav-search-in">
                            <span id="nav-search-in-content" style="">همه</span>
                            <span class="nav-down-arrow nav-sprite"></span>
                            <select title="Search in" class="searchSelect" id="searchDropdownBox" name="tours_category">
                                <option value="همه" title="همه">همه</option>
                                <option value="موزه ها" title="موزه ها">موزه ها</option>
                                <option value="بلیط" title="بلیط">بلیط</option>
                                <option value="هتل ها" title="هتل ها">هتل ها</option>
                                <option value="رستوران ها" title="رستوران ها">رستوران ها</option>
                            </select>
                            </span>
                    <div class="nav-searchfield-outer">
                        <input type="text" autocomplete="off" name="field-keywords" placeholder="عبارت مورد نظر خود را تایپ کنید...." id="twotabsearchtextbox">
                    </div>
                    <div class="nav-submit-button">
                        <input type="submit" title="Cerca" class="nav-submit-input" value="Search">
                    </div>
                </div><!-- End search bar-->
            </div>
        </div><!-- /search_bar-->
    </section><!-- End hero -->


    <section class="container margin_60">

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
                            <div class="badge_save">تخفیف<strong>۳۰%</strong></div>
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

        <p class="text-center nopadding"><a href="index_6.html#" class="btn_1 medium"><i class="icon-eye-7"></i>دیدن همه تور ها </a>
        </p>
    </section><!-- End section -->

    <section class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2>تور های <span>محبوب</span> دیگر</h2>
                <p>مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا</p>
            </div>

            <div class="row add_bottom_45">
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-3"></i>تور شهر بازی<span class="other_tours_price">۵۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-30"></i>تور خرید<span class="other_tours_price">۳۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-44"></i>تور مکان های تاریخی<span class="other_tours_price">۶۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-3"></i>تور سرگرمی<span class="other_tours_price">۶۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-44"></i>تور تخت جمشید<span class="other_tours_price">۹۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-3"></i>تور جنگل حرا<span class="other_tours_price">۴۵.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-1"></i>تور بازدید از مکان های مذهبی<span class="other_tours_price">۴۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-4"></i>تور تاریخی<span class="other_tours_price">۲۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-30"></i>تلکابین رامسر<span class="other_tours_price">۱۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-3"></i>تور اتوبوس گردی<span class="other_tours_price">۳۵.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-30"></i>تور کیش گردی<span class="other_tours_price">۶۸۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-3"></i>تور قشم گردی<span class="other_tours_price">۵۸۰.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-37"></i>تور اصفهان گردی<span class="other_tours_price">۳۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-1"></i>تور مشهد<span class="other_tours_price">۴۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-50"></i>تور مراکز خرید<span class="other_tours_price">۹۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-44"></i>تور غار گردی<span class="other_tours_price">۱۰۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-50"></i>تور خرید از قشم<span class="other_tours_price">۵۵۰.۰۰۰ تومان</span></a>
                        </li>
                        <li><a href="index_6.html#"><i class="icon_set_1_icon-44"></i>تور اثار تاریخی ایران<span class="other_tours_price">۱.۵۰۰.۰۰۰ تومان</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="banner colored add_bottom_30">
                <h4>دیدن تور های ویژه <span> ۵۶۰.۰۰۰ تومان</span></h4>
                تور های ویژه گردشگری ، بازدید از موزه ها و مکان های دیدنی کشور ها
                <a href="single_tour.html" class="btn_1 white">مشاهده همه</a>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 text-center">
                    <p>
                        <a href="index_6.html#"><img src="img/bus.jpg" alt="Pic" class="img-responsive">
                        </a>
                    </p>
                    <h4><span>رزرو</span> تور گشت و گذار</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                </div>

                <div class="col-md-3 col-sm-3 text-center">
                    <p><a href="index_6.html#"><img src="img/transfer.jpg" alt="Pic" class="img-responsive"></a></p>
                    <h4><span>رزرو</span> وسایل نقلیه</h4>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                </div>

                <div class="col-md-3 col-sm-3 text-center">
                    <p><a href="index_6.html#"><img src="img/guide.jpg" alt="Pic" class="img-responsive"></a></p>
                    <h4><span>رزرو</span> راهنمای تور</h4>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                </div>

                <div class="col-md-3 col-sm-3 text-center">
                    <p><a href="index_6.html#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a></p>
                    <h4><span>رزرو</span> هتل</h4>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                </div>

            </div><!-- End row -->
        </div><!-- End container -->
    </section><!-- End section -->


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

    <section class="margin_60 gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main_title">
                    <h2>چرا آژانس مسافرتی <span>علی بابا ؟</span></h2>
                    <p>مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا</p>
                </div>
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
            </div>

            <hr>
            <div class="row">
                <div class="col-md-8 col-sm-6 hidden-xs">
                    <img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
                </div>
                <div class="col-md-4 col-sm-6">
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
    </section><!-- End section -->


@endsection

@section('footer')
    <script>
        //Search bar
        $(function () {
            "use strict";
            $("#searchDropdownBox").change(function () {
                var Search_Str = $(this).val();
                //replace search str in span value
                $("#nav-search-in-content").text(Search_Str);
            });
        });
    </script>

@endsection
