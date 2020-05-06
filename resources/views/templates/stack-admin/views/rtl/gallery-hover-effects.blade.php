@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

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
                    <h3 class="content-header-title mb-0">Gallery Hover Effects</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="gallery-hover-effects.html#">Gallery</a>
                                </li>
                                <li class="breadcrumb-item active">Gallery Hover Effects
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
                                <p>Some creative and subtle hover effect inspiration using modern CSS techniques including 3D translate and pseudo elements.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Description -->

                <!-- Hover Effects -->
                <section id="hover-effects" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hover Effects</h4>
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
                            <div class="card-text">
                                <p>Image gallery grid with 30 subtle hover effect. Try to hover below demo images to show each hover effect.</p>
                            </div>
                        </div>
                        <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            <div class="grid-hover row">
                                <h5 class="col-12">Lily</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-lily">
                                        <img src="{{asset('admin-assets/images/gallery/12.jpg')}}" 
                                             alt="img12"/>
                                        <figcaption>
                                            <div>
                                                <h2>Nice <span>Lily</span></h2>
                                                <p>Lily likes to play with crayons and pencils</p>
                                            </div>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-lily">
                                        <img src="{{asset('admin-assets/images/gallery/1.jpg')}}"
                                             alt="img1"/>
                                        <figcaption>
                                            <div>
                                                <h2>Nice <span>Lily</span></h2>
                                                <p>Lily likes to play with crayons and pencils</p>
                                            </div>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Sadie</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-sadie">
                                        <img src="{{asset('admin-assets/images/gallery/2.jpg')}}"
                                             alt="img02"/>
                                        <figcaption>
                                            <h2>Holy <span>Sadie</span></h2>
                                            <p>Sadie never took her eyes off me.
                                                <br>She had a dark soul.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-sadie">
                                        <img src="{{asset('admin-assets/images/gallery/14.jpg')}}"
                                             alt="img14"/>
                                        <figcaption>
                                            <h2>Holy <span>Sadie</span></h2>
                                            <p>Sadie never took her eyes off me.
                                                <br>She had a dark soul.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Honey</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-honey">
                                        <img src="{{asset('admin-assets/images/gallery/4.jpg')}}"
                                             alt="img04"/>
                                        <figcaption>
                                            <h2>Dreamy <span>Honey</span> <i>Now</i></h2>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-honey">
                                        <img src="{{asset('admin-assets/images/gallery/5.jpg')}}"
                                             alt="img05"/>
                                        <figcaption>
                                            <h2>Dreamy <span>Honey</span> <i>Now</i></h2>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Layla</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-layla">
                                        <img src="{{asset('admin-assets/images/gallery/6.jpg')}}"
                                             alt="img06"/>
                                        <figcaption>
                                            <h2>Crazy <span>Layla</span></h2>
                                            <p>When Layla appears, she brings an eternal summer along.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-layla">
                                        <img src="{{asset('admin-assets/images/gallery/3.jpg')}}"
                                             alt="img03"/>
                                        <figcaption>
                                            <h2>Crazy <span>Layla</span></h2>
                                            <p>When Layla appears, she brings an eternal summer along.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Zoe</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-zoe">
                                        <img src="{{asset('admin-assets/images/gallery/25.jpg')}}" 
                                             alt="img25"/>
                                        <figcaption>
                                            <h2>Creative <span>Zoe</span></h2>
                                            <p class="icon-links">
                                                <a href="gallery-hover-effects.html#" class="mr-1"><i class="ft-heart"></i></a>
                                                <a href="gallery-hover-effects.html#" class="mr-1"><i class="ft-eye"></i></a>
                                                <a href="gallery-hover-effects.html#" class="mr-1"><i class="ft-edit"></i></a>
                                            </p>
                                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-zoe">
                                        <img src="{{asset('admin-assets/images/gallery/26.jpg')}}" 
                                             alt="img26"/>
                                        <figcaption>
                                            <h2>Creative <span>Zoe</span></h2>
                                            <p class="icon-links">
                                                <a href="gallery-hover-effects.html#" class="mr-1"><i class="ft-heart"></i></a>
                                                <a href="gallery-hover-effects.html#" class="mr-1"><i class="ft-eye"></i></a>
                                                <a href="gallery-hover-effects.html#" class="mr-1"><i class="ft-edit"></i></a>
                                            </p>
                                            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Oscar</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-oscar">
                                        <img src="{{asset('admin-assets/images/gallery/9.jpg')}}" 
                                             alt="img09"/>
                                        <figcaption>
                                            <h2>Warm <span>Oscar</span></h2>
                                            <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-oscar">
                                        <img src="{{asset('admin-assets/images/gallery/10.jpg')}}"
                                             alt="img10"/>
                                        <figcaption>
                                            <h2>Warm <span>Oscar</span></h2>
                                            <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Marley</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-marley">
                                        <img src="{{asset('admin-assets/images/gallery/11.jpg')}}"
                                             alt="img11"/>
                                        <figcaption>
                                            <h2>Sweet <span>Marley</span></h2>
                                            <p>Marley tried to convince her but she was not interested.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-marley">
                                        <img src="{{asset('admin-assets/images/gallery/12.jpg')}}"
                                             alt="img12"/>
                                        <figcaption>
                                            <h2>Sweet <span>Marley</span></h2>
                                            <p>Marley tried to convince her but she was not interested.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Ruby</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-ruby">
                                        <img src="{{asset('admin-assets/images/gallery/13.jpg')}}"
                                             alt="img13"/>
                                        <figcaption>
                                            <h2>Glowing <span>Ruby</span></h2>
                                            <p>Ruby did not need any help. Everybody knew that.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-ruby">
                                        <img src="{{asset('admin-assets/images/gallery/14.jpg')}}"
                                             alt="img14"/>
                                        <figcaption>
                                            <h2>Glowing <span>Ruby</span></h2>
                                            <p>Ruby did not need any help. Everybody knew that.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Roxy</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-roxy">
                                        <img src="{{asset('admin-assets/images/gallery/15.jpg')}}"
                                             alt="img15"/>
                                        <figcaption>
                                            <h2>Charming <span>Roxy</span></h2>
                                            <p>Roxy was my best friend. She'd cross any border for me.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-roxy">
                                        <img src="{{asset('admin-assets/images/gallery/1.jpg')}}" 
                                             alt="img01"/>
                                        <figcaption>
                                            <h2>Charming <span>Roxy</span></h2>
                                            <p>Roxy was my best friend. She'd cross any border for me.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Bubba</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-bubba">
                                        <img src="{{asset('admin-assets/images/gallery/2.jpg')}}" 
                                             alt="img02"/>
                                        <figcaption>
                                            <h2>Fresh <span>Bubba</span></h2>
                                            <p>Bubba likes to appear out of thin air.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-bubba">
                                        <img src="{{asset('admin-assets/images/gallery/16.jpg')}}"
                                             alt="img16"/>
                                        <figcaption>
                                            <h2>Fresh <span>Bubba</span></h2>
                                            <p>Bubba likes to appear out of thin air.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Romeo</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-romeo">
                                        <img src="{{asset('admin-assets/images/gallery/17.jpg')}}" alt="img17"/>
                                        <figcaption>
                                            <h2>Wild <span>Romeo</span></h2>
                                            <p>Romeo never knows what he wants. He seemed to be very cross about something.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-romeo">
                                        <img src="{{asset('admin-assets/images/gallery/18.jpg')}}" 
                                             alt="img18"/>
                                        <figcaption>
                                            <h2>Wild <span>Romeo</span></h2>
                                            <p>Romeo never knows what he wants. He seemed to be very cross about something.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Dexter</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-dexter">
                                        <img src="{{asset('admin-assets/images/gallery/19.jpg')}}"
                                             alt="img19"/>
                                        <figcaption>
                                            <h2>Strange <span>Dexter</span></h2>
                                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-dexter">
                                        <img src="{{asset('admin-assets/images/gallery/12.jpg')}}"
                                             alt="img12"/>
                                        <figcaption>
                                            <h2>Strange <span>Dexter</span></h2>
                                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Sarah</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-sarah">
                                        <img src="{{asset('admin-assets/images/gallery/13.jpg')}}"
                                             alt="img13"/>
                                        <figcaption>
                                            <h2>Free <span>Sarah</span></h2>
                                            <p>Sarah likes to watch clouds. She's quite depressed.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-sarah">
                                        <img src="{{asset('admin-assets/images/gallery/20.jpg')}}"
                                             alt="img20"/>
                                        <figcaption>
                                            <h2>Free <span>Sarah</span></h2>
                                            <p>Sarah likes to watch clouds. She's quite depressed.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Chico</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-chico">
                                        <img src="{{asset('admin-assets/images/gallery/15.jpg')}}" 
                                             alt="img15"/>
                                        <figcaption>
                                            <h2>Silly <span>Chico</span></h2>
                                            <p>Chico's main fear was missing the morning bus.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-chico">
                                        <img src="{{asset('admin-assets/images/gallery/4.jpg')}}" 
                                             alt="img04"/>
                                        <figcaption>
                                            <h2>Silly <span>Chico</span></h2>
                                            <p>Chico's main fear was missing the morning bus.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="grid-hover row">
                                <h5 class="col-12 mt-3">Milo</h5>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-milo">
                                        <img src="{{asset('admin-assets/images/gallery/11.jpg')}}"
                                             alt="img11"/>
                                        <figcaption>
                                            <h2>Faithful <span>Milo</span></h2>
                                            <p>Milo went to the woods. He took a fun ride and never came back.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-12">
                                    <figure class="effect-milo">
                                        <img src="{{asset('admin-assets/images/gallery/3.jpg')}}"
                                             alt="img03"/>
                                        <figcaption>
                                            <h2>Faithful <span>Milo</span></h2>
                                            <p>Milo went to the woods. He took a fun ride and never came back.</p>
                                            <a href="gallery-hover-effects.html#">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Image grid -->
                </section>
                <!--/ Hover Effects -->

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
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')

@endsection
