@extends('admin.layouts.admin')
@section('vendor-css')
@endsection

@section('header')


@endsection

@section('main')

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0">Chips</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="ui-chips.html#">Basic UI</a>
                                </li>
                                <li class="breadcrumb-item active">Chips
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="ui-chips.html#!"><i
                                        class="material-icons hide-on-med-and-up">settings</i><span
                                        class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span
                                                class="new badge red">2</span></a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a>
                                </li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a>
                                </li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2"
                                                    href="user-login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="seaction">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Chips can be used to represent small blocks of information.
                                    They are most commonly
                                    used either for contacts or for tags.</p>
                            </div>
                        </div>
                        <!--chips-->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="contacts">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Contacts</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-chips.html#view-contacts">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-chips.html#html-contacts">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-contacts">
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="chip">
                                                        <img alt="Contact Person"
                                                             src="{{asset('app-assets/images/avatar/avatar-1.png')}}">
                                                        John Doe
                                                    </div>
                                                    <div class="chip">
                                                        Tag
                                                        <i class="close material-icons">close</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-contacts">
                        <pre><code class="language-markup">
    &lt;div class="chip">
        &lt;img src="{{asset('app-assets/images/avatar/avatar-1.png')}}" alt="Contact Person">
        Jane Doe
    &lt;/div>
    </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="tags">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Tags</h4>
                                                </div>
                                                <div class="col s12 m6 l2">
                                                    <ul class="tabs">
                                                        <li class="tab col s6 p-0"><a class="active p-0"
                                                                                      href="ui-chips.html#view-tags">View</a>
                                                        </li>
                                                        <li class="tab col s6 p-0"><a class="p-0"
                                                                                      href="ui-chips.html#html-tags">Html</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-tags">
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="chip">
                                                        Tag
                                                        <i class="close material-icons">close</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-tags">
                        <pre class="language-markup"><code class="language-markup" data-language="markup">
    &lt;div class="chip">
        Tag
        &lt;i class="close material-icons">close&lt;/i>
    &lt;/div>
    </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chips Styles -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-default" id="chips-styles">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title">Chips Styles</h4>
                                            </div>
                                            <div class="col s12">
                                                <p>You can also style it easily with materialize admin theme pre
                                                    defined color set classes.</p>
                                                <div class="section">
                                                    <div class="chip cyan white-text">
                                                        <img alt="Materialize"
                                                             src="{{asset('app-assets/images/logo/login-logo.png')}}"> Solid
                                                        color background
                                                    </div>
                                                    <div class="chip cyan white-text z-depth-4">
                                                        <img alt="Materialize"
                                                             src="{{asset('app-assets/images/logo/login-logo.png')}}"> Solid
                                                        color with shadow
                                                    </div>
                                                </div>
                                                <div class="section">
                                                    <div class="chip gradient-45deg-purple-deep-orange white-text">
                                                        <img alt="Materialize"
                                                             src="{{asset('app-assets/images/avatar/avatar-2.png')}}">
                                                        Gradient color background
                                                    </div>
                                                    <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                                                        <img alt="Materialize"
                                                             src="{{asset('app-assets/images/avatar/avatar-3.png')}}">
                                                        Gradient color with shadow
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Styles tag chips -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-default" id="tags-two">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                                <h4 class="card-title">Styles tag chips</h4>
                                            </div>
                                            <div class="col s12">
                                                <p>You can also style tag chips easily with materialize admin theme
                                                    pre defined color set
                                                    classes.</p>
                                                <div class="section">
                                                    <div class="chip cyan white-text">
                                                        Tag
                                                        <i class="material-icons close">close</i>
                                                    </div>
                                                    <div class="chip cyan z-depth-4 white-text">
                                                        Candy
                                                        <i class="material-icons close">close</i>
                                                    </div>
                                                    <div class="chip gradient-45deg-purple-deep-orange white-text">
                                                        Cake
                                                        <i class="material-icons close">close</i>
                                                    </div>
                                                    <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                                                        Book
                                                        <i class="material-icons close">close</i>
                                                    </div>
                                                </div>
                                                <div class="section">
                                                    <div class="chip cyan white-text">
                                                        <img alt="Contact Person"
                                                             src="{{asset('app-assets/images/avatar/avatar-1.png')}}">
                                                        John Doe
                                                        <i class="material-icons close">close</i>
                                                    </div>
                                                    <div class="chip cyan z-depth-4 white-text">
                                                        <img alt="Materialize"
                                                             src="{{asset('app-assets/images/logo/login-logo.png')}}">
                                                        Materialize Admin Theme
                                                        <i class="material-icons close">close</i>
                                                    </div>
                                                    <div class="chip gradient-45deg-purple-deep-orange white-text">
                                                        <img alt="Materialize"
                                                             src="{{asset('app-assets/images/avatar/avatar-4.png')}}">
                                                        Materialize Admin Theme
                                                        <i class="material-icons close">close</i>
                                                    </div>
                                                    <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                                                        <img alt="Materialize"
                                                             src="{{asset('app-assets/images/avatar/avatar-4.png')}}">
                                                        Materialize Admin Theme
                                                        <i class="material-icons close">close</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Javascript Plugin Usage -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card card-tabs" id="plugin-usage">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l6">
                                                    <h4 class="card-title">Javascript Plugin Usage</h4>
                                                </div>
                                                <div class="col s12 m6 l6">
                                                    <ul class="tabs">
                                                        <li class="tab col s3 p-0"><a class="active p-0"
                                                                                      href="ui-chips.html#view-plugin">View</a>
                                                        </li>
                                                        <li class="tab col s3 p-0"><a class="p-0"
                                                                                      href="ui-chips.html#html-plugin">Html</a>
                                                        </li>
                                                        <li class="tab col s3 p-0"><a class="p-0"
                                                                                      href="ui-chips.html#Javascript-plugin">JS</a>
                                                        </li>
                                                        <li class="tab col s3 p-0"><a class="p-0"
                                                                                      href="ui-chips.html#data-plugin">Data</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-plugin">
                                            <div class="row">
                                                <div class="col s12">
                                                    <p>To add tags, just enter your tag text and press enter. You
                                                        can delete them by
                                                        clicking on the close icon or by using your delete
                                                        button.</p>
                                                    <div class="section">
                                                        <div class="chips" data-index="0"
                                                             data-initialized="true"></div>
                                                        <br/>
                                                        <p class="caption">Set initial tags.</p>
                                                        <div class="chips chips-initial"></div>
                                                        <br/>
                                                        <p class="caption">Use placeholders and override hint
                                                            texts.</p>
                                                        <div class="chips chips-placeholder"></div>
                                                        <br/>
                                                        <p class="caption">Use autocomplete with chips.</p>
                                                        <div class="chips chips-autocomplete"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="html-plugin">
                        <pre><code class="language-markup">
    &lt;!-- Default with no input (automatically generated)  -->
    &lt;div class="chips">&lt;/div>
    &lt;div class="chips chips-initial">&lt;/div>
    &lt;div class="chips chips-placeholder">&lt;/div>
    &lt;div class="chips chips-autocomplete">&lt;/div>

    &lt;!-- Customizable input  -->
    &lt;div class="chips">
    &lt;input class="custom-class">
    &lt;/div>
    </code></pre>
                                        </div>
                                        <div id="Javascript-plugin">
                        <pre><code class="language-javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.chips');
    var instances = M.Chips.init(elems, options);
    });

    // Or with jQuery

    $('.chips').chips();
    $('.chips-initial').chips({
    data: [{
    tag: 'Apple',
    }, {
    tag: 'Microsoft',
    }, {
    tag: 'Google',
    }],
    });
    $('.chips-placeholder').chips({
    placeholder: 'Enter a tag',
    secondaryPlaceholder: '+Tag',
    });
    $('.chips-autocomplete').chips({
    autocompleteOptions: {
    data: {
    'Apple': null,
    'Microsoft': null,
    'Google': null
    },
    limit: Infinity,
    minLength: 1
    }
    });
    </code></pre>
                                        </div>
                                        <div id="data-plugin">
                        <pre><code class="language-markup">
    var chip = {
        tag: 'chip content',
        image: '', //optional
    };
    </code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- options -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-default" id="options">
                                <div class="card-content">
                                    <h4 class="card-title">Options</h4>
                                    <table class="table responsive-table highlight">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Default</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>data</td>
                                                <td>Array</td>
                                                <td>[]</td>
                                                <td>Set the chip data (look at the Chip data object)</td>
                                            </tr>
                                            <tr>
                                                <td>placeholder</td>
                                                <td>String</td>
                                                <td>''</td>
                                                <td>Set first placeholder when there are no tags.</td>
                                            </tr>
                                            <tr>
                                                <td>secondaryPlaceholder</td>
                                                <td>String</td>
                                                <td>''</td>
                                                <td>Set second placeholder when adding additional tags.</td>
                                            </tr>
                                            <tr>
                                                <td>autocompleteOptions</td>
                                                <td>Object</td>
                                                <td>{}</td>
                                                <td>Set autocomplete options.</td>
                                            </tr>
                                            <tr>
                                                <td>limit</td>
                                                <td>Integer</td>
                                                <td>Infinity</td>
                                                <td>Set chips limit.</td>
                                            </tr>
                                            <tr>
                                                <td>onChipAdd</td>
                                                <td>Function</td>
                                                <td>null</td>
                                                <td>Callback for chip add.</td>
                                            </tr>
                                            <tr>
                                                <td>onChipSelect</td>
                                                <td>Function</td>
                                                <td>null</td>
                                                <td>Callback for chip select.</td>
                                            </tr>
                                            <tr>
                                                <td>onChipDelete</td>
                                                <td>Function</td>
                                                <td>null</td>
                                                <td>Callback for chip delete.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- methods -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-default" id="methods">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12">
                                            <h4 class="card-title">Methods</h4>
                                        </div>
                                        <div class="col s12">
                                            <p class="caption">
                                                Use these methods to interact with chips.
                                            </p>

                                            <p>Because jQuery is no longer a dependency, all the methods are called
                                                on the plugin instance.
                                                You can get the plugin instance like this: </p>
                                            <pre><code class="language-javascript col s12">
