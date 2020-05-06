@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- Radio and check inputs -->
    <link href="{{asset('alibaba/css/skins/square/grey.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')
    <section id="hero_2">
        <div class="intro_title animated fadeInDown">
            <h1>بصورت مستقیم سفارش دهید</h1>
            <div class="bs-wizard">

                <div class="col-xs-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">سبد خرید شما</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="cart.html" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">جزییات سفارش</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="payment.html" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum">پایان!</div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="confirmation_fixed_sidebar.html#" class="bs-wizard-dot"></a>
                </div>

            </div>  <!-- End bs-wizard -->
        </div>   <!-- End intro-title -->
    </section><!-- End Section hero_2 -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="confirmation_fixed_sidebar.html#">صفحه اصلی</a></li>
                <li><a href="confirmation_fixed_sidebar.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 add_bottom_15">

                <div class="form_title">
                    <h3><strong><i class="icon-ok"></i></strong>از شما متشکرم!</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                </div>
                <div class="step">
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                        شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                        ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای
                        اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                </div><!--End step -->

                <div class="form_title">
                    <h3><strong><i class="icon-tag-1"></i></strong>خلاصه رزرو</h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                    </p>
                </div>
                <div class="step">
                    <table class="table confirm">
                        <thead>
                            <tr>
                                <th colspan="2">
                                    مورد ۱
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>بلیط موزه اصفهان</strong>
                                </td>
                                <td>
                                    ۲ نفر
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>تاریخ</strong>
                                </td>
                                <td>
                                    ۲ اردیبهشت ۱۳۹۶
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>به</strong>
                                </td>
                                <td>
                                    محسن حبیبی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>نوع پرداخت</strong>
                                </td>
                                <td>
                                    کارت اعتباری
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table confirm">
                        <thead>
                            <tr>
                                <th colspan="2">
                                    مورد ۲
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>تور کیش</strong>
                                </td>
                                <td>
                                    ۲ نفر
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>تاریخ</strong>
                                </td>
                                <td>
                                    ۳ اردیبهشت ۱۳۹۶
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>به</strong>
                                </td>
                                <td>
                                    محسن حبیبی
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>نوع پرداخت</strong>
                                </td>
                                <td>
                                    کارت اعتباری
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--End step -->
            </div><!--End col-md-8 -->

            <aside class="col-md-4" id="sidebar">
                <div class="theiaStickySidebar">
                    <div class="box_style_1" id="booking_box">
                        <h3 class="inner">از شما متشکریم!</h3>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است
                        </p>
                        <hr>
                        <a class="btn_full_outline" href="invoice.html" target="_blank">مشاهده صورت حساب</a>
                    </div>
                </div><!--End sticky -->
            </aside>

        </div><!--End row -->
    </div><!--End container -->

@endsection

@section('footer')
    <script src="{{asset('alibaba/js/icheck.js')}}"></script>
    <script>
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
    </script>

    <!-- Fixed sidebar -->
    <script src="{{asset('alibaba/js/theia-sticky-sidebar.js')}}"></script>
    <script>
        jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
        });
    </script>

@endsection
