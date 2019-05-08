<div class="container" style="margin-top: 35px; margin-bottom: 35px;">

    <div class="post-single" style=" ">


        <div id="example-basic">
            <h3>تکمیل اطلاعات</h3>
            <section style="padding: 0 !important;  width: 100%">

                <div class="row">

                    <!--right side of post header-->
                    <div class="col l6 s12 center-on-small-only">
                        <h6 id="title-h6">اطلاعات فردی رزرو کننده</h6>

                    </div>


                    <div id="modal3" class="modal " style="z-index: -1 !important;">
                        <div class="modal-content " style="z-index: -1 !important; height: 150px;">
                            <center>
                                <div id="countdown"></div>
                            </center>
                        </div>
                        <div class="modal-footer">
                            <div style="margin: 0 !important; height: 100px" class="row center">

                                <h6 class="center h6-modal">آیا میخواهید این ماجرا را کنسل کنید ؟</h6>
                                <span class="span-mosal">در صورت تمام شدن زمان شما به مرحله بعدی می روید</span>

                                <a href="#!" class="center modal-close waves-effect waves-green btn-flat">خیر، ادامه می
                                    دهم</a>
                                <a href="#!" class="center modal-close waves-effect waves-red btn-flat"
                                   id="cancel-reserve1">لغو کردن</a>
                            </div>
                        </div>
                    </div>


                    <div id="modal2" class="modal " style="z-index: -1 !important;">
                        <div class="modal-content " style="z-index: -1 !important; height: 150px;">
                            <center>
                                <div id="countdown"></div>
                            </center>
                        </div>
                        <div class="modal-footer">
                            <div style="margin: 0 !important; height: 100px" class="row center">

                                <h6 class="center h6-modal">آیا میخواهید این ماجرا را کنسل کنید ؟</h6>
                                <span class="span-mosal">در صورت تمام شدن زمان شما به مرحله بعدی می روید</span>

                                <a href="#!" class="center modal-close waves-effect waves-green btn-flat">خیر، ادامه می
                                    دهم</a>
                                <a href="#!" class="center modal-close waves-effect waves-red btn-flat"
                                   id="cancel-reserve">لغو کردن</a>
                            </div>
                        </div>
                    </div>


                    <!--left side of post header-->
                    <div class="col l6 s12 center-on-small-only" style="padding-left: 0 !important;">
                        <a href="#modal1" class="btn-small left btn-cream margin-top modal-trigger" id="btn-res2">رزرو
                            کنید</a>

                    {{--<span id="span-res" class="span-res left">شناسه رزرو شما</span>--}}


                    <!-- Modal Structure -->
                        <div id="modal1" class="modal " style="z-index: -1 !important;">
                            <div class="modal-content" style="z-index: -1 !important;">
                                <div class="row">

                                    <form>
                                        <div class="col l4 s12 height100">

                                            <p>تاریخ ورود:</p>
                                            <input style="z-index: 5 !important;" type="text" class="datePicker dp1"
                                                   value="09-22-2019"/>
                                            <input style="z-index: 5 !important; display: block;" type="hidden"
                                                   id="alternateField" name="start"/>


                                        </div>
                                        <div class="col l4 s12 height100">

                                            <p>مدت اقامت:</p>
                                            <!--<input type="text">-->
                                            <div class="padding-option">
                                                <select class="slct-night " name="count" id="count">
                                                    <option value="" disabled selected>تعداد شب را انتخاب کنید</option>
                                                    <option value="1">یک شب</option>
                                                    <option value="2">دو شب</option>
                                                    <option value="3">سه شب</option>
                                                    <option value="4">چهار شب</option>
                                                    <option value="5">پنج شب</option>
                                                    <option value="6">شش شب</option>
                                                    <option value="7">هفت شب</option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="col l4 s12 height100">

                                            <p>گام آخر</p>
                                            <input id="btn-update-service-form" type="button" value="درج مشخصات"
                                                   class="btn-small center btn-red btn-submit">

                                        </div>
                                    </form>

                                </div>

                            </div>

                            <div class="modal-footer container">

                                <div style="margin: 0 !important;" class="row modal-footer2">

                                    <div class="col l3 s12 padding-col">
                                        <div class="date-picked-first">
                                            <div>
                                                <span class="center date-picked-title">دوشنبه 27 فروردین 98</span>
                                            </div>

                                            <p class="date-picked-description center center-align">
                                                7/127/256 ریال
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col l3 s12 padding-col">
                                        <div class="date-picked-first">
                                            <div>
                                                <span class="center date-picked-title">دوشنبه 27 فروردین 98</span>
                                            </div>

                                            <p class="date-picked-description center center-align">
                                                7/127/256 ریال
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col l3 s12 padding-col">
                                        <div class="date-picked-first">
                                            <div>
                                                <span class="center date-picked-title">دوشنبه 27 فروردین 98</span>
                                            </div>

                                            <p class="date-picked-description center center-align">
                                                7/127/256 ریال
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col l3 s12 padding-col">
                                        <div class="date-picked-first">
                                            <div>
                                                <span class="center date-picked-title">دوشنبه 27 فروردین 98</span>
                                            </div>

                                            <p class="date-picked-description center center-align">
                                                7/127/256 ریال
                                            </p>
                                        </div>
                                    </div>


                                </div>

                                <!--<a href="#!" class="modal-close waves-effect waves-red btn-flat">بستن</a>-->
                            </div>

                        </div>

                        <!--modal-close class can close the modal-->
                        <!-- Modal Structure -->

                    </div>
                </div>

                <div class="row">

                    <div id="right-side-content" class="col l6 s12  content-right-side ">

                        <div class="special-service hide-on-med-and-down col l11">

                            <div>
                                <span class="center special-service-title">اطلاعیه مهم</span>
                            </div>

                            <p class="special-service-description">

                                لطفا شماره موبایلتان را بررسی کنید، ما از این طریق رزورتان را بررسی میکنیم.

                            </p>
                        </div>


                        @if($user != null and isset($user['name'])==true and isset($user['name']->title)==true )
                            <input id="input-name" type="text" class="dp2 col l5 s11 " placeholder="نام و نام خانوادگی"
                                   value="{{$user['name']->title}}">
                        @else
                            <input id="input-name" type="text" class="dp2 col l5 s11 " placeholder="نام و نام خانوادگی"
                                   value="{{env('DEBUG_MODE') == 1? "k"  : ""  }}">
                        @endif

                        @if($user != null and isset($user['email'])==true  and isset($user['email']->title)==true )
                            <input id="input-email" type="email" class="dp2 dp3 col l5 s11"
                                   placeholder="آدرس ایمیلتان را وارد کنید" value="{{$user['email']->title}}">
                        @else
                            <input id="input-email" type="email" class="dp2 dp3 col l5 s11"
                                   placeholder="آدرس ایمیلتان را وارد کنید"
                                   value="{{env('DEBUG_MODE') == 1? "k@ya.com"  : ""  }}">
                        @endif
                        @if($user != null and isset($user['mobile'])==true and isset($user['mobile']->title)==true)
                            <input id="input-mobile" type="text" class="dp2 col l5 s11" placeholder="شماره موبایل"
                                   value="{{$user['mobile']->title}}">
                        @else
                            <input id="input-mobile" type="text" class="dp2 col l5 s11" placeholder="شماره موبایل"
                                   value="{{env('DEBUG_MODE') == 1? "09365982333"  : ""  }}">
                        @endif

                        @if($user != null and isset($user['phone'])==true and isset($user['phone']->title)==true)
                            <input id="input-phone" type="text" class="dp2 dp3 col l5 s11" placeholder="تلفن ثابت"
                                   value="{{$user['phone']->title}}">
                        @else
                            <input id="input-phone" type="text" class="dp2 dp3 col l5 s11" placeholder="تلفن ثابت"
                                   value="{{env('DEBUG_MODE') == 1? "01342547909"  : ""  }}">
                        @endif

                        <div class="col l6 s12 center-on-small-only">
                            <h6 id="title-h6" class="title-of-form">مشخصات تکمیلی</h6>

                        </div>


                        <div class="special-service hide-on-med-and-down col l11">

                            <div>
                                <span class="center special-service-title">اطلاعیه مهم</span>
                            </div>

                            <p class="special-service-description">

                                برای کودکان بالای شش سال باید از تخت اضافه استفاده کنید.

                            </p>


                        </div>
                        <div class="col l7 s5 padding-option" style="padding: 0 !important;" id="input-kids">

                            <select class="slct-kid">
                                <option value="" disabled selected>سن کودک را انتخاب کنید</option>
                                <option value="1">یک ال 5</option>
                                <option value="2">6 الی یازده</option>
                                <option value="3">یازده الی شانزده</option>
                                <option value="4">هفده الی آخر</option>


                            </select>


                        </div>

                        <div class="col l7 s5 padding-option" style="padding: 0 !important;" id="input-beds">

                            <select class="slct-kid">
                                <option value="" disabled selected>تعداد تخت را انتخاب کنید</option>
                                <option value="1">یک تخت</option>
                                <option value="2">دو تخت</option>
                                <option value="3">سه تخت</option>
                                <option value="4">چهار تخت</option>
                                <option value="5">پنج تخت</option>


                            </select>


                        </div>


                        <div class="col l8 s12 center-on-small-only">
                            <h6 id="title-h6" class="title-of-form">آیا برای کار سفر می کنید؟</h6>

                        </div>

                        <div class="col l10 center-on-small-only">


                            <p style="display: inline-block">
                                <label>
                                    <input name="group1" type="radio" checked/>
                                    <span class="radio-span">بله</span>
                                </label>
                            </p>

                            <p style="display: inline-block; margin-right: 10px">
                                <label>
                                    <input name="group1" type="radio"/>
                                    <span class="radio-span">خیر</span>
                                </label>
                            </p>

                            <textarea id="txt-area" class="txt-area col s12"
                                      placeholder="درخواستی از هتل دارید؟ اینجا بنویسید."></textarea>

                            <p style="display: inline-block">
                                <label>
                                    <input name="group2" type="radio"/>
                                    <span class="radio-span">قوانین را مطالعه کرده ام و قبول دارم.</span>
                                </label>
                            </p>

                            <div id="more-inf" class="more-inf center-on-small-only"
                                 style="margin-right: 0 !important;">
                                <a href="#">اطلاعات بیشتر</a>
                                <img class="responsive-img" src="{{asset('images/left-arrow.png')}}">
                            </div>


                        </div>


                    </div>


                    <div id="left-side-content" class="col l6 s12  content-left-side">

                        <div class="col s12 room-pic"></div>
                        <div class="col s12 room-pic-des">
                            <span>{{$room->properties['title']->title}}</span>
                        </div>

                        <div class="col s6 room-date">

                            <span class="span-date grey-text">تاریخ ورود</span>
                            <span class="span-date black-text left" id="spn-start-date">{{$dates[0]}}</span>


                        </div>

                        <div class="col s6  room-date rd2">

                            <span class="span-date grey-text">تاریخ خروج</span>
                            <span class="span-date black-text left" id="spn-end-date">{{$dates[count($dates)-1]}}</span>

                        </div>

                        <div class="col s12  room-day-price" id="dv-dates">

                            @php($p=0)
                            @foreach($dates as $d)
                                <span class="black-text">{{$d}}</span>
                                <span class="left">{{number_format($object->properties['price']->prices[0])}}
                                    تومان</span>
                                <br>
                                @php($p+=$object->properties['price']->prices[0])
                            @endforeach
                            {{--<span class="black-text">سه شنبه، 28 فروردین 1398</span>--}}
                            {{--<span class="left">7/568/245 ریال</span>--}}
                        </div>

                        <div class="col s12 room-description">

                            <span class="black-text">{{$room->properties['description']->title}}</span>

                        </div>

                        <input type="hidden" id="input-price" value="{{$p}}">
                        <a id="btn-grey" href="#"
                           class="btn-small left btn-grey ">مجموع {{number_format($p)}}</a>
                        <a href="#modal1" class="btn-small left btn-dash modal-trigger">ویرایش تقویم</a>

                        <div class="col s12 more-bedroom-services">

                            {{--<span class="black-text">سرویس خواب اضافه:</span>--}}
                            {{--<span class="black-text">900/000 ریال</span>--}}

                            {{--<div class="img-check  left">--}}
                            {{--<img src="{{asset('images/checked.png')}}" class="">--}}

                            {{--</div>--}}


                        </div>


                        <div class="col s12 more-bedroom-des">

                            <span>در صورت کنسل‌کردن رزرو، بر‌اساس قوانین کنسلی هتل مبلغ پرداخت‌شده حداکثر تا 7 روز کاری به حساب کاربری شما باز‌می‌گردد.</span>


                        </div>


                        <div class="col s12 left" id="btn-green" style="text-align: left">


                            <a class="btn-green" href="#">مجموع {{ number_format($p) }} هزار تومان</a>

                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <input type="button" href="#" value="تایید اطلاعات و رزرو"
                               class="btn-small btn-red btn-submit left" id="btn-go-to-step-2">
                    </div>
                </div>

            </section>


            <h3>بازبینی و پرداخت</h3>
            <section style="padding: 0 !important;  width: 100%; display: block !important;">


                <div id="modal21" class="modal " style="z-index: -1 !important;">
                    <div class="modal-content " style="z-index: -1 !important; height: 150px;">

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" id="atm-code">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div style="margin: 0 !important; height: 100px" class="row center">
                            {{--<h6 class="center h6-modal">آیا میخواهید این ماجرا را کنسل کنید ؟</h6>--}}
                            {{--<span class="span-mosal">در صورت تمام شدن زمان شما به مرحله بعدی می روید</span>--}}

                            <button id="btn-upload-check" class="center waves-effect waves-green btn-flat">
                                ارسال
                            </button>
                            <a href="#!" class="center modal-close waves-effect waves-red btn-flat"
                               id="cancel-reserve" onclick="$('#modal21').modal('close');">لغو</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col l6 s12 rs-col">
                        <div class="center-on-small-only btn-bg">
                            <span class="">شناسه رزرو شما</span>
                            <a href="#" class="btn-small  btn-cream bc-2" id="reservation-code">51654615</a>
                        </div>

                        <center>
                            <div id="countdown-1" style="font-size: 72px; color: red"></div>
                            <div id="countdown-2" style="font-size: 72px; color: green" hidden></div>
                            <div id="countdown-3" style="font-size: 72px; color: blue" hidden></div>
                        </center>
                        <center>
                            <h6 id="h-counter-info">
                                لطفا جهت تایید اتاق صبر نمایید
                            </h6>
                        </center>

                    </div>

                    <div class="col l6 s12 ls-col ">


                        <div id="ss-box" class="ss-box  col l12 ">


                            <div>
                                <span class="center ss-title">هورا ! فقط یه گام دیگه تا رزرو اتاق</span>
                            </div>


                            <div id="total-price" class="total-price center-on-small-only">

                                <img class="responsive-img" src="{{asset('images/green-check.png')}}">
                                <span id="btn-grey-2">مجموع:
                                    {{number_format($p)}}
                                    ریال</span>

                            </div>

                            <div id="div-empty" class="div-empty">

                                <div class="div-empty-child"></div>
                                <div class="div-empty-child"></div>
                                <div class="div-empty-child"></div>


                            </div>


                            <div class="sup-box hide-on-med-and-down">

                                <span>پشتیبانی هتل</span>
                                <a class="btn-green_2" href="#">تماس بگیرید</a>
                            </div>

                        </div>


                    </div>

                    <br>
                    <br>
                    <br>


                    <div class="col s12 l12 center-on-small-only title-in-post">

                        <h6>شیوه پرداخت</h6>

                    </div>


                </div>

                <div class="row " style="min-height: 250px !important;">

                    <div id="pay-box-bg0" class="col l6 s12 height110 pay-col">

                        <div class="pay-box-bg">
                            <div class="pay-box">

                                <span>پرداخت اینترنتی</span>

                            </div>

                            <div class="bank-div">


                                <label>
                                    <input name="group1" type="radio" checked/>
                                    <span>از طریق بانک ملت</span>
                                </label>

                                <div class="left img-bank-div  center-align">
                                    <img src="{{asset('images/Mellat-logo.png')}}">
                                </div>


                            </div>

                            <div class="bank-div border-top">


                                <label>
                                    <input name="group1" type="radio" checked/>
                                    <span>از طریق بانک سامان</span>
                                </label>

                                <div class="left img-bank-div  center-align">
                                    <img src="{{asset('images/Saman-logo.png')}}">
                                </div>

                            </div>

                            <div class="bank-div ">
                                <input type="button" value="پرداخت آنلاین" id="pay-online"
                                       class="btn-small btn-red btn-submit btn-pay btn-unavailable">
                            </div>

                        </div>
                    </div>

                    <div id="pay-box-bg" class="col l6 s12 height110 pay-col2">

                        <div class="pay-box-bg ">
                            <div class="pay-box">

                                <span>کارت به کارت</span>

                            </div>

                            <div class="bank-div-p center-align ">
                                <p>شما میتوانید مبلغ تعیین شده را از طریق کارت به کارت
                            <br>
                                    واریز نمایید و رسید را ارسال
                                    کنید.</p>

                                <br>
                            </div>
                            <div class="bank-div bottom-class" style="margin-bottom: 5px !important;">

                                <input id="btn-open-modal-for-atm-code" type="button" value="ارسال رسید"
                                       class="btn-small btn-red btn-submit btn-pay btn-unavailable">

                            </div>

                        </div>
                    </div>

                    <div id="pay-box-bg2" class="col l4 s12 height110 pay-col3" hidden>
                        <div class="pay-box-bg">
                            <div class="pay-box">
                                <span>پرداخت از طریق اعتبار</span>
                            </div>

                            <div class="bank-div-p center-align">
                                <p>شما میتوانید مبلغ تعیین شده را از اعتبار ریالی موجود در پروفایل کاربری خود استفاده
                                    نمایید.</p>
                            </div>

                            <div class="bank-div bottom-class">
                                <input type="button" href="#" value="غیر فعال"
                                       class="btn-small btn-unavailable btn-submit btn-pay ">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col s12 l12 center-on-small-only"
                     style="border-right: solid #9d0808 7px; padding: 0 !important; height: 40px">


                    <h6 style="line-height: 40px; margin: 0 30px 0 0 !important;">قوانین رزرو در ایام تعطیل</h6>

                </div>


                <div class="row row-rules">

                    <div class="col s12 row-rules-div">

                        <p>هیچ فرد حقیقی و حقوقی نباید از محتویات هتل صبوری، شامل اطلاعات، عکس‌ها، شیوه سازماندهی و
                            دسته‌بندی مطالب، نقشه‌ها، طرح‌ها، ایده‌ها، لوگو و... سوءاستفاده کند. در صورت سوءاستفاده هتل
                            صبوری می‌تواند از طریق قانونی این مسئله را پیگیری کند. استفاده از مطالب هتب صبوری در اینترنت
                            فقط با ذکر نام وآدرس اینترنتی وب‌سایت هتل صبوری و لینک به مطلب موردنظر مجاز است. همچنین برای
                            استفاده از مطالب وب‌سایت در رسانه‌های چاپی دریافت اجازه کتبی از مسئولان وب‌سایت ضروری
                            است.</p>

                    </div>


                </div>

                <div class="row row-sup">

                    <div class="col s12 row-sup-div">

                        <div class="row">

                            <div class=" col l1 s12 img-sup-bg center-on-small-only">

                                <img class="responsive-img img-sup" src="{{asset('images/support.png')}}">

                            </div>


                            <div class=" col l11 s12">

                                <h6 class="sup-title">پشتیبانی هتل سه ستاره صبوری</h6>
                                <p style="display: inline-block">در صورت بروز هر گونه سوال یا وجود مشکل در روند پرداخت
                                    یا عملکرد سایت با پشتیبانی ما ارتباط برقرار نمایید تا مشکل موجود رفع شود و شما همچون
                                    روال رزرو به پرداخت خود ادامه دهید و مشکلی نباشد.</p>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <input type="button" href="#" value="دریافت واچر" disabled
                               class="btn-small btn-red btn-submit left " id="btn-go-to-step-3">
                    </div>
                </div>


            </section>
            <h3>دریافت واچر هتل</h3>
            <section style="padding: 0 !important; width: 100%; margin: 0 !important;">


                <div class="row" style="padding: 30px">

                    <div class="col s12 pay-msg">

                        <span>تبریک ، پرداخت شما با موفقیت صورت گرفت. لطفا واچر خود را پرینت نمایید.</span>

                    </div>
                    <div class="col l6 s12 right-s">

                        <div class="row">

                            <div id="img-bg-gb" class="col l4 s12 img-bg-gb center-on-small-only">

                                <img src="{{asset('images/qabz.png')}}">

                            </div>

                            <div class="col l8 s12 desc-bg center-on-small-only">

                                <h6>واچرز رزرو اتاق شما</h6>
                                <p>برای مستقر شدن در اتاق خود نیاز به واچر پیگیری دارید که از این قسمت باید پرینت و نزد
                                    خود گهداری نمایید.</p>
                                <a href="{{route('home.voucher.print')}}" id="btn-print-voucher"
                                   class="btn-small btn-red btn-submit btn-print" target="_blank">
                                    پرینت واچر هتل

                                </a>

                            </div>

                        </div>

                    </div>


                    <div id="left-s" class="col l6 s12 left-s">


                        <div class="row">

                            <div id="img-bg-gb" class="col l4 s12 img-bg-gb center-on-small-only">

                                <img src="{{asset('images/print.png')}}">

                            </div>

                            <div class="col l8 s12 desc-bg center-on-small-only">

                                <h6>فاکتور پرداخت</h6>
                                <p>فاکتور پرداخت دروازه بانکی با شناسه تراکش شما اکنون قابل دریافت میباشد.</p>
                                <input type="button" href="#" value="پرینت فاکتور پرداخت"
                                       class="btn-small btn-red btn-submit btn-print btn-unavailable">

                            </div>

                        </div>


                    </div>


                </div>


                <div class="col s12 l12 " style="border-right: solid #9d0808 7px; padding: 0 !important; height: 40px">


                    <h6 style="line-height: 40px; margin: 0 30px 0 0 !important;">چگونه پیگیری کنیم ؟</h6>

                </div>


                <div class="row row-rules">

                    <div class="col s12 row-rules-div">

                        <p>هیچ فرد حقیقی و حقوقی نباید از محتویات هتل صبوری، شامل اطلاعات، عکس‌ها، شیوه سازماندهی و
                            دسته‌بندی مطالب، نقشه‌ها، طرح‌ها، ایده‌ها، لوگو و... سوءاستفاده کند. در صورت سوءاستفاده هتل
                            صبوری می‌تواند از طریق قانونی این مسئله را پیگیری کند. استفاده از مطالب هتب صبوری در اینترنت
                            فقط با ذکر نام وآدرس اینترنتی وب‌سایت هتل صبوری و لینک به مطلب موردنظر مجاز است. همچنین برای
                            استفاده از مطالب وب‌سایت در رسانه‌های چاپی دریافت اجازه کتبی از مسئولان وب‌سایت ضروری
                            است.</p>

                    </div>


                </div>

                <div class="row row-sup">

                    <div class="col s12 row-sup-div">

                        <div class="row">

                            <div class=" col l1 s12 img-sup-bg center-on-small-only">

                                <img class="responsive-img img-sup" src="{{asset('images/support.png')}}">

                            </div>


                            <div class=" col l11 s12">

                                <h6 class="sup-title">پشتیبانی هتل سه ستاره صبوری</h6>
                                <p style="display: inline-block">در صورت بروز هر گونه سوال یا وجود مشکل در روند پرداخت
                                    یا عملکرد سایت با پشتیبانی ما ارتباط برقرار نمایید تا مشکل موجود رفع شود و شما همچون
                                    روال رزرو به پرداخت خود ادامه دهید و مشکلی نباشد.</p>

                            </div>


                        </div>
                    </div>


                </div>


            </section>
        </div>


    </div>


</div>
