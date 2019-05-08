<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta name="_token" content="{{csrf_token()}}" />

        @yield("header")
    </head>
    <body dir="rtl" class="layout-light">
        <ul>
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
        @yield("container")
        @yield("footer")
    </body>
</html>