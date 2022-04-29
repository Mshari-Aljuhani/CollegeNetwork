<div class="form-control mx-auto mt-2" style="width: 90%;">
    <div class="row">
        <div class="col-1">
            <img src="{{asset('storage/profilePic/'.$comment->user->profilePic)}}" alt="" height="auto" width="100%">
            <b class="px-auto">{{$comment->user->name}}</b>
        </div>
        <div class="col-11 mt-2">
            <h4 class="">{{$comment->comment_txt}}</h4>
            <p>created at : {{$comment->created_at}}
                @if(Auth::id() == $comment->user_id)
                    |  @include('comment.editForm', $comment)
                @endif
            </p>
        </div>
    </div>
</div>
