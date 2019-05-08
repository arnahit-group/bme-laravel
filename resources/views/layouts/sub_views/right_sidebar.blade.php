<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="{{asset('images/avatar/avatar-10.jpg')}}" alt=""
                         class="circle responsive-img valign profile-image cyan ">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown-nav" class="dropdown-content">
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">face</i> پروفایل</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">settings</i> تنظیمات</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">live_help</i> راهنما</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">lock_outline</i> قفل </a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" class="grey-text text-darken-1">
                                <i class="material-icons">keyboard_tab</i> خروج</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn"
                       href="#"
                       data-activates="profile-dropdown-nav">
                        {{$user->properties->name}}
                        <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">
                        مدیر هتل
                    </p>
                </div>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible">
                @foreach($navigations as $navigation)
                    @if(isset($navigation->properties->key) and  isset($navigation->properties->value) )
                        <li >
                            <a href="{{route($navigation->properties->route, [$navigation->properties->key=>$navigation->properties->value])}}">
                                <i class="material-icons">dashboard</i>
                                <span class="nav-text">{{__('messages.navigation_titles')[$navigation->properties->title] }}</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{route($navigation->properties->route)}}">
                                <i class="material-icons">dashboard</i>
                                <span class="nav-text">{{__('messages.navigation_titles')[$navigation->properties->title] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
    <a href="#" data-activates="slide-out"
       class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
        <i class="material-icons">menu</i>
    </a>
</aside>
