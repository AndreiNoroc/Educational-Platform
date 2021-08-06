@extends('Auth.authentification')

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6 text-center" style="color: whitesmoke">
                <div class="card-header">
                    <h2><strong>RESET</strong></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <form class="mt-3" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group mb-3 position-relative overflow-hidden">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3 position-relative overflow-hidden">
                                    <input type="password" placeholder="Repeat Password" id="password-confirmation" class="form-control"
                                           name="password_confirmation" required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mb-4">
                                    <button type="submit" class="btn btn-success btn-block">Go to login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
