@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('alibaba/css/admin.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/jquery.switch.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/admin_top.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>سلام مهدی!</h1>
                <p>به پنل مدیریتی خود خوش آومدی</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="admin.html#">صفحه اصلی</a></li>
                <li><a href="admin.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="margin_60 container">
        <div id="tabs" class="tabs">
            <nav>
                <ul>
                    <li><a href="admin.html#section-1" class="icon-booking"><span>رزرو آنلاین</span></a></li>
                    <li><a href="admin.html#section-2" class="icon-wishlist"><span>لیست علاقه مندی ها</span></a></li>
                    <li><a href="admin.html#section-3" class="icon-settings"><span>تنظیمات</span></a></li>
                    <li><a href="admin.html#section-4" class="icon-profile"><span>مشخصات</span></a></li>
                </ul>
            </nav>
            <div class="content">

                <section id="section-1">
                    <div id="tools">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="styled-select-filters">
                                    <select name="sort_type" id="sort_type">
                                        <option value="" selected>مرتب سازی بر اساس نوع</option>
                                        <option value="tours">تور ها</option>
                                        <option value="hotels">هتل ها</option>
                                        <option value="transfers">نقل و انتقالات</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="styled-select-filters">
                                    <select name="sort_date" id="sort_date">
                                        <option value="" selected>مرتب کردن به ترتیب تاریخ</option>
                                        <option value="oldest">قدیمی ترین</option>
                                        <option value="recent">اخیر</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div><!--/tools -->

                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="date">
                                    <span class="month">مهر</span>
                                    <span class="day"><strong>۲۳</strong>شنبه</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <h3 class="hotel_booking">هتل پنج ستاره کیش<span>۲ بزرگسال ​/ ۲ شب</span></h3>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <ul class="info_booking">
                                    <li><strong>شناسه رزرو</strong> ۲۳۴۴۲</li>
                                    <li><strong>رزرو در</strong> شنبه ۵ فروردین ۱۳۹۶</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="booking_buttons">
                                    <a href="admin.html#0" class="btn_2">ویرایش</a>
                                    <a href="admin.html#0" class="btn_3">لغو کردن</a>
                                </div>
                            </div>
                        </div><!-- End row -->
                    </div><!-- End strip booking -->

                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="date">
                                    <span class="month">مهر</span>
                                    <span class="day"><strong>۲۷</strong>جمعه</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <h3 class="tours_booking">کیش<span>۲ بزرگسال / ​ ۲ خردسال</span></h3>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <ul class="info_booking">
                                    <li><strong>شناسه رزرو</strong> ۲۳۴۴۲</li>
                                    <li><strong>رزرو در</strong> یکشنبه ۶ مهر ۱۳۹۶</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="booking_buttons">
                                    <a href="admin.html#0" class="btn_2">ویرایش</a>
                                    <a href="admin.html#0" class="btn_3">لغو کردن</a>
                                </div>
                            </div>
                        </div><!-- End row -->
                    </div><!-- End strip booking -->

                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="date">
                                    <span class="month">مهر</span>
                                    <span class="day"><strong>۲۸</strong>شنبه</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <h3 class="tours_booking">تور دبی<span>۲ بزرگسال</span></h3>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <ul class="info_booking">
                                    <li><strong>شناسه رزرو</strong> ۲۳۴۴۲</li>
                                    <li><strong>رزرو در</strong> یکشنبه ۶ مهر ۱۳۹۶</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="booking_buttons">
                                    <a href="admin.html#0" class="btn_2">ویرایش</a>
                                    <a href="admin.html#0" class="btn_3">لغو کردن</a>
                                </div>
                            </div>
                        </div><!-- End row -->
                    </div><!-- End strip booking -->

                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="date">
                                    <span class="month">مهر</span>
                                    <span class="day"><strong>۲۹</strong>یکشنبه</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <h3 class="transfers_booking">تور تایلند<span>۲ بزرگسال / ​ ۱ خردسال</span></h3>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <ul class="info_booking">
                                    <li><strong>شناسه رزرو</strong> ۲۳۴۴۲</li>
                                    <li><strong>رزرو در</strong> یکشنبه ۶ مهر ۱۳۹۶</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="booking_buttons">
                                    <a href="admin.html#0" class="btn_2">ویرایش</a>
                                    <a href="admin.html#0" class="btn_3">لغو کردن</a>
                                </div>
                            </div>
                        </div><!-- End row -->
                    </div><!-- End strip booking -->

                </section><!-- End section 1 -->

                <section id="section-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="hotel_container">
                                <div class="img_container">
                                    <a href="single_hotel.html">
                                        <img src="img/hotel_1.jpg" width="800" height="533" class="img-responsive" alt="">
                                        <div class="ribbon top_rated">
                                        </div>
                                        <div class="score">
                                            <span>۷.۵</span>خوب
                                        </div>
                                        <div class="short_info hotel">
                                            تور دریایی<span class="price"><sup>۳۰۰.۰۰۰ تومان</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="hotel_title">
                                    <h3><strong>تفریح </strong> دریایی</h3>
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div><!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div><!-- End box tour -->
                        </div><!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6 ">
                            <div class="hotel_container">
                                <div class="img_container">
                                    <a href="single_hotel.html">
                                        <img src="img/hotel_2.jpg" width="800" height="533" class="img-responsive" alt="">
                                        <div class="ribbon top_rated">
                                        </div>
                                        <div class="score">
                                            <span>۹.۰</span>عالی
                                        </div>
                                        <div class="short_info hotel">
                                            تور دریایی<span class="price"><sup>۸۰۰.۰۰۰ تومان</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="hotel_title">
                                    <h3><strong>سفر با</strong> کشتی</h3>
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div><!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div><!-- End box -->
                        </div><!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="single_tour.html">
                                        <img src="img/tour_box_1.jpg" width="800" height="533" class="img-responsive" alt="">
                                        <div class="ribbon top_rated">
                                        </div>
                                        <div class="short_info">
                                            <i class="icon_set_1_icon-44"></i>مکان های تاریخی<span class="price"><sup>۱۰۰.۰۰۰ تومان</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong>مشهد</strong> مقدس</h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                    </div><!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div>
                            <!-- End box tour -->
                        </div><!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="single_tour.html">
                                        <img src="img/tour_box_3.jpg" width="800" height="533" class="img-responsive" alt="">
                                        <div class="ribbon popular">
                                        </div>
                                        <div class="short_info">
                                            <i class="icon_set_1_icon-44"></i>مکان های تاریخی<span class="price"><sup>۱۰۰.۰۰۰ تومان</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong>اماکن</strong>مذهبی</h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                    </div><!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div><!-- End box tour -->
                        </div><!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a href="single_tour.html">
                                        <img src="img/tour_box_4.jpg" width="800" height="533" class="img-responsive" alt="">
                                        <div class="ribbon popular">
                                        </div>
                                        <div class="short_info">
                                            <i class="icon_set_1_icon-30"></i>تور کوه نوردی<span class="price"><sup>۲۲۵.۰۰۰ تومان</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong>تور</strong> قلعه دماوند</h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                    </div><!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div><!-- End box tour -->
                        </div><!-- End col-md-6 -->

                        <div class="col-md-4 col-sm-6">
                            <div class="transfer_container">
                                <div class="img_container">
                                    <a href="single_transfer.html">
                                        <img src="img/transfer_1.jpg" width="800" height="533" class="img-responsive" alt="">
                                        <div class="ribbon top_rated">
                                        </div>
                                        <div class="short_info">
                                            تور ویژه<span class="price"><sup>۵.۰۰۰.۰۰۰ تومان</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="transfer_title">
                                    <h3><strong>تور </strong> فرانسه</h3>
                                    <div class="rating">
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                class="icon-smile"></i>
                                    </div><!-- end rating -->
                                    <div class="wishlist_close_admin">
                                        -
                                    </div>
                                </div>
                            </div><!-- End box tour -->
                        </div><!-- End col-md-6 -->

                    </div><!-- End row -->
                    <button type="submit" class="btn_1 green">بروزرسانی علاقمندی ها</button>
                </section><!-- End section 2 -->

                <section id="section-3">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 add_bottom_30">
                            <h4>رمزعبور خود را تغییر دهید</h4>
                            <div class="form-group">
                                <label>پسورد قدیمی</label>
                                <input class="form-control" name="old_password" id="old_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>پسورد جدید</label>
                                <input class="form-control" name="new_password" id="new_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>تکرار رمز عبور جدید</label>
                                <input class="form-control" name="confirm_new_password" id="confirm_new_password" type="password">
                            </div>
                            <button type="submit" class="btn_1 green">بروزرسانی پسورد</button>
                        </div>
                        <div class="col-md-6 col-sm-6 add_bottom_30">
                            <h4>تغییر ایمیل</h4>
                            <div class="form-group">
                                <label>ایمیل قدیمی</label>
                                <input class="form-control" name="old_password" id="old_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>ایمیل جدید</label>
                                <input class="form-control" name="new_password" id="new_password" type="password">
                            </div>
                            <div class="form-group">
                                <label>تکرار ایمیل جدید</label>
                                <input class="form-control" name="confirm_new_password" id="confirm_new_password" type="password">
                            </div>
                            <button type="submit" class="btn_1 green">بروزرسانی ایمیل</button>
                        </div>
                    </div><!-- End row -->

                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4>تنظیمات اعلان</h4>
                            <table class="table table-striped options_cart">
                                <tbody>
                                    <tr>
                                        <td style="width:10%">
                                            <i class="icon_set_1_icon-33"></i>
                                        </td>
                                        <td style="width:60%">
                                            نمایش جدید ترین تور ها
                                        </td>
                                        <td style="width:35%">
                                            <label class="switch-light switch-ios pull-right">
                                                <input type="checkbox" name="option_1" id="option_1" checked value="">
                                                <span>
							<span>نه</span>
							<span>بله</span>
							</span>
                                                <a></a>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon_set_1_icon-6"></i>
                                        </td>
                                        <td>
                                            نمایش جدید ترین هتل ها
                                        </td>
                                        <td>
                                            <label class="switch-light switch-ios pull-right">
                                                <input type="checkbox" name="option_2" id="option_2" value="">
                                                <span>
							<span>نه</span>
							<span>بله</span>
							</span>
                                                <a></a>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon_set_1_icon-26"></i>
                                        </td>
                                        <td>
                                            نمایش جدیدترین نقل و انتقالات
                                        </td>
                                        <td>
                                            <label class="switch-light switch-ios pull-right">
                                                <input type="checkbox" name="option_3" id="option_3" value="" checked>
                                                <span>
							<span>نه</span>
							<span>بله</span>
							</span>
                                                <a></a>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon_set_1_icon-81"></i>
                                        </td>
                                        <td>
                                            نمایش جدیدترین پیشنهادهای ویژه
                                        </td>
                                        <td>
                                            <label class="switch-light switch-ios pull-right">
                                                <input type="checkbox" name="option_4" id="option_4" value="">
                                                <span>
							<span>نه</span>
							<span>بله</span>
							</span>
                                                <a></a>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn_1 green">بروزرسانی اعلان ها</button>
                        </div>
                    </div><!-- End row -->
                </section><!-- End section 3 -->

                <section id="section-4">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4>مشخصات شما</h4>
                            <ul id="profile_summary">
                                <li>نام کاربری <span>info@digiao.ir</span></li>
                                <li>نام <span>عماد</span></li>
                                <li>نام خانوادگی <span>حامدی</span></li>
                                <li>تلفن تماس <span>۰۹۰۳۸۵۰۰۰۰۰</span></li>
                                <li>تاریخ تولد <span>۱۳۷۲​​​​​​​​​​​​/۰۷/۲۶</span></li>
                                <li>آدرس <span> بندرعباس بلوار امام خمینی</span></li>
                                <li>شهر/استان <span>هرمزگان-بندرعباس</span></li>
                                <li>کد پستی <span>۰۷۸۹۵۴۲۳۶۸</span></li>
                                <li>کشور <span>ایران</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="img/tourist_guide_pic.jpg" alt="" class="img-responsive styled profile_pic">
                            </p>
                        </div>
                    </div><!-- End row -->

                    <div class="divider"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>ویرایش مشخصات</h4>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>نام</label>
                                <input class="form-control" name="first_name" id="first_name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>نام خانوادگی</label>
                                <input class="form-control" name="last_name" id="last_name" type="text">
                            </div>
                        </div>
                    </div><!-- End row -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>تلفن تماس</label>
                                <input class="form-control" name="email_2" id="email_2" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>تاریخ تولد
                                    <small>(روز/ماه/سال)</small>
                                </label>
                                <input class="form-control" name="email" id="email" type="text">
                            </div>
                        </div>
                    </div><!-- End row -->

                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>ویرایش آدرس</h4>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>آدرس خیابان</label>
                                <input class="form-control" name="first_name" id="first_name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>شهر/استان</label>
                                <input class="form-control" name="last_name" id="last_name" type="text">
                            </div>
                        </div>
                    </div><!-- End row -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>کدپستی</label>
                                <input class="form-control" name="email" id="email" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>کشور</label>
                                <select id="country" class="form-control" name="country">
                                    <option value="">انتخاب کنید...</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- End row -->

                    <hr>
                    <h4>آپلود عکس نمایه</h4>
                    <div class="form-inline upload_1">
                        <div class="form-group">
                            <input type="file" name="files[]" id="js-upload-files" multiple>
                        </div>
                        <button type="submit" class="btn_1 green" id="js-upload-submit">آپلود فایل</button>
                    </div>

                    <!-- Hidden on mobiles -->
                    <div class="hidden-xs">
                        <!-- Drop Zone -->
                        <h5>کشیدن و رها کردن فایل ها</h5>
                        <div class="upload-drop-zone" id="drop-zone">
                            فایل مورد نظر را بکشید و در اینجا رها کنید
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">۶۰% کامل شده</span>
                            </div>
                        </div>
                        <!-- Upload Finished -->
                        <div class="js-upload-finished">
                            <h5>پردازش فایل ها</h5>
                            <div class="list-group">
                                <a href="admin.html#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">آپلود موفق</span>image-01.jpg</a>
                            </div>
                        </div><!-- End Hidden on mobiles -->

                        <hr>
                        <button type="submit" class="btn_1 green">بروزرسانی مشخصات</button>
                </section><!-- End section 4 -->

            </div><!-- End content -->
        </div><!-- End tabs -->
    </div><!-- end container -->

@endsection
@section('footer')
    <!-- Specific scripts -->
    <script src="{{asset('alibaba/js/tabs.js')}}"></script>
    <script>new CBPFWTabs(document.getElementById('tabs'));</script>
    <script>
        $('.wishlist_close_admin').on('click', function (c) {
            $(this).parent().parent().parent().fadeOut('slow', function (c) {
            });
        });
    </script>

@endsection
