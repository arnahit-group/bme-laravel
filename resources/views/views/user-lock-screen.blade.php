@extends('admin.layouts.simple')
@section('vendor-css')
@endsection

@section('header')
    <link href="{{asset('app-assets/css/pages/lock.css')}}" rel="stylesheet" type="text/css">


@endsection

@section('main')

    <div class="row">
        <div class="col s12">
            <div class="container">
                <div class="row" id="lock-screen">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 forgot-card bg-opacity-8">
                        <form class="login-form">
                            <div class="row">
                                <div class="input-field col s12 center-align mt-10">
                                    <img alt="" class="z-depth-4 circle responsive-img"
                                         src="{{asset('app-assets/images/user/4.jpg')}}" width="100">
                                    <h5>John Doe</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" type="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <a class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12"
                                       href="index.html">Login</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin medium-small"><a href="user-register.html">Register Now!</a>
                                    </p>
                                </div>
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot
                                            password ?</a></p>
                                </div>
                            </div>
                        </form>
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

