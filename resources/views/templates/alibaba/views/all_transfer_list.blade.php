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
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/transfer_top.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>برگشت به بندرعباس</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="all_transfer_list.html#">صفحه اصلی</a></li>
                <li><a href="all_transfer_list.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- Position -->

    <div class="container margin_60">

        <div class="row">
            <aside class="col-lg-3 col-md-3">

                <div id="filters_col">
                    <a data-toggle="collapse" href="all_transfer_list.html#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i
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
                            <h6>امکان</h6>
                            <ul>
                                <li><label><input type="checkbox">مجاز بودن حیوانات خانگی</label></li>
                                <li><label><input type="checkbox">گروه های عضو</label></li>
                                <li><label><input type="checkbox">راهنمای تور</label></li>
                                <li><label><input type="checkbox">دسترسی برای معلولان</label></li>
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
                            <a href="all_transfer_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="all_transfer_list.html#" class="bt_filters"><i
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
                            <div class="img_list"><a href="single_transfer.html">
                                    <div class="ribbon popular"></div>
                                    <img src="img/transfer_2.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                            class="icon-smile  voted"></i><i class="icon-smile"></i></div>
                                <h3><strong>اماکن</strong> تاریخی</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-70"></i></span>
                                            <div class="tooltip-content"><h4>ظرفیت مسافر</h4>
                                                تا 6 مسافر.
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
                                <div><sup>۷۰.۰۰۰ تومان</sup><span class="normal_price_list">۸۰.۰۰۰ تومان</span>
                                    <small>هر نفر</small>
                                    <p><a href="single_transfer.html" class="btn_1">جزئیات</a></p>
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
                            <div class="img_list"><a href="single_transfer.html">
                                    <div class="ribbon popular"></div>
                                    <img src="img/transfer_1.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                            class="icon-smile  voted"></i><i class="icon-smile"></i></div>
                                <h3><strong>فرودگاه مهرآباد</strong> عمومی</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-70"></i></span>
                                            <div class="tooltip-content"><h4>ظرفیت مسافر</h4>
                                                تا 6 مسافر.
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
                                <div><sup>۷۰.۰۰۰ تومان</sup><span class="normal_price_list">۸۰.۰۰۰ تومان</span>
                                    <small>هر نفر</small>
                                    <p><a href="single_transfer.html" class="btn_1">جزئیات</a></p>
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
                            <div class="img_list"><a href="single_transfer.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/transfer_3.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                            class="icon-smile  voted"></i><i class="icon-smile"></i></div>
                                <h3><strong>فرودگاه امام خمینی</strong> خصوصی</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-70"></i></span>
                                            <div class="tooltip-content"><h4>ظرفیت مسافر</h4>
                                                Up to 40 passengers.
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
                                <div><sup>۷۰.۰۰۰ تومان</sup><span class="normal_price_list">۸۰.۰۰۰ تومان</span>
                                    <small>هر نفر</small>
                                    <p><a href="single_transfer.html" class="btn_1">جزئیات</a></p>
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
                            <div class="img_list"><a href="single_transfer.html">
                                    <div class="ribbon top_rated"></div>
                                    <img src="img/transfer_4.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                            class="icon-smile  voted"></i><i class="icon-smile"></i></div>
                                <h3><strong>برگشت</strong> به بندرعباس</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-70"></i></span>
                                            <div class="tooltip-content"><h4>ظرفیت مسافر</h4>
                                                تا 6 مسافر.
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

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div><sup>۷۰.۰۰۰ تومان</sup><span class="normal_price_list">۸۰.۰۰۰ تومان</span>
                                    <small>هر نفر</small>
                                    <p><a href="single_transfer.html" class="btn_1">جزئیات</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="all_transfer_list.html#">قبلی</a></li>
                        <li class="active"><a href="all_transfer_list.html#">۱</a></li>
                        <li><a href="all_transfer_list.html#">۲</a></li>
                        <li><a href="all_transfer_list.html#">۳</a></li>
                        <li><a href="all_transfer_list.html#">۴</a></li>
                        <li><a href="all_transfer_list.html#">۵</a></li>
                        <li><a href="all_transfer_list.html#">بعدی</a></li>
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

@endsection
