<div class="row">
    <div class="col s12 center">
        {{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->title}}
    </div>
    <div class="col s12 ">
        <div class="row">
            @foreach($users as $user)
                <div class="col s4 left">
                    <input type="checkbox" id="{{$property->title}}-{{$user->id}}" name="{{$property->title}}[]"
                           value="{{$user->id}}"
                            {{(isset($property->assigned) && is_array($property->assigned) && in_array($user->id,$property->assigned) ? "checked" : "" )}}
                    />
                    <label for="{{$property->title}}-{{$user->id}}">{{$user->properties->name}}</label>
                </div>
            @endforeach
        </div>
    </div>
</div>