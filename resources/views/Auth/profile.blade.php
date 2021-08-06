@extends('Auth.authentification')

@section('content')

@foreach ($users as $user)
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6 text-center" style="color: whitesmoke">
                <div class="card-header">
                    <h2><strong>{{ $user->username }}'s profile</strong></h2>
                </div>
            </div>
        </div>

        <div class="card-body">
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
