@extends("layouts.admin")


@section("header")



@endsection
@section("container")

    {{--{{$hotel}}--}}

    {{--    {{$datas}}--}}


    @include("widgets.breadcrumbs")

    <a class="waves-effect waves-light  btn left" href="{{route("users.create",['user_type'=>$user_type])}}">add</a>

    {{--<div class="fixed-action-btn toolbar">--}}
    {{--<a class="btn-floating btn-large red">--}}
    {{--<i class="large material-icons">mode_edit</i>--}}
    {{--</a>--}}
    {{--<ul>--}}
    {{--<li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i></a></li>--}}
    {{--<li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i></a></li>--}}
    {{--<li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>--}}
    {{--<li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}

    <!--start container-->
    <div class="container">
        <div class="divider"></div>
        <!--Basic Card-->
        <!-- Horizontal Card -->
        <div class="divider"></div>
        <div id="horizontal-card" class="section">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="row">
                        @foreach($datas as $data )

                            @if(count($widgets) > 0 and $widgets[0]->type == 'main')
                                @include($widgets[0]->name, ['data'=>$data])
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section("footer")




@endsection