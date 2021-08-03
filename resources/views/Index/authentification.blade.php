<!DOCTYPE html>
<html lang="en">

@include('Index.head')

<body>

    <!-- //? ==================== Header(navbar) starts here ==================== -->
    <section id="header" class="fixed-top bg-dark">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="/">EducationFirst</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="index">Home</a></li>

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav> <!-- //* navbar ends here -->
        </div>
    </section>
    <!-- //? ==================== Header(navbar) ends here ==================== -->

    <!-- Pagina de login register logout recover si reset + profile -->
    <section class="mt-5" style="background: white;">
        @yield('content')
    </section>

    <!-- //? ==================== Footer ==================== -->
    <footer id="footer" class="fixed-bottom">
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
