<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forum</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="/img/apple-touch-icon.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/CSS/style-index.css" rel="stylesheet">
</head>

<body>

    <!-- //? ==================== Start Header ==================== -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="../index">EducationFirst</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index">Back to main page</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- //* .navbar -->
        </div>
    </header>
    <!-- //? ==================== End Header ==================== -->

    <!-- //* ==================== Start Hero ==================== -->
    <section id="hero">
        <div class="hero-container">
            <h3>Welcome to <strong>EducationFirst</strong></h3>
            <h1>Have you ever asked yourself how entrepreneurs or businessmen work with money?</h1>
            <h2>Well, here are some opinions from people who already have some experience in this domain.</h2>
        </div>
    </section>
    <!-- //* ==================== End Hero ==================== -->

    <!-- //? ==================== Start Title ==================== -->
    <section>
        <div class="section-title" style="padding-top:3rem">
            <h2>Forum</h2>
            <h3>If <span>you</span> have any questions, write us below...</h3>
        </div>
    </section>
    <!-- //? ==================== End Title ==================== -->

    <!-- //* ==================== Start Forum ==================== -->
    <section>
        <h5>AICI SE VAD MESAJELE INDIFERENT</h5>

        <div class="row d-flex justify-content-center">
        <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); ">
        <div class="media w-75">
            <img class="align-self-start mr-3" src="" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">NUME</h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>
        <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); ">
        </div>

        @guest
            <div class="d-flex justify-content-center">
                <h3>You have to login for posting a message!</h3>
            </div>
        @else
            <div class="container">
                <form>
                    <div class="form-group">
                        <label for="msgpost">Write a message</label>
                        <textarea class="form-control" id="msgpost" rows="3"></textarea>
                    </div>
                </form>
                <div class="d-grid mx-auto mt-3 w-25">
                    <button type="submit" class="btn btn-success btn-block">Post</button>
                </div>
            </div>
        @endguest
    </section>
    <!-- //* ==================== End forum ==================== -->

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

    <!-- Vendor JS Files -->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/JS/main.js"></script>

    <script src="/JS/contact-errors.js"></script>
    <script src="/JS/fourm.js"></script>

</html>
