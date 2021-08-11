@extends('Auth.authentification')

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6 text-center" style="color: whitesmoke">
                <div class="card-header">
                    <h2><strong>LOGIN</strong></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <form class="mt-3" method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <div class="form-group mb-3 position-relativer overflow-hidden">
                                    <label>
                                        @if (session('login'))
                                            <p class="text-danger">
                                                {{ session('login') }}
                                            </p>
                                        @endif
                                    </label>

                                    <input type="text" placeholder="Username" id="username" class="form-control" name="username" required
                                           autofocus>

                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3 position-relative overflow-hidden">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="container-fluid text-center">
                                        <div class="row justify-content-center m-2">
                                            <a href="recover" style="font-size: larger">Forgot password?</a>
                                        </div>
                                        <div class="row justify-content-center m-2">
                                            <div class="checkbox" style="font-size: larger">
                                                <label>
                                                    <input type="checkbox" name="remember"> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid mb-5">
                                    <button type="submit" class="btn btn-success btn-block">Signin</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
