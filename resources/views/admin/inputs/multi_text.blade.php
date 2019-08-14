<div class="input-field col s12 m10">
    <input id="txt-add-multi-text-{{$property->title}}" name="txt-add-multi-text-{{$property->title}}"
           type="{{$property->input_type}}">

    <label for="{{$property->title}}">{{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}</label>
</div>
<div class="input-field col s12 m2">
    <button type="button" class="btn" id="btn-add-multi-text-{{$property->title}}">
        {{ __('messages.operations')['insert']}}
    </button>
</div>

<div class="input-field col s12 m12">
    <button type="button" class="btn-flat red-text">
        {{ __('messages.operations')['values']}}
    </button>
</div>

<div class="input-field col s12 m6" id="dv-multi-text-{{$property->title}}">

    @foreach($property->assigned as $item)
        <div class="row" style="border: 1px dotted red;margin-bottom:3px;">
            <input type="hidden" id="{{$property->title}}[]" name="{{$property->title}}[]" value="{{$item}}">
            <div class="input-field col s12 m2">
            </div>
            <div class="input-field col s12 m6">
                {{$item}}
            </div>
            <div class="input-field col s12 m2">
                <button type="button" class="btn button-delete">
                    {{ __('messages.operations')['delete']}}
                </button>
            </div>
        </div>

    @endforeach
</div>
@php($property->input_type= 'multi-text')
