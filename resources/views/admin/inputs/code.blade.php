<div class="input-field col s12 m12">
    @if(isset($property->assigned))
        <input id="{{$property->title}}" name="{{$property->title}}"
               value="{{$property->assigned}}"
               type="text">
    @else
        <input id="{{$property->title}}" name="{{$property->title}}"
               type="text">

    @endif
    <label for="{{$property->title}}">{{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}</label>
</div>
