<div class="col s12 m12">
    <div class="card horizontal">
        <div class="card-stacked">
            <form method="post" action="{{route('data.update', ['data_type'=>$data_type, 'id'=>$datas[0]->id])}}">
                {{csrf_field()}}

                <div class="card-content">
                    <div class="row">
                        <div class="col s6">
                            {{--<span>--}}
                            {{--<i class="material-icons">title</i>--}}
                            {{--</span>--}}
                            <span>
                            {{--{{$data->properties->title }}--}}
                        </span>
                        </div>
                        <div class="col s6">
                        </div>
                    </div>

                    @foreach($datas as $data)

                        {{--{{$data->id}}--}}
                        {{--<br>--}}
                        @foreach($data->properties as $property)

                            {{--                        {{$property->assigned}}--}}
                            {{--<br>--}}

                            <div class="row">
                                <div class="col s12">

                                    @if($property->input_type == "text")
                                        @include("widgets.inputs.text", ['property'=>$property])
                                    @elseif($property->input_type == "check")
                                        @include("widgets.inputs.check", ['property'=>$property])
                                    @elseif($property->input_type == "multi-text")
                                        @php($property->input_type= 'text')
                                        @include("widgets.inputs.multi_text", ['property'=>$property])
                                    @elseif($property->input_type == "radio")
                                        @include("widgets.inputs.radio", ['property'=>$property])
                                    @elseif($property->input_type == "textarea")
                                        @include("widgets.inputs.textarea", ['property'=>$property])
                                    @elseif($property->input_type == "select")
                                        @include("widgets.inputs.select", ['property'=>$property])
                                    @elseif($property->input_type == "multi-relation-document-images")
                                        @include("widgets.inputs.select_image", ['property'=>$property])
                                    @elseif($property->input_type == "single-relation-price")
                                        @php($property->input_type= 'number')
                                        @include("widgets.inputs.currency", ['property'=>$property])
                                    @endif
                                </div>
                            </div>

                        @endforeach
                    @endforeach
                </div>

                <div class="card-action">
                    <button type="submit" class="btn red left">{{ __('messages.operations')['confirm']}}</button>

                </div>

            </form>

        </div>
    </div>
</div>
