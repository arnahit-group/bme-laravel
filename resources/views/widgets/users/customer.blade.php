<div class="col s6 m3 l3">
    <div id="profile-card" class="card small">
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4" style="font-family: irsans">
                {{isset($data->properties->name) ? $data->properties->name : ''  }}
                {{isset($data->properties->family) ? $data->properties->family : ''  }}
            </span>
            <p>
                <i class="material-icons">perm_phone_msg</i>
                {{isset($data->properties->phone) ? $data->properties->phone: ''  }}
            </p>
            <p>
                <i class="material-icons">perm_phone_msg</i>
                {{isset($data->properties->mobile) ? $data->properties->mobile : ''  }}
            </p>
            <p>
                <i class="material-icons">email</i>
                {{isset($data->email) ? $data->email : ''  }}


            </p>
        </div>
    </div>
</div>