@extends("layouts.admin")

@section("header")

@endsection
@section("container")

    <section id="content">
        <!--breadcrumbs start-->

    @include("widgets.breadcrumbs")

    <!--breadcrumbs end-->
        <!--start container-->
        <div class="container">

            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h4 class="header2">ثبت </h4>
                        <div class="row">
                            <form class="col s12"
                                  action="{{route("users.properties.update", ['user_type'=> $user_type, 'id'=>$id])}}"
                                  method="post">
                                {{@csrf_field()}}
                                <div class="row">

                                    <div class="input-field col s12">
                                        <input id="title" name="title" required
                                               value="{{isset($property->locales[app()->getLocale()]) ?  $property->locales[app()->getLocale()] : ""}}"
                                               type="text">
                                        <label for="title">{{ __('messages.input_titles')['title']}}</label>
                                    </div>
                                    <div class="input-field col s12 m12">
                                        <button type="button" class="btn-flat red-text"
                                                id="add-locale-title">
                                            {{ __('messages.operations')['add locale']}}
                                        </button>
                                    </div>

                                    <div class="input-field col s12 m12" id="container-locale-title">
                                        @foreach($locales as $locale)
                                            <div class="row">
                                                <div class="input-field col s12 m2">
                                                </div>
                                                <div class="input-field col s12 m8">
                                                    <input id="title-{{$locale}}"
                                                           name="title-{{$locale}}"
                                                           value="{{isset($property->locales[$locale]) ? $property->locales[$locale] : "" }}"
                                                           type="text" required>
                                                    <label for="title-{{$locale}}">{{__('messages.languages')[$locale]}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                    <div class="input-field col s12 m12">
                                        <select id="input_type" name="input_type" required>
                                            <option value="" disabled
                                                    selected>
                                                {{ __('messages.input_titles')['input_type']}}
                                            </option>
                                            <option value="text" {{$property->input_type=="text" ? "selected" : ""}}>
                                                text
                                            </option>
                                            <option value="select" {{$property->input_type=="select" ? "selected" : ""}}>
                                                select
                                            </option>
                                            <option value="check" {{$property->input_type=="check" ? "selected" : ""}}>
                                                check
                                            </option>
                                            <option value="multi_upload" {{$property->input_type=="multi_upload" ? "selected" : ""}}>
                                                multi_upload
                                            </option>
                                            <option value="array_date" {{$property->input_type=="array_date" ? "selected" : ""}}>
                                                array_date
                                            </option>
                                            <option value="multi-relation-document-images" {{$property->input_type=="multi-relation-document-images" ? "selected" : ""}}>
                                                multi-relation-document-images
                                            </option>
                                            <option value="single-relation-price" {{$property->input_type=="single-relation-price" ? "selected" : ""}}>
                                                single-relation-price
                                            </option>
                                            <option value="multi-text" {{$property->input_type=="multi-text" ? "selected" : ""}}>
                                                multi-text
                                            </option>
                                        </select>
                                        <label for="input_type">{{ __('messages.input_titles')['input_type']}}</label>
                                    </div>


                                    <div class="row"
                                         id="values_container" {{$property->input_type == "select" ? "" :"hidden"  }} >

                                        <div class="input-field col s12 m4">
                                            <input id="value" name="value" type="text">
                                            <label for="value">{{ __('messages.input_titles')['value']}}</label>
                                        </div>
                                        <div class="input-field col s12 m2">
                                            <button id="add_value" class="btn cyan waves-effect waves-light right"
                                                    type="button"
                                                    name="action">add
                                            </button>
                                        </div>


                                        <div class="input-field col s12 m6">

                                            <table id="values">
                                                <tr>
                                                    <th>
                                                        delete
                                                    </th>
                                                    <th>
                                                        value
                                                    </th>
                                                </tr>


                                                @foreach($property->values as $value)
                                                    <tr>
                                                        <td>
                                                            <button class='btn waves-effect waves-light right button'
                                                                    type='button' name='action'>X
                                                            </button>
                                                        </td>
                                                        <td> {{$value}}</td>
                                                        <input type='hidden' name='values[]' value='{{$value}}'/>
                                                    </tr>
                                                @endforeach

                                            </table>

                                        </div>
                                    </div>


                                    <div class="input-field col s12">
                                        <input id="default_value" name="default_value" required
                                               value="{{$property->default_value}}"
                                               type="text">
                                        <label for="title">{{ __('messages.input_titles')['default_value']}}</label>
                                    </div>

                                    <div class="input-field col s12 m12">
                                        <select id="level" name="level" required>
                                            <option value="" disabled
                                                    selected>{{ __('messages.input_titles')['level']}}</option>
                                            <option value="1" {{$property->level==1 ? "selected" : "" }}>level 1
                                            </option>
                                            <option value="2" {{$property->level==2 ? "selected" : "" }}>level 2
                                            </option>
                                            <option value="3" {{$property->level==3 ? "selected" : "" }}>level 3
                                            </option>
                                        </select>
                                        <label for="level">{{ __('messages.input_titles')['level']}}</label>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit"
                                                name="action">{{ __('messages.input_titles')['submit']}}
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
@section("footer")

    <script>

        $(document).ready(function () {

            $("#values").on('click', 'button.button', function () {
                $(this).parent().parent().remove();
            });


            $('#input_type').change(function () {

                if ($(this).val() == 'select') {

                    $('#values_container').show('normal');
                } else {
                    $('#values_container').hide('normal');
                }

                if ($(this).val() == 'text') {
                    $('#default_value').attr('type', 'text');
                }
                else if ($(this).val() == 'check') {
                    $('#default_value').attr('type', 'number').attr('min', '0').attr('max', '1').attr('value', '0');
                }

            });


            $('#add_value').click(function () {

                var value_tag = $('#value');
                if (value_tag.val() == "")
                    return;

                var ss = "";
                ss += "<tr><td><button class='btn waves-effect waves-light right button' type='button' name='action'>X</button></td><td>" + value_tag.val() + "</td>";
                ss += "<input type='hidden' name='values[]' value='" + value_tag.val() + "' />";
                ss += "</tr>";
                $('#values').append(ss);

//                $('#values').append("<tr><td><button class='btn waves-effect waves-light right button' type='button' name='action'>X</button></td><td>" + value_tag.val() + "</td></tr>");

//                $('#form').append("<input type='hidden' name='values[]' value='" + value_tag.val() + "' />");

                value_tag.val("");
            });

        });


    </script>




@endsection