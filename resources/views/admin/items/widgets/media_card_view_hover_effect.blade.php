<div class="col s12 m3 grid">

    <figure class="effect-zoe">
        @if(isset($data->properties['path']->title))
            <img alt="img25" src="{{$data->properties['path']->title}}"/>
        @else
            <img alt="img25" src="{{asset('app-assets/images/gallery/25.png')}}"/>
        @endif
        <figcaption>
            <h6 class="title">
                <span>{{isset($data->properties['title']->title ) ? $data->properties['title']->title : ''}} </span>
            </h6>
            <p class="icon-links">
                @can($permissions['destroy'])
                    <a href="#">
                        <i class="material-icons">delete</i>
                    </a>
                @endcan
                @can($permissions['edit'])
                    <a href="{{$data->urls['edit']}}">
                        <i class="material-icons">edit</i>
                    </a>
                @endcan
                @can($permissions['show'])
                    <a href="#">
                        <i class="material-icons">visibility</i>
                    </a>
                @endcan
            </p>
            <p class="description"></p>
        </figcaption>
    </figure>
</div>
