@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/search.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/gallery.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/search.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/gallery.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
        <!-- END: Custom CSS-->

    @endif


@endsection
@section('main')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Search Images</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                            href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/rtl/vertical-modern-menu-template/inde.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="search-images.html#">Search</a>
                                </li>
                                <li class="breadcrumb-item active">Search Images
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="ft-settings icon-left"></i> Settings
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a
                                        class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
                        </div>
                        <a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="ft-mail"></i></a><a class="btn btn-outline-primary"
                                                                                                                         href="timeline-center.html"><i
                                    class="ft-pie-chart"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Search form-->
                <section id="search-images" class="card overflow-hidden">
                    <div class="card-header">
                        <h4 class="card-title">Images search results</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pb-0">
                            <fieldset class="form-group position-relative mb-0">
                                <input type="text" class="form-control form-control-xl input-xl" id="iconLeft1" placeholder="Explore Stack ...">
                                <div class="form-control-position">
                                    <i class="ft-mic font-medium-4"></i>
                                </div>
                            </fieldset>
                        </div>
                        <!--Search Navbar-->
                        <div id="search-nav" class="card-body">
                            <ul class="nav nav-inline">
                                <li class="nav-item">
                                    <a class="nav-link" href="search-website.html"><i class="fa fa-link"></i> Website</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="search-images.html"><i class="fa fa-file-image-o"></i> Images</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="search-videos.html"><i class="fa fa-file-video-o"></i> Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="search-images.html#"><i class="fa fa-map-marker"></i> Maps</a>
                                </li>
                                <li class="dropdown nav-item float-right">
                                    <a href="search-images.html#" class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="pe-li-settings"></i> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="search-images.html#" class="dropdown-link">Languages</a></li>
                                        <li class="dropdown-item"><a href="search-images.html#" class="dropdown-link">Search Settings</a></li>
                                        <li class="dropdown-item"><a href="search-images.html#" class="dropdown-link">History</a></li>
                                        <li class="dropdown-item"><a href="search-images.html#" class="dropdown-link">Search Help</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/ Search Navbar-->
                        <!--Search Result-->
                        <div id="search-results" class="card-body">
                            <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                <div class="card-deck-wrapper">
                                    <div class="card-deck">
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/1.jpg')}}"
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/1.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Maecenas</span> sollicitudin <span class="font-small-2 text-muted float-right">720 x 600</span></p>
                                                <p class="card-text">Nulla ac vulputate mauris. Nam tincidunt odio purus.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/2.jpg')}}"
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/2.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Aliquam </span> vel nib <span class="font-small-2 text-muted float-right">480 x 360</span></p>
                                                <p class="card-text">Phasellus vitae aliquam felis, et bibendum orci.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/3.jpg')}}" 
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/3.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Molestie </span> accumsan <span class="font-small-2 text-muted float-right">480 x 360</span></p>
                                                <p class="card-text">Maecenas commodo odio sed nibh viverra vestibulum.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/4.jpg')}}" 
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/4.jpg')}}" 
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Nam eu </span> efficitur <span class="font-small-2 text-muted float-right">500 x 360</span></p>
                                                <p class="card-text">Donec porttitor massa vitae leo rutrum viverra.</p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="card-deck-wrapper">
                                    <div class="card-deck mt-1">
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/5.jpg')}}" 
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/5.jpg')}}" 
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Porttitor </span> donec <span class="font-small-2 text-muted float-right">560 x 360</span></p>
                                                <p class="card-text">Sed suscipit velit vitae justo pharetra.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/6.jpg')}}" 
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/6.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Velit et </span> interdum <span class="font-small-2 text-muted float-right">500 x 360</span></p>
                                                <p class="card-text"> Duis auctor velit et interdum maximus.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/7.jpg')}}"
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/7.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Natoque </span> efficitur <span class="font-small-2 text-muted float-right">800 x 600</span></p>
                                                <p class="card-text">Cum sociis natoque penatibus et magnis dis.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/8.jpg')}}"
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/8.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Pharetra </span> enim id <span class="font-small-2 text-muted float-right">500 x 360</span></p>
                                                <p class="card-text">Mauris imperdiet enim id urna pharetra.</p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="card-deck-wrapper">
                                    <div class="card-deck mt-1">
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/9.jpg')}}"
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/9.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Integer </span> fermentum <span class="font-small-2 text-muted float-right">380 x 360</span></p>
                                                <p class="card-text">Vel lacinia cursus, est dui tincidunt sem.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/10.jpg')}}"
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/10.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Donec congue </span> nec <span class="font-small-2 text-muted float-right">500 x 360</span></p>
                                                <p class="card-text">Morbi laoreet ultrices mi ut imperdiet.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/11.jpg')}}"
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/11.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Vivamus  </span> eget<span class="font-small-2 text-muted float-right">500 x 360</span></p>
                                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </figure>
                                        <figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                            <a href="{{asset('admin-assets/images/gallery/12.jpg')}}"
                                               itemprop="contentUrl" data-size="480x360">
                                                <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/gallery/12.jpg')}}"
                                                     itemprop="thumbnail"
                                                     alt="Image description"/>
                                            </a>
                                            <div class="card-body px-0">
                                                <p><span class="text-bold-600">Aenean </span> pharetra <span class="font-small-2 text-muted float-right">500 x 360</span></p>
                                                <p class="card-text">Ligula ornare velit porttitor viverra et a felis.</p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination pagination-separate pagination-round pagination-flat">
                                            <li class="page-item">
                                                <a class="page-link" href="search-images.html#" aria-label="Previous">
                                                    <span aria-hidden="true">« Prev</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="search-images.html#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="search-images.html#">2</a></li>
                                            <li class="page-item active"><a class="page-link" href="search-images.html#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="search-images.html#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="search-images.html#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="search-images.html#" aria-label="Next">
                                                    <span aria-hidden="true">Next »</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Root element of PhotoSwipe. Must have class pswp. -->
                            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                <!-- Background of PhotoSwipe.
                               It's a separate element as animating opacity is faster than rgba(). -->
                                <div class="pswp__bg"></div>
                                <!-- Slides wrapper with overflow:hidden. -->
                                <div class="pswp__scroll-wrap">
                                    <!-- Container that holds slides.
                                  PhotoSwipe keeps only 3 of them in the DOM to save memory.
                                  Don't modify these 3 pswp__item elements, data is added later on. -->
                                    <div class="pswp__container">
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                    </div>
                                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                    <div class="pswp__ui pswp__ui--hidden">
                                        <div class="pswp__top-bar">
                                            <!--  Controls are self-explanatory. Order can be changed. -->
                                            <div class="pswp__counter"></div>
                                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                            <button class="pswp__button pswp__button--share" title="Share"></button>
                                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                            <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                            <!-- element will get class pswp__preloader-active when preloader is running -->
                                            <div class="pswp__preloader">
                                                <div class="pswp__preloader__icn">
                                                    <div class="pswp__preloader__cut">
                                                        <div class="pswp__preloader__donut"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                            <div class="pswp__share-tooltip"></div>
                                        </div>
                                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                        </button>
                                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                        </button>
                                        <div class="pswp__caption">
                                            <div class="pswp__caption__center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ PhotoSwipe -->
                        </div>
                    </div>
                    <!--/ Search Result-->
                </section>
                <!--/ Search form-->

            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
@section('vendor-js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/gallery/photo-swipe/photoswipe-script.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
