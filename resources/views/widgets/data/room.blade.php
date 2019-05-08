<div class="col s12 m6 l6">
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <div class="row">
                    <div class="col s6">
                        {{--<span>--}}
                        {{--<i class="material-icons">title</i>--}}
                        {{--</span>--}}
                        <span>
                            {{$data->properties['title']->title }}
                        </span>
                    </div>
                    <div class="col s6">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p>
                            {{$data->properties['description']->title }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-action">
                <a href="{{route("data.edit",['data_type'=>$data_type, 'id'=>$data->id ])}}"
                   class="btn-danger left">{{ __('messages.operations')['edit']}}</a>

{{--                <a href="{{route("data.translations.index",['data_type'=>$data_type, 'id'=>$data->id ])}}"--}}
{{--                   class="btn-danger left">{{ __('messages.operations')['locale']}}</a>--}}

                <div class="switch right">
                    <label>
                        inactive
                        @if( isset($data->properties['available'])==true and $data->properties['available']->title== 1)
                            <input id="active-{{$data->id}}" type="checkbox" checked>
                        @else
                            <input id="active-{{$data->id}}" type="checkbox">
                        @endif
                        <span class="lever"></span>
                        active
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
