@extends('admin.layouts.simple')
@section('vendor-css')
@endsection

@section('header')
    <link href="{{asset('app-assets/css/pages/page-500.css')}}" rel="stylesheet" type="text/css">


@endsection

@section('main')



    <div class="row">
        <div class="col s12">
            <div class="container">
                <div class="section p-0 m-0 height-100vh section-500">
                    <div class="row">
                        <!-- 404 -->
                        <div class="col s12 center-align white">
                            <img alt="" class="bg-image-500" src="{{asset('app-assets/images/gallery/error-2.png')}}">
                            <h1 class="error-code m-0">500</h1>
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

