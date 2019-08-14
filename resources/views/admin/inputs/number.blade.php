@php($max_digits=0)
@php($min_digits=0)
@php($to_add_digits=false)
@if(is_array($property->validation_rules)==true)
    @foreach($property->validation_rules as $k =>$v)
        @if($k == 'digits')
            @php($to_add_digits =true)
            @php($max_digits=$v)
            @php($min_digits=$v)
            @break
        @elseif($k =='digits_between')
            @php($to_add_digits =true)
            @php($min_digits=explode(',',$v)[0])
            @php($max_digits=explode(',',$v)[1])
            @break
        @endif
    @endforeach
@endif

<div class="input-field col s12">
    @if(isset($property->assigned))
        <input id="{{$property->title}}" name="{{$property->title}}"
               value="{{$property->assigned}}"
               onkeypress="return isNumberKey(event)"
               @if($to_add_digits ==true)
               oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
               maxlength="{{$max_digits}}"
               minlength="{{$min_digits}}"
               @endif
               type="number">
    @else
        <input id="{{$property->title}}" name="{{$property->title}}"
               onkeypress="return isNumberKey(event)"
               @if($to_add_digits ==true)
               oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
               maxlength="{{$max_digits}}"
               minlength="{{$min_digits}}"
               @endif
               type="number">
    @endif
    <label for="{{$property->title}}">{{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}</label>
</div>
