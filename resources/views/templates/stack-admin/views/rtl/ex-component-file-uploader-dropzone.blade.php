@extends('stack-admin.layouts.admin')
@section('vendor-css')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors-rtl.min.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
    <!-- END: Vendor CSS-->

@endsection
@section('header')
    @if(in_array(App::getLocale(),config('base.rtl_locales')))
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/file-uploaders/dropzone.min.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/plugins/file-uploaders/dropzone.min.css')}}">
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
                    <h3 class="content-header-title mb-0">Dropzone</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="ex-component-file-uploader-dropzone.html#">File Uploader</a>
                                </li>
                                <li class="breadcrumb-item active">Dropzone
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
            <div class="content-body"><!-- Dropzone section start -->
                <section id="dropzone-examples">

                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-warning" role="alert">
                                <strong>Warning!</strong> Don’t forget to specify an url option if you’re not using a form element, since Dropzone doesn’t know where to post to
                                without an action attribute.
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <strong>Warning!</strong> Dropzone does not handle your file uploads on the server. You have to implement the code to receive and store the file
                                yourself. See the section <a href="http://www.dropzonejs.com/#server-side-implementation" class="alert-link">Server side implementation</a> for more
                                information.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Single File Upload</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">This example uploads a single file using dropzone js library. By default, dropzone is a multiple file uploader and does
                                            not have specific option allowing us to switch to single file uploading mode, but this functionality can be achieved by adding more
                                            options to the plugin settings, such as <code>maxfilesexceeded</code> callback and <code>maxFiles</code> option set to 1. <code>maxFiles:
                                                1</code> is used to tell dropzone that there should be only one file. When there is more then 1 file the function <code>maxfilesexceeded</code>
                                            will be called, with the exceeding file in the first parameter. Now only 1 file can be selected and it will be replaced with another one
                                            instead of adding it to the preview.</p>
                                        <form action="ex-component-file-uploader-dropzone.html#" class="dropzone dropzone-area" id="dpz-single-file"></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Multiple Files Upload</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">This example uploads a multiple files using dropzone js library. By default, dropzone is a multiple file uploader. User
                                            can either click on the dropzone area and select multiple files or just drop all selected files in the dropzone area. This example is
                                            the most basic setup for dropzone.</p>
                                        <form action="ex-component-file-uploader-dropzone.html#" class="dropzone dropzone-area" id="dpz-multiple-files">
                                            <div class="dz-message">Drop Files Here To Upload</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Use Button To Select Files</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">This example uploads a multiple files using dropzone js library. Using this method, user gets an option to select the
                                            files using a button instead dropping all the files after selected from the folders. You have to define <code>dropzone</code> and <code>previewsContainer</code>
                                            elements to show preview thumbnails. Also set <code>clickable</code> to match the button's id for button to work as file selector.</p>
                                        <button id="select-files" class="btn btn-primary mb-1"><i class="icon-file2"></i> Click me to select files</button>
                                        <form action="ex-component-file-uploader-dropzone.html#" class="dropzone dropzone-area" id="dpz-btn-select-files">
                                            <div class="dz-message">Drop Files Here To Upload</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Limit File Size & No. Of Files</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">
                                            In many case user must be limited to upload certain no. of files. You can always set the <code>maxFiles</code> option to limit no. of
                                            upload files. <code>maxfilesexceeded</code> event will be called if uploads exceeds the limit. Also, if you want to limit the file size
                                            of uploads then set the <code>maxFilesize</code> option. Define the maximum file size to be uploded in MBs like <code>0.5</code> MB as
                                            is in this example. User can also define <code>maxThumbnailFilesize</code> in MB. When the uploaded file exceeds this limit, the
                                            thumbnail will not be generated.</p>
                                        <form action="ex-component-file-uploader-dropzone.html#" class="dropzone dropzone-area" id="dpz-file-limits">
                                            <div class="dz-message">Drop Files Here To Upload</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Accepted files</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">The default implementation of <code>accept</code> checks the file's mime type or extension against this list. This is a
                                            comma separated list of mime types or file extensions. Eg.: <code>image/*,application/pdf,.psd</code>. If the Dropzone is <code>clickable</code>
                                            this option will be used as <code>accept</code> parameter on the hidden file input as well.</p>
                                        <form action="ex-component-file-uploader-dropzone.html#" class="dropzone dropzone-area" id="dp-accept-files">
                                            <div class="dz-message">Drop Files Here To Upload</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Remove Thumbnail</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">This example allows user to remove any file out of all uploaded files. This will add a link to every file preview to
                                            remove or cancel (if already uploading) the file. The <code>dictCancelUpload</code>, <code>dictCancelUploadConfirmation</code> and
                                            <code>dictRemoveFile</code> options are used for the wording.</p>
                                        <form action="ex-component-file-uploader-dropzone.html#" class="dropzone dropzone-area" id="dpz-remove-thumb">
                                            <div class="dz-message">Drop Files Here To Upload</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Remove All Thumbnails</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">This example allows user to create a button that will remove all files from a dropzone. Hear for the button's click
                                            event and then call <code>removeAllFiles</code> method to remove all the files from the dropzone.</p>
                                        <button id="clear-dropzone" class="btn btn-primary mb-1"><i class="icon-trash4"></i>Clear Dropzone</button>
                                        <form action="ex-component-file-uploader-dropzone.html#" class="dropzone dropzone-area" id="dpz-remove-all-thumb">
                                            <div class="dz-message">Drop Files Here To Upload</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tips</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li><i class="icon-record2 mr-1"></i> If you do not want the default message at all (»Drop files to upload (or click)«), you can put an
                                                element inside your dropzone element with the class <code>dz-message</code> and dropzone will not create the message for you.
                                            </li>

                                            <li><i class="icon-record2 mr-1"></i> Dropzone will submit any hidden fields you have in your dropzone form. So this is an easy way to
                                                submit additional data. You can also use the <code>params</code> option.
                                            </li>

                                            <li><i class="icon-record2 mr-1"></i> Dropzone adds data to the <code>file</code> object you can use when events fire. You can access
                                                <code>file.width</code> and <code>file.height</code> if it’s an image, as well as <code>file.upload</code> which is an object
                                                containing: <code>progress</code> (0-100), <code>total</code> (the total bytes) and <code>bytesSent</code>.
                                            </li>

                                            <li><i class="icon-record2 mr-1"></i> If you want to add additional data to the file upload that has to be specific for each file, you
                                                can register for the <code>sending</code> event:
                                                <pre class="language-javascript">
                                    <code class="language-javascript">
                                        myDropzone.on("sending", function(file, xhr, formData) {
                                            // Will send the filesize along with the file as POST data.
                                            formData.append("filesize", file.size);
                                        });
                                    </code>
                                </pre>
                                            </li>

                                            <li><i class="icon-record2 mr-1"></i> To access the preview html of a file, you can access <code>file.previewElement</code>. For
                                                example:
                                                <pre class="language-javascript">
                                    <code class="language-javascript">
                                        myDropzone.on("addedfile", function(file) {
                                            file.previewElement.addEventListener("click", function() {
                                                myDropzone.removeFile(file);
                                            });
                                        });
                                    </code>
                                </pre>
                                            </li>

                                            <li><i class="icon-record2 mr-1"></i> If you want the whole body to be a Dropzone and display the files somewhere else you can simply
                                                instantiate a Dropzone object for the body, and define the <code>previewsContainer</code> option. The <code>previewsContainer</code>
                                                should have the <code>dropzone-previews</code> or <code>dropzone</code> class to properly display the file previews.
                                                <pre class="language-javascript">
                                    <code class="language-javascript">
                                        new Dropzone(document.body, {
                                            previewsContainer: ".dropzone-previews",
                                            // You probably don't want the whole body
                                            // to be clickable to select files
                                            clickable: false
                                        });
                                    </code>
                                </pre>
                                            </li>

                                            <li><i class="icon-record2 mr-1"></i> Look at the <a href="../../../../github.com/enyo/dropzone/wiki.htm">github wiki</a> for more
                                                examples.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Dropzone section end -->
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
    <script src="{{asset('admin-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/ui/prism.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

@endsection
@section('footer')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/extensions/dropzone.min.js')}}"></script>
    <!-- END: Page JS-->

@endsection
