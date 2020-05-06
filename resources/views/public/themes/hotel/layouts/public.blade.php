<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="UTF-8">
        <title>{{$website['title']->title}}</title>

        <meta name="description"
              content="{{ isset($website['meta-description']->title) ?  $website['meta-description']->title : '' }}">
        <meta name="keywords"
              content="{{ isset($website['meta-keywords']->title) ?  $website['meta-keywords']->title : '' }}">

        <link rel="canonical" href="{{url('/')}}"/>

        <meta name="robots" content="index,follow">
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

        {{--        <script src="https://cdn.jsdelivr.net/npm/vue"></script>--}}
        <script src="{{asset('vendors/vue/dist/vue.js')}}"></script>
        {{--        <script src="https://cdn.jsdelivr.net/npm/moment"></script>--}}
        <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('vendors/moment-jalaali/build/moment-jalaali.js')}}"></script>
        <script src="{{asset('vendors/vue-persian-datetime-picker-master/dist/vue-persian-datetime-picker-browser.js')}}"></script>


        @yield('header')

    </head>
    <body class="rtl">


        <nav class="headerm" role="navigation">
            <div class="nav-wrapper container">

                <a id="logo-container" href="{{route('home.index2')}}" class="brand-logo center logo-bg">
                    <img class="responsive-img img-logo" src="{{asset('images/main_logo.png')}}">
                </a>


                <div class="mini-phone-left-side hide-on-med-and-down">

                    @foreach($hotel['mobile']->title as $t)
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


                    <span style="margin-left: 100px;margin-right: 100px;" class="hide-on-med-and-down">
                        @if(isset($website['telegram-link']->title) and !is_null($website['telegram-link']->title) and trim($website['telegram-link']->title) != '' )
                            <a href="{{$website['telegram-link']->title}}">
                            <img class=" responsive-img img-flag" src="{{asset('images/telegram-512.png')}}">
                        </a>
                        @endif
                        @if(isset($website['instagram-link']->title) and !is_null($website['instagram-link']->title) and trim($website['instagram-link']->title) != '' )
                            <a href="{{$website['instagram-link']->title}}">
                            <img class=" responsive-img img-flag" src="{{asset('images/instagram-512.png')}}">
                        </a>
                        @endif
                    </span>
                </div>


                <a href="#" data-target="mobile-demo" class="sidenav-trigger hide-on-large-only right"><i
                            class="material-icons">menu</i></a>


            </div>


        </nav>

        <ul class="sidenav" id="mobile-demo">

            @foreach($mobile_navigations as $navigation)
                @if(isset($navigation->properties->key) and  isset($navigation->properties->value) )
                    <li>
                        <a href="{{route($navigation->properties->route, [$navigation->properties->key=>$navigation->properties->value])}}">
                            {{$navigation->properties->title}}

                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{route($navigation->properties->route)}}">
                            {{$navigation->properties->title}}

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
                                <span>
                                    {{__('layout.public.logout')}}
                                </span>
                            </a>
                            <img class="icon10 responsive-img"
                                 src="{{asset('images/login-square-arrow-button-outline.png')}}">
                        @endif

                        <a href="#" hidden>
                            <span class="track-booking-span">
                                {{__('layout.public.check reservation')}}
                            </span>
                        </a>
                        <img hidden class="icon10 responsive-img" src="{{asset('images/verified.png')}}">


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
                                        {{$navigation->properties->title}}

                                    </a>
                                    <br>
                                    <span>
                                        {{$navigation->properties->title}}
</span>
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
                                        {{$navigation->properties->title}}
                                    </a>
                                    <br>
                                    <span>
                                        {{$navigation->properties->title}}