var instance = M.Chips.getInstance(elem);

/* jQuery Method Calls
You can still use the old jQuery plugin method calls.
But you won't be able to access instance properties.

$('.chips').chips('methodName');
$('.chips').chips('methodName', paramName);
*/
</code></pre>

                                            <h5 class="method-header">
                                                .addChip();
                                            </h5>
                                            <p>Add chip to input.</p>
                                            <h6>Arguments</h6>
                                            <p>
                                                <b>Chip:</b> Chip data object.</p>
                                            <pre><code class="language-javascript col s12">
instance.addChip({
tag: 'chip content',
image: '', // optional
});
</code></pre>
                                            <br>
                                            <h5 class="method-header">
                                                .deleteChip();
                                            </h5>
                                            <p>Delete nth chip.</p>
                                            <h6>Arguments</h6>
                                            <p>
                                                <b>Integer:</b> Index of chip.</p>
                                            <pre><code class="language-javascript col s12">
instance.deleteChip(3); // Delete 3rd chip.
</code></pre>
                                            <br>
                                            <h5 class="method-header">
                                                .selectChip();
                                            </h5>
                                            <p>Select nth chip.</p>
                                            <h6>Arguments</h6>
                                            <p>
                                                <b>Integer:</b> Index of chip.</p>
                                            <pre><code class="language-javascript col s12">
