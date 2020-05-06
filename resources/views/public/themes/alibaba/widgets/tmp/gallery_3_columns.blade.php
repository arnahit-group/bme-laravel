@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')

@endsection
@section('header')

@endsection
@section('main')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>صفحه گالری</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>
        </div>
    </section><!-- End Section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="gallery_3_columns.html#">صفحه اصلی</a></li>
                <li><a href="gallery_3_columns.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>برخی از <span>تصاویر</span> گرفته شده توسط مسافران</h2>
            <p>
                مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا
            </p>
        </div>
        <hr>
        <div class="row magnific-gallery add_bottom_60 ">
            <div class="col-md-4 col-sm-4">
                <a href="img/notredame.jpg" title="تصاویر جذاب"><img src="img/notredame.jpg" alt="" class="img-responsive styled"></a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="img/notredame.jpg" title="تصاویر جذاب"><img src="img/notredame.jpg" alt="" class="img-responsive styled"></a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="img/notredame.jpg" title="تصاویر جذاب"><img src="img/notredame.jpg" alt="" class="img-responsive styled"></a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="img/notredame.jpg" title="تصاویر جذاب"><img src="img/notredame.jpg" alt="" class="img-responsive styled"></a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="img/notredame.jpg" title="تصاویر جذاب"><img src="img/notredame.jpg" alt="" class="img-responsive styled"></a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="img/notredame.jpg" title="تصاویر جذاب"><img src="img/notredame.jpg" alt="" class="img-responsive styled"></a>
            </div>
        </div><!-- End row -->
        <div class="main_title">
            <h2>برخی از <span>ویدیو</span> های ارسالی مسافران</h2>
            <p>
                مختصری در مورد خدمات و مشتریان آژانس مسافرتی علی بابا
            </p>
        </div>
        <hr>
        <div class="row  magnific">
            <div class="col-md-4 col-sm-4">
                <a href="https://vimeo.com/45830194" class="video" title="ویدیو دیدنی"><img src="img/notredame.jpg" alt="" class="img-responsive styled"></a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video" title="ویدیو دیدنی"><img src="img/senna.jpg" alt="" class="img-responsive styled"></a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="https://vimeo.com/45830194" class="video" title="ویدیو دیدنی"><img src="img/notredame.jpg" alt="" class="img-responsive styled"></a>
            </div>
        </div><!-- End row -->


    </div><!-- End container -->


@endsection

@section('footer')

@endsection
