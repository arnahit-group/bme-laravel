@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('alibaba/css/shop.css')}}" rel="stylesheet">
    <!-- Range slider -->
    <link href="{{asset('alibaba/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>فروشگاه</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End Section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="shop.html#">صفحه اصلی</a></li>
                <li><a href="shop.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-9">
                <div class="shop-section">

                    <div class="items-sorting">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="results_shop">
                                    نمایش ۱ از ۱۵ نتایج
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <select name="sort-by">
                                        <option>بر اساس</option>
                                        <option>سفارش</option>
                                        <option>قیمت</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div><!--End Sort By-->

                    <div class="row">

                        <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="img/products/image-1.jpg" alt=""></a></figure>
                                    <div class="item-options clearfix">
                                        <a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
                                            <div class="tool-tip">
                                                افزودن به سبد خرید
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
                                            <div class="tool-tip">
                                                افزودن به مورد علاقه
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                            <div class="tool-tip">
                                                نمایش
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product_description">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div>
                                    <h3><a href="shop-single.html">کتاب سفر ۱</a></h3>
                                    <div class="price">
                                        <span class="offer">۲۰.۰۰۰ تومان</span> ۱۵.۰۰۰ تومان
                                    </div>
                                </div>
                            </div>
                        </div><!--End Shop Item-->

                        <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="img/products/image-2.jpg" alt=""></a></figure>
                                    <div class="item-options clearfix">
                                        <a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
                                            <div class="tool-tip">
                                                افزودن به سبد خرید
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
                                            <div class="tool-tip">
                                                افزودن به مورد علاقه
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                            <div class="tool-tip">
                                                نمایش
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product_description">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div>
                                    <h3><a href="shop-single.html">راهنمای جهان </a></h3>
                                    <div class="price">
                                        <span class="offer">۱۰.۰۰۰ تومان</span> ۵.۰۰۰ تومان
                                    </div>
                                </div>
                            </div>
                        </div><!--End Shop Item-->

                        <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="img/products/image-3.jpg" alt=""></a></figure>
                                    <div class="item-options clearfix">
                                        <a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
                                            <div class="tool-tip">
                                                افزودن به سبد خرید
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
                                            <div class="tool-tip">
                                                افزودن به مورد علاقه
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                            <div class="tool-tip">
                                                نمایش
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product_description">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div>
                                    <h3><a href="shop-single.html">بهترین مکان برای بازدید</a></h3>
                                    <div class="price">
                                        ۱۵.۰۰۰ تومان
                                    </div>
                                </div>
                            </div>
                        </div><!--End Shop Item-->

                        <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                            <div class="inner-box">
                                <!--Image Box-->
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="img/products/image-4.jpg" alt=""></a></figure>
                                    <div class="item-options clearfix">
                                        <a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
                                            <div class="tool-tip">
                                                افزودن به سبد خرید
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
                                            <div class="tool-tip">
                                                افزودن به مورد علاقه
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                            <div class="tool-tip">
                                                نمایش
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product_description">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div>
                                    <h3><a href="shop-single.html">کتاب سفر ۲ </a></h3>
                                    <div class="price">
                                        ۱۵.۰۰۰ تومان
                                    </div>
                                </div>
                            </div>
                        </div><!--End Shop Item-->

                        <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="img/products/image-5.jpg" alt=""></a></figure>
                                    <div class="item-options clearfix">
                                        <a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
                                            <div class="tool-tip">
                                                افزودن به سبد خرید
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
                                            <div class="tool-tip">
                                                افزودن به مورد علاقه
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                            <div class="tool-tip">
                                                نمایش
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product_description">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div>
                                    <h3><a href="shop-single.html">راهنمای سفر ۱</a></h3>
                                    <div class="price">
                                        ۴۲.۰۰۰ تومان
                                    </div>
                                </div>
                            </div>
                        </div><!--End Shop Item-->

                        <div class="shop-item col-lg-4 col-md-6 col-sm-6">
                            <div class="inner-box">
                                <!--Image Box-->
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="img/products/image-6.jpg" alt=""></a></figure>
                                    <div class="item-options clearfix">
                                        <a href="shopping-cart.html" class="btn_shop"><span class="icon-basket"></span>
                                            <div class="tool-tip">
                                                افزودن به سبد خرید
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-heart-8"></span>
                                            <div class="tool-tip">
                                                افزودن به مورد علاقه
                                            </div>
                                        </a>
                                        <a href="shop-single.html" class="btn_shop"><span class="icon-eye"></span>
                                            <div class="tool-tip">
                                                نمایش
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="product_description">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i>
                                    </div>
                                    <h3><a href="shop-single.html">ماجراهای مسافرتی</a></h3>
                                    <div class="price">
                                        <span class="offer">۴۹.۰۰۰ تومان</span> ۴۰.۰۰۰ تومان
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End Shop Item-->

                    <hr>

                    <div class="text-center">
                        <ul class="pagination">
                            <li><a href="shop.html#">قبلی</a></li>
                            <li class="active"><a href="shop.html#">۱</a></li>
                            <li><a href="shop.html#">۲</a></li>
                            <li><a href="shop.html#">۳</a></li>
                            <li><a href="shop.html#">۴</a></li>
                            <li><a href="shop.html#">۵</a></li>
                            <li><a href="shop.html#">بعدی</a></li>
                        </ul>
                    </div><!-- End pagination-->
                </div><!-- End row -->
            </div><!-- End col -->

            <!--Sidebar-->
            <div class="col-md-3">
                <aside class="sidebar">
                    <div class="widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو ...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
                        </span>
                        </div>
                    </div><!-- End Search -->
                    <hr>
                    <div class="widget" id="cat_shop">
                        <h4>دسته بندی ها</h4>
                        <ul>
                            <li><a href="shop.html#">مکان های دیدنی</a></li>
                            <li><a href="shop.html#">تورهای برتر</a></li>
                            <li><a href="shop.html#">نکاتی برای مسافران</a></li>
                            <li><a href="shop.html#">مناسبت ها</a></li>
                        </ul>
                    </div><!-- End widget -->
                    <hr>
                    <div class="widget">
                        <h4>صافی</h4>
                        <input type="text" id="range" name="range" value="">
                    </div><!-- End widget -->
                    <hr>
                    <div class="widget related-products">
                        <h4>بالا ترین ها </h4>
                        <div class="post">
                            <figure class="post-thumb"><a href="shop.html#"><img src="img/products/thumb-1.jpg" alt=""></a></figure>
                            <h5><a href="shop.html#">مدهای غربی</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                ۴۹.۰۰۰ تومان
                            </div>
                        </div>
                        <div class="post">
                            <figure class="post-thumb"><a href="shop.html#"><img src="img/products/thumb-2.jpg" alt=""></a></figure>
                            <h5><a href="shop.html#">راهنمای گردشگری مشهد</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                ۹.۰۰۰ تومان
                            </div>
                        </div>
                        <div class="post">
                            <figure class="post-thumb"><a href="shop.html#"><img src="img/products/thumb-3.jpg" alt=""></a></figure>
                            <h5><a href="shop.html#">جرم و جنایت</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                ۹۸.۰۰۰ تومان
                            </div>
                        </div>
                    </div>
                </aside>
            </div><!--Sidebar-->
        </div>
    </div><!-- End Container -->

@endsection

@section('footer')

@endsection
