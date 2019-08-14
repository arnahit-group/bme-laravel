<div class="input-field col s12 m12">
    {{--{{$property->assigned}}--}}
    {{--<br>--}}
    <select id="{{$property->title}}" name="{{$property->title}}">
        <option value="" disabled selected>{{ __('messages.input_titles')[$property->title]}}</option>
        @if(isset($property->values))
            @foreach($property->values as $value)
                <option value="{{$value->value}}" {{$value->value==$property->assigned?"selected":""}} >{{$value->value}}</option>
            @endforeach
        @endif
    </select>
    <label>{{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}</label>
</div>
