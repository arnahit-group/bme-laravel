@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- CSS -->
    <link href="http://ipixels.ir/demo/alibaba/css/flickity.css" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')

    @if(count($widgets) > 0 and $widgets[0]->type == 'main')
        @include($widgets[0]->name)
    @endif

@endsection
@section('footer')
    <script src="{{asset('alibaba/js/pw_strenght.js')}}"></script>

@endsection
