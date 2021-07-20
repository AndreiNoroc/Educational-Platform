<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EducationFirst</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/apple-touch-icon.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!--CSS-->
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style-index.css" rel="stylesheet">

</head>
<body style="background: #282727">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php">EducationFirst</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#tabs">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" id="buttonLogin" style="cursor: pointer">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- The Modal -->
    <div id="loginModal" class="modal">
            <div class="modal-content container" style="color: black; top:30%; max-width: 700px;background: #282727; border-color: #1D6C0C;border-radius: 20px; border-width: 5px;">

                <p style="text-align: center;padding-top: 10px;color: #FFFFFF;font-size: 40px;">Login</p>

                <?php
                //aici verificam ce mesaj se primeste cand se da submit
                //in functie de acel mesaj se va afisa mesajul corespunzator
                if(!isset($_GET['login'])) {
                //                    exit();
                } else {
                    $signupCheck = $_GET['login'];
                    if($signupCheck == "empty") {
                    echo "<p style='text-align: center; color: white'>You did not fill in all fields!</p>";
                    //                        exit();
                    }
                    if($signupCheck == "errorusername") {
                        echo "<p style='text-align: center; color: white'>Wrong username!</p>";
                        //                        exit();
                    }
                    if($signupCheck == "errorpassword") {
                        echo "<p style='text-align: center; color: white'>Wrong password!</p>";
                        //                        exit();
                    }
                    if($signupCheck == "success") {
                    echo "<p style='text-align: center; color: white'>You have been logged in!</p>";
                    //                        exit();
                    }
                }
                ?>

                <hr>
                <form class="d-block" style="text-align: center; color: #FFFFFF" action="forms/login.inc.php" method="post">
                    <div style="padding-bottom: 20px">
                        <label for="username">Username:</label>
                        <?php
                        //conditie ca acest camp sa ramana neschimbat cand se greseste altceva
                        if (isset($_GET['username'])) {
                            $username = $_GET['username'];
                            echo '<input id="username" type="text" name="username" placeholder="Username or email" value="'.$username.'">';
                        } else {
                            echo '<input id="username" type="text" name="username" placeholder="Username or email">';
                        }
                        ?>
                    </div>
                    <div style="padding-bottom: 20px">
                        <label for="password">Password:</label>
                        <input id="password" type="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-success">Login</button>

                    <br><br>
                    <span id="change_link">
                        Do you not have an account?
                        <a class="btn" id="new_account" style="margin-left: 10px;color:#1D6C0C;"><i>New Account</i></a>
                    </span>
                </form>
                <hr>

                <button class="close" style="position: absolute; right: 0;max-width: 100px;color:#ffffff;background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;font-size: 30px">&times;</button>
            </div>
    </div>

    <div id="registerModal" class="modal">
        <div class="modal-content container" style="color: black; top:10%; max-width: 700px;background: #282727; border-color: #1D6C0C;border-radius: 20px; border-width: 5px;">

            <p style="text-align: center;padding-top: 10px;color: #FFFFFF;font-size: 40px;">Register</p>

            <?php
            //aici verificam ce mesaj se primeste cand se da submit
            //in functie de acel mesaj se va afisa mesajul corespunzator
            if(!isset($_GET['signup'])) {
//                    exit();
            } else {
                $signupCheck = $_GET['signup'];
                if($signupCheck == "empty") {
                    echo "<p style='text-align: center; color: white'>You did not fill in all fields!</p>";
//                        exit();
                }
                if($signupCheck == "char") {
                    echo "<p style='text-align: center; color: white'>You used invalid characters!</p>";
//                        exit();
                }
                if($signupCheck == "email") {
                    echo "<p style='text-align: center; color: white'>You used invalid email!</p>";
//                        exit();
                }
                if($signupCheck == "success") {
                    echo "<p style='text-align: center; color: white'>You have been signed up!</p>";
                    echo "<p style='text-align: center; color: white'>Now go to Log in!</p>";
//                        exit();
                }
                if($signupCheck == "usedEmail") {
                    echo "<p style='text-align: center; color: white'>The email has already been used!</p>";
//                        exit();
                }
                if($signupCheck == "usedUsername") {
                    echo "<p style='text-align: center; color: white'>The username has already been used!</p>";
//                        exit();
                }
                if($signupCheck == "passwordsDontMatch") {
                    echo "<p style='text-align: center; color: white'>The passwords don't match!</p>";
//                        exit();
                }
            }
            ?>

            <hr>
            <form class="d-block" style="text-align: center; color: #FFFFFF" action="forms/signup.inc.php" method="post">
                <div style="padding-bottom: 20px">
                    <label for="first-name">First-Name:</label>
                    <?php
                    //conditie ca acest camp sa ramana neschimbat cand se greseste altceva
                    if (isset($_GET['first'])) {
                        $first = $_GET['first'];
                        echo '<input id="first-name" type="text" name="first" placeholder="First_name" value="'.$first.'">';
                    } else {
                        echo '<input id="first-name" type="text" name="first" placeholder="First_name">';
                    }
                    ?>
                </div>
                <div style="padding-bottom: 20px">
                    <label for="last-name">Last-Name:</label>
                    <?php
                    //conditie ca acest camp sa ramana neschimbat cand se greseste altceva
                    if (isset($_GET['last'])) {
                        $last = $_GET['last'];
                        echo '<input id="last-name" type="text" name="last" placeholder="Last_name" value="'.$last.'">';
                    } else {
                        echo '<input id="last-name" type="text" name="last" placeholder="Last_name">';
                    }
                    ?>
                </div>
                <div style="padding-bottom: 20px">
                    <label for="username">Username:</label>
                    <?php
                    //conditie ca acest camp sa ramana neschimbat cand se greseste altceva
                    if (isset($_GET['uid'])) {
                        $uid = $_GET['uid'];
                        echo '<input id="username" type="text" name="uid" placeholder="Username" value="'.$uid.'">';
                    } else {
                        echo '<input id="username" type="text" name="uid" placeholder="Username">';
                    }
                    ?>
                </div>
                <div style="padding-bottom: 20px">
                    <label for="email" style="margin-left: 35px;">Email:</label>
                    <?php
                    //conditie ca acest camp sa ramana neschimbat cand se greseste altceva
                    if (isset($_GET['email'])) {
                        $email = $_GET['email'];
                        echo '<input id="email" type="text" name="email" placeholder="Email" value="'.$email.'">';
                    } else {
                        echo '<input id="email" type="text" name="email" placeholder="Email">';
                    }
                    ?>
                </div>
                <div style="padding-bottom: 20px">
                    <label for="password">Password:</label>
                    <input id="password" type="password" name="pwd" placeholder="Password">
                </div>
                <div style="padding-bottom: 20px">
                    <label for="password">Password:</label>
                    <input id="password" type="password" name="pwd2" placeholder="Confirm Password">
                </div>
                <button type="submit" name="submit" class="btn btn-outline-success">Register</button>

                <br><br>
                <p class="change_link">
                    Do you have an account?
                    <a class="btn" id="exist_account" style="margin-left: 10px;color:#1D6C0C;"><i>Log in</i></a>
                </p>
            </form>
            <hr>
            <button class="close" style="position: absolute; right: 0;max-width: 100px;color:#ffffff;background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;font-size: 30px">&times;</button>
        </div>
    </div> <!-- End Modal -->


    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h3>Welcome to <strong>EducationFirst</strong></h3>
            <h1>Have you ever asked yourself how entrepreneurs or businessmen work with money?</h1>
            <h2>Oh well... You have arrived in an educational environment. Here, you might discover new way to handle your financial education.</h2>
            <a href="#tabs" class="btn-get-started scrollto">Let's make a tour</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
            <!-- ======= Tabs Section ======= -->
            <section id="tabs" class="tabs">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>About Us</h2>
                        <h3>Find out more <span>about us</span></h3>
                    </div>

                    <ul class="nav nav-tabs row d-flex">
                        <li class="nav-item col-4">
                            <a id="tab-01" class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1" style="background: none; text-align: center" onclick="myFunction1()">
                                <i class="ri-team-line"></i>
                                <h4 class="d-none d-lg-block">Who we are?</h4>
                            </a>
                        </li>
                        <li class="nav-item col-4">
                            <a id="tab-02" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2" style="text-align: center" onclick="myFunction2()">
                                <i class="ri-currency-line"></i>
                                <h4 class="d-none d-lg-block">What are we trying to do?</h4>
                            </a>
                        </li>
                        <li class="nav-item col-4">
                            <a id="tab-03" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3" style="text-align: center" onclick="myFunction3()">
                                <i class="ri-vip-diamond-line"></i>
                                <h4 class="d-none d-lg-block">What we offer?</h4>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="d-lg-none d-xl-none" style="padding: 10px"> Who we are? </h3>
                                    <h3 style="padding: 10px"> A group of aliens.</h3>
                                    <p class="font-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                    <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                    <h3 class="d-lg-none d-xl-none" style="padding: 10px"> What are we trying to do? </h3>
                                    <h3 style="padding: 10px">Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum
                                    </p>
                                    <p class="font-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                    <h3 class="d-lg-none d-xl-none" style="padding: 10px"> What we offer? </h3>
                                    <h3 style="padding: 10px">Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                        <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Tabs Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <h3>Our site offers the <span>services</span> below</h3>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="services/games.html" target="_blank">
                        <div  class="icon-box">
                            <div class="icon"><i class="bx bx-game"></i></div>
                            <h4 class="title">Games</h4>
                            <p class="description">In this section you can try several games that give others perspectives to your financial issues</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="#" target="_blank">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-glasses"></i></div>
                            <h4 class="title">Initiatives</h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="services/recommendations.html" target="_blank">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-clipboard-data"></i></div>
                            <h4 class="title">Recommendations</h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="services/forum.html" target="_blank">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title">Forum</h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
                <h3>Meet the <span>team</span> behind the idea</h3>
            </div>

            <div class="row">

                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Basaraba Razvan</h4>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Noroc Andrei</h4>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Buzera Tiberiu</h4>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <h3><span>Contact us</span> now</h3>
            </div>

            <div class="row">
                <div class="col-lg-5 mb-lg-0 mb-4">
                    <main class="container">
                        <p class="send_mail" style="text-align: center;font-size: 30px;font-family: 'Nunito', sans-serif;">Send email:</p>
                        <form action="forms/contactform.php" method="post">
                            <ul class="errorMessages"></ul>
                            <div style="padding-bottom: 20px">
                                <i style="color: #1D6C0C" class="ri-user-line"></i>
                                <label class="send_mail" style="font-size: 20px" for="nume">Name:</label>
                                <br>
                                <input id="nume" type="text" name="name" placeholder="full name" style="width: 100%;height: 50px" required>
                            </div>
                            <div style="padding-bottom: 20px">
                                <i style="color: #1D6C0C" class="ri-mail-line"></i>
                                <label class="send_mail" style="font-size: 20px" for="mail">E-mail:</label>
                                <br>
                                <input id="mail" type="text" name="email" placeholder="your email" style="width: 100%;height: 50px" required>
                            </div>
                            <div style="padding-bottom: 20px">
                                <i style="color: #1D6C0C" class="ri-file-text-line"></i>
                                <label class="send_mail" style="font-size: 20px" for="subiect">Subject:</label>
                                <br>
                                <input id="subiect" type="text" name="subject" placeholder="subject" style="width: 100%;height: 50px" required>
                            </div>
                            <div style="padding-bottom: 20px">
                                <i style="color: #1D6C0C" class="ri-text"></i>
                                <label class="send_mail" style="font-size: 20px" for="txt">Message:</label>
                                <br>
                                <textarea id="txt" name="message" placeholder="message" style="width: 100%" required></textarea>
                            </div>
                            <div class="buttons" style="text-align: center">
                                <button class="send_mail" type="submit" name="submit" style="background: #282727;border-color: #0c4128;font-size: 20px">SEND MAIL</button>
                            </div>
                        </form>
                    </main>
                </div>
                <div class="col-lg-7" style="padding-top: 40px">
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45574.733944936364!2d26.025348695403945!3d44.44504047986557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b201eb9755ce5f%3A0xfd63661aa153893!2zUDYsIEJ1Y3VyZciZdGk!5e0!3m2!1sen!2sro!4v1615411120995!5m2!1sen!2sro" frameborder="0" allowfullscreen></iframe>
                    <div class="row mt-5 text-center">

                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Locatie:</h4>
                            <p>Bucuresti, Splaiul Independentei numarul 290</p>
                        </div>

                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>sefl@cumsafacibani.ro</p>
                        </div>

                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Numar de telefon:</h4>
                            <p>+12345678910</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Footer ======= -->
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
    </footer><!-- End Footer -->

    <?php
    //partea asta se foloseste ca atunci cand se da submit la register sa ramana pe modal
    if(!isset($_GET['signup'])) {
//                    exit();
    } else {
        $signupCheck = $_GET['signup'];
        if(!empty($signupCheck)) {
            echo '<script type="text/javascript">',
            'var registerModal = document.getElementById("registerModal");',
            ' registerModal.style.display = "block";',
            'document.getElementById("hero").classList.add("blurr");',
                'document.getElementById("tabs").classList.add("blurr");',
            'document.getElementById("services").classList.add("blurr");',
            'document.getElementById("team").classList.add("blurr");',
            'document.getElementById("contact").classList.add("blurr");',
            'document.getElementById("footer").classList.add("blurr");',
            '</script>'
            ;
        }
    }
    if(!isset($_GET['login'])) {
//                    exit();
    } else {
        $signupCheck = $_GET['login'];
        if(!empty($signupCheck)) {
            echo '<script type="text/javascript">',
            'var registerModal = document.getElementById("loginModal");',
            ' registerModal.style.display = "block";',
            'document.getElementById("hero").classList.add("blurr");',
            'document.getElementById("tabs").classList.add("blurr");',
            'document.getElementById("services").classList.add("blurr");',
            'document.getElementById("team").classList.add("blurr");',
            'document.getElementById("contact").classList.add("blurr");',
            'document.getElementById("footer").classList.add("blurr");',
            '</script>'
            ;
        }
    }
    ?>

    <!--Javascript-->
    <script src="assets/js/http_code.jquery.com_jquery-3.5.1.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.esm.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/modal.js"></script>

</body>
</html>