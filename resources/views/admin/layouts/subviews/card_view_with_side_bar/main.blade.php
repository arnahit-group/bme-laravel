<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>

        @include('admin.layouts.widgets.breadcrumbs', ['page_title'=>$page_title , 'breadcrumbs'=> $breadcrumbs])


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
                        <div class="col s12 m3 l3 pr-0 hide-on-med-and-down animate fadeRight">
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
                            @include('admin.items.widgets.card_view_with_image',['data'=>$data])
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
                </div>
                <!-- START RIGHT SIDEBAR NAV -->
            @include('admin.layouts.widgets.overlay_side_bar')
            <!-- END RIGHT SIDEBAR NAV -->

                @can($permissions['create'])
                    <div class="fixed-action-btn direction-top" style="bottom: 54px; left: 19px;">
                        <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger"
                           href="{{$urls['create']}}">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
                @endcan


            </div>
        </div>
    </div>
</div>
