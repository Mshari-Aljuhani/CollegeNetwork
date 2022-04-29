@extends('layouts.app')
@section('content')

            <div class="card mt-3" >
                <div class="card-header" style="text-align: center">
                    <h3><b>Profile</b></h3>
                </div>
            <div class="row">
                <!-- Avatar -->
                <div class="col-6">
                    <img class="image rounded m-2 responsive" src="{{asset('/storage/profilePic/'.Auth::user()->profilePic)}}" alt="" height="auto" width="100%">
                    <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data" style="text-align: center">
                        @csrf
                        <b>Update your avatar</b>
                        <input class="form-control mx-auto" type="file" name="profilePic" style="width: 70%;">
                        <input class="mt-2 mb-2" type="submit" value="Upload">
                    </form>
                </div>
                <!-- User information -->
                <div class="card-body col-6 mt-5">
                    <blockquote class="blockquote align-middle" style="text-align: left; vertical-align: middle">
                        <p>Username: {{Auth::user()->name}}</p>
                        <p>Email: {{Auth::user()->email}}</p>
                        <p>Phone Number: {{Auth::user()->phoneNumber}}</p>
                        <footer class="blockquote-footer mt-0">Registered since <cite title="Source Title">
                                {{\Carbon\Carbon::parse(Auth::user()->created_at)->format('Y-m-d')}}
                            </cite></footer>
                            
                    </blockquote>
                    <div style="text-align: center; margin-top: 25px ">
                        @include('component.editUserForm')
                    </div>
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
