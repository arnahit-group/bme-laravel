<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<html dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords"
              content="بلیط هواپیما, خرید بلیط هواپیما,بلیط هواپیما خارجی, بلیط قطار,خرید بلیط قطار,قطار رجا, بلیط چارتر, رزرو بلیط هواپیما, قیمت بلیط هواپیما, خرید اینترنتی بلیط هواپیما خارجی, پرواز چارتر, بلیط هواپیما چارتر, هواپیمایی ماهان, ایران ایر,بلیط ارزان هواپیما, فروش بلیط هواپیما, بلیط هواپیما مشهد,آژانس هواپیمایی علی بابا"/>
        <meta name="description"
              content="باسابقه‌ترین و معتبرترین سامانه خرید اینترنتی بلیط هواپیما،بلیط چارتر و بلیط قطار رجا، رزرو بلیط هواپیما و خرید بلیط هواپیما خارجی و داخلی از معتبرترین ایرلاین‌های ایران و جهان">
        <meta name="author" content="www.digiao.ir">
        <title>علی بابا آژانس مسافرتی و فروش بلیط</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="{{asset('alibaba/img/favicon.ico')}}" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('alibaba/img/apple-touch-icon-57x57-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('alibaba/img/apple-touch-icon-72x72-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('alibaba/img/apple-touch-icon-114x114-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('alibaba/img/apple-touch-icon-144x144-precomposed.png')}}">

        <!-- BASE CSS -->
        <link href="{{asset('alibaba/css/base.css')}}" rel="stylesheet">


        @yield('vendor-css')

        <!-- Google web fonts -->
        <link href='{{asset('alibaba/ext/fonts.googleapis.com/css.css')}}' rel='stylesheet' type='text/css'>
        <link href='{{asset('alibaba/ext/fonts.googleapis.com/css_2.css')}}' rel='stylesheet' type='text/css'>
        <link href='{{asset('alibaba/ext/fonts.googleapis.com/css_3.css')}}' rel='stylesheet' type='text/css'>


        <!--[if lt IE 9]>
        <script src="{{asset('alibaba/js/html5shiv.min.js')}}"></script>
        <script src="{{asset('alibaba/js/respond.min.js')}}"></script>
        <![endif]-->

        @yield('header')


    </head>

    <body>

        <!--[if lte IE 8]>
        <p class="chromeframe">لطفا مرورگر خود را بروز کنید <strong>استفاده میکنید</strong> مرورگر قدیمی <a href="http://digiao.ir/">شما از </a>.</p>
        <![endif]-->

        <div id="preloader">
            <div class="sk-spinner sk-spinner-wave">
                <div class="sk-rect1"></div>
                <div class="sk-rect2"></div>
                <div class="sk-rect3"></div>
                <div class="sk-rect4"></div>
                <div class="sk-rect5"></div>
            </div>
        </div>
        <!-- End Preload -->

        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->

        <!-- Header================================================== -->
        <header>
            <div id="top_line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>۰۷۶-۸۵۹۶۳۵۴۲</strong></div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <ul id="top_links">
                                <li>
                                    <div class="dropdown dropdown-access">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">ورود</a>
                                        <div class="dropdown-menu">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <a href="#" class="bt_facebook">
                                                        <i class="icon-facebook"></i>فیسبوک </a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <a href="#" class="bt_paypal">
                                                        <i class="icon-paypal"></i>پی پال </a>
                                                </div>
                                            </div>
                                            <div class="login-or">
                                                <hr class="hr-or">
                                                <span class="span-or">یا</span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="inputUsernameEmail" placeholder="پست الکترونیک">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="رمز عبور">
                                            </div>
                                            <a id="forgot_pw" href="#">رمز عبور خود را فراموش كرده ايد؟</a>
                                            <input type="submit" name="Sign_in" value="ورود" id="Sign_in" class="button_drop">
                                            <input type="submit" name="Sign_up" value="ثبت نام" id="Sign_up" class="button_drop outline">
                                        </div>
                                    </div><!-- End Dropdown access -->
                                </li>
                                <li><a href="wishlist.html" id="wishlist_link">لیست علاقه مندی ها</a></li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container-->
            </div><!-- End top line-->

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div id="logo_home">
                            <h1><a href="index.html" title="علی بابا آژانس مسافرتی و فروش بلیط">علی بابا آژانس مسافرتی و فروش بلیط</a></h1>
                        </div>
                    </div>
                    <nav class="col-md-9 col-sm-9 col-xs-9">
                        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>منوی تلفن همراه</span></a>
                        <div class="main-menu">
                            <div id="header_menu">
                                <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                            </div>
                            <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">صفحه اصلی <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="index.html">با هتل ها و تورها</a></li>
                                        <li><a href="index_12.html">با لایه لغزنده</a></li>
                                        <li><a href="index_2.html">فقط با تورها </a></li>
                                        <li><a href="index_3.html">تنها تصاویر</a></li>
                                        <li><a href="index_4.html">سربرگ ویدئو</a></li>
                                        <li><a href="index_7.html">با پنل جستجو</a></li>
                                        <li><a href="index_13.html">با زبانه</a></li>
                                        <li><a href="index_5.html">با نقشه</a></li>
                                        <li><a href="index_6.html">با نوار جستجو</a></li>
                                        <li><a href="index_8.html">نوار جستجو + ویدئو</a></li>
                                        <li><a href="index_9.html">با چرخش متن</a></li>
                                        <li><a href="index_10.html">با کوکی نوار (قانون اتحادیه اروپا )</a></li>
                                        <li><a href="index_11.html">پنجره های تبلیغاتی</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">تورها <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_tours_list.html">لیست همه تورها</a></li>
                                        <li><a href="all_tours_grid.html">شبکه همه تورها </a></li>
                                        <li><a href="all_tours_map_listing.html">مشاهده تور ها بر روی نقشه</a></li>
                                        <li><a href="single_tour.html">صفحه تور</a></li>
                                        <li><a href="http://ipixels.ir/demo/alibaba/single_tour_with_gallery.html">گالری تور</a></li>
                                        <li><a href="javascript:void(0);">لیست تور ها </a>
                                            <ul>
                                                <li><a href="single_tour_fixed_sidebar.html">لیست تور ها</a></li>
                                                <li><a href="http://ipixels.ir/demo/alibaba/single_tour_with_gallery_fixed_sidebar.html">لیست تور ها ۲</a></li>
                                                <li><a href="cart_fixed_sidebar.html">نوار سبد خرید </a></li>
                                                <li><a href="payment_fixed_sidebar.html">نوار پرداخت </a></li>
                                                <li><a href="confirmation_fixed_sidebar.html">نوار تایید </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single_tour_working_booking.htm">تور های کاری</a></li>
                                        <li><a href="cart.html">سبد خرید تور</a></li>
                                        <li><a href="payment.html">آپارتمان تور</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">هتل ها <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_hotels_list.html">لیست همه هتل ها</a></li>
                                        <li><a href="all_hotels_grid.html">تمامی هتل ها</a></li>
                                        <li><a href="all_hotels_map_listing.html">نقشه تمامی هتل ها</a></li>
                                        <li><a href="single_hotel.html">صفحه هتل</a></li>
                                        <li><a href="single_hotel_datepicker_adv.html">امکانات هتل</a></li>
                                        <li><a href="single_hotel_working_booking.htm">هتل های کاری</a></li>
                                        <li><a href="cart_hotel.html">سبد خرید هتل</a></li>
                                        <li><a href="payment_hotel.html">رزرو هتل</a></li>
                                        <li><a href="confirmation_hotel.html">تایید هتل</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">نقل و انتقالات <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_transfer_list.html">لیست تمام نقل و انتقالات</a></li>
                                        <li><a href="all_transfer_grid.html">تمام نقل و انتقالات تور</a></li>
                                        <li><a href="single_transfer.html">صفحه انتقال تک نفره</a></li>
                                        <li><a href="cart_transfer.html">سبد خرید نقل و انتقالات </a></li>
                                        <li><a href="payment_transfer.html">رزرو نقل و انتقالات</a></li>
                                        <li><a href="confirmation_transfer.html">تایید نقل و انتقالات </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">رستوران ها <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_restaurants_list.html">لیست تمام رستوران ها</a></li>
                                        <li><a href="all_restaurants_grid.html">رستوران های معروف</a></li>
                                        <li><a href="all_restaurants_map_listing.html">نمایش تمام رستوران ها روی نقشه</a></li>
                                        <li><a href="single_restaurant.html">صفحه رستوران تک نفره</a></li>
                                        <li><a href="payment_restaurant.html">رزرو رستوران</a></li>
                                        <li><a href="confirmation_transfer.html">تایید نقل و انتقالات </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">جایزه <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">مدل سربرگ</a>
                                            <ul>
                                                <li><a href="index.html">سربرگ پیشفرض</a></li>
                                                <li><a href="header_2.html">سربرگ مدل ۲</a></li>
                                                <li><a href="header_3.html">سربرگ مدل ۳</a></li>
                                                <li><a href="header_4.html">سربرگ مدل ۴</a></li>
                                                <li><a href="header_5.html">سربرگ مدل ۵</a></li>
                                                <li><a href="header_6.html">سربرگ مدل ۶</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">مدل فوتر</a>
                                            <ul>
                                                <li><a href="index.html">فوتر پیشفرض</a></li>
                                                <li><a href="footer_2.html">فوتر مدل ۲</a></li>
                                                <li><a href="footer_3.html">فوتر مدل ۳</a></li>
                                                <li><a href="footer_4.html">فوتر مدل ۴</a></li>
                                                <li><a href="footer_5.html">فوتر مدل ۵</a></li>
                                                <li><a href="footer_6.html">فوتر مدل ۶</a></li>
                                                <li><a href="footer_7.html">فوتر مدل ۷</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">فروشگاه</a>
                                            <ul>
                                                <li><a href="shop.html">فروشگاه</a></li>
                                                <li><a href="shop-single.html">فروشگاه تک</a></li>
                                                <li><a href="shopping-cart.html">سبد خرید فروشگاه</a></li>

                                                <li><a href="checkout.html">پرداخت نهایی فروشگاه</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single_hotel_contact.htm">فرم صفحه تماس با هتل</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu submenu">
                                    <a href="javascript:void(0);" class="show-submenu-mega">صفحات<i class="icon-down-open-mini"></i></a>
                                    <div class="menu-wrapper">
                                        <div class="col-md-4">
                                            <h3>صفحات</h3>
                                            <ul>
                                                <li><a href="about.html">درباره ما</a></li>
                                                <li><a href="general_page.html">صفحه عمومی</a></li>
                                                <li><a href="tourist_guide.html">راهنمای گردشگری</a></li>
                                                <li><a href="wishlist.html">صفحه فهرست علاقمندیها</a></li>
                                                <li><a href="faq.html">پرسش و پاسخ</a></li>
                                                <li><a href="faq_2.html">پرسش و پاسخ با اسکرول</a></li>
                                                <li><a href="pricing_tables.html">جدول قیمت گذاری</a></li>
                                                <li><a href="gallery_3_columns.html">گالری ۳ ستون</a></li>
                                                <li><a href="gallery_4_columns.html">گالری ۴ ستون</a></li>
                                                <li><a href="grid_gallery_1.html">گالری تور</a></li>
                                                <li><a href="grid_gallery_2.html">گالری با فیلتر</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>صفحات</h3>
                                            <ul>
                                                <li><a href="contact_us_1.html">تماس با ما ۱</a></li>
                                                <li><a href="contact_us_2.html">تماس با ما ۲</a></li>
                                                <li><a href="blog_right_sidebar.html">وبلاگ</a></li>
                                                <li><a href="blog.html">وبلاگ نوار کناری سمت چپ</a></li>
                                                <li><a href="login.html">ورود</a></li>
                                                <li><a href="register.html">ثبت نام</a></li>
                                                <li><a href="invoice.html" target="_blank">صورتحساب</a></li>
                                                <li><a href="404.html">صفحه خطا ۴۰۴</a></li>
                                                <li><a href="http://ipixels.ir/demo/alibaba/site_launch/index.html">راه اندازی سایت / به زودی</a></li>
                                                <li><a href="timeline.html">جدول زمانی تور</a></li>
                                                <li><a href="page_with_map.html"><i class="icon-map"></i> نمایش کامل نقشه</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>عناصر</h3>
                                            <ul>
                                                <li><a href="footer_2.html"><i class="icon-columns"></i> فوتر با خبرنامه</a></li>
                                                <li><a href="footer_5.html"><i class="icon-columns"></i> فوتر با فید توییتر</a></li>
                                                <li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> آیکون پک ۱ (۱۹۰۰)</a></li>
                                                <li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> آیکون پک ۲ (۱۰۰)</a></li>
                                                <li><a href="icon_pack_3.html"><i class="icon-inbox-alt"></i> آیکون پک ۳ (۳۰)</a></li>
                                                <li><a href="shortcodes.html"><i class="icon-tools"></i> کد کوتاه</a></li>
                                                <li><a href="http://ipixels.ir/demo/alibaba/newsletter_template/newsletter.html" target="blank"><i class=" icon-mail"></i> پوسته
                                                        ایمیل پاسخگویی</a></li>
                                                <li><a href="admin.html"><i class="icon-cog-1"></i> بخش مدیریت</a></li>
                                                <li><a href="general_page.html"><i class="icon-light-up"></i> پیش بینی آب و هوا</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- End menu-wrapper -->
                                </li>
                            </ul>
                        </div><!-- End main-menu -->
                        <ul id="top_tools">
                            <li>
                                <div class="dropdown dropdown-search">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                                    <div class="dropdown-menu">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="جستجو...">
                                                <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" style="margin-left:0;">
                                            <i class="icon-search"></i>
                                            </button>
                                            </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown dropdown-cart">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>(۲۲) سبد خرید</a>
                                    <ul class="dropdown-menu" id="cart_items">
                                        <li>
                                            <div class="image"><img src="{{asset('alibaba/img/thumb_cart_1.jpg')}}" alt=""></div>
                                            <strong>
                                                <a href="#">موزه ایران</a>۱ نفر ۲۵.۰۰۰ تومان </strong>
                                            <a href="#" class="action"><i class="icon-trash"></i></a>
                                        </li>
                                        <li>
                                            <div class="image"><img src="{{asset('alibaba/img/thumb_cart_2.jpg')}}" alt=""></div>
                                            <strong>
                                                <a href="#">برج میلاد</a>۲ نفر ۸۰.۰۰۰ تومان </strong>
                                            <a href="#" class="action"><i class="icon-trash"></i></a>
                                        </li>
                                        <li>
                                            <div class="image"><img src="{{asset('alibaba/img/thumb_cart_3.jpg')}}" alt=""></div>
                                            <strong>
                                                <a href="#">تور کیش</a>۱ نفر ۸۰.۰۰۰ تومان </strong>
                                            <a href="#" class="action"><i class="icon-trash"></i></a>
                                        </li>
                                        <li>
                                            <div>مجموع: <span>۱۸۵.۰۰۰ تومان</span></div>
                                            <a href="cart.html" class="button_drop">برو به سبد خرید</a>
                                            <a href="payment.html" class="button_drop outline">بررسی ورود</a>
                                        </li>
                                    </ul>
                                </div><!-- End dropdown-cart-->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div><!-- container -->
        </header><!-- End Header -->



    @yield('main')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3">
                        <h3>شما نیاز به کمک دارید؟</h3>
                        <a href="http://ipixels.ir/demo/alibaba/%D8%B4%D9%85%D8%A7%D8%B1%D9%87%20%D8%AA%D9%85%D8%A7%D8%B3:/%DB%B0%DB%B2%DB%B1%DB%B3%DB%B2%DB%B5%DB%B0%DB%B0%DB%B0%DB%B0%DB%B0"
                           id="phone">۰۲۱۳۲۵۰۰۰۰۰</a>
                        <a href="http://ipixels.ir/demo/alibaba/%D8%A7%DB%8C%D9%85%DB%8C%D9%84:Info@digiao.ir" id="email_footer">Info@digiao.ir</a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h3>در باره ما</h3>
                        <ul>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">پرسش و پاسخ</a></li>
                            <li><a href="#">ورود</a></li>
                            <li><a href="#">ثبت نام</a></li>
                            <li><a href="#">شرایط و ضوابط </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h3>كشف كردن</h3>
                        <ul>
                            <li><a href="#">وبلاگ ها</a></li>
                            <li><a href="#">راهنمای تور</a></li>
                            <li><a href="#">لیست علاقمندی ها</a></li>
                            <li><a href="#">گالری</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <h3>تنظیمات</h3>
                        <div class="styled-select">
                            <select class="form-control" name="lang" id="lang">
                                <option value="English" selected>English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Russian">Russian</option>
                            </select>
                        </div>
                        <div class="styled-select">
                            <select class="form-control" name="currency" id="currency">
                                <option value="USD" selected>ریال</option>
                                <option value="EUR">دلار</option>
                                <option value="GBP">تومان</option>
                                <option value="RUB">یورو</option>
                            </select>
                        </div>
                    </div>
                </div><!-- End row -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="social_footer">
                            <ul>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-google"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                                <li><a href="#"><i class="icon-pinterest"></i></a></li>
                                <li><a href="#"><i class="icon-vimeo"></i></a></li>
                                <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            </ul>
                            <p>کلیه حقوق این سایت محفوظ و متعلق به آژانس مسافرتی و فروش بلیط علی‌بابا می باشد.</p>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </footer><!-- End footer -->

        <div id="toTop"></div><!-- Back to top button -->

        <!-- Common scripts -->
        <script src="{{asset('alibaba/js/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('alibaba/js/common_scripts_min.js')}}"></script>
        <script src="{{asset('alibaba/js/functions.js')}}"></script>

        @yield('footer')

    </body>

</html>