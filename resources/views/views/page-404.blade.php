@extends('admin.layouts.simple')
@section('vendor-css')
@endsection

@section('header')

    <link href="{{asset('app-assets/css/pages/page-404.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('main')

    <div class="row">
        <div class="col s12">
            <div class="container">
                <div class="section section-404 p-0 m-0 height-100vh">
                    <div class="row">
                        <!-- 404 -->
                        <div class="col s12 center-align white">
                            <img alt="" class="bg-image-404" src="{{asset('app-assets/images/gallery/error-2.png')}}">
                            <h1 class="error-code m-0">404</h1>
                            <h6 class="mb-2">BAD REQUEST</h6>
                            <a class="btn waves-effect waves-light gradient-45deg-deep-purple-blue gradient-shadow mb-4"
                               href="dashboard-ecommerce.html">Back
                                TO Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('vendor-js')
@endsection

@section('footer')

@endsection

