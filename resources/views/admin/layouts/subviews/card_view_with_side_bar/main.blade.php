<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0">eCommerce Products Page</h5>
                        <ol class="breadcrumbs mb-0">
                            @foreach($breadcrumbs  as $breadcrumb)
                                <li class="breadcrumb-item">
                                    @if($breadcrumb['url'] != '')
                                        <a href="{{$breadcrumb['url']}}">
                                            {{$breadcrumb['title']}}
                                        </a>
                                    @else
                                        {{$breadcrumb['title']}}
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="col s12">
            <div class="container">
                <div class="section">


                    <div class="card">
                        <div class="card-content">
                            <p class="caption mb-0">Masonry with Magnific Popup is a responsive lightbox &
                                dialog script with focus on
                                performance and providing best experience for user with any device</p>
                        </div>
                    </div>


                    <div class="row" id="ecommerce-products">
                        <div class="col s12 m3 l3 pr-0 hide-on-med-and-down animate fadeLeft">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">Categories</span>
                                    <hr class="p-0 mb-10">
                                    <ul class="collapsible categories-collapsible">
                                        <li>
                                            <div class="collapsible-header">Watches <i class="material-icons">
                                                    keyboard_arrow_right </i></div>
                                            <div class="collapsible-body">
                                                <p>Apple</p>
                                                <p>Fitbit</p>
                                                <p>Samsung</p>
                                                <p>Fastrack</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Tablets <i class="material-icons">
                                                    keyboard_arrow_right </i></div>
                                            <div class="collapsible-body">
                                                <p>Apple</p>
                                                <p>Samsung</p>
                                                <p>Lenovo</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Laptops <i class="material-icons">
                                                    keyboard_arrow_right </i></div>
                                            <div class="collapsible-body">
                                                <p>Apple</p>
                                                <p>Samsung</p>
                                                <p>Lenovo</p>
                                                <p>HP</p>
                                                <p>Dell</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Phone <i class="material-icons">
                                                    keyboard_arrow_right </i></div>
                                            <div class="collapsible-body">
                                                <p>Apple</p>
                                                <p>Samsung</p>
                                                <p>Lenovo</p>
                                                <p>Mi</p>
                                                <p>Nokia</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <span class="card-title mt-10">Price</span>
                                    <hr class="p-0 mb-10">
                                    <div id="price-slider"></div>
                                    <span class="card-title mt-10">Size</span>
                                    <hr class="p-0 mb-10">
                                    <div class="size-filter">
                                        <ul>
                                            <li><a href="eCommerce-products-page.html#">XL</a></li>
                                            <li><a href="eCommerce-products-page.html#">L</a></li>
                                            <li class="active"><a href="eCommerce-products-page.html#">M</a>
                                            </li>
                                            <li><a href="eCommerce-products-page.html#">S</a></li>
                                            <li><a href="eCommerce-products-page.html#">XS</a></li>
                                        </ul>
                                    </div>
                                    <span class="card-title mt-10">Color</span>
                                    <hr class="p-0 mb-10">
                                    <form action="eCommerce-products-page.html#" class="display-grid">
                                        <label class="mt-3">
                                            <input type="checkbox"/>
                                            <span><i
                                                        class="material-icons vertical-align-bottom blue-grey-text text-lighten-5"> lens </i> White</span>
                                        </label>
                                        <label class="mt-3">
                                            <input type="checkbox"/>
                                            <span><i class="material-icons vertical-align-bottom black-text"> lens </i> Black</span>
                                        </label>
                                        <label class="mt-3">
                                            <input type="checkbox"/>
                                            <span><i class="material-icons vertical-align-bottom amber-text"> lens </i> Amber</span>
                                        </label>
                                        <label class="mt-3">
                                            <input type="checkbox"/>
                                            <span><i class="material-icons vertical-align-bottom blue-text"> lens </i> Blue</span>
                                        </label>
                                        <label class="mt-3">
                                            <input type="checkbox"/>
                                            <span><i class="material-icons vertical-align-bottom green-text"> lens </i> Green</span>
                                        </label>
                                        <label class="mt-3">
                                            <input type="checkbox"/>
                                            <span><i class="material-icons vertical-align-bottom link-text"> lens </i> Pink</span>
                                        </label>
                                        <label class="mt-3">
                                            <input type="checkbox"/>
                                            <span><i class="material-icons vertical-align-bottom yellow-text"> lens </i> Yellow</span>
                                        </label>
                                    </form>
                                    <span class="card-title mt-10">Brand</span>
                                    <hr class="p-0 mb-10">
                                    <form action="eCommerce-products-page.html#" class="display-grid">
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Apple</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Samsung</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Dell</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Sony</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Nokia</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>JBL</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Philips</span>
                                        </label>
                                    </form>
                                    <span class="card-title mt-10">Offers</span>
                                    <hr class="p-0 mb-10">
                                    <form action="eCommerce-products-page.html#" class="display-grid">
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Offer</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>No Cost EMI</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Special Price</span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>Bank Offer</span>
                                        </label>
                                    </form>
                                    <span class="card-title mt-10">Customer Ratings</span>
                                    <hr class="p-0 mb-10">
                                    <form action="eCommerce-products-page.html#" class="display-grid">
                                        <label>
                                            <input type="checkbox"/>
                                            <span>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
              </span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
              </span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
              </span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>
                <i class="material-icons amber-text"> star </i>
                <i class="material-icons amber-text"> star </i>
              </span>
                                        </label>
                                        <label>
                                            <input type="checkbox"/>
                                            <span>
                <i class="material-icons amber-text"> star </i>
              </span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m12 l9">


                            {{--                            <div class="col s12 m6 l6">--}}
                            {{--                                <div class="card horizontal border-radius-6">--}}
                            {{--                                    <div class="card-image">--}}
                            {{--                                        <a href="page-blog-list.html#"><img alt=""--}}
                            {{--                                                                            class="responsive-img image-n-margin"--}}
                            {{--                                                                            src="{{asset('app-assets/images/cards/horizontal-news-1.jpg')}}"></a>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="card-stacked">--}}
                            {{--                                        <div class="card-content pl-7 pt-7 pr-7 pb-7">--}}
                            {{--                                            <p class="mb-4">It’s 2018, and the race is on between tech giants to--}}
                            {{--                                                decide who will control...</p>--}}
                            {{--                                            <a href="page-blog-list.html#">Read More</a>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="card-action pt-4 pb-3">--}}
                            {{--                                            <div class="row social-icon">--}}
                            {{--                                                <span class="material-icons ml-3">favorite_border</span> <span--}}
                            {{--                                                        class="ml-3 vertical-align-top">809</span>--}}
                            {{--                                                <span class="material-icons ml-10">chat_bubble_outline</span> <span--}}
                            {{--                                                        class="ml-3 vertical-align-top">409</span>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="col s12 m6 l6">--}}
                            {{--                                <div class="card horizontal border-radius-6">--}}
                            {{--                                    <div class="card-image">--}}
                            {{--                                        <a href="page-blog-list.html#"><img alt=""--}}
                            {{--                                                                            class="responsive-img image-n-margin"--}}
                            {{--                                                                            src="{{asset('app-assets/images/cards/horizontal-news-1.jpg')}}"></a>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="card-stacked">--}}
                            {{--                                        <div class="card-content pl-7 pt-7 pr-7 pb-7">--}}
                            {{--                                            <p class="mb-4">It’s 2018, and the race is on between tech giants to--}}
                            {{--                                                decide who will control...</p>--}}
                            {{--                                            <a href="page-blog-list.html#">Read More</a>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="card-action pt-4 pb-3">--}}
                            {{--                                            <div class="row social-icon">--}}
                            {{--                                                <span class="material-icons ml-3">favorite_border</span> <span--}}
                            {{--                                                        class="ml-3 vertical-align-top">809</span>--}}
                            {{--                                                <span class="material-icons ml-10">chat_bubble_outline</span> <span--}}
                            {{--                                                        class="ml-3 vertical-align-top">409</span>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                            @foreach($datas as $data)


                                <div class="col s12 m4 l4">
                                    <div class="card animate fadeLeft">
                                        <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                                        <div class="card-content">
                                            <p>Smartwatches</p>
                                            <span class="card-title text-ellipsis">Smartwatch 2.0 LTE Wifi</span>
                                            <img alt=""
                                                 class="responsive-img"
                                                 src="{{asset('app-assets/images/cards/watch-2.png')}}">
                                            <div class="row">
                                                <h5 class="col s12 m12 l8 mt-3">$399.00</h5>
                                                <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger"
                                                   href="#modal1">View</a>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Modal Structure -->
                                    <div class="modal" id="modal1">
                                        <div class="modal-content pt-2">
                                            <div class="row" id="product-one">
                                                <div class="col s12">
                                                    <a class="modal-close right"><i class="material-icons">close</i></a>
                                                </div>
                                                <div class="col m6">
                                                    <img alt=""
                                                         class="responsive-img"
                                                         src="{{asset('app-assets/images/cards/watch-2.png')}}">
                                                </div>
                                                <div class="col m6">
                                                    <p>Smartwatches</p>
                                                    <h5>Smartwatch 2.0 LTE Wifi</h5>
                                                    <span class="new badge left ml-0 mr-2"
                                                          data-badge-caption="">4.2 Star</span>
                                                    <p>Availability: <span
                                                                class="green-text">36 Item Available</span></p>
                                                    <hr class="mb-5">
                                                    <span class="vertical-align-top mr-4"><i
                                                                class="material-icons mr-3">favorite_border</i>Wishlist</span>
                                                    <p class="mt-3">- Accept SIM card and call</p>
                                                    <p>- Make calling instead of mobile phone</p>
                                                    <p>- Sync music play and sync control music</p>
                                                    <p>- Sync Facebook,Twiter,emailand calendar</p>
                                                    <h5>$399.00 <span class="prise-text-style ml-2">$459.00</span>
                                                    </h5>
                                                    <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD
                                                        TO CART</a>
                                                    <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY
                                                        NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        @endforeach


                        <!-- Pagination -->
                            <div class="col s12 center">
                                <ul class="pagination">
                                    <li class="disabled">
                                        <a href="#">
                                            <i class="material-icons">chevron_left</i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a>
                                    </li>
                                    <li class="waves-effect"><a href="#">2</a>
                                    </li>
                                    <li class="waves-effect"><a href="#">3</a>
                                    </li>
                                    <li class="waves-effect"><a href="#">4</a>
                                    </li>
                                    <li class="waves-effect"><a href="#">5</a>
                                    </li>
                                    <li class="waves-effect">
                                        <a href="#">
                                            <i class="material-icons">chevron_right</i>
                                        </a>
                                    </li>
                                </ul>
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
                                                        class="sidenav-close"
                                                        href="eCommerce-products-page.html#">clear</a></i>
                                        </div>
                                        <div class="col s10 pl-0">
                                            <ul class="tabs">
                                                <li class="tab col s4 p-0">
                                                    <a class="active"
                                                       href="eCommerce-products-page.html#messages">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="eCommerce-products-page.html#settings">
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="eCommerce-products-page.html#activity">
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
                                        <input class="header-search-input mt-4 mb-2" name="Search"
                                               placeholder="Search Messages"
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
                                                    Homepage mockup design <span
                                                            class="secondary-content">Just now</span>
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
                                                    12 new users registered <span
                                                            class="secondary-content">30 mins</span>
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
                                                    Josh is now following you <span
                                                            class="secondary-content">5 hrs</span>
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
                                                    New order received urgent <span
                                                            class="secondary-content">Just now</span>
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
                                                    Database overloaded 89% <span
                                                            class="secondary-content">20 min</span>
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
                            <a href="eCommerce-products-page.html#!"><i
                                        class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                        </li>
                        <li class="chat-body">
                            <ul class="collection">
                                <li class="collection-item display-flex avatar pl-5 pb-0"
                                    data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50">
                   <img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
               <span class="avatar-status avatar-online avatar-50">
                   <img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
               <span class="avatar-status avatar-online avatar-50">
                   <img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
               <span class="avatar-status avatar-online avatar-50">
                   <img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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
               <span class="avatar-status avatar-online avatar-50">
                   <img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">Ohh! Thank you.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0"
                                    data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50">
                   <img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
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

                <div class="fixed-action-btn direction-top" style="bottom: 54px; left: 19px;">
                    <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger"
                       href="#">
                        <i class="material-icons">person_add</i>
                    </a>
                </div>

                <!-- END RIGHT SIDEBAR NAV -->
                {{--                <div class="fixed-action-btn direction-top" style="bottom: 50px; right: 19px;"><a--}}
                {{--                            class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i--}}
                {{--                                class="material-icons">add</i></a>--}}
                {{--                    <ul>--}}
                {{--                        <li><a class="btn-floating blue" href="css-helpers.html"><i--}}
                {{--                                        class="material-icons">help_outline</i></a>--}}
                {{--                        </li>--}}
                {{--                        <li><a class="btn-floating green" href="cards-extended.html"><i--}}
                {{--                                        class="material-icons">widgets</i></a>--}}
                {{--                        </li>--}}
                {{--                        <li><a class="btn-floating amber" href="app-calendar.html"><i--}}
                {{--                                        class="material-icons">today</i></a>--}}
                {{--                        </li>--}}
                {{--                        <li><a class="btn-floating red" href="app-email.html"><i class="material-icons">mail_outline</i></a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</div>
