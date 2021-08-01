<!DOCTYPE html>
<html lang="en">

@include('Recommendations.head')

<body>

    <!-- //? ==================== Start Header ==================== -->
    <header id="header" style="position: fixed;left:0;right:0;height:66px">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="../index">EducationFirst</a></h1>
        </div>
    </header>
    <!-- //? ==================== End Header ==================== -->

    <!-- //* ==================== Hero Section ==================== -->
    <section id="hero">
        <div class="hero-container">
            <h3>Welcome to <strong>EducationFirst</strong></h3>
            <h1>Have you ever asked yourself how entrepreneurs or businessmen work with money?</h1>
            <h2>Well, there is no self made man, everyone needs advises and everyone can fail and learn new things.</h2>
            <h2>Here are our recommendations of books and stories from the biggest investors we know.</h2>
        </div>
    </section>
    <!-- //* ==================== End Hero ==================== -->

    @include('Recommendations.carousel')
    @include('Recommendations.modals')

    <!-- //? ==================== Footer ==================== -->
    <footer id="footer" style="padding-bottom:25px">
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

    <script src="/JS/http_code.jquery.com_jquery-3.5.1.js"></script> <!--Jquery (nu merge caruselul fara) -->

    <!-- Compiled and minified JavaScript -->
    <script src="/materialize/js/materialize.min.js"></script> <!-- Foarte importanta, nu mai merge nici caruselul si nici modalele fara -->
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Astea sunt sa porneasca modalele si sa se invarta caruselul, le-am lasat aici ca sunt scurte -->
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
            $('.modal').modal();
            $('.scrollspy').scrollSpy();
        });
    </script>

    <!-- Template Main JS File -->
    <script src="/JS/main.js"></script>

</html>
