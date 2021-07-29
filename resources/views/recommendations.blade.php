<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Recommendation</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../assets/img/apple-touch-icon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Compiled and minified CSS (face parte din pachetul materialize, foarte folositor pentru frontend) -->
    <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css" media="screen,projection"/>

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS-ul facut de noi -->
    <link rel="stylesheet" href="../assets/css/style-index.css">
</head>

<body>

    <!-- //? ==================== Start Header ==================== -->
    <header id="header" style="position: fixed;left:0;right:0;height:66px">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="../index.php">EducationFirst</a></h1>
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

    <!-- //? ==================== Start Carousel ==================== -->
    <section>
        <!-- //* Titlu --> 
        <div class="section-title" style="padding-top:3rem">
            <h2>Recommendations</h2>
            <h3>What we are recommending <span>you</span> to do after you close the website!</h3>
        </div>

        <!-- //* partea care se misca deasupra-->
        <marquee class="marquee" onmouseover="this.stop();" onmouseout="this.start();">
        Responsability! &emsp; &emsp; &emsp; Business! &emsp; &emsp; &emsp; Risk! &emsp; &emsp; &emsp; Success! &emsp; &emsp; &emsp; Hard-Work!</marquee>

        <div class="carousel" style="height: 800px;">
            <div class="carousel-item" style="height: 680px; align-items: center">
                <img src="../assets/img/blog/rsz_recom1.jpg" alt="">
                <h3 style="background: #282727"><a href="#terms1" class="btn modal-trigger button_carousel">Click to find out more!</a></h3>
            </div>
            <div class="carousel-item" style="height: 680px; align-items: center">
                <img src="../assets/img/blog/rsz_1rsz_recom2.jpg" alt="">
                <h3 style="background: #282727"><a href="#terms2" class="btn modal-trigger button_carousel">Click to find out more!</a></h3>
            </div>
            <div class="carousel-item" style="height: 680px; align-items: center">
                <img src="../assets/img/blog/rsz_recom3.jpg" alt="">
                <h3 style="background: #282727"><a href="#terms3" class="btn modal-trigger button_carousel">Click to find out more!</a></h3>
            </div>
            <div class="carousel-item" style="height: 680px; align-items: center">
                <img src="../assets/img/blog/rsz_recom4.jpg" alt="">
                <h3 style="background: #282727"><a href="#terms4" class="btn modal-trigger button_carousel">Click to find out more!</a></h3>
            </div>
            <div class="carousel-item" style="height: 680px; align-items: center">
                <img src="../assets/img/blog/rsz_recom5.jpg" alt="">
                <h3 style="background: #282727"><a href="#terms5" class="btn modal-trigger button_carousel">Click to find out more!</a></h3>
            </div>
        </div>

        <!-- //* partea care se misca dedeupt-->
        <marquee class="marquee" onmouseover="this.stop();" onmouseout="this.start();">
            Responsability! &emsp; &emsp; &emsp; Business! &emsp; &emsp; &emsp; Risk! &emsp; &emsp; &emsp; Success! &emsp; &emsp; &emsp; Hard-Work!</marquee>

    </section>
    <!-- //? ==================== End Carousel ==================== -->

    <!-- //* ==================== Start Modals ==================== -->
    <div style="color: black">
        <div class="modal" id="terms1">
            <div class="modal-content">
                <h2>ZERO TO ONE</h2>
                <hr>
                <p>Here I will put anything!</p>
            </div>
            <div class="modal-footer">
                <a class="modal-close btn" style="background: #1d6c0c; color: white">Close!</a>
            </div>
        </div>
        <div class="modal" id="terms2">
            <div class="modal-content">
                <h2>UNSHAKEABLE</h2>
                <hr>
                <p>Here I will put anything!</p>
            </div>
            <div class="modal-footer">
                <a class="modal-close btn" style="background: #1d6c0c; color: white">Close</a>
            </div>
        </div>
        <div class="modal" id="terms3">
            <div class="modal-content">
                <h2>MONEY</h2>
                <h3>&emsp; MASTER THE GAME</h3>
                <hr>
                <p>Here I will put anything!</p>
            </div>
            <div class="modal-footer">
                <a class="modal-close btn" style="background: #1d6c0c; color: white">Close</a>
            </div>
        </div>
        <div class="modal" id="terms4">
            <div class="modal-content">
                <h2>RICH DAD</h2>
                <h2>&emsp; &emsp; POOR DAD</h2>
                <hr>
                <p>Here I will put anything!</p>
            </div>
            <div class="modal-footer">
                <a class="modal-close btn" style="background: #1d6c0c; color: white">Close</a>
            </div>
        </div>
        <div class="modal" id="terms5">
            <div class="modal-content">
                <h2>THE MILLIONAIRE NEXT DOOR</h2>
                <hr>
                <p>Here I will put anything!</p>
            </div>
            <div class="modal-footer">
                <a class="modal-close btn" style="background: #1d6c0c; color: white">Close</a>
            </div>
        </div>
    </div>
    <!-- //* ==================== End Modals ==================== -->

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

    <script src="../assets/js/http_code.jquery.com_jquery-3.5.1.js"></script> <!--Jquery (nu merge caruselul fara) -->

    <!-- Compiled and minified JavaScript -->
    <script src="../assets/materialize/js/materialize.min.js"></script> <!-- Foarte importanta, nu mai merge nici caruselul si nici modalele fara -->
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Astea sunt sa porneasca modalele si sa se invarta caruselul, le-am lasat aici ca sunt scurte -->
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
            $('.modal').modal();
            $('.scrollspy').scrollSpy();
        });
    </script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</html>