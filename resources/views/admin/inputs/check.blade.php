@if(isset($property->assigned) and  $property->assigned == 1)
    <input type="checkbox" id="{{$property->title}}" name="{{$property->title}}" value="1" checked/>
@else
    <input type="checkbox" id="{{$property->title}}" name="{{$property->title}}" value="1"/>
@endif
<label for="{{$property->title}}">{{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}</label>