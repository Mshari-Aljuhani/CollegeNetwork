@extends('layouts.app')
@section('content')

    <div class="container" style="text-align: center">
        <h2>Profile</h2>
        <div class="card">
            <div class="row">
                <div class="col-6">
                    <img class="image rounded m-2" src="{{asset('/storage/profilePic/'.Auth::user()->profilePic)}}" alt="" height="300px" width="auto">
                </div>
                <div class="card-body col-6">
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
    </div>

@endsection
