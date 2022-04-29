<div class="card-container m-5">
    @foreach($posts as $post)
        <div class="card mb-2">
            <div class="card-body">
                <div style="display: inline-flex;">
                <img class="image rounded" src="{{asset('/storage/profilePic/'.$post->user->profilePic)}}" alt="" height="auto" width="100px">
                <h5 class="card-title m-auto mx-2">{{$post->user->name}}</h5>
                    @if(Auth::id() == $post->user->id)
                        @include('post.editPost')
                    @endif
                </div>
                <h4 class="">{{$post->message}}</h4>
                <p class="card-text"><small class="text-muted">posted: {{\Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}</small></p>
            </div>
            <!-- Photos Slider -->
            @if($post->images->count() > 0)
                <div id="posts-carousel_{{$post->id}}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#posts-carousel_{{$post->id}}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        @for ($i = 1; $i < $post->images->count(); $i++)
                            <button type="button" data-bs-target="#posts-carousel_{{$post->id}}" data-bs-slide-to="{{$i}}" aria-label="Slide 2"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('uploads/post_pics/'.$post->first_image())}}" class="card-img-bottom" alt="Image {{$post->user->name}}">
                        </div>
                        @foreach($post->images->skip(1) as $image)
                            <div class="carousel-item">
                                <img src="{{asset('storage/postPics/'.$image->imageName)}}" class="card-img-bottom" alt="Image {{$post->user->name}}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#posts-carousel_{{$post->id}}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#posts-carousel_{{$post->id}}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endif
        </div>
    @endforeach
</div>
