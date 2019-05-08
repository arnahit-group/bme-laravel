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
                                  action="{{route("relations.store", ['relation_type'=> $relation_type])}}"
                                  method="post" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="title" name="title"
                                               type="text">
                                        <label for="title">title</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s2">
                                        TITLE
                                    </div>
                                    <div class="input-field col s2">
                                        PRICE
                                    </div>
                                </div>

                                @foreach($rooms as $room)
                                    <div class="row">
                                        <div class="input-field col s2">
                                            {{$room->properties->title}}
                                        </div>
                                        <div class="input-field col s2">
                                            <input id="price{{$room->id}}" name="price[{{$room->id}}]"
                                                   type="text">
                                            <label for="price{{$room->id}}">price</label>
                                        </div>
                                    </div>
                                @endforeach


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