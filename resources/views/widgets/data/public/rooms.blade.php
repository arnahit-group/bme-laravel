<h6 class="center contact_us_h6_2">آرشیو هتل ها</h6>
<span class="center contact_us_span_2"
      style="display: block">اینجا می توانید انواع اتاق های ما را مشاهده کنید</span>


<!--todo add posts-archive class-->

<div class="container posts-archive">
    <div class="row">
        @foreach($datas as $data)

            @include('widgets.data.public.room_widget' , ['data'=>$data])

        @endforeach
    </div>
</div>
