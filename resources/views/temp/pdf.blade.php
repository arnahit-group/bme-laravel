<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ووچر</title>

        <link rel="stylesheet" href="{{asset('style/voucher_style.css')}}">

    </head>
    <body>

        <div class="main">

            <img class="img-logo" style="width: 100px; height:100px" src="{{asset('images/main_logo_cu.png')}}">
            <h6 class="h6-title">
                فرم ذخیره محل اقامت در
                {{isset($hotel['name']->title) ?$hotel['name']->title : '' }}
            </h6>
            <h6 class="h6-title">Regulation of room reservation in</h6>

            <div class="line"></div>

            <div class="description-box">

                <span class="span-desc rtl-direction">این برگه جهت رزرو اتاق صادر گردیده است و هیچگونه اعتبار دیگری ندارد.</span>
                <span class="span-desc">This form is issued for room reservation and it has not any other value.</span>

            </div>

            <div class="input-box-address">


                <div class="top-of-box">

                    <span class="right-side title-font">نشانی</span>
                    <span class="left-side content-font ">{{isset($customer['address']->title) ?$customer['address']->title : '-' }}</span>

                </div>


                <div class="bottom-of-box">

                    <span class="left-side  title-font">Address</span>
                    <span class="right-side content-font ">{{isset($customer['address']->title) ?$customer['address']->title : '-' }}</span>

                </div>


            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">نام میهمان</span>
                        <span class="left-side content-font ">{{isset($customer['name']->title) ?$customer['name']->title : '-' }}</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">guest name</span>
                        <span class="right-side content-font ">{{isset($customer['name']->title) ?$customer['name']->title : '-' }}</span>

                    </div>


                </div>

            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">شهر مبدا</span>
                        <span class="left-side content-font ">{{isset($customer['city']->title) ?$customer['city']->title : '-' }}</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">Origin city</span>
                        <span class="right-side content-font ">{{isset($customer['city']->title) ?$customer['city']->title : '-' }}</span>

                    </div>


                </div>

            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">تلفن</span>
                        <span class="left-side content-font ">{{isset($customer['mobile']->title) ?$customer['mobile']->title : '-' }}</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">Tel</span>
                        <span class="right-side content-font ">{{isset($customer['mobile']->title) ?$customer['mobile']->title : '-' }}</span>

                    </div>


                </div>

            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">تعداد نفرات</span>
                        <span class="left-side content-font ">4</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">Number of pers</span>
                        <span class="right-side content-font ">4</span>

                    </div>


                </div>

            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">ساعت ورود</span>
                        <span class="left-side content-font ">12</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">Arrival timey</span>
                        <span class="right-side content-font ">12</span>

                    </div>


                </div>

            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">نوع اتاق</span>
                        <span class="left-side content-font ">{{isset($room['title']->title) ?$room['title']->title: '-' }}</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">Room Type:</span>
                        <span class="right-side content-font ">{{isset($room['title']->title) ?$room['title']->title: '-' }}</span>

                    </div>


                </div>

            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">تعداد اتاق</span>
                        <span class="left-side content-font ">1</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">number of room</span>
                        <span class="right-side content-font ">1</span>

                    </div>


                </div>

            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">تاریخ خروج</span>
                        <span class="left-side content-font ">{{isset($reserve['ja_end_date']->title) ?$reserve['ja_end_date']->title: '-' }}</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">Exit date</span>
                        <span class="right-side content-font ">{{isset($reserve['gr_end_date']->title) ?$reserve['gr_end_date']->title: '-' }}</span>

                    </div>


                </div>

            </div>

            <div class="input-box">

                <div class="input-box-div">

                    <div class="top-of-box">

                        <span class="right-side title-font">تاریخ ورود</span>
                        <span class="left-side content-font ">{{isset($reserve['ja_start_date']->title) ?$reserve['ja_start_date']->title: '-' }}</span>

                    </div>


                    <div class="bottom-of-box">

                        <span class="left-side title-font">Arrival date</span>
                        <span class="right-side content-font ">{{isset($reserve['gr_start_date']->title) ?$reserve['gr_start_date']->title: '-' }}</span>

                    </div>


                </div>

            </div>

            <div class="line margin-top"></div>

            <h6 class="span-desc rtl-direction">ذخیره فوق توسط خانم/آقای :
                {{isset($user['name']->title) ?$user['name']->title: '------' }}
                در تاریخ :
                {{isset($reserve['ja_confirmation_date']->title) ?$reserve['ja_confirmation_date']->title: '------' }}
                با شماره:
                {{isset($reserve['code']->title) ?$reserve['code']->title: '------' }}
                تایید گردید.
            </h6>
            <h6 class="span-desc">Above reservation is confirmed by Mr/Mrs :
                {{isset($user['name']->title) ?$user['name']->title: '------' }}
                Date :
                {{isset($reserve['gr_confirmation_date']->title) ?$reserve['gr_confirmation_date']->title: '------' }}
                NO :
                {{isset($reserve['code']->title) ?$reserve['code']->title: '------' }}
            </h6>

            <div class="line "></div>

            <div class="left-side-div">

                <div class="top-of-box-2">

                    <span class="right-side title-font">نام و امضای صادر کننده</span>
                    <span class="left-side content-font ">{{isset($user['name']->title) ?$user['name']->title: '------' }}</span>

                    <span class="left-side title-font">Name and sign of issuer</span>
                    <span class="right-side content-font ">{{isset($user['name']->title) ?$user['name']->title: '------' }}</span>

                </div>

                <div class="bottom-of-box-2">

                    <span class="right-side title-font">تاریخ</span>
                    <span class="left-side content-font ">{{isset($reserve['ja_confirmation_date']->title) ?$reserve['ja_confirmation_date']->title: '------' }}</span>

                </div>

                <div class="bottom-of-box-2">

                    <br>

                    <span class="left-side title-font">Date</span>
                    <span class="right-side content-font ">{{isset($reserve['gr_confirmation_date']->title) ?$reserve['gr_confirmation_date']->title: '------' }}</span>

                </div>

            </div>


            <div class="right-side-div">

                <div class="top-of-box-2">

                    <span class="right-side title-font">نام و امضای متقاضی</span>
                    <span class="left-side content-font ">{{isset($customer['name']->title) ?$customer['name']->title : '-' }}</span>

                    <span class="left-side title-font">Name and sign of applicant</span>
                    <span class="right-side content-font ">{{isset($customer['name']->title) ?$customer['name']->title : '-' }}</span>

                </div>

                <div class="bottom-of-box-2">

                    <span class="right-side title-font">تلفن</span>
                    <span class="left-side content-font ">{{isset($customer['mobile']->title) ?$customer['mobile']->title : '-' }}</span>


                </div>

                <div class="bottom-of-box-2">

                    <br>

                    <span class="left-side title-font">Tel</span>
                    <span class="right-side content-font ">{{isset($customer['mobile']->title) ?$customer['mobile']->title : '-' }}</span>

                </div>


            </div>

            <div class="line margin-top-2"></div>

            <div class="price-box">

                <span class="span-price">
                    نرخ اتاق :
                    {{ number_format($room['price']->prices[0])}}
                </span>
                <span class="span-price">
                    هزینه ها :
                    0
                </span>
                <span class="span-price">
                    جمع کل :
                    {{ number_format($reserve['price']->title)}}
                </span>
                <span class="span-price">
                    مبلغ دریافتی :
                    {{ number_format($reserve['price']->title)}}
                </span>
            </div>

            <div class="price-box">
                <span class="span-price">
                    Room rate :
                    {{ number_format($room['price']->prices[0])}}
                </span>
                <span class="span-price">
                    Costs :
                    0
                </span>
                <span class="span-price">
                    Total :
                    {{ number_format($reserve['price']->title)}}
                </span>
                <span class="span-price">
                    Amount Received :
                    {{ number_format($reserve['price']->title)}}
                </span>
            </div>
        </div> <!--main-->

    </body>
</html>