@extends('Auth.authentification')

@section('content')

    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6 text-center" style="color: whitesmoke">
                <div class="card-header">
                    <h2><strong>REGISTER</strong></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <form class="mt-3" method="POST" action="{{ route('register.custom') }}">

                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <div class="form-group mb-3 position-relative overflow-hidden">
                                    <input type="text" placeholder="Firstname" id="firstname" class="form-control" name="firstname"
                                           required autofocus>
                                    @if ($errors->has('firstname'))
                                        <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3 position-relative overflow-hidden">
                                    <input type="text" placeholder="Lastname" id="lastname" class="form-control" name="lastname"
                                           required autofocus>
                                    @if ($errors->has('lastname'))
                                        <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3 position-relative overflow-hidden">
                                    <input type="text" placeholder="Username" id="username" class="form-control" name="username"
                                           required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3 position-relative overflow-hidden">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3 position-relative overflow-hidden">
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

                                <div class="d-grid mb-4">
                                    <button type="submit" class="btn btn-success btn-block">Sign up</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
