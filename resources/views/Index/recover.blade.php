@extends('Index.authentification')

@section('content')
<h3 class="card-header text-center">Recover Password</h3>
<div class="card-body">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group mb-3">
            <input type="text" placeholder="Email" id="email_address" class="form-control"
                   name="email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="d-grid mx-auto">
            <button type="submit" class="btn btn-success btn-block">Send Email</button>
        </div>
    </form>
</div>
@endsection
