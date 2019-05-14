<div class="input-field col s12">

    @if(isset($property->assigned))
        <input id="{{$property->title}}" name="{{$property->title}}"
               value="{{$property->assigned}}"
               type="number">
    @else
        <input id="{{$property->title}}" name="{{$property->title}}"
               type="number">

    @endif
    <label for="{{$property->title}}">{{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}</label>
</div>
