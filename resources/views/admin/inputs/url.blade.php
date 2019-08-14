<div class="input-field col s12 m12">
    @if(isset($property->assigned))
        <input id="{{$property->title}}" name="{{$property->title}}"
               value="{{$property->assigned}}"
               type="{{$property->input_type}}">
    @else
        <input id="{{$property->title}}" name="{{$property->title}}"
               type="{{$property->input_type}}">

    @endif
    <label for="{{$property->title}}">{{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}</label>
</div>
