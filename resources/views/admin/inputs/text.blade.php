


<div class="input-field col s12 m12">
    {{--{{$property->assigned}}--}}
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
<div class="input-field col s12 m12">
    <button type="button" class="btn-flat red-text" id="add-locale-{{$property->title}}"
            onclick="$('#container-locale-{{$property->title}}').slideToggle()">
        {{ __('messages.operations')['add locale']}}
    </button>
</div>


<div class="input-field col s12 m12" id="container-locale-{{$property->title}}" hidden>
    @foreach($locales as $locale)
        <div class="row">
            <div class="input-field col s12 m2">
            </div>
            <div class="input-field col s12 m8">
                <input id="{{$property->title}}-{{$locale}}" name="{{$property->title}}-{{$locale}}"

                       @php($s= 'assigned-'. $locale)
                       @if(isset($property->{$s}) )
                       @php($t =$property->{$s} )
                       value="{{$t}}"
                       @endif

                       type="{{$property->input_type}}">
                <label for="{{$property->title}}-{{$locale}}"> {{__('messages.languages')[$locale]}}</label>
            </div>
        </div>
    @endforeach
</div>




