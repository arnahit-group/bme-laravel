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
                            {{$data->title }}
                        </span>
                    </div>
                    <div class="col s6">
                        <span>
                            {{$data->default_value}}
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        {{--<span>--}}
                        {{--<i class="material-icons">title</i>--}}
                        {{--</span>--}}
                        <span>
                            {{$data->input_type }}
                        </span>
                    </div>
                    <div class="col s6">
                        <span>
                        </span>
                    </div>
                </div>


                <div class="row">
                    <div class="col s12">
                        <p>
                            {{--                            {{$data->properties->description }}--}}
                        </p>
                    </div>
                </div>

            </div>

            <div class="card-action">
                <a href="{{route("data.properties.edit",['data_type'=>$data_type, 'id'=>$data->id ])}}"
                   class="btn-danger">{{ __('messages.operations')['edit']}}</a>
                <a class="left">#</a>
            </div>
        </div>
    </div>
</div>
