<div class="col s12 m4 l4">
    <div class="card animate fadeLeft sticky-action">
        {{--        <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>--}}
        <div class="card-content text-ellipsis">
            <p>{{$data->properties['title']->title}}</p>
            {{--            <span class="card-title text-ellipsis">Smartwatch 2.0 LTE Wifi</span>--}}
        </div>
        <div class="card-image">
            <img alt=""
                 class="responsive-img "
                 src="{{asset('uploads/room-020.jpg')}}">
        </div>
        <div class="card-content">
            <p class="text-ellipsis">
                {{$data->properties['description']->title}}
            </p>
        </div>
        <div class="card-action">
            <div class="row">

                <a class="activator"><i class="material-icons">visibility</i></a>

                @can($permissions['edit'])
                    <a href="{{$data->urls['edit']}}"><i class="material-icons">edit</i></a>
                @endcan
                @can($permissions['destroy'])
                    <a href="#"><i class="material-icons">delete</i></a>
                @endcan
                {{--                <h5 class="col s12 m12 l8 mt-3">$399.00</h5>--}}
                {{--                <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger"--}}
                {{--                   href="#modal1">View</a>--}}

            </div>
        </div>

        <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>

    </div>


    <!-- Modal Structure -->
    {{--    <div class="modal" id="modal1">--}}
    {{--        <div class="modal-content pt-2">--}}
    {{--            <div class="row" id="product-one">--}}
    {{--                <div class="col s12">--}}
    {{--                    <a class="modal-close right"><i class="material-icons">close</i></a>--}}
    {{--                </div>--}}
    {{--                <div class="col m6">--}}
    {{--                    <img alt=""--}}
    {{--                         class="responsive-img"--}}
    {{--                         src="{{asset('images/1.jpg')}}">--}}
    {{--                </div>--}}
    {{--                <div class="col m6">--}}
    {{--                    <p>Smartwatches</p>--}}
    {{--                    <h5>Smartwatch 2.0 LTE Wifi</h5>--}}
    {{--                    <span class="new badge left ml-0 mr-2"--}}
    {{--                          data-badge-caption="">4.2 Star</span>--}}
    {{--                    <p>Availability: <span--}}
    {{--                                class="green-text">36 Item Available</span></p>--}}
    {{--                    <hr class="mb-5">--}}
    {{--                    <span class="vertical-align-top mr-4"><i--}}
    {{--                                class="material-icons mr-3">favorite_border</i>Wishlist</span>--}}
    {{--                    <p class="mt-3">- Accept SIM card and call</p>--}}
    {{--                    <p>- Make calling instead of mobile phone</p>--}}
    {{--                    <p>- Sync music play and sync control music</p>--}}
    {{--                    <p>- Sync Facebook,Twiter,emailand calendar</p>--}}
    {{--                    <h5>$399.00 <span class="prise-text-style ml-2">$459.00</span>--}}
    {{--                    </h5>--}}
    {{--                    <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD--}}
    {{--                        TO CART</a>--}}
    {{--                    <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY--}}
    {{--                        NOW</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</div>
