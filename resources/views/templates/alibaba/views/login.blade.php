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
                            <div class="row">
                                <div class="col-md-6 col-sm-6 login_social">
                                    <a href="login.html#" class="btn btn-primary btn-block"><i class="icon-facebook"></i> فیسبوک</a>
                                </div>
                                <div class="col-md-6 col-sm-6 login_social">
                                    <a href="login.html#" class="btn btn-info btn-block "><i class="icon-twitter"></i>توییتر</a>
                                </div>
                            </div> <!-- end row -->
                            <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or">یا</span></div>

                            <div class="form-group">
                                <label>نام کاربری</label>
                                <input type="text" class=" form-control " placeholder="نام کاربری">
                            </div>
                            <div class="form-group">
                                <label>کلمه عبور</label>
                                <input type="password" class=" form-control" placeholder="کلمه عبور">
                            </div>
                            <p class="small">
                                <a href="login.html#">رمز عبور خود را فراموش كرده ايد؟?</a>
                            </p>
                            <a href="login.html#" class="btn_full">ورود</a>
                            <a href="register.html" class="btn_full_outline">ثبت نام</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')

@endsection
