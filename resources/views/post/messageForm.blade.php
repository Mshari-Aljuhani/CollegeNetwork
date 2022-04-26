@auth
    <!-- For logging users -->
    <div class="m-5">
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea class="form-control mb-2" name="message" id="message" placeholder="Enter your message" required>
                {{old('message')}}
            </textarea>
        <div  style="display: inline-flex; alignment-baseline: center">
            <button class="btn btn-outline-info me-4">Send!</button>
            <input type="file" name="images[]" class="form-control" multiple>
        </div>
    </form>
</div>
@else
    <!-- For Visitors (guest) -->
    <div class="m-5">
            <textarea class="form-control mb-2" name="message" id="message" placeholder="Please login to send posts" disabled >
                {{old('message')}}
            </textarea>
    </div>
@endauth


