<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="UTF-8">
        <title>Material design lite</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="_token" content="{{csrf_token()}}"/>

        <link rel="stylesheet" href="{{asset('style/materialize.min.css')}}">


        @if(in_array(app()->getLocale() , config('base.rtl_locales')) == true)
            <link rel="stylesheet" href="{{asset('style/rtl.css')}}">
        @endif


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('style/jquery.slide.css')}}">


        @if(in_array(app()->getLocale() , config('base.rtl_locales')) == true)
            <link rel="stylesheet" href="{{asset('style/style-rtl.css')}}">
        @else
            <link rel="stylesheet" href="{{asset('style/style-ltr.css')}}">
        @endif




        @yield('header')

    </head>
    <body class="rtl">


        <nav class="headerm" role="navigation">
            <div class="nav-wrapper container">

                <a id="logo-container" href="{{route('home.index2')}}" class="brand-logo center logo-bg">
                    <img class="responsive-img img-logo" src="{{asset('images/main_logo.png')}}">
                </a>


                <div class="mini-phone-left-side hide-on-med-and-down">

                    @foreach($data['mobile']->title as $t)
                        <span dir="ltr">{{$t}}</span>
                    @endforeach

                    <img class="icon10 responsive-img" src="{{asset('images/telephone.png')}}">
                </div>

                <div class="row flags hide-on-med-and-down">

                    <a href="{{ url('locale/en') }}"><img class=" responsive-img img-flag"
                                                          src="{{asset('images/united-kingdom.png')}}"></a>
                    <a href="{{ url('locale/ar') }}"><img class=" responsive-img img-flag"
                                                          src="{{asset('images/saudi-arabia.png')}}"></a>
                    <a href="{{ url('locale/fa') }}"><img class=" responsive-img img-flag"
                                                          src="{{asset('images/iran.png')}}"></a>


                    {{--                    <p>{{$locale1}}</p>--}}

                </div>


                <a href="#" data-target="mobile-demo" class="sidenav-trigger hide-on-large-only right"><i
                            class="material-icons">menu</i></a>


            </div>


        </nav>

        <ul class="sidenav" id="mobile-demo">

            @foreach($navigations as $navigation)
                @if(isset($navigation->properties->key) and  isset($navigation->properties->value) )
                    <li>
                        <a href="{{route($navigation->properties->route, [$navigation->properties->key=>$navigation->properties->value])}}">
                            {{__('messages.navigation_titles')[$navigation->properties->title] }}
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{route($navigation->properties->route)}}">
                            {{__('messages.navigation_titles')[$navigation->properties->title] }}
                        </a>
                    </li>
                @endif
            @endforeach

            {{--<li><a href="#">رزرو اتاق ها هتل صبوری</a></li>--}}
            {{--<li><a href="#">سامانه پیگیری رزواسیون</a></li>--}}
            {{--<li><a href="#">گالری تصاویر هتل</a></li>--}}
            {{--<li><a href="#">تماس با ما</a></li>--}}
            {{--<li><a href="#">قوانین و خط مشی ها</a></li>--}}
            {{--<li><a href="#">تماس با ما</a></li>--}}


        </ul>

        <!--mini menu-->

        <div class="mini-menu ">


            <div class="container">
                <div class="row hide-on-med-and-down">

                    <span class="important-inf">{{__('layout.public.important notification')}}</span>
                    <span class="important-txt">{{__('layout.public.hotel online reservation system version')}}
                        <span style="color: red;">{{env('APP_VERSION')}}</span>
                        {{__('layout.public.has been launched')}}
                    </span>

                    <div class="mini-menu-left-side ">

                        @if(Auth::check() ==false)
                            <a href="{{route('home.user.login' , ['user_type'=>'customer'])}}">
                                <span>{{__('layout.public.login or register')}}</span>
                            </a>
                            <img class="icon10 responsive-img"
                                 src="{{asset('images/login-square-arrow-button-outline.png')}}">
                        @else
                            <a href="{{route('logout')}}">
                                <span>logout</span>
                            </a>
                            <img class="icon10 responsive-img"
                                 src="{{asset('images/login-square-arrow-button-outline.png')}}">
                        @endif


                        <a href="#">
                            <span class="track-booking-span">
                                {{__('layout.public.check reservation')}}
                            </span>
                        </a>
                        <img class="icon10 responsive-img" src="{{asset('images/verified.png')}}">


                    </div>

                </div>
            </div>


        </div>

        <!--main menu-->

        <div class="main-menu hide-on-med-and-down">


            <div class="container">


                <div class="row">


                    @php($a=1)
                    @foreach($navigations as $navigation)
                        @if(isset($navigation->properties->key) and  isset($navigation->properties->value) )


                            <div class="main-menu-parent col l3 s12 menu-hover">

                                @if($a ==1 )
                                    <img class="center" src="{{asset('images/door-hanger.png')}}">
                                @elseif($a ==2)
                                    <img class="center" src="{{asset('images/newspaper.png')}}">
                                @elseif($a ==3)
                                    <img class="center" src="{{asset('images/image.png')}}">
                                @elseif($a ==4)
                                    <img class="center" src="{{asset('images/telephone2.png')}}">
                                @endif


                                <div class="main-menu-child">
                                    <a href="{{route($navigation->properties->route, [$navigation->properties->key=>$navigation->properties->value])}}">
                                        {{__('messages.navigation_titles')[$navigation->properties->title] }}
                                    </a>
                                    <br>
                                    <span>{{__('messages.navigation_titles')[$navigation->properties->title] }}</span>
                                </div>
                            </div>


                        @else


                            <div class="main-menu-parent col l3 s12 menu-hover">

                                @if($a ==1 )
                                    <img class="center" src="{{asset('images/door-hanger.png')}}">
                                @elseif($a ==2)
                                    <img class="center" src="{{asset('images/newspaper.png')}}">
                                @elseif($a ==3)
                                    <img class="center" src="{{asset('images/image.png')}}">
                                @elseif($a ==4)
                                    <img class="center" src="{{asset('images/telephone2.png')}}">
                                @endif

                                <div class="main-menu-child">
                                    <a href="{{route($navigation->properties->route)}}">
                                        {{__('messages.navigation_titles')[$navigation->properties->title] }}
                                    </a>
                                    <br>
                                    <span>{{__('messages.navigation_titles')[$navigation->properties->title] }}</span>
                                </div>
                            </div>


                        @endif

                        @php($a++)

                    @endforeach

                    {{--<div class="main-menu-parent col l3 s12 menu-hover">--}}

                    {{--<img class="center" src="images/door-hanger.png">--}}
                    {{--<div class="main-menu-child">--}}
                    {{--<a href="#">رزرو اتاق ها هتل صبوری</a>--}}
                    {{--<br>--}}
                    {{--<span>Reservation</span>--}}
                    {{--</div>--}}

                    {{--</div>--}}

                    {{----}}
                    {{----}}
                    {{----}}
                    {{----}}
                    {{--<div class="main-menu-parent col l3 s12 menu-hover">--}}
                    {{--<img src="images/newspaper.png">--}}
                    {{--<div class="main-menu-child">--}}
                    {{--<a href="#">سامانه پیگیری رزرواسیون</a>--}}
                    {{--<br>--}}
                    {{--<span>Track booking</span>--}}
                    {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="main-menu-parent col l3 s12 menu-hover">--}}
                    {{--<img src="images/image.png">--}}
                    {{--<div class="main-menu-child">--}}
                    {{--<a href="#">گالری تصاویر هتل</a>--}}
                    {{--<br>--}}
                    {{--<span>Multimedia</span>--}}
                    {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="main-menu-parent col l3 s12 menu-hover">--}}
                    {{--<img src="images/telephone2.png">--}}
                    {{--<div class="main-menu-child">--}}
                    {{--<a href="#">تماس با ما</a>--}}
                    {{--<br>--}}
                    {{--<span>Contact Us</span>--}}
                    {{--</div>--}}

                    {{--</div>--}}


                </div>


            </div>

        </div>

        <!--slider-->


    @yield('container')


    <!--footer-->

        <div class="footer page-footer">
            <div class="container">
                <div class="row" style="margin: 0 !important;">

                    <div class="col l3 l3 s12 center-on-small-only">
                        <h5>امکانات هتل صبوری</h5>
                        <ul>

                            @foreach($facility_links as $facility_link )
                                @if(isset($facility_link ->properties->key) and  isset($facility_link ->properties->value) )
                                    <li>
                                        <a href="{{route($facility_link ->properties->route, [$facility_link ->properties->key=>$facility_link ->properties->value])}}">
                                            {{__('messages.navigation_titles')[$facility_link ->properties->title] }}
                                        </a>
                                    </li>
                                @else

                                    <li>
                                        <a href="{{route($facility_link ->properties->route)}}">
                                            {{__('messages.navigation_titles')[$facility_link ->properties->title] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach



                            {{--<li><a href="#">کافی شاپ و آلاچیق اختصاصی</a></li>--}}
                            {{--<li><a href="#">پارکینگ با ظرفیت 45 ماشین</a></li>--}}
                            {{--<li><a href="#">دسترسی کامل به مراکز رفاهی شهر</a></li>--}}
                            {{--<li><a href="#">رستوران و فست فود</a></li>--}}
                            {{--<li><a href="#">طبخ غذاهای محلی با منو ویژه</a></li>--}}
                            {{--<li><a href="#">هزینه عالی هر شب اقامت</a></li>--}}


                        </ul>
                    </div>

                    <div class="col l3 l3 s12 center-on-small-only">
                        <h5>لینک های مفید</h5>
                        <ul>

                            @foreach($useful_links as $useful_link )
                                @if(isset($useful_link->properties->key) and  isset($useful_link->properties->value) )
                                    <li>
                                        <a href="{{route($useful_link->properties->route, [$useful_link->properties->key=>$useful_link->properties->value])}}">
                                            {{__('messages.navigation_titles')[$useful_link->properties->title] }}
                                        </a>
                                    </li>
                                @else

                                    <li>
                                        <a href="{{route($useful_link->properties->route)}}">
                                            {{__('messages.navigation_titles')[$useful_link->properties->title] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach



                            {{--<li><a href="#">پیگیری رزرو</a></li>--}}
                            {{--<li><a href="#">معرفی هتل صبوری</a></li>--}}
                            {{--<li><a href="#">اتاق های هتل</a></li>--}}
                            {{--<li><a href="#">ارتباط با پشتیبانی</a></li>--}}
                            {{--<li><a href="#">گالری تصاویر</a></li>--}}


                        </ul>
                    </div>

                    <div class="col l6 l6 s12">


                        <div class="footer-sup">

                            <span>
                                {{__('layout.public.we are ready to serve you')}}
                            </span>

                            <img src="{{asset('images/telephone_num.png')}}">

                            @foreach($data['phone']->title as $t)
                                <span dir="ltr">{{$t}}</span>
                            @endforeach
                        </div>

                        <p class="center-on-small-only">
                            {{__('layout.public.hotel online reservation system is very safe online system')}}
                        </p>

                        <input type="text" placeholder="{{__('layout.public.check reservation place holder')}}"
                               class="col s10">

                        <button class="col l2 btn-send btn waves-effect waves-light" type="submit" name="action">
                            <i class="material-icons right">send</i>
                        </button>

                        <div class="col s12 l12 namad center">

                            {{--                            <img src="{{asset('images/samandehi-e.png')}}" class="responsive-img left">--}}
                            {{--                            <img src="{{asset('images/namad.png')}}" class="responsive-img left">--}}

                        </div>


                    </div>


                </div>

            </div>
        </div>

        <!--scripts-->
        <script type="text/javascript" src="{{asset('vendors/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('scripts/materialize.min.js')}}"></script>
        <script src="{{asset('scripts/jquery.slide.min.js')}}"></script>
        <script src="{{asset('scripts/init.js')}}"></script>
        <script>

            $(document).ready(function () {

                $(function () {
                    $('.slide').slide({

                        // auto play
                        isAutoSlide: true,

                        // pause on hover
                        isHoverStop: true,

                        // pause when window loses focus
                        isBlurStop: true,

                        // shows pagination bullets
                        isShowDots: false,

                        // shows navigation arrows
                        isShowArrow: true,

                        // shows navigation arrows on hover
                        isHoverShowArrow: true,

                        // load all images on load
                        isLoadAllImgs: false,

                        // sliding speed
                        slideSpeed: 4000,

                        // switching speed
                        switchSpeed: 500,

                        // click, mouseover or mouseenter
                        dotsEvent: 'click',

                        // default CSS classes
                        dotsClass: 'dots',
                        dotActiveClass: 'active',
                        arrowClass: 'arrow',
                        arrowLeftClass: 'arrow-left',
                        arrowRightClass: 'arrow-right'

                    });
                });


            });

            document.addEventListener('DOMContentLoaded', function () {
                var elems = document.querySelectorAll('.parallax');
                var instances = M.Parallax.init(elems, options);
            });

            // Or with jQuery

            $(document).ready(function () {
                $('.parallax').parallax();
            });


        </script>


        @yield('footer')

    </body>
</html>