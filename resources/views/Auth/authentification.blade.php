<!DOCTYPE html>
<html lang="en">

@include('Index.head')

<body class="m-0">

    <div class="container-fluid">
        <div class="row" id="app">
            <div class="col-md-5 d-flex align-items-center" id="auth-left-design">
                @yield('content')
            </div>
            <div class="col-md-7 d-flex align-items-center" id="auth-right-design">
                <div class="container-fluid">
                    <div class="w-75 row d-flex justify-content-center mt-4">
                        <a href="index" class="btn-get-started scrollto" style="font-size: x-large">Home</a>
                    </div>
                    @guest
                        <div class="w-75 row d-flex justify-content-center mt-4">
                            <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); ">
                            <h2>Let's find some info</h2>
                            <a href="{{ route('login') }}" class="btn-get-started scrollto" style="font-size: x-large">Login</a>
                        </div>
                        <div class="w-75 row d-flex justify-content-center mt-4">
                            <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); ">
                            <h2>Does not have any account? Make one</h2>
                            <a href="{{ route('register-user') }}" class="btn-get-started scrollto" style="font-size: x-large">Register</a>
                        </div>
                    @else
                        <div class="w-75 row d-flex justify-content-center mt-4">
                            <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); ">
                            <h2>See you soon..</h2>
                            <a href="{{ route('signout') }}" class="btn-get-started scrollto" style="font-size: x-large">Logout</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>

</body>



<!--Javascript from others-->
<script type="text/javascript" src="JS/http_code.jquery.com_jquery-3.5.1.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
{{--    <script type="text/javascript" src="{!! asset('vendor/bootstrap/js/bootstrap.esm.min.js') !!}"></script>--}}
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/glightbox/js/glightbox.min.js"></script>
<script type="text/javascript" src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="vendor/php-email-form/validate.js"></script>
<script type="text/javascript" src="vendor/swiper/swiper-bundle.min.js"></script>

<script type="text/javascript" src="JS/main.js"></script>

</html>
