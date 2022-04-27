@extends('layouts.app')
@section('content')

            <div class="card mt-3" >
                <div class="card-header" style="text-align: center">
                    <h3><b>Profile</b></h3>
                </div>
            <div class="row">
                <div class="col-6">
                    <img class="image rounded m-2 responsive" src="{{asset('/storage/profilePic/'.Auth::user()->profilePic)}}" alt="" height="auto" width="100%">
                    <form class="mx-5" action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p>Update your avatar</p>
                        <input class="form-control" type="file" name="profilePic" >
                        <input class="mt-2 mb-2" type="submit" value="Upload">
                    </form>
                </div>

                <div class="card-body col-6 mt-5">
                    <blockquote class="blockquote align-middle" style="text-align: left; vertical-align: middle">
                        <p>Username: {{Auth::user()->name}}</p>
                        <p>Email: {{Auth::user()->email}}</p>
                        <p>Phone Number: {{Auth::user()->phoneNumber}}</p>
                        <footer class="blockquote-footer mt-0">Registered since <cite title="Source Title">
                                {{\Carbon\Carbon::parse(Auth::user()->created_at)->format('Y-m-d')}}
                            </cite></footer>
                    </blockquote>
                </div>
            </div>
    </div>

    <div class="card mt-3" >
        <div class="card-header" style="text-align: center">
            <h3><b>My posts</b></h3>
        </div>
        @include('post.show')
    </div>

@endsection
