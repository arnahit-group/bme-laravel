<div class="post-parallax">
    <div id="parallax-container" class="parallax-container" style="min-height: 1850px !important;">
        <div class="container" style="margin-top: 85px">

            <span class="span-location"><span style="color: #dab662">{{__('layout.room.your location')}}</span>صفحه اصلی / اتاق و سوییت ها / اتاق دو خوابه</span>

            <div class="post-single">

                <div class="row">
                    <div class="col l6 m12 s12 center-on-small-only">
                        <h6 class="title-post" id="title-h6">{{$data->properties['title']->title}}</h6>
                        @if( isset($data->properties['price']) )
                            <span class="span-post" id="span-post">
                                {{__('layout.room.price per night')}}
                                {{number_format($data->properties['price']->prices[0])}}
                                {{__('layout.room.tooman')}}
                            </span>
                        @endif

                    </div>

                    <div class="col l6 m12 s12 center-on-small-only" style="padding-left: 10px !important;">

                        @if((isset($data->properties['available']) and $data->properties['available']->title ==1) and (isset($data->situation) and $data->situation=='free'))
                            <a href="#modal1" class="btn-small btn-cream margin-top modal-trigger" id="btn-res">
                                {{__('layout.room.reserve it')}}
                            </a>
                        @else
                            <a href="#" class="btn-small btn-cream margin-top modal-trigger" id="btn-res">
                                {{__('layout.room.you cant reserve it right now')}}
                            </a>

                    @endif
                    <!-- Modal Structure -->
                        <div id="modal1" class="modal " style="z-index: -1 !important;">
                            <div class="modal-content" style="z-index: -1 !important;">
                                <div class="row">

                                    <form method="get" action="{{route('home.service', ['service'=>'reserve'])}}">
                                        <div class="col l4 s12 height100">

                                            <p>{{__('layout.room.enter date')}}</p>

                                            <input style="z-index: 5 !important;" type="text" class="datePicker dp1"
                                                   value="09-22-2013"/>
                                            <input style="z-index: 5 !important; display: block;" type="hidden"
                                                   id="alternateField" name="start"/>

                                            <input style="z-index: 5 !important; display: block;" type="hidden"
                                                   name="data_type" value="{{$data_type}}"/>
                                            <input style="z-index: 5 !important; display: block;" type="hidden"
                                                   name="object" value="{{$object->id}}"/>

                                        </div>
                                        <div class="col l4 s12 height100">

                                            <p>{{__('layout.room.duration')}}</p>
                                            <!--<input type="text">-->

                                            <select class="slct-night" name="count" required>
                                                <option value="" disabled selected>
                                                    {{__('layout.room.choose duration')}}
                                                </option>
                                                <option value="1">{{__('layout.room.1 night')}}</option>
                                                <option value="2">{{__('layout.room.2 nights')}}</option>
                                                <option value="3">{{__('layout.room.3 nights')}}</option>
                                                <option value="4">{{__('layout.room.4 nights')}}</option>
                                                <option value="5">{{__('layout.room.5 nights')}}</option>
                                                <option value="6">{{__('layout.room.6 nights')}}</option>
                                                <option value="7">{{__('layout.room.7 nights')}}</option>
                                            </select>

                                        </div>
                                        <div class="col l4 s12 height100">

                                            <p>{{__('layout.room.last step')}}</p>
                                            <input type="submit" href="#" value="درج مشخصات"
                                                   class="btn-small center btn-red btn-submit">


                                        </div>
                                    </form>

                                </div>

                            </div>

                            <div class="modal-footer container">

                                <div style="margin: 0 !important;" class="row modal-footer2">

                                    <div class="col l3 s12 padding-col">
                                        <div class="date-picked-first">
                                            <div>
                                                <span class="center date-picked-title">دوشنبه 27 فروردین 98</span>
                                            </div>

                                            <p class="date-picked-description center center-align">
                                                7/127/256 ریال
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col l3 s12 padding-col">
                                        <div class="date-picked-first">
                                            <div>
                                                <span class="center date-picked-title">دوشنبه 27 فروردین 98</span>
                                            </div>

                                            <p class="date-picked-description center center-align">
                                                7/127/256 ریال
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col l3 s12 padding-col">
                                        <div class="date-picked-first">
                                            <div>
                                                <span class="center date-picked-title">دوشنبه 27 فروردین 98</span>
                                            </div>

                                            <p class="date-picked-description center center-align">
                                                7/127/256 ریال
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col l3 s12 padding-col">
                                        <div class="date-picked-first">
                                            <div>
                                                <span class="center date-picked-title">دوشنبه 27 فروردین 98</span>
                                            </div>

                                            <p class="date-picked-description center center-align">
                                                7/127/256 ریال
                                            </p>
                                        </div>
                                    </div>


                                </div>

                                <!--<a href="#!" class="modal-close waves-effect waves-red btn-flat">بستن</a>-->
                            </div>

                        </div>


                        <!--todo id btn-fav sakhte shod-->
                        <a id="btn-fav" href="#" class="btn-small btn-reserve ">
                            {{__('layout.room.add to favorites')}}
                        </a>
                        <!--todo bareye img yek id tarif shod-->
                        <img id="img-share" src="{{asset('images/share.png')}}"
                             class="responsive-img img-share center-on-small-only">
                    </div>


                </div>
                <!--Image gallery-->
                <div class="img-gallery" id="image-gallery">
                    <ul id="lightSlider">
                        @if(isset($data->properties['slide-images']) == true and isset($data->properties['slide-images']->slides)  )
                            @foreach( $data->properties['slide-images']->slides as $slide)
                                <li data-thumb="{{$slide}}">
                                    <img src="{{$slide}}"/>
                                </li>
                            @endforeach
                        @else
                            <li data-thumb="{{asset('uploads/room-000.jpg')}}">
                                <img src="{{asset('uploads/room-000.jpg')}}"/>
                            </li>
                        @endif
                    </ul>
                </div>
                <!--Image gallery-->

                <div class="exit-txt-img hide-on-med-and-down">
                    <img class="responsive-img img-exit" src="{{asset('images/exit.png')}}">
                    <span class="span-exit">
                        {{__('layout.room.guest exit time')}}
                    </span>
                </div>

                <br>
                <br>


                <div style="margin: 0 !important; height: 150px" class="row">

                    <div class="col l5 s12  special-service hide-on-med-and-down">

                        <div>
                            <span class="center special-service-title">
                                {{__('layout.room.special offers for reserving rooms')}}
                            </span>
                        </div>

                        <p class="special-service-description">
                            {{__('layout.room.rasht location tours')}}
                        </p>
                    </div>


                </div>


                <div style="margin: 0 !important; height: 160px" class="row">

                    <div class="col l5 s12 ">

                        <p class="post-txt">
                            {{$hotel['description']->title}}
                        </p>

                    </div>


                </div>


                <div class="line hide-on-med-and-down"></div>


                <div class="row">


                    <div class="col l12 s12  options-title-bg">

                        <div class="img-options-bg ">

                            <img src="{{asset('images/door-hanger.png')}}" class="responsive-img img-options">

                        </div>

                        <div class="options-title-txt-bg">
                            <span class="options-title-txt">
{{__('layout.room.facilities')}}
                                {{$hotel['name']->title}}
                            </span>
                            <br>
                            <span class="options-title-desc">hotel options</span>
                        </div>

                    </div>


                    @php($htls=array_chunk($hotel ,13,true))
                    @foreach($htls as $htl)
                        <div class="col l3 s6">
                            @foreach($htl as $k=>$v)
                                @if($v->input_type == 'check')
                                    <div class="check-txt-img">
                                        <img class="responsive-img" src="{{asset('images/checked.png')}}">
                                        <span>{{isset($v->locales[app()->getLocale()])?$v->locales[app()->getLocale()]:$v->title}}</span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach

                    <div class="col l6 s12">
                        <ul class="collection table-of-options" id="table-of-options">
                            @foreach($hotel as $k=>$v)
                                @if($v->input_type=='text' and $v->level== 2)

                                    <li class="collection-item">
                                        <div> {{isset($v->locales[app()->getLocale()])?$v->locales[app()->getLocale()]:$v->title}}
                                            <span class="secondary-content">{{ $v->title}}</span>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                </div>

                <div class="more-inf hide-on-med-and-down">
                    <a href="#">
                        {{__('layout.room.more information')}}
                    </a>
                    <img class="responsive-img" src="{{asset('images/left-arrow.png')}}">
                </div>


            </div>

            <!--post single-->

            <div class="reserve-box hide-on-med-and-down" style="height: 100px;">


                <div class="row">

                    <div class="col l7 s7 height110">

                        <h6>

                            {{__('layout.room.reserve')}}
                            {{$data->properties['title']->title}}
                        </h6>
                        <span>
                            {{$data->properties['description']->title}}
                        </span>

                    </div>
                    <div class="col l5 s5 height110">
                        {{--<a href="#" class="btn-small left btn-cream btn-reserve2">رزرو کنید</a>--}}
                        @if( isset($data->properties['price']) )
                            <a href="#" class="btn-small btn-red btn-price">
                                {{__('layout.room.per night price')}}
                                {{number_format($data->properties['price']->prices[0])}}
                                {{__('layout.room.tooman')}}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="box-reserve-bottom hide-on-med-and-down">
                <span>
                {{__('layout.room.extra bed costs')}}
                    900000 ریال
                </span>
            </div>


        </div>
        <div class="parallax"><img src="{{asset('images/post-bg.jpg')}}"></div>

    </div>
</div>