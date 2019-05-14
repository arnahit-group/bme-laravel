<div class="input-field col s12">

    @if(isset($property->assigned))
        <textarea id="{{$property->title}}" name="{{$property->title}}"
                  class="materialize-textarea">{{$property->assigned}}</textarea>
    @else
        <textarea id="{{$property->title}}" name="{{$property->title}}" class="materialize-textarea"></textarea>
    @endif

    <label for="{{$property->title}}">{{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}</label>
</div>