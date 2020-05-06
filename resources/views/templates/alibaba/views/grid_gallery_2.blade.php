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
                <li><a href="grid_gallery_2.html#">صفحه اصلی</a></li>
                <li><a href="grid_gallery_2.html#">دسته بندی</a></li>
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

        <div id="gallery" class="final-tiles-gallery  effect-dezoom effect-fade-out caption-top social-icons-right">
            <div class="ftg-filters">
                <a href="grid_gallery_2.html#ftg-set-ftgall">All</a>
                <a href="grid_gallery_2.html#ftg-set-rome">Rome</a>
                <a href="grid_gallery_2.html#ftg-set-milan">Milan</a>
                <a href="grid_gallery_2.html#ftg-set-florence">Florence</a>
            </div>
            <div class="ftg-items">
                <div class="tile ftg-set-rome">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/500x300/B52626/500x300.png">
                        <img class="item" width="250" height="150" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/500x300/B52626/ffffff&text=500x300">
                        <span class='title'>لورم ایپسوم </span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-milan">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/B52626/1.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/250x250/2B7E7E/ffffff&text=250x250">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-rome ftg-set-milan">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/400x800/99C542/400x800.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/400x800/99C542/ffffff&text=400x800">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-florence">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/600x400/F57373/600x400.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/600x400/F57373/ffffff&text=600x400">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-florence">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/250x600/7CA924/ffffff_text=/250x600.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/250x600/7CA924/ffffff&text=/250x600">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-rome ftg-set-florence">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x400/76B8B8/800x400.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/800x400/76B8B8/ffffff&text=800x400">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-florence">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x800/B52626/800x800.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/800x800/B52626/ffffff&text=800x800">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-rome">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/800x600/8F0D0D/800x600.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/800x600/8F0D0D/ffffff&text=800x600">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-rome">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/250x300/5D860C/250x300.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/250x300/5D860C/ffffff&text=250x300">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-milan">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/900x300/76B8B8/900x300.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/900x300/76B8B8/ffffff&text=900x300">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-rome ftg-set-florence">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/250x250/8F0D0D/250x250.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/250x250/8F0D0D/ffffff&text=250x250">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div><!-- End image -->

                <div class="tile ftg-set-florence">
                    <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="../../placehold.it/400x250/459393/400x250.png">
                        <img class="item" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                             data-src="http://placehold.it/400x250/459393/ffffff&text=400x250">
                        <span class='title'>Lorem ipsum</span>
                        <span class='subtitle'>متن ساختگی با تولید سادگی نامفهوم</span>
                    </a>
                    <div class="ftg-social">
                        <a href="grid_gallery_2.html#" data-social="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="grid_gallery_2.html#" data-social="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="grid_gallery_2.html#" data-social="google-plus"><i class="fa fa-google"></i></a>
                        <a href="grid_gallery_2.html#" data-social="pinterest"><i class="fa fa-pinterest"></i></a>
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
