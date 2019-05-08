@extends("layouts.admin")


@section("header")



@endsection
@section("container")

    <section id="content">
        <!--breadcrumbs start-->

    @include("widgets.breadcrumbs")

    <!--breadcrumbs end-->
        <!--start container-->
        <div class="container">

            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h4 class="header2">ثبت </h4>
                        <div class="row">
                            <form class="col s12"
                                  action="{{route("documents.store", ['document_type'=> $document_type])}}"
                                  method="post" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                @foreach($properties as $property)
                                    <div class="row">
                                        @if($property->level ==1)
                                            @if($property->input_type == "text")
                                                @include("widgets.inputs.text", ['property'=>$property])
                                            @elseif($property->input_type == "check")
                                                @include("widgets.inputs.check", ['property'=>$property])
                                            @elseif($property->input_type == "file")
                                                @include("widgets.inputs.file", ['property'=>$property])
                                            @elseif($property->input_type == "radio")
                                                @include("widgets.inputs.radio", ['property'=>$property])
                                            @elseif($property->input_type == "textarea")
                                                @include("widgets.inputs.textarea", ['property'=>$property])
                                            @elseif($property->input_type == "select")
                                                @include("widgets.inputs.select", ['property'=>$property])
                                            @endif
                                        @endif
                                    </div>
                                @endforeach

                                <div class="row">
                                    @foreach($properties as $property)
                                        @if($property->level ==2)
                                            <div class="col s3">
                                                @if($property->input_type == "text")
                                                    @include("widgets.inputs.text", ['property'=>$property])
                                                @elseif($property->input_type == "check")
                                                    @include("widgets.inputs.check", ['property'=>$property])
                                                @elseif($property->input_type == "radio")
                                                    @include("widgets.inputs.radio", ['property'=>$property])
                                                @elseif($property->input_type == "textarea")
                                                    @include("widgets.inputs.textarea", ['property'=>$property])
                                                @elseif($property->input_type == "select")
                                                    @include("widgets.inputs.select", ['property'=>$property])
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>


                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit"
                                                name="action">{{ __('messages.input_titles')['submit']}}
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
@section("footer")




@endsection