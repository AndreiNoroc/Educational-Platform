@extends('Index.authentification')

@section('content')
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="flex-md-wrap" >
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        @if (session('login'))
                            <p class="text-danger">
                                {{ session('login') }}
                            </p>
                        @endif
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Username" id="username" class="form-control" name="username" required
                                    autofocus>
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3" style="padding-top: 1rem">
                                    <a href="recover">Forgot password?</a>
                            </div>

                            <div class="form-group mb-3 mt-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-success btn-block">Signin</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
