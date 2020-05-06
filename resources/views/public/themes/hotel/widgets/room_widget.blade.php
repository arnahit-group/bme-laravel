<div class="col s12 l4">
    <a href="{{route('home.data' , ['type'=>'room' , 'id'=>$data->id])}}">
        <div class="card small" style="border-top-right-radius: 10px !important;  border-top-left-radius: 10px !important;">
            <div class="card-image" style="border-top-right-radius: 10px !important;  border-top-left-radius: 10px !important;">
                @if(isset($data->properties['featuring-image']->slides[0]))
                    <img src="{{$data->properties['featuring-image']->slides[0]}}" alt="{{$data->properties['title']->title}}">
                @elseif(isset($data->properties['slide-images']->slides[0]))
                    <img src="{{$data->properties['slide-images']->slides[0]}}" alt="{{$data->properties['title']->title}}">
                @else
                    <img src="{{asset('images/post1.jpg')}}" alt="{{$data->properties['title']->title}}">
                @endif

            </div>
            <div class="card-content">
                <h6>
                    {{$data->properties['title']->title}}
                </h6>
                <p class="red-text">
                    {{__('layout.room.price per night')}}
                    {{isset($data->properties['price']->prices[$current_date][0]) ?  number_format($data->properties['price']->prices[$current_date][0]) : '0'}}
                    {{__('layout.room.tooman')}}
                </p>
                <a class="orange-text" href="{{route('home.data' , ['type'=>'room' , 'id'=>$data->id])}}">
                    {{__('layout.room.more information')}}
                </a>

            </div>
        </div>
    </a>
</div>
