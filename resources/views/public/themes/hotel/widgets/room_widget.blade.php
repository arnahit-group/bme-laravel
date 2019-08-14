<div class="col s12 l4">
    <div class="reservation-div-1">
        <div class="reservation-div">
            <div class="reservation-img" id="reservation10"></div>
            <h6>{{$data->properties['title']->title}}</h6>
            {{--<br>--}}
            <h5>
                {{__('layout.room.price per night')}}
                {{number_format($data->properties['price']->prices[0])}}
                {{__('layout.room.tooman')}}
            </h5>

            {{--<br>--}}
            <a class="more-information"
               href="{{route('home.data' , ['type'=>'room' , 'id'=>$data->id])}}">
                <img class="left responsive-img"
                     src="{{asset('images/left-arrow.png')}}">
                {{__('layout.room.more information')}}
            </a>

            @if(isset($data->properties['available']) and $data->properties['available']->title==1 )
                @if(isset($data->situation) and $data->situation == 'free')
                    <a href="{{route('home.data' , ['type'=>'room' , 'id'=>$data->id])}}"
                       class="reservation-btn left">
                        {{__('layout.room.reserve it')}}
                    </a>
                @endif
            @else
                {{--<a href="#" class="reservation-btn left">غیر فعال</a>--}}
            @endif
        </div>
    </div>
</div>
