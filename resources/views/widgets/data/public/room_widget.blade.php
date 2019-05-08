<div class="col s12 l4">
    <div class="reservation-div-1">
        <div class="reservation-div">
            <div class="reservation-img" id="reservation10"></div>
            <h6>{{$data->properties['title']->title}}</h6>
            <a class="more-information"
               href="{{route('home.data' , ['data_type'=>'room' , 'id'=>$data->id])}}">
                <img class="left responsive-img"
                     src="{{asset('images/left-arrow.png')}}">
                اطلاعات بیشتر
            </a>
            @if(isset($data->properties['available']) and $data->properties['available']->title==1 )
                @if(isset($data->situation) and $data->situation == 'free')
                    <a href="{{route('home.data' , ['data_type'=>'room' , 'id'=>$data->id])}}"
                       class="reservation-btn left">رزرو کنید</a>
                @endif
            @else
                {{--<a href="#" class="reservation-btn left">غیر فعال</a>--}}
            @endif
        </div>
    </div>
</div>
