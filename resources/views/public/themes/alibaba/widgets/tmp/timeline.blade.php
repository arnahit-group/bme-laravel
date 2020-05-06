@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('alibaba/css/timeline.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>گاهشمار زمانی تور ها</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End Section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="timeline.html#">صفحه اصلی</a></li>
                <li><a href="timeline.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>گاهشمار <span>دقیق برای </span>موزه اصفهان</h2>
            <p>
                مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا
            </p>
        </div>
        <hr>
        <ul class="cbp_tmtimeline">
            <li>
                <time class="cbp_tmtime" datetime="09:30"><span>۳۰ دقیقه</span> <span>۰۹:۳۰</span></time>
                <div class="cbp_tmicon timeline_icon_point"></div>
                <div class="cbp_tmlabel">
                    <div class="pull-left hidden-xs" style="white-space: nowrap;">راهنمای تور <strong>محسن باقری</strong><img src="img/guide_1.jpg" alt=""
                                                                                                                              class="img-circle speaker"></div>
                    <h2><span>لورم ایپسوم متن ساختگی</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                </div>
            </li>
            <li>
                <time class="cbp_tmtime" datetime="11:30"><span>۲ ساعت</span> <span>۱۱:۳۰</span></time>
                <div class="cbp_tmicon timeline_icon_pic"></div>
                <div class="cbp_tmlabel">
                    <div class="pull-left hidden-xs" style="white-space: nowrap;">راهنمای تور <strong>علی صادقی</strong><img src="img/guide_2.jpg" alt=""
                                                                                                                             class="img-circle speaker"></div>
                    <h2><span>لورم ایپسوم متن ساختگی</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                </div>
            </li>
            <li>
                <time class="cbp_tmtime" datetime="13:30"><span>۱ ساعت</span> <span>۱۳:۳۰</span></time>
                <div class="cbp_tmicon timeline_icon_break"></div>
                <div class="cbp_tmlabel">
                    <h2><span>لورم ایپسوم متن ساختگی</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </li>
            <li>
                <time class="cbp_tmtime" datetime="14:30"><span>۲ ساعت</span> <span>۱۴:۳۰</span></time>
                <div class="cbp_tmicon timeline_icon_audio"></div>
                <div class="cbp_tmlabel">
                    <div class="pull-left hidden-xs" style="white-space: nowrap;">راهنمای تور <strong>محسن باقری</strong><img src="img/guide_1.jpg" alt=""
                                                                                                                              class="img-circle speaker"></div>
                    <h2><span>لورم ایپسوم متن ساختگی</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </li>
            <li>
                <time class="cbp_tmtime" datetime="16:30"><span>۲ ساعت</span> <span>۱۶:۳۰</span></time>
                <div class="cbp_tmicon timeline_icon_pic"></div>
                <div class="cbp_tmlabel">
                    <div class="pull-left hidden-xs" style="white-space: nowrap;">راهنمای تور <strong>علی صادقی</strong><img src="img/guide_2.jpg" alt=""
                                                                                                                             class="img-circle speaker"></div>
                    <h2><span>لورم ایپسوم متن ساختگی</h2>
                    <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </li>
        </ul>
    </div><!-- End container -->

@endsection

@section('footer')

@endsection
