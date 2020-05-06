@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- CSS -->
    <link href="{{asset('alibaba/css/slider-pro.min.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/date_time_picker.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/owl.theme.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/single_hotel_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                            <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                        class=" icon-star-empty"></i></span>
                        <h1>هتل قدس مشهد</h1>
                        <span>استان خراسان رضوی، مشهد، اندرزگو ۲</span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main" class="hotel">
                            روزانه / شبانه <span><sup>۹۹.۰۰۰ تومان</sup></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="single_hotel_contact.htm#">صفحه اصلی</a></li>
                <li><a href="single_hotel_contact.htm#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->


    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">
                <div id="single_tour_feat">
                    <ul>
                        <li><i class="icon_set_2_icon-116"></i>تلویزیون پلاسما</li>
                        <li><i class="icon_set_1_icon-86"></i>وای فای رایگان</li>
                        <li><i class="icon_set_2_icon-110"></i>استخر</li>
                        <li><i class="icon_set_1_icon-59"></i>صبحانه</li>
                        <li><i class="icon_set_1_icon-22"></i>حیوان خانگی مجاز</li>
                        <li><i class="icon_set_1_icon-13"></i>دسترسی معلولین</li>
                        <li><i class="icon_set_1_icon-27"></i>پارکینگ اختصاصی</li>
                    </ul>
                </div>
                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="single_hotel_contact.htm#collapseMap" aria-expanded="false"
                                                    aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a></p>
                <!-- Map button for tablets/mobiles -->
                <div id="Img_carousel" class="slider-pro">
                    <div class="sp-slides">

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/1_medium.jpg"
                                 data-small="img/slider_single_tour/1_small.jpg"
                                 data-medium="img/slider_single_tour/1_medium.jpg"
                                 data-large="img/slider_single_tour/1_large.jpg"
                                 data-retina="img/slider_single_tour/1_large.jpg">
                        </div>
                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/2_medium.jpg"
                                 data-small="img/slider_single_tour/2_small.jpg"
                                 data-medium="img/slider_single_tour/2_medium.jpg"
                                 data-large="img/slider_single_tour/2_large.jpg"
                                 data-retina="img/slider_single_tour/2_large.jpg">
                            <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </h3>
                            <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                                لورم ایپسوم متن ساختگی
                            </p>
                            <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/3_medium.jpg"
                                 data-small="img/slider_single_tour/3_small.jpg"
                                 data-medium="img/slider_single_tour/3_medium.jpg"
                                 data-large="img/slider_single_tour/3_large.jpg"
                                 data-retina="img/slider_single_tour/3_large.jpg">
                            <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                                لورم ایپسوم متن ساختگی
                            </p>
                            <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                                لورم ایپسوم متن ساختگی
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/4_medium.jpg"
                                 data-small="img/slider_single_tour/4_small.jpg"
                                 data-medium="img/slider_single_tour/4_medium.jpg"
                                 data-large="img/slider_single_tour/4_large.jpg"
                                 data-retina="img/slider_single_tour/4_large.jpg">
                            <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                                وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/5_medium.jpg"
                                 data-small="img/slider_single_tour/5_small.jpg"
                                 data-medium="img/slider_single_tour/5_medium.jpg"
                                 data-large="img/slider_single_tour/5_large.jpg"
                                 data-retina="img/slider_single_tour/5_large.jpg">
                            <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                                وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/6_medium.jpg"
                                 data-small="img/slider_single_tour/6_small.jpg"
                                 data-medium="img/slider_single_tour/6_medium.jpg"
                                 data-large="img/slider_single_tour/6_large.jpg"
                                 data-retina="img/slider_single_tour/6_large.jpg">
                            <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                                وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/7_medium.jpg"
                                 data-small="img/slider_single_tour/7_small.jpg"
                                 data-medium="img/slider_single_tour/7_medium.jpg"
                                 data-large="img/slider_single_tour/7_large.jpg"
                                 data-retina="img/slider_single_tour/7_large.jpg">
                            <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%"
                               data-show-transition="up" data-show-delay="400">
                                ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="http://bqworks.com/slider-pro/images/image8_medium.jpg"
                                 data-small="http://bqworks.com/slider-pro/images/image8_small.jpg"
                                 data-medium="http://bqworks.com/slider-pro/images/image8_medium.jpg"
                                 data-large="http://bqworks.com/slider-pro/images/image8_large.jpg"
                                 data-retina="http://bqworks.com/slider-pro/images/image8_large.jpg"/>
                        </div>
                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/8_medium.jpg"
                                 data-small="img/slider_single_tour/8_small.jpg"
                                 data-medium="img/slider_single_tour/8_medium.jpg"
                                 data-large="img/slider_single_tour/8_large.jpg"
                                 data-retina="img/slider_single_tour/8_large.jpg">
                            <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                                لورم ایپسوم متن ساختگی
                            </p>
                            <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif"
                                 data-src="img/slider_single_tour/9_medium.jpg"
                                 data-small="img/slider_single_tour/9_small.jpg"
                                 data-medium="img/slider_single_tour/9_medium.jpg"
                                 data-large="img/slider_single_tour/9_large.jpg"
                                 data-retina="img/slider_single_tour/9_large.jpg">
                        </div>
                    </div>
                    <div class="sp-thumbnails">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/1_medium.jpg">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/2_medium.jpg">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/3_medium.jpg">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/4_medium.jpg">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/5_medium.jpg">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/6_medium.jpg">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/7_medium.jpg">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/8_medium.jpg">
                        <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/9_medium.jpg">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>شرح</h3>
                    </div>
                    <div class="col-md-9">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                        <h4>امکانات هتل</h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>انواع اتاق </h3>
                    </div>
                    <div class="col-md-9">
                        <h4>اتاق یک نفره</h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد.
                        </p>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_icons">
                                    <li><i class="icon_set_1_icon-86"></i> وای فای رایگان</li>
                                    <li><i class="icon_set_2_icon-116"></i> تلویزیون پلاسما</li>
                                    <li><i class="icon_set_2_icon-106"></i> جعبه ایمنی</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                        <div class="carousel magnific-gallery">
                            <div class="item">
                                <a href="img/carousel/1.jpg"><img src="img/carousel/1.jpg" alt="Image"></a>
                            </div>
                            <div class="item">
                                <a href="img/carousel/2.jpg"><img src="img/carousel/2.jpg" alt="Image"></a>
                            </div>
                            <div class="item">
                                <a href="img/carousel/3.jpg"><img src="img/carousel/3.jpg" alt="Image"></a>
                            </div>
                            <div class="item">
                                <a href="img/carousel/4.jpg"><img src="img/carousel/4.jpg" alt="Image"></a>
                            </div>
                        </div><!-- End photo carousel  -->

                        <hr>

                        <h4>اتاق دو تخته</h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد.
                        </p>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_icons">
                                    <li><i class="icon_set_1_icon-86"></i> وای فای رایگان</li>
                                    <li><i class="icon_set_2_icon-116"></i> تلویزیون پلاسما</li>
                                    <li><i class="icon_set_2_icon-106"></i> جعبه ایمنی</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                    <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                        <div class="carousel magnific-gallery">
                            <div class="item">
                                <a href="img/carousel/1.jpg"><img src="img/carousel/1.jpg" alt="Image"></a>
                            </div>
                            <div class="item">
                                <a href="img/carousel/2.jpg"><img src="img/carousel/2.jpg" alt="Image"></a>
                            </div>
                            <div class="item">
                                <a href="img/carousel/3.jpg"><img src="img/carousel/3.jpg" alt="Image"></a>
                            </div>
                            <div class="item">
                                <a href="img/carousel/4.jpg"><img src="img/carousel/4.jpg" alt="Image"></a>
                            </div>
                        </div><!-- End photo carousel  -->
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->

                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <h3>بررسی</h3>
                        <a href="single_hotel_contact.htm#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">بررسی پیشرفته</a>
                    </div>
                    <div class="col-md-9">
                        <div id="score_detail"><span>۷.۵</span>خوب
                            <small>(بر اساس ۳۴ بررسی)</small>
                        </div><!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>موقعیت
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>راحت
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>قیمت
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                                    class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>مقدار
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                                    class="icon-smile voted"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row -->
                        <hr>
                        <div class="review_strip_single">
                            <img src="img/avatar1.jpg" alt="Image" class="img-circle">
                            <small> - ۴ اردیبهشت ۱۳۹۶ -</small>
                            <h4>سهراب امدادی</h4>
                            <p>
                                "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                و فرهنگ پیشرو در زبان فارسی ایجاد کرد."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single">
                            <img src="img/avatar2.jpg" alt="Image" class="img-circle">
                            <small> - ۴ اردیبهشت ۱۳۹۶ -</small>
                            <h4>سهراب امدادی</h4>
                            <p>
                                "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                و فرهنگ پیشرو در زبان فارسی ایجاد کرد."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single last">
                            <img src="img/avatar3.jpg" alt="Image" class="img-circle">
                            <small> - ۴ اردیبهشت ۱۳۹۶ -</small>
                            <h4>سهراب امدادی</h4>
                            <p>
                                "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                و فرهنگ پیشرو در زبان فارسی ایجاد کرد."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i
                                        class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->
                    </div>
                </div>
            </div><!--End  single_tour_desc-->

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="single_hotel_contact.htm#collapseMap" aria-expanded="false" aria-controls="collapseMap"
                       data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </p>
                <div class="box_style_1 expose">
                    <form id="booking_hotel" action="single_hotel_contact.htm" method="post">
                        <h3 class="inner">Contact us</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control required" name="name_hotel_booking" id="name_hotel_booking" type="text" placeholder="Jhon">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>نام خانوادگی</label>
                                    <input class="form-control required" name="last_hotel_name_booking" id="last_hotel_name_booking" type="text" placeholder="Doe">
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="position:relative">
                            <label>Email</label>
                            <input class="form-control required" type="email" name="email_hotel_booking" id="email_hotel_booking" placeholder="jhon@gmail.com">
                        </div>
                        <div class="form-group" style="position:relative">
                            <label>Telephone</label>
                            <input class="form-control required" type="text" name="phone_hotel_booking" id="phone_hotel_booking" placeholder="00 3434 444">
                        </div>
                        <div class="form-group" style="position:relative">
                            <label>Message</label>
                            <textarea name="message_contact" id="message_contact" class="form-control required" style="height:150px;" placeholder="Hello world!"></textarea>
                        </div>
                        <br>

                        <button type="submit" class="btn_full">Check now</button>
                        <a class="btn_full_outline" href="single_hotel_contact.htm#"><i class=" icon-heart"></i> علاقه مند شدم</a>
                    </form>
                    <!-- END SEND MAIL SCRIPT -->
                </div><!--/box_style_1 -->

                <div class="box_style_4">
                    <i class="icon_set_1_icon-90"></i>
                    <h4><span>ارتباط </span> از طریق تلفن</h4>
                    <a href="http://ipixels.ir/demo/alibaba/%D8%AA%D9%84%D9%81%D9%86:/%DB%B0%DB%B0%DB%B4%DB%B5%DB%B4%DB%B2%DB%B3%DB%B4%DB%B4%DB%B5%DB%B9%DB%B9" class="phone">۰۷۶-۳۲۵۶۸۴۲۶</a>
                    <small>شنبه تا پنجشنبه از ساعت ۷:۰۰الی۲۳:۰۰</small>
                </div>

            </aside>
        </div><!--End row -->
    </div><!--End container -->

@endsection

@section('footer')
    <!-- Specific scripts -->
    <script src="{{asset('alibaba/js/icheck.js')}}"></script>
    <script src="{{asset('alibaba/js/jquery.validate.js')}}"></script>
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
        $("#booking_hotel").validate();
        $('input.date-pick').datepicker();
    </script>
    <!-- Map -->
    <script src="{{asset('alibaba/ext/maps.googleapis.com/maps/api/js.JS')}}"></script>
    <script src="{{asset('alibaba/js/map.js')}}"></script>
    <script src="{{asset('alibaba/js/infobox.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('alibaba/js/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".carousel").owlCarousel({
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });
        });
    </script>
    <!--Review modal validation -->
    <script src="{{asset('alibaba/assets/validate.js')}}"></script>

@endsection