</span>
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
                        <h5>{{__('layout.public.hotel sabouri facilities')}}</h5>
                        <ul>

                            @foreach($facility_links as $facility_link )
                                @if(isset($facility_link ->properties->key) and  isset($facility_link ->properties->value) )
                                    <li>
                                        <a href="{{route($facility_link ->properties->route, [$facility_link ->properties->key=>$facility_link ->properties->value])}}">
                                            {{$facility_link->properties->title}}

                                        </a>
                                    </li>
                                @else

                                    <li>
                                        <a href="{{route($facility_link ->properties->route)}}">
                                            {{$facility_link->properties->title}}
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
                        <h5>{{__('layout.public.useful links')}}</h5>
                        <ul>

                            @foreach($useful_links as $useful_link )
                                @if(isset($useful_link->properties->key) and  isset($useful_link->properties->value) )
                                    <li>
                                        <a href="{{route($useful_link->properties->route, [$useful_link->properties->key=>$useful_link->properties->value])}}">
                                            {{$useful_link->properties->title}}
                                        </a>
                                    </li>
                                @else

                                    <li>
                                        <a href="{{route($useful_link->properties->route)}}">
                                            {{$useful_link->properties->title}}
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

                            @foreach($hotel['phone']->title as $t)
                                <span dir="ltr">{{$t}}</span>
                            @endforeach
                        </div>

                        <p class="center-on-small-only">
                            {{__('layout.public.hotel online reservation system is very safe online system')}}
                        </p>


                        <form method="get" action="{{route('home.track')}}">
                            <input name="code" type="text"
                                   placeholder="{{__('layout.public.check reservation place holder')}}"
                                   class="col s10">

                            <button class="col s2 btn-send btn waves-effect waves-light" type="submit" name="action">
                                <i class="material-icons right" style="transform: scaleX(-1)">send</i>
                            </button>
                        </form>

                        <div class="col s12 l12 namad center" id="namad">
                            @if( isset($website['enamad']->title))
                                {!! $website['enamad']->title !!}
                            @endif
                            @if( isset($website['samandehi']->title))
                                {!! $website['samandehi']->title !!}
                            @endif
                            {{--                            <a href="#"><img src="{{asset('images/samandehi-e.png')}}" class="responsive-img left"></a>--}}
                            {{--                            <a href="#"><img src="{{asset('images/namad.png')}}" class="responsive-img left"></a>--}}

                        </div>


                    </div>


                </div>

            </div>
        </div>


    {{--        <script type="text/javascript">!function(){function t(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,localStorage.getItem("rayToken")?t.src="https://app.raychat.io/scripts/js/"+o+"?rid="+localStorage.getItem("rayToken")+"&href="+window.location.href:t.src="https://app.raychat.io/scripts/js/"+o;var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}var e=document,a=window,o="629d6450-a954-425f-966f-9699993b5304";"complete"==e.readyState?t():a.attachEvent?a.attachEvent("onload",t):a.addEventListener("load",t,!1)}();</script>--}}


    {{--                <script type="text/javascript">--}}
    {{--                    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();--}}
    {{--                    (function () {--}}
    {{--                        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];--}}
    {{--                        s1.async = true;--}}
    {{--                        s1.src = 'https://embed.tawk.to/5cea6742a667a0210d597b7b/default';--}}
    {{--                        s1.charset = 'UTF-8';--}}
    {{--                        s1.setAttribute('crossorigin', '*');--}}
    {{--                        s0.parentNode.insertBefore(s1, s0);--}}
    {{--                    })();--}}
    {{--                </script>--}}

    @if( isset($website['active-chat-system']->title) && $website['active-chat-system']->title == 1)
        @foreach($chats as $chat)
            @if($chat->properties['active']->title == 1)
                {!! $chat->properties['code']->title !!}
                @break
            @endif
        @endforeach
    @endif
    {{--    @if( isset($website['chat-system']->title))--}}
    {{--        {!! $website['chat-system']->title !!}--}}
    {{--    @endif--}}


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

        <script language=Javascript>
            function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;

                return true;
            }
        </script>


        @include('public.themes.hotel.scripts.mapbox')

        @yield('footer')

    </body>
</html>