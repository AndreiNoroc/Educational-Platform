@extends('Index.authentification')

@section('content')
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="flex-md-wrap">
                    <h3 class="card-header text-center">Reset password</h3>
                    <div class="card-body">

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                       name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Repeat Password" id="password-confirmation" class="form-control"
                                       name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-success btn-block">Go to login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
