@extends('public.themes.alibaba.layouts.public')
@section('vendor-css')
    <!-- CSS -->
    <link href="{{asset('alibaba/css/blog.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection
@section('main')
    <section class="parallax-window" data-image-src="img/bg_blog.jpg" data-natural-height="470" data-natural-width="1400" data-parallax="scroll">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>سفرنامه</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p></div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="blog.html#">صفحه اصلی</a></li>
                <li><a href="blog.html#">دسته بندی</a></li>
                <li>صفحه فعال</li>
            </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <aside class="col-md-3 add_bottom_30">

                <div class="widget">
                    <div class="input-group">
                        <input class="form-control" placeholder="جستجو ..." type="text">
                        <span class="input-group-btn">
						<button class="btn btn-default" style="margin-left:0;" type="button"><i class="icon-search"></i></button>
						</span>
                    </div><!-- /input-group -->
                </div><!-- End Search -->

                <hr>

                <div class="widget" id="cat_blog">
                    <h4>دسته بندی ها</h4>
                    <ul>
                        <li><a href="blog.html#">مکان های دیدنی</a></li>
                        <li><a href="blog.html#">تورهای برتر</a></li>
                        <li><a href="blog.html#">نکاتی برای مسافران</a></li>
                        <li><a href="blog.html#">مناسبت ها</a></li>
                    </ul>
                </div><!-- End widget -->

                <hr>

                <div class="widget">
                    <h4>پست های اخیر</h4>
                    <ul class="recent_post">
                        <li>
                            <i class="icon-calendar-empty"></i> ۲ اردیبهشت ۱۳۹۶
                            <div><a href="blog.html#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a></div>
                        </li>
                        <li>
                            <i class="icon-calendar-empty"></i> ۲ اردیبهشت ۱۳۹۶
                            <div><a href="blog.html#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a></div>
                        </li>
                        <li>
                            <i class="icon-calendar-empty"></i> ۲ اردیبهشت ۱۳۹۶
                            <div><a href="blog.html#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a></div>
                        </li>
                    </ul>
                </div><!-- End widget -->
                <hr>
                <div class="widget tags">
                    <h4>برچسب ها</h4>
                    <a href="blog.html#">لورم اپیسوم</a>
                    <a href="blog.html#">سفرنامه</a>
                    <a href="blog.html#">سفر</a>
                    <a href="blog.html#">مسافرت</a>
                    <a href="blog.html#">کلمات لاتین</a>
                    <a href="blog.html#">مسافرت های خارجه</a>
                </div><!-- End widget -->

            </aside><!-- End aside -->

            <div class="col-md-9">
                <div class="box_style_1">
                    <div class="post">
                        <a href="blog_post.html" title="blog_post.html"><img alt="" class="img-responsive" src="img/blog-3.jpg"></a>
                        <div class="post_info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><i class="icon-calendar-empty"></i> تاریخ <span>۲ اردیبهشت ۱۳۹۶</span></li>
                                    <li><i class="icon-inbox-alt"></i> که در <a href="blog.html#">تور های برتر</a></li>
                                    <li><i class="icon-tags"></i> برچسب ها <a href="blog.html#">دنیا</a>, <a href="blog.html#">سفرنامه ها</a></li>
                                </ul>
                            </div>
                            <div class="post-right"><i class="icon-comment"></i><a href="blog.html#">۲۵ </a></div>
                        </div>
                        <h2>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</h2>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد.......
                        </p>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد.......
                        </p>
                        <a class="btn_1" href="blog_post.html" title="blog_post.html">ادامه مطلب</a>
                    </div><!-- end post -->

                    <hr>

                    <div class="post">
                        <a href="blog_post.html" title="blog_post.html"><img alt="" class="img-responsive" src="img/blog-1.jpg"></a>
                        <div class="post_info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><i class="icon-calendar-empty"></i> تاریخ <span>۲ اردیبهشت ۱۳۹۶</span></li>
                                    <li><i class="icon-inbox-alt"></i> که در <a href="blog.html#">تور های برتر</a></li>
                                    <li><i class="icon-tags"></i> برچسب ها <a href="blog.html#">دنیا</a>, <a href="blog.html#">سفرنامه ها</a></li>
                                </ul>
                            </div>
                            <div class="post-right"><i class="icon-comment"></i><a href="blog.html#">۲۵ </a>نظرات</div>
                        </div>
                        <h2>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</h2>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد......
                        </p>
                        <a class=" btn_1" href="blog_post.html">ادامه مطلب</a>
                    </div><!-- end post -->

                    <hr>

                    <div class="post">
                        <a href="blog_post.html" title="blog_post.html"><img alt="" class="img-responsive" src="img/blog-2.jpg"></a>
                        <div class="post_info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><i class="icon-calendar-empty"></i> تاریخ <span>۲ اردیبهشت ۱۳۹۶</span></li>
                                    <li><i class="icon-inbox-alt"></i> که در <a href="blog.html#">تور های برتر</a></li>
                                    <li><i class="icon-tags"></i> برچسب ها <a href="blog.html#">دنیا</a>, <a href="blog.html#">سفرنامه ها</a></li>
                                </ul>
                            </div>
                            <div class="post-right"><i class="icon-comment"></i><a href="blog.html#">۲۵ </a>نظرات</div>
                        </div>
                        <h2>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</h2>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد......
                        </p>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                            که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان فارسی ایجاد کرد.......
                        </p>
                        <a class="btn_1" href="blog_post.html" title="blog_post.html">ادامه مطلب</a>
                    </div><!-- end post -->
                </div><!-- end box style -->
                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="blog.html#">قبلی</a></li>
                        <li class="active"><a href="blog.html#">۱</a></li>
                        <li><a href="blog.html#">۲</a></li>
                        <li><a href="blog.html#">۳</a></li>
                        <li><a href="blog.html#">۴</a></li>
                        <li><a href="blog.html#">۵</a></li>
                        <li><a href="blog.html#">بعدی</a></li>
                    </ul><!-- end pagination-->
                </div>
            </div><!-- End col-md-9-->
        </div><!-- End row-->
    </div><!-- End container -->

@endsection

@section('footer')

@endsection
