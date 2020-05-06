@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- Radio and check inputs -->
    <link href="{{asset('alibaba/css/skins/square/grey.css')}}" rel="stylesheet">
    <!-- Range slider -->
    <link href="{{asset('alibaba/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <!-- Radio and check inputs -->
    <link href="{{asset('alibaba/css/skins/square/grey.css')}}" rel="stylesheet">
    <!-- Range slider -->
    <link href="{{asset('alibaba/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

    <link href="{{asset('alibaba/css/slider-pro.min.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/date_time_picker.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/owl.theme.css')}}" rel="stylesheet">
    <!-- Radio and check inputs -->
    <link href="{{asset('alibaba/css/skins/square/grey.css')}}" rel="stylesheet">
    <!-- Range slider -->
    <link href="{{asset('alibaba/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')


    <section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>هتل های پاریس</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="all_hotels_list.html#">صفحه اصلی</a></li>
                <li><a href="all_hotels_list.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">

        <div class="row">
            <aside class="col-lg-3 col-md-3">
                <p>
                    <a class="btn_map" data-toggle="collapse" href="all_hotels_list.html#collapseMap" aria-expanded="false" aria-controls="collapseMap">نمایش بر روی نقشه</a>
                </p>

                <div id="filters_col">
                    <a data-toggle="collapse" href="all_hotels_list.html#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i
                                class="icon_set_1_icon-65"></i>فیلترها <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>قیمت</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>نمایش بر اساس رتبه</h6>
                            <ul>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i
                                                    class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i>
						</span>(۱۵)</label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i
                                                    class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i>
						</span>(۴۵)</label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i
                                                    class="icon_set_1_icon-81"></i>
						</span>(۳۵)</label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i
                                                    class="icon_set_1_icon-81"></i>
						</span>(۲۵)</label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i
                                                    class="icon_set_1_icon-81"></i>
						</span>(۱۵)</label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>نمایش بر اساس امتیاز</h6>
                            <ul>
                                <li><label><input type="checkbox">فوق العاده: ۹+ (۷۷)</label></li>
                                <li><label><input type="checkbox">خیلی خوب: ۸+ (۵۵۲)</label></li>
                                <li><label><input type="checkbox">خوب: ۷+ (۹۰۹)</label></li>
                                <li><label><input type="checkbox">مورد پسند: ۶+ (۱۱۹۶)</label></li>
                                <li><label><input type="checkbox">بدون رتبه (۱۹۸)</label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>امکان</h6>
                            <ul>
                                <li><label><input type="checkbox">مجاز بودن حیوانات خانگی</label></li>
                                <li><label><input type="checkbox">وای فای</label></li>
                                <li><label><input type="checkbox">آبگرم</label></li>
                                <li><label><input type="checkbox">رستوران</label></li>
                                <li><label><input type="checkbox">استخر</label></li>
                                <li><label><input type="checkbox">پارکینگ</label></li>
                                <li><label><input type="checkbox">مرکز تناسب اندام</label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>ناحیه</h6>
                            <ul>
                                <li><label><input type="checkbox">مرکز</label></li>
                                <li><label><input type="checkbox">جنوب</label></li>
                                <li><label><input type="checkbox">شمال</label></li>
                                <li><label><input type="checkbox">شرق/غرب</label></li>
                            </ul>
                        </div>
                    </div><!--End collapse -->
                </div><!--End filters col-->
                <div class="box_style_2">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>درخواست <span>کمک؟</span></h4>
                    <a href="http://ipixels.ir/demo/alibaba/%D8%AA%D9%84%D9%81%D9%86%20%D8%AA%D9%85%D8%A7%D8%B3:/%DB%B0%DB%B7%DB%B6%DB%B3%DB%B2%DB%B0%DB%B0%DB%B0%DB%B0%DB%B0%DB%B0"
                       class="تلفن">۰۷۶۳۲۰۰۰۰۰۰</a>
                    <small>شنبه تا پنجشنبه از ساعت ۰۷:۰۰ الی ۲۳:۰۰</small>
                </div>
            </aside><!--End aside -->

            <div class="col-lg-9 col-md-9">

                <div id="tools">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>بر اساس قیمت</option>
                                    <option value="lower">پایین ترین قیمت</option>
                                    <option value="higher">بالاترین قیمت</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_rating" id="sort_rating">
                                    <option value="" selected>بر اساس رتبه بندی</option>
                                    <option value="lower">پایینترین رده</option>
                                    <option value="higher">بالاترین رتبه</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <a href="all_hotels_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="all_hotels_list.html#" class="bt_filters"><i
                                        class=" icon-list"></i></a>
                        </div>
                    </div>
                </div><!--/tools -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                                class="tooltip-back">علاقمند شدم</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_hotel.html">
                                    <div class="ribbon popular"></div>
                                    <img src="img/hotel_1.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">عالی<span>۹.۰</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i
                                            class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
                                <h3><strong> هتل</strong>پارک هایت</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="وای فای رایگان"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="تلویزیون پلاسما با کانال های اچ دی"><i
                                                    class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="استخر شنا"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="مرکز تناسب اندام"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="رستوران"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۳۰۰.۰۰۰ تومان</sup><span class="normal_price_list">۵۰۰.۰۰۰ تومان</span>
                                    <small>روزانه / شبانه</small>
                                    <p><a href="single_hotel.html" class="btn_1">جزئیات</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                                class="tooltip-back">علاقمند شدم</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_hotel.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/hotel_2.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">عالی<span>۹.۰</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i
                                            class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
                                <h3><strong>هتل</strong> قدس</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="وای فای رایگان"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="تلویزیون پلاسما با کانال های اچ دی"><i
                                                    class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="استخر شنا"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="مرکز تناسب اندام"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="رستوران"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۸۰.۰۰۰ تومان</sup><span class="normal_price_list">۱۰۰.۰۰۰ تومان</span>
                                    <small>روزانه / شبانه</small>
                                    <p><a href="single_hotel.html" class="btn_1">جزئیات</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                                class="tooltip-back">علاقمند شدم</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_hotel.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/hotel_3.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">عالی<span>۹.۰</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i
                                            class="icon-star  voted"></i><i class="icon-star  voted"></i></div>
                                <h3><strong>هتل</strong> امیر کبیر</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="وای فای رایگان"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="تلویزیون پلاسما با کانال های اچ دی"><i
                                                    class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="استخر شنا"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="مرکز تناسب اندام"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="رستوران"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۱۰۰.۰۰۰ تومان</sup><span class="normal_price_list">۱۵۰.۰۰۰ تومان</span>
                                    <small>روزانه / شبانه</small>
                                    <p><a href="single_hotel.html" class="btn_1">جزئیات</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                                class="tooltip-back">علاقمند شدم</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_hotel.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/hotel_4.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">خوب<span>۷.۵</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i
                                            class="icon-star-empty"></i><i class="icon-star-empty"></i></div>
                                <h3><strong>هتل</strong> آتیلار</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="وای فای رایگان"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="تلویزیون پلاسما با کانال های اچ دی"><i
                                                    class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="استخر شنا"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="مرکز تناسب اندام"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="رستوران"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۱۵۰.۰۰۰ تومان</sup><span class="normal_price_list">۲۰۰.۰۰۰ تومان</span>
                                    <small>روزانه / شبانه</small>
                                    <p><a href="single_hotel.html" class="btn_1">جزئیات</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span
                                                class="tooltip-back">علاقمند شدم</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_hotel.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/hotel_5.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">خیلی خوب<span>۸.۵</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i
                                            class="icon-star  voted"></i><i class="icon-star  voted"></i></div>
                                <h3><strong>هتل</strong> هرمز</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="وای فای رایگان"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="تلویزیون پلاسما با کانال های اچ دی"><i
                                                    class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="استخر شنا"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="مرکز تناسب اندام"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="رستوران"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۲۵۰.۰۰۰ تومان</sup><span class="normal_price_list">۳۵۰.۰۰۰ تومان</span>
                                    <small>روزانه / شبانه</small>
                                    <p><a href="single_hotel.html" class="btn_1">جزئیات</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="all_hotels_list.html#">قبلی</a></li>
                        <li class="active"><a href="all_hotels_list.html#">۱</a></li>
                        <li><a href="all_hotels_list.html#">۲</a></li>
                        <li><a href="all_hotels_list.html#">۳</a></li>
                        <li><a href="all_hotels_list.html#">۴</a></li>
                        <li><a href="all_hotels_list.html#">۵</a></li>
                        <li><a href="all_hotels_list.html#">بعدی</a></li>
                    </ul>
                </div><!-- end pagination-->

            </div><!-- End col lg-9 -->
        </div><!-- End row -->
    </div><!-- End container -->

