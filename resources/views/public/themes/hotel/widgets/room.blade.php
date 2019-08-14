<div class="post-parallax">
    <!--todo id va avaz kardan media screen-->
    <div class="parallax-container pc2" id="parallax-container">
        <div class="container" style="margin-top: 85px">
            <span class="span-location">
                <span style="color: #dab662">{{__('layout.room.your location')}}</span>
                صفحه اصلی / اتاق و سوییت ها / اتاق دو خوابه
            </span>
        </div>
        <div class="parallax"><img src="{{asset('images/post_bg.jpg')}}"></div>
    </div>
</div>
<!--todo media screen-->
<div class="content2 " id="content-2">

    <div class="post-single container">


        <!--todo baraye class h6 va span class va id sakhte shod -->
        <div class="row">
            <div class="col l6 m12 s12 center-on-small-only">
                <h6 class="title-post" id="title-h6">
                    {{$data->properties['title']->title}}
                </h6>
                @if( isset($data->properties['price']) )
                    <span class="span-post" id="span-post">
                                {{__('layout.room.price per night')}}
                        {{number_format($data->properties['price']->prices[0])}}
                        {{__('layout.room.tooman')}}
                            </span>
                @endif
            </div>


            <div class="col l6 m12 s12 center-on-small-only" style="padding-left: 10px !important;">


                @if((isset($data->properties['available']) and $data->properties['available']->title ==1))
                    <a href="#modal1" class="btn-small btn-cream margin-top modal-trigger" id="btn-res">
                        {{__('layout.room.reserve it')}}
                    </a>
                @else
                    <a href="#" class="btn-small btn-cream margin-top modal-trigger" id="btn-res">
                        {{__('layout.room.you cant reserve it right now')}}
                    </a>
                @endif

                <div class="modal" id="modal-video" style="z-index: -1 !important;">
                    <div class="modal-content" style="z-index: -1 !important;">

                        <video poster="{{asset('videos/poster.png')}}" id="player" playsinline controls
                               style="margin-top: 16px !important;">
                            <source src="{{asset('videos/video.mp4')}}" type="video/mp4"/>

                            {{--                            <!-- Captions are optional -->--}}
                            {{--                            <track kind="captions"--}}
                            {{--                                   label="English captions" src="{{asset('images/gallary/18.png')}}"--}}
                            {{--                                   srclang="en"--}}
                            {{--                                   default/>--}}
                        </video>
                    </div>
                    <div class="modal-footer container">

                    </div>
                </div>

                <div class="modal" id="modal-360" style="z-index: -1 !important;">
                    <div class="modal-content" style="z-index: -1 !important;">

                        <embed
                                src="{{asset('swf/file.swf')}}" style="width: 100%; height: 600px;"
                                quality="high" pluginspage="http://www.macromedia.com/go/getfashplayer"
                                type="application/x-shockwave-flash">
                    </div>
                    <div class="modal-footer container">

                    </div>
                </div>


                <!-- Modal Structure -->
                <div class="modal" id="modal1" style="z-index: -1 !important; height: 600px !important; width: 75% !important;">
                    <div class="modal-content" style="z-index: -1 !important;">
                        <div class="row">

                            <form method="get"
                                  action="{{route('home.service', ['service'=>'reserve'])}}">
                                <div class="col l4 s12 height100">

                                    <p>{{__('layout.room.enter date')}}</p>

                                    <div id="app">
                                        <input type="text"
                                               class="dp1"
                                               v-model="date"
                                               id="alternateField"
                                               name="start"
                                               placeholder="تاریخ را انتخاب نمایید">
                                        <date-picker
                                                :min="today"
                                                v-model="date"
                                                format="jYYYY/jMM/jDD"
                                                element="alternateField">
                                        </date-picker>
                                    </div>

