<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>

        <link rel="stylesheet" href="{{asset('style/materialize.min.css')}}">
        <link rel="stylesheet" href="{{asset('style/rtl.css')}}">
        <link rel="stylesheet" href="{{asset('style/vegas.min.css')}}">

        <link rel="stylesheet" href="{{asset('style/style_index.css')}}">

        {{--<script src="http://code.jquery.com/jquery.min.js"></script>--}}
        <script type="text/javascript" src="{{asset('vendors/jquery-3.2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/zepto/zepto.min.js')}}"></script>
        {{--<script src="http://zeptojs.com/zepto.min.js"></script>--}}
        <script src="{{asset('scripts/vegas.min.js')}}"></script>


        <script>

            $(function () {
                $('body').vegas({
                    slides: [
                            @foreach($datas as $data)
                        {
                            src: '{{$data->properties->path}}'
                        },

                        @endforeach
                    ]
                });
            });


        </script>


    </head>
    <body>


        <div class="d10 container">

            <!--start-->

            <div class="row center d100" id="d100">

                <img class="responsive-img img-logo" src="images/logo.png">

            </div>


            <div class="container">


                <div class="row center">

                    <ul class="menu-1 col s12 center">

                        @foreach($navigations as $navigation)
                            @if(isset($navigation->properties->key) and  isset($navigation->properties->value) )
                                <li>
                                    <a href="{{route($navigation->properties->route, [$navigation->properties->key=>$navigation->properties->value])}}">
                                        {{__('messages.navigation_titles')[$navigation->properties->title] }}
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route($navigation->properties->route)}}">
                                        {{__('messages.navigation_titles')[$navigation->properties->title] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>


                </div>


            </div>


            <div class="row center">

                <a href="#"><img class=" responsive-img img-flag" src="images/united-kingdom.png"></a>
                <a href="#"><img class=" responsive-img img-flag" src="images/saudi-arabia.png"></a>
                <a href="#"><img class=" responsive-img img-flag" src="images/iran.png"></a>


            </div>


            <!--end-->


        </div>


    </body>
</html>