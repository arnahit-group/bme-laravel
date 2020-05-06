@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- SPECIFIC CSS - GRID GALLERY -->
    <link href="{{asset('alibaba/ext/maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/finaltilesgallery.css')}}" rel="stylesheet">
    <link href="{{asset('alibaba/css/lightbox2.css')}}" rel="stylesheet">

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
                <li><a href="grid_gallery_1.html#">صفحه اصلی</a></li>
                <li><a href="grid_gallery_1.html#">دسته بندی</a></li>
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

        <div id="gallery" class="final-tiles-gallery effect-dezoom effect-fade-out caption-top social-icons-right">
            <div class="ftg-items">

                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/500x300/cccccc/ffffff&text=500x300" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/250x250/cccccc/ffffff&text=250x250" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->


                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/400x800/cccccc/ffffff&text=400x800" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/600x400/cccccc/ffffff&text=600x400" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/250x600/cccccc/ffffff&text=250x600" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/800x800/cccccc/ffffff&text=800x800" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/800x600/cccccc/ffffff&text=800x600" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/250x300/cccccc/ffffff&text=250x300" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/250x250/cccccc/ffffff&text=250x250" alt="">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_1.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_1.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_1.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_1.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

            </div>
        </div>

    </div><!-- End container -->

@endsection

@section('footer')
    <!-- Specific scripts - Grid gallery -->
    <script src="{{asset('alibaba/js/jquery.finaltilesgallery.js')}}"></script>
    <script src="{{asset('alibaba/js/lightbox2.js')}}"></script>
    <script>
        $(function () {
            'use strict';
            //we call Final Tiles Grid Gallery without parameters,
//see reference for customisations: http://final-tiles-gallery.com/index.html#get-started
            $(".final-tiles-gallery").finalTilesGallery();
        });
    </script>

@endsection
