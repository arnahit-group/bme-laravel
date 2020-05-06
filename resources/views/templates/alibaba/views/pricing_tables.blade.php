@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')

@endsection
@section('header')

@endsection
@section('main')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>جدول قیمت گذاری</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End Section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="pricing_tables.html#">صفحه اصلی</a></li>
                <li><a href="pricing_tables.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="container margin_60">
        <div class="main_title">
            <h2><span>بسته های </span>مقرون به صرفه برای مسافران</h2>
            <p>
                مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا
            </p>
        </div>
        <hr>


        <div class="row text-center plans">

            <div class="plan col-md-4">
                <h2 class="plan-title">برنز</h2>
                <p class="plan-price">۳۲.۰۰۰ تومان</span></p>
                <ul class="plan-features">
                    <li><strong>بررسی و رفتن</strong> مشمول</li>
                    <li><strong>۳ نفره</strong> مشمول</li>
                    <li><strong>۳ ماه</strong> معتبر</li>
                </ul>
                <p class=" col-md-8 col-md-offset-2 text-center"><a href="payment.html" class=" btn_1">خریداری</a></p>
            </div> <!-- End col-md-4 -->

            <div class="plan plan-tall col-md-4">
                <span class="ribbon_table"></span>
                <h2 class="plan-title">نقره</h2>
                <p class="plan-price">۲۵۰.۰۰۰ تومان</span></p>
                <ul class="plan-features">
                    <li><strong>تا ۳۰ روز برگشت وجه</strong> ضمانت</li>
                    <li><strong>بررسی و رفتن</strong> مشمول</li>
                    <li><strong>۶ تور</strong> مشمول</li>
                    <li><strong>۶ ماه</strong> معتبر</li>
                </ul>
                <p class=" col-md-8 col-md-offset-2 text-center"><a href="payment.html" class=" btn_1 green">خریداری</a></p>
            </div><!-- End col-md-4 -->

            <div class="plan col-md-4">
                <h2 class="plan-title">طلایی</h2>
                <p class="plan-price">۵۰۰.۰۰۰ تومان</span></p>
                <ul class="plan-features">
                    <li><strong>تا ۳۰ روز برگشت وجه</strong> ضمانت</li>
                    <li><strong>بررسی و رفتن</strong> مشمول</li>
                    <li><strong>۳ نفره</strong> مشمول</li>
                    <li><strong>۶ ماه</strong> معتبر</li>
                    <li><strong>راهنمای سفر</strong> رایگان</li>
                </ul>
                <p class=" col-md-8 col-md-offset-2 text-center"><a href="payment.html" class=" btn_1">خریداری</a></p>
            </div><!-- End col-md-4 -->

        </div><!-- End row plans-->

        <hr>

        <div class="row">
            <div class="col-md-12">
                <h3>دیگر جداول قیمت گذاری</h3>
            </div>
        </div><!-- end row -->

        <div class="row" id="pricing_2">
            <div class="col-md-3 col-sm-6">

                <div class="pricing-table black ">
                    <div class="pricing-table-header">
                        <span class="heading">تور تک نفره</span>
                        <span class="price-value"><span>۱۰۰.۰۰۰ تومان</span></span>
                    </div>
                    <div class="pricing-table-space "></div>
                    <div class="pricing-table-features">
                        <p><strong>یک ماهه</strong> معتبر</p>
                        <p><strong> صرفه جویی</strong> %</p>
                        <p><strong>صرفه جویی در قیمت</strong> ۰ تومان</p>
                        <p>-</p>
                    </div>

                    <div class="pricing-table-sign-up">
                        <a href="payment.html" class="btn_1">خرید!</a>
                    </div>

                </div><!-- End pricing-table-->
            </div><!-- End col-md-3 -->

            <div class="col-md-3 col-sm-6">
                <div class="pricing-table black">
                    <div class="pricing-table-header">
                        <span class="heading">۳ نفره</span>
                        <span class="price-value"><span>۳۰۰.۰۰۰ تومان</span></span>
                    </div>
                    <div class="pricing-table-space "></div>
                    <div class="pricing-table-features">
                        <p><strong>سه ماهه</strong> معتبر</p>
                        <p><strong> صرفه جویی تا </strong> ۲۰%</p>
                        <p><strong>صرفه جویی در قیمت</strong> ۲۰.۰۰۰ تومان</p>
                        <p><strong>دسترسی </strong>نامحدود</p>
                    </div>

                    <div class="pricing-table-sign-up">
                        <a href="payment.html" class="btn_1">خرید!</a>
                    </div>

                </div><!-- End pricing-table-->
            </div><!-- End col-md-3 -->

            <div class="col-md-3 col-sm-6">
                <div class="pricing-table green ">
                    <span class="ribbon_2"></span>
                    <div class="pricing-table-header">
                        <span class="heading">دسترسی کامل</span>
                        <span class="price-value"><span>۵۰.۰۰۰ تومان ماهانه</span></span>

                    </div>
                    <div class="pricing-table-space"></div>
                    <div class="pricing-table-features">
                        <p><strong>۱۲ ماهه</strong> معتبر</p>
                        <p><strong> صرفه جویی تا </strong> ۳۰%</p>
                        <p><strong>صرفه جویی در قیمت</strong> ۳۰.۰۰۰ تومان</p>
                        <p><strong>دسترسی </strong>نامحدود</p>
                    </div>

                    <div class="pricing-table-sign-up">
                        <a href="payment.html" class="btn_1">خرید!</a>
                    </div>

                </div><!-- End pricing-table-->
            </div><!-- End col-md-3 -->

            <div class="col-md-3 col-sm-6">
                <div class="pricing-table black">
                    <div class="pricing-table-header">
                        <span class="heading">راهنمای سفر به صورت کامل </span>
                        <span class="price-value"><span>۸۴۰.۰۰۰ تومان</span></span>
                    </div>
                    <div class="pricing-table-space "></div>
                    <div class="pricing-table-features">
                        <p><strong>نه ماهه</strong> معتبر</p>
                        <p><strong> صرفه جویی تا </strong> ۴۰%</p>
                        <p><strong>صرفه جویی در قیمت</strong> ۱۲۰.۰۰۰ تومان</p>
                        <p><strong>دسترسی نامحدود </strong>فوق العاده </p>
                    </div>

                    <div class="pricing-table-sign-up">
                        <a href="payment.html" class="btn_1">خرید!</a>
                    </div>

                </div><!-- End pricing-table-->
            </div><!-- End col-md-3 -->


        </div><!-- end row -->

        <hr>

        <div class="row">
            <div class="col-md-12">
                <h3>پرسش و پاسخ در رابطه با پنل ها</h3>
            </div>
        </div><!-- end row -->

        <div class="row">

            <div class="col-md-4">
                <div class="question_box">
                    <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="question_box">
                    <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="question_box">
                    <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                </div>
            </div>

        </div><!-- end row -->


    </div><!-- End container -->


@endsection

@section('footer')

@endsection