{{--                                    <input style="z-index: 5 !important;" type="text" class="datePicker dp1"--}}
{{--                                           value="todayUnix"/>--}}
{{--                                    <input type="hidden"--}}
{{--                                           id="alternateField" name="start"/>--}}

                                    <input type="hidden" value="1"
                                           id="step" name="step"/>

                                    <input style="z-index: 5 !important; display: block;" type="hidden"
                                           name="type" value="{{$type}}"/>
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

                    <!--todo modal footer avaz shod ye seri chiz ha / in div ro jaygozin konin-->
                    <div class="modal-footer container" hidden>

                        <div class="row modal-footer2" style="margin: 0 !important;">

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
                <a id="btn-fav" href="#" class="btn-small btn-reserve " hidden>
                    {{__('layout.room.add to favorites')}}
                </a>
                <!--todo bareye img yek id tarif shod-->
                <img id="img-share" src="{{asset('images/share.png')}}" hidden
                     class="responsive-img img-share center-on-small-only">


            </div>
        </div>


        <!--Image gallery-->
        <!--todo mediaScreen-->

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

            <div class="row" style="margin-top: 8px">
                <div class="col m6 left">
                    <a href="#modal-video" class="modal-trigger left">
                        <img src="{{asset('images/video-512.png')}}" width="32">
                    </a>

                </div>
                <div class="col m6">
                    <a href="#modal-360" class="modal-trigger right">
                        <img src="{{asset('images/360-512.png')}}" width="32">
                    </a>

                </div>
            </div>

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


        <div class="row" style="margin: 0 !important; height: 150px">
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


        <div class="row post-txt-div">
            <p class="post-txt col l5 s12">
                {{$hotel['description']->title}}
            </p>
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

            @php($hotel_t= [])
            @foreach($hotel as $k=>$v)
                @if($v->input_type== 'check')
                    @php($hotel_t[$k]=$v)
                @endif
            @endforeach
            @php($htls=array_chunk($hotel_t , count($hotel_t)%2 ==0 ? count($hotel_t)/2 : (count($hotel_t)+1)/2  ,true))

            @foreach($htls as $htl)
                <div class="col l3 m6 s12">
                    @foreach($htl as $k=>$v)
                        <div class="check-txt-img">
                            <img class="responsive-img" src="{{asset('images/checked.png')}}">
                            <span>{{isset($v->locales[app()->getLocale()])?$v->locales[app()->getLocale()]:$v->title}}</span>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <div class="col l6 s12">
                <ul class="collection table-of-options" id="table-of-options">
                    @foreach($hotel as $k=>$v)
                        @if($v->input_type=='text' and $v->level== 2)
                            <li class="collection-item">
                                <div>
                                    {{isset($v->locales[app()->getLocale()])?$v->locales[app()->getLocale()]:$v->title}}
                                    <span class="secondary-content">{{ $v->title}}</span>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>


        </div>


        @if(isset($data->properties['content']->title))
            <div class="row" style="margin: 0 !important; height: 150px">
                <div class="col l12 s12  special-service hide-on-med-and-down">
                    <div>
                     <span class="center special-service-title">
                     </span>
                    </div>
                    <p class="special-service-description">
                        {!! $data->properties['content']->title !!}
                    </p>
                </div>
            </div>

        @endif

        <div class="row">


            <div class="col l12 s12  options-title-bg">
                <div class="img-options-bg ">
                    <img src="{{asset('images/door-hanger.png')}}" class="responsive-img img-options">
                </div>
                <div class="options-title-txt-bg">
                            <span class="options-title-txt">
                {{__('layout.room.facilities')}}
                                {{$data->properties['title']->title}}
                            </span>
                    <br>
                    <span class="options-title-desc">hotel options</span>
                </div>
            </div>


            @php($hotel_t= [])
            @foreach($data->properties as $k=>$v)
                @if($v->input_type== 'check' and $v->level== 2)
                    @php($hotel_t[$k]=$v)
                @endif
            @endforeach
            @php($htls=array_chunk($hotel_t , count($hotel_t)%2 ==0 ? count($hotel_t)/2 : (count($hotel_t)+1)/2  ,true))

            @foreach($htls as $htl)
                <div class="col l3 m6 s12">
                    @foreach($htl as $k=>$v)
                        <div class="check-txt-img">
                            <img class="responsive-img" src="{{asset('images/checked.png')}}">
                            <span>{{isset($v->locales[app()->getLocale()])?$v->locales[app()->getLocale()]:$v->title}}</span>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <div class="col l6 s12">
                <ul class="collection table-of-options" id="table-of-options">
                    @foreach($data->properties as $k=>$v)
                        @if($v->input_type=='text' and $v->level== 2)
                            <li class="collection-item">
                                <div>
                                    {{isset($v->locales[app()->getLocale()])?$v->locales[app()->getLocale()]:$v->title}}
                                    <span class="secondary-content">{{ $v->title}}</span>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>


        </div>


        {{--        <div class="more-inf hide-on-med-and-down">--}}
        {{--            <a href="#">اطلاعات بیشتر</a>--}}
        {{--            <img class="responsive-img" src="images/left-arrow.png">--}}
        {{--        </div>--}}


    </div>

    <!--post single-->

    <div class="container">

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
            {{--                {{__('layout.room.extra bed costs')}}--}}
            {{--                    900000 ریال--}}

        </div>

    </div>


</div>
