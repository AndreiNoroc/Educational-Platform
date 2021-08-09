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

    <?php
        $em = session('username');
    ?>

    <h2 style="text-align: center; padding:2rem">{{$topics -> title}}</h2>
    <div class="container" style="color:black;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        {{$topics->username}}:{{$topics->text}}
                        @guest
                            <div style="text-align: center; padding: 20px">
                                <p>Log in if you want to reply.</p>
                            </div>
                        @else
                            <div style="text-align: center; padding: 20px">
                                <a  href="/new-reply/{{$topics->id}}" class="btn btn-primary">Reply</a>
                            </div>
                        @endguest
                    </div>
                    <div class="card-body">
                        @foreach($replies as $reply)
                            @if($topics->id == $reply->parent_id)
                            <li class="list-group-item">
                                {{$reply->username}}:{{$reply->text}}
                                @if($em == $reply->username)
                                    <a href="/forum/{{$reply->id}}/edit-reply" class="btn btn-info btn-sm float-end m-1">Edit</a>
                                    <a href="/forum/{{$reply->id}}/delete-reply" class="btn btn-danger btn-sm float-end m-1">Delete</a>
                                @endif
                            </li>
                            @endif
                        @endforeach
                    </div>
                    <hr>
                    <a href="/forum" class="btn btn-primary">Back to topics list</a>
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
