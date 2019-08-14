<br>
<br>
<div class="row">
    <div class="col s12">
        <h3>{{$property->title}}</h3>
        <ul class="tabs">
            <li class="tab col s4"><a
                        href="#test-{{$property->title}}-1">{{__('messages.languages')[App::getLocale()]}}</a></li>
            @php($a=2)
            @foreach($locales as $locale)
                <li class="tab col s4"><a
                            href="#test-{{$property->title}}-{{$a}}">{{__('messages.languages')[$locale]}}</a></li>
                @php($a++)
            @endforeach

        </ul>
    </div>
    <div id="test-{{$property->title}}-1" class="col s12">
        <br>
        <br>

        <textarea id="{{$property->title}}" name="{{$property->title}}">
            {{isset($property->assigned) ? $property->assigned : ""}}
        </textarea>
    </div>

    @php($b=2)
    @foreach($locales as $locale)

        @php($t="")
        @php($s= 'assigned-'. $locale)
        @if(isset($property->{$s}))
            @php($t =$property->{$s} )
        @endif

        <div id="test-{{$property->title}}-{{$b}}" class="col s12">
            <br>
            <br>
            <textarea id="{{$property->title}}-{{$locale}}"
                      name="{{$property->title}}-{{$locale}}">{{$t}}</textarea>
        </div>
        @php($b++)
    @endforeach

</div>