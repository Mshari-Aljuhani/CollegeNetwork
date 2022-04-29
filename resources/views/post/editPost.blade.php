<div style="display: inline-flex" class="editPost-button">
    <!-- Edit Post -->
    <button type="button" class="btn btn-outline-info mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$post->id}}">
        Edit
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal_{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('posts.update', $post)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <textarea class="form-control" name="message">{{$post->message}}</textarea>
                        <label for="imageInput" class="mt-1">Add extra images</label>
                        <input id="imageInput" type="file" name="images[]" class="form-control mt-1" multiple>
                        <button class="btn btn-outline-primary mt-1 mb-2">Update</button>
                    </form>
                    @if($post->images->count() > 0)
                        <hr>
                        <div class="mb-3" style="width: 100%; margin: 0 auto">
                        @foreach($post->images as $image)
                            <div class="mt-3" style="text-align: center">
                                <img src="{{asset('storage/postPics/'.$image->imageName)}}" class="card-img-bottom" alt="Image {{$post->user->name}}">
                                <div style="display: inline-flex">
                                <!-- Update image button -->
                                <form action="{{route('updateImage', $post)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mt-1" style="display: flex; width: 100%;">
                                        <input type="hidden" name="image_id" value="{{$image->id}}" >
                                        <input type="hidden" name="user_id" value="{{$post->user->id}}" >
                                        <input type="hidden" name="post_id" value="{{$post->id}}" >
                                        <input type="file" name="updateImage" class="form-control" required>
                                        <button type="submit" class="btn btn-outline-primary mx-2">update</button>
                                    </div>
                                </form>
                                <!-- Delete image button -->
                                    <form action="{{route('updateImage')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="user_id" value="{{$post->user->id}}" >
                                        <input type="hidden" name="image_id" value="{{$image->id}}">
                                        <button type="submit" class="btn btn-outline-danger mt-1" onclick="return confirm('Are you sure you want delete this image ?')">Delete</button>
                                    </form>
                                </div>
                    </div>
                    @endforeach
                    </div>
                    @endif
            </div>
        </div>
    </div>
    </div>
    <!-- END Edit Post -->

    <!-- Delete Post -->
    <form action="{{route('posts.destroy', $post)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <input type="hidden" name="user_id" value="{{$post->user->id}}" >
        <button type="submit" class="btn btn-outline-danger " onclick="return confirm('Are you sure you want delete this post ?')">Delete</button>
    </form>

    <!-- END Delete Post -->
</div>
