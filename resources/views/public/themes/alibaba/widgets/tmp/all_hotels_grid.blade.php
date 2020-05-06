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
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>هتل بزرگ کیش</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="all_hotels_grid.html#">صفحه اصلی</a></li>
                <li><a href="all_hotels_grid.html#">دسته بندی</a></li>
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
                    <a class="btn_map" data-toggle="collapse" href="all_hotels_grid.html#collapseMap" aria-expanded="false" aria-controls="collapseMap">نمایش بر روی نقشه</a>
                </p>

                <div id="filters_col">
                    <a data-toggle="collapse" href="all_hotels_grid.html#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i
                                class="icon_set_1_icon-65"></i>فیلترها <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse in" id="collapseFilters">
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
                            <a href="all_hotels_grid.html#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_hotels_list.html" class="bt_filters"><i
                                        class=" icon-list"></i></a>
                        </div>
                    </div>
                </div><!--End tools -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
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
                                    <a class="tooltip_flip tooltip-effect-1" href="all_hotels_grid.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
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
                                    <a class="tooltip_flip tooltip-effect-1" href="all_hotels_grid.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
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
                                <h3><strong>تور</strong> توکیو</h3>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                            class="icon-star-empty"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="all_hotels_grid.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
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
                                <h3><strong>تور</strong> ترکیه</h3>
                                <div class="rating">
                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                            class="icon-star-empty"></i>
                                </div><!-- end rating -->
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
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
                                    <a class="tooltip_flip tooltip-effect-1" href="all_hotels_grid.html#">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box -->
                    </div><!-- End col-md-6 -->

                    <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
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
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">علاقمند شدم</span></span></a>
                                </div><!-- End wish list-->
                            </div>
                        </div><!-- End box -->
                    </div><!-- End col-md-6 -->
                </div><!-- End row -->

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="all_hotels_grid.html#">قبلی</a></li>
                        <li class="active"><a href="all_hotels_grid.html#">۱</a></li>
                        <li><a href="all_hotels_grid.html#">۲</a></li>
                        <li><a href="all_hotels_grid.html#">۳</a></li>
                        <li><a href="all_hotels_grid.html#">۴</a></li>
                        <li><a href="all_hotels_grid.html#">۵</a></li>
                        <li><a href="all_hotels_grid.html#">بعدی</a></li>
                    </ul>
                </div><!-- end pagination-->

            </div><!-- End col lg 9 -->
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

@endsection

