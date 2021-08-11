@extends('Auth.authentification')

@section('content')

@foreach ($users as $user)
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6 text-center" style="color: whitesmoke">
                <div class="card-image">
                    @if(Auth::user()->image)
                        <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image" style="width: 130px;height: 130px; padding: 10px; margin: 0px; ">
                    @endif
                </div>
                <div class="card-header">
                    <h2><strong>{{ $user->username }}'s profile</strong></h2>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row-sm-6 mb-4">
                <form action="{{route('profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image">
                    <input type="submit" value="Upload">
                </form>
            </div>

            <div class="row-sm-6">
                <p class="m-b-10 f-w-600">Firstname:</p>
                <h6 class="text-success f-w-400">{{ $user->firstname }}</h6>
            </div>
            <div class="row-sm-6">
                <p class="m-b-10 f-w-600">Lastname:</p>
                <h6 class="text-success f-w-400">{{ $user->lastname }}</h6>
            </div>
            <div class="row-sm-6">
                <p class="m-b-10 f-w-600">Email:</p>
                <h6 class="text-success f-w-400">{{ $user->email }}</h6>
            </div>
        </div>
    </div>
@endforeach

@endsection
