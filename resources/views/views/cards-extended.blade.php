@extends('admin.layouts.admin')
@section('vendor-css')
    <link href="{{asset('app-assets/fonts/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('header')


@endsection

@section('main')

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0">Cards Extended</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="cards-extended.html#">Cards</a>
                                </li>
                                <li class="breadcrumb-item active">Cards Extended
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="cards-extended.html#!"><i
                                        class="material-icons hide-on-med-and-up">settings</i><span
                                        class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span
                                                class="new badge red">2</span></a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a>
                                </li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a>
                                </li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2"
                                                    href="user-login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!--Gradient Card-->
                    <div id="cards-extended">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="card-title">Gradient Card & Gradient Card With Analytics</h4>
                                <p>
                                    Here is the gradient card with flat image for all gradient classes please check
                                    <a href="css-color.html" target="_blank"> css-color.html</a>.
                                </p>
                                <div class="row">
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3">
                                            <div class="card-content center">
                                                <img alt="" class="width-40"
                                                     src="{{asset('app-assets/images/icon/apple-watch.png')}}"/>
                                                <h5 class="white-text lighten-4">50% Off</h5>
                                                <p class="white-text lighten-4">On apple watch</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3">
                                            <div class="card-content center">
                                                <img alt="" class="width-40"
                                                     src="{{asset('app-assets/images/icon/printer.png')}}"/>
                                                <h5 class="white-text lighten-4">20% Off</h5>
                                                <p class="white-text lighten-4">On Canon Printer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3">
                                            <div class="card-content center">
                                                <img alt="" class="width-40"
                                                     src="{{asset('app-assets/images/icon/laptop.png')}}"/>
                                                <h5 class="white-text lighten-4">40% Off</h5>
                                                <p class="white-text lighten-4">On apple macbook</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3">
                                            <div class="card-content center">
                                                <img alt="" class="width-40"
                                                     src="{{asset('app-assets/images/icon/bowling.png')}}"/>
                                                <h5 class="white-text lighten-4">60% Off</h5>
                                                <p class="white-text lighten-4">On any video game</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="gradient-Analytics">
                                    <div class="col s12 m6 l3 card-width">
                                        <div class="card gradient-45deg-deep-orange-orange gradient-shadow white-text padding-4 mt-5">
                                            <div class="col s7 m7">
                                                <i class="material-icons background-round mt-5 mb-5">add_shopping_cart</i>
                                                <p>Orders</p>
                                            </div>
                                            <div class="col s5 m5 right-align">
                                                <h5 class="mb-0 white-text">690</h5>
                                                <p class="no-margin">New</p>
                                                <p>6,00,00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 card-width">
                                        <div class="card gradient-45deg-blue-indigo gradient-shadow white-text padding-4 mt-5">
                                            <div class="col s7 m7">
                                                <i class="material-icons background-round mt-5 mb-5">perm_identity</i>
                                                <p>Clients</p>
                                            </div>
                                            <div class="col s5 m5 right-align">
                                                <h5 class="mb-0 white-text">1885</h5>
                                                <p class="no-margin">New</p>
                                                <p>1,12,900</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 card-width">
                                        <div class="card gradient-45deg-purple-deep-orange gradient-shadow white-text padding-4 mt-5">
                                            <div class="col s7 m7">
                                                <i class="material-icons background-round mt-5 mb-5">timeline</i>
                                                <p>Sales</p>
                                            </div>
                                            <div class="col s5 m5 right-align">
                                                <h5 class="mb-0 white-text">80%</h5>
                                                <p class="no-margin">Growth</p>
                                                <p>3,42,230</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 card-width">
                                        <div class="card gradient-45deg-purple-deep-purple gradient-shadow white-text padding-4 mt-5">
                                            <div class="col s7 m7">
                                                <i class="material-icons background-round mt-5 mb-5">attach_money</i>
                                                <p>Profit</p>
                                            </div>
                                            <div class="col s5 m5 right-align">
                                                <h5 class="mb-0 white-text">$890</h5>
                                                <p class="no-margin">Today</p>
                                                <p>$25,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider mt-2"></div>

                        <!-- Card With Analytics -->
                        <div class="section" id="card-with-analytics">
                            <h4 class="header">Card With Analytics</h4>
                            <div class="row">
                                <div class="col s12 m6 l3 card-width">
                                    <div class="card border-radius-6">
                                        <div class="card-content center-align">
                                            <i class="material-icons amber-text small-ico-bg mb-5">check</i>
                                            <h4 class="m-0"><b>21.5k</b></h4>
                                            <p>Total Views</p>
                                            <p class="green-text  mt-3"><i
                                                        class="material-icons vertical-align-middle">arrow_drop_up</i>
                                                119.71%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3 card-width">
                                    <div class="card border-radius-6">
                                        <div class="card-content center-align">
                                            <i class="material-icons amber-text small-ico-bg mb-5">sentiment_satisfied</i>
                                            <h4 class="m-0"><b>1.6k</b></h4>
                                            <p>Impressions</p>
                                            <p class="green-text  mt-3"><i
                                                        class="material-icons vertical-align-middle">arrow_drop_up</i>
                                                112.90%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3 card-width">
                                    <div class="card border-radius-6">
                                        <div class="card-content center-align">
                                            <i class="material-icons amber-text small-ico-bg mb-5">radio_button_unchecked</i>
                                            <h4 class="m-0"><b>890</b></h4>
                                            <p>Reach</p>
                                            <p class="red-text  mt-3"><i
                                                        class="material-icons vertical-align-middle">arrow_drop_down</i>
                                                24.4%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3 card-width">
                                    <div class="card border-radius-6">
                                        <div class="card-content center-align">
                                            <i class="material-icons amber-text small-ico-bg mb-5">favorite_border</i>
                                            <h4 class="m-0"><b>22.5%</b></h4>
                                            <p>Engagement Rate</p>
                                            <p class="green-text  mt-3"><i
                                                        class="material-icons vertical-align-middle">arrow_drop_up</i>
                                                112.43%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider mt-2"></div>

                        <!--Gradient Chart Card-->

                        <div class="section" id="card-gradient-chart">
                            <h4 class="header">Gradient Chart Card</h4>
                            <p>Here is the card with gradient line chart of ChartJS</p>

                            <div class="row">
                                <div class="col s12 m4 l4">
                                    <div class="card pt-0 pb-0" id="chartjs">
                                        <div class="padding-2 ml-2">
                                    <span class="new badge gradient-45deg-blue-indigo gradient-shadow mt-2 mr-2">+
                                          42.6%</span>
                                            <p class="mt-2 mb-0 font-weight-600">Members online</p>
                                            <p class="no-margin grey-text lighten-3">360 avg</p>
                                            <h5>3,450</h5>
                                        </div>
                                        <div class="row">
                                            <div class="sample-chart-wrapper card-gradient-chart">
                                                <canvas class="center" id="custom-line-chart-sample-one"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 l4">
                                    <div class="card pt-0 pb-0" id="chartjs2">
                                        <div class="padding-2 ml-2">
                                    <span class="new badge gradient-45deg-purple-deep-orange gradient-shadow mt-2 mr-2">+
                                          12%</span>
                                            <p class="mt-2 mb-0 font-weight-600">Current server load</p>
                                            <p class="no-margin grey-text lighten-3">23.1% avg</p>
                                            <h5>+2500</h5>
                                        </div>
                                        <div class="row">
                                            <div class="sample-chart-wrapper card-gradient-chart">
                                                <canvas class="center" id="custom-line-chart-sample-two"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 l4">
                                    <div class="card pt-0 pb-0" id="chartjs3">
                                        <div class="padding-2 ml-2">
                                    <span class="new badge gradient-45deg-deep-orange-orange gradient-shadow mt-2 mr-2">+
                                          $900</span>
                                            <p class="mt-2 mb-0 font-weight-600">Today's revenue</p>
                                            <p class="no-margin grey-text lighten-3">$40,512 avg</p>
                                            <h5>$ 22,300</h5>
                                        </div>
                                        <div class="row">
                                            <div class="sample-chart-wrapper card-gradient-chart">
                                                <canvas class="center" id="custom-line-chart-sample-three"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider mt-2"></div>

                        <!--Blog Card-->
                        <div class="section" id="card-panel-type">
                            <h4 class="header">Blog Card</h4>
                            <div class="row mt-2">
                                <div class="col s12 m6 l4 card-width">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <img alt=""
                                             class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                                             src="{{asset('app-assets/images/cards/news-fashion.jpg')}}"/>
                                        <h6><a class="mt-5" href="cards-extended.html#">Fashion</a></h6>
                                        <p>Fashion is a popular style, especially in clothing, footwear, lifestyle,
                                            accessories,
                                            makeup,
                                            hairstyle and
                                            body.</p>
                                        <div class="row mt-4">
                                            <div class="col s2">
                                                <a href="cards-extended.html#"><img
                                                            alt="" alt="fashion"
                                                            class="circle responsive-img mr-3"
                                                            src="{{asset('app-assets/images/user/9.jpg" width="40')}}"/></a>
                                            </div>
                                            <a href="cards-extended.html#">
                                                <div class="col s3 p-0 mt-1"><span class="pt-2">Taniya</span></div>
                                            </a>
                                            <div class="col s7 mt-1 right-align">
                                                <a href="cards-extended.html#"><span class="material-icons">favorite_border</span></a>
                                                <span class="ml-3 vertical-align-top">340</span>
                                                <a href="cards-extended.html#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
                                                <span class="ml-3 vertical-align-top">80</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 card-width">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <img alt=""
                                             class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                                             src="{{asset('app-assets/images/cards/news-apple.jpg')}}"/>
                                        <h6><a class="mt-5" href="cards-extended.html#">Apple News</a></h6>
                                        <p>More than 40% users have reported their new phones won't charge when
                                            plugged into
                                            lightning cables.</p>
                                        <div class="row mt-4">
                                            <div class="col s2">
                                                <a href="cards-extended.html#"><img
                                                            alt="" alt="news"
                                                            class="circle responsive-img mr-3"
                                                            src="{{asset('app-assets/images/user/1.jpg" width="40')}}"/></a>
                                            </div>
                                            <a href="cards-extended.html#">
                                                <div class="col s3 p-0 mt-1"><span class="pt-2">Mike</span></div>
                                            </a>
                                            <div class="col s7 mt-1 right-align">
                                                <a href="cards-extended.html#"><span class="material-icons">favorite_border</span></a>
                                                <span class="ml-3 vertical-align-top">434</span>
                                                <a href="cards-extended.html#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
                                                <span class="ml-3 vertical-align-top">34</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 card-width">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <img alt=""
                                             class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                                             src="{{asset('app-assets/images/cards/news-twitter.jpg')}}"/>
                                        <h6><a class="mt-5" href="cards-extended.html#">Twitter Brings Its 'Data
                                                Saver'</a></h6>
                                        <p>Microblogging site Twitter has rolled out its latest update for Android
                                            and iOS users
                                            with the "data
                                            saver"
                                            twitter.
                                        </p>
                                        <div class="row mt-4">
                                            <div class="col s2">
                                                <a href="cards-extended.html#"><img
                                                            alt="" alt="news"
                                                            class="circle responsive-img mr-3"
                                                            src="{{asset('app-assets/images/user/8.jpg" width="40')}}"/></a>
                                            </div>
                                            <a href="cards-extended.html#">
                                                <div class="col s3 p-0 mt-1"><span class="pt-2">Emma</span></div>
                                            </a>
                                            <div class="col s7 mt-1 right-align">
                                                <a href="cards-extended.html#"><span class="material-icons">favorite_border</span></a>
                                                <span class="ml-3 vertical-align-top">234</span>
                                                <a href="cards-extended.html#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
                                                <span class="ml-3 vertical-align-top">45</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider mt-8"></div>

                        <!--Social Card-->
                        <div class="section" id="card-panel-type1">
                            <h4 class="header">Social Card</h4>
                            <div class="row">
                                <div class="col s12 m6 l4 card-width">
                                    <div class="card card-border center-align gradient-45deg-indigo-purple">
                                        <div class="card-content white-text">
                                            <div class="col s12"><i class="material-icons right">favorite</i></div>
                                            <img alt="" class="responsive-img circle z-depth-4"
                                                 src="{{asset('app-assets/images/user/6.jpg')}}"
                                                 width="100"/>
                                            <h5 class="white-text mb-1">Beverly Little</h5>
                                            <p class="m-0">Senior Product Designer</p>
                                            <p class="mt-8">
                                                Creative usable interface & <br/>
                                                designer @Clevision
                                            </p>
                                            <a class="waves-effect waves-light btn gradient-45deg-deep-orange-orange border-round mt-7 z-depth-4">Hire
                                                Me</a>
                                            <div class="row mt-5">
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="gradient-45deg-indigo-light-blue icon-background circle white-text z-depth-3">
                                                        <i class="fab fa-behance"></i>
                                                    </h5>
                                                    <p class="white-text"><b>12.8k</b></p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="icon-background circle gradient-45deg-indigo-blue white-text z-depth-3">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </h5>
                                                    <p class="white-text"><b>10.1k</b></p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="icon-background circle gradient-45deg-red-pink white-text z-depth-3">
                                                        <i class="fab fa-pinterest-p"></i>
                                                    </h5>
                                                    <p class="white-text"><b>8.23k</b></p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 card-width">
                                    <div class="card card-border center-align gradient-45deg-purple-deep-orange">
                                        <div class="card-content white-text">
                                            <div class="col s12"><i class="material-icons right">favorite</i></div>
                                            <img alt="" class="responsive-img circle z-depth-4"
                                                 src="{{asset('app-assets/images/user/2.jpg')}}"
                                                 width="100"/>
                                            <h5 class="white-text mb-1">Frank Goodman</h5>
                                            <p class="m-0">Senior Developer</p>
                                            <p class="mt-8">
                                                Creative usable interface & <br/>
                                                developer @Clevision
                                            </p>
                                            <a class="waves-effect waves-light btn gradient-45deg-green-teal border-round mt-7 z-depth-4">Hire
                                                Me</a>
                                            <div class="row mt-5">
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="gradient-45deg-indigo-light-blue icon-background circle white-text z-depth-3">
                                                        <i class="fab fa-behance"></i>
                                                    </h5>
                                                    <p class="white-text">12.8k</p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="icon-background circle gradient-45deg-indigo-blue white-text z-depth-3">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </h5>
                                                    <p class="white-text">10.1k</p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="icon-background circle gradient-45deg-red-pink white-text z-depth-3">
                                                        <i class="fab fa-pinterest-p"></i>
                                                    </h5>
                                                    <p class="white-text">8.23k</p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4 card-width">
                                    <div class="card card-border center-align gradient-45deg-indigo-purple">
                                        <div class="card-content white-text">
                                            <div class="col s12"><i class="material-icons right">favorite</i></div>
                                            <img alt="" class="responsive-img circle z-depth-4"
                                                 src="{{asset('app-assets/images/user/8.jpg')}}"
                                                 width="100"/>
                                            <h5 class="white-text mb-1">Luiza Ales</h5>
                                            <p class="m-0">Graphic Designer</p>
                                            <p class="mt-8">
                                                Creative usable interface & <br/>
                                                designer @Clevision
                                            </p>
                                            <a class="waves-effect waves-light btn gradient-45deg-deep-orange-orange border-round mt-7 z-depth-4">Hire
                                                Me</a>
                                            <div class="row mt-5">
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="gradient-45deg-indigo-light-blue icon-background circle white-text z-depth-3">
                                                        <i class="fab fa-behance"></i>
                                                    </h5>
                                                    <p class="white-text">12.8k</p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="icon-background circle gradient-45deg-indigo-blue white-text z-depth-3">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </h5>
                                                    <p class="white-text">10.1k</p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                                <a class="col s4" href="cards-extended.html#">
                                                    <h5 class="icon-background circle gradient-45deg-red-pink white-text z-depth-3">
                                                        <i class="fab fa-pinterest-p"></i>
                                                    </h5>
                                                    <p class="white-text">8.23k</p>
                                                    <p class="white-text">Followers</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider mt-2"></div>

                        <!--Flat Card With Redio & chips-->
                        <div class="section" id="card-with-radio-chips">
                            <h4 class="header">Card With Radio & Chips</h4>
                            <div class="row">
                                <div class="col s12 m6 l4">
                                    <div class="card deep-purple">
                                        <div class="card-content white-text right-align pr-0">
                                            <span class="card-title position-absolute">Video</span>
                                            <img alt="" alt=""
                                                 class="responsive-img"
                                                 src="{{asset('app-assets/images/cards/camara.png')}}"/>
                                        </div>
                                        <div class="card-action pt-0">
                                            <p class="white-text">Default Quality</p>
                                            <div class="chip">720p <i class="close material-icons">close</i></div>
                                            <div class="chip">1080p <i class="close material-icons">close</i></div>
                                        </div>
                                        <div class="card-action pt-0">
                                            <p class="white-text">Save Video Quality</p>
                                            <div class="switch">
                                                <label> Off <input type="checkbox"/> <span class="lever"></span> On
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4">
                                    <div class="card red darken-2">
                                        <div class="card-content white-text right-align pr-0">
                                            <span class="card-title position-absolute">Music</span>
                                            <img alt="" alt=""
                                                 class="responsive-img"
                                                 src="{{asset('app-assets/images/cards/headphones.png')}}"/>
                                        </div>
                                        <div class="card-action pt-0">
                                            <p class="white-text">Default Quality</p>
                                            <div class="chip">192kb <i class="close material-icons">close</i></div>
                                            <div class="chip">320kb <i class="close material-icons">close</i></div>
                                        </div>
                                        <div class="card-action pt-0">
                                            <p class="white-text">Save Video Quality</p>
                                            <div class="switch">
                                                <label> Off <input type="checkbox"/> <span class="lever"></span> On
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4">
                                    <div class="card black">
                                        <div class="card-content white-text right-align pr-0">
                                            <span class="card-title position-absolute">iPad</span> <img alt=""
                                                                                                        alt=""
                                                                                                        class="responsive-img"
                                                                                                        src="{{asset('app-assets/images/cards/ipad.png')}}"/>
                                        </div>
                                        <div class="card-action pt-0">
                                            <p class="white-text">Storage</p>
                                            <div class="chip">64gb <i class="close material-icons">close</i></div>
                                            <div class="chip">128gb <i class="close material-icons">close</i></div>
                                        </div>
                                        <div class="card-action pt-0">
                                            <p class="white-text">Color</p>
                                            <div class="switch">
                                                <label> Glod <input type="checkbox"/> <span class="lever"></span>
                                                    Black
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider mt-2"></div>

                        <!--E-commerce Card-->
                        <div class="section" id="image-card">
                            <h4 class="header">E-commerce Card</h4>
                            <p>Here is the standard card with an image thumbnail.</p>
                            <div class="row">
                                <div class="col s12 m4">
                                    <div class="card gradient-45deg-light-blue-cyan">
                                        <div class="card-content white-text center">
                                            <h6 class="card-title font-weight-400">Apple Watch</h6>
                                            <img alt="" alt="" class="responsive-img"
                                                 src="{{asset('app-assets/images/cards/watch.png')}}"/>
                                            <p>
                                                The Apple Watch, <br/>
                                                all time witch will suit any time
                                            </p>
                                        </div>
                                        <div class="card-action border-non center">
                                            <a class="waves-effect waves-light btn gradient-45deg-red-pink box-shadow">$
                                                299/-</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card blue-grey darken-4">
                                        <div class="card-content white-text center">
                                            <span class="card-title blue-grey-text lighten-4 font-weight-400">The Asics Shoes</span>
                                            <img alt="" alt="" class="responsive-img"
                                                 src="{{asset('app-assets/images/cards/shoes.png')}}"/>
                                            <p class="blue-grey-text lighten-4">
                                                Buy White Shoes for Men <br/>
                                                online Huge selection of White Men
                                            </p>
                                        </div>
                                        <div class="card-action border-non center">
                                            <a class="waves-effect waves-light btn gradient-45deg-cyan-light-green black-text">$
                                                159/-</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card gradient-45deg-red-pink">
                                        <div class="card-content white-text center">
                                            <h6 class="card-title font-weight-400">iPhone</h6>
                                            <img alt="" alt="" class="responsive-img"
                                                 src="{{asset('app-assets/images/cards/iphonec.png')}}"/>
                                            <p>
                                                The Apple iPhone, <br/>
                                                all time witch will suit any time
                                            </p>
                                        </div>
                                        <div class="card-action border-non center">
                                            <a class="waves-effect waves-light btn gradient-45deg-blue-indigo box-shadow">$
                                                299/-</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m4">
                                    <div class="card blue-grey darken-4 bg-image-1">
                                        <div class="card-content white-text">
                                            <span class="card-title font-weight-400 mb-10">Macbook Pro</span>
                                            <p>
                                                Buy Macbook <br/>
                                                online Huge selection of Apple
                                            </p>
                                            <div class="border-non mt-5">
                                                <a class="waves-effect waves-light btn red border-round box-shadow">$
                                                    1,249/-</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card blue-grey darken-4 bg-image-2">
                                        <div class="card-content white-text">
                                            <span class="card-title font-weight-400 mb-10">iPhone 8</span>
                                            <p>
                                                Buy iPhone <br/>
                                                online Huge selection of Apple
                                            </p>
                                            <div class="border-non mt-5">
                                                <a class="waves-effect waves-light btn red border-round box-shadow">$
                                                    769/-</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="black-overlay">
                                        <div class="card bg-image-3">
                                            <div class="card-content white-text">
                                                <span class="card-title font-weight-400 mb-10">Apple Watch</span>
                                                <p>
                                                    Buy Watch <br/>
                                                    online Huge selection of Apple
                                                </p>
                                                <div class="border-non mt-5">
                                                    <a class="waves-effect waves-light btn red border-round box-shadow">$
                                                        269/-</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider mt-2"></div>

                        <!--Food Card-->
                        <div class="section" id="card-panel-type2">
                            <h4 class="header">Shoes Card</h4>
                            <p>For a simpler card with less markup, try using a card panel which just has padding
                                and a shadow effect</p>
                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="card">
                                        <div class="card-content center yellow">
                                            <h6 class="card-title font-weight-400">Order Online</h6>
                                            <p>Best Sport Shoes in the world</p>
                                            <a class="waves-effect waves-light btn red fixed-margin mt-3">Order
                                                Now</a>
                                        </div>
                                        <div class="card-tabs">
                                            <ul class="tabs tabs-fixed-width">
                                                <li class="tab"><a href="cards-extended.html#test4">Nike</a></li>
                                                <li class="tab"><a class="active" href="cards-extended.html#test5">Puma</a>
                                                </li>
                                                <li class="tab"><a href="cards-extended.html#test6">Reebok</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-content">
                                            <div class="center" id="test4"><img
                                                        alt=""
                                                        src="{{asset('app-assets/images/cards/nike.png')}}"/></div>
                                            <div class="center" id="test5"><img
                                                        alt=""
                                                        src="{{asset('app-assets/images/cards/puma.png')}}"/></div>
                                            <div class="center" id="test6"><img
                                                        alt=""
                                                        src="{{asset('app-assets/images/cards/reebok.png')}}"/></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div class="slide-out-right-sidenav sidenav rightside-navigation" id="slide-out-right">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a
                                                            class="sidenav-close" href="cards-extended.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="cards-extended.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="cards-extended.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="cards-extended.html#activity">
                                                            <span>Activity</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body">
                                    <div class="col s12" id="messages">
                                        <div class="collection border-none">
                                            <input class="header-search-input mt-4 mb-2" name="Search" placeholder="Search Messages"
                                                   type="text"/>
                                            <ul class="collection p-0">
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-1.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Mary Adams</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-2.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-3.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Keny !</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.00 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-4.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">June Lane</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Ohh God</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-5.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Edward Fletcher</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Love you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.15 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-6.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Crystal Bates</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Can we</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Nathan Watts</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Great!</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.53 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-8.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Willard Wood</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Do it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.20 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-1.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Ronnie Ellis</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Got that</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.20 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-9.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Daniel Russell</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-10.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Sarah Graves</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Okay you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11.14 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-11.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Andrew Hoffman</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Can do</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7.30 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-12.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Camila Lynch</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Leave it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2.00 PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12" id="settings">
                                        <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show Task statistics</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show your emails</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Email Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>System Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Error Reporting</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Applications Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Backup Servers</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Audit Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col s12" id="activity">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Homepage mockup design <span class="secondary-content">Just now</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                    <span class="new badge amber"
                                                          data-badge-caption="Important"> </span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Melissa liked your activity Drinks. <span
                                                                class="secondary-content">10 mins</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge light-green"
                                                          data-badge-caption="Resolved"></span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        12 new users registered <span class="secondary-content">30 mins</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Tina is attending your activity <span
                                                                class="secondary-content">2 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Josh is now following you <span class="secondary-content">5 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge red" data-badge-caption="Pending"></span>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        New order received urgent <span class="secondary-content">Just now</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">System shutdown. <span
                                                                class="secondary-content">5 min</span></div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge blue"
                                                          data-badge-caption="Urgent"> </span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Database overloaded 89% <span class="secondary-content">20 min</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">System error <span
                                                                class="secondary-content">10 min</span></div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Production server down. <span class="secondary-content">1 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge blue" data-badge-caption="Urgent"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul class="sidenav slide-out-right-sidenav-chat" id="slide-out-chat">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="cards-extended.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
                                    Elliott</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">hello!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">How can we help? We're here for you!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I am looking for the best admin template.?</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Materialize admin is the responsive
                                                materializecss admin template.</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! very nice</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">How can I purchase it?</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">From ThemeForest.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Only $24</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I will purchase it for sure.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Great, Feel free to get in touch on</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form action="javascript:void(0);" class="col s12" onsubmit="slide_out_chat()">
                                    <div class="input-field">
                                        <input class="search" id="icon_prefix" type="text"/>
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <!-- END RIGHT SIDEBAR NAV -->
                    <div class="fixed-action-btn direction-top" style="bottom: 50px; right: 19px;"><a
                                class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i
                                    class="material-icons">add</i></a>
                        <ul>
                            <li><a class="btn-floating blue" href="css-helpers.html"><i class="material-icons">help_outline</i></a>
                            </li>
                            <li><a class="btn-floating green" href="cards-extended.html"><i class="material-icons">widgets</i></a>
                            </li>
                            <li><a class="btn-floating amber" href="app-calendar.html"><i class="material-icons">today</i></a>
                            </li>
                            <li><a class="btn-floating red" href="app-email.html"><i class="material-icons">mail_outline</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('vendor-js')
    <script src="{{asset('app-assets/vendors/chartist-js/chartist.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/chartjs/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/fonts/fontawesome/js/all.min.js')}}" type="text/javascript"></script>

@endsection

@section('footer')
    <script src="{{asset('app-assets/js/scripts/cards-extended.js')}}" type="text/javascript"></script>

@endsection

