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
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/gallery.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Masonry Grid With Descritpion</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="gallery-masonry-with-desc.html#">Gallery</a>
                                </li>
                                <li class="breadcrumb-item active">Gallery Masonry Grid With Descritpion
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
            <div class="content-body"><!-- Description -->
                <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Description</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Masonry is a JavaScript grid layout library with title & description. It works by placing elements in optimal position based on available
                                    vertical space, sort of like a mason fitting stones in a wall. You’ve probably seen it in use all over the Internet.</p>
                                <p>Please read the Masonry Cascading grid layout library <a href="http://masonry.desandro.com/" target="_blank">documentation</a> for usage
                                    information.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Description -->
                <!-- Image grid -->
                <section id="image-grid" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masonry image gallery</h4>
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
                        <div class="card-body">
                            <div class="card-text">
                                <p>Masonry Image gallery grid with photo-swipe integration, title & description. Auto arrange images based on device screen size.</p>
                            </div>
                        </div>
                        <div class="masonry-grid my-gallery mx-1" itemscope itemtype="http://schema.org/ImageGallery">
                            <!-- width of .grid-sizer used for columnWidth -->
                            <div class="grid-sizer"></div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-10.jpg')}}" 
                                       itemprop="contentUrl" data-size="600x441">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-10.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 1</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-8.jpg')}}" 
                                       itemprop="contentUrl" data-size="600x446">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-8.jpg')}}" 
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-content">
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Card title 2</h4>
                                            <p class="card-text">This is a longer card with supporting text below.</p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-21.jpg')}}"
                                       itemprop="contentUrl" data-size="600x798">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-21.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-content">
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Card title 3</h4>
                                            <p class="card-text">This is a longer card with supporting text below.</p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-14.jpg')}}"
                                       itemprop="contentUrl" data-size="600x401">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-14.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 4</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-26.jpg')}}"
                                       itemprop="contentUrl" data-size="600x856">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-26.jpg')}}" 
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 15</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-1.jpg')}}"
                                       itemprop="contentUrl" data-size="600x404">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-1.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 5</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-2.jpg')}}"
                                       itemprop="contentUrl" data-size="600x400">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-2.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 6</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-3.jpg')}}"
                                       itemprop="contentUrl" data-size="600x452">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-3.jpg')}}" 
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 7</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-4.jpg')}}"
                                       itemprop="contentUrl" data-size="600x453">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-4.jpg')}}" 
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 8</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-5.jpg')}}" 
                                       itemprop="contentUrl" data-size="600x450">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-5.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 9</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-6.jpg')}}"
                                       itemprop="contentUrl" data-size="600x447">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-6.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 10</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-22.jpg')}}" 
                                       itemprop="contentUrl" data-size="600x868">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-22.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 11</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-7.jpg')}}"
                                       itemprop="contentUrl" data-size="600x453">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-7.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 12</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-9.jpg')}}" 
                                       itemprop="contentUrl" data-size="600x450">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-9.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 13</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="card border-grey border-lighten-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="{{asset('admin-assets/images/portfolio/width-600/portfolio-11.jpg')}}"
                                       itemprop="contentUrl" data-size="600x446">
                                        <img class="gallery-thumbnail card-img-top" src="{{asset('admin-assets/images/portfolio/width-600/portfolio-11.jpg')}}"
                                             itemprop="thumbnail"
                                             alt="Image description"/>
                                    </a>
                                    <div class="card-body px-0">
                                        <h4 class="card-title">Card title 14</h4>
                                        <p class="card-text">This is a longer card with supporting text below.</p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Image grid -->
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
                <!-- Video grid -->
                <section id="video-grid" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masonry video gallery</h4>
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
                        <div class="card-body">
                            <div class="card-text">
                                <p>This section contain responsive embedded Masonry video gallery with grid 3-2-1 columns with title & description. This demo contain vimeo and
                                    youtube embedded videos.</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="masonry-grid">
                                <!-- width of .grid-sizer used for columnWidth -->
                                <div class="grid-sizer"></div>
                                <div class="grid-item">
                                    <div class="card border-grey border-lighten-2">
                                        <div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
                                            <iframe class="gallery-thumbnail card-img-top" src="https://player.vimeo.com/video/118589137?title=0&byline=0" width="640"
                                                    height="360"></iframe>
                                        </div>
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Card title 1</h4>
                                            <p class="card-text">This is a longer card with supporting text below.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="card border-grey border-lighten-2">
                                        <div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
                                            <iframe class="gallery-thumbnail card-img-top" src="https://player.vimeo.com/video/173541384?color=ff9933&title=0&byline=0" width="640"
                                                    height="360"></iframe>
                                        </div>
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Card title 2</h4>
                                            <p class="card-text">This is a longer card with supporting text below.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="card border-grey border-lighten-2">
                                        <div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
                                            <iframe class="gallery-thumbnail card-img-top" src="https://player.vimeo.com/video/161753790?color=ff9933&title=0&byline=0" width="640"
                                                    height="360"></iframe>
                                        </div>
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Card title 3</h4>
                                            <p class="card-text">This is a longer card with supporting text below.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="card border-grey border-lighten-2">
                                        <div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
                                            <iframe class="gallery-thumbnail card-img-top"
                                                    src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                        </div>
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Card title 4</h4>
                                            <p class="card-text">This is a longer card with supporting text below.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="card border-grey border-lighten-2">
                                        <div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
                                            <iframe class="gallery-thumbnail card-img-top"
                                                    src="https://www.youtube.com/embed/zqDxfHvZ3DU?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                        </div>
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Card title 5</h4>
                                            <p class="card-text">This is a longer card with supporting text below.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="card border-grey border-lighten-2">
                                        <div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">
                                            <iframe class="gallery-thumbnail card-img-top"
                                                    src="https://www.youtube.com/embed/hunYLg8I1Os?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                        </div>
                                        <div class="card-body px-0">
                                            <h4 class="card-title">Card title 6</h4>
                                            <p class="card-text">This is a longer card with supporting text below.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Video grid -->

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
    <script src="{{asset('admin-assets/vendors/js/gallery/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/gallery/photo-swipe/photoswipe-script.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
