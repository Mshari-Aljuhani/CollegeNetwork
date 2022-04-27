@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                    <div class="card-body" style="text-align: center">
                    @isset(Auth::user()->profilePic)
                            <h5>Welcome <b>{{Auth::user()->name}}</b></h5>
                            <img class="image rounded " src="{{asset('/storage/profilePic/'.Auth::user()->profilePic)}}" alt="" height="auto" width="200px">
                        @else
                        <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5>Upload your avatar</h5>
                            <input class="form-control" type="file" name="profilePic" >
                            <input class="mt-2" type="submit" value="Upload">
                        </form>
                    </div>
                        @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
