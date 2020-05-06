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
                <h1>جزئیات محصول</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End Section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="shop-single.html#">صفحه اصلی</a></li>
                <li><a href="shop-single.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-9">

                <div class="product-details">

                    <div class="basic-details">
                        <div class="row">
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="img/products/image-2.jpg" alt=""></figure>
                            </div>
                            <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                <div class="details-header">
                                    <h2>راهنمای سفر جهانی</h2>
                                    <div class="item-price">
                                        <span class="offer">۵۰.۰۰۰ تومان</span> ۲۵.۰۰۰ تومان
                                    </div>
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                class="icon-star-empty"></i> (۳ نظرات مشتریان)
                                    </div>
                                </div>
                                <div class="text">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون
                                        و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                    </p>
                                </div>
                                <div class="other-options">
                                    <div class="numbers-row">
                                        <input type="text" value="0" id="quantity_1" class="qty2 form-control" name="quantity_1">
                                    </div>
                                    <a href="shopping-cart.html" class="btn_1">افزودن به سبد خرید </a>
                                </div>
                                <!--Item Meta-->
                                <ul class="item-meta">
                                    <li>دسته بندی ها: <a href="shop-single.html#">کتاب</a> , <a href="shop-single.html#">مجله</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--End Basic Details-->

                    <div class="product-info-tabs">

                        <div class="prod-tabs" id="product-tabs">
                            <div class="tab-btns clearfix">
                                <a href="shop-single.html#prod-description" class="tab-btn active-btn">توضیحات محصول</a>
                                <a href="shop-single.html#prod-reviews" class="tab-btn">بررسی (۰۳)</a>
                            </div>

                            <div class="tabs-container">
                                <div class="tab active-tab" id="prod-description">
                                    <h3>توضیحات محصول</h3>
                                    <div class="content">
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                            ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        </p>
                                    </div>
                                </div><!--End Tab-->

                                <div class="tab" id="prod-reviews">
                                    <h3>۳ نظر یافت</h3>
                                    <div class="reviews-container">

                                        <div class="review-box clearfix">
                                            <figure class="rev-thumb"><img src="img/avatar1.jpg" alt=""></figure>
                                            <div class="rev-content">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                            class="icon-star-empty"></i>
                                                </div>
                                                <div class="rev-info">
                                                    مدیریت ۳ اردیبهشت ۱۳۹۶:
                                                </div>
                                                <div class="rev-text">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-box clearfix">
                                            <figure class="rev-thumb"><img src="img/avatar2.jpg" alt=""></figure>
                                            <div class="rev-content">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                            class="icon-star-empty"></i>
                                                </div>
                                                <div class="rev-info">
                                                    علی بخشی ۳ اردیبهشت ۱۳۹۶:
                                                </div>
                                                <div class="rev-text">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-box clearfix">
                                            <figure class="rev-thumb"><img src="img/avatar3.jpg" alt=""></figure>
                                            <div class="rev-content">
                                                <div class="rating">
                                                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                                            class="icon-star-empty"></i>
                                                </div>
                                                <div class="rev-info">
                                                    حجت شهبازی ۳ اردیبهشت ۱۳۹۶:
                                                </div>
                                                <div class="rev-text">
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!--End Review Container-->

                                    <hr>

                                    <div class="add-review">
                                        <h3>اضافه کردن نظر</h3>
                                        <form method="post" action="shop-single.html">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>نام *</label>
                                                    <input type="text" name="name" value="" placeholder="" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>پست الکترونیک *</label>
                                                    <input type="email" name="email" value="" placeholder="" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>وب سایت *</label>
                                                    <input type="text" name="website" value="" placeholder="" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>رتبه </label>
                                                    <div class="rating">
                                                        <a href="shop-single.html#" class="rate-box" title="1 Out of 5"><span class="icon-star"></span></a>
                                                        <a href="shop-single.html#" class="rate-box" title="2 Out of 5"><span class="icon-star"></span><span
                                                                    class="icon-star"></span></a>
                                                        <a href="shop-single.html#" class="rate-box" title="3 Out of 5"><span class="icon-star"></span><span
                                                                    class="icon-star"></span><span class="icon-star"></span></a>
                                                        <a href="shop-single.html#" class="rate-box" title="4 Out of 5"><span class="icon-star"></span><span
                                                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></a>
                                                        <a href="shop-single.html#" class="rate-box" title="5 Out of 5"><span class="icon-star"></span><span
                                                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span
                                                                    class="icon-star"></span></a>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>نظر شما</label>
                                                    <textarea name="review-message" class="form-control" style="height:150px;"></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <button type="button" class="btn_1">ثبت نظر</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!--End tabs-container-->
                        </div><!--End prod-tabs-->
                    </div><!--End product-info-tabs-->

                    <div class="related-products">
                        <div class="normal-title">
                            <h3>محصولات مرتبط</h3>
                        </div>
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
                                                    علاقه مند شدم
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
                                        <h3><a href="shop-single.html">کتاب سفر</a></h3>
                                        <div class="price">
                                            <span class="offer">۳۵.۰۰۰ تومان</span> ۳۰.۰۰۰ تومان
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
                                                    علاقه مند شدم
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
                                        <h3><a href="shop-single.html">نقشه های سفر</a></h3>
                                        <div class="price">
                                            <span class="offer">۱۲.۰۰۰ تومان</span> ۱۰.۰۰۰ تومان
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
                                                    علاقه مند شدم
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
                                        <h3><a href="shop-single.html">مکان های دیدنی دنیا</a></h3>
                                        <div class="price">
                                            ۵۰.۰۰۰ تومان
                                        </div>
                                    </div>
                                </div>
                            </div><!--End Shop Item-->

                        </div>
                    </div><!--End Related products-->
                </div><!--End Product-details-->
            </div><!--End Col-->

            <div class="col-md-3">
                <aside class="sidebar">
                    <div class="widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو...">
                            <span class="input-group-btn">
					<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
					</span>
                        </div>
                    </div><!-- End Search -->
                    <hr>
                    <div class="widget" id="cat_shop">
                        <h4>دسته بندی ها</h4>
                        <ul>
                            <li><a href="shop-single.html#">مکان های دیدنی</a></li>
                            <li><a href="shop-single.html#">بهترین تور ها</a></li>
                            <li><a href="shop-single.html#">نکاتی برای مسافران</a></li>
                            <li><a href="shop-single.html#">مناسبت ها</a></li>
                        </ul>
                    </div><!-- End widget -->
                    <hr>
                    <div class="widget">
                        <h4>فیلتر</h4>
                        <input type="text" id="range" name="range" value="">
                    </div><!-- End widget -->
                    <hr>
                    <div class="widget related-products">
                        <h4>بالاترین رتبه </h4>
                        <div class="post">
                            <figure class="post-thumb"><a href="shop-single.html#"><img src="img/products/thumb-1.jpg" alt=""></a></figure>
                            <h5><a href="shop-single.html#"> مد های غربی</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                ۵۰.۰۰۰ تومان
                            </div>
                        </div>
                        <div class="post">
                            <figure class="post-thumb"><a href="shop-single.html#"><img src="img/products/thumb-2.jpg" alt=""></a></figure>
                            <h5><a href="shop-single.html#">دنیای روشن</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                ۵۰.۰۰۰ تومان
                            </div>
                        </div>
                        <div class="post">
                            <figure class="post-thumb"><a href="shop-single.html#"><img src="img/products/thumb-3.jpg" alt=""></a></figure>
                            <h5><a href="shop-single.html#">چگونه مسافرت کنیم</a></h5>
                            <div class="rating">
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class="icon-star-empty"></i>
                            </div>
                            <div class="price">
                                ۵۰.۰۰۰ تومان
                            </div>
                        </div>
                    </div>
                </aside>
            </div><!--Sidebar-->
        </div>
    </div><!-- End Container -->

@endsection

@section('footer')
    <script>
        if ($('.prod-tabs .tab-btn').length) {
            $('.prod-tabs .tab-btn').on('click', function (e) {
                e.preventDefault();
                var target = $($(this).attr('href'));
                $('.prod-tabs .tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                $('.prod-tabs .tab').fadeOut(0);
                $('.prod-tabs .tab').removeClass('active-tab');
                $(target).fadeIn(500);
                $(target).addClass('active-tab');
            });

        }
    </script>

@endsection
