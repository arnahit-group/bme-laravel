<table class="display" id="data-table-contact" style="width:100%">
    <thead>

        <tr>
            <th class="background-image-none center-align">
                <label>
                    <input onClick="toggle(this)" type="checkbox"/>
                    <span></span>
                </label>
            </th>

            <th>عنوان</th>
            <th>زیر شاخه دارد ؟</th>
            <th>حداکثر تعداد آیتم ها</th>
            <th>عملیات</th>
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
                <td>{{isset($data->locales[app()->getLocale()])?$data->locales[app()->getLocale()]:$data->title}}</td>
                <td>{{$data->can_have_child}}</td>
                <td>{{$data->can_have_item}}</td>
                <td>
                    @can($permissions['edit'])
                        <a href="{{$data->urls['edit']}}"><i class="material-icons delete">edit</i></a>
                    @endcan
                    @can($permissions['destroy'])
                        <a href="#"><i class="material-icons delete">delete</i></a>
                    @endcan

                </td>
            </tr>

        @endforeach

    </tbody>
</table>
