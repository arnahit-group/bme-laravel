<div class="col s12 m4">
    <div class="card small">
        <div class="card-content">
            <span class="card-title"
                  style="font-family: irsans">{{isset($data->properties->name) ? $data->properties->name : ''  }}</span>
            <p>
                <i class="material-icons">email</i>
                {{isset($data->email) ? $data->email: ''  }}
            </p>
            <p>
                <i class="material-icons">perm_phone_msg</i>
                {{isset($data->properties->phone) ? $data->properties->phone: ''  }}
            </p>
        </div>

        <div class="card-action">
            <a href="#">View Activities</a>
            <a href="{{route('users.edit',['user_type'=>$user_type , 'id'=>$data->id])}}">Edit</a>
        </div>
    </div>
</div>