<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>

        @include('admin.layouts.widgets.breadcrumbs', ['page_title'=>$page_title , 'breadcrumbs'=> $breadcrumbs])


        <div class="col s12">
            <div class="container">
                <div class="section">
                    <div class="card">
                        <div class="card-content">
                            <p class="caption mb-0">Masonry with Magnific Popup is a responsive lightbox &
                                dialog script with focus on
                                performance and providing best experience for user with any device</p>
                        </div>
                    </div>

                    <div class="row">

                        @foreach($datas as $data)
                            @if(isset($widgets[0]->widget))
                                @include($widgets[0]->widget , ['data'=>$data])
                            @endif
                        @endforeach

                    </div>
                </div>
                <!-- START RIGHT SIDEBAR NAV -->
            @include('admin.layouts.widgets.overlay_side_bar')
            <!-- END RIGHT SIDEBAR NAV -->
                @can($permissions['create'])
                    <div class="fixed-action-btn direction-top" style="bottom: 54px; left: 19px;">
                        <a class="btn-floating btn-large primary-text gradient-shadow modal-trigger"
                           href="{{$urls['create']}}">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
                @endcan
            </div>
        </div>
    </div>
</div>
