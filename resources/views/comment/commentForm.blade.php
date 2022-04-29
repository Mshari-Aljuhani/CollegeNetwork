    <form action="{{route('comment.store')}}" class="comment-form" method="post">
        @csrf
        <img src="{{asset('storage/profilePic/'.Auth::user()->profilePic)}}" alt="" height="50px" width="auto">
        <button class="btn btn-outline-info mx-2" >send</button>
        <input type="text" class="form-control " name="comment_txt" placeholder="Enter the comment">
        <input type="hidden" name="user_id" value="{{Auth::id()}}">
        <input type="hidden" name="post_id" value="{{$post->id}}">
    </form>

