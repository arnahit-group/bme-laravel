@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')

    <!-- Radio and check inputs -->
    <link href="{{asset('alibaba/css/skins/square/grey.css')}}" rel="stylesheet">

    <!-- Range slider -->
    <link href="{{asset('alibaba/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/restaurant_top.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>رستوران های پاریس</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="all_restaurants_grid.html#">صفحه اصلی</a></li>
                <li><a href="all_restaurants_grid.html#">دسته بندی</a></li>
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
                    <a class="btn_map" data-toggle="collapse" href="all_restaurants_grid.html#collapseMap" aria-expanded="false" aria-controls="collapseMap">نمایش بر روی
                        نقشه</a>
                </p>

                <div class="box_style_cat">
                    <ul id="cat_nav">
                        <li><a href="all_restaurants_grid.html#" id="active"><i class="icon_set_3_restaurant-10"></i>همه رستوران ها <span>(۱۴۱)</span></a></li>
                        <li><a href="all_restaurants_grid.html#"><i class="icon_set_3_restaurant-1"></i>پیتزا / ایتالیایی <span>(۲۰)</span></a></li>
                        <li><a href="all_restaurants_grid.html#"><i class="icon_set_3_restaurant-2"></i>فست فود <span>(۱۶)</span></a></li>
                        <li><a href="all_restaurants_grid.html#"><i class="icon_set_3_restaurant-3"></i>ژاپنی <span>(۱۲)</span></a></li>
                        <li><a href="all_restaurants_grid.html#"><i class="icon_set_3_restaurant-4"></i>چینی <span>(۱۱)</span></a></li>
                        <li><a href="all_restaurants_grid.html#"><i class="icon_set_3_restaurant-5"></i>بین المللی <span>(۲۰)</span></a></li>
                        <li><a href="all_restaurants_grid.html#"><i class="icon_set_3_restaurant-8"></i>قهوه خانه <span>(۰۸)</span></a></li>
                        <li><a href="all_restaurants_grid.html#"><i class="icon_set_3_restaurant-7"></i>غذای دریایی <span>(۰۸)</span></a></li>
                    </ul>
                </div>

                <div id="filters_col">
                    <a data-toggle="collapse" href="all_restaurants_grid.html#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i
                                class="icon_set_1_icon-65"></i>فیلترها <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>قیمت</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>رتبه</h6>
                            <ul>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
						</span></label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
						</span></label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>منطقه / ناحیه</h6>
                            <ul>
                                <li><label><input type="checkbox">مرکز</label></li>
                                <li><label><input type="checkbox">جنوب</label></li>
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

            <div class="col-lg-9 col-md-8">

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
                            <a href="all_restaurants_grid.html#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_tours_list.html" class="bt_filters"><i
                                        class=" icon-list"></i></a>
                        </div>
                    </div>
                </div><!--End tools -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="single_restaurant.html">
                                    <img src="img/restaurant_box_1.jpg" width="800" height="533" class="img-responsive" alt="">
                                    <div class="ribbon top_rated"></div>
                                    <div class="short_info">
                                        <i class="icon_set_3_restaurant-2"></i> فست فود<span class="price"><sup>۳۰.۰۰۰ تومان</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>غذای سلطنتی</strong></h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                            class="icon-smile"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="all_restaurants_grid.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="single_restaurant.html">
                                    <img src="img/restaurant_box_2.jpg" width="800" height="533" class="img-responsive" alt="">
                                    <div class="ribbon top_rated"></div>
                                    <div class="short_info">
                                        <i class="icon_set_3_restaurant-2"></i> فست فود<span class="price"><sup>۳۰.۰۰۰ تومان</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>مرغ سوخاری</strong></h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                            class="icon-smile"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="all_restaurants_grid.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="single_restaurant.html">
                                    <img src="img/restaurant_box_3.jpg" width="800" height="533" class="img-responsive" alt="">
                                    <div class="ribbon popular"></div>
                                    <div class="short_info">
                                        <i class="icon_set_3_restaurant-1"></i> پیتزا / ایتالیایی<span class="price"><sup>۲۰.۰۰۰ تومان</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>پیتزا پپرونی</strong></h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                            class="icon-smile"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="all_restaurants_grid.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="single_restaurant.html">
                                    <img src="img/restaurant_box_4.jpg" width="800" height="533" class="img-responsive" alt="">
                                    <div class="ribbon popular"></div>
                                    <div class="short_info">
                                        <i class="icon_set_3_restaurant-4"></i> چینی<span class="price"><sup>۵۰.۰۰۰ تومان</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>مرغ بوربن</strong></h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                            class="icon-smile"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="single_restaurant.html">
                                    <img src="img/restaurant_box_5.jpg" width="800" height="533" class="img-responsive" alt="">
                                    <div class="ribbon popular"></div>
                                    <div class="short_info">
                                        <i class="icon_set_3_restaurant-7"></i> غذای دریایی<span class="price"><sup>۶۰.۰۰۰ تومان</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>ماهی سوخاری</strong></h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                            class="icon-smile"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="single_restaurant.html">
                                    <img src="img/restaurant_box_6.jpg" width="800" height="533" class="img-responsive" alt="">
                                    <div class="ribbon top_rated"></div>
                                    <div class="short_info">
                                        <i class="icon_set_3_restaurant-5"></i> بین المللی<span class="price"><sup>۱۰۰.۰۰۰ تومان</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>آلفردو</strong></h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                            class="icon-smile"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.7s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="single_restaurant.html">
                                    <img src="img/restaurant_box_7.jpg" width="800" height="533" class="img-responsive" alt="">
                                    <div class="ribbon top_rated"></div>
                                    <div class="short_info">
                                        <i class="icon_set_3_restaurant-5"></i> بین المللی<span class="price"><sup>۱۰۰.۰۰۰ تومان</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>مادلین</strong></h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                            class="icon-smile"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.8s">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="single_restaurant.html">
                                    <img src="img/restaurant_box_8.jpg" width="800" height="533" class="img-responsive" alt="">
                                    <div class="ribbon top_rated"></div>
                                    <div class="short_info">
                                        <i class="icon_set_3_restaurant-5"></i> بین المللی<span class="price"><sup>۱۰۰.۰۰۰ تومان</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="tour_title">
                                <h3><strong>اسپاگتی</strong></h3>
                                <div class="rating">
                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                            class="icon-smile"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="all_restaurants_grid.html#">قبلی</a></li>
                        <li class="active"><a href="all_restaurants_grid.html#">۱</a></li>
                        <li><a href="all_restaurants_grid.html#">۲</a></li>
                        <li><a href="all_restaurants_grid.html#">۳</a></li>
                        <li><a href="all_restaurants_grid.html#">۴</a></li>
                        <li><a href="all_restaurants_grid.html#">۵</a></li>
                        <li><a href="all_restaurants_grid.html#">بعدی</a></li>
                    </ul>
                </div><!-- end pagination-->

            </div><!-- End col lg 9 -->
        </div><!-- End row -->
    </div><!-- End container -->

@endsection
@section('footer')
    <!-- Specific scripts -->
    <!-- Cat nav mobile -->
    <script src="{{asset('alibaba/js/cat_nav_mobile.js')}}"></script>
    <script>$('#cat_nav').mobileMenu();</script>
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
    <script src="{{asset('alibaba/js/map_restaurants.js')}}"></script>
    <script src="{{asset('alibaba/js/infobox.js')}}"></script>

@endsection
