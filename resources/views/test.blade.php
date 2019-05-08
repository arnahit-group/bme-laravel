<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>




    </head>
    <body>


        <form action="{{url('/admin/relations/ajax/get')}}" method="post">

            {{csrf_field()}}

            <input id="id" name="id" value="3">
            <input type="submit" value="send">

        </form>




    </body>
</html>
