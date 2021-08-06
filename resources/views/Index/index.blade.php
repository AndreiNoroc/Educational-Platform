<!DOCTYPE html>
<html lang="en">

@include('Index.head')

<body>

    <!-- //? ==================== Header(navbar) starts here ==================== -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="/">EducationFirst</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#tabs">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <?php
                        $em = session('username');

                        if(session()->has('username')) {
                            echo '<li><a class="nav-link scrollto" href="profile">'.$em.'</a></li>';
                        } else {
                            echo '<li><a class="nav-link scrollto" href="login">Authentification</a></li>';
                        }
                    ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav> <!-- //* navbar ends here -->
        </div>
    </header>
    <!-- //? ==================== Header(navbar) ends here ==================== -->

    <!-- //* ==================== Hero Section ==================== -->
    <section id="hero">
        <div class="hero-container">
            <h3>Welcome to <strong>EducationFirst</strong></h3>
            <h1>Have you ever asked yourself how entrepreneurs or businessmen work with money?</h1>
            <h2>Oh well... You have arrived in an educational environment. Here, you might discover new way to handle your financial education.</h2>
            <a href="#tabs" class="btn-get-started scrollto">Let's make a tour</a>
        </div>
    </section>
    <!-- //* ==================== End Hero ==================== -->

    @include('Index.about')
    @include('Index.services')
    @include('Index.team')
    @include('Index.contact')

    <!-- //? ==================== Footer ==================== -->
    <footer id="footer">
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

    <!-- home made javascript (mai putin main :D)-->
    <script type="text/javascript" src="JS/app.js"></script> <!-- //? asta schimba taburile de la about us intre ele -->
    <script type="text/javascript" src="JS/modal.js"></script> <!-- //? asta jongleaza cu modalele -->
    <script type="text/javascript" src="JS/main.js"></script>

</html>