@endsection

@section('footer')
    <!-- Check and radio inputs -->
    <script src="{{asset('alibaba/js/icheck.js')}}"></script>
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>
    <!-- Map -->
    <script src="{{asset('alibaba/ext/maps.googleapis.com/maps/api/js.JS')}}"></script>
    <script src="{{asset('alibaba/js/map_hotels.js')}}"></script>
    <script src="{{asset('alibaba/js/infobox.js')}}"></script>
    <!-- Check and radio inputs -->
    <script src="{{asset('alibaba/js/icheck.js')}}"></script>
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>
    <!-- Map -->
    <script src="{{asset('alibaba/ext/maps.googleapis.com/maps/api/js.JS')}}"></script>
    <script src="{{asset('alibaba/js/map_hotels.js')}}"></script>
    <script src="{{asset('alibaba/js/infobox.js')}}"></script>

    <!-- Specific scripts -->
    <script src="{{asset('alibaba/js/icheck.js')}}"></script>
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>
    <!-- Date and time pickers -->
    <script src="{{asset('alibaba/js/jquery.sliderPro.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function ($) {
            $('#Img_carousel').sliderPro({
                width: 960,
                height: 500,
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: false,
                smallSize: 500,
                startSlide: 0,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        });
    </script>


    <!-- Date and time pickers -->
    <script src="{{asset('alibaba/js/bootstrap-datepicker.js')}}"></script>
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
    </script>
    <!-- Map -->
    <script src="{{asset('alibaba/ext/maps.googleapis.com/maps/api/js.JS')}}"></script>
    <script src="{{asset('alibaba/js/map.js')}}"></script>
    <script src="{{asset('alibaba/js/infobox.js')}}"></script>


    <!--Review modal validation -->
    <script src="{{asset('alibaba/assets/validate.js')}}"></script>
    <!-- Check and radio inputs -->
    <script src="{{asset('alibaba/js/icheck.js')}}"></script>
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>
    <!-- Map -->
    <script src="{{asset('alibaba/ext/maps.googleapis.com/maps/api/js.JS')}}"></script>
    <script src="{{asset('alibaba/js/map_hotels.js')}}"></script>
    <script src="{{asset('alibaba/js/infobox.js')}}"></script>

@endsection
