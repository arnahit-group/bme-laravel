<h6 class="center contact_us_h6">
    @if(isset($id))
        @foreach($datas as $data)
            @if($data->id == $id)
                {{$data->properties['title']->title}}
            @endif
        @endforeach
    @else
        {{__('layout.pages.hotel gallery')}}
    @endif
</h6>
<span class="center contact_us_span"
      style="display: block">
                        {{__('layout.pages.enjoy to see hotel pictures')}}

</span>


<div class="container center" style="margin-top: 35px; margin-bottom: 35px;">

    <div class="row">

        @if(isset($id))
            @foreach($datas as $data)
                @if($data->id == $id)
                    @foreach($data->properties['slide-images']->slides as $slide)
                        <div class="col m3 s12">
                            <a style="direction: ltr; width: 100%" class="elem"
                               href="{{$slide}}"
                               title="{{$data->properties['title']->title}}"
                               data-lcl-txt="هتل سه ستاره صبوری"
                               data-lcl-author="هتل سه ستاره صبوری"
                               data-lcl-thumb="{{$slide}}">
                            <span style="background-image: url({{$slide}});">
                                {{$data->properties['title']->title }}
                            </span>
                            </a>
                            <p style="color: #18006a;">{{$data->properties['title']->title }}</p>
                        </div>
                    @endforeach
                @endif
            @endforeach
        @else
            @foreach($datas as $data)
                <div class="col l3 m3 s12">
                    <a href="{{route('home.document' , ['type' =>$type,'id'=>$data->id])}}">
                        <img src="{{$data->properties['slide-images']->slides[0]}}" style="width: 100%">
                    </a>
                    <p style=" text-align:center; color: #18006a;">{{$data->properties['title']->title }}</p>
                </div>
            @endforeach
        @endif

    </div>
</div>


{{--<div class="container">--}}
{{--<div class="row">--}}
{{--@foreach($datas as $data)--}}

{{--<div class="col s12 m4 l4" id="container-{{$data->id}}">--}}
{{--<div class="card small">--}}
{{--<div class="card-image waves-effect waves-block waves-light">--}}
{{--<img class="activator" src="{{$data->properties->path }}" alt="office">--}}
{{--</div>--}}
{{--<div class="card-content">--}}
{{--<span class="card-title activator grey-text text-darken-4">--}}
{{--{{$data->properties->title}}--}}
{{--</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--@endforeach--}}
{{--</div>--}}
{{--</div>--}}