<?php
//! parte de php in html, aici incepe sesiunea pentru a putea trimite date in alte pagini
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forum</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../assets/img/apple-touch-icon.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style-index.css" rel="stylesheet">
</head>

<body>

    <!-- //? ==================== Start Header ==================== -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="../index.php">EducationFirst</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../index.php">Back to main page</a></li>
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
            <?php
                echo '<h3>Hello '.$_SESSION["username"].'</h3>';
            ?>
        </div>
    </section>
    <!-- //? ==================== End Title ==================== -->

    <!-- //* ==================== Start Forum ==================== -->
    <section>
        <div class="container">
            <form>
                <div class="padding_bottom_20">
                    <i class="ri-text color_icon"></i>
                    <label class="send_mail" for="txt">
                        <?php
                        if(isset($_SESSION["username"])) {
                            echo '<h3>'.$_SESSION["username"].'</h3>';
                        } else {
                            echo '<h3>Log in first!</h3>';
                        }
                        ?>
                        Add a question:
                    </label>
                    <br>
                    <textarea id="txt" name="message" placeholder="message" style="width: 100%" required></textarea>
                </div>
                <div class="buttons" style="text-align: center">
                    <button class="send_mail send_mail_button" type="submit" name="submit">SUBMIT</button>
                    <?php
                    if(!isset($_SESSION["username"])) {
                            echo "Logheaza-te ba!";
                    }
                    ?>
                </div>
            </form>
        </div>     
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
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

    <script src="../assets/js/contact-errors.js"></script>
    <script src="../assets/js/fourm.js"></script>

</html>