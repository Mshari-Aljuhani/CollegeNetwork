<!-- Button trigger modal -->
<a class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$comment->id}}">
    Edit
</a>
<a class="btn btn-link" type="submit" >Delete</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal_{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{route('comment.update' , $comment)}}" method="post" style="text-align: center">
                    @csrf
                    @method('put')
                    <input class="form-control mb-2" type="text" name="comment_txt" value="{{$comment->comment_txt}}" required>
                    <button class="btn btn-outline-info" type="submit" >Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
