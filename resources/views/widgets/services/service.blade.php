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
                            {{$data->properties->start_date }}
                        </span>
                        <br>
                        <span>
                            {{$data->properties->end_date }}
                        </span>
                    </div>
                    <div class="col s6">
                        <span>
                            @if(isset($data->properties->price ))
                                {{$data->properties->price }}
                            @else
                                0
                            @endif
                        </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p>
                            {{$data->properties->active }}
                        </p>
                    </div>
                </div>

            </div>

            <div class="card-action">
                <a href="{{route("data.edit",['data_type'=>$service_type, 'id'=>$data->id ])}}"
                   class="btn-danger">{{ __('messages.operations')['edit']}}</a>
                <a class="left">#</a>
            </div>
        </div>
    </div>
</div>
