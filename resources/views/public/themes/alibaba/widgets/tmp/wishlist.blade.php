@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- Radio and check inputs -->
    <link href="{{asset('alibaba/css/skins/square/grey.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>لیست علاقه مندی ها</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="wishlist.html#">صفحه اصلی</a></li>
                <li><a href="wishlist.html#">دسته بندی</a></li>
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
                    <a class="btn_map" data-toggle="collapse" href="wishlist.html#collapseMap" aria-expanded="false" aria-controls="collapseMap">نمایش بر روی نقشه</a>
                </p>

                <div id="filters_col">
                    <a data-toggle="collapse" href="wishlist.html#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i
                                class="icon_set_1_icon-65"></i>فیلترها <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse in" id="collapseFilters">
                        <div class="filter_type">
                            <h6>قیمت</h6>
                            <ul>
                                <li><label><input type="checkbox" checked>از ۱۰.۰۰۰ تومان تا ۵۰.۰۰۰ تومان</label></li>
                                <li><label><input type="checkbox">از ۵۰.۰۰۰ تومان تا ۱۰۰.۰۰۰ تومان</label></li>
                                <li><label><input type="checkbox">از ۱۰۰.۰۰۰ تومان تا ۵۰۰.۰۰۰ تومان</label></li>
                            </ul>
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
                            <h6>نوع</h6>
                            <ul>
                                <li><label><input type="checkbox">تورهای شهری</label></li>
                                <li><label><input type="checkbox">هتل ها</label></li>
                                <li><label><input type="checkbox">نقل و انتقالات</label></li>
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
                            <a href="all_tours_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="wishlist.html#" class="bt_filters"><i class=" icon-list"></i></a>
                        </div>

                    </div>
                </div><!--/tools -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist_close">-</div>
                            <div class="img_list"><a href="single_tour.html">
                                    <div class="ribbon popular"></div>
                                    <img src="img/tour_box_1.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-4"></i>تور های موزه</div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                            class="icon-smile  voted"></i><i class="icon-smile"></i></div>
                                <h3><strong>موزه</strong> اصفهان</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content"><h4>جدول زمانی</h4>
                                                <strong>از شنبه تا چهارشنبه</strong> ۰۹:۰۰ صبح تا ۱۳:۰۰ ظهر<br>
                                                <strong>پنجشنبه</strong> ۰۷:۰۰ صبح تا ۱۶:۰۰ بعد ظهر<br>
                                                <strong>جمعه</strong> <span class="label label-danger">تعطیل</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content"><h4>آدرس</h4>
                                                اصفهان ـ خیابان استانداری ـ کاخ موزه چهلستون<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content"><h4>زبان ها</h4>
                                                انگلیسی - فرانسوی - چینی - روسی - ایتالیایی
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                            <div class="tooltip-content"><h4>پارکینگ</h4>
                                                پارکینگ شماره ۱<br>
                                                پارکینگ شماره ۲<br>
                                                پارکینگ شماره ۳<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content"><h4>حمل و نقل</h4>
                                                <strong>مترو: </strong>خط شماره (۳)<br>
                                                <strong>اتوبوس:</strong> ۲۴, ۲۶, ۴۵, ۴۶, ۴۸, ۵۰, ۵۳, ۵۵, ۵۷, ۶۰<br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۱۵.۰۰۰ تومان</sup><span class="normal_price_list">۲۰.۰۰۰ تومان</span>
                                    <small>هر نفر</small>
                                    <p><a href="single_tour.html" class="btn_1">جزئیات</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist_close">-</div>
                            <div class="img_list"><a href="single_hotel.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/hotel_2.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-6"></i>هتل</div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">عالی<span>۹.۰</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i
                                            class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
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
                                <div><sup>۵۰۰.۰۰۰ تومان</sup><span class="normal_price_list">۲۵۰.۰۰۰ تومان</span>
                                    <small>هر نفر</small>
                                    <p><a href="single_hotel.html" class="btn_1">جزئیات</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist_close">-</div>
                            <div class="img_list"><a href="single_transfer.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/transfer_3.jpg" alt=""></a>
                                <div class="short_info"><i class="icon_set_1_icon-26"></i>انتقال</div>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                            class="icon-smile  voted"></i><i class="icon-smile"></i></div>
                                <h3><strong>فرودگاه امام خمینی</strong> خصوصی</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-70"></i></span>
                                            <div class="tooltip-content"><h4>ظرفیت مسافر</h4>
                                                تا ۴۰ مسافر.
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-6"></i></span>
                                            <div class="tooltip-content"><h4>انتخاب کنید</h4>
                                                هتل را انتخاب کنید در محل های مختلف با قیمت های مختلف.
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-13"></i></span>
                                            <div class="tooltip-content"><h4>دسترسی</h4>
                                                در صورت درخواست قابلیت دسترسی موجود باشد.
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-22"></i></span>
                                            <div class="tooltip-content"><h4>مجاز بودن حیوانات خانگی</h4>
                                                حیوانات خانگی مجاز می باشد
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-33"></i></span>
                                            <div class="tooltip-content"><h4>چمدان</h4>
                                                چمدان بزرگ در دسترس می باشد
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۵۰۰.۰۰۰ تومان</sup><span class="normal_price_list">۲۵۰.۰۰۰ تومان</span>
                                    <small>هر نفر</small>
                                    <p><a href="single_transfer.html" class="btn_1">جزئیات</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.7s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist_close">-</div>
                            <div class="img_list"><a href="single_tour.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/tour_box_5.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-44"></i>ساختمان تاریخی</div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                            class="icon-smile  voted"></i><i class="icon-smile"></i></div>
                                <h3><strong>تور های</strong> زیارتی</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content"><h4>جدول زمانی</h4>
                                                <strong>از شنبه تا چهارشنبه</strong> ۰۹:۰۰ صبح تا ۱۳:۰۰ ظهر<br>
                                                <strong>پنجشنبه</strong> ۰۷:۰۰ صبح تا ۱۶:۰۰ بعد ظهر<br>
                                                <strong>جمعه</strong> <span class="label label-danger">تعطیل</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content"><h4>آدرس</h4>
                                                اصفهان ـ خیابان استانداری ـ کاخ موزه چهلستون<br>
                                                <a href="wishlist.html#">View on map</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content"><h4>زبان ها</h4>
                                                انگلیسی - فرانسوی - چینی - روسی - ایتالیایی
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                            <div class="tooltip-content"><h4>پارکینگ</h4>
                                                پارکینگ شماره ۱<br>
                                                پارکینگ شماره ۲<br>
                                                پارکینگ شماره ۳<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content"><h4>حمل و نقل</h4>
                                                <strong>مترو: </strong>خط شماره (۳)<br>
                                                <strong>اتوبوس:</strong> ۲۴, ۲۶, ۴۵, ۴۶, ۴۸, ۵۰, ۵۳, ۵۵, ۵۷, ۶۰<br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۴۰.۰۰۰ تومان</sup><span class="normal_price_list">۵۰.۰۰۰ تومان</span>
                                    <small>هر نفر</small>
                                    <p><a href="single_tour.html" class="btn_1">جزئیات</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="wishlist.html#">قبلی</a></li>
                        <li class="active"><a href="wishlist.html#">۱</a></li>
                        <li><a href="wishlist.html#">۲</a></li>
                        <li><a href="wishlist.html#">۳</a></li>
                        <li><a href="wishlist.html#">۴</a></li>
                        <li><a href="wishlist.html#">۵</a></li>
                        <li><a href="wishlist.html#">بعدی</a></li>
                    </ul>
                </div><!-- end pagination-->

            </div><!-- End col lg-9 -->
        </div><!-- End row -->
    </div><!-- End container -->

@endsection

@section('footer')
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
    <script src="{{asset('alibaba/js/map.js')}}"></script>
    <script src="{{asset('alibaba/js/infobox.js')}}"></script>
    <script>
        $('.wishlist_close').on('click', function (c) {
            $(this).parent().parent().fadeOut('slow', function (c) {
            });
        });
    </script>

@endsection
