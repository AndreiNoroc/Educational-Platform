@extends('Auth.authentification')

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6 text-center" style="color: whitesmoke">
                <div class="card-header">
                    <h2><strong>RECOVER</strong></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <form class="mt-3" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <div class="form-group mb-3 position-relative overflow-hidden">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mb-4">
                                    <button type="submit" class="btn btn-success btn-block">Send Email</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
