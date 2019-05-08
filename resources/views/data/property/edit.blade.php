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
                                  action="{{route("data.properties.update", ['data_type'=> $data_type, 'id'=>$id])}}"
                                  method="post">
                                {{@csrf_field()}}
                                <div class="row">

                                    <div class="input-field col s12">
                                        <input id="title" name="title"
                                               value="{{$property->title}}"
                                               type="text">
                                        <label for="title">{{ __('messages.input_titles')['title']}}</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input id="default_value" name="default_value"
                                               value="{{$property->default_value}}"
                                               type="text">
                                        <label for="title">{{ __('messages.input_titles')['default_value']}}</label>
                                    </div>


                                    <div class="input-field col s12 m12">
                                        <select id="input_type" name="input_type">
                                            <option value="" disabled
                                                    selected>{{ __('messages.input_titles')['input_type']}}</option>
                                            <option value="text">text</option>
                                            <option value="select">select</option>
                                            <option value="check">check</option>
                                        </select>
                                        <label>{{ __('messages.input_titles')['input_type']}}</label>
                                    </div>

                                    <div class="input-field col s12 m12">
                                        <select id="level" name="level">
                                            <option value="" disabled
                                                    selected>{{ __('messages.input_titles')['level']}}</option>
                                            <option value="1">level 1</option>
                                            <option value="2">level 2</option>
                                            <option value="3">level 3</option>
                                        </select>
                                        <label>{{ __('messages.input_titles')['level']}}</label>
                                    </div>


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