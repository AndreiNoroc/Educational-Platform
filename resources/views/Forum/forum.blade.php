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
                    <?php
                    $em = session('username');

                    if(session()->has('username')) {
                        echo '<li><a class="nav-link scrollto active" href="profile">'.$em.'</a></li>';
                    } else {
                        echo '<li><a class="nav-link scrollto active" href="login">Authentification</a></li>';
                    }
                    ?>
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

    @if(session()->has('success'))
        <div class="alert alert-success text-center">
            {{session()->get('success')}}
        </div>
    @endif

    <!-- //* ==================== Start Forum ==================== -->
    <section>
        <div class="section-title" style="padding:3rem">
            <h2>Forum</h2>
            <h3>If <span>you</span> have any questions, write us below...</h3>
        </div>
            <div class="container" style="color: black">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-default">
                            <div class="card-header">
                                Topics
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach($topics as $topic)
                                        <li class="list-group-item">
                                            {{$topic->username}}:{{$topic->title}}
                                            <a href="/forum/ {{ $topic->id }}" class="btn btn-primary btn-sm float-end m-1">View more</a>
                                            @if($em == $topic->username)
                                                <a href="/forum/{{$topic->id}}/edit" class="btn btn-info btn-sm float-end m-1">Edit</a>
                                                <a href="/forum/{{$topic->id}}/delete" class="btn btn-danger btn-sm float-end m-1">Delete</a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                                @guest
                                    <div style="text-align: center; padding: 20px">
                                        <p>Log in if you want to add a new topic.</p>
                                    </div>
                                @else
                                    <div style="text-align: center; padding: 20px">
                                        <a  href="/new-topics" class="btn btn-primary">Add a new topic</a>
                                    </div>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
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