instance.selectChip(2); // Select 2nd chip
</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Properties -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-default" id="properties">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12">
                                            <h4 class="card-title">Properties</h4>
                                            <table class="striped responsive-table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>el</td>
                                                        <td>Element</td>
                                                        <td>The DOM element the plugin was initialized with.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>options</td>
                                                        <td>Object</td>
                                                        <td>The options the instance was initialized with.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>chipsData</td>
                                                        <td>Array</td>
                                                        <td>Array of the current chips data.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>hasAutocomplete</td>
                                                        <td>Boolean</td>
                                                        <td>If the chips has autocomplete enabled.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>autocomplete</td>
                                                        <td>Object</td>
                                                        <td>
                                                            <a href="https://pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/autocomplete.html">Autocomplete</a>
                                                            instance, if any.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div class="slide-out-right-sidenav sidenav rightside-navigation" id="slide-out-right">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a
                                                            class="sidenav-close" href="ui-chips.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="ui-chips.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="ui-chips.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="ui-chips.html#activity">
                                                            <span>Activity</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body">
                                    <div class="col s12" id="messages">
                                        <div class="collection border-none">
                                            <input class="header-search-input mt-4 mb-2" name="Search" placeholder="Search Messages"
                                                   type="text"/>
                                            <ul class="collection p-0">
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-1.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Mary Adams</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-2.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-3.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Keny !</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.00 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-4.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">June Lane</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Ohh God</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-5.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Edward Fletcher</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Love you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.15 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-6.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Crystal Bates</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Can we</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Nathan Watts</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Great!</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.53 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-8.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Willard Wood</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Do it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.20 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-1.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Ronnie Ellis</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Got that</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.20 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-9.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Daniel Russell</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12.00 AM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-10.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Sarah Graves</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Okay you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11.14 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-11.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Andrew Hoffman</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Can do</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7.30 PM</span>
                                                </li>
                                                <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                                    data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-12.png')}}"/>
                           <i></i>
                        </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Camila Lynch</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            Leave it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2.00 PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col s12" id="settings">
                                        <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show Task statistics</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Show your emails</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Email Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>System Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Error Reporting</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Applications Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Backup Servers</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none mt-3">
                                                <div class="m-0">
                                                    <span>Audit Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox"/>
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col s12" id="activity">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Homepage mockup design <span class="secondary-content">Just now</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                    <span class="new badge amber"
                                                          data-badge-caption="Important"> </span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Melissa liked your activity Drinks. <span
                                                                class="secondary-content">10 mins</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge light-green"
                                                          data-badge-caption="Resolved"></span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        12 new users registered <span class="secondary-content">30 mins</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Tina is attending your activity <span
                                                                class="secondary-content">2 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Josh is now following you <span class="secondary-content">5 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge red" data-badge-caption="Pending"></span>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        New order received urgent <span class="secondary-content">Just now</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">System shutdown. <span
                                                                class="secondary-content">5 min</span></div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge blue"
                                                          data-badge-caption="Urgent"> </span>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Database overloaded 89% <span class="secondary-content">20 min</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                            <ul class="collection with-header">
                                                <li class="collection-item">
                                                    <div class="font-weight-900">System error <span
                                                                class="secondary-content">10 min</span></div>
                                                    <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                </li>
                                                <li class="collection-item">
                                                    <div class="font-weight-900">
                                                        Production server down. <span class="secondary-content">1 hrs</span>
                                                    </div>
                                                    <p class="mt-0 mb-2">Here are some news feed interactions
                                                        concepts.</p>
                                                    <span class="new badge blue" data-badge-caption="Urgent"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul class="sidenav slide-out-right-sidenav-chat" id="slide-out-chat">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="ui-chips.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
                                    Elliott</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">hello!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">How can we help? We're here for you!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I am looking for the best admin template.?</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Materialize admin is the responsive
                                                materializecss admin template.</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! very nice</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">How can I purchase it?</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">From ThemeForest.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Only $24</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0"
                                        data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img alt="avatar" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"/>
               </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I will purchase it for sure.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Great, Feel free to get in touch on</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                                        data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form action="javascript:void(0);" class="col s12" onsubmit="slide_out_chat()">
                                    <div class="input-field">
                                        <input class="search" id="icon_prefix" type="text"/>
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <!-- END RIGHT SIDEBAR NAV -->
                    <div class="fixed-action-btn direction-top" style="bottom: 50px; right: 19px;"><a
                                class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i
                                    class="material-icons">add</i></a>
                        <ul>
                            <li><a class="btn-floating blue" href="css-helpers.html"><i class="material-icons">help_outline</i></a>
                            </li>
                            <li><a class="btn-floating green" href="cards-extended.html"><i class="material-icons">widgets</i></a>
                            </li>
                            <li><a class="btn-floating amber" href="app-calendar.html"><i class="material-icons">today</i></a>
                            </li>
                            <li><a class="btn-floating red" href="app-email.html"><i class="material-icons">mail_outline</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('vendor-js')
@endsection

@section('footer')

    <script src="{{asset('app-assets/js/scripts/ui-chips.js')}}" type="text/javascript"></script>

@endsection

