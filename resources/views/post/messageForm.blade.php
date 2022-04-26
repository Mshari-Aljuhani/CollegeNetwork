@auth
<div class="m-5">
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea class="form-control mb-2" name="message" id="message" placeholder="Enter your message" required>
                {{old('message')}}
            </textarea>
        <div  style="display: inline-flex; alignment-baseline: center">
            <button class="btn btn-outline-info me-4">Send!</button>
            <input class="form-control" name="pic" type="file" />
        </div>
    </form>
</div>
@else
    <div class="m-5">
            <textarea class="form-control mb-2" name="message" id="message" placeholder="Please login to send posts" disabled >
                {{old('message')}}
            </textarea>
    </div>
@endauth


