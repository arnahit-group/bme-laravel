@extends('admin.layouts.admin')
@section('vendor-css')
    <link href="{{asset('app-assets/vendors/flag-icon/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/vendors/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">

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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Form Elements</h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="form-elements.html#">From</a>
                                </li>
                                <li class="breadcrumb-item active">Form Elements
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a
                                    class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right"
                                    data-target="dropdown1" href="form-elements.html#!"><i
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
                    <div class="card">
                        <div class="card-content">
                            <p class="caption mb-0">Forms are the standard way to receive user inputted data. The
                                transitions and smoothness
                                of these elements are very important because of the inherent user interaction
                                associated with forms.</p>
                        </div>
                    </div>
                    <!-- Input Fields -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="input-fields">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Input Fields</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-input-fields">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-input-fields">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-input-fields">
                                        <div class="row">
                                            <div class="col s12">
                                                <p>Text fields allow user input. The border should light up simply
                                                    and clearly indicating which field
                                                    the user is currently editing. You must have a <code
                                                            class="language-markup">.input-field</code> div
                                                    wrapping your input and label. This helps our jQuery animate the
                                                    label. This is only used in our
                                                    Input and Textarea form elements.</p>
                                                <p>The validate class leverages HTML5 validation and will add a
                                                    <code class="language-markup">valid</code>
                                                    and <code class="language-markup">invalid</code> class
                                                    accordingly. If you don't want the Green and
                                                    Red validation states, just remove the <code
                                                            class="language-markup">validate</code> class from your
                                                    inputs.</p>
                                                <br>
                                                <form class="row">
                                                    <div class="col s12">
                                                        <div class="input-field col s12">
                                                            <input class="validate" id="first_name1"
                                                                   placeholder="Placeholder" type="text">
                                                            <label for="first_name1">First Name</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input id="last_name" type="text">
                                                            <label for="last_name">Last Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col s12">
                                                        <div class="input-field col s12">
                                                            <input class="validate" disabled id="disabled"
                                                                   type="text" value="I am not editable">
                                                            <label for="disabled">Disabled</label>
                                                        </div>
                                                    </div>
                                                    <div class="col s12">
                                                        <div class="input-field col s12">
                                                            <input class="validate" id="password" type="password">
                                                            <label for="password">Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col s12">
                                                        <div class="input-field col s12">
                                                            <input class="validate" id="email3" type="email">
                                                            <label for="email3">Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col s12">
                                                        <div class="col s12">
                                                            This is an inline input field:
                                                            <div class="input-field inline">
                                                                <input class="validate" id="email" type="email">
                                                                <label data-error="wrong" data-success="right"
                                                                       for="email">Email</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="html-input-fields">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s6">
          &lt;input placeholder="Placeholder" id="first_name" type="text" class="validate">
          &lt;label for="first_name">First Name&lt;/label>
      &lt;/div>
      &lt;div class="input-field col s6">
          &lt;input id="last_name" type="text" class="validate">
          &lt;label for="last_name">Last Name&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input disabled value="I am not editable" id="disabled" type="text" class="validate">
          &lt;label for="disabled">Disabled&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="password" type="password" class="validate">
          &lt;label for="password">Password&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="email" type="email" class="validate">
          &lt;label for="email">Email&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="col s12">
          This is an inline input field:
          &lt;div class="input-field inline">
          &lt;input id="email" type="email" class="validate">
          &lt;label for="email" data-error="wrong" data-success="right">Email&lt;/label>
          &lt;/div>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prefilling Text Inputs -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="prefilling-text">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <h4 class="card-title">Prefilling Text Inputs</h4>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-prefilling-text">View</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-prefilling-text">Html</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#js-prefilling-text">JS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-prefilling-text">
                                        <div class="row">
                                            <div class="col s12">
                                                <p>If you are having trouble with the labels overlapping prefilled
                                                    content, Try adding <code
                                                            class="language-markup">class="active"</code>
                                                    to the label.
                                                    <br/>You can also call the function <code
                                                            class="language-javascript">M.updateTextFields();</code>
                                                    to reinitialize all the Materialize labels on the page if you
                                                    are dynamically adding inputs.</p>
                                            </div>
                                            <div class="col s12">
                                                <div class="input-field col s6">
                                                    <div class="row">
                                                        <input class="validate" id="first_name2" type="text"
                                                               value="Alvin">
                                                        <label class="active" for="first_name2">First Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="html-prefilling-text">
          <pre><code class="language-javascript">
  &lt;div class="row">
    &lt;div class="input-field col s6">
      &lt;input value="Alvin" id="first_name2" type="text" class="validate">
      &lt;label class="active" for="first_name2">First Name&lt;/label>
    &lt;/div>
  &lt;/div>
  </code></pre>
                                    </div>
                                    <div id="js-prefilling-text">
          <pre><code class="language-markup">
  $(document).ready(function() {
    M.updateTextFields();
  });
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Icon Prefixes -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="icon-prefixes">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Icon Prefixes</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-icon-prefixes">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-icon-prefixes">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-icon-prefixes">
                                        <p>You can add an icon prefix to make the form input label even more clear.
                                            Just add an icon with the class
                                            <code class="language-markup">prefix</code> before the input and label.
                                        </p>
                                        <br>
                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <i class="material-icons prefix">account_circle</i>
                                                        <input class="validate" id="icon_prefix3" type="text">
                                                        <label for="icon_prefix3">First Name</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <i class="material-icons prefix">phone</i>
                                                        <input class="validate" id="icon_telephone" type="number">
                                                        <label for="icon_telephone">Telephone</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="html-icon-prefixes">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s6">
          &lt;i class="material-icons prefix">account_circle&lt;/i>
          &lt;input id="icon_prefix" type="text" class="validate">
          &lt;label for="icon_prefix">First Name&lt;/label>
        &lt;/div>
        &lt;div class="input-field col s6">
          &lt;i class="material-icons prefix">phone&lt;/i>
          &lt;input id="icon_telephone" type="tel" class="validate">
          &lt;label for="icon_telephone">Telephone&lt;/label>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Error or Success Messages -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="custom-error">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Custom Error or Success Messages</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-custom-error">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-custom-error">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-custom-error">
                                        <p>You can add custom validation messages by adding either <code
                                                    class="language-markup">data-error</code>
                                            or <code class="language-markup">data-success</code> attributes to your
                                            input field labels.</p>
                                        <br>
                                        <div class="row">
                                            <form class="col s12">

                                                <div class="input-field col s12">
                                                    <input class="validate" id="email4" type="email">
                                                    <label data-error="wrong" data-success="right" for="email4">Email</label>
                                                    <span class="helper-text" data-error="wrong"
                                                          data-success="right">Helper Text</span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="html-custom-error">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="email" type="email" class="validate">
          &lt;label for="email" data-error="wrong" data-success="right">Email&lt;/label>
          &lt;span class="helper-text" data-error="wrong" data-success="right">Helper Text&lt;/span>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="textarea">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <h4 class="card-title">Textarea</h4>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-textarea">View</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-textarea">Html</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#js-textarea">JS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-textarea">
                                        <p>Textareas allow larger expandable user input. The border should light up
                                            simply and clearly indicating
                                            which field the user is currently editing. You must have a <code
                                                    class="language-markup">.input-field</code>
                                            div wrapping your input and label. This helps our jQuery animate the
                                            label. This is only used in our
                                            Input and Textarea form elements.</p>
                                        <p>
                                            <strong>Textareas will auto resize to the text inside.</strong>
                                        </p>
                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                            <textarea class="materialize-textarea"
                                                                      id="textarea2"></textarea>
                                                        <label for="textarea2">Textarea</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="html-textarea">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;textarea id="textarea2" class="materialize-textarea">&lt;/textarea>
          &lt;label for="textarea2">Textarea&lt;/label>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
                                    </div>
                                    <div id="js-textarea">
                                        <p>advanced note: When dynamically changing the value of a textarea with
                                            methods like jQuery's <code
                                                    class="language-markup">.val()</code>,
                                            you must trigger an autoresize on it afterwords because .val() does not
                                            automatically trigger the events
                                            we've binded to the textarea. </p>
                                        <pre><code class="language-javascript">
              $('#textarea2').val('New Text');
              M.textareaAutoResize($('#textarea2'));
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Icon Prefixes -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="icon-prefixes-two">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Icon Prefixes</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-icon-prefixes-two">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-icon-prefixes-two">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-icon-prefixes-two">
                                        <p>You can add an icon prefix to make the form input label even more clear.
                                            Just add an icon with the class
                                            <code class="language-markup">prefix</code> before the input and label.
                                        </p>
                                        <br>
                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="material-icons prefix">mode_edit</i>
                                                        <textarea class="materialize-textarea"
                                                                  id="icon_prefix2"></textarea>
                                                        <label for="icon_prefix2">Message</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="html-icon-prefixes-two">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s6">
          &lt;i class="material-icons prefix">mode_edit&lt;/i>
          &lt;textarea id="icon_prefix2" class="materialize-textarea">&lt;/textarea>
          &lt;label for="icon_prefix2">First Name&lt;/label>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Select -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="select">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Select</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-select">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-select">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-select">
                                        <p> Select allows user input through specified options. Make sure you wrap
                                            it in a <code
                                                    class="language-markup">.input-field</code>
                                            for proper alignment with other text fields. Remember that this is a
                                            jQuery plugin so make sure you
                                            <a href="form-elements.html#select-initialization">initialize</a> this
                                            in your document ready. </p>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option disabled selected value="">Choose your option</option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                </select>
                                                <label>Materialize Select</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <select>
                                                    <optgroup label="team 1">
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </optgroup>
                                                    <optgroup label="team 2">
                                                        <option value="3">Option 3</option>
                                                        <option value="4">Option 4</option>
                                                    </optgroup>
                                                </select>
                                                <label>Optgroups</label>
                                            </div>

                                            <div class="input-field col s12 m6">
                                                <select class="icons">
                                                    <option disabled selected value="">Choose your option</option>
                                                    <option data-icon="{{asset('app-assets/images/avatar/avatar-1.png')}}"
                                                            value="">
                                                        example 1
                                                    </option>
                                                    <option data-icon="{{asset('app-assets/images/avatar/avatar-2.png')}}"
                                                            value="">
                                                        example 2
                                                    </option>
                                                    <option data-icon="{{asset('app-assets/images/avatar/avatar-3.png')}}"
                                                            value="">
                                                        example 3
                                                    </option>
                                                </select>
                                                <label>Images in select</label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <select class="icons">
                                                    <option disabled selected value="">Choose your option</option>
                                                    <option class="left"
                                                            data-icon="{{asset('app-assets/images/avatar/avatar-1.png')}}"
                                                            value="">example 1
                                                    </option>
                                                    <option class="left"
                                                            data-icon="{{asset('app-assets/images/avatar/avatar-2.png')}}"
                                                            value="">example 2
                                                    </option>
                                                    <option class="left"
                                                            data-icon="{{asset('app-assets/images/avatar/avatar-3.png')}}"
                                                            value="">example 3
                                                    </option>
                                                </select>
                                                <label>Images in select</label>
                                            </div>

                                            <label>Browser Select</label>
                                            <select class="browser-default">
                                                <option disabled selected value="">Choose your option</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="html-select">
          <pre><code class="language-markup">
  &lt;div class="input-field col s12">
    &lt;select>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Select&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12">
    &lt;select multiple>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Multiple Select&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12">
    &lt;select>
      &lt;optgroup label="team 1">
        &lt;option value="1">Option 1&lt;/option>
        &lt;option value="2">Option 2&lt;/option>
        &lt;/optgroup>
        &lt;optgroup label="team 2">
        &lt;option value="3">Option 3&lt;/option>
        &lt;option value="4">Option 4&lt;/option>
      &lt;/optgroup>
    &lt;/select>
    &lt;label>Optgroups&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12 m6">
    &lt;select class="icons">
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="" data-icon="../../app-assets/images/avatar/avatar-7.png" class="circle">example 1&lt;/option>
      &lt;option value="" data-icon="../../app-assets/images/avatar/avatar-5.png" class="circle">example 2&lt;/option>
      &lt;option value="" data-icon="../../app-assets/images/avatar/avatar-3.png" class="circle">example 3&lt;/option>
    &lt;/select>
    &lt;label>Images in select&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12 m6">
    &lt;select class="icons">
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="" data-icon="../../app-assets/images/avatar/avatar-7.png" class="left circle">example 1&lt;/option>
      &lt;option value="" data-icon="../../app-assets/images/avatar/avatar-5.png" class="left circle">example 2&lt;/option>
      &lt;option value="" data-icon="../../app-assets/images/avatar/avatar-3.png" class="left circle">example 3&lt;/option>
    &lt;/select>
    &lt;label>Images in select&lt;/label>
  &lt;/div>
  &lt;label>Browser Select&lt;/label>
  &lt;select class="browser-default">
    &lt;option value="" disabled selected>Choose your option&lt;/option>
    &lt;option value="1">Option 1&lt;/option>
    &lt;option value="2">Option 2&lt;/option>
    &lt;option value="3">Option 3&lt;/option>
  &lt;/select>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Disabled Styles -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="disabled-styles">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Disabled Styles</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-disabled-styles">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-disabled-styles">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-disabled-styles">
                                        <p>You can also add <code class="language-markup">disabled</code> to the
                                            select element to make the whole
                                            thing disabled. Or if you add <code
                                                    class="language-markup">disabled</code> to the options, the
                                            individual options will be unselectable. </p>
                                        <form class="col s12 m6">
                                            <div class="input-field">
                                                <select disabled>
                                                    <option disabled selected value="">Choose your option</option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                </select>
                                                <label>Materialize Disabled</label>
                                            </div>

                                            <label>Browser Disabled</label>
                                            <select class="browser-default mb-4" disabled>
                                                <option disabled selected value="">Choose your option</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div id="html-disabled-styles">
          <pre><code class="language-markup">
  &lt;div class="input-field">
    &lt;select disabled>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Disabled&lt;/label>
  &lt;/div>
  &lt;label>Browser Disabled&lt;/label>
  &lt;select class="browser-default" disabled>
    &lt;option value="" disabled selected>Choose your option&lt;/option>
    &lt;option value="1">Option 1&lt;/option>
    &lt;option value="2">Option 2&lt;/option>
    &lt;option value="3">Option 3&lt;/option>
  &lt;/select>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Radio Buttons -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="radio-buttons">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Radio Buttons</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-radio-buttons">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-radio-buttons">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-radio-buttons">
                                        <p>Radio Buttons are used when the user must make only one selection out of
                                            a group of items. The
                                            <code class="language-markup">for</code> attribute is necessary to bind
                                            our custom radio button with the
                                            input. Add the input's <code class="language-markup">id</code> as the
                                            value of the <code
                                                    class="language-markup">for</code>
                                            attribute of the label.</p>
                                        <p>Add radio buttons to a group by adding the name attribute along with the
                                            same corresponding value for
                                            each of the radio buttons in the group. Create disabled radio buttons by
                                            adding the disabled attribute as
                                            shown below.</p>
                                        <form action="form-elements.html#">
                                            <p>
                                                <label>
                                                    <input checked name="group1" type="radio"/>
                                                    <span>Radio-1</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input name="group1" type="radio"/>
                                                    <span>Radio-2 </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="group1" type="radio"/>
                                                    <span>Radio-3</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input disabled="disabled" name="group1" type="radio"/>
                                                    <span>Disabled Radio</span>
                                                </label>
                                            </p>
                                        </form>
                                    </div>
                                    <div id="html-radio-buttons">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;p>
      &lt;label>
        &lt;input name="group1" type="radio" checked/>
        &lt;span>Radio-1&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input name="group1" type="radio" />
        &lt;span>Radio-2&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input class="with-gap" name="group1" type="radio" />
        &lt;span>Radio-3&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input name="group1" type="radio" disabled="disabled" />
        &lt;span>Diabled Radio&lt;/span>
      &lt;/label>
    &lt;/p>
  &lt;/form>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Options -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="options">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Options</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-options">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-options">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-options">
                                        <p>To create a radio button with a gap, add <code class="language-markup">class="with-gap"</code>
                                            to your
                                            input. See the example below.</p>
                                        <p>
                                            <label>
                                                <input checked class="with-gap" name="group3" type="radio"/>
                                                <span>Radio-1</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div id="html-options">
          <pre><code class="language-markup">
  &lt;p>
    &lt;label>
      &lt;input class="with-gap" name="group3" type="radio" checked />
      &lt;span>Radio-1&lt;/span>
    &lt;/label>
  &lt;/p>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Checkboxes -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="checkboxes">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Checkboxes</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-checkboxes">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-checkboxes">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-checkboxes">
                                        <p>Use checkboxes when looking for yes or no answers. The <code
                                                    class="language-markup">for</code>
                                            attribute is necessary to bind our custom checkbox with the input. Add
                                            the input's <code
                                                    class="language-markup">id</code>
                                            as the value of the <code class="language-markup">for</code> attribute
                                            of the label. </p>
                                        <form action="form-elements.html#">
                                            <p>
                                                <label>
                                                    <input type="checkbox"/>
                                                    <span>Checkbox-1</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input checked="checked" type="checkbox"/>
                                                    <span>Checkbox-2</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input checked="checked" class="filled-in" type="checkbox"/>
                                                    <span>Filled in</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input id="indeterminate-checkbox" type="checkbox"/>
                                                    <span>Indeterminate Style</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input checked="checked" disabled="disabled" type="checkbox"/>
                                                    <span>Checkbox-3</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input disabled="disabled" type="checkbox"/>
                                                    <span>Disabled Radio</span>
                                                </label>
                                            </p>
                                        </form>
                                    </div>
                                    <div id="html-checkboxes">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" />
        &lt;span>Checkbox-1&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" checked="checked" />
        &lt;span>Checkbox-2&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" class="filled-in" checked="checked" />
        &lt;span>Filled in&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input id="indeterminate-checkbox" type="checkbox" />
        &lt;span>Indeterminate Style&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" checked="checked" disabled="disabled" />
        &lt;span>Checkbox-3&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" disabled="disabled" />
        &lt;span>Checkbox-4&lt;/span>
      &lt;/label>
    &lt;/p>
  &lt;/form>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Switches -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="switches">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Switches</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-switches">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-switches">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-switches">
                                        <p>Use checkboxes when looking for yes or no answers. The <code
                                                    class="language-markup">for</code>
                                            attribute is necessary to bind our custom checkbox with the input. Add
                                            the input's <code
                                                    class="language-markup">id</code>
                                            as the value of the <code class="language-markup">for</code> attribute
                                            of the label. </p>
                                        <form action="form-elements.html#">
                                            <div class="switch">
                                                <label>
                                                    Off
                                                    <input checked type="checkbox">
                                                    <span class="lever"></span>
                                                    On
                                                </label>
                                            </div>
                                            <div class="switch">
                                                <label>
                                                    Off
                                                    <input disabled type="checkbox">
                                                    <span class="lever"></span>
                                                    On
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="html-switches">
          <pre><code class="language-markup">
  &lt;!-- Switch -->
  &lt;div class="switch">
    &lt;label>
      Off
      &lt;input type="checkbox">
      &lt;span class="lever">&lt;/span>
      On
    &lt;/label>
  &lt;/div>
  &lt;!-- Disabled Switch -->
  &lt;div class="switch">
    &lt;label>
      Off
      &lt;input disabled type="checkbox">
      &lt;span class="lever">&lt;/span>
      On
    &lt;/label>
  &lt;/div>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- File Input -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="file-input">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">File Input</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-file-input">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-file-input">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-file-input">
                                        <p>If you want to style an input button with a path input we provide this
                                            structure.</p>
                                        <form action="form-elements.html#">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="html-file-input">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;div class="file-field input-field">
      &lt;div class="btn">
        &lt;span>File&lt;/span>
        &lt;input type="file">
      &lt;/div>
      &lt;div class="file-path-wrapper">
        &lt;input class="file-path validate" type="text">
      &lt;/div>
    &lt;/div>
  &lt;/form>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Multiple File Input -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="multiple-file-input">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">Multiple File Input</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-multiple-file-input">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-multiple-file-input">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-multiple-file-input">
                                        <p>You can also use the <code class="language-markup">multiple</code>
                                            attribute to allow multiple file
                                            uploads. </p>
                                        <form action="form-elements.html#">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input multiple type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" placeholder="Upload one or more files"
                                                           type="text">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="html-multiple-file-input">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;div class="file-field input-field">
      &lt;div class="btn">
      &lt;span>File&lt;/span>
      &lt;input type="file" multiple>
    &lt;/div>
    &lt;div class="file-path-wrapper">
      &lt;input class="file-path validate" type="text" placeholder="Upload one or more files">
      &lt;/div>
    &lt;/div>
  &lt;/form>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Range -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="range">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <h4 class="card-title">Range</h4>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-Range">View</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-Range">Html</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#js-Range">JS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-Range">
                                        <p>Add a range slider for values with a wide range. This one is set to be a
                                            number between 0 and 100. We
                                            have two different types of sliders. nouiSlider is a 3rd party plugin
                                            which we've modified. To use the
                                            noUiSlider, you will have to manually link the <code
                                                    class="language-markup">nouislider.css</code> and
                                            <code class="language-markup">nouislider.js</code> files located in the
                                            extras folder.</p>
                                        <h4 class="header">noUiSlider</h4>
                                        <p>See noUiSlider's official documentation <a
                                                    href="https://refreshless.com/nouislider/">here</a> to see a
                                            variety of slider options</p>
                                        <div class="mt-2" id="test-slider"></div>
                                    </div>
                                    <div id="html-Range">
          <pre><code class="language-markup">
  &lt;div id="test-slider">&lt;/div>
  </code></pre>
                                    </div>
                                    <div id="js-Range">
          <pre><code class="language-javascript">
  var slider = document.getElementById('test-slider');
    noUiSlider.create(slider, {
      start: [20, 80],
      connect: true,
      step: 1,
      orientation: 'horizontal', // 'horizontal' or 'vertical'
      range: {
      'min': 0,
      'max': 100
    },
    format: wNumb({
      decimals: 0
    })
  });
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- HTML5 Range -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="html-range">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title">HTML5 Range</h4>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <ul class="tabs">
                                                    <li class="tab col s6 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-html-range">View</a>
                                                    </li>
                                                    <li class="tab col s6 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-html-range">Html</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-html-range">
                                        <form action="form-elements.html#">
                                            <p class="range-field">
                                                <input max="100" min="0" name="points" type="range">
                                            </p>
                                        </form>
                                    </div>
                                    <div id="html-html-range">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;p class="range-field">
      &lt;input type="range" id="test5" min="0" max="100" />
    &lt;/p>
  &lt;/form>
  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Date Picker -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="date-picker">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <h4 class="card-title">Date Picker</h4>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-date-picker">View</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-date-picker">Html</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#js-date-picker">JS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-date-picker">
                                        <p>We use a modified version of pickadate.js to create a materialized date
                                            picker. Test it out below! </p>
                                        <label for="birthdate">Birthdate</label>
                                        <input class="datepicker" id="birthdate" type="text">
                                    </div>
                                    <div id="html-date-picker">
          <pre><code class="language-markup">
  &lt;input type="text" class="datepicker">
  </code></pre>
                                    </div>
                                    <div id="js-date-picker">
          <pre><code class="language-javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });

  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Time Picker -->
                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="time-picker">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <h4 class="card-title">Time Picker</h4>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0"><a class="active p-0"
                                                                                  href="form-elements.html#view-time-picker">View</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#html-time-picker">Html</a>
                                                    </li>
                                                    <li class="tab col s4 p-0"><a class="p-0"
                                                                                  href="form-elements.html#js-time-picker">JS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-time-picker">
                                        <p>We use a modified version of pickatime.js to create a materialized time
                                            picker. Test it out below! </p>
                                        <label for="lunch-time">Lunch Time</label>
                                        <input class="timepicker" id="lunch-time" type="text">
                                    </div>
                                    <div id="html-time-picker">
          <pre><code class="language-markup">
  &lt;input type="text" class="timepicker">
  </code></pre>
                                    </div>
                                    <div id="js-time-picker">
          <pre><code class="language-javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.timepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.timepicker').timepicker();
  });

  </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Auto Complete -->

                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="autoComplete">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <h4>Auto Complete</h4>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active p-0"
                                                           href="form-elements.html#view-autocomplete">View</a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a class="p-0" href="form-elements.html#view-html">HTML</a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a class="p=0" href="form-elements.html#view-js">JS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-autocomplete">
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="material-icons prefix">textsms</i>
                                                        <input class="autocomplete" id="autocomplete-input"
                                                               type="text">
                                                        <label for="autocomplete-input">Autocomplete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-html">
          <pre class="language-markup">
  <code class="language-markup">
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col s12&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;input-field col s12&quot;&gt;
        &lt;i class=&quot;material-icons prefix&quot;&gt;textsms&lt;/i&gt;
        &lt;input type=&quot;text&quot; id=&quot;autocomplete-input&quot; class=&quot;autocomplete&quot;&gt;
        &lt;label for=&quot;autocomplete-input&quot;&gt;Autocomplete&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
  </code>
