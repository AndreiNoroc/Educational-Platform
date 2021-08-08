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

    <h2 style="text-align: center; padding:2rem">{{$topics -> title}}</h2>
    <div class="container" style="color:black;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <a href="/forum" class="btn">Back to topics list</a>
                    <div class="card-body">
                        {{$topics->username}}:{{$topics->text}}
                    </div>
                </div>
            </div>
        </div>
    </div>

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
