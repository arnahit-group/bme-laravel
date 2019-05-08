@extends("layouts.admin")


@section("header")



@endsection
@section("container")

    {{--{{$hotel}}--}}

    {{--    {{$datas}}--}}


    @include("widgets.breadcrumbs")

    {{--<a class="waves-effect waves-light  btn left" href="{{route("documents.create",['document_type'=>$document_type])}}">add</a>--}}

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
                        {{--@php($i=1)--}}
                        @foreach($datas as $data )

                            @include("widgets.services.service", ['data'=>$data])

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section("footer")




@endsection