</pre>
                                    </div>
                                    <div id="view-js">
          <pre class="language-javascript">
  <code class="language-javascript">
$(document).ready(function(){
  $('input.autocomplete').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'https://placehold.it/250x250'
    },
  });
});
  </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Character counter -->

                    <div class="row">
                        <div class="col s12">
                            <div class="card card-tabs" id="autoComplete">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l6">
                                                <h4>Character Counter</h4>
                                            </div>
                                            <div class="col s12 m6 l6">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active p-0"
                                                           href="form-elements.html#view-counter">View</a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a class="p-0" href="form-elements.html#view-counter-html">HTML</a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a class="p=0"
                                                           href="form-elements.html#view-counter-js">JS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-counter">
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="row">
                                                    <form class="col s12">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input data-length="10" id="input_text" type="text">
                                                                <label for="input_text">Input text</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                    <textarea class="materialize-textarea"
                                                                              data-length="120"
                                                                              id="textarea1"></textarea>
                                                                <label for="textarea1">Textarea</label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-counter-html">
          <pre class="language-markup">
  <code class="language-markup">
&lt;div class=&quot;row&quot;&gt;
&lt;form class=&quot;col s12&quot;&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;input-field col s6&quot;&gt;
      &lt;input id=&quot;input_text&quot; type=&quot;text&quot; data-length=&quot;10&quot;&gt;
      &lt;label for=&quot;input_text&quot;&gt;Input text&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;input-field col s12&quot;&gt;
      &lt;textarea id=&quot;textarea1&quot; class=&quot;materialize-textarea&quot; data-length=&quot;120&quot;&gt;&lt;/textarea&gt;
      &lt;label for=&quot;textarea1&quot;&gt;Textarea&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
&lt;/div&gt;
  </code>
</pre>
                                    </div>
                                    <div id="view-counter-js">
          <pre class="language-javascript">
  <code class="language-javascript">
    $(document).ready(function() {
      $('input#input_text, textarea#textarea1').characterCounter();
    });
  </code>
</pre>
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
                                                            class="sidenav-close"
                                                            href="form-elements.html#">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a class="active" href="form-elements.html#messages">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="form-elements.html#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="form-elements.html#activity">
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
                                <a href="form-elements.html#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth
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
    <script src="{{asset('app-assets/vendors/noUiSlider/nouislider.js')}}" type="text/javascript"></script>

@endsection

@section('footer')
    <script src="{{asset('app-assets/js/scripts/form-elements.js')}}"></script>

@endsection

