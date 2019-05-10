<a class="waves-effect waves-light btn modal-trigger"
   href="#modal1">{{ __('messages.input_titles')[$property->title]}}</a>

<!-- Modal Structure -->
<div id="modal1" class="modal" style="width: 75% !important; padding: 10px; overflow-x: hidden; overflow-y: visible">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <input type="hidden" value="{{$property->title}}" id="property-title">
    </div>

    <div class="row">

        <div class="col m9">
            <div class="row" id="rw-images">
                @foreach($images as $image)
                    <div class="col m3 l3">
                        {{--<input type="hidden" name="{{$property->title}}[]" value="{{$image->properties->path}}">--}}
                        <img class="se-image" src="{{$image->properties->path}}" style="width: 90%" data-content="0">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col m3">
            <button type="button" id="btn-add-image" class="btn waves-effect waves-light">Add</button>
        </div>
    </div>
    {{--<div class="modal-fixed-footer">--}}
    {{--</div>--}}
</div>





<div class="row">
    <div class="col m12">
        <br>
    </div>
</div>

<div class="row" id="rw-selected-images">
    <div class="col m12 l12 s12">
        <h5 class="center">تصاویر انتخابی</h5>
    </div>


    @if(isset($property->assigned ))
        @foreach($property->assigned as $s_img)
            <div class="col m3 l3">
                <input type="hidden" name="{{$property->title}}[]" value="{{$s_img->value}}">
                <img src="{{$s_img->value}}" style="width: 100%">
            </div>
        @endforeach
    @endif

</div>