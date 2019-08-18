<table class="display" id="data-table-contact" style="width:100%">
    <thead>

        <tr>

            <th class="background-image-none center-align">
                <label>
                    <input onClick="toggle(this)" type="checkbox"/>
                    <span></span>
                </label>
            </th>


            @foreach($datas[0]->properties as $k=>$v)
                @if($v->level == 1 && $v->input_type == 'text')
                    <th>
                        {{$k}}
                    </th>
            @endif





        @endforeach

            <th>عملیات</th>



        {{--            <th>User</th>--}}
        {{--            <th>Full Name</th>--}}
        {{--            <th>Email</th>--}}
        {{--            <th>Phone</th>--}}
        {{--            <th>Favorite</th>--}}
        {{--            <th>Delete</th>--}}
        <!-- <th class="background-image-none"><i class="material-icons">star_border</i></th>
            <th class="background-image-none"><i class="material-icons">delete_outline</i></th> -->
        </tr>


    </thead>
    <tbody>


        @foreach($datas as $data)

            <tr>
                <td class="center-align">
                    <label>
                        <input name="foo" type="checkbox"/>
                        <span></span>
                    </label>
                </td>

                @foreach($data->properties as $k=>$v)
                    @if($v->level == 1 && $v->input_type == 'text')
                        <td>
                            @if(isset($v->title))
                                {{$v->title}}
                            @else
                                <p>-</p>
                            @endif
                        </td>
                    @endif
                @endforeach

                <td>
                    @can($permissions['edit'])
                        <a href="{{$data->urls['edit']}}"><i class="material-icons delete">edit</i></a>
                    @endcan
                    @can($permissions['destroy'])
                        <a href="#"><i class="material-icons delete">delete</i></a>
                    @endcan

                </td>

                {{--                <td>--}}
                {{--                                                    <span class="avatar-contact avatar-online">--}}
                {{--                                                        <img alt="avatar"--}}
                {{--                                                             src="{{asset('app-assets/images/avatar/avatar-1.png')}}">--}}
                {{--                                                    </span>--}}
                {{--                </td>--}}
                {{--                <td>John</td>--}}
                {{--                <td>john@domain.com</td>--}}
                {{--                <td>202-555-0119</td>--}}
                {{--                <td>--}}
                {{--                                                    <span class="favorite">--}}
                {{--                                                        <i class="material-icons"> star_border </i>--}}
                {{--                                                    </span>--}}
                {{--                </td>--}}
                {{--                <td>--}}
                {{--                    <i class="material-icons delete">delete_outline</i>--}}
                {{--                </td>--}}
            </tr>

        @endforeach

    </tbody>
</table>
