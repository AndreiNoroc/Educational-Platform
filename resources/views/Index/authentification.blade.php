<!DOCTYPE html>
<html lang="en">

@include('Index.head')

<body>

<section id="hero">
    <div class="hero-container mt-5" style="display: inline; padding-top: 1rem;">
        <div class="row d-flex align-items-center">
            <div class="row d-flex justify-content-center" style="width: 40%;">
                <div class="w-75">
                    @yield('content')
                </div>
            </div>
            <div class="h-75 row d-flex justify-content-center" style="width: 60%;">
                <div class="w-75 row d-flex justify-content-center mt-3">
                    <a href="index" class="btn-get-started scrollto">Home</a>
                </div>
                @guest
                    <div class="w-75 row d-flex justify-content-center mt-4">
                        <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); ">
                        <h2>Let's find some info</h2>
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a>
                    </div>
                    <div class="w-75 row d-flex justify-content-center mt-4">
                        <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); ">
                        <h2>Does not have any account? Make one</h2>
                        <a href="{{ route('register-user') }}" class="btn-get-started scrollto">Register</a>
                    </div>
                @else
                    <div class="w-75 row d-flex justify-content-center mt-4">
                        <a href="{{ route('signout') }}" class="btn-get-started scrollto">Logout</a>
                    </div>
                @endguest
            </div>            
        </div>
    </div>
</section>


<!--
<section class="my-5 h-100" style="background: white;">
    @yield('content')
</section>
-->

<!-- //? ==================== Footer ==================== -->
<!--
<footer id="footer" style = "background:#282727">
    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>LuckyBee</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://www.lascapsuni.ro/" target="_blank">LuckyBee</a>
            </div>
        </div>
    </div>
</footer>
-->
<!-- //? ==================== End Footer ==================== -->

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
