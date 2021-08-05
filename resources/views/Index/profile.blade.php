@extends('Index.authentification')

@section('content')

@foreach ($users as $user)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="flex-md-wrap" >
                <h3 class="card-header text-center">{{ $user->username }}'s profile</h3>
                <div class="card-body">
               		<div class="row-sm-6">
                        <p class="m-b-10 f-w-600">Firstname</p>
                        <h6 class="text-success f-w-400">{{ $user->firstname }}</h6>
                    </div>
                    <div class="row-sm-6">
                        <p class="m-b-10 f-w-600">Lastname</p>
                        <h6 class="text-success f-w-400">{{ $user->lastname }}</h6>
                    </div>
                    <div class="row-sm-6">
                        <p class="m-b-10 f-w-600">Email</p>
                        <h6 class="text-success f-w-400">{{ $user->email }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection