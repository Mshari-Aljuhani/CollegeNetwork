<div class="card-container m-5">
    @foreach($posts as $post)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{$post->user->name}}</h5>
                <h4 class="">{{$post->message}}</h4>
                <p class="card-text"><small class="text-muted">- {{\Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}</small></p>
            </div>
            @isset($post->pic)
                <img src="..." class="card-img-bottom" alt="...">
            @endisset
        </div>
    @endforeach
</div>
