@extends('admin.layouts.simple')
@section('vendor-css')
@endsection

@section('header')

    <link href="{{asset('app-assets/css/pages/page-maintenance.css')}}" rel="stylesheet" type="text/css">

@endsection

@section('main')



    <div class="row">
        <div class="col s12">
            <div class="container">
                <div class="section p-0 m-0 height-100vh section-maintenance">
                    <div class="row">
                        <!-- Maintenance -->
                        <div class="col s12 center-align white" id="maintenance">
                            <img alt=""
                                 class="responsive-img maintenance-img" src="{{asset('app-assets/images/gallery/maintenance.png')}}">
                            <h4 class="error-code">This page is under maintenance</h4>
                            <h6 class="mb-2 mt-2">We're sorry for the inconvenience. <br> Please check back later.
                            </h6>
                            <a class="btn waves-effect waves-light" href="dashboard-ecommerce.html">Back TO Home</a>
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

