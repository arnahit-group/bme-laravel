<div class="col s12 m4 l4" id="container-{{$data->id}}">
    <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{$data->properties->path }}" alt="office">
        </div>
        <div class="card-action">
            <button id="del-{{$data->id}}" class="btn red left" >{{ __('messages.operations')['delete']}}</button>
            <a href="{{route('documents.edit' , ['document_type'=>$document_type , 'id'=>$data->id])}}">{{ __('messages.operations')['edit']}}</a>
        </div>

    </div>
</div>
