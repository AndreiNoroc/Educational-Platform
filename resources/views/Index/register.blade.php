@extends('Index.authentification')

@section('content')

<h3 class="card-header text-center">Register User</h3>
<div class="card-body">

    <form action="{{ route('register.custom') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <input type="text" placeholder="Firstname" id="firstname" class="form-control" name="firstname"
                required autofocus>
            @if ($errors->has('firstname'))
                <span class="text-danger">{{ $errors->first('firstname') }}</span>
            @endif
        </div>

        <div class="form-group mb-3">
            <input type="text" placeholder="Lastname" id="lastname" class="form-control" name="lastname"
                required autofocus>
            @if ($errors->has('lastname'))
                <span class="text-danger">{{ $errors->first('lastname') }}</span>
            @endif
        </div>

        <div class="form-group mb-3">
            <input type="text" placeholder="Username" id="username" class="form-control" name="username"
                required autofocus>
            @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group mb-3">
            <input type="text" placeholder="Email" id="email_address" class="form-control"
                name="email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group mb-3">
            <input type="password" placeholder="Password" id="password" class="form-control"
                name="password" required>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group mb-3">
            <div class="checkbox">
                <label><input type="checkbox" name="remember">Remember Me</label>
            </div>
        </div>

        <div class="d-grid mx-auto">
            <button type="submit" class="btn btn-success btn-block">Sign up</button>
        </div>
    </form>

</div>
@endsection
