@foreach($properties as $property)
    <div class="row">
        @if($property->level ==1)
            @if($property->input_type == "text")
                @include("admin.inputs.text", ['property'=>$property])
            @elseif($property->input_type == "url")
                @include("admin.inputs.url", ['property'=>$property])
            @elseif($property->input_type == "code")
                @include("admin.inputs.code", ['property'=>$property])
            @elseif($property->input_type == "file")
                @include("admin.inputs.file", ['property'=>$property])
            @elseif($property->input_type == "cropper")
                @include("admin.inputs.cropper", ['property'=>$property])
            @elseif($property->input_type == "number")
                @include("admin.inputs.number", ['property'=>$property])
            @elseif($property->input_type == "check")
                @include("admin.inputs.check", ['property'=>$property])
            @elseif($property->input_type == "radio")
                @include("admin.inputs.radio", ['property'=>$property])
            @elseif($property->input_type == "textarea")
                @include("admin.inputs.textarea", ['property'=>$property])
            @elseif($property->input_type == "phone")
                @include("admin.inputs.phone", ['property'=>$property])

            @elseif($property->input_type == "select")
                @include("admin.inputs.select", ['property'=>$property])
            @elseif($property->input_type == "multi-relation-document-images")
                @include("admin.inputs.select_image", ['property'=>$property, 'images'=>$images])
            @elseif($property->input_type == "single-relation-price")
                @include("admin.inputs.currency", ['property'=>$property])
            @elseif($property->input_type == "array-text")
                @foreach($properties as $prop)
                    @php($subs = [])
                    @if($prop->parent == $property->id)
                        @php($subs[] = $prop )
                    @endif
                @endforeach
                @include("admin.inputs.array_text", ['property'=>$property, 'subs'=>$subs])
            @elseif($property->input_type == "summernote")
                @include("admin.inputs.summernote", ['property'=>$property])
            @elseif($property->input_type == "multi-user")
                @include("admin.inputs.multi_user", ['property'=>$property, 'users'=>$users])

            @endif
        @endif
    </div>
@endforeach

<div class="row">
    @foreach($properties as $property)
        @if($property->level ==2)
            <div class="col s3">
                @if($property->input_type == "text")
                    @include("admin.inputs.text", ['property'=>$property])
                @elseif($property->input_type == "url")
                    @include("admin.inputs.url", ['property'=>$property])
                @elseif($property->input_type == "code")
                    @include("admin.inputs.code", ['property'=>$property])
                @elseif($property->input_type == "file")
                    @include("admin.inputs.file", ['property'=>$property])
                @elseif($property->input_type == "cropper")
                    @include("admin.inputs.cropper", ['property'=>$property])

                @elseif($property->input_type == "phone")
                    @include("admin.inputs.phone", ['property'=>$property])

                @elseif($property->input_type == "check")
                    @include("admin.inputs.check", ['property'=>$property])
                @elseif($property->input_type == "radio")
                    @include("admin.inputs.radio", ['property'=>$property])
                @elseif($property->input_type == "textarea")
                    @include("admin.inputs.textarea", ['property'=>$property])
                @elseif($property->input_type == "select")
                    @include("admin.inputs.select", ['property'=>$property])
                @elseif($property->input_type == "multi-relation-document-images")
                    @include("admin.inputs.select_image", ['property'=>$property, 'images'=>$images])
                @elseif($property->input_type == "single-relation-price")
                    @include("admin.inputs.currency", ['property'=>$property])
                @elseif($property->input_type == "array-text")
                    @foreach($properties as $prop)
                        @php($subs = [])
                        @if($prop->parent == $property->id)
                            @php($subs[] = $prop )
                        @endif
                    @endforeach
                    @include("admin.inputs.array_text", ['property'=>$property, 'subs'=>$subs])

                @elseif($property->input_type == "summernote")
                    @include("admin.inputs.summernote", ['property'=>$property])
                @elseif($property->input_type == "multi-user")
                    @include("admin.inputs.multi_user", ['property'=>$property, 'users'=>$users])

                @endif
            </div>
        @endif
    @endforeach
</div>

@foreach($properties as $property)
    <div class="row">
        @if($property->level ==3)
            <div class="col s3">
                @if($property->input_type == "text")
                    @include("admin.inputs.text", ['property'=>$property])
                @elseif($property->input_type == "url")
                    @include("admin.inputs.url", ['property'=>$property])
                @elseif($property->input_type == "code")
                    @include("admin.inputs.code", ['property'=>$property])
                @elseif($property->input_type == "file")
                    @include("admin.inputs.file", ['property'=>$property])
                @elseif($property->input_type == "cropper")
                    @include("admin.inputs.cropper", ['property'=>$property])
                @elseif($property->input_type == "phone")
                    @include("admin.inputs.phone", ['property'=>$property])
                @elseif($property->input_type == "check")
                    @include("admin.inputs.check", ['property'=>$property])
                @elseif($property->input_type == "radio")
                    @include("admin.inputs.radio", ['property'=>$property])
                @elseif($property->input_type == "textarea")
                    @include("admin.inputs.textarea", ['property'=>$property])
                @elseif($property->input_type == "select")
                    @include("admin.inputs.select", ['property'=>$property])
                @elseif($property->input_type == "multi-relation-document-images")
                    @include("admin.inputs.select_image", ['property'=>$property, 'images'=>$images])
                @elseif($property->input_type == "single-relation-price")
                    @include("admin.inputs.currency", ['property'=>$property])
                @elseif($property->input_type == "array-text")
                    @foreach($properties as $prop)
                        @php($subs = [])
                        @if($prop->parent == $property->id)
                            @php($subs[] = $prop )
                        @endif
                    @endforeach
                    @include("admin.inputs.array_text", ['property'=>$property, 'subs'=>$subs])

                @elseif($property->input_type == "summernote")
                    @include("admin.inputs.summernote", ['property'=>$property])
                @elseif($property->input_type == "multi-user")
                    @include("admin.inputs.multi_user", ['property'=>$property, 'users'=>$users])

                @endif
            </div>
        @endif
    </div>
@endforeach
