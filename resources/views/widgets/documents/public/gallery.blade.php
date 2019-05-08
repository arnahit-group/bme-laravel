<h6 class="center contact_us_h6">گالری تصاویر هتل</h6>
<span class="center contact_us_span"
      style="display: block">از تصاویر انواع هتل های هتل سه ستاره صبوری لذت ببرید</span>


<div class="container center" style="margin-top: 35px; margin-bottom: 35px;">

    <div class="row">
        @foreach($datas as $data)
                <a style="direction: ltr" class="elem"
                   href="{{$data->properties->path }}"
                   title="image 1"
                   data-lcl-txt="هتل سه ستاره صبوری"
                   data-lcl-author="هتل سه ستاره صبوری"
                   data-lcl-thumb="{{$data->properties->path }}">
                    <span style="background-image: url({{$data->properties->path }});"></span>
                </a>
        @endforeach

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