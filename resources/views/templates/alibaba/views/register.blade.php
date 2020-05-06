@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- CSS -->
    <link href="http://ipixels.ir/demo/alibaba/css/flickity.css" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')
    <section id="hero" class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div id="login">
                        <div class="text-center"><img src="img/logo_sticky.png" alt="" data-retina="true"></div>
                        <hr>
                        <form>
                            <div class="form-group">
                                <label>نام کاربری</label>
                                <input type="text" class=" form-control" placeholder="نام کاربری">
                            </div>
                            <div class="form-group">
                                <label>پست الکترونیک</label>
                                <input type="email" class=" form-control" placeholder="پست الکترونیک">
                            </div>
                            <div class="form-group">
                                <label>کلمه عبور</label>
                                <input type="password" class=" form-control" id="password1" placeholder="کلمه عبور">
                            </div>
                            <div class="form-group">
                                <label>تکرار کلمه عبور</label>
                                <input type="password" class=" form-control" id="password2" placeholder="تکرار کلمه عبور">
                            </div>
                            <div id="pass-info" class="clearfix"></div>
                            <button class="btn_full">ایجاد حساب کاربری</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    <!-- Specific scripts -->
    <script src="{{asset('alibaba/js/pw_strenght.js')}}"></script>

@endsection
